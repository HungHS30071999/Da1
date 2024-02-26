<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    // Validate input
    $idsp = isset($_POST['id']) ? intval($_POST['id']) : 0;
    $new_quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 0;

    if ($idsp <= 0 || $new_quantity < 0) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid input values']);
        exit;
    }

    // Check if the cart exists
    if (!empty($_SESSION['cart'])) {
        $index = array_search($idsp, array_column($_SESSION['cart'], 'id'));

        if ($index !== false) {
            // Update quantity
            $_SESSION['cart'][$index]['quantity'] = $new_quantity;
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Product not found in the cart']);
        }
    }
}
