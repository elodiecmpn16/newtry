<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('includes.css')
    <title>Extranet Tremblaye</title>
</head>
<body>
@include('includes.header')
<div class="container">
    <div class="row">
        <div class="col-lg-12">

            @yield('content')

        </div>
    </div>
</div>
@include('includes.footer')
@include('includes.script')


</body>
</html>
