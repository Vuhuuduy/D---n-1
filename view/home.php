<!-- header -->
<?php
include "./view/layout/header.php";
?>
<!-- Main sản phẩm  -->
<main>
    <!-- backgorud  -->
    <div class="bg-image">
    </div>
    <!-- end backgroud  -->
    <div class="container text-center mt-5">
        <h1 class="display-4">Ngày và Giờ Hiện Tại</h1>
        <p id="date-time" class="lead"></p>
    </div>
    <script>
        function updateTime() {
            const now = new Date();
            const dateString = now.toLocaleString(); // Định dạng "DD/MM/YYYY, HH:MM:SS"
            document.getElementById("date-time").textContent = dateString;
        }

        setInterval(updateTime, 1000); // Cập nhật mỗi giây
        updateTime(); // Gọi ngay lập tức để hiển thị thời gian ban đầu
    </script>

    <div class="container">
        <div class="row mb-4">
            <?php
            $soSanPhamTrenHang = 4; // Số sản phẩm trên một hàng
            $i = 0; // Khởi tạo biến đếm
            foreach ($listSanPham as $sp): ?>
                <div class="col-md-3 text-center">
                    <img src="<?= $sp['hinh_anh'] ?? 'default.jpg' ?>" class="img-fluid" alt="<?= $sp['ten_san_pham'] ?? 'Không có tên' ?>">
                    <h5 class="mt-2"><?= $sp['ten_san_pham'] ?? 'Tên không có' ?></h5>
                    <p>Giá: <?= number_format($sp['gia_san_pham'] ?? 0, 0, ',', '.') ?>đ</p>
                </div>
            <?php endforeach; ?>
            <!-- Pagination -->

        </div>
    </div>
</main>
<?php
include "./view/layout/footer.php";
?>