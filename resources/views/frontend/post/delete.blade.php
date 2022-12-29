<div class="modal fade" id="deletePostModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 style="color: black">Xoá bài viết</h4>
            </div>
            {!! Form::open(['method'=> 'delete', 'name' => 'post-delete']) !!}
                <input type="text" hidden id="id-post">
                <input type="text" hidden id="id-user" value="{{ session(\App\Setting\Setting_Static::KEY.'-id') }}">
                <div class="modal-body d-flex justify-content-center align-items-center">
                    <span style="color: black" class="text-center">Bạn có chắn chắn muốn xóa bài viết này?</span>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-success delete-post">Xóa</button>
                </div>
{{--            </form>--}}

            {!! Form::close() !!}
        </div>
    </div>
</div>
