<?php
// Database connection
include("db.php");

// Handle category and product operations (Add/Edit/Delete)


// Fetch all login "使用者"連接資料庫
$sql = "SELECT * FROM login";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$logins = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Fetch all categories 類別連接資料庫
$sql = "SELECT * FROM categories";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
// Define target directory
$target_dir = "img/shop/";

// Fetch all products 產品連接資料庫
$sql = "SELECT p.*, c.category_name FROM products p 
        LEFT JOIN categories c ON p.category_id = c.category_id";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include("header_shop.php"); ?>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-3 col-md-3 col-sm-12" id="category-management">
                <!-- Category Management -->
                <h3 class="my-4 fw-bold" style="text-align: center;"> Categories</h3>
                <form method="POST" action="add_category.php" enctype="multipart/form-data" class="mb-4">
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="category_name" placeholder="新增類別...">
                    </div>
                    <div class="input-group">
                        <input type="file" name="category_image" class="form-control">
                        <!-- required -->
                        <button class="btn btn-primary" type="submit"
                            style="background-color: rgba(55, 181, 166, 0.9); border: none;">
                            <i class="bi bi-plus-lg"></i>Add
                        </button>
                    </div>
                </form>

                <table class="table table-bordered table-striped">
                    <thead style="background-color: #b8a07e;">
                        <tr>
                            <th>NO.</th>
                            <th>圖示</th>
                            <th>類別</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categories as $category) : ?>
                            <tr>
                                <td><?php echo $category['category_id']; ?></td>
                                <td>
                                    <img src="<?php echo $target_dir . htmlspecialchars($category['category_image_url']); ?>"
                                        alt="<?php echo htmlspecialchars($category['category_name']); ?>"
                                        style="width:50px;height:auto;">
                                </td>
                                <td><?php echo $category['category_name']; ?></td>

                                <td>
                                    <a href="edit_category.php?category_id=<?php echo $category['category_id']; ?>"
                                        class="btn btn-warning btn-sm"
                                        style="background-color: rgba(55, 181, 166, 0.3); border: none;">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <a href="delete_category.php?category_id=<?php echo $category['category_id']; ?>"
                                        class="btn btn-danger btn-sm"
                                        style="background-color: rgba(55, 181, 166, 0.5); border: none;"
                                        onclick=" return confirm('請問您是否要刪除此類別: <?php echo $category['category_name']; ?>?')">
                                        <i class="bi bi-x-lg"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-8 col-md-7 col-sm-12" id="product-management">
                <!-- Product Management -->
                <h3 class="my-4 fw-bold" style="text-align: center;"> Products</h3>
                <form method="POST" action="add_product.php" enctype="multipart/form-data" class="mb-4">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <input type="text" name="product_title" class="form-control" placeholder="新增標題..." required>
                        </div>
                        <div class="col-md-4">
                            <input type="number" name="product_price" class="form-control" placeholder="新增價格..."
                                required>
                        </div>
                        <div class="col-md-4">
                            <select name="category_id" class="form-select" required>
                                <?php foreach ($categories as $category) : ?>
                                    <option value="<?php echo $category['category_id']; ?>">
                                        <?php echo $category['category_name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row g-3 mt-3">
                        <div class="col-md-4">
                            <input type="file" name="product_image" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <input type="url" name="product_iframe_url" class="form-control" placeholder="崁入iframe URL">
                        </div>
                        <div class="col-md-4 mt-3">
                            <button class="btn btn-primary"
                                style="background-color: rgba(55, 181, 166, 0.9); border: none;"><i
                                    class="bi bi-plus-lg"></i>Add</button>
                        </div>
                    </div>

                </form>

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
                        <?php foreach ($products as $product) : ?>
                            <tr>
                                <td><?php echo $product['product_id']; ?></td>
                                <td><?php echo $product['product_title']; ?></td>
                                <td>NT$<?php echo $product['product_price']; ?></td>
                                <td><?php echo $product['category_name']; ?></td>
                                <td>
                                    <?php if (!empty($product['product_image_url'])) : ?>
                                        <img src="img/shop/<?php echo $product['product_image_url']; ?>" class="img-fluid"
                                            width="100">
                                    <?php elseif (!empty($product['product_iframe_url'])) : ?>
                                        <iframe width="100" height="100" src="<?php echo $product['product_iframe_url']; ?>"
                                            frameborder="0" allowfullscreen></iframe>
                                    <?php else : ?>
                                        <p>No media available</p>
                                    <?php endif; ?>
                                </td>

                                <!-- <td><?php echo $product['product_iframe_url']; ?></td> -->
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</body>

</html>