<?php

class CartController {
    public function addToCart(){
        $carts = $_SESSION['cart'] ?? [];

        $id = $_GET['id'];

        $product = (new Product)->find($id);

        if (isset( $carts[$id])){
            $carts[$id]['quantity'] += 1;
        } else{
                $carts[$id] = [
                    'name' => $product['name'], 
                    'image'=>$product['image'],
                    'price'=> $product['price'],
                    'quantity'=> 1, 
                ];
            }
        $_SESSION['cart'] = $carts;
      dd($carts);
      die;
        $url = $_SESSION['URI'];

        return header("Location: " .$url);
    }
}