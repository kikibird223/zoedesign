<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoe Porfolio | Shop</title>

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="img/Zoe.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Template Main CSS File -->
    <link href="assets/vendor/style.css" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap.min.css" rel="stylesheet">
    <!-- ... other CSS links ... -->
    <!-- Vendor JS Files -->
    <script src="Scripts/bootstrap.bundle.min.js"></script>
    <!-- ... other JS links ... -->
    <!-- =======================================================
    * Template Name: Squadfree
    * Updated: Sep 18 2023 with Bootstrap v5.3.2
    * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->

    <style>
        #buy-now {
            border-radius: 25px;
            /* 50% border-radius for a rounded button */
            height: 50px;
        }
    </style>


    <style>
        /* Google Fonts  */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

        /* Globals  */
        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            text-decoration: none;
            scroll-behavior: smooth;
            scroll-padding: 2rem;
        }




        /* Add hover effect */
        .image-container {
            position: relative;
            overflow: hidden;
        }

        .image-container img {
            transition: transform 0.3s;
        }

        .image-container:hover img {
            transform: scale(1.01);
            /* or any other transformation you desire */
        }

        /* Overlay text */
        .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            opacity: 0;
            transition: .5s ease;
            background-color: rgba(78, 172, 171, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .image-container:hover .overlay {
            opacity: 1;
        }

        .overlay .text {
            color: white;
            font-size: 20px;
        }


        /*--------------------------------------------------------------
# shop
--------------------------------------------------------------*/
        #shop {
            position: relative;
            padding-bottom: 40px;
        }

        #shop #shop-flters {
            padding: 0;
            margin: 0 auto 35px auto;
            list-style: none;
            text-align: center;
            border-radius: 50px;
            padding: 2px 15px;
        }

        #shop #shop-flters li {
            cursor: pointer;
            display: inline-block;
            padding: 10px 15px 8px 15px;
            font-size: 14px;
            font-weight: 600;
            line-height: 1;
            text-transform: uppercase;
            color: #999999;
            margin-bottom: 5px;
            transition: all 0.3s ease-in-out;
        }

        #shop #shop-flters li:hover,
        #shop #shop-flters li.filter-active {
            color: #b8a07e;
        }

        #shop #shop-flters li:last-child {
            margin-right: 0;
        }

        #shop .shop-item {
            margin-bottom: 30px;
        }

        #shop .shop-item .shop-info {
            opacity: 0;
            position: absolute;
            left: 30px;
            right: 30px;
            bottom: 0;
            z-index: 3;
            transition: all ease-in-out 0.3s;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
        }

        #shop .shop-item .shop-info h4 {
            font-size: 18px;
            color: #666;
            font-weight: 600;
            margin-bottom: 10px;
        }

        #shop .shop-item .shop-info p {
            color: #999;
            font-size: 14px;
            margin: 0;
            padding: 20px;
        }

        #shop .shop-item .shop-info .preview-link,
        #shop .shop-item .shop-info .details-link {
            position: absolute;
            right: 40px;
            font-size: 24px;
            top: calc(50% - 18px);
            color: #b8a07e;
        }

        #shop .shop-item .shop-info .preview-link:hover,
        #shop .shop-item .shop-info .details-link:hover {
            color: #cab89f;
        }

        #shop .shop-item .shop-info .details-link {
            right: 10px;
        }

        #shop .shop-item:hover .shop-info {
            opacity: 1;
            bottom: 20px;
        }



        /*--------------------------------------------------------------
# shop
--------------------------------------------------------------*/
        .shop .shop-item {
            margin-bottom: 30px;
        }

        .shop #shop-flters {
            padding: 20px;
            margin: 0 auto 35px auto;
            list-style: none;
            text-align: center;
            background: #ecf5f9;
            border-radius: 50px;
            padding: 2px 15px;
        }

        .shop #shop-flters li {
            cursor: pointer;
            display: inline-block;
            padding: 10px 15px 8px 15px;
            font-size: 14px;
            font-weight: 600;
            line-height: 1;
            text-transform: uppercase;
            color: #2f5a52;
            margin-bottom: 5px;
            transition: all 0.3s ease-in-out;
        }

        .shop #shop-flters li:hover,
        .shop #shop-flters li.filter-active {
            color: #67d1b1;
        }

        .shop #shop-flters li:last-child {
            margin-right: 0;
        }


        /*--------------------------------------------------------------
      # Back to top button
      --------------------------------------------------------------*/
        .back-to-top {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            right: 15px;
            bottom: 15px;
            z-index: 998;
            background: #67d1b1;
            width: 40px;
            height: 40px;
            border-radius: 50px;
            transition: all 0.4s;
        }

        .back-to-top i {
            font-size: 24px;
            color: #fff;
            line-height: 0;
        }

        .back-to-top:hover {
            background: #86dad7;
            color: #fff;
        }

        .back-to-top.active {
            visibility: visible;
            opacity: 1;
        }

        /* Variables  */
        :root {
            --main-color: #67d1b1;
            --sec-color: rgba(0, 65, 68, 0.8);
            /* 设置悬停时的底色 */
            /* Change the color on hover */
            --text-color: #67d1b1;
            --bg-color: #fff;
            border-radius: 10px;
            /* 设置圆角 */
        }

        ::selection {
            color: var(--text-color);
            background-color: var(--main-color);
        }

        .container {
            max-width: 1068px;
            margin: auto;
            width: 100%;
        }

        section {
            padding: 4rem 0 3rem;
        }

        body {
            color: var(--text-color);
            padding: 0 auto;
            padding-top: 50px;
        }



        /* =======================================  */
        /* HEADER  */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: var(--bg-color);
            box-shadow: 0 1px 4px hsl(0 4% 15% / 10%);
            z-index: 100;
        }

        .nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 0;

        }

        .logo {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--sec-color);
            text-transform: uppercase;
        }

        .logo span {
            color: var(--main-color);
            font-weight: 700;
        }

        #cart-icon {
            font-size: 1.8rem;
            cursor: pointer;
        }

        /* CART  */
        .cart {
            position: fixed;
            top: 0;
            right: 0;
            right: -100%;
            width: 360px;
            height: 100vh;
            overflow-y: auto;
            overflow-x: hidden;
            padding: 20px;
            background-color: var(--bg-color);
            box-shadow: -2px solid 4px rgba(137, 255, 245, 0.1);
            border: 0.5px solid var(--main-color);
            transition: 1.5s;
        }

        .cart.active {
            right: 0;
            transition: .5s;
        }

        .cart-title {
            text-align: center;
            font-size: 1.5rem;
            font-weight: 600;
            margin-top: 2rem;
        }

        .cart-box {
            display: grid;
            grid-template-columns: 32% 50% 18%;
            align-items: center;
            gap: 1rem;
            margin-top: 1rem;
        }

        .cart-img {
            width: 100px;
            height: 100px;
            object-fit: contain;
            padding: 10px;
        }

        .detail-box {
            display: grid;
            row-gap: .5rem;
        }

        .cart-product-title {
            font-size: 1rem;
            text-transform: uppercase;
        }

        .cart-price {
            font-weight: 500;
        }

        .cart-quantity {
            border: 1px solid var(--text-color);
            outline-color: var(--main-color);
            width: 2.4rem;
            text-align: center;
            font-size: 1rem;
        }

        .cart-remove {
            font-size: 24px;
            color: var(--main-color);
            cursor: pointer;
        }

        .total {
            display: flex;
            justify-content: flex-end;
            margin-top: 1.5rem;
            border-top: 1px solid var(--text-color);
        }

        .quantity {
            font-size: 1rem;
            font-weight: 600;
        }

        .totalPrice {
            margin-left: .5rem;
        }

        .buy-now {
            display: flex;
            margin: 1.5rem auto 0 auto;
            padding: 12px 20px;
            border: none;
            background-color: var(--sec-color);
            color: var(--bg-color);
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
        }

        .buy-now:hover {
            background-color: var(--text-color);
        }

        #cart-close {
            position: absolute;
            top: 1rem;
            right: .8rem;
            font-size: 2rem;
            color: var(--text-color);
            cursor: pointer;
        }

        /* SHOP SECTION  */
        .shop {
            margin-top: 2rem;
        }

        .section-title {
            font-style: 1.5rem;
            font-weight: 600;
            text-align: center;
            margin: 40px 0 0px 0;
        }

        .shop-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, auto));
            gap: 1.5rem;
        }

        .product-box {
            position: relative;
        }

        .product-box:hover {
            padding: 10px;
            border: 1px solid var(--text-color);
            transition: .4s;
        }

        .product-img {
            width: 100%;
            aspect-ratio: 1/1;
            object-fit: cover;
            margin-bottom: .5rem;
        }

        .product-title {
            font-size: 1.1rem;
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: .5rem;
        }

        .product-price {
            font-weight: 500;
        }

        .add-cart {
            position: absolute;
            bottom: 0;
            right: 0;
            background-color: var(--text-color);
            color: var(--bg-color);
            padding: 10px;
            cursor: pointer;
        }

        .add-cart:hover {
            background-color: hsl(249, 32%, 17%);
        }


        /* ================ RESPONSIVE & BREAKPOINTS ============= */
        @media (max-width: 1080px) {
            .nav {
                padding: 15px;
            }

            .container {
                width: 90%;
                margin: 0 auto;
            }

            section {
                padding: 3rem 0 2rem;
            }

            .shop {
                margin-top: 2rem;
            }
        }

        /* For Medium Devices */
        @media (max-width: 400px) {
            .nav {
                padding: 11px;
            }

            .logo {
                font-size: 1rem;
            }

            .cart {
                width: 320px;
            }
        }

        /* For Small Devices */
        @media (max-width: 360px) {
            .shop {
                margin-top: 1rem;
            }

            .cart {
                width: 280px;
            }
        }
    </style>
    <style>
        /* Add custom styles for hover effect */
        .navbar-nav .nav-link:hover {
            background-color: #c4fcff;
            border-radius: 10px;
            /* 设置圆角 */
            color: rgba(0, 65, 68, 0.8);
            /* 设置悬停时的底色 */
            /* Change the color on hover */
        }

        /* Adjust the color for the active link */
        .navbar-nav .nav-link.active {
            background-color: #c4fcff;
            /* 设置悬停时的底色 */
            /* 设置激活时的底色 */
            border-radius: 10px;
            /* 设置圆角 */

            color: rgba(0, 65, 68, 0.8);
            /* Change the active link color */
        }

        /* Custom styles to make the navbar transparent */
        .navbar-custom {
            background-color: transparent !important;
            box-shadow: none !important;
        }

        /* 新增样式用于隐藏菜单 */
        .navbar-collapse.collapsing {
            display: none;
        }

        /* 移除navbar-brand链接的hover效果 */
        .navbar-brand:hover {
            border-radius: 10px;
            /* 设置圆角 */
            color: #fff;
            /* 设置悬停时的底色 */
            /* Change the color on hover */
            font-size: 1.2em;
            /* 放大字体，可以根据需要调整数值 */
        }

        /* 自定义hover效果 */
        .custom-hover:hover {
            /* 添加你想要的hover样式，例如改变背景颜色 */
            background-color: #fff;
            border-radius: 10px;
            /* 设置圆角 */
            color: rgba(0, 65, 68, 0.8);
            /* 设置悬停时的底色 */
            /* Change the color on hover */
        }

        /* 设置搜索框边框为圆角 */
        .d-flex {
            border-radius: 20px;
        }


        /*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
        section {
            padding: 60px 0;
            overflow: hidden;
        }

        .section-bg {
            background-color: #f4f9fc;
        }

        .section-title {
            text-align: center;
            padding-bottom: 30px;
        }

        .section-title h2 {
            font-size: 32px;
            font-weight: bold;
            position: relative;
            margin-bottom: 30px;
            color: #2f5a59;
            z-index: 2;
        }

        .section-title h2::after {
            content: "";
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 122px;
            height: 66px;
            background: url(../img/section-title-bg02.png) no-repeat;
            z-index: -1;
        }

        .section-title p {
            margin-bottom: 0;
        }
    </style>


</head>



<body>


 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top header-transparent">
  <nav class="navbar navbar-expand-lg">
      <div class="container"  style="margin-top: 20px;">
          <a class="navbar-brand" href="index.html" style="font-family: 'Bad Script', cursive; font-size: 30px; transition: none; ">
            <!-- zoe hsueh -->
            <img src="img/zoehsueh.png" alt="" style="width: 150px;" alt="my photo">
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"><i class="bi bi-list"></i></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#hero" title="首頁">Home</a>
                </li>
        
                <li class="nav-item">
                    <a class="nav-link" href="#about" title="關於我">About</a>
                </li>
        
           <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="featuresDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"title="作品集">
                  Works
                </a>
                <div class="dropdown-menu" aria-labelledby="featuresDropdown">
                    <a class="dropdown-item" href="#portfolio"title="機構設計">Mechanical Design</a>
                    <a class="dropdown-item" href="#portfolio" title="動畫表現">Animation</a>
                    <a class="dropdown-item" href="#portfolio" title="視覺平面">Graphic Design</a>
                    <a class="dropdown-item" href="#portfolio"title="網頁設計">WebSite Design</a>
                    <a class="dropdown-item" href="#portfolio"title="空間規劃">Interior Design</a>
               
                    <a class="dropdown-item dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="產品設計">
                      Product Design
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="Product-Y3000.html"title="學步車設計">Baby Walker</a></li>
                      <li><a class="dropdown-item" href="Product-Virtual Exhibition .html"title="虛擬展間">SPE虛擬展間設計</a></li>
                      <li><a class="dropdown-item" href="Product-X-Folding Bike.html"title="健身飛輪創新">X-Folding Bike</a></li>
                    </ul>
                </div>
            </li>
        
                <li class="nav-item">
                    <a class="nav-link" href="#cta" title="專業技能">Expertise</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#team" title="工作經歷">Experience</a>
                </li>
        
                <li class="nav-item">
                    <a class="nav-link" href="#contact" title="與我聯繫">Contact</a>
                </li>
        
                <li class="nav-item">
                  <a class="nav-link" href="login.html" title="管理者登入"  style="color: black;">
                      <i class="bi bi-person-circle bi-4x" style="font-size: 20px;"></i>
                  </a>
       
              <li class="nav-item">
                <a class="nav-link" href="shop.php" title="shop商店"  style="color: black;" target="_blank">
                    <i class='bx bx-shopping-bag ' id="cart-icon" style="font-size: 20px;"></i>
                </a>
            </li>
        

            <div id="google_translate_element" style="padding: 8px;"></div>
        
            <script type="text/javascript">
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({
                        pageLanguage: 'zh-TW',
                        includedLanguages: 'en,es,ja,zh-TW,fr',  // 包括日文作为目标语言
                        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                    }, 'google_translate_element');
                }
            </script>
            <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


            <form class="d-flex" action="https://www.google.com/search" method="get" role="search">
                <input class="form-control me-2 rounded-pill" type="search" placeholder="輸入Google關鍵字..." aria-label="Search" name="q">
                <button class="btn btn-outline-light rounded-pill" type="submit">Search</button>
            </form>

        

        </div>
        
      </div>
  </nav>
</header>
<!-- End Header -->