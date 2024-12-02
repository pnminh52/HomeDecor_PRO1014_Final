<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeDecor - <?= $title ??''?></title>
    <link rel="stylesheet" href="/views/template/css/common.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<style>

    .text-matcha {
        color:rgb(65, 49, 36); 
    }
    .carousel-inner img {
    height: 400px;
    object-fit: cover; 
    width: 100%; 
}

    .carousel-caption {
        top: 8%; 
    }

    .carousel-caption h5 {
        font-size: 2.5rem; 
    }

    .carousel-caption p {
        font-size: 1rem; 
    }

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

.category-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
        margin-bottom: 30px;
        margin-top:20px
    }

    .category-header h2 {
        font-size: 1.5rem !important;
        font-weight: thin !important;
        margin: 0; 
        font-family: Arial, sans-serif;
    }

    .category-header a {
        font-size: 1rem;
        color:rgb(100, 100, 100);
        text-decoration: none;
        font-weight: lighter;

    }

    .category-header a:hover {
        text-decoration: none;
        color:black;
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
    color: red;
    font-size: 1rem;
    font-weight: lighter;
}
.content-section {
 margin-top: 20px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  
  background-color: #f5f5f5; 
}

.text-content {
  flex: 1;
  padding-right: 20px;
  max-width: 50%;
  margin-left: 80px;
}

.text-content h2 {
  font-size: 24px;
  color: #333; 
  margin-bottom: 10px;
}

.text-content p {
  font-size: 16px;
  color: #666; 
  margin-bottom: 20px;
}

.cta-button {
  background-color:rgb(255, 255, 255); 
  color: black;
  padding: 10px 30px;
  border: 1px solid black;
  cursor: pointer;
  text-transform: uppercase;
  font-weight: lighter;
  transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
}

.cta-button:hover {
  background-color:rgb(0, 0, 0); 
  color:#fff;

}

.image-content img {
  max-width: 700px;
  height: auto;
  object-fit: cover;
}






.custom-grid {
    margin-top:20px ;
  display: grid;
  grid-template-areas:
    "sofa table armchair"
    "sofa bed chair";
  grid-template-columns: 2fr 1fr 1fr; 
  gap: 10px; 
  width: 99vw; 
  height: 70vh;
  overflow: hidden; 
}

.grid-item {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}

.grid-item img {
  width: 100%;
  height: 100%;
  object-fit: cover; 
}

.grid-item.large {
  grid-area: sofa;
}

.grid-item:nth-child(2) {
  grid-area: table;
}

.grid-item:nth-child(3) {
  grid-area: armchair;
}

.grid-item:nth-child(4) {
  grid-area: bed;
}

.grid-item:nth-child(5) {
  grid-area: chair;
}

.grid-label {
  position: absolute;
  color: #fff;
  padding: 5px 10px;
  font-size: 18px;
  border-radius: 3px;
  text-align: center; 
  font-weight: bold;
}

.contain {
  display: flex;
  justify-content: space-between;

}

.item {
  width: 30%;
}
.item h3{
    margin-top: 10px;
    margin-bottom: 10px;
    font-size: medium;
    font: bold;
}
.item p{
    font-size: small;
    font: lighter;
}
.item img {
  width: 100%;
  height: 200px;  
  object-fit: cover; 
}



</style>


    <?php include_once ROOT_DIR . "views/clients/header.php"?>

    <div id="productSlideshow" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php 
            $images = ['3.jpg', '4.jpg'];
            foreach ($images as $index => $image): ?>
            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                <img src="<?= ROOT_URL . '/bannerimages/' . $image ?>" class="d-block w-100" alt="Slideshow Image <?= $index + 1 ?>">
            </div>
            <?php endforeach; ?>
        </div>
        <div class="carousel-caption d-none d-md-block text-center">
        <h5 class="text-matcha font-weight-bold">BỘ SƯU TẬP MÙA THU</h5>
        <p class="text-matcha">Vẻ đẹp dịu êm trong từng đường nét</p>
    </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#productSlideshow" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#productSlideshow" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="custom-grid">
  <div class="grid-item large">
    <img src="https://nhaxinh.com/wp-content/uploads/2023/07/BST-COASTAL-SOFA-VANG-2.jpg" alt="Sofa" />
    <span class="grid-label">SOFA</span>
  </div>
  <div class="grid-item">
    <img src="https://nhaxinh.com/wp-content/uploads/2023/04/nha-xinh-banner-ban-an-vuong-24423.jpg" alt="Bàn ăn" />
    <span class="grid-label">BÀN ĂN</span>
  </div>
  <div class="grid-item">
    <img src="https://nhaxinh.com/wp-content/uploads/2024/01/banner-armchair-nhaxinh-31-1-24.jpg" alt="Armchair" />
    <span class="grid-label">ARMCHAIR</span>
  </div>
  <div class="grid-item">
    <img src="https://nhaxinh.com/wp-content/uploads/2022/01/giuong-ngu-pio-1.jpg" alt="Giường" />
    <span class="grid-label">GIƯỜNG</span>
  </div>
  <div class="grid-item">
    <img src="https://nhaxinh.com/wp-content/uploads/2021/11/nha-xinh-ghe-an-phong-an-749x800.jpg" alt="Ghế ăn" />
    <span class="grid-label">GHẾ ĂN</span>
  </div>
</div>
    <div class="container mt-5">
      





    <div class="category-header d-flex justify-content-between align-items-center">
    <h2>Bàn gỗ</h2>
    <a href="http://localhost/homedecorfinal/?ctl=category&id=2">Xem tất cả</a>
