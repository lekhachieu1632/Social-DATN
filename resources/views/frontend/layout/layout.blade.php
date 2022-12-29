<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Lib css -->
    <link rel="stylesheet"
          href="{{ asset('frontend/asset/vendors/bootstrap-5.2/css/bootstrap.min.css') }}"/>
    <link
        rel="stylesheet"
        href="{{ asset('frontend/asset/vendors/font-awesome/css/fontawesome.pro.min.css') }}"
    />

    <!-- Reset css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/asset/css/reset.css') }}"/>
    <link rel="stylesheet" href="{{ asset('frontend') }}/asset/css/index.css"/>
    <script
        type="text/javascript"
        src="{{ asset('frontend/asset/vendors/bootstrap-5.2/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

</head>

<body>
    <div class="container-fluid p-0">
        <div class="bg-color-2 d-flex">
            @include('frontend.partials.sidebarLeft')

            @yield('contentLayout')
        </div>
    </div>

    <script src="{{ asset('frontend/asset/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/asset/vendors/bootstrap-5.2/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/asset/js/view.js') }}"></script>
    <script src={{ asset('frontend/asset/vendors/uploader/image-uploader.min.js') }}></script>
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous">
    </script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous">
    </script>

    <script src="{{ asset('frontend/js/post.js') }}"></script>
    <script src="{{ asset('frontend/js/comment.js') }}"></script>

    @yield('scripts')

</body>
</html>
