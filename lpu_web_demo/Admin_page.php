<?php
include 'process/db_connection.php';
include 'process/session_check.php';

$conn = OpenCon();
$sql = "SELECT * FROM `salestbl` ORDER BY id DESC LIMIT 5;";
$result = $conn->query($sql);

$sql2 = "SELECT id FROM `personal_infotbl`;";
$result2 = mysqli_fetch_all($conn->query($sql2));

$sql3 = "SELECT COUNT(privilege) AS privilege_count FROM user_accounttbl GROUP BY privilege WITH ROLLUP;";
$result3 = mysqli_fetch_all($conn->query($sql3));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/global.css">
    <link rel="icon" type="image/png" href="Images/Assets/favicon.ico">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <link rel="stylesheet" href="css/calendar.css">
    <script src="js/calendar.js" defer></script>
</head>

<body>
    <div class="d-flex">
        <!-- sidebar -->
        <div class="vh-100 sticky-top " style="width: 320px; background-color:#111927">
            <nav class="navbar my-5 mx-4 px-3">
                <a class="navbar-brand text-white fw-bold" href="#">
                    <img src="images/logo.png" width="40" height="40" class="d-inline-block align-middle" alt="">
                    Earl's Choice Enterprise
                </a>
            </nav>

            <ul class="nav flex-column mb-auto mx-4">
                <li class="">
                    <a href="Admin_page.php" class="nav-link text-white mb-4" style="background-color: #343b47;border-radius: 5px;">
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
                    <a href="employee_registration_save.php" class="nav-link text-white mb-4 <?php echo $user_privilege == 1 ? '' : 'd-none' ?>">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path d="M16 0H4a2 2 0 0 0-2 2v1H1a1 1 0 0 0 0 2h1v2H1a1 1 0 0 0 0 2h1v2H1a1 1 0 0 0 0 2h1v2H1a1 1 0 0 0 0 2h1v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4.5a3 3 0 1 1 0 6 3 3 0 0 1 0-6ZM13.929 17H7.071a.5.5 0 0 1-.5-.5 3.935 3.935 0 1 1 7.858 0 .5.5 0 0 1-.5.5Z" />
                        </svg>

                        Employee Registration
                    </a>
                </li>
                <li>
                    <a href="employee_report.php" class="nav-link text-white mb-4 <?php echo $user_privilege == 1 ? '' : 'd-none' ?>">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                            <path d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2Zm-3 15H4.828a1 1 0 0 1 0-2h6.238a1 1 0 0 1 0 2Zm0-4H4.828a1 1 0 0 1 0-2h6.238a1 1 0 1 1 0 2Z" />
                            <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.98 2.98 0 0 0 .13 5H5Z" />
                        </svg>
                        Employee Report
                    </a>
                </li>
                <li>
                    <a href="Payroll_page.php" class="nav-link text-white mb-4 <?php echo ($user_privilege == 1 || $user_privilege == 2) ? '' : 'd-none' ?>">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M11.074 4 8.442.408A.95.95 0 0 0 7.014.254L2.926 4h8.148ZM9 13v-1a4 4 0 0 1 4-4h6V6a1 1 0 0 0-1-1H1a1 1 0 0 0-1 1v13a1 1 0 0 0 1 1h17a1 1 0 0 0 1-1v-2h-6a4 4 0 0 1-4-4Z" />
                            <path d="M19 10h-6a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1Zm-4.5 3.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM12.62 4h2.78L12.539.41a1.086 1.086 0 1 0-1.7 1.352L12.62 4Z" />
                        </svg>
                        Payroll
                    </a>
                </li>
                <li>
                    <a href="payroll_report.php" class="nav-link text-white  mb-4 <?php echo ($user_privilege == 1 || $user_privilege == 2) ? '' : 'd-none' ?>">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path d="M16 0H2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 17h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2Z" />
                        </svg>
                        Payroll Report
                    </a>
                </li>
                <li>
                    <a href="Shop.php" class="nav-link text-white mb-4 <?php echo ($user_privilege == 1 || $user_privilege == 3) ? '' : 'd-none' ?>">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M17.876.517A1 1 0 0 0 17 0H3a1 1 0 0 0-.871.508C1.63 1.393 0 5.385 0 6.75a3.236 3.236 0 0 0 1 2.336V19a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-6h4v6a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V9.044a3.242 3.242 0 0 0 1-2.294c0-1.283-1.626-5.33-2.124-6.233ZM15.5 14.7a.8.8 0 0 1-.8.8h-2.4a.8.8 0 0 1-.8-.8v-2.4a.8.8 0 0 1 .8-.8h2.4a.8.8 0 0 1 .8.8v2.4ZM16.75 8a1.252 1.252 0 0 1-1.25-1.25 1 1 0 0 0-2 0 1.25 1.25 0 0 1-2.5 0 1 1 0 0 0-2 0 1.25 1.25 0 0 1-2.5 0 1 1 0 0 0-2 0A1.252 1.252 0 0 1 3.25 8 1.266 1.266 0 0 1 2 6.75C2.306 5.1 2.841 3.501 3.591 2H16.4A19.015 19.015 0 0 1 18 6.75 1.337 1.337 0 0 1 16.75 8Z" />
                        </svg>
                        POS
                    </a>
                </li>
                <li>
                    <a href="pos_sales_report.php" class="nav-link text-white mb-4 <?php echo ($user_privilege == 1 || $user_privilege == 3) ? '' : 'd-none' ?>">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                            <path d="M15.045.007 9.31 0a1.965 1.965 0 0 0-1.4.585L.58 7.979a2 2 0 0 0 0 2.805l6.573 6.631a1.956 1.956 0 0 0 1.4.585 1.965 1.965 0 0 0 1.4-.585l7.409-7.477A2 2 0 0 0 18 8.479v-5.5A2.972 2.972 0 0 0 15.045.007Zm-2.452 6.438a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                        </svg>
                        POS Sales Report
                    </a>
                </li>
                <li>
                    <a href="user_account_page.php" class="nav-link text-white mb-4 <?php echo ($user_privilege == 1) ? '' : 'd-none' ?>">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                        </svg>
                        User Account Report
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
        <!-- main content -->
        <div class="flex-grow-1 px-5" style="background-color: #f9fafc;">
            <div class="my-5 mx-5">
                <h1 class="my-3 fw-bold">Welcome <?php echo $user_name ?></h1>
                <div class="row row-cols-2 gx-5">
                    <div class="col-9">
                        <div class="bg-white rounded p-3">
                            <div>
                                <h5>Registered Employee</h5>
                                <canvas id="chart1" height="300"></canvas>
                            </div>
                        </div>
                        <div class="bg-white rounded mt-5 p-3">
                            <div>
                                <h5>Recent Sales</h5>
                                <div>
                                    <table class="table table-hover ">
                                        <thead class="border">
                                            <tr>
                                                <th scope="col" class="border bg-dark text-white">#</th>
                                                <th scope="col" class="border bg-dark text-white">Product Name</th>
                                                <th scope="col" class="border bg-dark text-white">Quantity</th>
                                                <th scope="col" class="border bg-dark text-white">Product Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($result) {
                                                while ($item = $result->fetch_assoc()) {
                                                    echo "
                                                        <tr class='clickable-row' data-href='{$item['item_type']}.php?id={$item['id']}'>
                                                        <td class='border'>$item[id]</td>
                                                            <td class='border'>$item[item_name]</td>
                                                            <td class='border'>$item[quantity]</td>
                                                            <td class='border'>$item[price]</td>  
                                                            
                                                        </tr>
                                                        ";
                                                }
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-3">
                        <div class="bg-white rounded p-3">
                            <div>
                                <h5 class="text-center">Number of Privilege Users</h5>
                                <h5 class="text-center"><?php echo $result3[4][0] ?></h5>
                                <canvas id="chart2" height="100"></canvas>
                            </div>
                        </div>
                        <div class="bg-white rounded p-4 mt-5">
                            <div>
                                <h5 class="text-center">Calendar</h5>
                                <div class="calendar ms-4">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    </div>
    </div>
</body>
<script defer>
    const chartOptions = {
        maintainAspectRatio: false,
        legend: {
            display: true,
        },
        tooltips: {
            enabled: false,
        },
        scales: {
            xAxes: [{
                gridLines: true,
                scaleLabel: true,
                ticks: {
                    display: true,
                },
                gridLines: {
                    display: true,
                    color: "#d3dfed",
                },
            }, ],
            yAxes: [{
                gridLines: true,
                scaleLabel: true,
                ticks: {
                    display: true,
                    suggestedMin: 0,
                    suggestedMax: 10,
                },
                gridLines: {
                    display: true,
                    color: "#d3dfed",
                },
            }, ],
        },
    };
    const chartOptions2 = {
        maintainAspectRatio: false,
        legend: {
            display: true,
        },
        tooltips: {
            enabled: false,
        },
        scales: {
            xAxes: [{
                gridLines: false,
                scaleLabel: false,
                ticks: {
                    display: false,
                },
                gridLines: {
                    display: false,
                    color: "#d3dfed",
                },
            }, ],
            yAxes: [{
                gridLines: false,
                scaleLabel: true,
                ticks: {
                    display: false,
                    suggestedMin: 0,
                    suggestedMax: 10,
                },
                gridLines: {
                    display: false,
                    color: "#d3dfed",
                },
            }, ],
        },
    };

    var result2 = <?php echo json_encode($result2); ?>;
    console.log(result2)
    var ctx = document.getElementById("chart1").getContext("2d");
    var chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: result2.flat(),
            datasets: [{
                label: "Registered Users",
                backgroundColor: "rgba(101, 116, 205, 0.1)",
                borderColor: "rgba(101, 116, 205, 0.8)",
                borderWidth: 2,
                data: result2.flat(),
            }, ],
        },
        options: chartOptions,
    });

    var result3 = <?php echo json_encode($result3); ?>;
    console.log(result3);
    var ctx = document.getElementById("chart2").getContext("2d");
    var chart = new Chart(ctx, {
        type: "doughnut",
        data: {
            labels: ["Administrator", "Cashier", "Accountant"],
            datasets: [{
                data: [result3['1'], result3['3'], result3['2']],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
            }]
        },
        options: chartOptions2,
    });
