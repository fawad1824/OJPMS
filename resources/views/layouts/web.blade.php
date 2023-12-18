<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    @include('website.Global.Header')
</head>

<body>

    @include('layouts.website.Header')
    <main>
        @yield('content')

    </main>
  @include('layouts.website.Footer')

    <!-- JS here -->
    @include('website.Global.Footer')

</body>

</html>
