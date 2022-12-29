<div id="formEditComment-{{ $comment->id }}" class="comment__item_1 d-flex hidden">
    <span class="avatarUser-30 me-2">
        <img class="img-cover" src="{{ asset('static/image/user/'.$comment->user->avatar) }}" alt="" />
    </span>
    <div  class="comment_item">
        {!! Form::open(['method'=> 'put', 'url' => '/profile/comment/update/'. $comment->id, 'name' => 'comment-update-'. $comment->id]) !!}
            <div>
                <input type="hidden" id="id-comment-{{ $comment->id }}">
                <input name="content_comment" class="input-c2" id="edit-comment-content-{{ $comment->id }}" type="text" placeholder="Bình luận">
                <div class="">
                    <div class="upload-content-{{ $comment->id }}">
                        <div name="image_comment" id="edit-comment-image-{{ $comment->id }}" value=""></div>
                        <div class="image-title-wrap">
                            <button type="button" onclick="removeimgCommet()" class="remove-image">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </div>
                    </div>
                    <div class="upload-wrap">
                        <input type="text" name="edit-comment-image" value="{{ $comment->image }}" hidden id="edit-image-comment-{{ $comment->id }}">
                        <input name="image_comment" id="input-image-comment-edit-{{ $comment->id }}" class="input_cmt image_comment" type="file" onchange="readURLcommet(this,{{ $comment->id }});"
                               accept="image/*" />
                        <div class="drag-text">
                            <i class="fal fa-image"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-groud">
                <a class="Cancel btn-action close-form-edit-comment" data-id="{{ $comment->id }}">Huỷ</a>
                <button type="submit" class="btn-action update-comment" data-id="{{ $comment->id }}">Đăng</button>
            </div>
        {!! Form::close() !!}
    </div>
</div>
