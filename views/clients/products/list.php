<?php include_once ROOT_DIR . "/clients/header.php"?>
<div class="container mt-5">
<h2><?= $category_name?></h2>
<div class="row g-4">
    <?php if ($products):?>
    <?php foreach ($products as $product): ?>
    <div class="col-md-3">
        <div class="product-box">
            <img src="<?= ROOT_URL .  $product['image']?>" alt="Product Image" class="product-img">
            <div class="product-info">
                <a href="<?=ROOT_URL.'?ctl=detail&id=' . $product['id']?>">
                    <h5 class="product-name"><?= $product['name']?></h5>
                </a>
                <div>
                    <span class="product-price"><?= number_format($product['price'])?>đ</span>
                </div>
                <div class="product-buttons">

                    <a class="btn btn-outline-success">Thêm vào giỏ hàng</a>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach?>
    <?php else  :?>
        <div>Danh mục <strong><?=$category_name?></strong> chưa có sản phẩm!</div>
        <?php endif?>
</div>
</div>
<?php include_once ROOT_DIR . "/clients/footer.php"?>
