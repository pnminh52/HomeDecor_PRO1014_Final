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
form {
    margin-bottom: 20px;
}


form select {
    font-size: 1rem;
    padding: 10px;
    border: none; 
    border-bottom: 1px solid #ccc; 
    width: 200px; 
    cursor: pointer;
    transition: border-bottom 0.3s ease; 
}

form select:focus {
    outline: none; 
}






.banner {
    position: relative;
    width: 100%;
    height: auto;
}

.banner img {
    height: 400px;
    object-fit: cover; 
    width: 100%; 
}

.banner-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%; 
    display: flex;
    flex-direction: column;
    justify-content: flex-end; 
    align-items: flex-start; 
    padding: 20px;
    box-sizing: border-box;
}

.banner p {
    color: white;
    margin: 0;
    padding-left: 100px;
    font-size:20px; 
    font-weight:normal;
}




    


</style>
<div class="banner">
    <img src="https://nhaxinh.com/wp-content/uploads/2022/04/banner-trang-chu-san-pham-dep-oki.jpg" alt="">
    <div class="banner-overlay">
        <p>Trang chủ / <?= $title ?></p>
    </div>
</div>


<div class="container mt-5">
    <form method="GET" action="">
    <h2 style="font-weight: bold; font-size: small; margin-bottom: 5px;">Giá</h2>    <input type="hidden" name="ctl" value="shop">
    <select name="order" onchange="this.form.submit()">
        <option value="ASC" <?= $order === 'ASC' ? 'selected' : '' ?>>Thấp đến cao</option>
        <option value="DESC" <?= $order === 'DESC' ? 'selected' : '' ?>>Cao đến thấp</option>
    </select>
</form>
    <div class="row g-4">
        <?php foreach ($products as $product): ?>
            <div class="col-md-3">
    <div class="product-box">
   

        <img src="<?= ROOT_URL . '/productimages/' .  $product['image']?>" alt="Product Image" class="product-img">
        <div class="product-info">
            <a href="<?=ROOT_URL.'?ctl=details&id=' . $product['id']?>" class="product-name">
                <h5><?= $product['name'] ?></h5>
            </a>
            <div>
                <span class="product-price text-danger"><?= number_format($product['price'])?>đ</span>
            </div>
        </div>
        <div class="product-buttons d-flex">
    <a class="btn btn-outline-dark " href="<?= ROOT_URL.'?ctl=details&id=' . $product['id'] ?>"  style="border-radius: 0;">Xem thêm</a>

</div>


    </div>
</div>
        <?php endforeach; ?>
    </div>
</div>
<?php include_once ROOT_DIR . "views/clients/footer.php" ?>
