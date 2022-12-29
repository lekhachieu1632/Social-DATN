<div class="modal-content">
    <div class="infoUser">
        {!! Form::open(['method'=> 'put', 'url' => '/profile/'. session(\App\Setting\Setting_Static::KEY.'-id') .'/post/update/'. $post->id, 'name' => 'post-update']) !!}
        <div class="p-3 bg-white shadow mb-3 create-post p-3 rounded" style="display: block">
            <input type="text" hidden name="id_location" value="{{ $post->id_location }}">
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
                                                    placeholder="Bạn muốn chia sẻ điều gì?">{{ $post->content }}</textarea>
                                </div>
                                <div class="DraftEditor-editorContainer">
                                    <div class="upload-content-file flex">
                                        <div class="boxUpImg">
                                            <img id="" class="file-up-image" src="{{ asset('/storage/'.$post->image) }}"
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
                            <input type="hidden" name="edit-post-image" value="{{ $post->image }}">
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
        {!! Form::close() !!}
    </div>
</div>

