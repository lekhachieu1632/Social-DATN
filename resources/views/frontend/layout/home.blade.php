<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('admin.partials.linkcss')
    @include('frontend.partials.linkcss')
    <link rel="stylesheet" href="{{ asset('frontend') }}/asset/css/index.css">
    <style>
        .pull-right {
            float: right;
        }

        .pull-left {
            float: left;
        }
    </style>
</head>

<body>
    <div class="home">
        <header>
            @include('frontend.partials.header')
        </header>
        <main>
            <div class="main">
                @include('frontend.sidebar.sideBarOption')
                @yield('content')
                @include('frontend.sidebar.sideBarChat')
            </div>
        </main>
        <footer>
        </footer>
    </div>

    @include('frontend.partials.linkScript')
    <script src="{{ asset('frontend/js/post.js') }}"></script>
    <script src="{{ asset('https://js.pusher.com/7.2/pusher.min.js') }}"></script>
</body>

</html>
