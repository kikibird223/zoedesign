<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 接收 data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // 連接資料庫
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "xampp123";
    $dbname = "mywebsite";

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    // 檢查連接是否成功
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // validate login authentication
    $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";

    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // 登入成功
        header("Location: success.php");
        exit();
    } else {
        // 登入失敗
        header("Location: error.html");
        exit();
    }

    $conn->close();
}
?>
