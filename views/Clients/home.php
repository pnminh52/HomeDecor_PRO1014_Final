<?php include_once ROOT_DIR . "/clients/header.php"?>

<div class="container mt-5">
    <h1>Ban go</h1>
    <div class="row g-4">
        <?php foreach ($table as $table): ?>

            <div class="col-md-3">
                <div class="product-box">
                    <img src="images/<?= $table['image'] ?>" alt="Product Image" class="product-img">
                    <div class="product-info">
                        <a href="#">
                            <h5 class="product-name"><?= $table['name'] ?></h5>
                        </a>
                        <div>
                            <span class="product-price"><?= $table['price'] ?></span>
                        </div>
                        <div class="product-buttons">
                            <button class="btn btn-outline-success">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <h1>Sản phẩm dành noi that</h1>
    <div class="row g-4">
        <?php foreach ($list_products as $pro) : ?>
            <div class="col-md-3">
                <div class="product-box">
                    <img src="images/<?= $pro['image'] ?>" alt="Product Image" class="product-img">
                    <div class="product-info">
                        <a href="#">
                            <h5 class="product-name"><?= $pro['name'] ?></h5>
                        </a>
                        <div>
                            <span class="product-price"><?= $pro['price'] ?></span>

                        </div>
                        <div class="product-buttons">

                            <button class="btn btn-outline-success">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<?php include_once ROOT_DIR . "/clients/footer.php"?>