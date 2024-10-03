<?php
include("db.php");
$id = '';
$category_image_url = '';
$category_name = '';
$target_dir = "img/shop/";

if (isset($_GET['category_id'])) {
  $id = $_GET['category_id'];

  //操作連線資源
  $data = [$id];
  $sql = "SELECT * FROM `categories` WHERE `category_id`=?"; //要執行的SQL語法
  // 預備語句
  $stmt = $dbh->prepare($sql);
  // 執行語句
  $stmt->execute($data);

  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  if (!empty($results) && isset($results[0]['category_name'])) {
    $category_image_url = $results[0]['category_image_url'];
    $category_name = $results[0]['category_name'];
  } else {
    $category_name = ''; // 設置默認值
    $category_image_url = ''; // 設置默認值
  }
}

if (isset($_POST['update'])) {
  // 檔案上傳
  $image_filename = $image_url; // 預設為原始圖像，如果沒有新圖像上傳就保留它
  if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["tmp_name"] !== '') {
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // 檢查是否真的是圖像
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }

    // 檢查檔案是否已經存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 1;
    }

    // 檢查檔案大小
    if ($_FILES["fileToUpload"]["size"] > 50000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }

    // 允許的檔案格式
    if (
      $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" && $imageFileType != "webp"
    ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }

    // 如果所有條件都滿足，則嘗試上傳檔案
    if ($uploadOk == 1) {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
        $image_filename = htmlspecialchars(basename($_FILES["fileToUpload"]["name"])); // 使用新上傳的檔案名稱
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
  }


  $category_image_url = $image_filename;
  $category_name = $_POST['category_name'];

  $sql = "UPDATE `categories` SET `category_image_url` = ?, `category_name` = ? WHERE category_id = ?";
  // 預備語句
  $stmt = $dbh->prepare($sql);
  // 執行語句
  $data = [$category_image_url, $category_name, $id];
  $stmt->execute($data);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: success.php');
}
?>

<?php include("header_shop.php"); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-8 mx-auto">
      <div class="card card-body">
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <?php
            $sql = "SELECT * FROM `categories`"; //要執行的SQL語法
            // 預備語句
            $stmt = $dbh->prepare($sql);
            // 執行語句
            $stmt->execute();

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <select name="category_id" class="form-control" id="category_id" aria-placeholder="Category">
              <?php foreach ($results as $row) { ?>
                <option value="<?php echo $row['category_id']; ?>"><?php echo htmlspecialchars($row['category_name']); ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <?php if (!empty($category_image_url)) : ?>
              <img src="<?php echo $target_dir . htmlspecialchars($category_image_url); ?>"
                alt="<?php echo htmlspecialchars($category_name); ?>"
                width="100">
            <?php else : ?>
              <p>沒有圖示，請上傳圖片或嵌入 iframe 網址</p>
            <?php endif; ?>
          </div>
          <div class="form-group">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
          </div>
          <div class="form-group">
            <input name="category_name" type="text" step="1" class="form-control" value="<?php echo htmlspecialchars($category_name); ?>" placeholder="Update category">
          </div>
          <button class="btn btn-primary" type="submit" style="background-color: rgba(55, 181, 166, 0.9); border: none;" name="update">
            更新
          </button>
          <input type="hidden" name="category_id" value="<?php echo $id; ?>">
        </form>
      </div>
    </div>
  </div>
</div>