</script>

</html>

<!-- <div class="my-5">
                <h1 class="text-center my-3 fw-bold">Home</h1>
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
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
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1551024709-8f23befc6f87?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2157&q=80" class="d-block w-100" alt="..." height="800">
                            <div class="carousel-caption d-none d-md-block">
                                <h1 class="fw-bold">Drinks</h1>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1606787366850-de6330128bfc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="d-block w-100" alt="..." height="800">
                            <div class="carousel-caption d-none d-md-block">
                                <h1 class="fw-bold">Foods</h1>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1532431967313-f89e1b92f8f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="d-block w-100" alt="..." height="800">
                            <div class="carousel-caption d-none d-md-block">
                                <h1 class="fw-bold">Kitchenwares</h1>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1557827983-012eb6ea8dc1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2076&q=80" class="d-block w-100" alt="..." height="800">
                            <div class="carousel-caption d-none d-md-block">
                                <h1 class="fw-bold">Perfume</h1>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon " aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div>
                    <h1 class="text-center my-5 pt-5">New Arrival</h1>
                    <ul class="nav d-flex gap-5 justify-content-center align-items-center mb-4" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active text-blue" id="Dress" data-bs-toggle="tab" data-bs-target="#Dress-pane" type="button" role="tab" aria-controls="Dress-pane" aria-selected="true">Dress</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-blue" id="Drinks-tab" data-bs-toggle="tab" data-bs-target="#Drinks-tab-pane" type="button" role="tab" aria-controls="Drinks-tab-pane" aria-selected="false">Drinks</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-blue" id="Foods-tab" data-bs-toggle="tab" data-bs-target="#Foods-tab-pane" type="button" role="tab" aria-controls="Foods-tab-pane" aria-selected="false">Foods</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-blue" id="Kitchenwares-tab" data-bs-toggle="tab" data-bs-target="#Kitchenwares-tab-pane" type="button" role="tab" aria-controls="Kitchenwares-tab-pane" aria-selected="false">Kitchenwares</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-blue" id="Perfume-tab" data-bs-toggle="tab" data-bs-target="#Perfume-tab-pane" type="button" role="tab" aria-controls="Perfume-tab-pane" aria-selected="false">Perfume</button>
                        </li>
                    </ul>
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
                                            <h5 class='card-title text-center'>Card title</h5>
                                            <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
                                            <h5 class='card-title text-center'>Card title</h5>
                                            <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            
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
                                            <h5 class='card-title text-center'>Card title</h5>
                                            <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
                                            <h5 class='card-title text-center'>Card title</h5>
                                            <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
                                            <h5 class='card-title text-center'>Card title</h5>
                                            <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
                            </div>
                        </div>
                        <div class="card">
                            <img src="Images/Drinks/18.jpg" class="card-img-top" alt="..." height="300">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="Images/Foods/19.jpg" class="card-img-top" alt="..." height="300">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div> -->