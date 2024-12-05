<?php include_once ROOT_DIR . "views/clients/header.php"; ?>

<div class="container mt-5 d-flex justify-content-center">
    <div class="card" style="max-width: 600px; width: 100%; border-radius: 10px;">
        <div class="card-body text-center">
            <!-- Tiêu đề trang -->
            <h2 class="text-success">Đặt hàng thành công!</h2>

            <!-- Mô tả đơn hàng thành công -->
            <div class="mt-4">
                <p>Cảm ơn bạn đã mua hàng tại <strong>Homedecor</strong>.</p>
                <p>Đơn hàng của bạn đã được xác nhận và chúng tôi sẽ tiến hành xử lý. Bạn sẽ nhận được thông báo về tình trạng đơn hàng qua email hoặc số điện thoại mà bạn đã cung cấp.</p>
            </div>

            <!-- Hướng dẫn quay lại trang chủ -->
            <div class="mt-4">
                <p>
                    Bạn có thể quay lại <a href="<?= ROOT_URL ?>">Trang chủ</a> để tiếp tục mua sắm.
                </p>
            </div>
        </div>
    </div>
</div>

<?php include_once ROOT_DIR . "views/clients/footer.php"; ?>
