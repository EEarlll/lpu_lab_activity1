<?php
session_start();
$cartItems = [];
$cartPrice = [];
$cartCategory = [];

// Check if cart session variable exists
if (isset($_SESSION['cart'])) {
    $cartItems = $_SESSION['cart'];
    $cartPrice = $_SESSION['price'];
    $cartCategory = $_SESSION['category'];
} else {
    $cartItems = array();
}

if (isset($_POST['remove'])) {
    unset($cartItems[$_POST['remove']]);
    unset($cartPrice[$_POST['remove']]);
    unset($cartCategory[$_POST['remove']]);
    $cartItems = array_values($cartItems);
    $cartPrice = array_values($cartPrice);
    $cartCategory = array_values($cartCategory);
    $_SESSION['cart'] = $cartItems;
    $_SESSION['price'] = $cartPrice;
    $_SESSION['category'] = $cartCategory;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Earlll</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>
    <main class="d-flex">
        <div class="p-3 text-bg-dark sticky-top vh-100" style="width: 280px;">
            <a href="#" class="d-flex align-items-center mb-3 text-white text-decoration-none">
                <h1 class="mx-auto" style="padding: 3rem 0rem 7rem 0rem;">Earl POS</h1>
            </a>
            <ul class="nav flex-column mb-auto">
                <li>
                    <a href="index.php" class="nav-link text-white text-center mb-4">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="Shop.php" class="nav-link text-white text-center mb-4">
                        Shop
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white text-center mb-4">
                        About
                    </a>
                </li>
                <li>
                    <a href="Cart.php" class="nav-link active text-center mb-4">
                        Cart
                    </a>
                </li>
            </ul>

        </div>
        <div class="flex-grow-1 w-100">
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid my-2">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search Product" aria-label="Search" size="30">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </nav>
            <!-- Order list -->
            <div class="mx-auto ">
                <h5 class="mx-3">Order Details</h5>
                <div class="row w-100" style="min-height: 500px;">
                    <div class="row row-cols-4">
                        <?php
                        for ($i = 0; $i < count($cartItems); $i++) {
                            echo "
                            <div class='col'>
                            <div class='card mb-3 mx-3' style='max-width: 540px;'>
                                <div class='row g-0'>
                                    <div class='col-md-4 my-auto'>
                                        <img src='Images/$cartCategory[$i]/$cartItems[$i].jpg' class='card-img-top rounded-start' alt='...' height='100'>
                                    </div>
                                    <div class='col-md-8'>
                                        <div class='card-body'>
                                            <h5 class='card-title'>$cartCategory[$i] . $cartItems[$i]</h5>
                                            <p class='card-text'>Price: $cartPrice[$i]</p>
                                            <form method='post'>
                                                <input type='hidden' name='remove' value='$i'>
                                                <button type='submit' class='btn btn-danger' id='btn_remove' onclick='reloadPage()'>Remove Item</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
                        }
                        ?>
                    </div>
                </div>
                <!-- input list -->
                <div class="row w-100">
                    <div class="col d-flex">
                        <ul class="list-group">
                            <li class="list-group-item border-0">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        Name of an Item:
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        Quantity:
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        Price:
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        Discount Amount:
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        Discounted Amount:
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item border-0">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        Total Quantity:
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        Total Discount Given:
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        Total Discounted Amount:
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        Cash Given:
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        Change:
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- calculator -->
                    <div class="col">
                        <!-- radio -->
                        <div>
                            <ul class="list-group list-group-horizontal">
                                <li class="list-group-item">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Senior Citizen
                                    </label>
                                </li>
                                <li class="list-group-item"> <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        With Disc. Card
                                    </label>
                                </li>
                                <li class="list-group-item"> <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Employee Disc.
                                    </label>
                                </li>
                                <li class="list-group-item"> <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No Disc.
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <!-- buttons -->
                        <div class="my-3 w-75">
                            <div class="row row-cols-4 mb-3">
                                <div class="col">
                                    <button type="button" class="btn btn-primary w-100">Calculate Change</button>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-danger w-100">New</button>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-warning w-100">Save</button>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-dark w-100">Update</button>
                                </div>
                            </div>
                            <div class="row row-cols-5">
                                <div class="col-3">
                                    <button type="button" class="btn btn-primary h-100 w-100">Enter</button>
                                </div>
                                <div class="col-9">
                                    <div class="row row-cols-3">
                                        <div class="col">
                                            <button type="button" class="btn btn-dark w-100 mb-1">/</button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn btn-dark w-100 mb-1">*</button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn btn-dark w-100 mb-1">-</button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn btn-dark w-100 mb-1">+</button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn btn-dark w-100 mb-1">9</button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn btn-dark w-100 mb-1">8</button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn btn-dark w-100 mb-1">7</button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn btn-dark w-100 mb-1">6</button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn btn-dark w-100 mb-1">5</button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn btn-dark w-100 mb-1">4</button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn btn-dark w-100 mb-1">3</button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn btn-dark w-100 mb-1">2</button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn btn-dark w-100 mb-1">1</button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn btn-dark w-100 mb-1">0</button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn btn-dark w-100 mb-1">.</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- footer -->
            <div class="container">
                <footer class="d-flex  justify-content-between align-items-center py-3 my-4">
                    <p class="col-md-4 mb-0 text-body-secondary">&copy; 2023 Company, Inc</p>
                    <ul class="nav justify-content-end">
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
                    </ul>
                </footer>
            </div>
        </div>

    </main>
    <script>
    </script>
</body>

</html>