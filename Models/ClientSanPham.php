<?php
class ClientSanPham
{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    // Lấy tất cả sản phẩm
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
        return $stmt->fetchAll(PDO::FETCH_ASSOC) ?: []; // Trả về mảng rỗng nếu không có sản phẩm
    }

    // Lấy sản phẩm theo giá
    public function getSanPhamTheoGia($gia_min, $gia_max, $limit, $offset, $danh_muc_id = null)
    {
        $sql = "SELECT san_phams.*, danh_mucs.ten_danh_muc 
                FROM san_phams 
                INNER JOIN danh_mucs ON san_phams.danh_muc_id = danh_mucs.id
                WHERE san_phams.trang_thai = 1
                AND gia_san_pham BETWEEN :gia_min AND :gia_max";

        // Nếu có lọc theo danh mục
        if ($danh_muc_id) {
            $sql .= " AND san_phams.danh_muc_id = :danh_muc_id";
        }

        $sql .= " LIMIT :limit OFFSET :offset";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':gia_min', $gia_min, PDO::PARAM_INT);
        $stmt->bindParam(':gia_max', $gia_max, PDO::PARAM_INT);
        if ($danh_muc_id) {
            $stmt->bindParam(':danh_muc_id', $danh_muc_id, PDO::PARAM_INT);
        }
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC) ?: []; // Trả về mảng rỗng nếu không có sản phẩm
    }

    // Lấy sản phẩm theo danh mục
    public function getSanPhamTheoDanhMuc($danh_muc_id, $limit, $offset)
    {
        $sql = "SELECT san_phams.*, danh_mucs.ten_danh_muc 
                FROM san_phams 
                INNER JOIN danh_mucs ON san_phams.danh_muc_id = danh_mucs.id
                WHERE san_phams.trang_thai = 1
                AND san_phams.danh_muc_id = :danh_muc_id
                LIMIT :limit OFFSET :offset";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':danh_muc_id', $danh_muc_id, PDO::PARAM_INT);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC) ?: []; // Trả về mảng rỗng nếu không có sản phẩm
    }

    // Lấy tên danh mục
    public function getDanhMucName($danh_muc_id)
    {
        $sql = "SELECT ten_danh_muc FROM danh_mucs WHERE id = :danh_muc_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':danh_muc_id', $danh_muc_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchColumn() ?: ''; // Trả về chuỗi rỗng nếu không tìm thấy
    }

    // Lấy tổng số sản phẩm để tính số trang
    public function getTotalProducts($gia_min = null, $gia_max = null, $danh_muc_id = null)
    {
        $sql = "SELECT COUNT(*) 
                FROM san_phams 
                WHERE trang_thai = 1";

        if ($danh_muc_id) {
            $sql .= " AND danh_muc_id = :danh_muc_id";
        }

        if ($gia_min && $gia_max) {
            $sql .= " AND gia_san_pham BETWEEN :gia_min AND :gia_max";
        }

        $stmt = $this->conn->prepare($sql);

        if ($danh_muc_id) {
            $stmt->bindParam(':danh_muc_id', $danh_muc_id, PDO::PARAM_INT);
        }

        if ($gia_min && $gia_max) {
            $stmt->bindParam(':gia_min', $gia_min, PDO::PARAM_INT);
            $stmt->bindParam(':gia_max', $gia_max, PDO::PARAM_INT);
        }

        $stmt->execute();
        return $stmt->fetchColumn(); // Sử dụng fetchColumn() để lấy giá trị đếm
    }
    public function searchSanPham($keyword, $limit, $offset)
    {
        try {
            $sql = "SELECT san_phams.*, danh_mucs.ten_danh_muc 
                FROM san_phams 
                INNER JOIN danh_mucs ON san_phams.danh_muc_id = danh_mucs.id
                WHERE san_phams.trang_thai = 1
                AND san_phams.ten_san_pham LIKE :keyword
                LIMIT :limit OFFSET :offset";

            $stmt = $this->conn->prepare($sql);
            $keyword = "%" . $keyword . "%";
            $stmt->bindParam(':keyword', $keyword, PDO::PARAM_STR);
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC) ?: [];
        } catch (PDOException $e) {
            error_log("Lỗi tìm kiếm sản phẩm: " . $e->getMessage());
            return [];
        }
    }
}
