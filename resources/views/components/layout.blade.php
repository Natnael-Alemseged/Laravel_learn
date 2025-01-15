<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home Page</title>
</head>

<body>
    {{-- <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contacts">Contacts</a>
    </nav> --}}

    <x-nav_bar>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contacts">Contacts</a>
    </x-nav_bar>

    {{ $slot }}
</body>

</html>
