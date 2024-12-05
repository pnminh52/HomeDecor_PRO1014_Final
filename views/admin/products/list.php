<?php include_once ROOT_DIR . "views/admin/header.php" ?>
<div class="container">
    <?php if ($message != '') : ?>
        <div class="mt-3 mb-3 alert alert-success">
            <?= $message ?>
        </div>
    <?php endif ?>
    <div class="cart-header">
    <h2>Danh sách sản phẩm  </h2>
    </div>
    <a href="<?= ADMIN_URL . '?ctl=addsp' ?>" class="addbtn">Create</a>

    <table class="table table-bordered align-middle">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th> 
                <th scope="col">Status</th>
                <th scope="col">Category</th>
                <th scope="col">Hành động
                </th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $stt=1;
            foreach ($products as $pro): ?>
                <tr>
                    <th scope="row"><?= $stt++ ?></th>
                    <td><?= $pro['name'] ?></td>
                    <td>
                        <img src="<?= ROOT_URL . "/productimages/" . $pro['image'] ?>" width="60" alt="">
                    </td>
                    <td><?= number_format($pro['price']) ?></td>
                    <td><?= $pro['quantity'] ?></td>
              
                    <td><?= $pro['status'] ? "Đang kinh doanh" : "Ngừng kinh doanh" ?></td>
                    <td><?= $pro['cate_name'] ?></td>
                    <td>
                        <a href="<?= ADMIN_URL . '?ctl=editsp&id=' . $pro['id'] ?>" class="btnedit">Sửa</a>
                        <a href="<?= ADMIN_URL . '?ctl=deletesp&id=' . $pro['id'] ?>" class="btndanger" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
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