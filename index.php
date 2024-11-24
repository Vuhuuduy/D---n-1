<?php
session_start();
// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ
// controller 
// Kiểm tra file Controllers/ClientDanhMucController.php
// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ


// Controller
require_once './Controllers/ClientSanPhamController.php'; // Hàm hỗ trợ
require_once './Controllers/TrangChuController.php'; // Hàm hỗ trợ


// model 
require_once './Models/ClientDanhMuc.php'; // Hàm hỗ trợ
require_once './Models/ClientSanPham.php'; // Hàm hỗ trợ

// Route
$act = $_GET['act'] ?? '/';
// điều hướng 2 
match ($act) {
    // Trang chủ
    // router danh muc
    '/' => (new TrangChuController())->home(),
    "danh-muc-mi-pham" => (new ClientDanhMucController())->danhSachDanhMuc(),
    "form-them-danh-muc" => (new ClientDanhMucController())->formAddDanhMuc(),
    "them-danh-muc" => (new ClientDanhMucController())->postAddDanhMuc(),
    "form-sua-danh-muc" => (new ClientDanhMucController())->formEditDanhMuc(),
    "sua-danh-muc" => (new ClientDanhMucController())->postEditDanhMuc(),
    "form-xoa-danh-muc" => (new ClientDanhMucController())->deleteDanhMuc(),
    // router san pham

    "san-pham" => (new ClientSanPhamController())->danhSachSanPham(),
    "form-them-san-pham" => (new ClientSanPhamController())->formAddSanPham(),
    "them-san-pham" => (new ClientSanPhamController())->postAddSanPham(),
    "form-sua-san-pham" => (new ClientSanPhamController())->formEditSanPham(),
    "sua-san-pham" => (new ClientSanPhamController())->postEditSanPham(),
    "form-xoa-san-pham" => (new ClientSanPhamController())->deleteSanPham(),
    "sua-album-anh-san-pham" => (new ClientSanPhamController())->postEditAnhSanPham(),
    "chi-tiet-san-pham" => (new ClientSanPhamController())->detailSanPham(),

    // r;outer don hang

    "don-hang" => (new ClientDonHangController())->danhSachDonHang(),
    "form-sua-don-hang" => (new ClientDonHangController())->formEditDonHang(),
    "sua-don-hang" => (new ClientDonHangController())->postEditDonHang(),
    // "xoa-don-hang" => (new ClientDonHangController())->deleteDonHang(),
    "chi-tiet-don-hang" => (new ClientDonHangController())->detailDonHang(),


    //  router tai khoan quan tri
    'list-tai-khoan-quan-tri' => (new ClientTaiKhoanController())->danhSachQuanTri(),
    'form-them-quan-tri' => (new ClientTaiKhoanController())->formAddQuanTri(),
    'them-quan-tri' => (new ClientTaiKhoanController())->postAddQuanTri(),
    'form-sua-quan-tri' => (new ClientTaiKhoanController())->formEditQuanTri(),
    'sua-quan-tri' => (new ClientTaiKhoanController())->postEditQuanTri(),
    'reset-pass' => (new ClientTaiKhoanController())->resetPassword(),

    //  router tai khoan khách hang
    'list-tai-khoan-khach-hang' => (new ClientTaiKhoanController())->danhSachKhachHang(),
    'form-sua-khach-hang' => (new ClientTaiKhoanController())->formEditKhachHang(),
    'sua-khach-hang' => (new ClientTaiKhoanController())->postEditKhachHang(),
    'chi-tiet-khach-hang' => (new ClientTaiKhoanController())->detailKhachHang(),
    'sua-anh-tai-khoan' => (new ClientTaiKhoanController)->suaAnhTaiKhoanClient(),
    'sua-thong-tin-ca-nhan-quan-tri' => (new ClientTaiKhoanController)->postEditCaNhanQuanTri(),
    'sua-mat-khau-ca-nhan-quan-tri' => (new ClientTaiKhoanController)->postEditMatKhauCaNhan(),

    // router auth9
    'login-Client' => (new ClientTaiKhoanController())->formLogin(),
    'check-login-Client' => (new ClientTaiKhoanController())->login(),
    'logout-Client' => (new ClientTaiKhoanController())->logout(),

    // router quản lý tài khoản  cá nhân(quản trị)
    'form-sua-thong-tin-ca-nhan-quan-tri' => (new ClientTaiKhoanController())->formEditCaNhanQuanTri(),
    // 'sua-thong-tin-ca-nhan-quan-tri' => (new ClientTaiKhoanController())->postEditCaNhanQuanTri(),

    'sua-mat-khau-ca-nhan-quan-tri' => (new ClientTaiKhoanController())->postEditMatKhauCaNhan(),
};
// Điều hướng
// if (isset($_GET['act']) && $_GET['act'] != "") {
//     switch ($_GET['act']) {
//         case 'news':
//             include_once 'view/news.php';
//             break;
//         case 'aoxuanhe':
//             include_once 'view/aoxuanhe.php';
//             break;
//         case 'chitietsanpham':
//             include_once 'view/chitietsp.php';
//             break;
//         case 'phukien':
//             include_once 'view/phukien.php';
//             break;
//         case 'quan':
//             include_once 'view/quan.php';
//             break;
//         case 'sanpham':
//             include_once 'view/sanpham.php';
//             break;
//         case 'giohang':
//             include_once 'view/giohang.php';
//             break;
//         case 'thongtinkhachhang':
//             include_once 'view/thongtinkhachhang.php';
//             break;
//         case 'dangki':
//             include_once 'view/dangky.php';
//             break;
//         case 'dangnhap':
//             include_once 'view/dangnhap.php';
//             break;
//         default:
//             include_once 'view/sanpham/ListSanPham.php';
//             break;
//     }
// } else {
//     include_once 'view/sanpham/ListSanPham.php';
// }