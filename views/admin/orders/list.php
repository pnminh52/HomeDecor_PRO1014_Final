<?php include_once ROOT_DIR . "views/admin/header.php"?>

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Họ tên</th>
      <th scope="col">Số điện thoại</th>
      <th scope="col">Phương thức thanh toán</th>
      <th scope="col">Trạng thái</th>
      <th scope="col">Tổng tiền</th>
      <th scope="col">Ngày mua</th>
      <th scope="col">Hành động</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($orders as $order): ?>
    <tr>
      <th scope="row"><?= $order['id']?></th>
      <td><?= $order['fullname']?></td>
      <td><?= $order['phone']?></td>
      <td><?= $order['payment_method']?></td>
      <td><?= translate_status($order['status'])?></td>
      <td><?= number_format($order['total_price'])?>VNĐ</td>
      <!-- <td><= $order['created_at']?></td> -->
      <!-- <td><= $order['id'] ?></td> -->
       <!-- tôi comment lại do lỗi -->
        <td>  <?=date('d-m-Y H:i:s' , strtotime($oder['created_at']))?></td>

      <td>
        <a href="<?ADMIN_URL . '?ctl=detail-order'?>" class="btn btn-primary">Cập nhật</a>
      </td>
    </tr>
    <?php endforeach?>
  </tbody>
</table>
</div>

<?php include_once ROOT_DIR . "views/admin/footer.php" ?>