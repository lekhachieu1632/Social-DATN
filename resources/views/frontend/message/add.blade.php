@extends('frontend.layout.home')
@php
    $no_text = "Chưa nhập thông tin này!";
@endphp
@section('content')
    <div class="detailFriend  px-3 pt-5">
        <div class="col py-4 " style="background-color: #ffffff">
            <div class="align-items-center">
                {{--                @if(isset($data) && $data)--}}
                {{--                    <div class="gapo-subtitle mb-3 m-top">--}}
                {{--                        Tin nhắn--}}
                {{--                    </div>--}}
                {{--                    <div class="row">--}}
                {{--                        @foreach($data as $key => $value)--}}
                {{--                            <div class="suggestion-item-background mb-2 mr-2">--}}
                {{--                                <div--}}
                {{--                                    style="--}}
                {{--                                    width: 100%;--}}
                {{--                                    position: relative;--}}
                {{--                                ">--}}
                {{--                                    <a class="gapo-thumbnail gapo-thumbnail--1x1 mb-2 rounded" href="/109528"--}}
                {{--                                       style="--}}
                {{--                                           background-image: url('{{ asset(\App\Setting\Setting_Dynamic::getImage(\App\Setting\Setting_Static::path_site_user, $value['avatar'])) }}');--}}
                {{--                                           "></a><a--}}
                {{--                                        href="/109528">--}}
                {{--                                        <div--}}
                {{--                                            class="suggestion-display-name text-body font-weight-semi-bold mb-2 pt-1">--}}
                {{--                                            {{$value['fullname']}}--}}
                {{--                                        </div>--}}
                {{--                                    </a>--}}
                {{--                                    <div class="d-flex align-items-center"--}}
                {{--                                         style="--}}
                {{--                                        margin-left: 12px;--}}
                {{--                                        margin-top: 4px;--}}
                {{--                                        height: 21px;--}}
                {{--                                    ">--}}
                {{--                                        <div class="text-secondary text-ellipsis"--}}
                {{--                                             style="--}}
                {{--                                            white-space: nowrap;--}}
                {{--                                            text-overflow: ellipsis;--}}
                {{--                                            overflow: hidden;--}}
                {{--                                        ">--}}
                {{--                                            {{$value['introduce'] ? $value['introduce'] : $no_text}}--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="button-container">--}}
                {{--                                        @if(!\App\Services\FriendGroupService::checkFollow( $value['user_id'] ) )--}}
                {{--                                            <button class="btn btn-block btn-sm btn-primary btn-width-90" onclick="folllowFriend( {{$value['user_id']}} )">--}}
                {{--                                                <i class="fal fa-eye"></i>Theo dõi--}}
                {{--                                            </button>--}}
                {{--                                        @endif--}}
                {{--                                        <button class="btn btn-block btn-sm btn-primary btn-width-90" onclick="addFriend({{$value['user_id']}})">--}}
                {{--                                            <i class="far fa-user-plus m-right"></i>Kết bạn--}}
                {{--                                        </button>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        @endforeach--}}

                {{--                    </div>--}}
                {{--                @else--}}
                {{--                @endif--}}
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Left col -->
                            <section class="col-md-12 connectedSortable ui-sortable">
                                <!-- Custom tabs (Charts with tabs)-->
                                <!-- /.card -->
                                <!-- DIRECT CHAT -->
                                <div class="card direct-chat direct-chat-primary">
                                    <div class="card-header ui-sortable-handle" style="cursor: move;">
                                        <h3 class="card-title">{{  $data['fullname'] }}</h3>
                                        {{--                                            <div class="card-tools">--}}
                                        {{--                                                <span title="3 New Messages" class="badge badge-primary">3</span>--}}
                                        {{--                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">--}}
                                        {{--                                                    <i class="fas fa-minus"></i>--}}
                                        {{--                                                </button>--}}
                                        {{--                                                <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">--}}
                                        {{--                                                    <i class="fas fa-comments"></i>--}}
                                        {{--                                                </button>--}}
                                        {{--                                            </div>--}}
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <!-- Conversations are loaded here -->
                                        <div class="direct-chat-messages" style="height: 80vh;" id="render-mess">
                                                    <div class="direct-chat-msg  right">
                                                        <div class="direct-chat-infos clearfix">

                                                                <span class="direct-chat-name float-right"></span>
                                                            <span
                                                                class="direct-chat-timestamp float-left">
                                                            </span>
                                                        </div>
                                                        <!-- /.direct-chat-infos -->

                                                            <img class="direct-chat-img" src="" alt="">

                                                    <!-- /.direct-chat-img -->
                                                        <a onclick="return confirm('Bạn có muốn xóa tin nhắn này!')" href="">
                                                            <i class="fas fa-times"></i>
                                                        </a>
                                                        <div class="direct-chat-text">

                                                        </div>
                                                        <!-- /.direct-chat-text -->
                                                    </div>

                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <div class="input-group">
                                            <input type="text" name="message" placeholder="Nhập nội dung tin nhắn"
                                                   class="form-control" value="">
                                            <span class="input-group-append">
                                                <button type="submit" class="btn btn-primary" onclick="sendMessage()">Gửi</button>
                                                </span>
                                        </div>

                                    </div>
                                    <!-- /.card-footer-->
                                </div>
                                <!--/.direct-chat -->

                            </section>
                            <!-- /.Left col -->
                            <!-- right col (We are only adding the ID to make the widgets sortable)-->

                            <!-- right col -->
                        </div>
                        <!-- /.row (main row) -->
                    </div><!-- /.container-fluid -->
                </section>

            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            Pusher.logToConsole = true;
            var pusher = new Pusher('f74fa5cbff8c606cfdc9', {
                encrypted: true,
                cluster: "ap1"
            });
            var channel = pusher.subscribe('message');

            channel.bind('App\\Events\\MessageSend',addMessageDemo);

        })
        function addMessageDemo(data) {
            console.log(data.user.avatar);
            if(data.user.user_id == data.user.user_now){
                var data= '<div class="direct-chat-msg right">' +
                    '<div class="direct-chat-infos clearfix">' +
                    '<span class="direct-chat-name float-right">'+ data.user.fullname +'</span>'+
                    '<span class="direct-chat-timestamp float-left">???</span>'+
                    '</div>' +
                    '<img class="direct-chat-img" src="/static/image/user/' + data.user.avatar  +'"'+ 'alt="">' +
                    '<a onclick="return confirm(\'Bạn có muốn xóa tin nhắn này!\')" href=""><i class="fas fa-times"></i></a>' +
                    '<div class="direct-chat-text">'+data.message +'</div>'+
                    '</div>';
                $('#render-mess').append(data);
            }
            else{
                var data= '<div class="direct-chat-msg">' +
                    '<div class="direct-chat-infos clearfix">' +
                    '<span class="direct-chat-name float-right">'+ data.user.fullname +'</span>'+
                    '<span class="direct-chat-timestamp float-left">???</span>'+
                    '</div>' +
                    '<img class="direct-chat-img" src="/static/image/user/' + data.user.avatar  +'"'+ 'alt="">' +
                    '<a onclick="return confirm(\'Bạn có muốn xóa tin nhắn này!\')" href=""><i class="fas fa-times"></i></a>' +
                    '<div class="direct-chat-text">'+data.message +'</div>'+
                    '</div>';
                $('#render-mess').append(data);
            }


        }

        function formatDate(date) {
            var year = date.getFullYear().toString();
            var month = (date.getMonth() + 101).toString().substring(1);
            var day = (date.getDate() + 100).toString().substring(1);
            return month + '/' + day + '/' + year;
        }
        function formatTime(date) {
            var hours = date.getHours().toString();
            var minutes = date.getMinutes().toString();
            var seconds = date.getSeconds().toString();
            return hours + ':' + minutes + ':' + seconds;
        }
        $(document).keypress(function(event){
            var keycode = (event.keyCode ? event.keyCode : event.which);
            if (keycode == '13') {
                sendMessage();
            }
        });

        //function add message
        function getMess() {
            $.ajax({
                url: '{{ route('message-render',['group_id' => $gruop_id]) }}',
                type: 'get',
                data: {
                },
                success: function (data) {
                    $('#render-mess').html(data.html);
                }
            })
        }
        getMess();

        function sendMessage() {
            var mess = $("input[name=message]").val();
            if (mess == "") {
                alert('Vui lòng nhập nội dung');
            } else {
                $.ajax({
                    url: '{{route('message-send')}}',
                    type: 'get',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: {{ session(\App\Setting\Setting_Static::KEY.'-id') }},
                        group_id: {{ $gruop_id }},
                        message: mess
                    },
                    success: function (data) {
                        if (data.status == 200) {
                            $("input[name=message]").val("");
                            getMess();
                        }
                        if (data.status == 400) {
                            alert(data.msg);
                        }
                        if (data.status == 600) {
                            alert(data.msg);
                        }
                    }
                })
            }
        }
        {{--function folllowFriend(id) {--}}
        {{--    $.ajax({--}}
        {{--        url: '{{route('friend-add')}}',--}}
        {{--        type: 'POST',--}}
        {{--        data: {--}}
        {{--            _token: '{{ csrf_token() }}',--}}
        {{--            id: id,--}}
        {{--            status: {{\App\Setting\Setting_Static::STATIC_TWO}}--}}
        {{--        },--}}
        {{--        success: function (data) {--}}
        {{--            alert(data.msg);--}}
        {{--            window.location.reload();--}}
        {{--        }--}}
        {{--    })--}}
        {{--}--}}
    </script>
@endsection


