<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form with Snow Effect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Nền và hiệu ứng chung */
        body {
            background: linear-gradient(to bottom, #4c4c4c, #666);
            color: #f5f5f5;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            overflow: hidden;
        }

        .login-container {
            background-color: #555;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);
            padding: 30px;
            max-width: 400px;
            width: 100%;
            position: relative;
            z-index: 10;
        }

        .login-container h2 {
            text-align: center;
            color: #fff;
            margin-bottom: 20px;
        }

        /* Custom style for input with underline */
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
            outline: none;
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

        .form-outline input:focus+label,
        .form-outline input:not(:placeholder-shown)+label {
            top: -15px;
            font-size: 14px;
            color: #fff;
        }

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

        a {
            color: #ddd;
        }

        a:hover {
            color: #fff;
        }

        .text-center p {
            margin-top: 10px;
        }

        /* Hiệu ứng tuyết */
        .snow-container {
            position: fixed;
            width: 100%;
            max-width: 100%;
            z-index: 1;
            pointer-events: none;
            overflow: hidden;
            top: 0;
            height: 100%;
        }

        .snow {
            display: block;
            position: absolute;
            z-index: 2;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            pointer-events: none;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
            -webkit-animation: snow linear infinite;
            animation: snow linear infinite;
        }

        .snow.foreground {
            background-image: url("https://itexpress.vn/API/files/img/snow-medium.png");
            -webkit-animation-duration: 15s;
            animation-duration: 10s;
        }

        .snow.foreground.layered {
            -webkit-animation-delay: 7.5s;
            animation-delay: 7.5s;
        }

        .snow.middleground {
            background-image: url(https://itexpress.vn/API/files/img/snow-medium.png);
            -webkit-animation-duration: 20s;
            animation-duration: 15s;
        }

        .snow.middleground.layered {
            -webkit-animation-delay: 10s;
            animation-delay: 10s;
        }

        .snow.background {
            background-image: url(https://itexpress.vn/API/files/img/snow-medium.png);
            -webkit-animation-duration: 25s;
            animation-duration: 20s;
        }

        .snow.background.layered {
            -webkit-animation-delay: 12.5s;
            animation-delay: 12.5s;
        }

        @-webkit-keyframes snow {
            0% {
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }

            100% {
                -webkit-transform: translate3d(5%, 100%, 0);
                transform: translate3d(5%, 100%, 0);
            }
        }

        @keyframes snow {
            0% {
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }

            100% {
                -webkit-transform: translate3d(5%, 100%, 0);
                transform: translate3d(5%, 100%, 0);
            }
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


    <div class="login-container">
        <h2>Đăng nhập</h2>
        <?php if (isset($_SESSION['errors'])) { ?>
            <p class="text-danger text-center"><?= $_SESSION['errors'] ?></p>
        <?php } else { ?>
            <p class="login-box-msg text-center">Vui lòng đăng nhập</p>
        <?php } ?>
        <form action="<?= BASE_URL . '?act=check-login' ?>" method="post">
            <!-- Username input -->
            <div class="form-outline">
                <input type="email" id="email" name="email" placeholder="" required />
                <label for="email">Email or Username</label>
            </div>
            <div class="form-outline">
                <input type="password" id="password" name="password" placeholder="" required />
                <label for="password">Password</label>
            </div>


            <!-- Login button -->
            <button type="submit" class="btn btn-primary">Login</button>

            <!-- Link to register -->
            <div class="text-center">
                <p>
                    Bạn chưa có tài khoản? <a href="<?= BASE_URL . '?act=form-dang-ky' ?>" class="btn btn-sqr">Đăng ký tại đây</a>
                </p>
            </div>
        </form>
    </div>
</body>

</html>