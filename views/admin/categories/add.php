<?php include_once ROOT_DIR . "/admin/header.php" ?>
<div class="container">
    <form action="<?= ADMIN_URL . '?ctl=storedm' ?>" method="post" enctype="multipart/form-data">
        <div class="bt-3">
            <label class="form-label" for="">Thêm mới danh mục</label>
            <input type="text" name="cate_name" id="" class="form-control">

        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Thêm mới</button>
        </div>
    </form>
</div>
<?php include_once ROOT_DIR . "/admin/footer.php" ?>