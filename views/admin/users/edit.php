<?php include_once ROOT_DIR . "views/admin/header.php"?>

<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="container">
          <h2>Đăng ký</h2>
          <form action="<?= ADMIN_URL . '?ctl=updateuser'?>" method="POST">
            <div class="mb-3">
              <label for="fullname" class="form-label">Họ tên</label>
              <input type="text" class="form-control" name="fullname" value="<?= $user['fullname']?>">
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" value="<?= $user['email']?>">
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" placeholder="Nhập password">
            </div>

            <div class="mb-3">
              <label for="phone" class="form-label">Điện thoại</label>
              <input type="phone" class="form-control" name="phone" placeholder="Nhập số điện thoại">
            </div>

            <div class="mb-3">
              <label for="address" class="form-label">Địa chỉ</label>
              <input type="address" class="form-control" name="address" placeholder="Nhập địa chỉ">
            </div>

            <button type="submit" class="btn btn-primary w-100">Đăng ký</button>
          </form>
        </div>
      </div>
    </div>

<?php include_once ROOT_DIR . "views/admin/footer.php" ?>