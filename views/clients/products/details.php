<?php include_once ROOT_DIR . "views/clients/header.php" ?>
<style>
    .product-box {
    text-align: center;
    padding: 10px;
    transition: border 0.3s ease; 
    border: 1px solid transparent;
    background-color: #fff; 
    height: 100%; 
    display: flex;
    flex-direction: column; 
    justify-content: space-between; 
}

.product-box:hover {
    border: 1px solid #ddd; 
}

.product-info {
    margin-top: 10px; 
}

.product-img {
    width: 100%;
    height: auto;
    max-height: 150px; 
    object-fit: cover; 
    border-radius: 8px;
    cursor: pointer;
}

.product-buttons {
    margin-top: 10px; 
}

h2 {
    font-size: 1.5rem !important; 
    font-weight: bold !important;
    margin-top: 20px !important;
    margin-bottom: 30px !important;
    border-bottom: 1px solid #ddd;
    height: 40px !important;
}

.product-name {
    font-size: 1rem;
    font-weight: lighter; 
    margin: 10px 0;
    color: black;
    text-decoration: none;
    font-family: Arial, sans-serif; 
}

.product-price {
    color: black;
    font-size: 1rem;
    font-weight: lighter;
}
.prd-title {
    font-size: 1.5rem !important;
    font-weight: lighter !important;
    margin: 0;
    font-family: 'Arial', sans-serif !important;  
    border-bottom: 1px solid #ddd;
    height: 40px;
}
.stock-status {
    font-size: 1rem; 
    padding: 0.5rem 1rem; 
    font-weight: lighter; 
    border-radius: 1rem; 
}

.status-success {
    background-color: #28a745;
    color: white;
    padding: 5px 10px;
    font-weight: normal;
    border-radius: 0.5rem;
    display: inline-block;
    font-family: 'Arial', sans-serif !important;
    border: 1px solid; 
    border-radius: 50px;
    cursor: pointer;
    opacity: 0.9;
}

.status-danger {
    background-color: #dc3545;
    color: white;
    padding: 5px 10px;
    font-weight: normal;
    border-radius: 0.5rem;
    display: inline-block;
    font-family: 'Arial', sans-serif !important;
    border: 1px solid; 
    border-radius: 50px;
    cursor: pointer;
    opacity: 0.9; 
}



</style>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="<?= ROOT_URL ."/productimages/" . $product['image']?>" alt="<?=$product['name']?>" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <h1 class="display-5"><?=$product['name']?></h1>
                <p class="text-muted">Trạng thái:
                    <?php if($product['quantity']>0):?>
                    <span class="status-success">Còn hàng</span> 
    
                </p>
                <?php else:?>
                    <span class="status-danger">Hết hàng</span> 
                    <?php endif?>
                <h3 class="text-danger"><?= number_format($product['price']) ?>đ</h3>
                <p><strong>Số lượng còn: </strong><?=$product['quantity']?> </p>
              
                <p><strong>Danh mục: </strong><?= $product['cate_name'] ?></p>
          
                <p class="mt-4">
                    <strong>Mô tả sản phẩm:</strong><br>
                    <?=$product['description']?>
                </p>
       
                <div class="mt-4">
                    <a class="btn btn-outline-dark " href="<?= ROOT_URL . '?ctl=add-cart&id=' . $product['id'] ?>" style="border-radius: 0;"><i class="bi bi-cart-plus"></i> Thêm vào giỏ hàng </a>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <h2 class="prd-title">Mô tả chi tiết</h2>
                <p>
                <?=$product['content']?>
                </p>
            </div>
        </div>


        <h2 class="prd-title">Bình luận</h2>


         <div class="comment">
         <?php foreach($comments as $comment): ?>
            <p>
                <b><?= $comment['fullname'] ?></b> (<?= date('d-m-Y H:i:s', strtotime
                ($comment['created_at']))   ?>) <br>
                <?= $comment['content'] ?>
            </p>
            <?php endforeach ?>
            
        <?php if (isset($_SESSION['user'])): ?>
            <form action="" method="post">
                <textarea name="content" placeholder="Nhập bình luận của bạn" rows="3" cols="60" require id=""></textarea>
                <br><button type="submit">Gửi</button>
            </form>
            <?php else: ?>
                <div>Bạn cần<b> <a href="<?= ROOT_URL . '?ctl=login'?>">đăng nhập</a> </b>để bình luận</div>
            <?php endif ?>
    </div>
    
    <div class="container mt-5">
<h2 class="prd-title">Các sản phẩm khác có liên quan</h2>
<div class="row g-4">
  
    <?php foreach ($productReleads as $product): ?>
        <div class="col-md-3">
        <div class="product-box">
    

            <img src="<?= ROOT_URL . '/productimages/' .  $product['image']?>" alt="Product Image" class="product-img">
            <div class="product-info">
                <a href="<?=ROOT_URL.'?ctl=details&id=' . $product['id']?>" class="product-name">
                    <h5><?= $product['name'] ?></h5>
                </a>
                <div>
                    <span class="product-price"><?= number_format($product['price'])?>đ</span>
                </div>
            </div>
            <div class="product-buttons d-flex">
        <a class="btn btn-outline-dark " href="<?= ROOT_URL.'?ctl=details&id=' . $product['id'] ?>"  style="border-radius: 0;">Xem thêm</a>
    </div>


        </div>
    </div>
    <?php endforeach?>
   
</div>
</div>

<?php include_once ROOT_DIR . "views/clients/footer.php" ?>
