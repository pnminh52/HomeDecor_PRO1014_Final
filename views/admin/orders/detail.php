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
                <p><strong>Ngày đặt hàng : </strong> <? = date('d-m-Y H:i:s', strtotime($oder['created_at']))?></p>
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
                            <th>Số lượng</th>
                            <th>Gía</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($order_details as $stt => $detail) : ?>
                        <tr>
                            <td><? $stt+1 ?></td>
                            <td><?= $detail['name']?></td>
                            <td><?= $detail['price']?></td>
                            <td><?= number_format($detail['price'])?></td>
                            <td><?= $detail['quantity']?></td>
                            <td><?= number_format($detail['price'] * $detail['quantity'])?>VND</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="4" class="text-end">Tổng cộng</th>
                            <th><?= number_format($detail['total_price']) ?>VND</th>
                        </tr>
                        <?php endforeach ?>
                    </tfoot>
                </table>
              </div>
              <!-- cập nhập trạng thái đơn hàng -->
               <div class="mb-4">
                <h5>cập nhập trạng thái đơn hàng</h5>
                <form action="/update-order-status" method="POST">
                    <div class="mb-3">
                        <label for="orderStatus" class="form-label">Trạng thái đơn hàng</label>
                        <select name="orderStatus" id="orderStatus" class="form-select">
                            <option value="pending"></option>
                        </select>
                    </div>
                </form>
               </div>
            </div>
    </div>
</div>

<?php include_once ROOT_DIR . "views/admin/footer.php" ?>