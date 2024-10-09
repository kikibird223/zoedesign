<!-- ======= Header ======= -->
<?php include "header.php" ?>
<!-- End Header -->

<div style="background-image: url('img/banner.jpg'); height: 150px; background-size: cover; background-position: center center;">

</div>

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
        // Fetch total number of products to calculate total pages
        $total_products_sql = "SELECT COUNT(*) FROM products";
        $stmt = $dbh->prepare($total_products_sql);
        $stmt->execute();

        // 獲取產品總數
        $total_products = $stmt->fetchColumn();

        $limit = 3; // 每頁顯示的產品數量
        $page = 1; // 預設頁數
        $page = isset($_GET['page']) && (int)$_GET['page'] > 0 ? (int)$_GET['page'] : 1;
        $offset = ($page - 1) * $limit;
        $total_pages = ceil($total_products / $limit); // 總頁數計算

        // Fetch all categories "類別"連接資料庫
        $sql = "SELECT * FROM categories";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Fetch products with pagination
        $sql = "SELECT p.*, c.category_name FROM products p 
        LEFT JOIN categories c ON p.category_id = c.category_id 
        LIMIT :limit OFFSET :offset";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
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

        <!-- Pagination -->
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center" style="border-radius: 5px; color:  rgba(55, 181, 166, 0.9);">
                <li class="page-item <?php if ($page <= 1) echo 'disabled'; ?>">
                    <a class="page-link" href="?page=<?php echo max(1, $page - 1); ?>" tabindex="-1">上一頁</a>
                </li>
                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                    <li class="page-item <?php if ($i === $page) echo 'active'; ?>">
                        <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                <?php endfor; ?>
                <li class="page-item <?php if ($page >= $total_pages) echo 'disabled'; ?>">
                    <a class="page-link" href="?page=<?php echo min($total_pages, $page + 1); ?>">下一頁</a>
                </li>
            </ul>
        </nav>
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