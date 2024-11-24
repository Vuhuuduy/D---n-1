<?php
class ClientSanPhamController
{
    public $modelSanPham;
    public $modelDanhMuc;
    public function __construct()
    {
        $this->modelSanPham = new ClientSanPham();
        $this->modelDanhMuc = new ClientDanhMuc();
    }
    public function danhSachSanPham()
    {
        $listSanPham = $this->modelSanPham->getAllSanPham();
        require_once "./view/sanpham/ListSanPham.php";
    }
}
