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
        // dd($carts);
        // die;
        $sumPrice =(new CartController)->sumPrice();
        $categories = (new Category)->all();

        return view("clients.carts.cart", compact('carts', 'categories', 'sumPrice'));
    }

    public function sumPrice(){
        $carts = $_SESSION['cart'] ?? [];
        $total = 0;
        foreach ($carts as $cart){
            if (isset($cart['price']) && isset($cart['quantity'])) {
            $total += $cart['quantity'] *$cart['price'];
            }
        }
        return $total;
    }
    //delete product in cart
    public function deleteProductInCart(){
        $id = $_GET['id'];
        if (isset($_SESSION['cart'][$id])) {
            unset($_SESSION['cart'][$id]);
        }
        $_SESSION['totalQuantity'] = (new CartController)->totalSumQuantity();
        return header("Location: " . ROOT_URL . "?ctl=view-cart");
    }
    public function updateCart(){
        $quantities = $_POST['quantity'];
        foreach ($quantities as $id => $qty){
            $_SESSION['cart'][$id]['quantity']=$qty;
        }
        //!!Tăng giảm quantity sẽ thay đổi số sp trong giỏ hàng. 
        $_SESSION['totalQuantity'] = (new CartController)->totalSumQuantity();
        return header("Location: " . ROOT_URL . "?ctl=view-cart");

    }
    public function viewCheckout(){
        if (!isset($_SESSION['user'])) {
            $_SESSION['message'] = [
                'type' => 'danger',
                'content' => 'Bạn cần đăng nhập để thanh toán!'
            ];
            return header("Location: " . ROOT_URL . "?ctl=view-cart");
        }
        $user = $_SESSION['user'];
        $categories = (new Category)->all();
        $carts = $_SESSION['cart'] ?? [];
        $sumPrice = (new CartController)->sumPrice();
        return view("clients.carts.checkout", compact('user', 'carts', 'sumPrice','categories'));
    }

    // thanh toán
    public function checkOut(){
        // lấy ra thông tin người dùng
        $user = [
            'id' => $_POST['id'],
            'fullname'=> $_POST['fullname'],
            'phone'=> $_POST['phone'],
            'address'=> $_POST['address'],
            'role'=> $_SESSION['user']['role'],
            'active'=> $_SESSION['user']['active'],
        ];
        $sumPrice = (new CartController)->sumPrice();
        // lấy thông tin thanh toán
        $order = [
            'user_id' => $_POST['id'],
            'status'=> 1,
            'payment_method'=> $_POST['payment_method'],
            'total_price'=> $sumPrice,
        ];

        (new User)->update($user['id'], $user);
        $order_id = (new Order)->create($order);

        
        $carts = $_SESSION['cart'];
        foreach ($carts as $id => $cart){
            $or_detail = [
                'order_id' => $order_id,
                'product_id' => $id,
                'price' => $cart['price'],
                'quantity'=> $cart['quantity'],
            ];
            (new Order)->createOrderDetail($or_detail);
        }
        $this->clearCart(); // xóa thông tin giỏ hàng

        return header("Location:" . ROOT_URL . "?ctl=success");
    }

    // xóa giỏ hàng
    public function clearCart(){
        unset($_SESSION['cart']);
        unset($_SESSION['totalQuantity']);
        unset($_SESSION['URI']);
    }

    public function success(){
        $categories = (new Category)->all();
        return view("clients.carts.success",compact('categories'));
    }
    
    
    
    
}