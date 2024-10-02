<?php
// 包含資料庫連接文件
include("db.php");

// 獲取搜尋關鍵字
$search_keyword = '';
if (isset($_GET['search'])) {
    $search_keyword = $_GET['search'];
}

// 搜索 `categories` 和 `products` 表中的匹配結果
$sql = "SELECT p.*, c.category_name 
        FROM products p 
        JOIN categories c ON p.category_id = c.category_id 
        WHERE p.product_title LIKE :search_term OR c.category_name LIKE :search_term";

// 準備和執行查詢
$stmt = $dbh->prepare($sql);
$search_term = "%" . $search_keyword . "%";
$stmt->bindParam(':search_term', $search_term, PDO::PARAM_STR);

// 執行查詢
$stmt->execute();

// 獲取查詢結果
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include("header_shop.php"); ?>


<div class="container">
    <div class="row justify-content-between">
        <div class="col-12" id="product-management">
            <!-- Product Management -->
            <h3 class="my-4 fw-bold" style="text-align: center;"> Products搜索結果</h3>

            <table class="table table-bordered table-striped">
                <thead style="background-color: #b8a07e;">
                    <tr>
                        <th>NO.</th>
                        <th>標題</th>
                        <th>價格</th>
                        <th>類別</th>
                        <th>圖示</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($results) > 0): ?>
                        <?php foreach ($results as $product): ?>
                            <tr>
                                <td><?php echo $product['product_id']; ?></td>
                                <td><?php echo htmlspecialchars($product['product_title']); ?></td>
                                <td>NT$<?php echo htmlspecialchars($product['product_price']); ?></td>
                                <td><?php echo htmlspecialchars($product['category_name']); ?></td>
                                <td>
                                    <?php if (!empty($product['product_image_url'])): ?>
                                        <img src="img/shop/<?php echo $product['product_image_url']; ?>" class="img-fluid" width="100">
                                    <?php elseif (!empty($product['product_iframe_url'])): ?>
                                        <iframe width="100" height="100" src="<?php echo $product['product_iframe_url']; ?>" frameborder="0" allowfullscreen></iframe>
                                    <?php else: ?>
                                        <p>No media available</p>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <!-- 編輯按鈕 -->
                                    <a href="edit_product.php?product_id=<?php echo $product['product_id']; ?>"
                                        class="btn btn-warning btn-sm"
                                        style="background-color: rgba(55, 181, 166, 0.3); border: none;">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <!-- 刪除按鈕 -->
                                    <a href="delete_product.php?product_id=<?php echo $product['product_id']; ?>"
                                        class="btn btn-danger btn-sm"
                                        style="background-color: rgba(55, 181, 166, 0.5); border: none;"
                                        onclick="return confirm('請問您是否要刪除此產品: <?php echo $product['product_title']; ?>?')">
                                        <i class="bi bi-x-lg"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6" class="text-center">沒有找到相關結果。</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>


</div>


</body>

</html>