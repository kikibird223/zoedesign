<?php
include("db.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category_name = $_POST['category_name'];
    //測試用 pr($_FILES, true);
    
    // Handle file upload
    $target_dir = "img/shop/";
    $target_file = $target_dir . basename($_FILES["category_image"]["name"]);
    move_uploaded_file($_FILES["category_image"]["tmp_name"], $target_file);
    $category_image_url = basename($_FILES["category_image"]["name"]);

    // Insert into database
    //操作連線資源
    $data = [$category_image_url, $category_name,];
    $sql = "INSERT INTO categories (category_image_url, category_name)
            VALUES (?, ?)";
    // 預備語句
    $stmt = $dbh->prepare($sql);
    try {
        $stmt->execute($data);
        if ($stmt->rowCount() > 0) {
            echo '新增成功';
        } else {
            echo '新增失敗';
        }
    } catch (PDOException $e) {
        echo '新增失敗';
    }
    unset($_POST);

    header('Location: success.php');
}
