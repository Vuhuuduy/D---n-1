<?php
session_start();
// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ
// Require toàn bộ file Controllers





// Require toàn bộ file Views
include_once 'view/header.php';
include_once 'view/footer.php';

// Route
$act = $_GET['act'] ?? '/';

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

// match ($act) {
// };
if (isset($_GET['act']) && ($_GET(['act']) != "")) {
    switch ($_GET['pg']) {
        case 'product':
            if (isset($_GET['pg']) && ($_GET(['pg']) > 0)) {
                $catalogname = " san pham ";
            }
            $title = " đang vô trang sản phẩm >>" . $catalogname;
            break;
        default:
            include_once 'view/home.php';
    }
}
