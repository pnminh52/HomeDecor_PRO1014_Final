<?php include_once ROOT_DIR . "views/clients/header.php" ?>

<div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="<?= $product['image']?>" alt="<?=$product['name']?>" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <h1 class="display-5"><?=$product['name']?></h1>
                <p class="text-muted">Trạng thái:
                    <?php if($product['quantity']>0):?>
                    <span class="badge bg-success">Còn hàng</span> 
    
                </p>
                <?php else:?>
                    <span class="badge bg-danger">Hết hàng</span> 
                    <?php endif?>
                <h3 class="text-danger"><?= number_format($product['price']) ?>đ</h3>
                <p><strong>Số lượng còn:</strong><?=$product['quantity']?> </p>
                <p class="mt-4">
                    <strong>Mô tả sản phẩm:</strong><br>
                    <?=$product['description']?>
                </p>
       
                <div class="mt-4">
                    <a href="<?= ROOT_URL . '?ctl=add-cart&id=' . $product['id'] ?>" class="btn btn-primary btn-lg">
                        <i class="bi bi-cart-plus"></i> Thêm vào giỏ hàng
                    </a>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <h2>Mô tả chi tiết</h2>
                <p>
                <?=$product['content']?>
                </p>
            </div>
        </div>
    </div>
    <div class="container mt-5">
<h2>Các sản phẩm khác có liên quan:</h2>
<div class="row g-4">
  
    <?php foreach ($productReleads as $product): ?>
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

                    <a href="<?= ROOT_URL . '?ctl=add-cart&id=' . $product['id'] ?>" class="btn btn-outline-success">Thêm vào giỏ hàng</a>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach?>
   
</div>
</div>
<?php include_once ROOT_DIR . "views/clients/footer.php" ?>
