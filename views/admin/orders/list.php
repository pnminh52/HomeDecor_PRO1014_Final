<?php include_once ROOT_DIR . "views/admin/header.php"?>
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
    .btnedit {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        display: inline-block;
    }
    .table th, .table td {
        text-align: center;
        vertical-align: middle;
    }

    .table .btn {
        margin: 0 5px;
    }
</style>
<div class="container">
<div class="cart-header ">
    <h2>Danh sách đơn hàng</h2>
  </div>
    <div class="cart-count-badge">
<table class="table table-bordered align-middle">
  <thead class="table">
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Họ tên</th>
      <th scope="col">SĐT</th>
      <th scope="col">Phương thức thanh toán</th>
      <th scope="col">Trạng thái</th>
      <th scope="col">Tổng tiền</th>
      <th scope="col">Ngày mua</th>
      <th scope="col">Hành động</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $stt=1;
    foreach($orders as $order): ?>
    <tr>
      <th scope="row"><?= $stt++?></th>
      <td><?= $order['fullname']?></td>
      <td><?= $order['phone']?></td>
      <td><?= $order['payment_method']?></td>
      <td><?= getOrderStatus($order['status'])?></td>
      <td class="text-danger"><?= number_format($order['total_price'])?>VNĐ</td>
        <td>  <?=date('d-m-Y H:i:s' , strtotime($order['created_at']))?></td>

      <td>
      <a href="<?= ADMIN_URL . '?ctl=detail-order&id=' .$order['id'] ?>" class=" btnedit">Cập nhật</a>
      </td>
    </tr>
    <?php endforeach?>
  </tbody>
</table>
</div>

<?php include_once ROOT_DIR . "views/admin/footer.php" ?>

