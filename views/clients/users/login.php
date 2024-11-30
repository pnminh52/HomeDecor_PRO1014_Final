<?php include_once ROOT_DIR . "views/clients/header.php"; ?>

<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
       <?php if($message != ''):?>
        <div class="alert alert-success">
          <?= $message?>
        </div>
        <?php endif?>
        
        <?php if($error ):?>
        <div class="alert alert-danger">
          <?= $error?>
        </div>
        <?php endif?>

        <div class="container">
          <h2>Đăng nhập</h2>
          <form action="<?= ROOT_URL . '?ctl=login'?>" method="POST">
            <div class="mb-3">
              
              <label for="loginEmail" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="loginEmail" placeholder="Nhập email">

            </div>

            <div class="mb-3">
              <label for="loginPassword" class="form-label">Mật khẩu</label>
              <input type="password" class="form-control" name="password" id="loginPassword" placeholder="Nhập email">
            </div>

            

            <button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
          <p>Bạn chưa có tài khoản? <a href="http://localhost/homedecorfinal/?ctl=register">Đăng ký</a> tại đây!
          </p>
          </form>
        </div>
      </div>
    </div>
</div>

