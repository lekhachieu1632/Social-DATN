<?php

namespace App\Setting;

// Setting tĩnh
class Setting_Static
{
    // limit & Offset
    const LIMIT = 20;
    const OFFSET = 1;

    //Đường dẫn vào folder ảnh
    const path_image= 'static/image';
    const path_video= 'static/video';

    const path_site_info= '/site_info';
    const path_site_user= '/user';
    const STATIC_ZERO = 0;
    const STATIC_ONE = 1;
    const STATIC_TWO = 2;
    const STATIC_THREE = 3;
    const STATIC_FOUR = 4;
    const STATIC_FIVE = 5;
    const STATIC_SIX = 6;
    const STATIC_SEVEN = 7;
    const STATIC_EIGHT = 8;
    const STATIC_NINE = 9;
    const STATIC_TEN = 10;
    //mk mặc định
    const PASSWORD = '11111111';
    // Thuộc tính dự án
    const KEY = "BASIC_TEAM";

    //Hết thuộc tính dự án

    // Trạng thái status
    const STATUS_INACTIVE = 0;  // Khóa
    const STATUS_ACTIVE = 1; // Hoạt động
    const STATUS_INLOCKED = 2; //Tạm khóa

    // Text lỗi
    const ERROR_LOGIN = "Tài khoản hoặc mật khẩu sai, vui lòng nhập lại!";
    const ERROR_SESSION_LOGIN = 'Đăng nhập để tiếp tục';
    const ERROR_CREATE = "Tạo không thành công!";
    const ERROR_UPDATE = "Cập nhật không thành công!";
    const ERROR_DELETE = "Xóa không thành công!";


    // success
    const SUCCSESS_CREATE = 'Tạo thành công';
    const SUCCSESS_UPDATE = 'Cập nhật thành công' ;
    const SUCCESS_DELETE = 'Xóa thành công';





}
