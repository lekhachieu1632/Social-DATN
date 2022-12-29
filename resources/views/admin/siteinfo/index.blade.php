@extends('admin.layouts.main')
@section('content')
@php
    $pagtitle = 'Thông tin Website';
@endphp
@section('pageTitle', $pagtitle)
    <section class="content ">
        <div class="row">
            <div class="col-md-12 mt-2">
                <div class="card card-secondary">
                    <form method="post" enctype="multipart/form-data" action="{{route('site-info-update')}}">
                        {{ csrf_field() }}
                        <div class="card-body row">
                            <div class="form-group col-md-6">
                                <label for="site_info_name">Tên website</label>
                                <input type="text" class="form-control" id="site_info_name" placeholder="Mời tên Website" autocomplete="off" name="name" value="{{isset($data['name']) && $data['name'] ? $data['name'] : old('name')}}" >
                                @error('name')
                                <span class="text-danger">{{ $message  }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="site_info_title">Tiêu đề</label>
                                <input type="text" class="form-control" id="site_info_title" placeholder="Nhập tiêu đề" name="title"  autocomplete="off" value="{{isset($data['title']) && $data['title'] ? $data['title'] : old('title')}}">
                                @error('title')
                                <span class="text-danger">{{ $message  }}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="site_info_content">Content</label>
                                <input type="text" class="form-control" id="site_info_content" placeholder="Nhập content" name="content" value="{{isset($data['content']) && $data['content'] ? $data['content'] : old('content')}}" autocomplete="off">
                                @error('content')
                                <span class="text-danger">{{ $message  }}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="site_info_desc">Thông tin chi tiết</label>
                                <textarea class="form-control" id="site_info_desc" placeholder="Nhập mô tả chi tiết" name="description"  autocomplete="off">{{ isset($data['description']) && $data['description'] ? $data['description'] : old('description') }}</textarea>
                                @error('description')
                                <span class="text-danger">{{ $message  }}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="site_info_content">Coppyright</label>
                                <input type="text" class="form-control" id="site_info_content" placeholder="Nhập coppyright" name="coppyright" value="{{isset($data['coppyright']) && $data['coppyright'] ? $data['coppyright'] : old('coppyright')}}" autocomplete="off">
                                @error('coppyright')
                                <span class="text-danger">{{ $message  }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <label for="site_info_avatar " class="col-md-12">Ảnh đại diện</label>
                                @if(isset($data['avatar'])&& $data['avatar'] || old('avatar'))
                                <div class="col-md-6">
                                    <div class="position-relative">
                                        <img src="{{ asset( \App\Setting\Setting_Dynamic::getImage($data['path'],$data['avatar'])) }}" alt="{{$data['avatar'] }}" class="img-fluid">
                                    </div>
                                </div>
                                @endif
                                <div class="input-group col-md-6">
                                    <div class="custom-file">
                                        <input type="file" id="site_info_avatar" name="avatar">
                                    </div>
                                </div>
                                @error('avatar')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <label for="site_info_avatar" class="col-md-12">Favicon</label>
                                @if(isset($data['favicon'])&& $data['favicon'] || old('favicon'))
                                <div class="col-md-6">
                                    <div class="position-relative">
                                        <img src="{{ asset( \App\Setting\Setting_Dynamic::getImage($data['path'],$data['favicon'])) }}" alt="{{$data['favicon'] }}" class="img-fluid">
                                    </div>
                                </div>
                                @endif
                                <div class="input-group col-md-6">
                                    <div class="custom-file">
                                        <input type="file"  id="site_info_avatar" name="favicon">
                                    </div>
                                </div>
                            </div>
                            @error('favicon')
                            <span class="text-danger">{{ $message  }}</span>
                            @enderror
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Cập nhật thông tin</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
