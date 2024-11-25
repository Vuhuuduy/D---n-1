<!-- header -->
<?php include "./view/layout/header.php"; ?>

<?php if (!empty($listSanPham)): ?>
    <main>
        <!-- Thanh điều hướng -->
        <div class="btn btn-link d-flex align-items-center">
            <a href="index.php?act=home" class="d-flex align-items-center ms-2">
                <i class="fas fa-home"></i> Trang chủ |
            </a>

            <?php if (isset($danh_muc_id)): ?>
                <a href="?act=san-pham&danh_muc_id=<?= $danh_muc_id ?>">
                    <span>
                        <?php
                        switch ($danh_muc_id) {
                            case 36:
                                echo "Áo Thu Đông";
                                break;
                            case 37:
                                echo "Áo Xuân Hè";
                                break;
                            case 38:
                                echo "Quần";
                                break;
                            case 39:
                                echo "Phụ Kiện ";
                                break;
                            default:
                                echo "Danh mục không xác định";
                                break;
                        }
                        ?>
                    </span>
                </a>
            <?php else: ?>
                <a href="index.php?act=san-pham" class="d-flex align-items-center ms-2">
                    <span>Tất cả sản phẩm</span>
                </a>
            <?php endif; ?>
        </div>

        <!-- Tiêu đề và lọc -->
        <div class="container mt-3 d-flex justify-content-between align-items-center">
            <h4>
                <?= isset($danh_muc_name) ? $danh_muc_name : "Tất Cả Sản Phẩm"; ?>
            </h4>

            <!-- Nút lựa chọn danh mục -->
            <!-- <div class="d-inline">
                <a href="index.php?act=san-pham&danh_muc_id=36" class="btn btn-outline-primary ms-3">Áo Xuân Hè</a>
                <a href="index.php?act=san-pham&danh_muc_id=37" class="btn btn-outline-primary ms-3">Quần</a>
                <a href="index.php?act=san-pham&danh_muc_id=38" class="btn btn-outline-primary ms-3">Phụ Kiện</a>
            </div> -->

            <!-- Dropdown lọc giá -->
            <div class="dropdown d-inline">
                <button class="btn dropdown-toggle" type="button" id="categoryDropdown" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Giá Sản Phẩm
                </button>
                <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                    <li><a class="dropdown-item" href="index.php?act=san-pham<?= isset($danh_muc_id) ? '&danh_muc_id=' . $danh_muc_id : '' ?>&gia_min=0&gia_max=1000000">Tất Cả</a></li>
                    <li><a class="dropdown-item" href="index.php?act=san-pham<?= isset($danh_muc_id) ? '&danh_muc_id=' . $danh_muc_id : '' ?>&gia_min=1&gia_max=100000">Dưới 100k</a></li>
                    <li><a class="dropdown-item" href="index.php?act=san-pham<?= isset($danh_muc_id) ? '&danh_muc_id=' . $danh_muc_id : '' ?>&gia_min=100000&gia_max=200000">Từ 100k đến 200k</a></li>
                    <li><a class="dropdown-item" href="index.php?act=san-pham<?= isset($danh_muc_id) ? '&danh_muc_id=' . $danh_muc_id : '' ?>&gia_min=200000&gia_max=300000">Từ 200k đến 300k</a></li>
                    <li><a class="dropdown-item" href="index.php?act=san-pham<?= isset($danh_muc_id) ? '&danh_muc_id=' . $danh_muc_id : '' ?>&gia_min=300000&gia_max=1000000">Từ 300k đến 1M</a></li>
                </ul>
            </div>
        </div>

        <!-- Danh sách sản phẩm -->
        <div class="container">
            <div class="row mb-4">
                <?php foreach ($listSanPham as $sp): ?>
                    <div class="col-md-3 text-center">
                        <img src="<?= $sp['hinh_anh'] ?? 'default.jpg' ?>" class="img-fluid"
                            alt="<?= $sp['ten_san_pham'] ?? 'Không có tên' ?>">
                        <h5 class="mt-2"><?= $sp['ten_san_pham'] ?? 'Tên không có' ?></h5>
                        <p>Giá: <?= number_format($sp['gia_san_pham'] ?? 0, 0, ',', '.') ?>đ</p>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Phân trang -->
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item <?= ($page == 1) ? 'disabled' : '' ?>">
                        <a class="page-link" href="?act=san-pham&page=<?= $page - 1 ?>&danh_muc_id=<?= $danh_muc_id ?>"
                            aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                        <li class="page-item <?= ($i == $page) ? 'active' : '' ?>">
                            <a class="page-link" href="?act=san-pham&page=<?= $i ?>&danh_muc_id=<?= $danh_muc_id ?>">
                                <?= $i ?>
                            </a>
                        </li>
                    <?php endfor; ?>
                    <li class="page-item <?= ($page == $totalPages) ? 'disabled' : '' ?>">
                        <a class="page-link" href="?act=san-pham&page=<?= $page + 1 ?>&danh_muc_id=<?= $danh_muc_id ?>"
                            aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </main>
<?php else: ?>
    <?php
    // Redirect về trang chủ hoặc trang sản phẩm
    header("Location: ?act=san-pham&danh_muc_id=36");
    exit; // Dừng script để đảm bảo không chạy tiếp
    ?>
<?php endif; ?>

<!-- Footer -->
<?php include "./view/layout/footer.php"; ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>