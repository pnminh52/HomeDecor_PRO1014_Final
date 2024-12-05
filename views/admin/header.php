
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
                    <li class="nav-item">
                            <a class="nav-link" href="<?= ADMIN_URL . '?ctl=listdm' ?>">Danh mục</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= ADMIN_URL . '?ctl=listsp' ?>">Sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= ADMIN_URL . '?ctl=listuser' ?>">Tài khoản</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= ADMIN_URL . '?ctl=list-order' ?>">Đơn hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"href="/homedecorfinal/">Client</a>
                        </li>
                     
                      




                    </ul>
                
                </div>
            </div>
        </nav>
    </div>
    
</body>
