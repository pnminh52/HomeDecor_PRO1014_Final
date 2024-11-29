<?php
 class ProductController{
  public function list(){
    $id = $_GET["id"];
    $products = (new Product)->listProductCategory($id);
    $category_name= (new Category)-> find($id)['cate_name'];
    $categories=(new Category)-> all();
    $tittle = $category_name;
    return view (
        'clients.products.list',
        compact('products','categories', 'category_name', 'tittle')
    );
  }
   //Product details function
   public function show(){
    $id = $_GET['id']; 
    $product = (new Product)->find($id); 
    $title = $product['name']; 
    $categories = (new Category)->all();
    $productReleads= (new Product)->listProductRelead($product['category_id'],$id); 

    // lưu thông tin URI vào session
    $_SESSION['URI'] = $_SERVER['REQUEST_URI'];

    $_SESSION['totalQuantity'] =(new CartController)->totalSumQuantity();

    return view(
        'clients.products.details', compact('product', 'title', 'categories','productReleads')); 
}

public function searchs() {
  $query = $_GET['query'];
  $products = (new Product)->search($query); 
  $title = "Search results for: " . htmlspecialchars($query); 
  $categories = (new Category)->all(); 
  return view('clients.products.search', compact('products', 'title', 'categories')); // Trả về view
}

 }
