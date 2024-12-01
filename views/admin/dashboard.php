<?php include_once ROOT_DIR . "views/admin/header.php"?>

<h1 class="mb-4">Trang quản trị kinh doanh nội thất homedecor</h1>
<p class="mb-4">Chào mừng bạn quay trở lại</p>

<div class="container">
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Tổng sản phẩm</h5>
                    <p class="card-text">
                        (tổng số sản phẩm)
                    </p>
                    <a href="<?= ROOT_URL ?>?ctl=products" class="btn btn-primary">Quản lý sản phẩm</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Tổng danh mục</h5>
                    <p class="card-text">
                        (Tổng số danh mục)
                    </p>
                    <a href="<?= ROOT_URL ?>?ctl=categories" class="btn btn-primary">Quản lý danh mục</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Tổng đơn hàng</h5>
                    <p class="card-text">
                       (Tổng số đơn hàng)
                    </p>
                    <a href="<?= ROOT_URL ?>?ctl=orders" class="btn btn-primary">Quản lý đơn hàng</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Tổng người dùng</h5>
                    <p class="card-text">
                        (Tổng số người dùng)
                    </p>
                    <a href="<?= ROOT_URL ?>?ctl=users" class="btn btn-primary">Quản lý người dùng</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4>Thống kê chi tiết</h4>
                </div>
                <div class="card-body">
                    <p>Thông tin chi tiết về các sản phẩm, đơn hàng và người dùng sẽ được hiển thị ở đây.</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include_once ROOT_DIR . "views/admin/footer.php" ?>