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
</head>
<body>
    <style>
        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
            opacity: 1;
        }

        .input-group .form-control {
            border-radius: 20px 0 0 20px;
        }

        .input-group .input-group-text {
            border-radius: 0 20px 20px 0;
        }

        .input-group .form-control:focus {
            outline: none;
            box-shadow: none;
            border-color: #ccc;
        }
        .top-bar {
            background-color:rgb(255, 255, 255) ; 
            height: 40px;
        }

        .top-bar .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 100%;
        }

        .top-bar small {
            font-size: 14px;
            color:rgb(0, 0, 0); 
        }
    </style>
    <div class="top-bar">
        <div class="container">
            <small>Chào mừng bạn đến với HomeDecor!</small>
            
            <small>Hotline: 0123-456-789</small>
        </div>
    </div>
    <div class="w-100 bg-white border-top">
        <nav class="navbar navbar-expand-lg">
            
            <div class="container">
        
                <a class="navbar-brand" href="/homedecorfinal/">
                    <span class="text-warning">Home</span><span class="text-dark">Decor</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sản phẩm
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php foreach ($categories as $cate): ?>
                            <li>
                                <a href="<?= ROOT_URL . '?ctl=category&id=' . $cate['id'] ?>" class="dropdown-item"><?= htmlspecialchars($cate['cate_name']) ?></a>
                            </li>
        <?php endforeach; ?>
    </ul>
</li>
<li class="nav-item">
                            <a class="nav-link" href="<?= ROOT_URL . '?ctl=shop'?>">Cửa hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/homedecorfinal/contact">Liên hệ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-warning" href="/homedecorfinal/decoration">Thiết kế nội thất</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/homedecorfinal/inspiration">Góc cảm hứng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= ROOT_URL . '?ctl=view-cart' ?>">Giỏ hàng (<?= $_SESSION['totalQuantity']?? '0' ?>)</a>
                        </li>
                        <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="authDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="bi bi-person me-1"></i>
        
    </a>
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="authDropdown">
        <?php if (isset($_SESSION['user'])): ?>
            <!-- Đã đăng nhập -->
            <li>
                <a class="dropdown-item" href="<?= ROOT_URL . '?ctl=profile' ?>">Hồ sơ</a>
            </li>
            <li>
                <a class="dropdown-item" href="<?= ROOT_URL . '?ctl=list-order' ?>">Đơn hàng</a>
            </li>
            <li>
                <a class="dropdown-item" href="<?= ROOT_URL . '?ctl=logout' ?>">Đăng xuất</a>
            </li>
        <?php else: ?>
            <!-- Chưa đăng nhập -->
            <li>
                <a class="dropdown-item" href="<?= ROOT_URL . '?ctl=login' ?>">Đăng nhập</a>
            </li>
            <li>
                <a class="dropdown-item" href="<?= ROOT_URL . '?ctl=register' ?>">Đăng ký</a>
            </li>
        <?php endif; ?>
    </ul>
</li>




                    </ul>
                    <form class="d-flex" action="/homedecorfinal/" method="GET">
    <input type="hidden" name="ctl" value="search">
    <div class="input-group">
        <input class="form-control" type="search" name="query" placeholder="Tìm kiếm sản phẩm" aria-label="Search">
        <button class="input-group-text bg-white">
            <i class="bi bi-search"></i>
        </button>
    </div>
</form>
                </div>
            </div>
        </nav>
    </div>
    
</body>
