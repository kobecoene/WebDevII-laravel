<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Development II</title>
</head>
<body>

    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    @yield('content')

    <footer>
        &copy; Facebook 2020
        <li><a href="/donation">Donation</a></li>
        <li><a href="/newsletter">Newsletter</a></li>
        <li><a href="/privacy">Privacy</a></li>
    </footer>

</body>
</html>