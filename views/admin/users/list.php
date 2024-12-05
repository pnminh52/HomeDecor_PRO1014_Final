<?php include_once ROOT_DIR . "views/admin/header.php"?>

<div class="container">
<div class="cart-header">
    <h2>Danh sách tài khoản  </h2>
    </div>
<table class="table table-bordered align-middle">
  <thead class="table">
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Tài khoản</th>
      <th scope="col">Email</th>
      <th scope="col">Mật Khẩu</th>
      <th scope="col">SĐT</th>
      <th scope="col">Quyền hạn</th>
      <th scope="col">Trạng thái</th>
      <th scope="col">Địa chỉ</th>

      <th scope="col">

      </th>
    </tr>
  </thead>
  <tbody>
    <?php
    $stt=1;
    foreach($users as $user) :  ?>
    <tr>
      <th scope="row"><?= $stt++?></th>
      <td><?= $user['fullname']?></td>
      <td><?= $user['email']?></td>
      <td><?= substr($user['password'], 0, 10) . '...' ?></td>
      <td><?= $user['phone']?></td>
      <td><?= $user['role']?></td>
      <td>
        <?php if($user['active'] == 1) : ?>
          <span class="badge bg-success">
            Hoạt động
          </span>
          <?php else : ?>
            <span class="badge bg-danger">
            Khoá 
          </span>
            <?php endif ?>
      </td>
      <td><?= $user['address'] ?></td>
      <td>
        <form action="<?= ADMIN_URL . '?ctl=updateuser' ?>" method="post">
          <input type="hidden" name="id" value="<?= $user['id']  ?>">
          <input type="hidden" name="active" value="<?= $user['active']  ?>">
          <?php if ($user['role'] !== 'admin') : ?>
          <?php if ($user['active'] == 1) : ?>
            <button type="submit" class="btn btn-danger">Khoá</button>
            <?php else : ?>
              <button type="submit" class="btn btn-primary">Kích hoạt</button>
            <?php endif ?>
            <?php endif ?>
        </form>
      </td>
    </tr>
  <?php endforeach ?>
  </tbody>
</table>

</div>

<?php include_once ROOT_DIR . "views/admin/footer.php" ?>
<style>
      .cart-header h2 {
        font-size: 1.5rem !important;
        font-weight: thin !important;
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .cart-header {
        display: flex;
        align-items: center;
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
        margin-bottom: 30px;
        margin-top: 20px;
    }
    .table th, .table td {
        text-align: center;
        vertical-align: middle;
    }

    .table .btn {
        margin: 0 5px;
    }
</style>