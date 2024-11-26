<?php

function view($path_view, $data = [])
{
    extract($data);
    $path_view = str_replace(".", "/", $path_view);
        $view_path = ROOT_DIR . "/$path_view.php";
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

