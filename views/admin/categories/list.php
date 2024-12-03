<?php include_once ROOT_DIR . "views/admin/header.php"; ?>
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
    }

    /* Nút "Sửa danh mục" */
    .btnedit {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        display: inline-block;
    }

    /* Nút "Xóa danh mục" */
    .btndanger {
        background-color: rgb(202, 16, 16);
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        display: inline-block;
    }

    /* Bảng */
    .table th, .table td {
        text-align: center;
        vertical-align: middle;
    }

    .table .btn {
        margin: 0 5px;
    }
</style>
<div class="container">
    <?php if(isset($_SESSION['message']) && $_SESSION['message'] != ''): ?>
        <div class="mt-3 mb-3 alert alert-success">
            <?= $_SESSION['message'] ?>
        </div>
        <?php unset($_SESSION['message']); // Xóa thông báo sau khi hiển thị ?>
    <?php endif; ?>
    <div class="cart-header">
    <h2>Danh sách danh mục </h2>
    </div>
    <a href="<?= ADMIN_URL . '?ctl=adddm' ?>" class="addbtn">Thêm mới danh mục </a>

    <table class="table table-bordered align-middle">
        <thead class="table">
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Tên danh mục</th>
                
                <th scope="col">Hành động 
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $cate): ?>
                <tr>
                    <th scope="row"><?= $cate['id'] ?></th>
                    <td><?= $cate['cate_name'] ?></td>
                    <td>
                        <a href="<?= ADMIN_URL . '?ctl=editdm&id=' . $cate['id'] ?>" class="btnedit ">Sửa danh mục </a>
                        <a href="<?= ADMIN_URL . '?ctl=deletedm&id=' . $cate['id'] ?>" class="btndanger" onclick="return confirm('Bạn có muốn xóa không?')">Xóa danh mục </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include_once ROOT_DIR . "views/admin/footer.php"; ?>
