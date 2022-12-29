<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Document</title>
    @include("admin.partials.linkcss")
    @include('frontend.partials.linkcss')
    <link rel="stylesheet" href="{{ asset('frontend') }}/asset/css/index.css">
</head>

<body>
@include("frontend.partials.header")
<div class="container-fluid">
    @include("frontend.partials.profileHeader")
    @yield('content')

</div>
@include('frontend.partials.linkScript')
<script src="{{ asset('frontend/js/post.js') }}"></script>
<script src="https://kit.fontawesome.com/feffb8661a.js" crossorigin="anonymous"></script>
</body>

</html>
