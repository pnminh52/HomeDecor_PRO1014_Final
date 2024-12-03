<?php include_once ROOT_DIR . "views/clients/header.php"; ?>

<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="container">
          <h2>Đăng ký</h2>
          <form action="<?= ROOT_URL . '?ctl=register'?>" method="POST">
            <div class="mb-3">
              <label for="fullname" class="form-label">Họ tên</label>
              <input type="text" class="form-control" name="fullname" placeholder="Nhập họ tên">
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" placeholder="Nhập email">
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
</div>

<?php include_once ROOT_DIR . "views/clients/footer.php"; ?>

<style>
    .alert {
        margin-bottom: 20px;
    }

    .form-control {
        padding: 10px;
        font-size: 1rem;
        border: 1px solid #ccc;
    }

    .btn-primary {
        background-color: rgb(255, 255, 255);
        border-color: rgb(0, 0, 0);
        padding: 12px 20px;
        color: black;
        font-size: 1.1rem;
        transition: background-color 0.3s ease, border-color 0.3s ease;
        margin-bottom: 10px;
    }

    .btn-primary:hover {
        background-color: rgb(0, 0, 0);
        color: black;
    }

    p {
        font-size: 0.9rem;
        text-align: center;
    }

    p a {
        color: #007bff;
        text-decoration: none;
    }

    p a:hover {
        text-decoration: underline;
    }
</style>