<?php
echo "";
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
            <a href="/" class="d-flex align-items-center mb-3 text-white text-decoration-none">
                <h1 class="mx-auto" style="padding: 3rem 0rem 7rem 0rem;">Sidebar</h1>
            </a>
            <ul class="nav flex-column mb-auto">
                <li>
                    <a href="index.php" class="nav-link text-white text-center mb-4">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="Shop.php" class="nav-link active text-center mb-4">
                        Shop
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white text-center mb-4">
                        About
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white text-center mb-4">
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
            <!-- Large button groups (default and split) -->
            <div class="p-3">
                <div class="btn-group">
                    <button class="btn btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Products
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="Shop.php">Dress</a></li>
                        <li><a class="dropdown-item" href="Drinks.php">Drinks</a></li>
                        <li><a class="dropdown-item" href="Foods.php">Foods</a></li>
                        <li><a class="dropdown-item" href="Kitchenwares.php">Kitchenwares</a></li>
                        <li><a class="dropdown-item" href="Perfume.php">Perfume</a></li>
                    </ul>
                </div>
            </div>
            <div class="row  mx-auto">
                <?php
                for ($i = 1; $i < 21; $i++) {
                    echo "
                                <div class='col mb-4'>
                                    <div class='card' style='width: 18rem;'>
                                        <img src='Images/Kitchenwares/$i.jpg' class='card-img-top' alt='...' height='200'>
                                        <div class='card-body'>
                                            <h5 class='card-title text-center'>Card title</h5>
                                            <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href='#' class='btn btn-primary'>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                ";
                }
                ?>
            </div>


            <!-- footer -->
            <div class="container">
                <footer class="d-flex  justify-content-between align-items-center py-3 my-4">
                    <p class="col-md-4 mb-0 text-body-secondary">&copy; 2023 Company, Inc</p>
                    <ul class="nav justify-content-end">
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
                    </ul>
                </footer>
            </div>
        </div>
    </main>

</body>

</html>