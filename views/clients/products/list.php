<?php include_once ROOT_DIR . "views/clients/header.php"?>
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
    font-weight: lighter !important;
    margin-top: 20px !important;
    margin-bottom: 30px !important;
    border-bottom: 1px solid #ddd;
    height: 40px !important;
    font-family: 'Arial', sans-serif !important; 
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
    padding: 5px;
    border: none; 
    border-bottom: 1px solid #ccc; 
    width: 200px; 
    cursor: pointer;
    transition: border-bottom 0.3s ease; 
}

form select:focus {
    outline: none; 
}
</style>
<div class="container mt-5">
<h2><?= $category_name?></h2>
<form method="GET" action="">
    <input type="hidden" name="ctl" value="category">
    <input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>">
    <select name="sort" onchange="this.form.submit()">
        <option value="asc" <?= $sort === 'asc' ? 'selected' : '' ?>>Giá: Thấp đến cao</option>
        <option value="desc" <?= $sort === 'desc' ? 'selected' : '' ?>>Giá: Cao đến tthấp</option>
    </select>
</form>
    <div class="row g-4">
        
        <?php if ($products):?>
        <?php foreach ($products as $product): ?>
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
        <?php else  :?>
            <div>Danh mục <strong><?=$category_name?></strong> chưa có sản phẩm!</div>
            <?php endif?>
    </div>
</div>
<?php include_once ROOT_DIR . "views/clients/footer.php"?>