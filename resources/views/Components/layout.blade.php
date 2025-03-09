<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact Page</title>

    </head>
    <body >
        <nav>
            <a href="/">home</a>
            <a href="/about">about</a>
            <a href="/contact">contact</a>
        </nav>
        {{$slot}}
    </body>
</html>
