<?php
session_start();
include("db.php");

if (isset($_GET['product_id'])) {
    $id = $_GET['product_id'];

    // Fetch the product to get the current image URL
    $sql = "SELECT `product_image_url` FROM `products` WHERE `product_id`=?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        $image_url = $result['product_image_url'];
        $target_file = "img/shop/" . $image_url;

        // Delete the image from the server
        if (file_exists($target_file)) {
            unlink($target_file);
        }

        // Update the database to remove the image URL
        $sql = "UPDATE `products` SET `product_image_url` = NULL WHERE `product_id` = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$id]);

        $_SESSION['message'] = 'Image deleted successfully';
    } else {
        $_SESSION['errors'][] = 'Image not found.';
    }
}

header('Location: edit_product.php?product_id=' . htmlspecialchars($id));
exit();
?>
