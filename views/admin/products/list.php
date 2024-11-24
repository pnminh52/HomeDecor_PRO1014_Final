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
    <tbody>
       <?php foreach ($products as $pro):?>
        <tr>
            <th scope="row"><?= $pro['id']?></th>
            <td><?= $pro['name']?></td>
            <td><img src="<?= ROOT_URL . $pro['image']?>" width="60" alt=""></td>
            <td><?= $pro['price']?></td>
            <td> <?= $pro['status']? 'Đang kinh doanh' : 'Ngừng kinh doanh'?></td>
            <td><?= $pro['cate_name']?></td>
            <td>
                <a href="<?= ADMIN_URL .  '?ctl=edit&id' . $pro['id']?>">
                    <button class="btn btn-primary">Sửa sản phẩm</button>
                </a>
                <a href="<?= ADMIN_URL .  '?ctl=deletesp&id' . $pro['id']?>">
                    <button class="btn btn-primary" onclick="return confirm('Bạn có muốn xóa sản phẩm không?')">Xóa sản phẩm</button>
                </a>
            </td>
        </tr>
        <?php endforeach?>
    </tbody>
  </table>
      
</div>
<?php include_once ROOT_DIR . "/admin/footer.php" ?>