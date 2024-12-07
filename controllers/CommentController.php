<?php

class CommentController {
public function index()
{
    $products = (new Comment)->listProductHasComments();
    return view ('admin.comment.product-comment', compact('products'));
}

// hiển thị comment theo sản phẩm
public function list(){
    // lấy id của sản phẩm
     $id   = $_GET['id'];

     $comments = (new Comment)->listCommentInProduct($id);
     
     return view('admin.comments.list', compact('comments'));
}
}

?>