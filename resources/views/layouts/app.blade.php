<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href='/css/app.css'>
    <title>{{ $title }} | {{ $title2 }}</title>
    {{ $style }}
</head>

<body>
    <x-navbar></x-navbar>
    <h1>{{ $slot }}</h1>
</body>
<script href='/js/app.js'></script>

</html>