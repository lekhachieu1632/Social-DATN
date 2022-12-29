@extends('frontend.profile.layout')

@section('contentProfile')
    <div class="infoUser flex-jc-content ">
        <div class="col-900">
            <div class="rounded bg-white shadow mb-3 px-5 py-4 profile-about">
                <h1 class="gapo-title mb-3 pt-2">Giới thiệu</h1>


                <form action="" method="post">
                    <div class="btn-group">
                        <button id="close" class="upshow hidden text-primary flex-b align-items-center edit__action" type="button"><i class="far fa-backspace"></i> Huỷ</button>
                        <button id="edit" class="text-primary  edit__action" type="button"><i class="far fa-pen"></i> Chỉnh sửa</button>
                        <button id="updateProfile" class="upshow hidden text-primary flex-b align-items-center edit__action" type="submit"><i class="far fa-address-card"></i> Cập nhập</button>
                    </div>

                    <div class="form-group mb-0 row py-1 row__editable">
                        <label for="staticEmail" class="col-4 col-form-label">Tên tài khoản</label>
                        <div class="col-8" style="display: flex;">
                            <span class="form-control-plaintext w-auto font-weight-semi-bold">{{ $user->userInfo->fullname }}</span>
                            <input type="text" class="form-control border-0 my-2 form-edit hide" id="staticEmail"
                                placeholder="Nhập tên tài khoản" value="Đức Nguyễn">
                        </div>
                    </div>

                    <div class="form-group mb-0 row py-1 row__editable">
                        <label for="inputPassword" class="col-4 col-form-label">Giới tính</label>
                        <div class="col-8" style="display: flex;">
                            <span class="form-control-plaintext w-auto font-weight-semi-bold">
                                @if($user->userInfo->sex)
                                    {{ $user->userInfo->sex }}
                                @else
                                    Chưa cập nhật
                                @endif
                            </span>
                            <div class="flex-b align-items-center justify-content-between form-edit hide">
                                <div class="flex-b align-items-center">
                                    <div class="custom-control custom-radio mr-4 py-2">
                                        <input type="radio" id="male" name="sex" class="custom-control-input"
                                            checked="">
                                        <label class="custom-control-label" for="male">Nam</label>
                                    </div>
                                    <div class="custom-control custom-radio mr-4 py-2">
                                        <input type="radio" id="female" name="sex" class="custom-control-input">
                                        <label class="custom-control-label" for="female">Nữ</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0 row mb-1 py-1 row__editable">
                        <label for="inputPassword" class="col-4 col-form-label">Ngày sinh</label>
                        <div class="col-8" style="display: flex;">
                            <span class="form-control-plaintext w-auto font-weight-semi-bold">
                                @if($user->userInfo->birthday)
                                    {{date('d/m/Y' , $user->userInfo->birthday)}}
                                @else
                                    Chưa cập nhật
                                @endif
                            </span>
                            <div class="flex-b align-items-center justify-content-between form-edit hide">
                                <div class="align-items-center ">
                                    <select class="custom-select w-auto my-2 mr-2">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                    <select class="custom-select w-auto my-2  mr-2">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                    <select class="custom-select w-auto my-2  mr-2">
                                        <option value="1950">1950</option>
                                        <option value="1951">1951</option>
                                        <option value="1952">1952</option>
                                        <option value="1953">1953</option>
                                        <option value="1954">1954</option>
                                        <option value="1955">1955</option>
                                        <option value="1956">1956</option>
                                        <option value="1957">1957</option>
                                        <option value="1958">1958</option>
                                        <option value="1959">1959</option>
                                        <option value="1960">1960</option>
                                        <option value="1961">1961</option>
                                        <option value="1962">1962</option>
                                        <option value="1963">1963</option>
                                        <option value="1964">1964</option>
                                        <option value="1965">1965</option>
                                        <option value="1966">1966</option>
                                        <option value="1967">1967</option>
                                        <option value="1968">1968</option>
                                        <option value="1969">1969</option>
                                        <option value="1970">1970</option>
                                        <option value="1971">1971</option>
                                        <option value="1972">1972</option>
                                        <option value="1973">1973</option>
                                        <option value="1974">1974</option>
                                        <option value="1975">1975</option>
                                        <option value="1976">1976</option>
                                        <option value="1977">1977</option>
                                        <option value="1978">1978</option>
                                        <option value="1979">1979</option>
                                        <option value="1980">1980</option>
                                        <option value="1981">1981</option>
                                        <option value="1982">1982</option>
                                        <option value="1983">1983</option>
                                        <option value="1984">1984</option>
                                        <option value="1985">1985</option>
                                        <option value="1986">1986</option>
                                        <option value="1987">1987</option>
                                        <option value="1988">1988</option>
                                        <option value="1989">1989</option>
                                        <option value="1990">1990</option>
                                        <option value="1991">1991</option>
                                        <option value="1992">1992</option>
                                        <option value="1993">1993</option>
                                        <option value="1994">1994</option>
                                        <option value="1995">1995</option>
                                        <option value="1996">1996</option>
                                        <option value="1997">1997</option>
                                        <option value="1998">1998</option>
                                        <option value="1999">1999</option>
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0 row py-1 row__editable"><label for="staticEmail"
                            class="col-4 col-form-label">Tình trạng</label>
                        <div class="col-8" style="display: flex;">
                            <span class="form-control-plaintext w-auto font-weight-semi-bold">Chưa cập nhật</span>
                            <div class="flex-b align-items-center justify-content-between form-edit hide">
                                <div class="align-items-center ">
                                    <select class="custom-select w-auto my-2 mr-2">
                                        <option value="0" disabled="">-- Tình trạng --</option>
                                        <option value="Độc thân">Độc thân</option>
                                        <option value="Hẹn hò">Hẹn hò</option>
                                        <option value="Đã kết hôn">Đã kết hôn</option>
                                        <option value="Kết hôn đồng giới">Kết hôn đồng giới</option>
                                        <option value="Đang tìm hiểu">Đang tìm hiểu</option>
                                        <option value="Có mối quan hệ phức tạp">Có mối quan hệ phức tạp</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0 row py-1 row__editable">
                        <label for="staticEmail" class="col-4 col-form-label">instagram</label>
                        <div class="col-8" style="display: flex;">
                            <span class="form-control-plaintext w-auto font-weight-semi-bold">https://www.gapo.vn/56840241</span>
                            <input type="text" class="form-control border-0 my-2 form-edit hide" id="staticEmail" placeholder="" value="56840241">
                        </div>
                    </div>
                    <div class="about-form__title font-weight-semi-bold pb-3 pt-4 flex-b align-items-center">
                        <span class="svg-icon  mr-2"
                            style="background-image: url({{ asset('static/image/phone.svg') }}); width: 21px; height: 21px;"></span>
                        Thông tin liên hệ
                    </div>
                    <div class="form-group mb-0 row py-1 row__editable">
                        <label for="staticEmail" class="col-4 col-form-label">Tỉnh/Thành phố hiện tại</label>
                        <div class="col-8" style="display: flex;">
                            <span class="form-control-plaintext w-auto font-weight-semi-bold">{{ $user->userInfo->address }}</span>
                            <div class="flex-b align-items-center justify-content-between form-edit hide">
                                <div class="align-items-center ">
                                    <input type="text" class="form-control border-0 my-2" id="staticEmail"
                                        placeholder="Nhập tên tỉnh/thành phố hiện tại" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0 row py-1 row__editable">
                        <label for="staticEmail" class="col-4 col-form-label">Số điện thoại</label>
                        <div class="col-8" style="display: flex;">
                            <span class="form-control-plaintext w-auto font-weight-semi-bold">{{ $user->userInfo->phone }}</span>
                            <div class="flex-b align-items-center justify-content-between form-edit hide">
                                <div class="align-items-center ">
                                    <select class="custom-select w-auto my-2 mr-2">
                                        <option value="0" disabled="">-- Quê quán --</option>
                                        <option value="1">TP. Hồ Chí Minh</option>
                                        <option value="2">Hà Nội</option>
                                        <option value="3">An Giang</option>
                                        <option value="4">Bà Rịa Vũng Tàu</option>
                                        <option value="5">Bạc Liêu</option>
                                        <option value="6">Bắc Kạn</option>
                                        <option value="7">Bắc Giang</option>
                                        <option value="8">Bắc Ninh</option>
                                        <option value="9">Bến Tre</option>
                                        <option value="10">Bình Dương</option>
                                        <option value="11">Bình Định</option>
                                        <option value="12">Bình Phước</option>
                                        <option value="13">Bình Thuận</option>
                                        <option value="14">Cà Mau</option>
                                        <option value="15">Cao Bằng</option>
                                        <option value="16">Cần Thơ</option>
                                        <option value="17">Đà Nẵng</option>
                                        <option value="18">Điện Biên</option>
                                        <option value="19">Đắk Lắk</option>
                                        <option value="20">Đắc Nông</option>
                                        <option value="21">Đồng Nai</option>
                                        <option value="22">Đồng Tháp</option>
                                        <option value="23">Gia Lai</option>
                                        <option value="24">Hà Giang</option>
                                        <option value="25">Hà Nam</option>
                                        <option value="26">Hà Tĩnh</option>
                                        <option value="27">Hải Dương</option>
                                        <option value="28">Hải Phòng</option>
                                        <option value="29">Hậu Giang</option>
                                        <option value="30">Hòa Bình</option>
                                        <option value="31">Hưng Yên</option>
                                        <option value="32">Khánh Hoà</option>
                                        <option value="33">Kiên Giang</option>
                                        <option value="34">Kon Tum</option>
                                        <option value="35">Lai Châu</option>
                                        <option value="36">Lạng Sơn</option>
                                        <option value="37">Lào Cai</option>
                                        <option value="38">Lâm Đồng</option>
                                        <option value="39">Long An</option>
                                        <option value="40">Nam Định</option>
                                        <option value="41">Nghệ An</option>
                                        <option value="42">Ninh Bình</option>
                                        <option value="43">Ninh Thuận</option>
                                        <option value="44">Phú Thọ</option>
                                        <option value="45">Phú Yên</option>
                                        <option value="46">Quảng Bình</option>
                                        <option value="47">Quảng Nam</option>
                                        <option value="48">Quảng Ngãi</option>
                                        <option value="49">Quảng Ninh</option>
                                        <option value="50">Quảng Trị</option>
                                        <option value="51">Sóc Trăng</option>
                                        <option value="52">Sơn La</option>
                                        <option value="53">Tây Ninh</option>
                                        <option value="54">Thái Bình</option>
                                        <option value="55">Thái Nguyên</option>
                                        <option value="56">Thanh Hoá</option>
                                        <option value="57">Thừa Thiên Huế</option>
                                        <option value="58">Tiền Giang</option>
                                        <option value="59">Trà Vinh</option>
                                        <option value="60">Tuyên Quang</option>
                                        <option value="61">Vĩnh Long</option>
                                        <option value="62">Vĩnh Phúc</option>
                                        <option value="63">Yên Bái</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-form__title pb-3 pt-4 flex-b align-items-center justify-content-between ">
                        <div class=" font-weight-semi-bold">
                            <a class="svg-icon  mr-2"
                                style="background-image: url({{ asset('static/image/job.svg') }}); width: 21px; height: 21px;"></a>
                            Công việc
                        </div>
                    </div>

                    <div class="form-group mb-0 row py-1 row__editable">
                        <label for="staticEmail" class="col-4 col-form-label">
                            <div>Công ty</div>
                        </label>
                        <div class="col-8" style="display: flex;">
                            <span class="form-control-plaintext w-auto font-weight-semi-bold">Dev tại OMT</span>
                            <div class="flex-b align-items-center justify-content-between form-edit hide">
                                <div class="align-items-center ">
                                    <input type="text" class="form-control border-0 my-2" id="staticEmail"
                                        placeholder="Nhập tên công ty" value="OMT">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="about-form__title pb-3 pt-4 flex-b align-items-center justify-content-between ">
                        <div class=" font-weight-semi-bold">
                            <a class="svg-icon  mr-2"
                                style="background-image: url({{ asset('static/image/job.svg') }}); width: 21px; height: 21px;"></a>
                            Trường học
                        </div>
                    </div>

                    <div class="form-group mb-0 row py-1 row__editable">
                        <label for="staticEmail" class="col-4 col-form-label">
                            <div>Trường học</div>
                        </label>
                        <div class="col-8" style="display: flex;">
                            <span class="form-control-plaintext w-auto font-weight-semi-bold">Công nghệ thông tin tại EPU</span>
                            <div class="flex-b align-items-center justify-content-between form-edit hide">
                                <div class="align-items-center ">
                                    <input type="text" class="form-control border-0 my-2" id="staticEmail" placeholder="Nhập tên trường học" value="EPU">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="about-form__title pb-3 pt-4 flex-b align-items-center justify-content-between ">
                        <div class=" font-weight-semi-bold">
                            <a class="svg-icon  mr-2"
                                style="background-image: url({{ asset('static/image/checklist.svg') }}); width: 21px; height: 21px;"></a>
                            Sở thích
                        </div>
                    </div>
                    <div class="mt-3"></div>
                    <div class="">

                    </div>
                    <div class=" d-inline-flex justify-content-center align-items-center item-interest py-2 px-2 mr-2 my-1 font-weight-bold">
                        <div class="col">Ăn uống</div>
                    </div> --}}
                </form>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            console.log('12355')

            $("#edit").click(function() {
                console.log('1234445')

                $('.form-control-plaintext').hide();
                $('#edit').hide();
                $('#close').removeClass('hidden')
                $('#updateProfile').removeClass('hidden')
                // $('.form-edit').addClass('showInput');
                // $('.upshow').addClass('showInput');
            });
            $("#close").click(function() {
                $('.form-control-plaintext').show();
                $('#edit').show();
                $('#close').addClass('hidden')
                $('#updateProfile').addClass('hidden')
                // $('.form-edit').removeClass('showInput');
                // $('.upshow').removeClass('showInput');
            });
        });
    </script>
@endsection
