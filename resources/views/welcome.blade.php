<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        @vite(['resources/js/app.js']) 
    </head>
    <body>
    <h1>Our categories:</h1>
    <ul class="list-group">
        @foreach ($categories as $category)
                <li class="list-group-item">{{$category}}</li>
        @endforeach
    </ul>
</div>
    </body>
</html>
