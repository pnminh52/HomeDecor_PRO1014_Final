<?php include_once ROOT_DIR . "views/admin/header.php" ?>
<div class="container">
<?php if(isset($_SESSION['message']) && $_SESSION['message'] != ''): ?>
        <div class="mt-3 mb-3 alert alert-success">
            <?= $_SESSION['message'] ?>
        </div>
        <?php unset($_SESSION['message']); // Xóa thông báo sau khi hiển thị ?>
    <?php endif; ?>
    <div class="cart-header">
    <h2>Cập nhật danh mục </h2>
    </div>
    <form class="mt-3" action="<?= ADMIN_URL . '?ctl=updatedm' ?>" method="post">
        <div class="mb-3">

            <input type="text" name="cate_name" value="<?= $category['cate_name'] ?>" class="form-control">
        </div>

        <input type="hidden" name="id" value="<?= $category['id'] ?>">
        <div class="mb-3">
            <button type="submit" class="btnupdate">Cập nhật danh mục</button>
        </div>
    </form>
</div>
<?php include_once ROOT_DIR . "views/admin/footer.php" ?>
<style>
    .cart-header h2 {
        font-size: 1.5rem !important;
        font-weight: thin !important;
        margin: 0; 
        font-family: Arial, sans-serif;
    }
    .cart-header {
    display: flex;
    align-items: center;
    border-bottom: 1px solid #ddd;
    padding-bottom: 10px;
    margin-bottom: 30px;
    margin-top: 20px;
}
.btn{
    border-radius:0;
}
.btnupdate {
        background-color: #007bff;
        border-color: #007bff;
        margin-bottom: 20px; 
        margin-top: 20px;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        display: inline-block;
        margin-top:20px;
        border:1px solid #007bff;
    }


    footer {
     margin-top: 200px !important;
}
</style>