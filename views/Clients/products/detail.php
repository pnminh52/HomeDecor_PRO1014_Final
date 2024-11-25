<?php include_once ROOT_DIR . "/clients/header.php" ?>

<div class="container mt-5">
    <div class="row">
   
        <div class="col-md-6">
            <img src="<?= 'images/' . $product['image'] ?>" alt="Tên sản phẩm" class="img-fluid rounded">
        </div>
   
        <div class="col-md-6">
            <h1 class="display-5"><?= $product['name'] ?></h1>
            <p class="text-muted">Trạng thái:
                <span class="badge bg-success">
                    <?= $product['quantity'] ? 'Còn hàng' : 'hết hàng' ?>
                </span> 
            </p>
            <h3 class="text-danger">Giá: <?= number_format($product['price']) ?> VNĐ</h3>
            <p><strong>Số lượng còn:</strong> <?= $product['quantity'] ?></p>
            <p class="mt-4">
                <strong>Mô tả sản phẩm:</strong><br>
                <?= $product['description'] ?>
            </p>
            <div class="mt-4">
                <button class="btn btn-primary btn-lg">
                    <i class="bi bi-cart-plus"></i> Thêm vào giỏ hàng
                </button>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <h2>Mô tả chi tiết</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit
                arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.
            </p>
        </div>
    </div>
</div>

<?php include_once ROOT_DIR . "/clients/footer.php" ?>