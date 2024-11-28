<?php
class SanPhamController
{
    public $modelSanPham;

    public function __construct()
    {
        $this->modelSanPham = new SanPham();
    }

    public function danhSachSanPham()
    {
        // // Lấy trang hiện tại từ URL, mặc định là trang 1
        // $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        // $limit = 12; // Số sản phẩm trên mỗi trang
        // $offset = ($page - 1) * $limit;

        // // Kiểm tra lọc giá từ URL
        // $gia_min = isset($_GET['gia_min']) ? $_GET['gia_min'] : null;
        // $gia_max = isset($_GET['gia_max']) ? $_GET['gia_max'] : null;
        // $danh_muc_id = isset($_GET['danh_muc_id']) ? $_GET['danh_muc_id'] : null;
        // $keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : null; // Lấy từ khóa tìm kiếm

        // // Nếu có từ khóa tìm kiếm
        // if ($keyword) {
        //     $listSanPham = $this->modelSanPham->searchSanPham($keyword, $limit, $offset);
        //     $totalProducts = count($listSanPham); // Tổng số sản phẩm từ kết quả tìm kiếm
        // } elseif ($gia_min && $gia_max) {
        //     // Nếu có lọc giá
        //     $listSanPham = $this->modelSanPham->getSanPhamTheoGia($gia_min, $gia_max, $limit, $offset, $danh_muc_id);
        //     $totalProducts = $this->modelSanPham->getTotalProducts($gia_min, $gia_max, $danh_muc_id);
        // } elseif ($danh_muc_id) {
        //     // Nếu lọc theo danh mục
        //     $listSanPham = $this->modelSanPham->getSanPhamTheoDanhMuc($danh_muc_id, $limit, $offset);
        //     $totalProducts = $this->modelSanPham->getTotalProducts(null, null, $danh_muc_id);
        // } else {
        //     // Mặc định lấy tất cả sản phẩm
        //     $listSanPham = $this->modelSanPham->getAllSanPham($limit, $offset);
        //     $totalProducts = $this->modelSanPham->getTotalProducts();
        // }

        // $totalPages = ceil($totalProducts / $limit);

        // // Truyền dữ liệu vào view
        require_once "./view/sanpham/ListSanPham.php";
    }
}
