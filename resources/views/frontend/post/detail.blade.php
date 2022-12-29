@extends('frontend.layout.layout')

@section('contentLayout')
    <div class="bodyCard bg-color-3 flex-grow-1">
        <div class="d-flex">
            <section class="mainContent flex-grow-1 pt-0">
                <div class="maxw-60 m-auto w-100">
                    <div class="postDetail">
                        <div class="bg-color-4 pt-5 ps-3 pe-3 border-radius-left-top">
                            <div class="post_item--user d-flex align-items-center">
                                <span class="avatarUser-30 me-2">
                                    @if($post->userInfo->avatar)
                                        <img class="img-cover" src="{{ asset('static/image/user/'.$post->userInfo->avatar) }}" alt="">
                                    @else
                                        <img class="img-cover" src="{{ asset('static/image/user/defaut.jpeg') }}" alt="">
                                    @endif
                                </span>
                                <div class="d-flex flex-column">
                                    <div class="d-flex">
                                        @if($post->location_post && $post->location_post!= $post->user_id)
                                            <a class="text-body" href="{{ asset(route('post.list', $post->user_id)) }}">{{$post->userInfo->fullname}}</a>
                                            <i class="fas fa-caret-right mx-2 align-middle"></i>
                                            <a class="text-body" href="{{ asset(route('post.list', $post->location_post)) }}">{{$post->userFriend->fullname}}</a>
                                        @else
                                            <a class="text-body" href="{{ asset(route('post.list', $post->user_id)) }}" class="title">{{$post->userInfo->fullname}}</a>
                                        @endif
                                    </div>
                                    <span class="fs-11">{{ $post->created_at }}</span>
                                </div>

                            </div>
                            <div class="postDetail pt-3 pb-3">
                                {{ $post->content }}
                            </div>
                            <div class="postDetail--img overflow-hidden">
                                @if(!!$post->image)
                                    <img class="img-cover border-radius-15 overflow-hidden"
                                         src="{{ asset('../storage/'.$post->image) }}" alt="">
                                @else
                                    <img class="img-cover border-radius-15 overflow-hidden"
                                         src="{{ asset('/static/defaut/defaut_image_post.jpeg') }}" alt="">
                                @endif
                            </div>
                            <div class="post_item--info d-flex align-items-center mt-3 w-100">
                                <div class="post_item--action d-flex align-items-center justify-content-between w-100">
                                    @include('frontend.post.like')
                                    <div class="comment color-fill cursor-pointer">
                                        <span class="me-2"><img class="align-bottom" src=" {{ asset('static/icon/comment-2.png') }}" alt=""></span>
                                        <span>200 bình luận</span>
                                    </div>
                                </div>
                            </div>
                            <div class="post-item__comments mt-3 pt-3">
                                @include('frontend.comment.create')
                                @include('frontend.comment.list')
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            @include('frontend.home.sidebarRight')
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.file-upload-image').attr('src', e.target.result);
                    $('.file-upload-content').show();
                };
                reader.readAsDataURL(input.files[0]);
            } else {
                removeUpload();
            }
        }

        function removeUpload() {
            $('.file-upload-input').replaceWith($('.file-upload-input').clone());
            $('.file-upload-content').hide();
            $('.image-upload-wrap').show();
        }
        $('.image-upload-wrap').bind('dragover', function() {
            $('.image-upload-wrap').addClass('image-dropping');
        });
        $('.image-upload-wrap').bind('dragleave', function() {
            $('.image-upload-wrap').removeClass('image-dropping');
        });

        function removeimgCommet() {
            $('.image_comment').replaceWith($('.image_comment').clone());
            $('.upload-content').hide();
            $('.upload-wrap').show();
        }
        $('.upload-wrap').bind('dragover', function() {
            $('.upload-wrap').addClass('image-dropping');
        });
        $('.upload-wrap').bind('dragleave', function() {
            $('.upload-wrap').removeClass('image-dropping');
        });

        function readURLcommet(input,a) {
            var reader = new FileReader();
            if (input.files && input.files[0]) {
                console.log(input.files);
                reader.onload = function(e) {
                    // $('.image-upload-wrap').hide();

                    $('#edit-comment-image-' + a).html(`<a href="`+e.target.result+`">
                                        <img src="`+e.target.result+`"></a>`)
                    $('.upload-content').show();
                };

                reader.readAsDataURL(input.files[0]);

            } else {
                reader.close()
                removeimgCommet();
            }
        }
    </script>
@endsection
