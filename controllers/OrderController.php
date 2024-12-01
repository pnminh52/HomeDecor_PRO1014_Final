<?php

class OrderController{
    public function index(){
        $orders = (new Order)->all();
        return view("admin.orders.list",compact('orders'));
}
public function showOrder()
{
    $id = $_GET['id'];
    $order = (new Order) ->find($id);

    return view("admin.orders.detail", compact('order'));
}
}