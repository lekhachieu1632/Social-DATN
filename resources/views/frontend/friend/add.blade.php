@extends('frontend.layout.home')
@php
    $no_text = "Chưa nhập thông tin này!";
@endphp
@section('content')
    <div class="detailFriend px-3 " >
        <div class="col py-4 " style="background-color: #ffffff">
            <div class="align-items-center">
                @if(isset($data) && $data)
                    <div class="gapo-subtitle mb-3 m-top">
                        Những người bạn có thể biết
                    </div>
                    <div class="row px-2 ">
                        @foreach($data as $key => $value)
                            <div class="suggestion-item-background mb-2 mr-2 ">
                                <div
                                    style="
                                    width: 100%;
                                    position: relative;
                                ">
                                    <a class="gapo-thumbnail gapo-thumbnail--1x1 mb-2 rounded" href="{{ route('post.list', $value['user_id']) }}"
                                       style="
                                               background-image: url('{{ asset(\App\Setting\Setting_Dynamic::getImage(\App\Setting\Setting_Static::path_site_user, $value['avatar'])) }}');
                                           "></a><a
                                        href="{{ route('post.list', $value['user_id']) }}">
                                        <div
                                            class="suggestion-display-name text-body font-weight-semi-bold mb-2 pt-1">
                                            {{$value['fullname']}}
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
                                            {{$value['introduce'] ? $value['introduce'] : $no_text}}
                                        </div>
                                    </div>
                                    <div class="button-container">
                                        @if(!\App\Services\FriendGroupService::checkFollow( $value['user_id'] ) )
                                            <button class="btn btn-block btn-sm btn-primary btn-width-90" onclick="folllowFriend( {{$value['user_id']}} )">
                                                <i class="fal fa-eye"></i>Theo dõi
                                            </button>
                                        @endif
                                        <button class="btn btn-block btn-sm btn-primary btn-width-90" onclick="addFriend({{$value['user_id']}})">
                                            <i class="far fa-user-plus m-right"></i>Kết bạn
                                        </button>
                                    </div>
                                </div>
                            </div>
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


    <script>
        function addFriend(id) {
            $.ajax({
                url: '{{route('friend-add')}}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id,
                },
                success: function (data) {
                    alert(data.msg);
                    window.location.reload();
                }
            })
        }

        function folllowFriend(id) {
            $.ajax({
                url: '{{route('friend-add')}}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id,
                    status: {{\App\Setting\Setting_Static::STATIC_TWO}}
                },
                success: function (data) {
                    alert(data.msg);
                    window.location.reload();
                }
            })
        }
    </script>
@endsection

