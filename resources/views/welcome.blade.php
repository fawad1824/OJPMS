<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OJPMS</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        * {
            padding: 0;
            font-family: 'CloisterBlack';
            margin: 0;
        }

        .apply-bg {
            background: #6b6b6b;
            background-size: cover;
            background-repeat: no-repeat;
        }

        select#select1 {
            height: 70px;
            /* width: 100%; */
            color: #777777;
            font-size: 18px;
            font-weight: 400;
            padding: 9px 33px 9px 32px;
            border: none;
            border-radius: 0px;
            position: relative;
        }
    </style>
@include('Header')
</head>

<body>
    <div id="app">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    @vite('resources/js/app.js')
    @include('Footer')
</body>
</html>
