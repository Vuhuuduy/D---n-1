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
        <!-- Row 1 -->
        <div class="row mb-4">
            <div class="col-md-3 text-center">
                <img src="https://saigonsneaker.com/wp-content/uploads/2021/10/Hoodie-Basic-Xanh-Duong-9.jpg"
                    class="img-fluid" alt="Sản phẩm 1">
                <h5 class="mt-2">Tên sản phẩm 1</h5>
                <p>Giá: 100.000đ</p>
            </div>
            <div class="col-md-3 text-center">
                <img src="https://saigonsneaker.com/wp-content/uploads/2021/10/Hoodie-Basic-Xanh-Duong-9.jpg"
                    class="img-fluid" alt="Sản phẩm 2">
                <h5 class="mt-2">Tên sản phẩm 2</h5>
                <p>Giá: 150.000đ</p>
            </div>
            <div class="col-md-3 text-center">
                <img src="https://saigonsneaker.com/wp-content/uploads/2021/10/Hoodie-Basic-Xanh-Duong-9.jpg"
                    class="img-fluid" alt="Sản phẩm 3">
                <h5 class="mt-2">Tên sản phẩm 3</h5>
                <p>Giá: 200.000đ</p>
            </div>
            <div class="col-md-3 text-center">
                <img src="https://saigonsneaker.com/wp-content/uploads/2021/10/Hoodie-Basic-Xanh-Duong-9.jpg"
                    class="img-fluid" alt="Sản phẩm 4">
                <h5 class="mt-2">Tên sản phẩm 4</h5>
                <p>Giá: 250.000đ</p>
            </div>
        </div>

        <!-- Row 2 -->
        <div class="row">
            <div class="col-md-3 text-center">
                <img src="https://saigonsneaker.com/wp-content/uploads/2021/10/Hoodie-Basic-Xanh-Duong-9.jpg"
                    class="img-fluid" alt="Sản phẩm 1">
                <h5 class="mt-2">Tên sản phẩm 1</h5>
                <p>Giá: 100.000đ</p>
            </div>
            <div class="col-md-3 text-center">
                <img src="https://saigonsneaker.com/wp-content/uploads/2021/10/Hoodie-Basic-Xanh-Duong-9.jpg"
                    class="img-fluid" alt="Sản phẩm 2">
                <h5 class="mt-2">Tên sản phẩm 2</h5>
                <p>Giá: 150.000đ</p>
            </div>
            <div class="col-md-3 text-center">
                <img src="https://saigonsneaker.com/wp-content/uploads/2021/10/Hoodie-Basic-Xanh-Duong-9.jpg"
                    class="img-fluid" alt="Sản phẩm 3">
                <h5 class="mt-2">Tên sản phẩm 3</h5>
                <p>Giá: 200.000đ</p>
            </div>
            <div class="col-md-3 text-center">
                <img src="https://saigonsneaker.com/wp-content/uploads/2021/10/Hoodie-Basic-Xanh-Duong-9.jpg"
                    class="img-fluid" alt="Sản phẩm 4">
                <h5 class="mt-2">Tên sản phẩm 4</h5>
                <p>Giá: 250.000đ</p>
            </div>
        </div>

</main>