<?php include_once ROOT_DIR . "/clients/header.php"?>
<div class="container mt-5">
<h2>Bàn gỗ</h2>
<div class="row g-4">
    <?php foreach ($tables as $table): ?>
    <div class="col-md-3">
        <div class="product-box">
            <img src="<?= ROOT_URL .  $table['image']?>" alt="Product Image" class="product-img">
            <div class="product-info">
                <a href="#">
                    <h5 class="product-name"><?= $table['name']?></h5>
                </a>
                <div>
                    <span class="product-price"><?= number_format($table['price'])?>đ</span>
                </div>
                <div class="product-buttons">

                    <a class="btn btn-outline-success">Thêm vào giỏ hàng</a>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach?>
</div>
</div>
<?php include_once ROOT_DIR . "/clients/footer.php"?>
