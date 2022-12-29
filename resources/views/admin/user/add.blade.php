@extends("admin.layouts.main")
@section("content")
    @php
        $pagtitle = 'Thêm người dùng';
    @endphp
@section('pageTitle', $pagtitle)

<section class="content">
    <div class="row">
        <div class="col-md-12 mt-2">
            <div class="card card-secondary">
                <form method="post" action="{{ route('user-create')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="card-body row">
                        <div class="form-group col-md-6">
                            <label for="username_useradmin">Tên đăng nhập</label>
                            <input type="text" class="form-control" id="username_useradmin"
                                   placeholder="Mời nhập tên đăng nhập" autocomplete="off" name="username"
                                   value="{{isset($data['username']) && $data['username'] ? $data['username'] : old('username')}}"
                                   autocomplete="off">
                            @error('username')
                            <span class="text-danger">{{ $message  }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="username_useradmin">Tên đầy đủ</label>
                            <input type="text" class="form-control" id="userinfo_fullname"
                                   placeholder="Họ và tên" autocomplete="off" name="fullname"
                                   value="{{isset($data_info['fullname']) && $data_info['fullname'] ? $data_info['fullname'] : old('fullname')}}"
                                   autocomplete="off">
                            @error('fullname')
                            <span class="text-danger">{{ $message  }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="username_useradmin">Tên viết tắt</label>
                            <input type="text" class="form-control" id="userinfo_subname"
                                   placeholder="Tên viết tắt" autocomplete="off" name="subname"
                                   value="{{isset($data_info['subname']) && $data_info['subname'] ? $data_info['subname'] : old('subname')}}"
                                   autocomplete="off">
                            @error('subname')
                            <span class="text-danger">{{ $message  }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="username_useradmin">Ngày sinh</label>
                            <input type="text" class="form-control" id="userinfo_birthday"
                                   placeholder="Ngày sinh" autocomplete="off" name="birthday"
                                   value="{{isset($data_info['birthday']) && $data_info['birthday'] ? $data_info['birthday'] : old('birthday')}}"
                                   autocomplete="off">
                            @error('birthday')
                            <span class="text-danger">{{ $message  }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="username_useradmin">Địa chỉ hiện tại</label>
                            <input type="text" class="form-control" id="userinfo_address"
                                   placeholder="Địa chỉ" autocomplete="off" name="address"
                                   value="{{isset($data_info['address']) && $data_info['address'] ? $data_info['address'] : old('address')}}" autocomplete="off">
                            @error('address')
                            <span class="text-danger">{{ $message  }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="username_useradmin">Quê quán</label>
                            <input type="text" class="form-control" id="userinfo_hometown"
                                   placeholder="Quê quán" autocomplete="off" name="hometown"
                                   value="{{isset($data_info['hometown']) && $data_info['hometown'] ? $data_info['hometown'] : old('hometown')}}"
                                   autocomplete="off">
                            @error('hometown')
                            <span class="text-danger">{{ $message  }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password_useradmin">Mật khẩu</label>
                            <input type="password" class="form-control" id="password_useradmin"
                                   placeholder="Nhập mật khẩu" name="password" autocomplete="off">
                            @error('password')
                            <span class="text-danger">{{ $message  }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="re_password_admin">Nhập lại mật khẩu</label>
                            <input type="password" class="form-control" id="re_password_admin"
                                   placeholder="Nhập lại mật khẩu" name="re_password">
                            @error('re_password')
                            <span class="text-danger">{{ $message  }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="email_useradmin">Email</label>
                            <input type="email" class="form-control" id="email_useradmin" placeholder="Nhập email vào"
                                   name="email"
                                   value="{{isset($data['email']) && $data['email'] ? $data['email'] : old('email') }}"
                                   autocomplete="off">
                            @error('email')
                            <span class="text-danger">{{ $message  }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone_useradmin">Số điện thoại</label>
                            <input type="text" class="form-control" id="phone_useradmin"
                                   placeholder="Nhập số điện thoại" name="phone"
                                   value="{{isset($data['phone']) && $data['phone'] ? $data['phone'] : old('phone')}}"
                                   autocomplete="off">
                            @error('phone')
                            <span class="text-danger">{{ $message  }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone_useradmin">Giới thiệu bản thân</label>
                            <textarea name="introduce"  class="form-control" placeholder="Hãy giới thiệu bản thân" autocomplete="off">{{old('introduce')}}</textarea>
                            @error('introduce')
                            <span class="text-danger">{{ $message  }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label >Tiểu sử</label>
                            <textarea name="story"  class="form-control" placeholder="Hãy viết tiểu sửa bản thân vào đây" autocomplete="off">{{old('story')}}</textarea>
                            @error('story')
                            <span class="text-danger">{{ $message  }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Tình trạng hôn nhân</label>
                            <select class="form-control" name="relationship">
                                @foreach(\App\Setting\Setting_Dynamic::GetRelationship() as $key => $relationship)
                                    <option
                                        value="{{$key}}" {{ old('relationship') == $key  ? "selected" : "" }}>  {{ $relationship }}   </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Trạng thái</label>
                            <select class="form-control" name="status">
                                @foreach(\App\Setting\Setting_Dynamic::GetStatus() as $key => $status)
                                    <option
                                        value="{{$key}}" {{ old('status') == $key  ? "selected" : "" }}>  {{ $status }}   </option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Loại</label>
                            <select class="form-control" name="type">
                                <option value="">Chọn loại(Vai trò)</option>
                                @foreach(\App\Setting\Setting_Dynamic::GetType() as $key => $type )
                                    <option
                                        value="{{$key }}" {{ old('type') ==$key ? "selected" : ""}}>  {{ $type }}   </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="site_info_avatar" class="col-md-12">Ảnh đại diện</label>
                            <div class="input-group col-md-6">
                                <div class="custom-file">
                                    <input type="file" id="user-avatar" name="avatar">
                                </div>
                            </div>
                            @error('avatar')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="site_info_avatar" class="col-md-12">Ảnh bìa</label>
                            <div class="input-group col-md-6">
                                <div class="custom-file">
                                    <input type="file" id="user-avatar" name="image_cover">
                                </div>
                            </div>
                            @error('image_cover')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
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
