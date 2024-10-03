<?php

// Fetch all login "使用者"連接資料庫
$sql = "SELECT * FROM login";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$logins = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="success.css">
    <script src="success.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg " style="background-color: #055160;">
        <!-- Navbar content -->
        <div class="container-fluid">
            <a class="navbar-brand ms-2" href="success.php">
                <img src="img/zoehsueh.png" alt="" style="width: 150px; color: white; padding: 10px;" alt="my photo">
                後台管理系統
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex col-lg-4 col-md-6 ms-auto" role="search" method="GET" action="search.php">
                    <input id="search" class="form-control me-2" type="search" name="search" placeholder="產品、類別、關鍵字..." aria-label="Search">
                    <button id="search-btn" class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <?php foreach ($logins as $login) : ?>
                    <p class="text-end ms-3 lh-lg align-middle"
                        style="letter-spacing: 2px; color:RGBA(255, 255, 255, 0.8); top: 8px; position: relative;">
                        歡迎<strong style="color: white;"><?php echo $login['username']; ?></strong>登入管理頁面
                    </p>
                <?php endforeach; ?>
            </div>


        </div>
    </nav>