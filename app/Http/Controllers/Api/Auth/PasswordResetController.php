<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ResetPasswordMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class PasswordResetController extends Controller
{
    public function requestPasswordReset(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        DB::table('password_resets')->where('email', $request->get('email'))->delete();

        $token = random_int(100000, 999999);

        DB::table('password_resets')->insert([
            'email' => $request->get('email'),
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);

        Mail::to($request->get('email'))->send(new ResetPasswordMail($token));

        return response()->json(['message' => 'Password reset code has been sent'], 200);
    }

    public function verifyCode(Request $request)
    {
        $email = $request->email;

        if (!$email) {
            return response()->json(['message' => 'Email is required'], 400);
        }

        $request->validate([
            'code' => 'required|numeric|digits:6',
        ]);

        $passwordReset = DB::table('password_resets')
            ->where('email', $email)
            ->where('token', $request->get('code'))
            ->first();

        if (!$passwordReset) {
            return response()->json(['message' => 'Invalid code'], 400);
        }

        if (Carbon::parse($passwordReset->created_at)->addMinutes(30)->isPast()) {
            DB::table('password_resets')->where('email', $email)->delete();
            return response()->json(['message' => 'Code has expired'], 400);
        }

        return response()->json(['message' => 'Code verified'], 200);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'token' => 'required|string|size:6',
            'password' => 'required|string|min:4|confirmed',
        ]);

        $passwordReset = DB::table('password_resets')
            ->where('email', $request->get('email'))
            ->where('token', $request->get('token'))
            ->first();

        if (!$passwordReset) {
            return response()->json(['message' => 'Invalid code'], 400);
        }

        $user = User::query()->where('email', $request->get('email'))->first();

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $user->password = bcrypt($request->get('password'));
        $user->save();

        DB::table('password_resets')->where('email', $request->get('email'))->delete();

        return response()->json(['message' => 'Password has been successfully reset'], 200);
    }
}
