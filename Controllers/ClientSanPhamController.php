<?php
class ClientSanPhamController
{
    public $modelSanPham;

    public function __construct()
    {
        $this->modelSanPham = new ClientSanPham();
    }

    public function danhSachSanPham()
    {
        // Lấy trang hiện tại từ URL, mặc định là trang 1
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 12; // Số sản phẩm trên mỗi trang
        $offset = ($page - 1) * $limit;

        // Kiểm tra xem có lọc giá từ URL không
        $gia_min = isset($_GET['gia_min']) ? $_GET['gia_min'] : null;
        $gia_max = isset($_GET['gia_max']) ? $_GET['gia_max'] : null;

        // Nếu có lọc giá, gọi phương thức lọc
        if ($gia_min && $gia_max) {
            $listSanPham = $this->modelSanPham->getSanPhamTheoGia($gia_min, $gia_max, $limit, $offset);
        } else {
            $listSanPham = $this->modelSanPham->getAllSanPham($limit, $offset);
        }

        // Lấy tổng số sản phẩm để tính số trang
        $totalProducts = $this->modelSanPham->getTotalProducts($gia_min, $gia_max);
        $totalPages = ceil($totalProducts / $limit);

        // Truyền dữ liệu vào view
        require_once "./view/sanpham/ListSanPham.php";
    }
}
