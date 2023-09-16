<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Earlll</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body class="bg-black">
    <main class="container border bg-white">
        <h1 class="text-center my-1">Earl's Choice store</h1>
        <div class="">
            <!-- dropdown -->
            <div class="px-3">
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
            <!-- cards -->
            <div class="row mx-auto row-cols-5">
                <?php
                require_once('Prices.php');
                for ($i = 1; $i < 21; $i++) {
                    echo "
                    <div class='col'>
                        <div class='card mb-3 mx-3 ' style='max-width: 300px;'>
                            <div class='row g-0'>
                                <img src='Images/Dress/$i.jpg' class='card-img-top rounded-start' alt='...' height='100'/>
                                <p class='card-title text-center'>Dress $i - <span style='font-weight:bold;'>₱{$Dress_prices[$i]}</span></p>
                                <form method='post'>
                                    <input type='hidden' name='items' value='$i'>
                                    <input type='hidden' name='price' value='{$Dress_prices[$i]}'>
                                </form>
                            </div>
                        </div>
                    </div>
                    ";
                }
                ?>
            </div>
            <!-- inputs -->
            <div class="row">
                <div class="col-6 d-flex">
                    <ul class="list-group">
                        <li class="list-group-item border-0">
                            <div class="row align-items-center">
                                <div class="col-md-6" style="white-space:nowrap;">
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
                                <div class="col-md-6" style="white-space:nowrap;">
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
                                <div class="col-md-6" style="white-space:nowrap;">
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
                <div class="col-6">
                    <!-- radio -->
                    <div>
                        <ul class="list-group list-group-horizontal gap-5">
                            <li class="" style="list-style-type: none;">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Senior Citizen
                                </label>
                            </li>
                            <li class="" style="list-style-type: none;"> <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    With Disc. Card
                                </label>
                            </li>
                            <li class="" style="list-style-type: none;"> <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Employee Disc.
                                </label>
                            </li>
                            <li class="" style="list-style-type: none;"> <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    No Disc.
                                </label>
                            </li>
                        </ul>
                    </div>
                    <!-- buttons -->
                    <div class="my-3 w-100">
                        <div class="row row-cols-4 mb-3">
                            <div class="col">
                                <button type="button" class="btn btn-primary " style="white-space:nowrap">Calculate Change</button>
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
    </main>

</body>

</html>