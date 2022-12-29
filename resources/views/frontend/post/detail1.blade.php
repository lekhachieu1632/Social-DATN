<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include("frontend.partials.linkcss")
    <link rel="stylesheet" href="{{ asset('frontend') }}/asset/css/index.css">
</head>

<body>
<style>
    a:hover {
        color: #6fbe44;
        text-decoration: none;
    }
</style>
    <div class="detail">
        <header>
            @include("frontend.partials.header")
        </header>
        <main>
            <div class="container-fluid">
                <div class="detail__post">
                    <div class="posts__list">
                        <div class="posts__list--item mb-5">
                            <div class="item-top flex">
                                <div class="item-top__left avatar_small">
                                    <img src="{{ asset('static/image/avatar.jpg') }}" alt="">
                                </div>
                                <div class="item-top__right">
                                    <a href="{{ route('post.list', ['idUser' => $post->user_id]) }}">
                                        <h5 class="title">{{ $post->user->fullname }}</h5>
                                    </a>
                                    <span class="date">{{ $post->created_at }}</span>
                                </div>
                               
                            </div>
                            <div class="item-content">
                                <div class="description">
                                    {{ $post->content }}
                                </div>
                                @if(!!$post->image)
                                    <div class="img">
                                        <a href="">
                                            <img src="{{ asset('../storage/'.$post->image) }}" alt="" id='image-id1'
                                                 name='image-id1'>
                                        </a>
                                        <a href=""></a>
                                    </div>
                                @endif

                            </div>
                            <div class="item-action">
                                <div class="view-action flex">
                                    <div class="view-action__left flex">
                                        <span class="icon"><img src="{{ asset('static/image/tim.svg') }}" alt=""></span>
                                        <span class="view-number"> 100k</span>
                                    </div>
                                    <div class="view-action__right">

                                    </div>
                                </div>
                                <div class="click-action flex">
                                    <div class="click-action__left flex-center">
                                        <span class="icon"><i class="fal fa-heart"></i></span>
                                        <span class="title">Thích</span>
                                    </div>
                                    <div class="click-action__right flex-center">
                                        <span class="icon"><i class="fal fa-comment-smile"></i></span>
                                        <span class="title">Bình luận</span>
                                    </div>
                                </div>
                            </div>

                            <div class="comment">
                                @include('frontend.comment.create')
                                @include('frontend.comment.list')
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>
        <footer>

        </footer>

    </div>

    @include('frontend.partials.linkScript')
    <script src="{{ asset('frontend/js/comment.js') }}"></script>

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
</body>

</html>
