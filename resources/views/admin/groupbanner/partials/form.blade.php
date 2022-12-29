<?php
?>
<div class="form-group col-md-6">
    <label for="gr_banner_name">Tên nhóm banner</label>
    <input type="text" class="form-control" id="gr_banner_name" placeholder="Mời nhập tên nhóm banner" autocomplete="off" name="name" value="{{isset($data['name']) && $data['name'] ? $data['name'] : old('name')}}" autocomplete="off">
    @error('name')
    <span class="text-danger">{{ $message  }}</span>
    @enderror

</div>
<div class="form-group col-md-6">
    <label for="gr_banner_des">Mô tả chi tiết</label>
    <input type="text" class="form-control" id="gr_banner_des" placeholder="Nhập mô tả chi tiết" name="description" value="{{isset($data['description']) && $data['description'] ? $data['description'] : old('description') }}" autocomplete="off">
    @error('description')
    <span class="text-danger">{{ $message  }}</span>
    @enderror
</div>

