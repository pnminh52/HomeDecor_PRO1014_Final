<?php

class OrderController{
    public function index(){
        $orders = (new Order)->all();
        return view("admin.orders.list",compact('orders'));
}
public function showOrder()
{
    if (!isset($_GET['id'])) {
        // Nếu không có ID, bạn có thể hiển thị thông báo lỗi
        echo "Không tìm thấy đơn hàng!";
        return;
    }

    $id = $_GET['id'];
    $order = (new Order)->find($id);
    
    if (!$order) {
        // Nếu không tìm thấy đơn hàng
        echo "Đơn hàng không tồn tại!";
        return;
    }

    return view("admin.orders.detail", compact('order'));
}

}