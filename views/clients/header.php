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

.dropdown-menu {
    display: none;
    opacity: 0;
    transition: opacity 0.2s ease-in-out; 
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


    </style>
    <div class="container w-100">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
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
                            <a class="nav-link" href="/homedecorfinal/contact">Liên hệ</a>
                        </li>
                        <li class="nav-item">
    <a class="nav-link text-warning" href="/homedecorfinal/decoration">Thiết kế nội thất</a>
</li>
<li class="nav-item">
    <a class="nav-link " href="/homedecorfinal/inspiration">Góc cảm hứng</a>
</li>
                    </ul>
                    <form class="d-flex" role="search">
            <div class="input-group w-100">
               
                <input class="form-control border-start-1" type="search" placeholder="Tìm kiếm sản phẩm" aria-label="Search">
                <button class="input-group-text bg-white border-end-1">
                    <i class="bi bi-search"></i> 
                </button>
            </div>
        </form>

                </div>
            </div>
        </nav>
                            </body>