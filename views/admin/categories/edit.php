<?php include_once ROOT_DIR . "views/admin/header.php" ?>
<div>
<?php if(isset($_SESSION['message']) && $_SESSION['message'] != ''): ?>
        <div class="mt-3 mb-3 alert alert-success">
            <?= $_SESSION['message'] ?>
        </div>
        <?php unset($_SESSION['message']); // Xóa thông báo sau khi hiển thị ?>
    <?php endif; ?>
    <form class="mt-3" action="<?= ADMIN_URL . '?ctl=updatedm' ?>" method="post">
        <div class="mb-3">
            <label for="">Cập nhật danh mục</label>
            <input type="text" name="cate_name" value="<?= $category['cate_name'] ?>" class="form-control">
        </div>

        <input type="hidden" name="id" value="<?= $category['id'] ?>">
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Cập nhật danh mục</button>
        </div>
    </form>
</div>
<?php include_once ROOT_DIR . "views/admin/footer.php" ?>