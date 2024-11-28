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
require_once './Controllers/SanPhamController.php'; // Hàm hỗ trợ
require_once './Controllers/HomeController.php'; // Hàm hỗ trợ


// model 

require_once './models/SanPham.php';
require_once './models/TaiKhoan.php';
require_once './models/GioHang.php';
require_once './models/DonHang.php';

// Route
$act = $_GET['act'] ?? '/';
// điều hướng 2 
match ($act) {
    // Trang chủ
    // router danh muc
    '/' => (new HomeController())->home(),
    // "danh-muc-san-pham" => (new ClientDanhMucController())->danhSachDanhMuc(),
    // "form-them-danh-muc" => (new ClientDanhMucController())->formAddDanhMuc(),
    // "them-danh-muc" => (new ClientDanhMucController())->postAddDanhMuc(),
    // "form-sua-danh-muc" => (new ClientDanhMucController())->formEditDanhMuc(),
    // "sua-danh-muc" => (new ClientDanhMucController())->postEditDanhMuc(),
    // "form-xoa-danh-muc" => (new ClientDanhMucController())->deleteDanhMuc(),
    // // router san pham

    "san-pham" => (new SanPhamController())->danhSachSanPham(),
    // "form-them-san-pham" => (new SanPhamController())->formAddSanPham(),
    // "them-san-pham" => (new SanPhamController())->postAddSanPham(),
    // "form-sua-san-pham" => (new SanPhamController())->formEditSanPham(),
    // "sua-san-pham" => (new SanPhamController())->postEditSanPham(),
    // "form-xoa-san-pham" => (new SanPhamController())->deleteSanPham(),
    // "sua-album-anh-san-pham" => (new SanPhamController())->postEditAnhSanPham(),
    // "chi-tiet-san-pham" => (new SanPhamController())->detailSanPham(),

    // r;outer don hang

    // "don-hang" => (new ClientDonHangController())->danhSachDonHang(),
    // "form-sua-don-hang" => (new ClientDonHangController())->formEditDonHang(),
    // "sua-don-hang" => (new ClientDonHangController())->postEditDonHang(),
    // // "xoa-don-hang" => (new ClientDonHangController())->deleteDonHang(),
    // "chi-tiet-don-hang" => (new ClientDonHangController())->detailDonHang(),


    //  router tai khoan quan tri
    // 'list-tai-khoan-quan-tri' => (new ClientTaiKhoanController())->danhSachQuanTri(),
    // 'form-them-quan-tri' => (new ClientTaiKhoanController())->formAddQuanTri(),
    // 'them-quan-tri' => (new ClientTaiKhoanController())->postAddQuanTri(),
    // 'form-sua-quan-tri' => (new ClientTaiKhoanController())->formEditQuanTri(),
    // 'sua-quan-tri' => (new ClientTaiKhoanController())->postEditQuanTri(),
    // 'reset-pass' => (new ClientTaiKhoanController())->resetPassword(),

    //  router tai khoan khách hang
    // 'list-tai-khoan-khach-hang' => (new ClientTaiKhoanController())->danhSachKhachHang(),
    // 'form-sua-khach-hang' => (new ClientTaiKhoanController())->formEditKhachHang(),
    // 'sua-khach-hang' => (new ClientTaiKhoanController())->postEditKhachHang(),
    // 'chi-tiet-khach-hang' => (new ClientTaiKhoanController())->detailKhachHang(),
    // 'sua-anh-tai-khoan' => (new ClientTaiKhoanController)->suaAnhTaiKhoanClient(),
    // 'sua-thong-tin-ca-nhan-quan-tri' => (new ClientTaiKhoanController)->postEditCaNhanQuanTri(),
    // 'sua-mat-khau-ca-nhan-quan-tri' => (new ClientTaiKhoanController)->postEditMatKhauCaNhan(),

    //authe
    'login' => (new HomeController())->formLogin(),
    'check-login' => (new HomeController())->postlogin(),
    'logout' => (new HomeController())->logout(),
    'quen-mat-khau' => (new HomeController())->quenMatKhau(),
    'lay-mat-khau' => (new HomeController())->layMatKhau(),


    'form-dang-ky' => (new HomeController())->formDangKy(),
    'dang-ky' => (new HomeController())->dangKy(),
    'tai-khoan' => (new HomeController())->taiKhoan(),
    'sua-mat-khau-ca-nhan' => (new HomeController())->postEditMatKhauCaNhan(),

    // router quản lý tài khoản  cá nhân(quản trị)
    // 'form-sua-thong-tin-ca-nhan-quan-tri' => (new ClientTaiKhoanController())->formEditCaNhanQuanTri(),
    // 'sua-thong-tin-ca-nhan-quan-tri' => (new ClientTaiKhoanController())->postEditCaNhanQuanTri(),

    // 'sua-mat-khau-ca-nhan-quan-tri' => (new ClientTaiKhoanController())->postEditMatKhauCaNhan(),
};
