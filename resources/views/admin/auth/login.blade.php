@extends('admin.layouts.login')
@section('content')
    <form class="pt-3" method="POST" action="{{ route('login-request-admin')  }}">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text"  name="username" class="form-control form-control-lg" placeholder="Tên đăng nhập">
            @if ($errors->has('username'))
                <span class="text-danger">{{ $errors->first('username') }}</span>
            @endif
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-lg"  name="password"  placeholder="Mật khẩu">
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <div class="form-group">
            @if (Session::has('error'))
                <h5 class="text-danger" style="text-align: center; margin-bottom:15px; ">{{ Session::get('error')}}</h5>
            @endif
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >Đăng nhập</button>
        </div>

    </form>
@endsection
