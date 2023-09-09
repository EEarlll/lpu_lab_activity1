<?php
require_once('Prices.php');
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
        <!-- sidebar -->
        <div class="p-3 text-bg-dark sticky-top vh-100" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 text-white text-decoration-none">
                <h1 class="mx-auto" style="padding: 3rem 0rem 7rem 0rem;">Earl POS</h1>
            </a>
            <ul class="nav flex-column mb-auto">
                <li class="">
                    <a href="#" class="nav-link text-center mb-4">
                        Home
                    </a>
                </li>
                <li>
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
                    <a href="Cart.php" class="nav-link text-white text-center mb-4">
                        Cart
                    </a>
                </li>
            </ul>

        </div>
        <!-- main -->
        <div class="flex-grow-1 w-100">
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
                <div class="container-fluid my-2">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search Product" aria-label="Search" size="30">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </nav>
            <!-- carousel -->
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://images.unsplash.com/photo-1567401893414-76b7b1e5a7a5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="d-block w-100" alt="..." height="800">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="fw-bold">Dress</h1>
                            <p>Discover the latest trends in fashion.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1551024709-8f23befc6f87?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2157&q=80" class="d-block w-100" alt="..." height="800">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="fw-bold">Drinks</h1>
                            <p>Quench your thirst with our wide selection of delicious beverages.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1606787366850-de6330128bfc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="d-block w-100" alt="..." height="800">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="fw-bold">Foods</h1>
                            <p>Explore our mouthwatering range of culinary delights.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1532431967313-f89e1b92f8f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="d-block w-100" alt="..." height="800">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="fw-bold">Kitchenwares</h1>
                            <p>Upgrade your kitchen with our durable and stylish kitchenware products.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1557827983-012eb6ea8dc1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2076&q=80" class="d-block w-100" alt="..." height="800">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="fw-bold">Perfume</h1>
                            p>Find your signature scent from our exquisite collection of perfumes.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- list and cards -->
            <div>
                <!-- Product tabs -->
                <h1 class="text-center my-5 pt-5">New Arrival</h1>
                <ul class="nav d-flex gap-5 justify-content-center align-items-center mb-4" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="Dress" data-bs-toggle="tab" data-bs-target="#Dress-pane" type="button" role="tab" aria-controls="Dress-pane" aria-selected="true">Dress</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Drinks-tab" data-bs-toggle="tab" data-bs-target="#Drinks-tab-pane" type="button" role="tab" aria-controls="Drinks-tab-pane" aria-selected="false">Drinks</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Foods-tab" data-bs-toggle="tab" data-bs-target="#Foods-tab-pane" type="button" role="tab" aria-controls="Foods-tab-pane" aria-selected="false">Foods</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Kitchenwares-tab" data-bs-toggle="tab" data-bs-target="#Kitchenwares-tab-pane" type="button" role="tab" aria-controls="Kitchenwares-tab-pane" aria-selected="false">Kitchenwares</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Perfume-tab" data-bs-toggle="tab" data-bs-target="#Perfume-tab-pane" type="button" role="tab" aria-controls="Perfume-tab-pane" aria-selected="false">Perfume</button>
                    </li>
                </ul>
                <!-- Product cards -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="Dress-pane" role="tabpanel" aria-labelledby="Dress" tabindex="0">
                        <div class="row container mx-auto">
                            <?php
                            for ($i = 1; $i < 9; $i++) {
                                echo "
                                <div class='col mb-4'>
                                    <div class='card' style='width: 18rem;'>
                                        <img src='Images/Dress/$i.jpg' class='card-img-top' alt='...' height='200'>
                                        <div class='card-body'>
                                            <h5 class='card-title text-center'>Dress $i</h5>
                                            <p class='card-text fs-5 text-center'>₱{$Dress_prices[$i]}</p>
                                            <a href='#' class='btn btn-primary d-flex justify-content-center align-items-center'>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                ";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Drinks-tab-pane" role="tabpanel" aria-labelledby="Drinks-tab" tabindex="0">
                        <div class="row container mx-auto">
                            <?php
                            for ($i = 1; $i < 9; $i++) {
                                echo "
                                <div class='col mb-4'>
                                    <div class='card' style='width: 18rem;'>
                                        <img src='Images/Drinks/$i.jpg' class='card-img-top' alt='...' height='200'>
                                        <div class='card-body'>
                                            <h5 class='card-title text-center'>Drink $i</h5>
                                            <p class='card-text fs-5 text-center'>₱{$Drinks_prices[$i]}</p>
                                            <a href='#' class='btn btn-primary d-flex justify-content-center align-items-center'>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                ";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Foods-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                        <div class="row container mx-auto">
                            <?php
                            for ($i = 1; $i < 9; $i++) {
                                echo "
                                <div class='col mb-4'>
                                    <div class='card' style='width: 18rem;'>
                                        <img src='Images/Foods/$i.jpg' class='card-img-top' alt='...' height='200'>
                                        <div class='card-body'>
                                            <h5 class='card-title text-center'>Foods $i</h5>
                                            <p class='card-text fs-5 text-center'>₱{$Foods_prices[$i]}</p>
                                            <a href='#' class='btn btn-primary d-flex justify-content-center align-items-center'>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                ";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Kitchenwares-tab-pane" role="tabpanel" aria-labelledby="Kitchenwares-tab" tabindex="0">
                        <div class="row container mx-auto">
                            <?php
                            for ($i = 1; $i < 9; $i++) {
                                echo "
                                <div class='col mb-4'>
                                    <div class='card' style='width: 18rem;'>
                                        <img src='Images/Kitchenwares/$i.jpg' class='card-img-top' alt='...' height='200'>
                                        <div class='card-body'>
                                            <h5 class='card-title text-center'>Kitchenware $i</h5>
                                            <p class='card-text fs-5 text-center'>₱{$Kitchenwares_prices[$i]}</p>
                                            <a href='#' class='btn btn-primary d-flex justify-content-center align-items-center'>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                ";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Perfume-tab-pane" role="tabpanel" aria-labelledby="Perfume-tab" tabindex="0">
                        <div class="row container mx-auto">
                            <?php
                            for ($i = 1; $i < 9; $i++) {
                                echo "
                                <div class='col mb-4'>
                                    <div class='card' style='width: 18rem;'>
                                        <img src='Images/Perfume/$i.jpg' class='card-img-top' alt='...' height='200'>
                                        <div class='card-body'>
                                            <h5 class='card-title text-center'>Perfume $i</h5>
                                            <p class='card-text fs-5 text-center'>₱{$Perfume_prices[$i]}</p>
                                            <a href='#' class='btn btn-primary d-flex justify-content-center align-items-center'>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                ";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h1 class="text-center my-5 pt-5">Recommended</h1>
                <div class="card-group mx-4 my-5">
                    <div class="card">
                        <img src="Images/Dress/16.jpg" class="card-img-top" alt="..." height="300">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a class="card-text" href="#"><small class="text-body-secondary">learn more</small></a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="Images/Drinks/18.jpg" class="card-img-top" alt="..." height="300">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            <a class="card-text" href="#"><small class="text-body-secondary">learn more</small></a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="Images/Foods/19.jpg" class="card-img-top" alt="..." height="300">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            <a class="card-text" href="#"><small class="text-body-secondary">learn more</small></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer -->
            <div class="container">
                <footer class="d-flex  justify-content-between align-items-center py-3 my-4">
                    <p class="col-md-4 mb-0 text-body-secondary">&copy; 2023 Company, Inc</p>
                    <ul class="nav justify-content-end">
                        <!-- <li class="nav-item"><a href="index" class="nav-link px-2 text-body-secondary">Home</a></li> -->
                    </ul>
                </footer>
            </div>
        </div>
    </main>

</body>

</html>
