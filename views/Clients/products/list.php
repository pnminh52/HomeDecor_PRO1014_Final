<?php include_once ROOT_DIR . "/clients/header.php" ?>

<div class="container mt-5">

    <div class="mb-3 mt-3">
        <a href="<?= ROOT_URL ?>">Trang chủ</a> >
        <b><?= $title ?? '' ?></b>
    </div>
    <h2><?=$category_name?></h2>
    <div class="row g-4">
        <?php foreach ($products as $pro) : ?>
            <div class="col-md-3">
                <div class="product-box">
                    <img src="images/<?= $pro['image'] ?>" alt="Product Image" class="product-img">
                    <div class="product-info">
                        <a href="<?= ROOT_URL . '?ctl=detail&id=' . $pro['id'] ?>">
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

<?php include_once ROOT_DIR . "/clients/footer.php" ?>