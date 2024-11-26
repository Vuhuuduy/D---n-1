<?php
include './view/layout/header.php';
?>
<main class="container mt-4">
    <div class="btn btn-link d-flex align-items-center">
        <a href="index.php?act/" class="d-flex align-items-center ms-2">
            <i class="fas fa-home"></i> Trang chủ
        </a>
        <?php if (isset($danh_muc_id)): ?>
            <span class="mx-2">|</span>
            <a href="?act=san-pham&danh_muc_id=<?= $danh_muc_id ?>" class="d-flex align-items-center ms-2">
                <span>
                    <?php
                    $danhMucMap = [
                        36 => "Áo Thu Đông",
                        37 => "Áo Xuân Hè",
                        38 => "Quần",
                        39 => "Phụ Kiện"
                    ];
                    echo $danhMucMap[$danh_muc_id] ?? "Danh mục không xác định";
                    ?>
                </span>
            </a>
        <?php else: ?>
            <span class="mx-2">|</span>
            <a href="index.php?act=san-pham" class="d-flex align-items-center ms-2">
                <span>Tất cả sản phẩm</span>
            </a>
        <?php endif; ?>
    </div>

    <div class="container mt-5">
        <div class="row">
            <!-- Left Column -->
            <div class="col-md-6">
                <div class="product-image">
                    <img src="<?= !empty($sanPham['hinh_anh']) ? 'http://localhost/Du_an_1/Du_an1/' . $sanPham['hinh_anh'] : 'img/default.jpg' ?>" alt="Ảnh sản phẩm" class="img-fluid custom-img-size">
                </div>
                <div>
                    <p class="mt-4 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg>Click xem hình lớn hơn
                    </p>
                </div>
                <!-- Table -->
                <div>
                    <p class="me-3 mr-3"><strong>Kích thước</strong></p>
                    <table class="size-table">
                        <thead>
                            <tr>
                                <th>Size</th>
                                <th>Chiều cao</th>
                                <th>Cân nặng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>S</td>
                                <td>1m50 - 1m60</td>
                                <td>40 - 50kg</td>
                            </tr>
                            <tr>
                                <td>M</td>
                                <td>1m55 - 1m65</td>
                                <td>45 - 55kg</td>
                            </tr>
                            <tr>
                                <td>L</td>
                                <td>1m60 - 1m70</td>
                                <td>50 - 60kg</td>
                            </tr>
                            <tr>
                                <td>XL</td>
                                <td>1m65 - 1m75</td>
                                <td>60 - 70kg</td>
                            </tr>
                            <tr>
                                <td>2XL</td>
                                <td>1m70 - 1m80</td>
                                <td>70 - 80kg</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-md-6">
                <div>
                    <p class="font-weight-bold text-dark"><?= !empty($sanPham['ten_san_pham']) ? $sanPham['ten_san_pham'] : 'Tên sản phẩm không có' ?></p>
                    <?= isset($sanPham['trang_thai']) ? ($sanPham['trang_thai'] == 1 ? 'Còn hàng' : 'Hết hàng') : 'Không có thông tin trạng thái' ?>
                    <hr>
                    <p class="text-danger"><?= !empty($sanPham['gia_san_pham']) ? number_format($sanPham['gia_san_pham'], 0, ',', '.') . 'đ' : 'Liên hệ để biết giá' ?></p>
                    <p class="font-weight-bold">Màu sắc</p>
                    <div>
                        <div class="color-options d-flex gap-2">
                            <div class="color red-color"></div> <!-- Màu đỏ -->
                            <div class="color green-color"></div> <!-- Màu xanh lá -->
                            <div class="color blue-color"></div> <!-- Màu xanh dương -->
                        </div>
                    </div>


                    <div class="mt-3">
                        <button class="btn btn-outline-dark" id="decrease">-</button>
                        <span id="quantity">1</span>
                        <button class="btn btn-outline-dark" id="increase">+</button>
                    </div>

                    <div class="mt-3">
                        <button class="btn btn-dark w-50 text-white">Thêm vào giỏ hàng</button>
                        <button class="btn btn-dark w-25 text-white">Mua ngay</button>
                    </div>
                    <button class="btn btn-light ml-5 w-50  mt-3" style="border: 1px solid black; color: black; background-color: white;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                            <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1" />
                        </svg>
                        Yêu thích
                    </button>
                    <p class="mt-3 w-75 text-center">Chia sẻ
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                        </svg>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script>
        const quantitySpan = document.getElementById('quantity');
        const decreaseBtn = document.getElementById('decrease');
        const increaseBtn = document.getElementById('increase');

        let quantity = 1;

        // Tăng số lượng
        increaseBtn.addEventListener('click', () => {
            quantity++;
            quantitySpan.textContent = quantity;
        });

        // Giảm số lượng
        decreaseBtn.addEventListener('click', () => {
            if (quantity > 1) { // Đảm bảo số lượng không nhỏ hơn 1
                quantity--;
                quantitySpan.textContent = quantity;
            }
        });
    </script>
</main>
<?php
include './view/layout/footer.php';
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>