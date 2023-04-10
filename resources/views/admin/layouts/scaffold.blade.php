<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@stack('title') | Halda</title>
    @stack('styles')
    @include('admin.partial.style')

</head>
<body>
    @include('admin.partial.header')
    @include('admin.partial.sidebar')
    @yield('content')
    @include('admin.partial.footer')
    @include('admin.partial.script')
    @stack('scripts')
</body> 
</html>  