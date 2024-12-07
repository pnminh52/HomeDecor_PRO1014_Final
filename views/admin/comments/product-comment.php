<?php include_once ROOT_DIR . "views/admin/header.php" ?>

<div class="container">
    <div class="table">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Số lượng bình luận</th>
                <th scope="col">

                </th>
               </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $pro) : ?>
                <tr>
            <th scope="row"><?= $pro['id'] ?></th>
            <td><?= $pro['name']?></td>
            <td><?= $pro['count']?></td>
            <td>
                <a href="<?= ADMIN_URL . '?ctl=comment-detail&id=' . $pro ['id']?>" class="btn btn-primary">Chi tiết</a>
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