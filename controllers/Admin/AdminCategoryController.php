<?php

class AdminCategoryController {
    public function index(){
        $categories = (new Category)->all();
        $message=$_SESSION['message'] ?? '';
        return view('admin.categories.list', compact('categories'));

    }
    public function create(){
       
        return view('admin.categories.add');
        
    }
    public function store(){
       
       $data = $_POST;
      (new Category)->create($data);
      $_SESSION["message"]="Thêm dữ liệu thành công!";
      header("location:". ADMIN_URL . "?ctl=listdm");
      
        
    }
}