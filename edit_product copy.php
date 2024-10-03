<?php
include("db.php");
$id = '';
$title = '';
$target_dir = "img/shop/";

if (isset($_GET['product_id'])) {
    $id = $_GET['product_id'];

    // Fetch product details
    $data = [$id];
    $sql = "SELECT * FROM `products` WHERE `product_id`=?";
    $stmt = $dbh->prepare($sql);
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
    // Handle image upload
    $image_filename = $product_image_url; // Preserve existing image URL

    if (!empty($_FILES["fileToUpload"]["name"])) {
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Validate the uploaded file
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check === false) {
            $uploadOk = 0;
            $_SESSION['errors'][] = "File is not an image.";
        }

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 5000000) {
            $uploadOk = 0;
            $_SESSION['errors'][] = "Sorry, your file is too large.";
        }

        // Allow certain file formats
        if (!in_array($imageFileType, ['jpg', 'png', 'jpeg', 'gif', 'webp'])) {
            $uploadOk = 0;
            $_SESSION['errors'][] = "Sorry, only JPG, JPEG, PNG, GIF & WEBP files are allowed.";
        }

        // Check for upload errors
        if ($_FILES['fileToUpload']['error'] !== UPLOAD_ERR_OK) {
            $uploadOk = 0;
            $_SESSION['errors'][] = "File upload error: " . $_FILES['fileToUpload']['error'];
        }

        // Attempt to upload the file
        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                $image_filename = htmlspecialchars(basename($_FILES["fileToUpload"]["name"])); // Get uploaded file name
            } else {
                $_SESSION['errors'][] = "Sorry, there was an error uploading your file.";
            }
        }
    }

    // Prepare data for updating
    $id = $_POST['product_id'];
    $product_title = $_POST['product_title'];
    $product_price = $_POST['product_price'];
    $product_iframe_url = $_POST['product_iframe_url'];
    $category_id = $_POST['category_id'];

    // Update product details in the database
    $sql = "UPDATE `products` SET `product_title` = ?, `product_price` = ?, `product_image_url` = ?, `product_iframe_url` = ?, `category_id` = ? WHERE product_id=?";
    $stmt = $dbh->prepare($sql);
    $data = [$product_title, $product_price, $image_filename, $product_iframe_url, $category_id, $id];
    if ($stmt->execute($data)) {
        $_SESSION['message'] = 'Task Updated Successfully';
        $_SESSION['message_type'] = 'warning';
        header('Location: success.php');
        exit();
    } else {
        $_SESSION['errors'][] = "Failed to update product in the database.";
    }
}
?>

<?php include("header_shop.php"); ?>
<div class="container p-4">
    <div class="row justify-content-center">
        <div class="col-md-8 mx-auto">
            <div class="card card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <select name="category_id" class="form-control" id="category_id" aria-placeholder="Category">
                            <?php
                            $sql = "SELECT * FROM `categories`";
                            $stmt = $dbh->prepare($sql);
                            $stmt->execute();
                            $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($categories as $row) {
                                $selected = $row['category_id'] == $category_id ? 'selected' : ''; // Pre-select the current category
                                echo "<option value=\"{$row['category_id']}\" $selected>" . htmlspecialchars($row['category_name']) . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <?php if (!empty($product_image_url)) : ?>
                            <img id="imagePreview" src="<?php echo $target_dir . htmlspecialchars($product_image_url); ?>" alt="<?php echo htmlspecialchars($product_image_url); ?>" title="<?php echo htmlspecialchars($product_image_url); ?>" width="100">
                            <a href="delete_image.php?product_id=<?php echo htmlspecialchars($id); ?>" class="text-danger" onclick="return confirm('Are you sure you want to delete this image?');">
                                <span style="font-size: 10px;">&#10006;</span> <!-- 'X' icon -->
                            </a>
                        <?php elseif (!empty($product_iframe_url)) : ?>
                            <iframe width="100" height="100" src="<?php echo htmlspecialchars($product_iframe_url); ?>" frameborder="0" allowfullscreen></iframe>
                        <?php else : ?>
                            <p>沒有圖示，請上傳圖片或嵌入 iframe 網址</p>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        Select image to upload:
                        <input type="file" name="fileToUpload" id="fileToUpload" onchange="previewImage(event)">
                    </div>
                    <div class="form-group">
                        <input name="product_iframe_url" type="text" class="form-control" value="<?php echo htmlspecialchars($product_iframe_url); ?>" placeholder="Update iframe_url">
                    </div>
                    <div class="form-group">
                        <input name="product_title" type="text" class="form-control" value="<?php echo htmlspecialchars($product_title); ?>" placeholder="Update Title">
                    </div>
                    <div class="form-group">
                        <input name="product_price" type="number" step="1" class="form-control" value="<?php echo htmlspecialchars($product_price); ?>" placeholder="Update Price">
                    </div>
                    <button class="btn btn-primary" type="submit" style="background-color: rgba(55, 181, 166, 0.9); border: none;" name="update">
                        更新
                    </button>
                    <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($id); ?>">
                </form>
                <?php
                // Display error messages if any
                if (!empty($_SESSION['errors'])) {
                    foreach ($_SESSION['errors'] as $error) {
                        echo "<div class=\"alert alert-danger\">$error</div>";
                    }
                    unset($_SESSION['errors']); // Clear errors after displaying
                }
                ?>
            </div>
        </div>
    </div>
</div>
