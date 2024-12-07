<?php

class Comment extends BaseModel {
    
// hiển thị
public function listCommentInProduct ($product_id) {

$sql = "SELECT c.*, fullname FROM comments c JOIN users u ON u.id=c.user_id
WHERE product_id=:product_id";
$stmt = $this->conn->prepare($sql);
$stmt->execute(['product_id'=> $product_id]);
return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
// hiển thị các sản phẩm có  bình luận
public function listProductHasComments(){
    $sql = "SELECT p.id, name, count(c.id) 'count' FROM products p JOIN comments c ON p.id=c.product_id";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}
public function create($data){
    $sql = "INSERT INTO comments(user_id, product_id, content) VALUES(:user_id, :product_id, :content)";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute($data);   
}
}


?>