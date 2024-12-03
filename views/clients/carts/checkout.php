<?php include_once ROOT_DIR ."views/clients/header.php" ?>
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
    .btnupdate i {
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
    <h2>Thông tin thanh toán </h2>
    </div>
        <div class="row">
            <!-- Form thông tin thanh toán -->
            <div class="col-md-7">
                <form action="<?= ROOT_URL . '?ctl=checkout'?>" method="POST">
                    <!-- Thông tin người nhận -->
                    <div class="card mb-4">
                        <div class="card-header text-black">
                            <h5>Thông tin người nhận</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="fullName" class="form-label">Họ và tên</label>
                                <input type="text" class="form-control" value="<?=$user['fullname']?>" name="fullname"
                                    placeholder="Nhập họ tên" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Số điện thoại</label>
                                <input type="tel" class="form-control" value="<?=$user['phone']?>" name="phone"
                                    placeholder="Nhập số điện thoại" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" value="<?=$user['email']?>" name="email"
                                    placeholder="Nhập email" required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Địa chỉ giao hàng</label>
                                <textarea class="form-control" id="address" name="address" rows="3"
                                    placeholder="Nhập địa chỉ giao hàng" required <?$user['address']?>></textarea>
                            </div>

                            <input type="hidden" name="id" value="<?= $user['id']?>">
                            <div class="mb-3">
                            <label for="address" class="form-label">Phương thức thanh toán</label>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="payment_method" id="cod" value="cod"
                                    checked>
                                <label class="form-check-label" for="cod">
                                    Thanh toán khi giao hàng (COD)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" id="vnpay"
                                    value="vnpay">
                                <label class="form-check-label" for="vnpay">
                                    Thanh toán bằng VNPAY
                                </label>
                            </div>
                        </div>
                        
                            
                      
                        </div>
                    </div>
                    <!-- Nút xác nhận -->
                    <div class="text-end">
                        <button type="submit" class="btn btnupdate">
                            <i class="bi bi-check-circle"></i> Xác nhận thanh toán
                        </button>
                    </div>
                </form>
            </div>

            <!-- Thông tin giỏ hàng -->
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h5>Thông tin giỏ hàng</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <!-- Sản phẩm 1 -->
                             <?php foreach($carts as $cart): ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-0"><?=$cart['name']?></h6>
                                    <small class="text-muted">Số lượng: <?=$cart['quantity']?></small>
                                </div>
                                <span> <?=number_format($cart['price']*$cart['quantity'])?></span>
                            </li>
                           <?php endforeach?>
                        </ul>
                    </div>
                    <!-- Tổng tiền -->
                    <div class="card-footer text-end fw-bold">
    Tổng tiền: 
    <span class="text-danger">
        <?= number_format(array_reduce($carts, function ($sum, $cart) {
            return $sum + ($cart['price'] * $cart['quantity']);
        }, 0)) ?> VNĐ
    </span>
</div>

                </div>
            </div>
        </div>
    </div>

<?php include_once ROOT_DIR ."views/clients/footer.php" ?>