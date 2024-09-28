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

// Fetch all products 產品連接資料庫
$sql = "SELECT p.*, c.category_name FROM products p 
        LEFT JOIN categories c ON p.category_id = c.category_id";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <style>
        .container {
            margin: 30px;
        }

        .navbar-nav .nav-link.active,
        .navbar-nav .nav-link.show {
            color: white;
        }

        .nav-link {
            color: white;
        }

        .navbar-brand {
            color: white;
        }

        #category-management,
        #product-management {
            border: 1px solid #ddd;
            border-radius: 20px;
            padding: 30px;
            margin: 10px;
            background-color: linear-gradient(to bottom, #ecf5f9, #ffffff);
            color: #b8a07e;
        }
        #category-management tr :hover,
        #product-management tr :hover{
            background-color: rgb(220, 220, 220);
        }

        #search{
            border-radius: 50px;  
        }
        #search-btn {
            background-color: rgba(55, 181, 166, 0.9);
            color: white;
            border: none;
            border-radius: 50px;
            /* Smooth transition */
        }

        #search-btn:hover {
            background-color: black;
            /* Change background color on hover */
            color: white;
            /* Change text color on hover */
        }
        body {
            text-align: center;
            margin: 0 auto;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg " style="background-color: #055160;">
        <!-- Navbar content -->
        <div class="container-fluid">
            <a class="navbar-brand ms-2" href="index.html">
                <img src="img/zoehsueh.png" alt="" style="width: 150px; color: white; padding: 10px;" alt="my photo">
                後台管理系統
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex col-4" role="search">
                    <input id="search" class="form-control me-2" type="search" placeholder="關鍵字搜尋..." aria-label="Search">
                    <button id="search-btn" class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <?php foreach ($logins as $login) : ?>
                    <p class="text-end ms-3 lh-lg align-middle " style=" letter-spacing: 2px;  color:RGBA(255, 255, 255, 0.8);">歡迎<strong style="color: white;"><?php echo $login['username']; ?></strong>登入管理頁面</p>
                <?php endforeach; ?>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-3 col-md-3 col-sm-12" id="category-management">
                <!-- Category Management -->
                <h3 class="my-4 fw-bold" style="text-align: center;"> Categories</h3>
                <form method="POST" action="add_category.php" class="mb-4">
                    <div class="input-group">
                        <input type="text" class="form-control" name="category_name" placeholder="新增類別...">
                        <button class="btn btn-primary" type="submit" style="background-color: rgba(55, 181, 166, 0.9); border: none;"><i class="bi bi-plus-lg"></i>Add</button>
                    </div>
                </form>

                <table class="table table-bordered table-striped">
                    <thead style="background-color: #b8a07e;">
                        <tr>
                            <th>ID</th>
                            <th>類別</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categories as $category) : ?>
                            <tr>
                                <td><?php echo $category['category_id']; ?></td>
                                <td><?php echo $category['category_name']; ?></td>
                                <td>
                                    <a href="edit_category.php?id=<?php echo $category['category_id']; ?>" class="btn btn-warning btn-sm" style="background-color: rgba(55, 181, 166, 0.3); border: none;"><i class="bi bi-pencil"></i></a>
                                    <a href="delete_category.php?id=<?php echo $category['category_id']; ?>" class="btn btn-danger btn-sm" style="background-color: rgba(55, 181, 166, 0.5); border: none;"><i class="bi bi-x-lg"></i></a>
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
                            <input type="number" name="product_price" class="form-control" placeholder="新增價格..." required>
                        </div>
                        <div class="col-md-4">
                            <select name="category_id" class="form-select" required>
                                <?php foreach ($categories as $category) : ?>
                                    <option value="<?php echo $category['category_id']; ?>"><?php echo $category['category_name']; ?></option>
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
                            <button class="btn btn-primary" style="background-color: rgba(55, 181, 166, 0.9); border: none;"><i class="bi bi-plus-lg"></i>Add</button>
                        </div>
                    </div>

                </form>

                <table class="table table-bordered table-striped">
                    <thead style="background-color: #b8a07e;">
                        <tr>
                            <th>產品ID</th>
                            <th>標題</th>
                            <th>價格</th>
                            <th>類別</th>
                            <th>Image</th>
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
                                        <img src="img/shop/<?php echo $product['product_image_url']; ?>" class="img-fluid" width="100">
                                    <?php elseif (!empty($product['product_iframe_url'])) : ?>
                                        <iframe width="100" height="100" src="<?php echo $product['product_iframe_url']; ?>" frameborder="0" allowfullscreen></iframe>
                                    <?php else : ?>
                                        <p>No media available</p>
                                    <?php endif; ?>
                                </td>

                                <!-- <td><?php echo $product['product_iframe_url']; ?></td> -->
                                <td>
                                    <a href="edit_product.php?id=<?php echo $product['product_id']; ?>" class="btn btn-warning btn-sm" style="background-color: rgba(55, 181, 166, 0.3); border: none;"><i class="bi bi-pencil"></i></a>
                                    <a href="delete_product.php?id=<?php echo $product['product_id']; ?>" class="btn btn-danger btn-sm" style="background-color: rgba(55, 181, 166, 0.5); border: none;"><i class="bi bi-x-lg"></i></a>
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