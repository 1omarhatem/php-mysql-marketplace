<?php include 'check.php';

if (isset($_GET['remove_item']) && !empty($_GET['remove_item'])) {
    $item_id = $_GET['remove_item'];

    $query->executeQuery("DELETE FROM wishes WHERE product_id = $item_id AND user_id = {$_SESSION['id']}");
    header("Location: ./heart.php");
    exit;
}