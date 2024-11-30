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
     
        $url = $_SESSION['URI'];

        return header("Location: " .$url);

        
    }

    public function totalSumQuantity()
    {
        $carts = $_SESSION['cart'] ?? [];
        $total = 0;
        foreach ($carts as $cart){
            $total += $cart['quantity'];
        }
        return $total;
    }

    public function viewCart(){
        $carts = $_SESSION['cart'] ?? [];
        $sumPrice =(new CartController)->sumPrice();
        $categories = (new Category)->all();

        return view("clients.carts.cart", compact('carts', 'categories', 'sumPrice'));
    }

    public function sumPrice(){
        $carts = $_SESSION['cart'] ?? [];
        $total = 0;
        foreach ($carts as $cart){
            $total += $cart['quantity'] *$cart['price'];
            echo '<pre>';
print_r($_SESSION['cart']);
echo '</pre>';
        }
        return $total;
    }
    //delete product in cart
    public function deleteProductInCart(){
        $id = $_GET['id'];  // Lấy id từ query string
    
        if (isset($_SESSION['cart'][$id])) {
            // Xóa sản phẩm khỏi giỏ hàng
            unset($_SESSION['cart'][$id]);
        }
        
        // Cập nhật lại tổng số lượng sản phẩm trong giỏ hàng
        $_SESSION['totalQuantity'] = (new CartController)->totalSumQuantity();
    
        // Điều hướng lại trang giỏ hàng
        return header("Location: " . ROOT_URL . "?ctl=view-cart");
    }
    public function updateCart(){
        $quantities = $_POST['quantity'];
        foreach ($quantities as $id => $qty){
            $_SESSION['cart'][$id]['quantity']=$qty;
        }
        return header("Location: " . ROOT_URL . "?ctl=view-cart");

    }
    
    
}