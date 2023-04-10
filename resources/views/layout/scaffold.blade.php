<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@stack('title') | Halda </title>
    
</head>
<body>
    @include('partial.style')
    @include('partial.header')
    @yield('content')
    @include('partial.footer')
    @include('partial.script')
</body>
</html>