</div>
        
        <div class="row g-4">
            <?php foreach ($tables as $table): ?>
                
                <div class="col-md-3">
    <div class="product-box">
   

        <img src="<?= ROOT_URL . '/productimages/' .  $table['image']?>" alt="Product Image" class="product-img">
        <div class="product-info">
            <a href="<?=ROOT_URL.'?ctl=details&id=' . $table['id']?>" class="product-name">
                <h5><?= $table['name'] ?></h5>
            </a>
            <div>
                <span class="product-price"><?= number_format($table['price'])?>đ</span>
            </div>
        </div>
        <div class="product-buttons d-flex">
    <a class="btn btn-outline-dark " href="<?= ROOT_URL.'?ctl=details&id=' . $table['id'] ?>"  style="border-radius: 0;">Xem thêm</a>
</div>



    </div>
</div>


            <?php endforeach?>
        </div>
        <div class="category-header d-flex justify-content-between align-items-center">
    <h2>Tủ ly</h2>
    <a href="http://localhost/homedecorfinal/?ctl=category&id=4">Xem tất cả</a>
</div>
        <div class="row g-4">
            <?php foreach ($cupboards as $cupboard): ?>
                <div class="col-md-3">
    <div class="product-box">
   

        <img src="<?= ROOT_URL . '/productimages/' .  $cupboard['image']?>" alt="Product Image" class="product-img">
        <div class="product-info">
            <a href="<?=ROOT_URL.'?ctl=details&id=' . $cupboard['id']?>" class="product-name">
                <h5><?= $cupboard['name'] ?></h5>
            </a>
            <div>
                <span class="product-price"><?= number_format($cupboard['price'])?>đ</span>
            </div>
        </div>
        <div class="product-buttons d-flex">
    <a class="btn btn-outline-dark " href="<?= ROOT_URL.'?ctl=details&id=' . $cupboard['id'] ?>"  style="border-radius: 0;">Xem thêm</a>
</div>


    </div>
</div>
            <?php endforeach?>
        </div>
        <div>
            <h2 style="text-align: center; margin-top:20px; margin-bottom:20px;">Không gian sống</h2>
        <div class="contain">


  <div class="item">
    <img src="https://nhaxinh.com/wp-content/uploads/2024/10/noi-that-can-ho-cao-cap-600x400.jpg" alt="Căn hộ với nội thất mang nét đẹp truyền thống xen lẫn hiện đại">
    <h3>Căn hộ mang nét đẹp truyền thống và hiện đại</h3>
    <p>Căn hộ thiết kế tinh tế, kết hợp giữa phong cách truyền thống và hiện đại, tạo không gian ấm cúng, sang trọng với chất liệu gỗ tự nhiên và vật dụng hiện đại.</p>
  </div>
  <div class="item">
    <img src="https://nhaxinh.com/wp-content/uploads/2024/07/bo-suu-tap-may-moi-575x400.jpg" alt="Thiết kế phòng khách hiện đại với sofa và ánh sáng tự nhiên">
    <h3>Phòng khách hiện đại với ánh sáng tự nhiên</h3>
    <p>Phòng khách thiết kế đơn giản, sử dụng sofa hiện đại, tận dụng ánh sáng tự nhiên từ cửa sổ lớn, mang đến sự thoải mái cho gia chủ.</p>
  </div>
  <div class="item">
    <img src="https://nhaxinh.com/wp-content/uploads/2024/08/BST-Orientale-600x400.jpg" alt="Phòng ngủ với sự kết hợp giữa màu sắc nhẹ nhàng và nội thất tinh tế">
    <h3>Phòng ngủ tinh tế với màu sắc nhẹ nhàng</h3>
    <p>Phòng ngủ với gam màu pastel nhẹ nhàng, kết hợp với nội thất tinh tế, tạo không gian nghỉ ngơi lý tưởng cho gia chủ.</p>
  </div>




    </div>
    <div class="category-header d-flex justify-content-between align-items-center">
    <h2>Sản phẩm mới</h2>
    <a href="<?= ROOT_URL . "?ctl=shop" ?>">Xem tất cả</a>
</div>
        
<div class="row g-4">
    <?php 
    $limitedProducts = array_slice($alls, 0, 8);
    
    foreach ($limitedProducts as $all): ?>
        <div class="col-md-3">
            <div class="product-box">
                <img src="<?= ROOT_URL . '/productimages/' .  $all['image']?>" alt="Product Image" class="product-img">
                <div class="product-info">
                    <a href="<?= ROOT_URL . '?ctl=details&id=' . $all['id'] ?>" class="product-name">
                        <h5><?= $all['name'] ?></h5>
                    </a>
                    <div>
                        <span class="product-price"><?= number_format($all['price']) ?>đ</span>
                    </div>
                </div>
                <div class="product-buttons d-flex">
                    <a class="btn btn-outline-dark" href="<?= ROOT_URL . '?ctl=details&id=' . $all['id'] ?>" style="border-radius: 0;">Xem thêm</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

        </div>
        

    
</div>
<div class="content-section">
  <div class="text-content">
    <h2>Tổ ấm của người tinh tế</h2>
    <p>
      Trong suốt hơn 25 năm qua, cảm hứng từ gu thẩm mỹ tinh tế và tinh thần "Việt"
      đã giúp chúng tôi tạo ra những thiết kế độc đáo, hợp thời và chất lượng. HomeDecor
      hiện đã mở 10 cửa hàng tại Việt Nam.
    </p>
    <div class="product-buttons d-flex">
    <a class="btn btn-outline-dark " href="">Xem thêm</a>
</div>
  </div>
  <div class="image-content">
    <img src="https://nhaxinh.com/wp-content/uploads/2022/07/gioi-thieu-nha-xinh-moi-25-7-22-1200x800.jpg" alt="Hình minh họa ghế sofa" />
  </div>




    <?php include_once ROOT_DIR . "views/clients/footer.php"?>
</body>
</html>
