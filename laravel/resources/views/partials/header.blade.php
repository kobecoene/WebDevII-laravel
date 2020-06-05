<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/dc545c19ce.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Web Development II</title>
</head>

<body>

    <header class="header">
        <a href="{{ route('home') }}">
            <div class="headerLogo">
                <img src="{{asset('images/messenger_logo.png')}}" alt="logo">
                <p>Messenger</p>
            </div>
        </a>

        <nav class="header-right">
            {{-- de Nav::isRoute komt van https://www.youtube.com/watch?v=p8wFTRCwak0 --}}
            <a href="{{ route('home') }}" class="{{ Nav::isRoute('home') }}">Home</a>
            <a href="{{ route('about') }}" class="{{ Nav::isRoute('about') }}">About</a>
            <a href="{{ route('blog') }}" class="{{ Nav::isRoute('blog') }}">Blog</a>
            <a href="{{ route('contact') }}" class="{{ Nav::isRoute('contact') }}">Contact</a>
        </nav>
    </header>

</body>

</html>
