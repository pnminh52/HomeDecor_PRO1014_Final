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
function getOrderStatus($status){
    $status_details = [
        1 => ['text' => 'Chờ xử lý', 'color' => 'orange'],
        2 => ['text' => 'Đang xử lý', 'color' => 'blue'],
        3 => ['text' => 'Hoàn thành', 'color' => 'green'],
        4 => ['text' => 'Đã hủy', 'color' => 'red'],
    ];

    $status_text = $status_details[$status]['text'];
    $status_color = $status_details[$status]['color'];

    return "<span style='color: $status_color;'>$status_text</span>";
}
