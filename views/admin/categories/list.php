<?php include_once ROOT_DIR . "views/admin/header.php"; ?>

<div class="container">
    <?php if(isset($_SESSION['message']) && $_SESSION['message'] != ''): ?>
        <div class="mt-3 mb-3 alert alert-success">
            <?= $_SESSION['message'] ?>
        </div>
        <?php unset($_SESSION['message']); // Xóa thông báo sau khi hiển thị ?>
    <?php endif; ?>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Tên danh mục</th>
                
                <th>
                    <a href="<?= ADMIN_URL . '?ctl=adddm' ?>" class="btn btn-primary">Create</a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $cate): ?>
                <tr>
                    <th scope="row"><?= $cate['id'] ?></th>
                    <td><?= $cate['cate_name'] ?></td>
                    <td>
                        <a href="<?= ADMIN_URL . '?ctl=editdm&id=' . $cate['id'] ?>" class="btn btn-primary">Sửa</a>
                        <a href="<?= ADMIN_URL . '?ctl=deletedm&id=' . $cate['id'] ?>" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include_once ROOT_DIR . "views/admin/footer.php"; ?>
