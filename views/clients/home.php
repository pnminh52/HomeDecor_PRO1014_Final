<?php include_once ROOT_DIR . "views/clients/header.php"?>
<div class="container mt-5">
<h2>Bàn gỗ</h2>
<div class="row g-4">
    <?php foreach ($tables as $table): ?>
    <div class="col-md-3">
        <div class="product-box">
            <img src="<?= ROOT_URL .  $table['image']?>" alt="Product Image" class="product-img">
            <div class="product-info">
            <a href="<?=ROOT_URL.'?ctl=detail&id=' . $table['id']?>">
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
<h2>Tủ ly</h2>
<div class="row g-4">
<?php foreach ($cupboards as $cupboard): ?>
    <!-- Box Sản Phẩm -->
    <div class="col-md-3">
        <div class="product-box">
            <img src="<?= ROOT_URL .  $cupboard['image']?>" alt="Product Image" class="product-img">
            <div class="product-info">
                <a href="#">
                    <h5 class="product-name"><?= $cupboard['name']?></h5>
                </a>
                <div>
                    <span class="product-price"><?= number_format($cupboard['price'])?>₫</span>
                </div>
                <div class="product-buttons">

                    <button class="btn btn-outline-success">Thêm vào giỏ hàng</button>
                </div>
            </div>
        </div>
    </div>

    <?php endforeach?>
</div>
</div>
<?php include_once ROOT_DIR . "views/clients/footer.php"?>
