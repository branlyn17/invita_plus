<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>{{ __('messages.welcome') }}</title>
</head>
<body>
    <h1>{{ __('messages.welcome') }}</h1>
    <p>{{ __('messages.description') }}</p>

    <a href="{{ route('lang.change', ['lang' => 'es']) }}">🇪🇸 Español</a> | 
    <a href="{{ route('lang.change', ['lang' => 'en']) }}">🇬🇧 English</a>
</body>
</html>
