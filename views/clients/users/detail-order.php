<?php include_once ROOT_DIR . "views/clients/header.php"?>
<style>
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
    .table th, .table td {
    text-align: center; 
}
.deletebtn {
    background-color: #f44336; 
    color: white;
    border: 1px solid #f44336;
    padding: 8px 16px; 
    font-size: 16px; 
}
.deletebtn i, .btnupdate i {
    margin-right: 5px; 
    font-size: 18px; 
}
.btnupdate {
    color: #000 !important; 
    background-color: #fff !important;
    border: 1px solid #000 !important;
    border-radius: 0 !important; 
    transition: all 0.3s ease-in-out !important; 
    padding: 8px 16px; 
    font-size: 16px;
    text-decoration: none;
}
.btnupdate:hover {
    color: #fff !important; 
    background-color: #000 !important;
}

</style>
<div class="container mt-5">
    <div class="category-header">
    <h2>Chi tiết đơn hàng</h2>
    </div>
            <div class="mb-4">
        <table class="table table-bordered">
          <thead class="table">
          <tr>
                <th>Mã đơn hàng</th>
                <th> Ngày đặt hàng</th>
                <th>Họ tên</th>
                <th>Email</th>
                <th>SĐT</th>
                <th>Địa chỉ</th>
                <th>Trạng thái đơn hàng</th>
            </tr>
          </thead>
           
            <tbody class="table">
            <td><?= $order['id']?></td>
            <td><?= date('d-m-Y / H:i:s', strtotime($order['created_at']))?></td>
                <th><?=$order['fullname']?></th>
                <td><?=$order['email']?></td>
                <td><?=$order['phone']?></td>
                <td><?=$order['address']?></td>
                <td><?=getOrderStatus($order['status'])?></td>
        
            </tbody>
        </table>
    </div>
             <div class="category-header">
    <h2>Các sản phẩm đã đặt </h2>
    </div>
              <div class="mb-4">
                
                <table class="table table-bordered">
                    <thead>
                        <tr>    
                            <th>#</th>
                            <th>Sản phẩm</th>
                            <th>Ảnh</th>
                            <th>Số lượng</th>
                            <th>Giá tiền</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($order_details as $stt => $detail) : ?>
                        <tr>
                            <td><?= $stt+1 ?></td>
                            <td><?= $detail['name']?></td>
                            <td><img src="<?= ROOT_URL . "/productimages/" .  $detail['image']?>" width="60" alt=""></td>
                            <td><?= $detail['quantity']?></td>
                            <td class="text-danger"><?= number_format($detail['price'])?></td>
                            <td class="text-danger"><?= number_format($detail['quantity'] * $detail['price']) ?> VND</td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                    
                    <tfoot>
    <tr>
        <th colspan="5" class="text-end">Tổng cộng</th>
        <th class="text-danger">
            <?= number_format(array_reduce($order_details, function ($sum, $detail) {
                return $sum + ($detail['price'] * $detail['quantity']);
            }, 0)) ?> VND
        </th>
    </tr>
</tfoot>
                </table>
              </div>
              <div class="d-flex justify-content-between">
                    <a href="<?=ROOT_URL . '?ctl=list-order'?>" class="btnupdate"><i class="bi bi-arrow-left"></i>Quay lại danh sách đơn hàng</a>
                    <?php if($order['status']===1):?>
                        <form action="" method="post">
                        
                        <button class="deletebtn"><i class="bi bi-trash"></i>Hủy đơn hàng</button>

                        </form>
                    <?php endif?>
                </div>
            </div>
    </div>


<?php include_once ROOT_DIR . "views/clients/footer.php" ?>