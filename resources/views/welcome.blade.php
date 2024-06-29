<!DOCTYPE html>
<html>
<head>
    <title>{{ __('text.title') }}</title>
</head>
<body>
<h1>{{ __('text.welcome') }}</h1>
<p>{{ __('text.description') }}</p>

<a href="{{ route('changeLang', ['lang' => 'en']) }}">English</a>
<a href="{{ route('changeLang', ['lang' => 'th']) }}">ภาษาไทย</a>
<a href="{{ route('changeLang', ['lang' => 'pt']) }}">pt</a>
</body>
</html>
