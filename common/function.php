<?php
//View function
function view($path_view, $data=[]){
    $path_view=str_replace(".","/", $path_view);
    include_once ROOT_DIR . "views/path_view.php";
}
//Debug function
function dd($data){
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}
