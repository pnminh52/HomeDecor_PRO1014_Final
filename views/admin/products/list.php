<?php include_once ROOT_DIR . "/admin/header.php" ?>
<div class="conteiner">
<?php if(isset($_SESSION['message']) && $_SESSION['message'] != ''): ?>
        <div class="mt-3 mb-3 alert alert-success">
            <?= $_SESSION['message'] ?>
        </div>
        <?php unset($_SESSION['message']); // Xóa thông báo sau khi hiển thị ?>
    <?php endif; ?>
  <table class="table">
    <thead>
        <tr>
            <td scope="col">ID</td>
            <td scope="col">Tên sản phẩm</td>
            <td scope="col">Hình ảnh</td>
            <td scope="col">Giá</td>
            <td scope="col">Trạng thái</td>
            <td scope="col">Danh mục</td>
            <td>
                <a href="<?=ADMIN_URL .'?ctl=addsp=' ?>" class="btn btn-primary">
                    Thêm mới
                </a>
            </td>
        </tr>
    </thead>
  </table>
      
</div>
<?php include_once ROOT_DIR . "/admin/footer.php" ?>