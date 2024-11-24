<?php
class ClientSanPham
{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    // tìm kiếm get all sản phẩm 
    public function getAllSanPham($limit, $offset)
    {
        $sql = "SELECT san_phams.*, danh_mucs.ten_danh_muc 
                FROM san_phams 
                INNER JOIN danh_mucs ON san_phams.danh_muc_id = danh_mucs.id
                WHERE san_phams.trang_thai = 1
                LIMIT :limit OFFSET :offset";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getSanPhamTheoGia($gia_min, $gia_max, $limit, $offset)
    {
        $sql = "SELECT san_phams.*, danh_mucs.ten_danh_muc 
                FROM san_phams 
                INNER JOIN danh_mucs ON san_phams.danh_muc_id = danh_mucs.id
                WHERE san_phams.trang_thai = 1
                AND gia_san_pham BETWEEN :gia_min AND :gia_max
                LIMIT :limit OFFSET :offset";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':gia_min', $gia_min, PDO::PARAM_INT);
        $stmt->bindParam(':gia_max', $gia_max, PDO::PARAM_INT);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // Lấy tổng số sản phẩm để tính số trang
    public function getTotalProducts($gia_min = null, $gia_max = null)
    {
        $sql = "SELECT COUNT(*) FROM san_phams WHERE trang_thai = 1";

        if ($gia_min && $gia_max) {
            $sql .= " AND gia_san_pham BETWEEN :gia_min AND :gia_max";
        }

        $stmt = $this->conn->prepare($sql);

        if ($gia_min && $gia_max) {
            $stmt->bindParam(':gia_min', $gia_min, PDO::PARAM_INT);
            $stmt->bindParam(':gia_max', $gia_max, PDO::PARAM_INT);
        }

        $stmt->execute();
        return $stmt->fetchColumn();
    }
}
