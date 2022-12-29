@extends("admin.layouts.main")
@section("content")
@php
    $pagtitle = 'Thêm tài khoản quản trị';
@endphp
@section('pageTitle', $pagtitle)

<section class="content ">
    <div class="row">
        <div class="col-md-12 mt-2">
            <div class="card card-secondary">

                <form method="post">
                    {{ csrf_field() }}
                    <div class="card-body row">
                        @if(isset($data) && $data)
                            @include('admin.useradmin.partials.form',['data' => $data])
                        @else
                            @include('admin.useradmin.partials.form')
                        @endif
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Tạo tài khoản</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection
