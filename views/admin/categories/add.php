<?php include_once ROOT_DIR . "views/admin/header.php" ?>
<div class="container">
    <form action="<?= ADMIN_URL . '?ctl=storedm' ?>" method="post" enctype="multipart/form-data">
        <div class="bt-3">
            <div class="cart-header">
                <h2>Thêm mới danh mục</h2>
            </div>
            <input type="text" name="cate_name" id="" class="form-control" placeholder="Nhập tên danh mục">

        </div>

        <div class="mb-3">
            <button type="submit" class="addbtn">Thêm mới danh mục</button>
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

    .btn {
        border-radius: 0;
    }

    .addbtn {
        background-color: #28a745;
        margin-bottom: 20px;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        display: inline-block;
        margin-top:20px;
        border:1px solid #28a745;
    }

    footer {
        margin-top: 200px !important;
    }
</style>