<?php include_once ROOT_DIR . "views/clients/header.php"?>
<style>

.detailbtn {
    background-color: #fff;
    color: black;

    transition: background-color 0.3s, color 0.3s;
    text-decoration: none;
    padding: 2px 12px; 
    font-size: 15px;
}


.table th, .table td {
    text-align: center; 
}
.category-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
        margin-bottom: 30px;
        margin-top:20px
    }

    .category-header h2 {
        font-size: 1.5rem !important;
        font-weight: thin !important;
        margin: 0; 
        font-family: Arial, sans-serif;
    }
</style>
<div class="container">
<div class="category-header">
    <h2>Thông tin khách hàng</h2>
    </div>
<div class="mb-4">
        <table class="table table-bordered">
          <thead class="table">
          <tr>
                <th>Họ tên</th>
                <th>Email</th>
                <th>SĐT</th>
                <th>Địa chỉ</th>
            </tr>
          </thead>
           
            <tbody class="table">
          
                <th><?=$user['fullname']?></th>
                <td><?=$user['email']?></td>
                <td><?=$user['phone']?></td>
                <td><?=$user['address']?></td>
        
            </tbody>
        </table>
    </div>
    <div class="category-header">
    <h2>Lịch sử đặt hàng </h2>
    </div>
<table class="table table-bordered align-middle">
  <thead class="table">
    <tr>
      <th scope="col">STT</th>

      <th scope="col">Phương thức thanh toán</th>
      <th scope="col">Trạng thái</th>
      <th scope="col">Tổng tiền</th>
      <th scope="col">Ngày mua</th>
      <th scope="col">Hành động</th>
    </tr>
  </thead>
  <tbody class="table">
    <?php $stt=1; foreach($orders as $order): ?>
    <tr>
      <th scope="row"><?= $stt++?></th>

      <td><?= $order['payment_method']?></td>
      <td><?= getOrderStatus($order['status'])?></td>
      <td class="text-danger"><?= number_format($order['total_price'])?>VNĐ</td>
        <td>  <?=date('d-m-Y H:i:s' , strtotime($order['created_at']))?></td>

      <td>
      <a href="<?= ROOT_URL . '?ctl=order-detail-users&id=' . $order['id'] ?>" class="detailbtn"><i class="bi bi-search"></i> Chi tiết</a>
      </td>
    </tr>
    <?php endforeach?>
  </tbody>
</table>
</div>

<?php include_once ROOT_DIR . "views/clients/footer.php" ?>