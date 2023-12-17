<?php
include 'process/payroll.php';
include 'process/earl_payroll_fill.php';
include 'process/session_check.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="js/earl_payroll_save.js"></script>
    <link rel="stylesheet" href="css/global.css">
    <link rel="icon" type="image/png" href="Images/Assets/favicon.ico">
</head>

<body>
    <div class="d-flex">
        <!-- sidebar -->
        <div class="vh-100 sticky-top " style="width: 320px; background-color:#111927">
            <nav class="navbar my-5 mx-4 px-3">
                <a class="navbar-brand text-white fw-bold" href="#">
                    <img src="Images/logo.png" width="40" height="40" class="d-inline-block align-middle" alt="">
                    Earl's Choice Enterprise
                </a>
            </nav>

            <ul class="nav flex-column mb-auto mx-4">
                <li class="">
                    <a href="Admin_page.php" class="nav-link text-white mb-2">
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
                    <a href="employee_registration_save.php" class="nav-link text-white mb-2 <?php echo $user_privilege == 1 ? '' : 'd-none' ?>">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path d="M16 0H4a2 2 0 0 0-2 2v1H1a1 1 0 0 0 0 2h1v2H1a1 1 0 0 0 0 2h1v2H1a1 1 0 0 0 0 2h1v2H1a1 1 0 0 0 0 2h1v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4.5a3 3 0 1 1 0 6 3 3 0 0 1 0-6ZM13.929 17H7.071a.5.5 0 0 1-.5-.5 3.935 3.935 0 1 1 7.858 0 .5.5 0 0 1-.5.5Z" />
                        </svg>

                        Employee Registration
                    </a>
                </li>
                <li>
                    <a href="employee_report.php" class="nav-link text-white mb-2 <?php echo $user_privilege == 1 ? '' : 'd-none' ?>">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                            <path d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2Zm-3 15H4.828a1 1 0 0 1 0-2h6.238a1 1 0 0 1 0 2Zm0-4H4.828a1 1 0 0 1 0-2h6.238a1 1 0 1 1 0 2Z" />
                            <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.98 2.98 0 0 0 .13 5H5Z" />
                        </svg>
                        Employee Report
                    </a>
                </li>
                <li>
                    <a href="Payroll_page.php" class="nav-link text-white mb-2 <?php echo ($user_privilege == 1 || $user_privilege == 2) ? '' : 'd-none' ?>" style="background-color: #343b47;border-radius: 5px;">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M11.074 4 8.442.408A.95.95 0 0 0 7.014.254L2.926 4h8.148ZM9 13v-1a4 4 0 0 1 4-4h6V6a1 1 0 0 0-1-1H1a1 1 0 0 0-1 1v13a1 1 0 0 0 1 1h17a1 1 0 0 0 1-1v-2h-6a4 4 0 0 1-4-4Z" />
                            <path d="M19 10h-6a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1Zm-4.5 3.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM12.62 4h2.78L12.539.41a1.086 1.086 0 1 0-1.7 1.352L12.62 4Z" />
                        </svg>
                        Payroll
                    </a>
                </li>
                <li>
                    <a href="payroll_report.php" class="nav-link text-white  mb-2 <?php echo ($user_privilege == 1 || $user_privilege == 2) ? '' : 'd-none' ?>">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path d="M16 0H2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 17h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2Z" />
                        </svg>
                        Payroll Report
                    </a>
                </li>
                <li>
                    <a href="Shop.php" class="nav-link text-white mb-2 <?php echo ($user_privilege == 1 || $user_privilege == 3) ? '' : 'd-none' ?>">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M17.876.517A1 1 0 0 0 17 0H3a1 1 0 0 0-.871.508C1.63 1.393 0 5.385 0 6.75a3.236 3.236 0 0 0 1 2.336V19a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-6h4v6a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V9.044a3.242 3.242 0 0 0 1-2.294c0-1.283-1.626-5.33-2.124-6.233ZM15.5 14.7a.8.8 0 0 1-.8.8h-2.4a.8.8 0 0 1-.8-.8v-2.4a.8.8 0 0 1 .8-.8h2.4a.8.8 0 0 1 .8.8v2.4ZM16.75 8a1.252 1.252 0 0 1-1.25-1.25 1 1 0 0 0-2 0 1.25 1.25 0 0 1-2.5 0 1 1 0 0 0-2 0 1.25 1.25 0 0 1-2.5 0 1 1 0 0 0-2 0A1.252 1.252 0 0 1 3.25 8 1.266 1.266 0 0 1 2 6.75C2.306 5.1 2.841 3.501 3.591 2H16.4A19.015 19.015 0 0 1 18 6.75 1.337 1.337 0 0 1 16.75 8Z" />
                        </svg>
                        POS
                    </a>
                </li>
                <li>
                    <a href="pos_sales_report.php" class="nav-link text-white mb-2 <?php echo ($user_privilege == 1 || $user_privilege == 3) ? '' : 'd-none' ?>">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                            <path d="M15.045.007 9.31 0a1.965 1.965 0 0 0-1.4.585L.58 7.979a2 2 0 0 0 0 2.805l6.573 6.631a1.956 1.956 0 0 0 1.4.585 1.965 1.965 0 0 0 1.4-.585l7.409-7.477A2 2 0 0 0 18 8.479v-5.5A2.972 2.972 0 0 0 15.045.007Zm-2.452 6.438a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                        </svg>
                        POS Sales Report
                    </a>
                </li>
                <li>
                    <a href="user_account_page.php" class="nav-link text-white mb-2 <?php echo ($user_privilege == 1) ? '' : 'd-none' ?>">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                        </svg>
                        User Account Report
                    </a>
                </li>
                <li>
                    <a href="logout_page.php" class="nav-link text-white  mb-2">
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
        <!-- main content -->
        <div class="flex-grow-1" style="background-color: #f9fafc;">
            <div class="container">
                <h1 class="d-flex justify-content-center m-2 fw-bold" style="font-size:30px;">Earl'S Choice Payroll</h1>
                <!-- form inputs -->
                <form class="row" method="post">
                    <div class="col">
                        <div class="d-flex justify-content-center align-items-center flex-column">
                            <h1 class="fs-5 mx-4">Employee Basic Info:</h1>
                            <div class="card mb-3 mx-4" style="width: 14rem;">
                                <img src=<?php echo isset($type) ? "$type" : "Images/Assets/placeholder.jpg"; ?> class="card-img" alt="..." height="225">
                            </div>
                        </div>

                        <div class="col d-flex justify-content-center">
                            <ul class="">
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Employee Number:
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3" style="height: 2rem;">
                                                <input type="text" class="form-control" aria-describedby="button-addon2" id='employee_no' name="employee_no" value="<?php echo $employee_no ?>">
                                                <button class="btn btn-outline-secondary clickable <?php echo isset($_GET['id']) ? "disabled" : ""?>" type="button" id="search" name='search'> <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 24 24" class="">
                                                        <path d="M 9 2 C 5.1458514 2 2 5.1458514 2 9 C 2 12.854149 5.1458514 16 9 16 C 10.747998 16 12.345009 15.348024 13.574219 14.28125 L 14 14.707031 L 14 16 L 20 22 L 22 20 L 16 14 L 14.707031 14 L 14.28125 13.574219 C 15.348024 12.345009 16 10.747998 16 9 C 16 5.1458514 12.854149 2 9 2 z M 9 4 C 11.773268 4 14 6.2267316 14 9 C 14 11.773268 11.773268 14 9 14 C 6.2267316 14 4 11.773268 4 9 C 4 6.2267316 6.2267316 4 9 4 z"></path>
                                                    </svg></button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Department:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="department" id='department' class="form-control mb-1" style="height:2rem;" value="<?php echo $department ?>" aria-label="Amount (to the nearest dollar)" disabled>
                                        </div>
                                    </div>
                                </li>
                                <h1 class="fs-5 fw-bold">Basic Income:</h1>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Rate / Hour:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="basic_rate_hour" id='basic_rate_hour' value="<?php echo $basic_rate_hour; ?>" class="form-control mb-1" style="height:2rem;" aria-label="Amount (to the nearest dollar)">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            No. of Hours / Cut Off:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="basic_num_hours_cutoff" id='basic_num_hours_cutoff' value="<?php echo $basic_num_hours_cutoff; ?>" class="form-control mb-1" style="height:2rem;" aria-label="Amount (to the nearest dollar)">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Income / Cut Off:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="basic_income_cutoff" id='basic_income_cutoff' value="<?php echo $basic_income_cutoff; ?>" class="form-control mb-1" style="height:2rem;" aria-label="Amount (to the nearest dollar)" disabled>
                                        </div>
                                    </div>
                                </li>
                                <h1 class="fs-5 fw-bold">Honorarium Income:</h1>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Rate / Hour:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="hono_rate_hour" id='hono_rate_hour' value="<?php echo $hono_rate_hour; ?>" class="form-control mb-1" style="height:2rem;" aria-label="Amount (to the nearest dollar)">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            No. of Hours/ Cut off
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="hono_num_hours_cutoff" id='hono_num_hours_cutoff' value="<?php echo $hono_num_hours_cutoff; ?>" class="form-control mb-1" style="height:2rem;" aria-label="Amount (to the nearest dollar)">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Income / Cut Off:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="hono_income_cutoff" id='hono_income_cutoff' value="<?php echo $hono_income_cutoff; ?>" class="form-control mb-1" style="height:2rem;" aria-label="Amount (to the nearest dollar)" disabled>
                                        </div>
                                    </div>
                                </li>
                                <h1 class="fs-5 fw-bold">Other Income:</h1>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Rate / Hour:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="other_rate_hour" id='other_rate_hour' value="<?php echo $other_rate_hour; ?>" class="form-control mb-1" style="height:2rem;" aria-label="Amount (to the nearest dollar)">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            No. of Hours/ Cut off
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="other_num_hours_cutoff" id='other_num_hours_cutoff' value="<?php echo $other_num_hours_cutoff; ?>" class="form-control mb-1" style="height:2rem;" aria-label="Amount (to the nearest dollar)">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Income / Cut Off:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="other_income_cutoff" id='other_income_cutoff' value="<?php echo $other_income_cutoff; ?>" class="form-control mb-1" style="height:2rem;" aria-label="Amount (to the nearest dollar)" disabled>
                                        </div>
                                    </div>
                                </li>
                                <h1 class="fs-5 fw-bold">Summary Income:</h1>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Gross Income:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="gross_income" id='gross_income' value="<?php echo $gross_income; ?>" class="form-control mb-1" style="height:2rem;" aria-label="Amount (to the nearest dollar)" disabled>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Net Income:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="net_income" id='net_income' value="<?php echo $net_income; ?>" class="form-control mb-1" style="height:2rem;" aria-label="Amount (to the nearest dollar)" disabled>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="col">
                        <div class="col d-flex mt-4">
                            <ul class="">
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Firstname:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="firstname" id='firstname' class="form-control mb-1 w-75" value="<?php echo $firstname ?>" style="height:2rem;" aria-label="Amount (to the nearest dollar)" disabled>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Middle Name:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="mname" id='mname' class="form-control mb-1 w-75" value="<?php echo $mname ?>" style="height:2rem;" aria-label="Amount (to the nearest dollar)" disabled>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Surname:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="surname" id='surname' class="form-control mb-1 w-75" value="<?php echo $surname ?>" style="height:2rem;" aria-label="Amount (to the nearest dollar)" disabled>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Civil Status:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="civil_status" id='civil_status' class="form-control mb-1 w-75" style="height:2rem;" value="<?php echo $civil_status ?>" aria-label="Amount (to the nearest dollar)" disabled>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Designation:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="designation" id='designation' class="form-control mb-1 w-75" style="height:2rem;" value="<?php echo $designation ?>" disabled aria-label="Amount (to the nearest dollar)">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Qualified Dependents
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="qualified_dependents" id='qualified_dependents' class="form-control mb-1 w-75" style="height:2rem;" value="<?php echo $qualified_dependents ?>" aria-label="Amount (to the nearest dollar)">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Paydate:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="paydate" id='paydate' class="form-control mb-1 w-75" style="height:2rem;" value="<?php echo $paydate ?>" aria-label="Amount (to the nearest dollar)" disabled>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Employee Status:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="emp_status" id='emp_status' class="form-control mb-1 w-75" style="height:2rem;" value="<?php echo $emp_status ?>" aria-label="Amount (to the nearest dollar)" disabled>
                                        </div>
                                    </div>
                                </li>
                                <h1 class="fs-5 fw-bold">Regular Deduction:</h1>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            SSS Contribution:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="sss_contri" id='sss_contri' class="form-control mb-1 w-75" style="height:2rem;" value="<?php echo $sss_contri ?>" aria-label="Amount (to the nearest dollar)" disabled>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            PhilHealth Contribution:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="philH_contri" id='philH_contri' class="form-control mb-1 w-75" style="height:2rem;" value="<?php echo $philH_contri ?>" aria-label="Amount (to the nearest dollar)" disabled>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Pagibig Contribution:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="pagibig_contri" id='pagibig_contri' class="form-control mb-1 w-75" style="height:2rem;" value="<?php echo $pagibig_contri ?>" aria-label="Amount (to the nearest dollar)" disabled>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Income Tax Contribution:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="tax_contri" id='tax_contri' class="form-control mb-1 w-75" style="height:2rem;" value="<?php echo $tax_contri ?>" aria-label="Amount (to the nearest dollar)" disabled>
                                        </div>
                                    </div>
                                </li>
                                <h1 class="fs-5 fw-bold">Other Deduction:</h1>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            SSS Loan:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="sss_loan" id='sss_loan' value="<?php echo $sss_loan; ?>" class="form-control mb-1 w-75" style="height:2rem;" aria-label="Amount (to the nearest dollar)">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Pagibig Loan
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="pagibig_loan" id='pagibig_loan' value="<?php echo $pagibig_loan; ?>" class="form-control mb-1 w-75" style="height:2rem;" aria-label="Amount (to the nearest dollar)">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Faculty Saving Deposit:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="fs_deposit" id='fs_deposit' value="<?php echo $fs_deposit; ?>" class="form-control mb-1 w-75" style="height:2rem;" aria-label="Amount (to the nearest dollar)">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Faculty Saving Loan:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="fs_loan" id='fs_loan' value="<?php echo $fs_loan; ?>" class="form-control mb-1 w-75" style="height:2rem;" aria-label="Amount (to the nearest dollar)">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Salary Loan:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="salary_loan" id='salary_loan' value="<?php echo $salary_loan; ?>" class="form-control mb-1 w-75" style="height:2rem;" aria-label="Amount (to the nearest dollar)">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Other Loans:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="other_loans" id='other_loans' value="<?php echo $other_loans; ?>" class="form-control mb-1 w-75" style="height:2rem;" aria-label="Amount (to the nearest dollar)">
                                        </div>
                                    </div>
                                </li>
                                <h1 class="fs-5 fw-bold">Deduction Summary:</h1>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Total Deductions:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="total_deduct" id='total_deduct' value="<?php echo $total_deduct ?>" class="form-control mb-1 w-75" style="height:2rem;" aria-label="Amount (to the nearest dollar)" disabled>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row row-cols-3 align-items-center gap-2 mt-3 g-0 pe-4">
                                        <div class="col-4">
                                            <button type="submit" name="calculate_gross_income" class="btn btn-primary w-100" style="white-space: nowrap; font-size:0.9rem;">Calculate Gross Income</button>
                                        </div>
                                        <div class="col-4">
                                            <button type="submit" name="calculate_net_income" class="btn btn-primary  w-100" style="white-space: nowrap; font-size:0.9rem;">Calculate Net Income</button>
                                        </div>
                                        <div class="col-3">
                                            <button type="submit" name="new" class="btn btn-warning w-100" style="white-space: nowrap; font-size:0.9rem;">New</button>
                                        </div>

                                        <div class="col-4">
                                            <button type="submit" name='<?php echo !isset($isNew)  ? "update" : "save"; ?>' id='<?php echo !isset($isNew) ? "update" : "save"; ?>' class="btn btn-success  w-100 " style="white-space: nowrap; font-size:0.9rem;"><?php echo !isset($isNew) ? "Update" : "Save"; ?></button>
                                        </div>
                                        <div class="col-4">
                                            <button type="submit" name="delete" id='delete' class="btn btn-danger  w-100" style="white-space: nowrap; font-size:0.9rem;">Delete</button>
                                        </div>
                                        <div class="col-3">
                                            <button type="submit" name="close" class="btn btn-dark w-100" style="white-space: nowrap; font-size:0.9rem; width:90%;">Close</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
<script>
    $(document).ready(function() {
        $(".clickable").click(function() {
            let id = document.getElementById("employee_no").value
            window.location = "Payroll_page.php?search=" + id
        })
    })
</script>

</html>