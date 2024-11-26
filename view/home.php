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
            $i = 0; // Khởi tạo biến đếm sản phẩm
            foreach ($listSanPham as $sp):
                if ($i > 0 && $i % 4 == 0): // Nếu đã hiển thị 4 sản phẩm, đóng hàng cũ và mở hàng mới
                    echo '</div><div class="row mb-4">';
                endif;
            ?>
                <div class="col-md-3 text-center">
                    <a href="index.php?act=chi-tiet-san-pham&id=<?= $sp['id'] ?>" class="text-decoration-none">
                        <img src="<?= !empty($sp['hinh_anh']) ? 'http://localhost/Du_an_1/Du_an1/' . $sp['hinh_anh'] : 'img/default.jpg' ?>" alt="Ảnh sản phẩm" class="img-fluid">
                        <h5 class="mt-2"><?= $sp['ten_san_pham'] ?? 'Tên không có' ?></h5>
                        <p>Giá: <?= number_format($sp['gia_san_pham'] ?? 0, 0, ',', '.') ?>đ</p>
                    </a>
                </div>
            <?php
                $i++; // Tăng biến đếm
            endforeach;
            ?>
        </div>
    </div>

</main>
<?php
include "./view/layout/footer.php";
?>