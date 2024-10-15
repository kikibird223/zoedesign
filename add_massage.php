<?php
session_start();  // 開啟 session

include("db.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $c_name = $_POST['c_name'];
    $c_email = $_POST['c_email'];
    $c_subject = $_POST['c_subject'];
    $c_message = $_POST['c_message'];
    $submission_date = date('Y-m-d H:i:s');  // 生成提交日期
    
    // Insert into database
    $data = [$c_name, $c_email, $c_subject, $c_message, $submission_date];
    $sql = "INSERT INTO contacts (c_name, c_email, c_subject, c_message, submission_date)
            VALUES (?, ?, ?, ?, ?)";
    
    // 預備語句
    $stmt = $dbh->prepare($sql);
    
    try {
        $stmt->execute($data);
        if ($stmt->rowCount() > 0) {
            $_SESSION['message'] = '新增成功';  // 設置成功訊息
        } else {
            $_SESSION['message'] = '新增失敗';  // 設置失敗訊息
        }
    } catch (PDOException $e) {
        $_SESSION['message'] = '新增失敗: ' . $e->getMessage();  // 設置異常訊息
    }
    
    // 清空 POST 數據，防止表單重複提交
    unset($_POST);
    
    // 重定向回首頁或其他頁面
    header('Location: index.php');
    exit();  // 確保腳本執行終止
}
