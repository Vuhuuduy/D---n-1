<?php
class TrangChuController
{
    public function home()
    {
        $limit = 12; // số sản phẩm trên mỗi trang
        $offset = 0; // offset ban đầu, có thể tính toán theo trang hiện tại
        $modelSanPham = new ClientSanPham();
        $listSanPham = $modelSanPham->getAllSanPham($limit, $offset); // Lấy danh sách sản phẩm
        require_once './view/home.php';
    }
}
