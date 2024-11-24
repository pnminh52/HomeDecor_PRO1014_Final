<?php

class AdminProductController
{

    public function index()
{
        $message = $_SESSION['message'] ?? '';
        unset($_SESSION['message']); //xóa session
        $products = (new Product)->all();
        return view('admin.products.list', compact('products', 'message'));
    }


    public function add()
    {}
    


    public function store()
    {
       
    }


    public function edit()
    {
       
    }


    public function update()
    {
       
    }


    public function delete()
    {
       
    }
}