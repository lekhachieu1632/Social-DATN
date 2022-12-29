<div class="modal fade" id="deleteCommentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 style="color: black">Xoá bình luận</h4>
            </div>
            {!! Form::open(['method'=> 'delete', 'name' => 'confirm_store_comment', 'id' => 'form-delete-comment']) !!}
            <div class="modal-body d-flex justify-content-center align-items-center">
                <span style="color: black" class="text-center">Bạn có chắn chắn muốn xóa bình luận này?</span>
                <input type="hidden" id="delete_comment_id" name="id">
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-success">Xóa</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
