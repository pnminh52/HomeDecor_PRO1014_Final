<?php
 class ProductController{
  public function list() {
    $id = $_GET['id'] ?? null;
    $sort = $_GET['sort'] ?? 'asc'; //!!Nếu không có giá trị sort thì mặc định là 'asc'
    
    if (!$id || !filter_var($id, FILTER_VALIDATE_INT)) {
        header("Location: " . ROOT_URL);
        exit;
    }
    $products = (new Product)->listProductCategory($id, $sort);
    $category_name = (new Category)->find($id)['cate_name'];
    $categories = (new Category)->all();
    $title = $category_name;
    return view(
        'clients.products.list',
        compact('products', 'categories', 'category_name', 'title', 'id', 'sort')
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
  $title = "Kết quả tìm kiếm cho sản phẩm: " . htmlspecialchars($query); 
  $categories = (new Category)->all(); 
  return view('clients.products.search', compact('products', 'title', 'categories')); // Trả về view
}
//!!Hàm này show tất cả sản phẩm
public function showAllProducts() {
  $sort = $_GET['sort'] ?? 'price';  
  $order = $_GET['order'] ?? 'ASC'; 
  $products = (new Product)->showAllProducts($sort, $order);
  $title = "Cửa hàng";
  $categories = (new Category)->all();
  return view('clients.products.all', compact('products', 'title', 'categories', 'sort', 'order'));
}
}
