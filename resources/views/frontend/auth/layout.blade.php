<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('frontend.partials.linkcss')
    <link rel="stylesheet" href="{{ asset('frontend') }}/asset/css/login.css">
</head>

<body>
<div class="container-fluid">
    <section class="forms-section">
        <h1 class="section-title">Chào mừng </h1>
        <div class="forms">
            @yield('content')
        </div>
    </section>
</div>
</body>

</html>
