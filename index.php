<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuxeWinter</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Public/css/style.css" class="">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>

    <!-- Header -->

    <header>
        <div class="navbar d-flex justify-content-between bg-light">
            <span class="me-3 row-2">📞 0363.361.798</span>
            <div class="m-2">
                <a href="#" class="m-2 ms-3 text-decoration-none">
                    <i class="fas fa-user" style="font-size: 20px;"></i> Tài khoản
                </a>
                <a href="#" class="m-2 ms-3 text-decoration-none">
                    <i class="fas fa-shopping-cart" style="font-size: 20px;"></i> Giỏ hàng
                </a>
            </div>
        </div>
        <!-- nav -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand fw-bold" href="#">LuxeWinter</a>

                <!-- menu link  -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav d-flex mx-auto">
                        <li class="nav-item mg-l"><a class="nav-link" href="#">Trang chủ</a></li>
                        <li class="nav-item mg-l"><a class="nav-link" href="#">Áo thu đông</a></li>
                        <li class="nav-item mg-l"><a class="nav-link" href="#">Áo xuân hè</a></li>
                        <li class="nav-item mg-l"><a class="nav-link" href="#">Quần</a></li>
                        <li class="nav-item mg-l"><a class="nav-link" href="#">Phụ kiện</a></li>
                        <li class="nav-item mg-l"><a class="nav-link" href="#">Thông tin</a></li>
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
    <!-- end header  -->
    <!-- end nav  -->


    <!-- Main sản phẩm  -->
    <main>
        <!-- backgorud  -->
        <div class="bg-image">
        </div>
        <!-- end backgroud  -->
        <div class="container text-center mt-5">
            <h1 class="display-4">Ngày và Giờ Hiện Tại</h1>
            <p id="date-time" class="lead"></p>
        </div>
        <script>
            function updateTime() {
                const now = new Date();
                const dateString = now.toLocaleString(); // Định dạng "DD/MM/YYYY, HH:MM:SS"
                document.getElementById("date-time").textContent = dateString;
            }

            setInterval(updateTime, 1000); // Cập nhật mỗi giây
            updateTime(); // Gọi ngay lập tức để hiển thị thời gian ban đầu
        </script>
        <div class="container">
            <!-- Row 1 -->
            <div class="row mb-4">
                <div class="col-md-3 text-center">
                    <img src="https://saigonsneaker.com/wp-content/uploads/2021/10/Hoodie-Basic-Xanh-Duong-9.jpg" class="img-fluid" alt="Sản phẩm 1">
                    <h5 class="mt-2">Tên sản phẩm 1</h5>
                    <p>Giá: 100.000đ</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="https://saigonsneaker.com/wp-content/uploads/2021/10/Hoodie-Basic-Xanh-Duong-9.jpg" class="img-fluid" alt="Sản phẩm 2">
                    <h5 class="mt-2">Tên sản phẩm 2</h5>
                    <p>Giá: 150.000đ</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="https://saigonsneaker.com/wp-content/uploads/2021/10/Hoodie-Basic-Xanh-Duong-9.jpg" class="img-fluid" alt="Sản phẩm 3">
                    <h5 class="mt-2">Tên sản phẩm 3</h5>
                    <p>Giá: 200.000đ</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="https://saigonsneaker.com/wp-content/uploads/2021/10/Hoodie-Basic-Xanh-Duong-9.jpg" class="img-fluid" alt="Sản phẩm 4">
                    <h5 class="mt-2">Tên sản phẩm 4</h5>
                    <p>Giá: 250.000đ</p>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="row">
                <div class="col-md-3 text-center">
                    <img src="https://saigonsneaker.com/wp-content/uploads/2021/10/Hoodie-Basic-Xanh-Duong-9.jpg" class="img-fluid" alt="Sản phẩm 1">
                    <h5 class="mt-2">Tên sản phẩm 1</h5>
                    <p>Giá: 100.000đ</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="https://saigonsneaker.com/wp-content/uploads/2021/10/Hoodie-Basic-Xanh-Duong-9.jpg" class="img-fluid" alt="Sản phẩm 2">
                    <h5 class="mt-2">Tên sản phẩm 2</h5>
                    <p>Giá: 150.000đ</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="https://saigonsneaker.com/wp-content/uploads/2021/10/Hoodie-Basic-Xanh-Duong-9.jpg" class="img-fluid" alt="Sản phẩm 3">
                    <h5 class="mt-2">Tên sản phẩm 3</h5>
                    <p>Giá: 200.000đ</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="https://saigonsneaker.com/wp-content/uploads/2021/10/Hoodie-Basic-Xanh-Duong-9.jpg" class="img-fluid" alt="Sản phẩm 4">
                    <h5 class="mt-2">Tên sản phẩm 4</h5>
                    <p>Giá: 250.000đ</p>
                </div>
            </div>

    </main>

    <!-- end main -->
    <hr>
    <!-- Footer -->
    <footer class="footer bg-white text-dark py-5">
        <div class="row">
            <!-- thông tin  -->
            <div class="col-md-3 text-center mb-3">
                <h6 class="fw-bold uppercase-text">Gọi mua hàng (8:30 - 22:00)</h6>
                <p><i class="fas fa-phone"></i> 0363.361.798</p>
                <p>Tất Cả Các Ngày Trong Tuần</p>
            </div>

            <div class="col-md-3 text-center mb-3">
                <h6 class="fw-bold uppercase-text">Góp Ý và khiếu nại</h6>
                <p><i class="fas fa-phone"></i> 0363.361.798</p>
                <p>Tất Cả Các Ngày Trong Tuần</p>

            </div>
            <div class="col-md-3 text-center mb-3">
                <h6 class="fw-bold uppercase-text ct">Đăng Kí Nhận Thông Tin Mới</h6>
                <form action="#" class="d-flex">
                    <input type="text" class="form-control me-2" placeholder="Nhập Email Của Bạn" aria-label="Input">
                    <button class="btn btn-primary wt" type="submit">Đăng Kí</button>
                </form>
            </div>

            <div class=" col-md-3 text-center mb-3">
                <p class="fw-bold uppercase-text">theo dõi chúng tôi</p>
                <a href="#" class="col-4">
                    <i class="fab fa-facebook-f"></i> <!-- Facebook icon -->
                </a>
                <a href="#" class="col-4">
                    <i class="fab fa-instagram"></i> <!-- Instagram icon -->
                </a>
                <a href="#" class="col-4">
                    <i class="fab fa-weixin"></i>
                    <!-- Zalo icon (dùng icon WeChat vì Zalo không có icon chính thức từ Font Awesome) -->
                </a>
                <a href="#" class="col-4">
                    <i class="fab fa-telegram-plane"></i> <!-- Telegram icon -->
                </a>

            </div>
        </div>

        <!-- Other links -->
        <div class="row bg-light mt-4">
            <div class="col-3 ms-5">
                <h6>HỖ TRỢ KHÁCH HÀNG</h6>
                <p>Hướng dẫn chọn size </p>
                <p>Phương thức thanh toán</p>
                <p>Chính sách vận chuyển</p>
                <p>Chính sách bảo mật</p>
                <p>Quy định đổi trả</p>
                <p>Chính sách xử lý khiếu nại</p>
            </div>
            <div class="col-3 ms-4">
                <h6>VỀ CHÚNG TÔI </h6>
                <p>HỘ KINH DOANH LuxeWinter</p>
                <p>Địa Chỉ: Số 110 Phố Nhổn, Phường Tây Tựu, Quận Bắc Từ Liêm, Tp. Hà Nội</p>
                <p>Mã Số Doanh Nghiệp: 01D-8004624</p>
                <p>Email: LuxeWinter@atino.vn</p>

            </div>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>