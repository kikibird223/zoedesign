<?php
include("db.php");
$id = '';
$title = '';
$target_dir = "img/shop/";

if (isset($_GET['product_id'])) {
  $id = $_GET['product_id'];

  //操作連線資源
  $data = [$id];
  $sql = "select * from `products` WHERE `product_id`=?"; //要執行的SQL語法
  // 預備語句
  $stmt = $dbh->prepare($sql);
  // 執行語句
  $stmt->execute($data);

  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  if (!empty($results) && isset($results[0]['product_title'])) {
    $product_title = $results[0]['product_title'];
    $product_price = $results[0]['product_price'];
    $product_image_url = $results[0]['product_image_url'];
    $product_iframe_url = $results[0]['product_iframe_url'];
    $category_id = $results[0]['category_id'];
  }
}


if (isset($_POST['update'])) {
  //檔案上傳
  // var_dump($_FILES["fileToUpload"]); exit;//測試用
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  //宣告變數 $image_filename, 尚未取得上傳檔案名稱, 保留空值""
  $image_filename = "";
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  // echo $imageFileType; exit;

  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if ($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }

  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 1;
  }

  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }

  // Allow certain file formats
  if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" && $imageFileType != "webp"
  ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
      //$image_filename變數,取得上傳的檔案名稱
      $image_filename = htmlspecialchars(basename($_FILES["fileToUpload"]["name"]));
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
  // //檔案上傳end
  // exit;

  $id = $_POST['product_id'];
  $product_title = $_POST['product_title'];
  $product_image_url = $image_filename;
  $product_price = $_POST['product_price'];
  $product_iframe_url = $_POST['product_iframe_url'];
  $category_id = $_POST['category_id'];

  $sql = "UPDATE `products` set `product_title` = ?, `product_price` = ?, `product_image_url` = ?, `product_iframe_url` = ?, `category_id` = ? WHERE product_id=?";
  // 預備語句
  $stmt = $dbh->prepare($sql);
  // 執行語句
  $data = [$product_title, $product_price, $product_image_url, $product_iframe_url, $category_id, $id];
  $stmt->execute($data);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: courses_manage.php');
}
?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <?php
            // 查詢課程資料並包含分類名稱
            $sql = "select * from `categories`"; //要執行的SQL語法
            // 預備語句
            $stmt = $dbh->prepare($sql);
            // 執行語句
            $stmt->execute();

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            /*冗長註解*/
            ?>
            <select name="category_id" class="form-control" id="category_id" aria-placeholder="Category">
              <?php foreach ($results as $row) { ?>
                <option value="<?php echo $row['category_id']; ?>"><?php echo htmlspecialchars($row['category_name']); ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <?php if (!empty($product_image_url)) : ?>
              <!-- 如果有圖片，顯示圖片 -->
              <img src="<?php echo $target_dir . htmlspecialchars($product_image_url); ?>"
                alt="<?php echo htmlspecialchars($product_title); ?>"
                title="<?php echo htmlspecialchars($product_title); ?>"
                width="100">
            <?php elseif (!empty($product_iframe_url)) : ?>
              <!-- 如果沒有圖片但有 iframe URL，顯示 iframe -->
              <iframe width="100" height="100"
                src="<?php echo htmlspecialchars($product_iframe_url); ?>"
                frameborder="0" allowfullscreen></iframe>
            <?php else : ?>
              <!-- 如果圖片和 iframe 都沒有，顯示提示文字 -->
              <p>沒有圖示，請上傳圖片或嵌入 iframe 網址</p>
            <?php endif; ?>
          </div>
          <div class="form-group">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
          </div>
          <div class="form-group">
            <input name="title" type="text" class="form-control" value="<?php echo $title; ?>" placeholder="Update Title">
          </div>
          <div class="form-group">
            <textarea name="tltie" class="form-control" cols="30" rows="10"><?php echo $product_title; ?></textarea>
          </div>
          <button class="btn-success" name="update">
            Update
          </button>
          <input type="hidden" name="product_id" value="<?php echo $id; ?>">
        </form>

      </div>
    </div>
  </div>
</div>