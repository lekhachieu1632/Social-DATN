@extends('frontend.layout.home')
@php
    $no_text = "Chưa nhập thông tin này!";
@endphp
@section('content')
    <div class="detailFriend  px-3 pt-5">
        <div class="col py-4 " style="background-color: #ffffff">
            <div class="align-items-center">
                @if(isset($data) && $data)
                    <div class="gapo-subtitle mb-3 ">
                        Những người bạn đã nhắn tin
                    </div>
                    <div class="row">
                        @foreach($data as $key => $value)
                            @if($value['user_id_1'] == session(\App\Setting\Setting_Static::KEY.'-id'))
                                @php
                                    $user_2 = \App\Models\UserInfo::where('user_id',$value['user_id_2'])->first()->toArray();
                                @endphp
                                    <div class="suggestion-item-background mb-2 mr-2">
                                        <div style="
                                 width: 100%;
                                    position: relative;
                                ">
                                            <a class="gapo-thumbnail gapo-thumbnail--1x1 mb-2 rounded" href="{{ route('post.list', $value['user_id_2']) }}"
                                               style="
                                                   background-image: url('{{ asset(\App\Setting\Setting_Dynamic::getImage(\App\Setting\Setting_Static::path_site_user, $user_2['avatar'])) }}');
                                                   "></a><a
                                                href="{{ route('post.list', $value['user_id_2']) }}">
                                                <div
                                                    class="suggestion-display-name text-body font-weight-semi-bold mb-2 pt-1">
                                                    {{$user_2['fullname']}}
                                                </div>
                                            </a>
                                            <div class="d-flex align-items-center"
                                                 style="
                                        margin-left: 12px;
                                        margin-top: 4px;
                                        height: 21px;
                                    ">
                                                <div class="text-secondary text-ellipsis"
                                                     style="
                                            white-space: nowrap;
                                            text-overflow: ellipsis;
                                            overflow: hidden;
                                        ">
                                                    {{$user_2['introduce'] ?$user_2['introduce'] : $no_text}}
                                                </div>
                                            </div>
                                            <div class="button-container">
                                                <a class="btn btn-block btn-md btn-primary btn-width-90" href="{{route('message-add', ['id' => $value['user_id_2']])}}">
                                                    Nhắn tin
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                            @endif
                        @endforeach
                    </div>
                @else
                    <div class="card-body pb-0">
                        <p style="color: #000000; padding-left: 10px; text-align: center"> Không có dữ liệu</p>
                    </div>
                @endif
            </div>
        </div>
    </div>


    {{--    <script>--}}
    {{--        function sendMessage() {--}}
    {{--            $.ajax({--}}
    {{--                url: '{{route('message-add')}}',--}}
    {{--                type: 'POST',--}}
    {{--                data: {--}}
    {{--                    _token: '{{ csrf_token() }}',--}}
    {{--                    user_id: id,--}}
    {{--                },--}}
    {{--                success: function (data) {--}}
    {{--                    alert(data.msg);--}}
    {{--                    window.location.reload();--}}
    {{--                }--}}
    {{--            })--}}
    {{--        }--}}

    {{--        function folllowFriend(id) {--}}
    {{--            $.ajax({--}}
    {{--                url: '{{route('friend-add')}}',--}}
    {{--                type: 'POST',--}}
    {{--                data: {--}}
    {{--                    _token: '{{ csrf_token() }}',--}}
    {{--                    id: id,--}}
    {{--                    status: {{\App\Setting\Setting_Static::STATIC_TWO}}--}}
    {{--                },--}}
    {{--                success: function (data) {--}}
    {{--                    alert(data.msg);--}}
    {{--                    window.location.reload();--}}
    {{--                }--}}
    {{--            })--}}
    {{--        }--}}
    {{--    </script>--}}
@endsection

