<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <div class="logo-wrapper">
            <!--                <a class="logo" href="/"><h1 style="font-weight: 400; font-size: 20px; font-family: 'system-ui';margin-bottom: 0;">INVEST ARMENIA</h1></a>-->
            <a class="logo" href="/"><img src="./img/logoo.svg?3" class="logo"
                                          style="max-width: 235px; width: 100%"/></a>
        </div>
        <!-- Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>
        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                       style="font-size: 16px" href="/">
                        {{ __('messages.Главная_страница') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                       style="font-size: 16px" href="{{ route('contact') }}">
                        {{ __('messages.Обратная_Связь') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('map') ? 'active' : '' }}"
                       style="font-size: 16px" href="{{ route('map') }}">
                        {{ __('messages.Карта_') }}
                    </a>
                </li>
                <li class="nav-item dropdown">
                    @php ($languages = ['en' => 'English', 'ru' => 'Русский'])
                    <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 16px;">
                        {{ strtoupper(app()->getLocale()) }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                        @foreach ($languages as $langCode => $language)
                            <li>
                                <a class="dropdown-item" href="{{ route('lang.change', ['lang' => $langCode]) }}">
                                    {{ $language }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
