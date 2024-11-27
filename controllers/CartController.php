<?php

class CartController {
    public function addToCart(){
        //tạo 1 giỏ hàng
        $carts = $_SESSION['cart'] ?? [];

        //lấy sản phẩm theo id để add vào giỏ
        $id = $_GET['id'];

        $product = (new Product)->find($id);

        if (isset( $carts[$id])){
            $carts[$id]['quantity']+=1;
        } else{
                $carts[$id] = [
                    'name' => $product['name'], 
                    'image'=>$product['image'],
                    'price'=> $product['price'],
                    'quantity'=> 1, 
                ];
            }
        // lưu giỏ hàng vào sesion
        $_SESSION['cart'] = $carts;
        // dd($cart); 
        // die; 
        $url = $_SESSION['URI'];

        return header("Location:" .$url);
    }
}