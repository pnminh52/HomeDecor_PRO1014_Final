<?php include_once ROOT_DIR ."views/clients/header.php" ?>

<style>
    footer {
     margin-top: 200px !important;
}
    .cart-header {
    display: flex;
    align-items: center;
    border-bottom: 1px solid #ddd;
    padding-bottom: 10px;
    margin-bottom: 30px;
    margin-top: 20px;
}

.cart-count-badge {
    position: relative;
    display: inline-block;
    background-color: red;
    color: white;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    text-align: center;
    font-size: 12px;
    line-height: 20px;
    font-weight: bold;
    margin-left: 10px; 
}

    .cart-header h2 {
        font-size: 1.5rem !important;
        font-weight: thin !important;
        margin: 0; 
        font-family: Arial, sans-serif;
    }


    .btn-checkout {
        background-color: #000 !important; 
        color: #fff !important; 
        border: none !important;
        border-radius: 0 !important; 
        transition: none !important; 
    }

    .btn-checkout:hover {
        background-color: #000; 
        color: #fff; 
    }

    .btn-update {
    color: #000 !important; 
    background-color: #fff !important;
    border: 1px solid #000 !important;
    border-radius: 0 !important; 
    transition: all 0.3s ease-in-out !important; 
}
.btn-update:hover {
    color: #fff !important; 
    background-color: #000 !important;
}


    .table {
        width: 100%;
        border-collapse: collapse;
        font-family: 'Arial', sans-serif;
        background-color: #fff;
        overflow: hidden;
        border-radius: 1px;
    }

    .table thead {
        background-color:rgb(255, 255, 255);
        text-transform: uppercase;
        font-size: 0.9rem;
        color: #333;
        border-bottom: 2px solid #ddd;
    }

    .table thead th {
        padding: 15px;
        font-weight: 600;
        text-align: center;
    }

    .table tbody tr {
        border-bottom: 1px solid #eee;
        transition: background-color 0.3s ease;
        text-align: center;
    }

    .table tbody tr:hover {
        background-color:rgb(255, 255, 255);
    }

    .table tbody td {
        padding: 15px;
        font-size: 0.95rem;
        color: #555;
        text-align: center;

    }

    .table tbody img {
        border-radius: 3px;
        box-shadow: 0 2px 4px rgba(194, 192, 192, 0.1);
    }

    .table tfoot {
        background-color:rgb(255, 255, 255);
        font-weight: 600;
        color: #d9534f;
    }

    .table tfoot td {
        padding: 15px;
        text-align: right;
    }
    .btn-danger,
.btn-warning {
    opacity: 0.7;
    transition: opacity 0.3s ease-in-out;
}

.btn-danger:hover, 
.btn-warning:hover {
    opacity: 1; 
}

.quantity-container {
    display: flex;
    align-items: center;
    justify-content: center;
    width: max-content;
    border: 1px solid #ddd;
    border-radius: 5px;
    overflow: hidden;
}

.quantity-container button {
    width: 30px;
    height: 30px;
    border: 1px;
    background-color: #f8f9fa;
    color: #333;
    font-weight: lighter;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}
.quantity-container input.quantity-input {
    width: 50px;
    height: 30px;
    text-align: center;
    border: 1px;
    outline: none;
    font-size: 1rem;
    font-weight: lighter;
    box-shadow: none;
    -moz-appearance: textfield; 
    -webkit-appearance: none; 
    appearance: none;
     
}

.quantity-container input.quantity-input::-webkit-inner-spin-button, 
.quantity-container input.quantity-input::-webkit-outer-spin-button {
    -webkit-appearance: none; 
    margin: 0; }
    .cart-count-badge {
    position: relative;
    display: inline-block;
    background-color: red;
    color: white;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    text-align: center;
    font-size: 12px;
    line-height: 20px;
    font-weight: bold;
    margin-left: 10px;
}


