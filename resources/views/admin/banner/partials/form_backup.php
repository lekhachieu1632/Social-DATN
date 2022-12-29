<?php

?>
<div class="form-group col-md-6">
    <label for="username_useradmin">Tên đăng nhập</label>
    <input type="text" class="form-control" id="username_useradmin" placeholder="Mời nhập tên đăng nhập"
           autocomplete="off" name="username"
           value="{{isset($data['username']) && $data['username'] ? $data['username'] : ""}} " autocomplete="off">
    @if (isset($error) && $error['username']))
    <span class="text-danger">{{ $error['username'] }}</span>
    @endif
</div>
<div class="form-group col-md-6">
    <label for="password_useradmin">Mật khẩu</label>
    <input type="password" class="form-control" id="password_useradmin" placeholder="Nhập mật khẩu" name="password"
           value="{{isset($data['password']) && $data['password'] ? $data['password'] : ""}}" autocomplete="off">
    @if (isset($error) && $error['password'])
    <span class="text-danger">{{ $error['password'] }}</span>
    @endif
</div>

<div class="form-group col-md-6">
    <label for="re_password_admin">Nhập lại mật khẩu</label>
    <input type="password" class="form-control" id="re_password_admin" placeholder="Nhập lại mật khẩu"
           name="re_password">
    @if (isset($error) && $error['re_password']))
    <span class="text-danger">{{ $error['re_password'] }}</span>
    @endif
</div>

<div class="form-group col-md-6">
    <label for="email_useradmin">Email</label>
    <input type="email" class="form-control" id="email_useradmin" placeholder="Nhập email vào" name="email"
           value="{{isset($data['email']) && $data['email'] ? $data['email'] : old('email') }}" autocomplete="off">
    @if (isset($error) && $error['email'])
    <span class="text-danger">{{ $error['email'] }}</span>
    @endif
</div>
<div class="form-group col-md-6">
    <label for="phone_useradmin">Số điện thoại</label>
    <input type="text" class="form-control" id="phone_useradmin" placeholder="Nhập số điện thoại" name="phone"
           value="{{isset($data['phone']) && $data['phone'] ? $data['phone'] : ""}}" autocomplete="off">
    @if (isset($error) && $error['phone'])
    <span class="text-danger">{{ $error['phone'] }}</span>
    @endif
</div>

<div class="form-group col-md-6">
    <label for="exampleInputPassword1">Trạng thái</label>
    <select class="form-control" name="status">
        <option value=""> Chọn trạng thái hoạt động</option>
        @foreach(\App\Setting\Setting_Dynamic::GetStatus() as $key => $status )
        <option value=" {{ $key }}"> {{ $status }}</option>
        @endforeach
    </select>
</div>
<div class="form-group col-md-6">
    <label for="exampleInputPassword1">Admin type</label>
    <select class="form-control" name="type" value="{{isset($data['type']) && $data['type'] ? $data['type'] : ""}}">
    <option value="">Chọn loại(Vai trò)</option>
    @foreach(\App\Setting\Setting_Dynamic::GetTypeAdmin() as $key => $type )
    <option value=" {{ $key }}"> {{ $type }}</option>
    @endforeach
    </select>
</div>
