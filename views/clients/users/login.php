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
              <input type="password" class="form-control" name="password" id="loginPassword" placeholder="Nhập mật khẩu">
            </div>

            

            <button type="submit" class="btn btnprimary w-100">Đăng nhập</button>
          <p>Bạn chưa có tài khoản? <a href="http://localhost/homedecorfinal/?ctl=register">Đăng ký</a> tại đây!
          </p>
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


.btnprimary {
    background-color:rgb(255, 255, 255);
    border-color:rgb(0, 0, 0);
    padding: 12px 20px;
    color:black;
    font-size: 1.1rem;
    transition: background-color 0.3s ease, border-color 0.3s ease;
    margin-bottom: 10px;
}

.btnprimary:hover {
    background-color:rgb(0, 0, 0);
    color:white;
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