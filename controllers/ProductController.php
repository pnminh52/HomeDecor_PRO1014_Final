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
    return view('clients.products.details', compact('product', 'title', 'categories','productReleads')); 
}
// Product relead function

 }
