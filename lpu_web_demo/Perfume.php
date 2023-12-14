<?php
include 'process/earl_pos_fill.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/global.css">
</head>

<body>
    <div class="d-flex">
        <div class="vh-100 sticky-top " style="width: 320px; background-color:#111927">
            <nav class="navbar my-5 mx-4">
                <a class="navbar-brand text-white fw-bold" href="#">
                    <img src="images/logo.png" width="40" height="40" class="d-inline-block align-middle" alt="">
                    Earl's Choice Enterprise
                </a>
            </nav>

            <ul class="nav flex-column mb-auto mx-4">
                <li class="">
                    <a href="Admin_page.php" class="nav-link text-white mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0,0,256,256">
                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                <g transform="scale(5.12,5.12)">
                                    <path d="M25,1.05078c-0.2175,0 -0.43414,0.06898 -0.61914,0.20898l-23,17.95117c-0.43,0.34 -0.50992,0.9682 -0.16992,1.4082c0.34,0.43 0.9682,0.50992 1.4082,0.16992l1.38086,-1.07812v26.28906c0,0.55 0.45,1 1,1h14v-18h12v18h14c0.55,0 1,-0.45 1,-1v-26.28906l1.38086,1.07812c0.19,0.14 0.39914,0.21094 0.61914,0.21094c0.3,0 0.58906,-0.13086 0.78906,-0.38086c0.34,-0.44 0.26008,-1.0682 -0.16992,-1.4082l-23,-17.95117c-0.185,-0.14 -0.40164,-0.20898 -0.61914,-0.20898zM35,5v1.05078l6,4.67969v-5.73047z"></path>
                                </g>
                            </g>
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <a href="employee_registration_save.php" class="nav-link text-white mb-4">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path d="M16 0H4a2 2 0 0 0-2 2v1H1a1 1 0 0 0 0 2h1v2H1a1 1 0 0 0 0 2h1v2H1a1 1 0 0 0 0 2h1v2H1a1 1 0 0 0 0 2h1v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4.5a3 3 0 1 1 0 6 3 3 0 0 1 0-6ZM13.929 17H7.071a.5.5 0 0 1-.5-.5 3.935 3.935 0 1 1 7.858 0 .5.5 0 0 1-.5.5Z" />
                        </svg>

                        Employee Registration
                    </a>
                </li>
                <li>
                    <a href="employee_report.php" class="nav-link text-white mb-4">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                            <path d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2Zm-3 15H4.828a1 1 0 0 1 0-2h6.238a1 1 0 0 1 0 2Zm0-4H4.828a1 1 0 0 1 0-2h6.238a1 1 0 1 1 0 2Z" />
                            <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.98 2.98 0 0 0 .13 5H5Z" />
                        </svg>
                        Employee Report
                    </a>
                </li>
                <li>
                    <a href="Payroll_page.php" class="nav-link text-white mb-4">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M11.074 4 8.442.408A.95.95 0 0 0 7.014.254L2.926 4h8.148ZM9 13v-1a4 4 0 0 1 4-4h6V6a1 1 0 0 0-1-1H1a1 1 0 0 0-1 1v13a1 1 0 0 0 1 1h17a1 1 0 0 0 1-1v-2h-6a4 4 0 0 1-4-4Z" />
                            <path d="M19 10h-6a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1Zm-4.5 3.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM12.62 4h2.78L12.539.41a1.086 1.086 0 1 0-1.7 1.352L12.62 4Z" />
                        </svg>
                        Payroll
                    </a>
                </li>
                <li>
                    <a href="payroll_report.php" class="nav-link text-white  mb-4">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path d="M16 0H2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 17h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2Z" />
                        </svg>
                        Payroll Report
                    </a>
                </li>
                <li>
                    <a href="Shop.php" class="nav-link text-white mb-4" style="background-color: #343b47;border-radius: 5px;">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M17.876.517A1 1 0 0 0 17 0H3a1 1 0 0 0-.871.508C1.63 1.393 0 5.385 0 6.75a3.236 3.236 0 0 0 1 2.336V19a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-6h4v6a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V9.044a3.242 3.242 0 0 0 1-2.294c0-1.283-1.626-5.33-2.124-6.233ZM15.5 14.7a.8.8 0 0 1-.8.8h-2.4a.8.8 0 0 1-.8-.8v-2.4a.8.8 0 0 1 .8-.8h2.4a.8.8 0 0 1 .8.8v2.4ZM16.75 8a1.252 1.252 0 0 1-1.25-1.25 1 1 0 0 0-2 0 1.25 1.25 0 0 1-2.5 0 1 1 0 0 0-2 0 1.25 1.25 0 0 1-2.5 0 1 1 0 0 0-2 0A1.252 1.252 0 0 1 3.25 8 1.266 1.266 0 0 1 2 6.75C2.306 5.1 2.841 3.501 3.591 2H16.4A19.015 19.015 0 0 1 18 6.75 1.337 1.337 0 0 1 16.75 8Z" />
                        </svg>
                        POS
                    </a>
                </li>
                <li>
                    <a href="pos_sales_report.php" class="nav-link text-white mb-4">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                            <path d="M15.045.007 9.31 0a1.965 1.965 0 0 0-1.4.585L.58 7.979a2 2 0 0 0 0 2.805l6.573 6.631a1.956 1.956 0 0 0 1.4.585 1.965 1.965 0 0 0 1.4-.585l7.409-7.477A2 2 0 0 0 18 8.479v-5.5A2.972 2.972 0 0 0 15.045.007Zm-2.452 6.438a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                        </svg>
                        POS Sales Report
                    </a>
                </li>
                <li>
                    <a href="user_account_page.php" class="nav-link text-white mb-4">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                        </svg>
                        User Account Report
                    </a>
                </li>
                <li>
                    <a href="user_account.php" class="nav-link text-white mb-4">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" width="25" height='25' aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm-1.391 7.361.707-3.535a3 3 0 0 1 .82-1.533L7.929 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h4.259a2.975 2.975 0 0 1-.15-1.639ZM8.05 17.95a1 1 0 0 1-.981-1.2l.708-3.536a1 1 0 0 1 .274-.511l6.363-6.364a3.007 3.007 0 0 1 4.243 0 3.007 3.007 0 0 1 0 4.243l-6.365 6.363a1 1 0 0 1-.511.274l-3.536.708a1.07 1.07 0 0 1-.195.023Z" />
                        </svg>
                        User Account
                    </a>
                </li>
                <li>
                    <a href="login_page.php" class="nav-link text-white  mb-4">
                        <svg fill="#ffffff" width="25" height="25" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 471.2 471.2" xml:space="preserve" stroke="#ffffff">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <g>
                                        <path d="M227.619,444.2h-122.9c-33.4,0-60.5-27.2-60.5-60.5V87.5c0-33.4,27.2-60.5,60.5-60.5h124.9c7.5,0,13.5-6,13.5-13.5 s-6-13.5-13.5-13.5h-124.9c-48.3,0-87.5,39.3-87.5,87.5v296.2c0,48.3,39.3,87.5,87.5,87.5h122.9c7.5,0,13.5-6,13.5-13.5 S235.019,444.2,227.619,444.2z"></path>
                                        <path d="M450.019,226.1l-85.8-85.8c-5.3-5.3-13.8-5.3-19.1,0c-5.3,5.3-5.3,13.8,0,19.1l62.8,62.8h-273.9c-7.5,0-13.5,6-13.5,13.5 s6,13.5,13.5,13.5h273.9l-62.8,62.8c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4l85.8-85.8 C455.319,239.9,455.319,231.3,450.019,226.1z"></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
        <div class="flex-grow-1 w-100">
            <main class="container" style="background-color: #f9fafc;">

                <div class="">
                    <!-- dropdown -->
                    <div class="px-3">
                        <div class="btn-group d-flex justify-content-center align-items-center">
                            <div>
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
                            <div class="mx-auto my-2">
                                <h1 class="text-center">Earl's Choice store</h1>
                            </div>
                        </div>
                    </div>
                    <!-- cards -->
                    <div class="row mx-auto row-cols-5">
                        <?php
                        require_once('Prices.php');
                        for ($i = 1; $i < 21; $i++) {
                            $label = "Perfume $i";
                            $price = "$Perfume_prices[$i]";
                            echo "
                            <div class='col' onclick='handleItems(\"$label\", \"$price\")' role='button'>
                                <div class='card mb-3 mx-3 ' style='max-width: 300px;'>
                                    <div class='row g-0'>
                                        <img src='Images/Perfume/$i.jpg' class='card-img-top rounded-start' alt='...' height='100' style='width:100%;height:5.2vw;object-fit:contain'/>
                                        <div class='form-check d-flex justify-content-center align-items-center'>
                                            <label class='form-check-label px-3' for='checkbox$i'>
                                                $label - <span style='font-weight:bold;'>₱$price</span>
                                            </label>
                                        </div>
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
                                            <input type="text" class="form-control" name='item_name' value='<?php echo $item_name ?>' aria-label="Amount (to the nearest dollar)" disabled id="ItemName">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Quantity:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" class="form-control" name='quantity' value='<?php echo $quantity ?>' aria-label="Amount (to the nearest dollar)" id="Quantity" min="1">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Price:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" class="form-control" name='Itemprice' value='<?php echo $Itemprice ?>' aria-label="Amount (to the nearest dollar)" disabled id="ItemPrice">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6" style="white-space:nowrap;">
                                            Discount Amount:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" class="form-control" name='discount_amount' value='<?php echo $discount_amount ?>' aria-label="Amount (to the nearest dollar)" disabled id="Discount">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Discounted Amount:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name='discounted_amount' value='<?php echo $discounted_amount ?>' aria-label="Amount (to the nearest dollar)" disabled id="Discounted">
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
                                            <input type="text" class="form-control" name='total_quantity' value='<?php echo $total_quantity ?>' aria-label="Amount (to the nearest dollar)" disabled id="totalQuantity">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6" style="white-space:nowrap;">
                                            Total Discount Given:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name='total_discount_given' value='<?php echo $total_discount_given ?>' aria-label="Amount (to the nearest dollar)" disabled id="totalDiscount">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Total Discounted Amount:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name='total_discounted_amount' value='<?php echo $total_discounted_amount ?>' aria-label="Amount (to the nearest dollar)" disabled id="totalDiscounted">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Cash Given:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name='cash_given' value='<?php echo $cash_given ?>' aria-label="Amount (to the nearest dollar)" id="Cash">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Change:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name='customer_change' value='<?php echo $customer_change ?>' aria-label="Amount (to the nearest dollar)" disabled id="Change">
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
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="senior" value='Senior Citizen' onclick="handleDiscounts(0.30)">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Senior Citizen
                                        </label>
                                    </li>
                                    <li class="" style="list-style-type: none;"> <input class="form-check-input" type="radio" name="flexRadioDefault" value='Discount Card' id="discountCard" onclick="handleDiscounts(0.20)">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            With Disc. Card
                                        </label>
                                    </li>
                                    <li class="" style="list-style-type: none;"> <input class="form-check-input" type="radio" name="flexRadioDefault" value='Employee Discount' id="employee" onclick="handleDiscounts(0.15)">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Employee Disc.
                                        </label>
                                    </li>
                                    <li class="" style="list-style-type: none;"> <input class="form-check-input" type="radio" name="flexRadioDefault" value='No discount' id="noDiscount" onclick="handleDiscounts(0)">
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
                                        <button type="button" class="btn btn-primary " style="white-space:nowrap" onclick="handleChange()">Calculate Change</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-danger w-100" onclick="handleNew()">New</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-warning w-100" id='save'>Save</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-dark w-100">Update</button>
                                    </div>
                                </div>
                                <div class="row row-cols-5">
                                    <div class="col-3">
                                        <button type="button" class="btn btn-primary h-100 w-100" onclick="handleCalculator()">Enter</button>
                                    </div>
                                    <div class="col-9">
                                        <div class="row row-cols-3">
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '/'">/</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '*'">*</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '-'">-</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '+'">+</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '9'">9</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '8'">8</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '7'">7</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '6'">6</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '5'">5</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '4'">4</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '3'">3</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '2'">2</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '1'">1</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '0'">0</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '.'">.</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script>
        totalQuantity = 0
        totalDiscount = 0
        totalDiscounted = 0
    </script>
    <script src="js/calculator.js" defer></script>
    <script src="js/change.js" defer></script>
    <script src="js/new.js" defer></script>
    <script src="js/discounts.js" defer></script>
    <script src="js/Items.js" defer></script>
    <script src="js/earl_pos_save.js"></script>

</body>

</html>