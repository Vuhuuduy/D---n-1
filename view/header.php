<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuxeWinter</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Public/css/style.css" class="">
    <link rel="stylesheet" href="Public/css/news.css" class="">
</head>

<body>

    <!-- Header -->
    <header>
        <div class="navbar d-flex justify-content-between bg-light">
            <span class="me-3 row-2">📞 0363.361.798</span>
            <div class="m-2">
                <a href="view/dangnhap.php" class="m-2 ms-3 text-decoration-none">
                    <i class="fas fa-user" style="font-size: 20px;"></i> Tài khoản
                </a>
                <a href="index.php?act=giohang" class="m-2 ms-3 text-decoration-none">
                    <i class="fas fa-shopping-cart" style="font-size: 20px;"></i> Giỏ hàng
                </a>
            </div>
        </div>
        <!-- nav -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand fw-bold" href="index.php?act=home">LuxeWinter</a>

                <!-- menu link  -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav d-flex mx-auto">
                        <li class="nav-item mg-l"><a class="nav-link" href="index.php?act=home">Trang chủ</a></li>
                        <li class="nav-item mg-l"><a class="nav-link" href="index.php?act=sanpham">Áo thu đông</a></li>
                        <li class="nav-item mg-l"><a class="nav-link" href="index.php?act=aoxuanhe">Áo xuân hè</a></li>
                        <li class="nav-item mg-l"><a class="nav-link" href="index.php?act=quan">Quần</a></li>
                        <li class="nav-item mg-l"><a class="nav-link" href="index.php?act=phukien">Phụ kiện</a></li>
                        <li class="nav-item mg-l"><a class="nav-link" href="index.php?act=thongtinkhachhang">Thông tin</a></li>
                    </ul>
                </div>

                <!-- Icons on the right -->
                <div>
                    <form class="d-flex">
                        <div class="input-group">
                            <span class="input-group-text"><a href="#"> <i class="fas fa-search "></i></a></span>
                            <input class="form-control" type="search" placeholder="Tìm kiếm ..." aria-label="Search">
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </header>