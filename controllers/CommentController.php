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
        $_SESSION['uri_comment'] = $_SERVER['REQUEST_URI'];
     return view('admin.comment.list', compact('comments'));
}

// hiển thị , ẩn bình luận 
//!! undefined updateActive va $active
public function updateActive(){
    $id = $_GET['id'];
    // $active = $_GET['value'] ? 0 : 1;
    $active = $_GET['value'] == 1 ? 0 : 1;
    (new Comment)->updateActive($id, $active);

    return header("location:  " . $_SESSION['uri_comment']);
}
}
?>