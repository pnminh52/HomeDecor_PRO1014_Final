<?php

function view($path_view, $data = [])
{
    extract($data);
    // Thay dấu chấm (.) thành dấu gạch chéo (/) để chuyển đổi từ dạng 'admin.dashboard' thành 'admin/dashboard'
    $path_view = str_replace(".", "/", $path_view);
    
    // Đảm bảo đường dẫn tuyệt đối cho tệp view
    $view_path = ROOT_DIR . "/$path_view.php";
    
    // Kiểm tra sự tồn tại của tệp trước khi include
    if (file_exists($view_path)) {
        // Truyền dữ liệu vào view
        extract($data); // Chuyển mảng dữ liệu thành các biến
        include_once $view_path;
    } else {
        // Hiển thị thông báo lỗi nếu view không tồn tại
        echo "View không tồn tại: $view_path";
    }
}


function dd ($data)
{
    echo "<pre>";
    var_dump($data);
     echo "</pre>";
}