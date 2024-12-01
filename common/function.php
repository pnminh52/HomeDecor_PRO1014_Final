<?php

function view($path_view, $data = [])
{
    extract($data);
    $path_view = str_replace(".", "/", $path_view);
        $view_path = ROOT_DIR . "views/$path_view.php";
        if (file_exists($view_path)) {
        extract($data); 
        include_once $view_path;
    } else {
        echo "Không tồn tại: $view_path";
    }
}

function dd ($data)
{
    echo "<pre>";
    var_dump($data);
     echo "</pre>";
}

// hàm session_flash , sẽ hủy session ngay lập tức
function session_flash($key){
    $message  = $_SESSION[$key] ?? '';
    unset($_SESSION[$key]);
    return $message;
}

// chuyển đổi trạng thái đơn
function translate_status($status){
    $status_details = [
        1=> 'chờ xử lý',
        2=> 'Đang xử lý',
        3=> 'Hoàn thành',
        4=> 'Đã hủy',
    ];
    return $status_details[$status];
}