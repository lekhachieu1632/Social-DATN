<?php
?>
<div class="form-group col-md-6">
    <label for="username_useradmin">Tên đăng nhập</label>
    <input type="text" class="form-control" id="username_useradmin" placeholder="Mời nhập tên đăng nhập" autocomplete="off" name="username" value="{{isset($data['username']) && $data['username'] ? $data['username'] : old('username')}}  " autocomplete="off">
    @error('username')
    <span class="text-danger">{{ $message  }}</span>
    @enderror

</div>
@if(isset($data) && $data['id'])

@else
    <div class="form-group col-md-6">
        <label for="password_useradmin">Mật khẩu</label>
        <input type="password" class="form-control" id="password_useradmin" placeholder="Nhập mật khẩu" name="password"  autocomplete="off">
        @error('password')
        <span class="text-danger">{{ $message  }}</span>
        @enderror
    </div>

    <div class="form-group col-md-6">
        <label for="re_password_admin">Nhập lại mật khẩu</label>
        <input type="password" class="form-control" id="re_password_admin" placeholder="Nhập lại mật khẩu" name="re_password">
        @error('re_password')
        <span class="text-danger">{{ $message  }}</span>
        @enderror
    </div>
@endif
<div class="form-group col-md-6">
    <label for="email_useradmin">Email</label>
    <input type="email" class="form-control" id="email_useradmin" placeholder="Nhập email vào" name="email" value="{{isset($data['email']) && $data['email'] ? $data['email'] : old('email') }}" autocomplete="off">
    @error('email')
    <span class="text-danger">{{ $message  }}</span>
    @enderror
</div>
<div class="form-group col-md-6">
    <label for="phone_useradmin">Số điện thoại</label>
    <input type="text" class="form-control" id="phone_useradmin" placeholder="Nhập số điện thoại"  name="phone" value="{{isset($data['phone']) && $data['phone'] ? $data['phone'] : old('phone')}}" autocomplete="off">
    @error('phone')
    <span class="text-danger">{{ $message  }}</span>
    @enderror
</div>

<div class="form-group col-md-6" >
    <label for="exampleInputPassword1">Trạng thái</label>
    <select class="form-control" name="status" >
        @foreach(\App\Setting\Setting_Dynamic::GetStatus() as $key => $status )
            <option value="{{$key}}" {{ old('status') == $key  ? "selected" : "" }}>  {{ $status }}   </option>
        @endforeach
    </select>
</div>

<div class="form-group col-md-6">
    <label for="exampleInputPassword1">Admin type</label>
    <select class="form-control" name="type" >
        <option value="">Chọn loại(Vai trò)</option>
        @foreach(\App\Setting\Setting_Dynamic::GetTypeAdmin() as $key => $type )
            <option value=" {{$key }}" {{ (isset($data['type']) && $data['type'] ==$key? "selected": (old('type') ==$key ? "selected" : ""))}}>  {{ $type }}   </option>
        @endforeach
    </select>
</div>
