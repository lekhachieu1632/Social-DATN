<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LOGIN</title>
    <link rel="stylesheet" href="{{ asset('backend') }}/vendors/feather/feather.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/css/vertical-layout-light/style.css">
    <link rel="shortcut icon" href="{{ asset('backend') }}/images/favicon.png" />
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo">
                            <img src="{{ asset('backend') }}/images/logo.svg" alt="logo">
                        </div>
                        <h4>Chào mừng bạn đến với trang quản trị mạng xã hội Việt</h4>
                        <h6 class="font-weight-light">Đăng nhập để tiếp tục</h6>
                       @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
