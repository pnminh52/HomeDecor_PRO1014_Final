<?php include_once ROOT_DIR . "views/admin/header.php"?>

<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-dark text-white">
            <h4>Chi tiết đơn hàng</h4>
        </div>
        <!-- thông tin đơn hàng -->
        <div class="card-body">
            <div class="mb-4">
                <h5>Mã đơn hàng: #<?= $order['id']?></h5>
                <p><strong>Ngày đặt hàng : </strong> <?= date('d-m-Y H:i:s', strtotime($order['created_at']))?></p>
            </div>
            <!-- thông tin khách hàng -->
             <div class="mb-4">
                <h5>Thông tin khách hàng</h5>
                <p><strong>Họ tên :</strong><?= $order['fullname'] ?></p>
                <p><strong>Email :</strong><?= $order['email'] ?></p>
                <p><strong>Điện thoại :</strong><?= $order['phone'] ?></p>
                <p><strong>Địa chỉ :</strong><?= $order['address'] ?></p>
             </div>
             <!-- danh sách sản phẩm -->
              <div class="mb-4">
                <h5>Danh sách sản phẩm</h5>
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
                            <td><?= number_format($detail['price'])?></td>
                            <td><?= number_format($detail['quantity'] * $detail['price']) ?> VND</td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                    
                    <tfoot>
    <tr>
        <th colspan="5" class="text-end">Tổng cộng</th>
        <th>
            <?= number_format(array_reduce($order_details, function ($sum, $detail) {
                return $sum + ($detail['price'] * $detail['quantity']);
            }, 0)) ?> VND
        </th>
    </tr>
</tfoot>
                </table>
              </div>
              <!-- cập nhập trạng thái đơn hàng -->
               <div class="mb-4">
                <h5>cập nhập trạng thái đơn hàng</h5>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="orderStatus" class="form-label">Trạng thái đơn hàng</label>
                        <select name="status" id="orderStatus" class="form-select">
                            <?php foreach($status as $key=>$value):?>
                        <option value="<?=$key?>"<?=$order['status']==$key?'selected':''?>
                            <?php
                            if ($order['status'] == 2  && in_array($key, [1,4])) {
                                echo "disabled";
                            }elseif ($order['status'] == 3  && in_array($key, [1, 2, 4])) {
                                echo "disabled";
                            }


                            ?>
                        
                        
                        
                        >
                            <?=$value?>
                        </option>
                        <?php endforeach?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </form>
               </div>
            </div>
    </div>
</div>

<?php include_once ROOT_DIR . "views/admin/footer.php" ?>