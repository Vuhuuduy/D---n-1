<!-- header -->
<?php
include "./view/layout/header.php";
?>

<?php
// Kiểm tra nếu có danh sách sản phẩm
if (!empty($listSanPham)):
?>
    <main>
        <div class="btn btn-link d-flex align-items-center">
            <a href="index.php?act=home" class="d-flex align-items-center ms-2">
                <i class="fas fa-home"></i> Trang chủ |
            </a>
            <a href="index.php?act=sanpham" class="d-flex align-items-center ms-2">
                <span>Áo thu đông</span>
            </a>
        </div>

        <div class="container mt-1 d-flex justify-content-between align-items-center">
            <h4>Áo Thu Đông</h4>
            <form action="index.php?act=san-pham" method="get" class="d-flex">
                <div class="col-md-4">
                    <label for="category" class="form-label"></label>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle hover" type="button" id="categoryDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            Giá Sản Phẩm
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                            <li><a class="dropdown-item" href="?act=san-pham&gia_min=0&gia_max=100000">Tất Cả</a></li>
                            <li><a class="dropdown-item" href="?act=san-pham&gia_min=1&gia_max=100000">Dưới 100k</a></li>
                            <li><a class="dropdown-item" href="?act=san-pham&gia_min=100000&gia_max=200000">Từ 100k đến 200k</a></li>
                            <li><a class="dropdown-item" href="?act=san-pham&gia_min=200000&gia_max=300000">Từ 200k đến 300k</a></li>
                            <li><a class="dropdown-item" href="?act=san-pham&gia_min=300000&gia_max=1000000">Từ 300k đến 1M</a></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>

        <div class="container">
            <div class="row mb-4">
                <?php foreach ($listSanPham as $sp): ?>
                    <div class="col-md-3 text-center">
                        <img src="<?= $sp['hinh_anh'] ?? 'default.jpg' ?>" class="img-fluid" alt="<?= $sp['ten_san_pham'] ?? 'Không có tên' ?>">
                        <h5 class="mt-2"><?= $sp['ten_san_pham'] ?? 'Tên không có' ?></h5>
                        <p>Giá: <?= number_format($sp['gia_san_pham'] ?? 0, 0, ',', '.') ?>đ</p>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Pagination -->
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item <?= ($page == 1) ? 'disabled' : '' ?>">
                        <a class="page-link" href="?act=san-pham&page=<?= $page - 1 ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>

                    <!-- Pagination links -->
                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                        <li class="page-item <?= ($i == $page) ? 'active' : '' ?>">
                            <a class="page-link" href="?act=san-pham&page=<?= $i ?>"><?= $i ?></a>
                        </li>
                    <?php endfor; ?>

                    <li class="page-item <?= ($page == $totalPages) ? 'disabled' : '' ?>">
                        <a class="page-link" href="?act=san-pham&page=<?= $page + 1 ?>" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </main>
<?php else: ?>
    <p>Không có sản phẩm nào.</p>
<?php endif; ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

<!-- footer -->
<?php
include "./view/layout/footer.php";
?>