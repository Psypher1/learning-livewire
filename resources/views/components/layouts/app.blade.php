<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Learn Livewire' }}</title>
    <link rel="stylesheet" href="/app.css">
</head>

<body>
    <nav>
        <a href="/" @class(['current' => request()->is('/')])>Todos</a>
        <a href="/counter" @class(['current' => request()->is('counter')])>Counter</a>
    </nav>
    <main>
        {{ $slot }}
    </main>
</body>

</html>
