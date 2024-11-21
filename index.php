<?php
session_start();
// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Views
include_once 'view/header.php';

// Route
$act = $_GET['act'] ?? '/';

// Điều hướng
if (isset($_GET['act']) && $_GET['act'] != "") {
    switch ($_GET['act']) {
        case 'news':
            include_once 'view/news.php';
            break;
        case 'aoxuanhe':
            include_once 'view/aoxuanhe.php';
            break;
        case 'chitietsanpham':
            include_once 'view/chitietsp.php';
            break;
        case 'phukien':
            include_once 'view/phukien.php';
            break;
        case 'quan':
            include_once 'view/quan.php';
            break;
        case 'sanpham':
            include_once 'view/sanpham.php';
            break;
        case 'giohang':
            include_once 'view/giohang.php';
            break;
        case 'thongtinkhachhang':
            include_once 'view/thongtinkhachhang.php';
            break;
        case 'dangki':
            include_once 'view/dangky.php';
            break;
        case 'dangnhap':
            include_once 'view/dangnhap.php';
            break;
        default:
            include_once 'view/home.php';
            break;
    }
} else {
    include_once 'view/home.php';
}
include_once 'view/footer.php';
