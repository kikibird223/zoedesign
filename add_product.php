<?php
include("db.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_title = $_POST['product_title'];
    $product_price = $_POST['product_price'];
    $category_id = $_POST['category_id'];
    $product_iframe_url = $_POST['product_iframe_url'];

    // Handle file upload
    $target_dir = "img/shop/";
    $target_file = $target_dir . basename($_FILES["product_image"]["name"]);
    move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file);
    $product_image_url = basename($_FILES["product_image"]["name"]);

    // Insert into database
    //操作連線資源
    $data = [$product_title, $product_price, $category_id, $product_image_url, $product_iframe_url];
    $sql = "INSERT INTO products (product_title, product_price, category_id, product_image_url, product_iframe_url)
            VALUES (?, ?, ?, ?, ?)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);

    header('Location: success.php');
}
