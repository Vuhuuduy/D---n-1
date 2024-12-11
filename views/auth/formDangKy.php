<?php
// Include file env.php để sử dụng các hằng số đã định nghĩa
require_once __DIR__ . '/../../commons/env.php';

// Bắt đầu session (nếu cần)
// session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        /* Nền chung */
        body {
            background-color: #4c4c4c; /* Nền tối */
            color: #f5f5f5; /* Chữ sáng */
            height: 100vh;
            margin: 0;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Hiệu ứng tuyết */
        .snow-container {
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: 1;
            pointer-events: none;
            overflow: hidden;
        }

        .snow {
            display: block;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            pointer-events: none;
            animation: snow linear infinite;
        }

        .snow.foreground {
            background-image: url("https://itexpress.vn/API/files/img/snow-medium.png");
            animation-duration: 15s;
        }

        .snow.foreground.layered {
            animation-delay: 7.5s;
        }

        .snow.middleground {
            background-image: url("https://itexpress.vn/API/files/img/snow-medium.png");
            animation-duration: 20s;
        }

        .snow.middleground.layered {
            animation-delay: 10s;
        }

        .snow.background {
            background-image: url("https://itexpress.vn/API/files/img/snow-medium.png");
            animation-duration: 25s;
        }

        .snow.background.layered {
            animation-delay: 12.5s;
        }

        @keyframes snow {
            0% {
                transform: translate3d(0, -100%, 0);
            }

            100% {
                transform: translate3d(5%, 100%, 0);
            }
        }

        /* Container chính */
       /* Đặt form ở giữa trang */
body {
    margin: 0;
    padding: 0;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #333; /* Màu nền tối */
    font-family: Arial, sans-serif;
    color: #fff; /* Màu chữ trắng */
}

/* Nền tuyết động */
body:before {
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('snow-animation.gif') center/cover no-repeat; /* Đổi ảnh nền nếu cần */
    z-index: -1;
    opacity: 0.5; /* Làm nhạt nền tuyết */
}

/* Form đăng ký */
.registration-container {
    background-color: rgba(0, 0, 0, 0.8); /* Nền màu đen mờ */
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5); /* Đổ bóng nhẹ */
    max-width: 400px;
    width: 100%;
    
}

.registration-container h2 {
    text-align: center;
    color: #fff; /* Màu chữ trắng */
    margin-bottom: 20px;
    font-weight: bold;
}

.form-outline {
    margin-bottom: 20px;
}

.form-outline input,
.form-outline select {
    width: 100%;
    padding: 10px;
    border: 1px solid #555; /* Đường viền tối */
    border-radius: 5px;
    font-size: 16px;
    color: #fff;
    background-color: #444; /* Nền input tối */
    outline: none;
    box-sizing: border-box;
    transition: border-color 0.3s ease-in-out;
}

.form-outline input:focus,
.form-outline select:focus {
    border-color: #888; /* Đổi màu đường viền khi focus */
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: 500;
    color: #ccc; /* Màu nhãn chữ xám nhạt */
}

.btn-primary {
    background-color: #555; /* Màu nút tối */
    color: #fff;
    border: none;
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-primary:hover {
    background-color: #777; /* Màu nút khi hover */
}

a {
    color: #888;
    text-decoration: none;
}

a:hover {
    color: #bbb;
    text-decoration: underline;
}


    </style>
</head>
<body>
    <div class="snow-container">
        <div class="snow foreground"></div>
        <div class="snow foreground layered"></div>
        <div class="snow middleground"></div>
        <div class="snow middleground layered"></div>
        <div class="snow background"></div>
        <div class="snow background layered"></div>
    </div>

    <div class="registration-container">
    <h2>Đăng ký thành viên</h2>
    <form action="<?= BASE_URL . '?act=dang-ky' ?>" method="POST" enctype="multipart/form-data">
        <div class="form-outline">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?= isset($_SESSION['old_data']['email']) ? $_SESSION['old_data']['email'] : '' ?>" placeholder="Email">
        </div>
        <div class="form-outline">
            <label for="ho_ten">Họ tên</label>
            <input type="text" id="ho_ten" name="ho_ten" value="<?= isset($_SESSION['old_data']['ho_ten']) ? $_SESSION['old_data']['ho_ten'] : '' ?>" placeholder="Họ tên">
        </div>
        <div class="form-outline">
            <label for="dia_chi">Địa chỉ</label>
            <input type="text" id="dia_chi" name="dia_chi" value="<?= isset($_SESSION['old_data']['dia_chi']) ? $_SESSION['old_data']['dia_chi'] : '' ?>" placeholder="Địa chỉ">
        </div>
        <div class="form-outline">
            <label for="anh_dai_dien">Ảnh đại diện</label>
            <input type="file" id="anh_dai_dien" name="anh_dai_dien">
        </div>
        <div class="form-outline">
            <label for="ngay_sinh">Ngày sinh</label>
            <input type="date" id="ngay_sinh" name="ngay_sinh" value="<?= isset($_SESSION['old_data']['ngay_sinh']) ? $_SESSION['old_data']['ngay_sinh'] : '' ?>">
        </div>
        <div class="form-outline">
            <label for="so_dien_thoai">Số điện thoại</label>
            <input type="number" id="so_dien_thoai" name="so_dien_thoai" value="<?= isset($_SESSION['old_data']['so_dien_thoai']) ? $_SESSION['old_data']['so_dien_thoai'] : '' ?>" placeholder="Số điện thoại">
        </div>
        <div class="form-outline">
            <label for="gioi_tinh">Giới tính</label>
            <select id="gioi_tinh" name="gioi_tinh">
                <option value="1" <?= isset($_SESSION['old_data']['gioi_tinh']) && $_SESSION['old_data']['gioi_tinh'] == '1' ? 'selected' : '' ?>>Nam</option>
                <option value="2" <?= isset($_SESSION['old_data']['gioi_tinh']) && $_SESSION['old_data']['gioi_tinh'] == '2' ? 'selected' : '' ?>>Nữ</option>
            </select>
        </div>
        <div class="form-outline">
            <label for="mat_khau">Mật khẩu</label>
            <input type="password" id="mat_khau" name="mat_khau" placeholder="Nhập mật khẩu">
        </div>
        <button type="submit" class="btn-primary">Đăng ký</button>
    </form>
</div>

</body>
</html>
