<div class="comment__up flex-stretch">
    <div class="avatar_small">
        <img src="{{ asset('static/image/avatar.jpg') }}" alt="">
    </div>
    {!! Form::open(['route' => 'comment.store', 'name' => 'confirm_store_comment', 'autocomplete' => 'off', 'enctype' => 'multipart/form-data']) !!}
    <input type="hidden" name="post_id" value="{{ $post->id }}">
    <div class="file-upload">
            <div class="flex">
                <input name="content_comment" type="text" placeholder="Nhập bình luận" class="input-comment">
                <div class="image-upload-wrap">
                    <input name="image_comment" class="file-upload-input" type='file' onchange="readURL(this);"
                           accept="image/*" />
                    <div class="drag-text">
                        <i class="fal fa-image"></i>
                    </div>
                </div>
                <button class="submit_cm1" type="submit"><i class="fal fa-paper-plane"></i></button>
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
