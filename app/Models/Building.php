<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MatanYadaev\EloquentSpatial\Objects\Point;
use MatanYadaev\EloquentSpatial\Traits\HasSpatial;
use Rutorika\Sortable\SortableTrait;

class Building extends Model
{
    use HasFactory;
    use SortableTrait;
    use HasSpatial;

    protected $fillable = [
        'title',
        'short_description',
        'long_description',
        'bg_image',
        'position',
        'location',
    ];

    protected $casts = [
        'location' => Point::class,
        'short_description' => 'array',
        'long_description' => 'array',
    ];

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    public static function setNewOrder(array $order)
    {
        foreach ($order as $index => $id) {
            $building = self::find($id);
            if ($building) {
                $building->update(['position' => $index + 1]);
            }
        }
    }

    public function setShortDescriptionAttribute($value)
    {
        // Декодируем JSON в массив
        $decodedValue = json_decode($value, true);

        // Если декодирование прошло успешно, то объединяем с дефолтными значениями
        if (is_array($decodedValue)) {
            $this->attributes['short_description'] = json_encode(array_merge(['en' => '', 'ru' => ''], $decodedValue));
        } else {
            // В случае, если $value не является корректным JSON, присваиваем пустые значения
            $this->attributes['short_description'] = json_encode(['en' => '', 'ru' => '']);
        }
    }

    public function setLongDescriptionAttribute($value)
    {
        // Декодируем JSON в массив
        $decodedValue = json_decode($value, true);

        // Если декодирование прошло успешно, то объединяем с дефолтными значениями
        if (is_array($decodedValue)) {
            $this->attributes['long_description'] = json_encode(array_merge(['en' => '', 'ru' => ''], $decodedValue));
        } else {
            // В случае, если $value не является корректным JSON, присваиваем пустые значения
            $this->attributes['long_description'] = json_encode(['en' => '', 'ru' => '']);
        }
    }

    public function getShortDescriptionAttribute($value)
    {
        // Декодируем JSON и возвращаем в виде массива, если данные отсутствуют, возвращаем пустой массив
        return json_decode($value, true) ?: ['en' => '', 'ru' => ''];
    }

    public function getLongDescriptionAttribute($value)
    {
        // Декодируем JSON и возвращаем в виде массива, если данные отсутствуют, возвращаем пустой массив
        return json_decode($value, true) ?: ['en' => '', 'ru' => ''];
    }

}
