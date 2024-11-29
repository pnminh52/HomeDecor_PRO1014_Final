<?php

class AdminProductController
{

    public function index()
{
        $message = $_SESSION['message'] ?? '';
        unset($_SESSION['message']); 
        $products = (new Product)->all();
        return view('admin.products.list', compact('products', 'message'));
    }


    public function add()
    {
    $categories = (new Category)->all();
    return view('admin.products.add', compact('categories'));
}

  
    


    public function store()
    {
        $data = $_POST;
        $image = ''; 
        $file = $_FILES['image'];
        if ($file['size'] > 0) {
            $image = $file['name'];

            move_uploaded_file($file['tmp_name'], "/productimages/" . $image);
        }

        $data['image'] = $image;
        $product = new Product;
        $product->create($data);
        $_SESSION['message']="Thêm dữ liệu thành công";
        header("Location: " . ADMIN_URL . "?ctl=listsp");
    }


    public function edit(){
        $id=$_GET['id'];
        $product=(new Product)->find($id);
        // dd($product);
        // die;
        $categories = (new Category)->all();
     
        return view('admin.products.edit', compact('product', 'categories'));
       
    }


    public function update()
    {
        $data = $_POST;
        //Tạo đối tượng Product
        $product = new Product;
        //lấy ra sản phẩm cũ
        $item = $product->find($data['id']);
        //Lưu ảnh cũ vào image khi người dùng không cập nhật ảnh
        $image = $item['image'];

        //Lấy file người dùng nhập vào
        $file = $_FILES['image'];
        if ($file['size'] > 0) {
            $image = $file['name'];
            //Upload image
            move_uploaded_file($file['tmp_name'], ROOT_DIR . "productimages/" . $image);
        }
        //Thểm ảnh vào data
        $data['image'] = $image;
        //Cập nhật
        $product->update($data['id'], $data);
        //Quay về trang edit
        $_SESSION['message']='Cập nhật dữ liệu thành công';
        header("location: " . ADMIN_URL . "?ctl=listsp");
        die;
    }
    


    public function delete()
    {
        $id=$_GET['id'];
        (new Product)->delete($id);
        $_SESSION['message']='Xóa dữ liệu thành công';
        header('Location:' . ADMIN_URL . '?ctl=listsp');
        die;
       
    }
}