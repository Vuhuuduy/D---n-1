<?php
class ClientSanPham
{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    // tìm kiếm get all sản phẩm 
    public function getAllSanPham()
    {
        try {
            // Truy vấn để lấy tất cả sản phẩm cùng với tên danh mục
            $sql = "SELECT san_phams.*, danh_mucs.ten_danh_muc FROM san_phams
        INNER JOIN danh_mucs ON san_phams.danh_muc_id = danh_mucs.id";
            $stmt = $this->conn->prepare($sql); // Chuẩn bị truy vấn SQL
            $stmt->execute(); // Thực thi truy vấn

            return $stmt->fetchAll(); // Lấy toàn bộ kết quả
        } catch (Exception $e) {
            // Xử lý lỗi nếu có
            echo "Lỗi: " . $e->getMessage();
        }
    }
}
