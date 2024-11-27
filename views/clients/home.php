<?php include_once ROOT_DIR . "views/clients/header.php"?>
<div class="container mt-5">

 <style>
    .carousel-inner img {
        height: 400px; 
        object-fit: cover; 
        width: 100%; 
    }
</style>

 <div id="productSlideshow" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php 
            $images = ['1.jpg', '2.jpg']; // Danh sách tên ảnh
            foreach ($images as $index => $image): ?>
            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                <img src="<?= ROOT_URL . 'images/clients/' . $image ?>" class="d-block w-100" alt="Slideshow Image <?= $index + 1 ?>">
               
            </div>
            <?php endforeach; ?>
        </div>
        <div class="carousel-caption d-none d-md-block">
                    <h5>HomeDecor</h5>
                    <p>Khám phá các sản phẩm nổi bật.</p>
                </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#productSlideshow" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#productSlideshow" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

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
