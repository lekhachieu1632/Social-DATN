<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('pageTitle')</title>
    @include("admin.partials.linkcss")
</head>
<style>
    .pull-right{
        float: right;
    }
    .pull-left{
        float: left;
    }
</style>
<body >

<div class="container-scroller">
    @include('admin.partials.header')
    <div class="container-fluid page-body-wrapper">
        @include('admin.partials.menu')
        <div class="main-panel">
            <div class="content-wrapper">
                @yield('content')
            </div>
           @include('admin.partials.footer')
        </div>
    </div>
</div>
@include("admin.partials.linkjs")
</body>

</html>
