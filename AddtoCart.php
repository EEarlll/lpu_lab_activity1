<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Get the selected item(s)
    $_SESSION['cart'][] = $_POST['items'];
    $_SESSION['price'][] = $_POST['price'];
    $_SESSION['category'][] = $_POST['category'];
}
