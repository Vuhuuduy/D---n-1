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
                <a href="view/dangky.php" class="m-2 ms-3 text-decoration-none">
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
                        <li class="nav-item mg-l"><a class="nav-link" href="index.php?">Trang chủ</a></li>
                        <li class="nav-item mg-l"><a class="nav-link" href="index.php?act=san-pham&danh_muc_id=36">Áo thu đông</a></li>
                        <li class="nav-item mg-l"><a class="nav-link" href="index.php?act=san-pham&danh_muc_id=37">Áo xuân hè</a></li>
                        <li class="nav-item mg-l"><a class="nav-link" href="index.php?act=san-pham&danh_muc_id=38">Quần</a></li>
                        <li class="nav-item mg-l"><a class="nav-link" href="index.php?act=san-pham&danh_muc_id=39">Phụ kiện</a></li>
                        <li class="nav-item mg-l"><a class="nav-link" href="index.php?act=thongtinkhachhang">Thông tin</a></li>

                    </ul>
                </div>

                <!-- Icons on the right -->
                <div>
                    <form action="index.php" method="GET" class="d-flex mb-2 mt-2">
                        <input type="hidden" name="act" value="san-pham">
                        <input type="text" name="keyword" class="form-control" placeholder="Tìm kiếm sản phẩm..."
                            value="<?= isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : '' ?>">
                        <button type="submit" class="btn btn-primary ms-3 wt">Tìm kiếm</button>
                    </form>

                </div>
            </div>
        </nav>
    </header>