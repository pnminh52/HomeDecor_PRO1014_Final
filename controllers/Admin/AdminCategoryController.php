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
      $_SESSION['message']="Thêm danh mục thành công!";
      header("location:". ADMIN_URL . "?ctl=listdm");
      
        
    }
    public function edit(){
        $id= $_GET['id'];
        $category=(new Category)->find($id);
        
        return view('admin.categories.edit', compact('category'));
    }
    public function update(){
        $data=$_POST;
        (new Category)-> update($data['id'], $data);
        $_SESSION['message']="Cập nhật danh mục thành công";
        header("location:" . ADMIN_URL . '?ctl=editdm&id=' . $data['id']);
       
    }
    public function delete(){
        $id=$_GET['id'];
       $products = (new Product)-> listProductCategory($id);
       if($products){
        $_SESSION['message']="Không thể xóa danh mục có sản phẩm";
        header("location:" . ADMIN_URL . "?ctl_listdm");
        return;
       }
       (new Category)->delete($id);
       $_SESSION['message']="Xóa danh mục thành công";
       header("location:" . ADMIN_URL . "?ctl_listdm");
       return;
    }

}