</style>
<script>
    document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".increment").forEach(btn => {
        btn.addEventListener("click", function () {
            const input = this.closest("td").querySelector(".quantity-input");
            input.value = parseInt(input.value) + 1;  
            updateCartCount();
        });
    });

    document.querySelectorAll(".decrement").forEach(btn => {
        btn.addEventListener("click", function () {
            const input = this.closest("td").querySelector(".quantity-input");
            const currentValue = parseInt(input.value);
            if (currentValue > 1) {
                input.value = currentValue - 1;  
            }
            updateCartCount();
        });
    });

    
    const deleteButtons = document.querySelectorAll(".btn-danger");
    deleteButtons.forEach(btn => {
        btn.addEventListener("click", function () {
            setTimeout(updateCartCount, 500); 
        });
    });

    function updateCartCount() {
        let totalItems = 0;
        document.querySelectorAll(".quantity-input").forEach(input => {
            totalItems += parseInt(input.value);
        });
        document.getElementById("cart-count").innerText = totalItems;
    }

    updateCartCount();
});


</script>

<div class="container mt-5">
<div class="cart-header ">
    <h2>Giỏ hàng của bạn</h2>
    <div class="cart-count-badge">
        <?php $cartCount = array_sum(array_column($carts, 'quantity')); ?>
        <span id="cart-count"><?= $cartCount ?></span> <!-- Cart item count -->
    </div>
</div>
    <form action="<?php echo ROOT_URL . '?ctl=update-cart'; ?>" method="POST">
    <div class="table-responsive">
    <?php if (isset($_SESSION['message'])): ?>
    <div class="alert alert-<?= $_SESSION['message']['type'] ?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']['content'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION['message']);?>
<?php endif; ?>

            <table class="table table-bordered align-middle">
                <thead class="table">
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Thành tiền</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($carts as $id => $cart) : ?>
                    <tr>
                        <th scope="row"><?= $id ?></th>
                        <td>
                            <img src="<?= ROOT_URL."/productimages/". $cart['image'] ?>" alt=""  style="width: 80px; height: auto" />
                        </td>
                        <td><?= $cart['name'] ?></td>
                        <td ><?= number_format($cart['price']) ?>VNĐ</td>
                        <td>
                            <div class="quantity-container">
                                <button type="button" class="decrement" data-id="<?= $id ?>">-</button>
                                <input type="number" name="quantity[<?= $id ?>]" class="quantity-input" value="<?= $cart['quantity'] ?>" min="1">
                                <button type="button" class="increment" data-id="<?= $id ?>">+</button>
                            </div>
                        </td>


                        <td class="text-danger"><?= number_format($cart['price'] * $cart['quantity']) ?>VNĐ</td>
                        <td>
                        <a href="<?= ROOT_URL . '?ctl=delete-cart&id=' . $id?>" type="button" class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"></i> Xóa
                            </a>
                            <a href="<?= ROOT_URL . '?ctl=details&id=' . $id?>" type="button" class="btn btn-warning btn-sm">
                                <i class="bi bi-search"></i> Chi tiết
                            </a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
                <!-- Tổng tiền -->
                <tfoot class="table">
                    <tr>
                        <td colspan="5" class="text-end fw-bold">Tổng tiền:</td>
                        <td colspan="2" class="fw-bold text-danger"><?= number_format($sumPrice)?>VNĐ</td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- Nút hành động -->
        <div class="d-flex justify-content-between mt-4">
            <a href="<?= ROOT_URL?>" class="btn btn-update">
                <i class="bi bi-arrow-left"></i> Tiếp tục mua sắm
            </a>
            <div>
                <button type="submit" class="btn btn-update">
                    <i class="bi bi-arrow-clockwise"></i> Cập nhật giỏ hàng
                </button>
                <a class="btn btn-checkout" href="<?= ROOT_URL . '?ctl=view-checkout' ?>">Thanh toán</a>
                </div>
        </div>
    </form>
</div>

<?php include_once ROOT_DIR ."views/clients/footer.php" ?>