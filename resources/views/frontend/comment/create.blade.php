<div class="comment__form d-flex align-items-center pb-4">
    <span class="avatarUser-30 me-2">
        <img class="img-cover" src="{{ asset('static/image/user/'.$post->userInfo->avatar) }}" alt="" />
    </span>
    {!! Form::open(['route' => 'comment.store', 'name' => 'confirm_store_comment', 'autocomplete' => 'off', 'enctype' => 'multipart/form-data', 'class' => 'flex-grow-1 position-relative']) !!}
        <input type="hidden" name="post_id" value="{{ $post->id }}">
        <div class="file-upload">
            <div class="flex">
                <input name="content_comment" type="text" placeholder="Nhập bình luận" class="input-comment-v1 w-100 p-3 pe-5">
                <div class="image-upload-wrap">
                    <input name="image_comment" class="file-upload-input" type='file' onchange="readURL(this);"
                           accept="image/*" />
                    <div class="drag-text">
                        <i class="fal fa-image"></i>
                    </div>
                </div>
                <button class="btn-comment-v1 border-radius-50 text-color-6" type="submit"><i class="fal fa-paper-plane"></i></button>
            </div>

            <div class="file-upload-content">
                <img class="file-upload-image" src="#" alt="your image" />
                <div class="image-title-wrap">
                    <button type="button" onclick="removeUpload()" class="remove-image">
                        <i class="far fa-trash-alt"></i>
                    </button>
                </div>
            </div>
        </div>
    {!! Form::close() !!}
</div>
