<?php include_once ROOT_DIR . "views/admin/header.php"?>

<div class="container mt-5">
    <?php if ($message != "") : ?>
        <div class="alert alert-success">
            <?= $message ?>

        </div>
        <?php endif ?>
    <div class="category-header">
    <h2>Chi tiết đơn hàng </h2>
    </div>
        <!-- thông tin đơn hàng -->
        <div class="card-body">
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
               <div class="category-header">
    <h2>Cập nhập trạng thái đơn hàng </h2>
    </div>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="orderStatus" class="form-label">Trạng thái đơn hàng</label>
                        <select name="status" id="orderStatus" class="form-select">
                            <?php foreach($status as $key=>$value):?>
                        <option value="<?=$key?>"
                        <?=$order['status']== $key  ?'selected': '' ?>
                            <?php
                            if ($order['status'] == 2  && in_array($key, [1, 4])) {
                                echo "disabled";
                            }elseif ($order['status'] == 3  && in_array($key, [1, 2, 4])) {
                                echo "disabled";
                            }elseif ($order['status'] == 4  && in_array($key, [1, 2, 3])) {
                                echo "disabled";
                            }


                            ?>>
                            <?=$value?>
                        </option>
                        <?php endforeach?>
                        </select>
                    </div>
                    <button type="submit" class="btnupdate">Cập nhật</button>
                </form>
               </div>
            </div>
    </div>


<?php include_once ROOT_DIR . "views/admin/footer.php" ?>
<style>
    .category-header h2 {
        font-size: 1.5rem !important;
        font-weight: thin !important;
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .category-header {
        display: flex;
        align-items: center;
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
        margin-bottom: 30px;
        margin-top: 20px;
    }

 




    /* Nút "Sửa danh mục" */
    .btnupdate {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        display: inline-block;
        border: 1px solid #007bff;

    }


    /* Bảng */
    .table th, .table td {
        text-align: center;
        vertical-align: middle;
    }

    .table .btn {
        margin: 0 5px;
    }
</style>