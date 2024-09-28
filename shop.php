<!-- ======= Header ======= -->
<?php include "header.php" ?>
<!-- End Header -->

<!-- SHOP SECTION  -->
<section id="shop" class="shop">
    <div class="container">
        <!-- <h2 class="section-title">Shop Products</h2> -->
        <div class="section-title" data-aos="fade-in" data-aos-delay="1">
            <h2>Shop Products <span id="total-items-shop"></span></h2>
        </div>

        <?php
        // Database connection
        include("db.php");


        // Fetch all categories "類別"連接資料庫
        $sql = "SELECT * FROM categories";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Fetch all products "產品"連接資料庫
        $sql = "SELECT p.*, c.category_name FROM products p 
        LEFT JOIN categories c ON p.category_id = c.category_id";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <!-- SHOP FILTER SECTION -->
        <div class="row shop-container" data-aos="fade-up" style="margin-bottom: 100px;">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="shop-flters">
                    <!-- All Categories -->
                    <li data-filter="*" class="filter-active">All</li>

                    <!-- Loop through categories from the database -->
                    <?php foreach ($categories as $category) : ?>
                        <li data-filter=".shop-<?php echo htmlspecialchars($category['category_id']); ?>">
                            <?php echo htmlspecialchars($category['category_name']); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <div class="row shop-container" data-aos="fade-up">

            <?php foreach ($products as $product) : ?>
                <div class="product-box col-lg-4 col-md-6 shop-item shop-<?php echo htmlspecialchars($product['category_id']); ?>">
                    <?php if (!empty($product['product_iframe_url'])): ?>
                        <iframe width="100%" height="350" title="<?php echo htmlspecialchars($product['product_title']); ?>" frameborder="0" allowfullscreen mozallowfullscreen="true"
                            webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking"
                            xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share
                            src="<?php echo htmlspecialchars($product['product_iframe_url']); ?>" class="product-img"></iframe>
                    <?php else: ?>
                        <img src="img/shop/<?php echo htmlspecialchars($product['product_image_url']); ?>" alt="<?php echo htmlspecialchars($product['product_title']); ?>" class="product-img">
                    <?php endif; ?>
                    <h2 class="product-title"><?php echo htmlspecialchars($product['product_title']); ?></h2>
                    <span class="product-price">NT$<?php echo htmlspecialchars($product['product_price']); ?></span>
                    <i class="bi bi-cart2 add-cart"></i>
                </div>
            <?php endforeach; ?>

        </div>
        <!-- <div class="row shop-container" data-aos="fade-up" style="margin-bottom: 100px;">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="shop-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".shop-P">商品</li>
                    <li data-filter=".shop-M">客製</li>
                    <li data-filter=".shop-G">設計</li>
                    <li data-filter=".shop-C">課程</li>
                    <li data-filter=".shop-O">優惠</li>
                </ul>
            </div>
        </div> -->
        <!-- <div class="row shop-container" data-aos="fade-up">

            <div class="product-box col-lg-4 col-md-6 shop-item shop-O">

                    <iframe width="100%" height="350" title="匹克球拍" frameborder="0" allowfullscreen mozallowfullscreen="true"
                        webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking"
                        xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share
                        src="https://sketchfab.com/models/d9f1ced8b00a453a8e93dd51f0e70bcf/embed" class="product-img"> </iframe>
                    <h2 class="product-title">3D 建模+渲染</h2>
                    <span class="product-price">NT$5,000</span>
                    <i class="bi bi-cart2 add-cart"></i>
                </div>

   

            <div class="product-box col-lg-4 col-md-6 shop-item shop-O">

                <iframe width="100%" height="350" title="自行車" frameborder="0" allowfullscreen mozallowfullscreen="true"
                    webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking"
                    xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share
                    src="https://sketchfab.com/models/6a67b2607d6443e3b08830f9feceea98/embed" class="product-img"> </iframe>
                <h2 class="product-title">3D機構+渲染</h2>
                <span class="product-price">NT$20,000</span>
                <i class="bi bi-cart2 add-cart"></i>
            </div>

            <div class="product-box col-lg-4 col-md-6 shop-item shop-M">
                <img src="img/shop/壓克力商品設計.jpg" alt="壓克力商品設計" class="product-img">
                <h2 class="product-title">壓克力商品設計</h2>
                <span class="product-price">NT$1,000</span>
                <i class=" bi bi-cart2 add-cart"></i>
            </div>


            <div class="product-box col-lg-4 col-md-6 shop-item shop-C shop-O">
                <img src="img/shop/7月_小小綿羊.jpg" alt="造型黏土課程" class="product-img">
                <h2 class="product-title">造型黏土課程</h2>
                <span class="product-price">NT$200</span>
                <i class="bi bi-cart2 add-cart"></i>
            </div>

  
            <div class="product-box col-lg-4 col-md-6 shop-item shop-O shop-M">

                <iframe width="100%" height="350" title="羽球拍" frameborder="0" allowfullscreen mozallowfullscreen="true"
                    webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking"
                    xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share
                    src="https://sketchfab.com/models/fb92021ea64c465d922d0062ce26e960/embed" class="product-img"> </iframe>
                <h2 class="product-title">3D 建模</h2>
                <span class="product-price">NT$2,000</span>
                <i class="bi bi-cart2 add-cart"></i>
            </div>

         
            <div class="product-box col-lg-4 col-md-6 shop-item shop-P">
                <img src="img/shop/love-letter.gif" alt="" class="product-img" width="100px">
                <h2 class="product-title">LOVE LETTER <br>恩典卡盒</h2>
                <span class="product-price">NT$200</span>
                <i class="bi bi-cart2 add-cart"></i>
            </div>


        </div> -->
    </div>
</section>

<?php include "footer.php" ?>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>


<!-- Vendor JS Files -->
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Isotope -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>

<!-- Other scripts you might need -->
<script src="https://cdn.jsdelivr.net/npm/popper.js/1.16.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->


<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/popper.js/1.16.1/dist/umd/popper.min.js"></script>
<!-- Include jQuery -->


<!-- SHOP  JS Files -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // 找到所有的shop-item
        var items = document.querySelectorAll(".shop-item");
        // 找到顯示項目數量的span元素
        var totalItemsShop = document.getElementById("total-items-shop");
        // 將項目數量填入span元素中
        totalItemsShop.textContent = "(" + items.length + ")";
    });
</script>

<!-- 分類功能用JQuery -->
<script>
    $(document).ready(function() {
        // 初始化 isotope
        var $shopContainer = $('.shop-container').isotope({
            itemSelector: '.shop-item',
            layoutMode: 'fitRows'
        });

        // 綁定篩選按鈕點擊事件
        $('#shop-flters li').on('click', function() {
            // 移除其他按鈕的 active class
            $('#shop-flters li').removeClass('filter-active');
            // 為當前按鈕添加 active class
            $(this).addClass('filter-active');

            // 獲取篩選類別
            var filterValue = $(this).attr('data-filter');
            // 應用篩選
            $shopContainer.isotope({
                filter: filterValue
            });
        });
    });
</script>

</body>


</html>