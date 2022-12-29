@extends("admin.layouts.main")
@section("content")
@section('pageTitle', 'Bài đăng')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-10">
                                    {{--                                    <div id="example1_filter" class="dataTables_filter">--}}
                                    {{--                                        <label class="col-md-8">Search:<input type="search"--}}
                                    {{--                                                                              class="form-control col-md-5"--}}
                                    {{--                                                                              placeholder=""--}}
                                    {{--                                                                              aria-controls="example1"></label></div>--}}
                                </div>
{{--                                <div class="col-md-2 " >--}}
{{--                                    <a href="{{ route('user-add') }}" class="btn btn-primary pull-right mb-3">Tạo tài khoản</a>--}}
{{--                                </div>--}}
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                                           aria-describedby="example1_info">
                                        <thead>
                                        <tr>
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example1"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="Rendering engine: activate to sort column descending">
                                                ID
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending">
                                                Người dùng
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                                Người đăng
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1"
                                                aria-label="Engine version: activate to sort column ascending">
                                                Nội dung
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                Thời gian tạo
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                Thời gian cập nhật
                                            </th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        @if(isset($data ) && count($data))
                                            @php
                                                $i= \App\Setting\Setting_Static::STATIC_ZERO;
                                            @endphp
                                            @foreach($data  as $key )
                                                <tr class=" @if( $i++ / \App\Setting\Setting_Static::STATIC_TWO == 0)  even @else odd @endif">
                                                    <td class="dtr-control sorting_1"
                                                        tabindex="0"> {{ $key['id'] }}</td>
                                                    <td>{{$key['user']['fullname']}}</td>
                                                    <td>{{$key['user_friend']['fullname']}}</td>
                                                    <td>{{$key['content']}}</td>
                                                    <td>{{ $key['created_at'] }}</td>
                                                    <td>{{ $key['updated_at'] }}</td>
                                                    <td class="">

                                                        <button type="button" class="btn btn-block bg-gradient-danger btn-md ">
                                                            <a class="bg-gradient-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="{{route("post-delete",['id' => $key['id']])}}"><i class="fas fa-trash-alt"></i></a>
                                                        </button>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="9" class="text-center">Không tìm thấy dữ liệu</td>
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{--                             <div class="d-flex justify-content-center">--}}
                            {{--                                 {{$data->links()}}--}}
                            {{-- </div> --}}
                            {{--                            <div class="row">--}}
                            {{--                                <div class="col-sm-12 col-md-5">--}}
                            {{--                                    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">--}}
                            {{--                                        Hiển thị {{ ($start - \App\Setting\Setting_Static::STATIC_ONE) * $end}} đến {{$end*$start}} trong {{ $count }}--}}
                            {{--                                        tài khoản--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}

                            {{--                                @if($count/$end > \App\Setting\Setting_Static::STATIC_ONE )--}}
                            {{--                                    <div class="col-sm-12 col-md-7">--}}
                            {{--                                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">--}}
                            {{--                                            <ul class="pagination">--}}
                            {{--                                                <li class="paginate_button page-item previous  @if(isset($_GET['page']) && !$_GET['page']) disabled @elseif(isset($_GET['page']) && $_GET['page'] == \App\Setting\Setting_Static::STATIC_ONE) @endif"--}}
                            {{--                                                    id="example1_previous">--}}
                            {{--                                                    <a href="?page={{$i-1}}" aria-controls="example1" data-dt-idx="0"--}}
                            {{--                                                       tabindex="0" class="page-link"><</a>--}}
                            {{--                                                </li>--}}
                            {{--                                                @for($i =\App\Setting\Setting_Static::STATIC_ONE; $i <= $count/$end ; $i++)--}}
                            {{--                                                    <li class="paginate_button page-item @if(isset($_GET['page']) && $_GET['page']== $i) active @elseif($i==\App\Setting\Setting_Static::STATIC_ONE) active @else  @endif">--}}
                            {{--                                                        <a href="?page={{$i}}" aria-controls="example1" data-dt-idx="1"--}}
                            {{--                                                           tabindex="0" class="page-link">{{$i}}</a>--}}
                            {{--                                                    </li>--}}
                            {{--                                                @endfor--}}
                            {{--                                                <li class="paginate_button page-item next  @if($i == $count%$end) disabled @endif" id="example1_next">--}}
                            {{--                                                    <a href="?page={{$i+1}}" aria-controls="example1" data-dt-idx="7"--}}
                            {{--                                                       tabindex="0" class="page-link">Next</a>--}}
                            {{--                                                </li>--}}
                            {{--                                            </ul>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                @endif--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
@endsection
