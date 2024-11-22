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
        .registration-container {
            background-color: #555;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);
            max-width: 400px;
            width: 100%;
            position: relative;
            z-index: 10;
        }

        .registration-container h2 {
            text-align: center;
            color: #fff;
            margin-bottom: 20px;
        }

        /* Input kiểu dòng kẻ */
        .form-outline {
            position: relative;
            margin-bottom: 20px;
        }

        .form-outline input {
            border: none;
            border-bottom: 2px solid #ccc;
            background: transparent;
            color: #f5f5f5;
            width: 100%;
            padding: 8px 0;
            outline: none;
            font-size: 16px;
        }

        .form-outline input:focus {
            border-bottom: 2px solid #fff;
        }

        .form-outline label {
            position: absolute;
            top: 8px;
            left: 0;
            color: #ccc;
            font-size: 16px;
            transition: all 0.3s ease-in-out;
            pointer-events: none;
        }

        .form-outline input:focus + label,
        .form-outline input:not(:placeholder-shown) + label {
            top: -15px;
            font-size: 14px;
            color: #fff;
        }

        /* Nút submit */
        .btn-primary {
            background-color: #4c4c4c;
            border-color: #4c4c4c;
            width: 100%;
            padding: 10px;
            font-size: 16px;
        }

        .btn-primary:hover {
            background-color: #666;
            border-color: #666;
        }

        /* Link */
        a {
            color: #ddd;
        }

        a:hover {
            color: #fff;
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
        <h2>Đăng ký</h2>
        <form>
            <!-- Name input -->
            <div class="form-outline">
                <input type="text" id="formName" placeholder=" " required>
                <label for="formName">Full Name</label>
            </div>

            <!-- Email input -->
            <div class="form-outline">
                <input type="email" id="formEmail" placeholder=" " required>
                <label for="formEmail">Email Address</label>
            </div>

            <!-- Phone number input -->
            <div class="form-outline">
                <input type="tel" id="formPhone" placeholder=" " required>
                <label for="formPhone">Phone Number</label>
            </div>

            <!-- Password input -->
            <div class="form-outline">
                <input type="password" id="formPassword" placeholder=" " required>
                <label for="formPassword">Password</label>
            </div>

            <!-- Confirm password input -->
            <div class="form-outline">
                <input type="password" id="formConfirmPassword" placeholder=" " required>
                <label for="formConfirmPassword">Confirm Password</label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary">Sign Up</button>

            <!-- Link to login -->
            <div class="text-center">
                <p>
                    Bạn đã có tài khoản? <a href="dangnhap.php">Đăng nhập tại đây</a>
                </p>
            </div>
        </form>
    </div>
</body>
</html>
