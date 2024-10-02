<?php
include("db.php");

// 檢查是否有從 URL 中獲取 `id`
if (isset($_GET['category_id'])) {

    // 將 `id` 轉換成變數
    $category_id = $_GET['category_id'];

    // 操作連線資源: 刪除資料
    $sql = "DELETE FROM `categories` WHERE `category_id`=?";
    $data = [$category_id];

    // 預備語句
    $stmt = $dbh->prepare($sql);

    // 執行語句
    if ($stmt->execute($data)) {
        // 刪除成功後重新導向到管理頁面
        header("location: success.php");
        exit();
    } else {
        echo "Error deleting record.";
    }
} else {
    echo "No ID found to delete.";
}
