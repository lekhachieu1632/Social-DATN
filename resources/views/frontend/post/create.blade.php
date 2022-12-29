<div class="postUp text-center ">
    <a class="btn btn-primary avatarUser-56  mb-3 me-auto ms-auto"
       id="open-create-post-modal"
       data-bs-toggle="modal"
       data-bs-target="#addPostModal"
{{--       data-bs-id-user="{{ session(\App\Setting\Setting_Static::KEY.'-id') }}">--}}

        <span class="bg-color-9  d-flex align-items-center justify-content-center">
            <span class="fs-35 fw-800 text-color-3">+</span>
        </span>
    </a>
    <p class="fs-14">Đăng bài</p>
</div>

<div class="modal fade" id="addPostModal" tabindex="-1" data-keyboard="false" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="infoUser">
{{--                {!! Form::open(['name' => 'confirm_store_post','autocomplete' => 'off', 'enctype' => 'multipart/form-data', 'id' => 'form-create-post']) !!}--}}
            <form action="{{ asset(route('post.store', session(\App\Setting\Setting_Static::KEY.'-id'))) }}" name="confirm_store_post">
                <div class="p-3 bg-white shadow mb-3 create-post p-3 rounded" style="display: block">
                        <input type="text" hidden name="id_location"
                               value="{{ $user->id ?? session(\App\Setting\Setting_Static::KEY.'-id')}}">
                        <div class="create-post__wrapper">
                            <div class="create-post__header">
                                <div class="create-post__header-user-info">
                                    <a class="gapo-avatar gapo-avatar--40 mr-2" href="/page/56840241"
                                        style="
                                            background-image: url('{{ asset('static/image/avatar.jpg') }}');
                                        "></a>
                                    <div class="create-post__header-user-privacy">
                                        <span class="username">userName</span><br />
                                    </div>
                                </div>
                                <a href="#/" class="create-post__header-close-icon" id="close-modal-post-create" data-dismiss="modal"><i class="fal fa-times"></i></a>
                            </div>
                            <div class="create-post__box__input" style="background-image: url('')">
                                <div id="textarea-create" name="content" class="create-post__input w-100 border-0"
                                    style="overflow: auto">
                                    <div>
                                        <div class="DraftEditor-root DraftEditor-alignLeft">
                                            <div class="public-DraftEditorPlaceholder-root">
                                                <textarea
                                                    style="white-space: pre-wrap;"
                                                    class="public-DraftEditorPlaceholder-inner" name="content_post" id="placeholder-8t2ts" cols="53" rows="4"
                                                    placeholder="Bạn muốn chia sẻ điều gì?"></textarea>
                                            </div>
                                            <div class="DraftEditor-editorContainer">
                                                <div class="upload-content-file flex">
                                                    <div class="boxUpImg">
                                                        <img id="" class="file-up-image" src=""
                                                            alt="your image" />
                                                        <div class="image-delete">
                                                            <button type="button" onclick="removeUploadS()"
                                                                class="remove-image">
                                                                <i class="fal fa-times"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="create-post__actions d-flex">
                            <div class="create-post__actions-background">
                                <span class="icon toggle-background"><span>Aa</span></span>
                                <div style="position: relative">
                                    <span class="icon smile-icon"><img src="{{ asset('static/image/smile.svg') }}"
                                            alt="smile-icon" /></span>
                                </div>
                            </div>
                            <div class="create-post__actions-wrapper">
                                <div class="create-post__actions-item">
                                    <a class="p-2 d-flex align-items-center justify-content-center" tabindex="0">
                                        <input name="image_post" class="upload-c1 file-upload-img" accept="image/*, video/*,.mkv"
                                            multiple="" type="file" autocomplete="off" tabindex="-1"
                                            onchange="readURLS(this);" />
                                        <img src="{{ asset('static/image/picture-video.svg') }}"alt=""
                                            style="margin-right: 9px" />
                                        Ảnh
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary btn-block">
                                Chia sẻ
                            </button>
                        </div>
                    </div>
{{--                {!! Form::close() !!}--}}
                </form>
            </div>
        </div>
    </div>
</div>
<style></style>
<script>
    function readURLS(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $(".file-up-image").attr("src", e.target.result);
                $(".upload-content-file").addClass("show");
            };
            reader.readAsDataURL(input.files[0]);
        } else {
            removeUploadS();
        }
    }

    function removeUploadS() {
        $(".file-upload-img").replaceWith($(".file-upload-img").clone());
        $(".upload-content-file").removeClass("show");
    }
    $(".upload-content-file").bind("dragover", function() {
        $(".upload-content-file").addClass("image-dropping");
    });
    $(".upload-content-file").bind("dragleave", function() {
        $(".upload-content-file").removeClass("image-dropping");
    });
</script>
