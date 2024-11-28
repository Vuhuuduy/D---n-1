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
            <div class="col-lg-4">
                          <div class="header-right d-flex align-items-center justify-content-xl-between justify-content-lg-end">
                              <div class="header-search-container">
                                  <button class="search-trigger d-xl-none d-lg-block"><i class="pe-7s-search"></i></button>
                                  <form class="header-search-box d-lg-none d-xl-block" action="<?= BASE_URL . '?act=search' ?>" method="POST">
                                      
                                      <button class="header-search-btn" type="submit"><i class="pe-7s-search"></i></button>
                                  </form>
                              </div>
                              <div class="header-configure-area">

                                  <ul class="nav justify-content-end">

                                      <li class="user-hover">
                                          <a href="#">

                                              <i class="pe-7s-user"></i>
                                          </a>
                                          <ul class="dropdown-list " style="width: 230px;">

                                              <?php if (isset($_SESSION['user_client'])) { ?>
                                                  <li>
                                                      <label for="">
                                                          <?php if (isset($_SESSION['user_client'])): ?>
                                                              <a href="<?= BASE_URL . '?act=tai-khoan' ?>">
                                                                  <?= $_SESSION['user_client']; ?>
                                                              </a>
                                                          <?php endif; ?>
                                                      </label>
                                                  </li>

                                                  <li><a href="<?= BASE_URL . '?act=logout' ?>">Đăng xuất</a></li>
                                                  <li><a href="<?= BASE_URL_ADMIN ?>">Đăng Nhập Admin</a></li>
                                              <?php } else { ?>
                                                  <li><a href="<?= BASE_URL ?>?act=login">Đăng nhập</a></li>
                                                  <li><a href="<?= BASE_URL . '?act=form-dang-ky' ?>">Đăng ký</a></li>
                                              <?php } ?>

                                          </ul>
                                      </li>

                                      <li>
                                          <a href="#" class="minicart-btn">
                                              <i class="pe-7s-shopbag"></i>
                                              <div class="notification">2</div>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
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
                        <li class="nav-item mg-l"><a class="nav-link" href="<?= BASE_URL ?>">Trang chủ</a></li>
                        <li class="nav-item mg-l"><a class="nav-link" href="<?= BASE_URL . '?act=ao_thu_dong' ?>">Áo thu đông</a></li>
                        <li class="nav-item mg-l"><a class="nav-link" href="<?= BASE_URL . '?act=ao_xuan_he' ?>">Áo xuân hè</a></li>
                        <li class="nav-item mg-l"><a class="nav-link" href="<?= BASE_URL . '?act=quan' ?>">Quần</a></li>
                        <li class="nav-item mg-l"><a class="nav-link" href="<?= BASE_URL . '?act=phu_kien' ?>">Phụ kiện</a></li>
                        <li class="nav-item mg-l"><a class="nav-link" href="<?= BASE_URL . '?act=thong_tin' ?>">Thông tin</a></li>

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