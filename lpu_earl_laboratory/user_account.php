<?php
include 'process/earl_useraccount_fill.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title>
    <link rel="stylesheet" href="css/user_account_page.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="js/earl_useraccount_save.js"></script>
</head>

<body>
    <div class="d-flex">
        <div class="vh-100 sticky-top bg-black" style="width: 280px;">
            <h1 class="text-white fs-5 text-center my-5">Earl's Choice Enterprise</h1>
            <ul class="nav flex-column mb-auto">
                <li class="">
                    <a href="Admin_page.php" class="nav-link mb-4 text-white">
                        Home
                    </a>
                </li>
                <li>
                    <a href="employee_registration_save.php" class="nav-link text-white mb-4">
                        Employee Registration
                    </a>
                </li>
                <li>
                    <a href="employee_report.php" class="nav-link text-white mb-4">
                        Employee Report
                    </a>
                </li>
                <li>
                    <a href="Payroll_page.php" class="nav-link text-white mb-4">
                        Payroll
                    </a>
                </li>
                <li>
                    <a href="payroll_report.php" class="nav-link text-white  mb-4">
                        Payroll Report
                    </a>
                </li>
                <li>
                    <a href="Shop.php" class="nav-link text-white mb-4">
                        POS
                    </a>
                </li>
                <li>
                    <a href="pos_sales_report.php" class="nav-link text-white mb-4">
                        POS Sales Report
                    </a>
                </li>
                <li>
                    <a href="user_account_page.php" class="nav-link active mb-4">
                        User Account
                    </a>
                </li>
                <li>
                    <a href="login_page.php" class="nav-link text-white  mb-4">
                        Logout
                    </a>
                </li>
            </ul>
        </div>
        <div class="flex-grow-1 ">
            <div class="container d-flex my-5">
                <!--====== CONTACT ONE PART START ======-->
                <section class="contact-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                                <div class="card" style="width: 100%;">
                                    <img src=<?php echo isset($type) ? "$type" : "Images/Assets/placeholder.jpg"; ?> class="card-img-top" alt="..." height="370">
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-8">
                                <div class="section-title mt-45">
                                    <h3 class="title">User account Information</h3>
                                </div>
                                <div class="contact-form form-style-four mt-15">
                                    <form action="#" method="post">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-input mt-15">
                                                    <label>First Name</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-user"></i>
                                                        <input type="text" name = 'fname' id ='fname' value=<?php echo $fname; ?> disabled>
                                                    </div>
                                                </div>

                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-input mt-15">
                                                    <label>Middle Name</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-envelope"></i>
                                                        <input type="text" name='mname' id='mname' value=<?php echo $mname; ?> disabled>
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-input mt-15">
                                                    <label>Last name</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-phone"></i>
                                                        <input type="text" name = 'lname' id='lname' value=<?php echo $lname; ?> disabled>
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-input mt-15">
                                                    <label>Suffix</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-bubble"></i>
                                                        <input type="text" name= 'suffix' id ='suffix' value=<?php echo $suffix; ?> disabled>
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-input mt-15">
                                                    <label>Department</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-user"></i>
                                                        <input type="text" name='department' id='department' value=<?php echo $department; ?> disabled>
                                                    </div>
                                                </div>

                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-input mt-15">
                                                    <label>Username</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-envelope"></i>
                                                        <input type="text" class='form-control' name= 'username' id='username' value=<?php echo $username; ?> >
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-input mt-15">
                                                    <label>Password</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-phone"></i>
                                                        <input type="password" class='form-control' name='password' id='password' value=<?php echo $password; ?> >
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-input mt-15">
                                                    <label>Confirm Password</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-bubble"></i>
                                                        <input type="password" class='form-control' name='confirm_password' id='confirm_password' value=<?php echo $confirm_password; ?>>
                                                        <span id='message'></span>
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-input mt-15">
                                                    <label>User type</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-user"></i>
                                                        <input type="text" name='privilege' id='privilege' value=<?php echo $privilege; ?> disabled>
                                                    </div>
                                                </div>

                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-input mt-15">
                                                    <label>User status</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-envelope"></i>
                                                        <input type="text" name='employee_status' id='employee_status' value=<?php echo $employee_status; ?> disabled>
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-input mt-15">
                                                    <label>Employee Number</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-phone"></i>
                                                        <input type="text" class="form-control" name='employee_no' id='employee_no' value=<?php echo $employee_no; ?> disabled>
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-input mt-15">
                                                    <label>Designation</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-bubble"></i>
                                                        <input type="text" name='designation' value=<?php echo $designation; ?> disabled>
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="well mt-5 d-flex justify-content-end gap-3">
                                            <button type="button" class="btn btn-primary" id='update' name='update'>Update</button>
                                            <button type="button" class="btn btn-warning" id='delete' name='delete'>Delete</button>
                                            <button type="button" class="btn btn-light" id='cancel' name='cancel'>Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>

</html>