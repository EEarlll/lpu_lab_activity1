<?php
include 'process/earl_registration_fill.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"> </script>
    <script src="js/emp_info_save.js"></script>
    <link rel="stylesheet" href="css/employee_registration.css">
    <link rel="stylesheet" href="css/global.css">
</head>

<body>
    <div class="d-flex">
        <div class="vh-100 sticky-top " style="width: 320px; background-color:#111927">
            <nav class="navbar my-5 mx-2">
                <a class="navbar-brand text-white font-weight-bold" href="#">
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
                    <a href="employee_registration_save.php" class="nav-link text-white mb-4" style="background-color: #343b47;border-radius: 5px;">
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
                    <a href="Shop.php" class="nav-link text-white mb-4">
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
        <div class="flex-grow-1" style="background-color: #f9fafc;">
            <div class="container">
                <div class="page_border">
                    <form id="pic-upload" class="a-form" enctype="multipart/form-data" method="post" width='840'>
                        <h1 style="text-align:center;  font-size:47px; color:black"><b>Earl's Employee Personal
                                Information</b></h1>
                        <div class="a-form-group mt-3" style="float:left; clear:block; width:20%;">
                            <div id="pic-box" style='width:170px; height:150px; overflow:hidden; margin-top:55px; margin-left:5px; background:none; border:thin solid #d3d3d3'>
                                <img src="<?php echo isset($type) ? "$pic_path" : "Images/Assets/placeholder.jpg"; ?>" style="width: 100%; height:100%" alt="" id='pic-img'>
                            </div>
                            <input type="file" style="margin-top:10px; text-align:center;" id="uploadfile" name="uploadfile" value="" />

                        </div>
                    </form>
                    <form id="form_employee_registration_save" class="a-form" action="" method="post" width='840'>
                        <div class="a-form-group mt-3" width='480'>
                            <div class="a-fields-group mt-0">
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="fname" class="mb-0 control-label">First Name</label>
                                        <input type="text" class="form-control mt-0" name="fname" id="fname" value="<?php echo $fname; ?>">
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="mname" class="mb-0">Middle
                                            Name</label>
                                        <input type="text" class="form-control mt-0" name="mname" id="mname" value="<?php echo $mname; ?>">
                                    </div>
                                    <div class="form-group col">
                                        <label for="lname" class="mb-0 control-label">Last Name</label>
                                        <input type="text" class="form-control mt-0" name="lname" id="lname" value="<?php echo $lname; ?>">
                                    </div>
                                    <div class="form-group col-2">
                                        <label for="suffix" class="mb-0">Suffix</label>
                                        <input type="text" class="form-control mt-0" name="suffix" id="suffix" value="<?php echo $suffix; ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-4">
                                        <label for="bday" class="mb-0 control-label">Date of
                                            Birth</label>
                                        <input type="date" class="form-control mt-0" name="birth_date" id="birth_date" value="<?php echo $birth_date; ?>">
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="gender" class="mb-0 control-label">Gender</label>
                                        <select class="form-control" name="gender" id="gender">
                                            <option value=''>-- select one --</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group col">
                                        <label for="nationality" class="mb-0 control-label">Nationality</label>
                                        <select class="form-control mt-0" name="nationality" id="nationality">
                                            <option value="">-- select one --</option>
                                            <option value="Afghan">Afghan</option>
                                            <option value="Albanian">Albanian</option>
                                            <option value="Algerian">Algerian</option>
                                            <option value="American">American</option>
                                            <option value="Andorran">Andorran</option>
                                            <option value="Angolan">Angolan</option>
                                            <option value="Antiguans">Antiguans</option>
                                            <option value="Argentinean">Argentinean</option>
                                            <option value="Armenian">Armenian</option>
                                            <option value="Australian">Australian</option>
                                            <option value="Austrian">Austrian</option>
                                            <option value="Azerbaijani">Azerbaijani</option>
                                            <option value="Bahamian">Bahamian</option>
                                            <option value="Bahraini">Bahraini</option>
                                            <option value="Bangladeshi">Bangladeshi</option>
                                            <option value="Barbadian">Barbadian</option>
                                            <option value="Barbudans">Barbudans</option>
                                            <option value="Batswana">Batswana</option>
                                            <option value="Belarusian">Belarusian</option>
                                            <option value="Belgian">Belgian</option>
                                            <option value="Belizean">Belizean</option>
                                            <option value="Beninese">Beninese</option>
                                            <option value="Bhutanese">Bhutanese</option>
                                            <option value="Bolivian">Bolivian</option>
                                            <option value="Bosnian">Bosnian</option>
                                            <option value="Brazilian">Brazilian</option>
                                            <option value="British">British</option>
                                            <option value="Bruneian">Bruneian</option>
                                            <option value="Bulgarian">Bulgarian</option>
                                            <option value="Burkinabe">Burkinabe</option>
                                            <option value="Burmese">Burmese</option>
                                            <option value="Burundian">Burundian</option>
                                            <option value="Cambodian">Cambodian</option>
                                            <option value="Cameroonian">Cameroonian</option>
                                            <option value="Canadian">Canadian</option>
                                            <option value="Cape verdean">Cape
                                                Verdean</option>
                                            <option value="Central african">Central
                                                African</option>
                                            <option value="Chadian">Chadian</option>
                                            <option value="Chilean">Chilean</option>
                                            <option value="Chinese">Chinese</option>
                                            <option value="Colombian">Colombian</option>
                                            <option value="Comoran">Comoran</option>
                                            <option value="Congolese">Congolese</option>
                                            <option value="Costa rican">Costa Rican</option>
                                            <option value="Croatian">Croatian</option>
                                            <option value="Cuban">Cuban</option>
                                            <option value="Cypriot">Cypriot</option>
                                            <option value="Czech">Czech</option>
                                            <option value="Danish">Danish</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominican">Dominican</option>
                                            <option value="Dutch">Dutch</option>
                                            <option value="East timorese">East
                                                Timorese</option>
                                            <option value="Ecuadorean">Ecuadorean</option>
                                            <option value="Egyptian">Egyptian</option>
                                            <option value="Emirian">Emirian</option>
                                            <option value="Equatorial guinean">Equatorial
                                                Guinean</option>
                                            <option value="Eritrean">Eritrean</option>
                                            <option value="Estonian">Estonian</option>
                                            <option value="Ethiopian">Ethiopian</option>
                                            <option value="Fijian">Fijian</option>
                                            <option selected value="Filipino">Filipino</option>
                                            <option value="Finnish">Finnish</option>
                                            <option value="French">French</option>
                                            <option value="Gabonese">Gabonese</option>
                                            <option value="Gambian">Gambian</option>
                                            <option value="Georgian">Georgian</option>
                                            <option value="German">German</option>
                                            <option value="Ghanaian">Ghanaian</option>
                                            <option value="Greek">Greek</option>
                                            <option value="Grenadian">Grenadian</option>
                                            <option value="Guatemalan">Guatemalan</option>
                                            <option value="Guinea-Bissauan">Guinea-Bissauan</option>
                                            <option value="Guinean">Guinean</option>
                                            <option value="Guyanese">Guyanese</option>
                                            <option value="Haitian">Haitian</option>
                                            <option value="Herzegovinian">Herzegovinian</option>
                                            <option value="Honduran">Honduran</option>
                                            <option value="Hungarian">Hungarian</option>
                                            <option value="Icelander">Icelander</option>
                                            <option value="Indian">Indian</option>
                                            <option value="Indonesian">Indonesian</option>
                                            <option value="Iranian">Iranian</option>
                                            <option value="Iraqi">Iraqi</option>
                                            <option value="Irish">Irish</option>
                                            <option value="Israeli">Israeli</option>
                                            <option value="Italian">Italian</option>
                                            <option value="Ivorian">Ivorian</option>
                                            <option value="Jamaican">Jamaican</option>
                                            <option value="Japanese">Japanese</option>
                                            <option value="Jordanian">Jordanian</option>
                                            <option value="Kazakhstani">Kazakhstani</option>
                                            <option value="Kenyan">Kenyan</option>
                                            <option value="Kittian and Nevisian">Kittian and Nevisian</option>
                                            <option value="Kuwaiti">Kuwaiti</option>
                                            <option value="Kyrgyz">Kyrgyz</option>
                                            <option value="Laotian">Laotian</option>
                                            <option value="Latvian">Latvian</option>
                                            <option value="Lebanese">Lebanese</option>
                                            <option value="Liberian">Liberian</option>
                                            <option value="Libyan">Libyan</option>
                                            <option value="Liechtensteiner">Liechtensteiner</option>
                                            <option value="Lithuanian">Lithuanian</option>
                                            <option value="Luxembourger">Luxembourger</option>
                                            <option value="Macedonian">Macedonian</option>
                                            <option value="Malagasy">Malagasy</option>
                                            <option value="Malawian">Malawian</option>
                                            <option value="Malaysian">Malaysian</option>
                                            <option value="Maldivan">Maldivan</option>
                                            <option value="Malian">Malian</option>
                                            <option value="Maltese">Maltese</option>
                                            <option value="Marshallese">Marshallese</option>
                                            <option value="Mauritanian">Mauritanian</option>
                                            <option value="Mauritian">Mauritian</option>
                                            <option value="Mexican">Mexican</option>
                                            <option value="Micronesian">Micronesian</option>
                                            <option value="Moldovan">Moldovan</option>
                                            <option value="Monacan">Monacan</option>
                                            <option value="Mongolian">Mongolian</option>
                                            <option value="Moroccan">Moroccan</option>
                                            <option value="Mosotho">Mosotho</option>
                                            <option value="Motswana">Motswana</option>
                                            <option value="Mozambican">Mozambican</option>
                                            <option value="Namibian">Namibian</option>
                                            <option value="Nauruan">Nauruan</option>
                                            <option value="Nepalese">Nepalese</option>
                                            <option value="New zealander">New
                                                Zealander</option>
                                            <option value="Ni-Vanuatu">Ni-Vanuatu</option>
                                            <option value="Nicaraguan">Nicaraguan</option>
                                            <option value="Nigerien">Nigerien</option>
                                            <option value="North Korean">North
                                                Korean</option>
                                            <option value="Northern Irish">Northern
                                                Irish</option>
                                            <option value="Norwegian">Norwegian</option>
                                            <option value="Omani">Omani</option>
                                            <option value="Pakistani">Pakistani</option>
                                            <option value="Palauan">Palauan</option>
                                            <option value="Panamanian">Panamanian</option>
                                            <option value="Papua New Guinean">Papua New
                                                Guinean</option>
                                            <option value="Paraguayan">Paraguayan</option>
                                            <option value="Peruvian">Peruvian</option>
                                            <option value="Polish">Polish</option>
                                            <option value="Portuguese">Portuguese</option>
                                            <option value="Qatari">Qatari</option>
                                            <option value="Romanian">Romanian</option>
                                            <option value="Russian">Russian</option>
                                            <option value="Rwandan">Rwandan</option>
                                            <option value="Saint Lucian">Saint Lucian</option>
                                            <option value="Salvadoran">Salvadoran</option>
                                            <option value="Samoan">Samoan</option>
                                            <option value="San Marinese">San Marinese</option>
                                            <option value="Sao Tomean">Sao Tomean</option>
                                            <option value="Saudi">Saudi</option>
                                            <option value="Scottish">Scottish</option>
                                            <option value="Senegalese">Senegalese</option>
                                            <option value="Serbian">Serbian</option>
                                            <option value="Seychellois">Seychellois</option>
                                            <option value="Sierra Leonean">Sierra Leonean</option>
                                            <option value="Singaporean">Singaporean</option>
                                            <option value="Slovakian">Slovakian</option>
                                            <option value="Slovenian">Slovenian</option>
                                            <option value="Solomon Islander">Solomon Islander</option>
                                            <option value="Somali">Somali</option>
                                            <option value="South African">South African</option>
                                            <option value="South Korean">South Korean</option>
                                            <option value="Spanish">Spanish</option>
                                            <option value="Sri Lankan">Sri Lankan</option>
                                            <option value="Sudanese">Sudanese</option>
                                            <option value="Surinamer">Surinamer</option>
                                            <option value="Swazi">Swazi</option>
                                            <option value="Swedish">Swedish</option>
                                            <option value="Swiss">Swiss</option>
                                            <option value="Syrian">Syrian</option>
                                            <option value="Taiwanese">Taiwanese</option>
                                            <option value="Tajik">Tajik</option>
                                            <option value="Tanzanian">Tanzanian</option>
                                            <option value="Thai">Thai</option>
                                            <option value="Togolese">Togolese</option>
                                            <option value="Tongan">Tongan</option>
                                            <option value="Trinidadian or Tobagonian">Trinidadian or Tobagonian</option>
                                            <option value="Tunisian">Tunisian</option>
                                            <option value="Turkish">Turkish</option>
                                            <option value="Tuvaluan">Tuvaluan</option>
                                            <option value="Ugandan">Ugandan</option>
                                            <option value="Ukrainian">Ukrainian</option>
                                            <option value="Uruguayan">Uruguayan</option>
                                            <option value="Uzbekistani">Uzbekistani</option>
                                            <option value="Venezuelan">Venezuelan</option>
                                            <option value="Vietnamese">Vietnamese</option>
                                            <option value="Welsh">Welsh</option>
                                            <option value="Yemenite">Yemenite</option>
                                            <option value="Zambian">Zambian</option>
                                            <option value="Zimbabwean">Zimbabwean</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="civil_status" class="mb-0 control-label">Civil Status</label>
                                        <select class="form-control" name="civil_status" id="civil_status">
                                            <option value=''>-- select one --</option>
                                            <option value="M">Married</option>
                                            <option value="S">Single</option>
                                            <option value="LS">Separated</option>
                                            <option value="W">Widow</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="a-fields-group mt-0">
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="fname" class="mb-0 control-label">Department</label>
                                        <input type="text" class="form-control mt-0" name="department" id="department" value="<?php echo $department; ?>">
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="mname" class="mb-0">Designation</label>
                                        <input type="text" class="form-control mt-0" name="designation" id="designation" value="<?php echo $designation; ?>">
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="qualified_dependent_status" class="mb-0 control-label">Qualified Dep. Status</label>
                                        <select class="form-control" name="qualified_dependent_status" id="qualified_dependent_status">
                                            <option value=''>-- select one --</option>
                                            <option value="Z">Z or Single</option>
                                            <option value="S or ME">S or ME</option>
                                            <option value="S1 or ME1">S1 or ME1</option>
                                            <option value="S2 or ME2">S2 or ME2</option>
                                            <option value="S3 or ME3">S3 or ME3</option>
                                            <option value="S4 or ME4">S4 or ME4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="fname" class="mb-0 control-label">Employee
                                            Status</label>
                                        <input type="text" class="form-control mt-0" name="employee_status" id="employee_status" value="<?php echo $employee_status; ?>">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-4">
                                            <label for="pay_day" class="mb-0 control-label">Paydate</label>
                                            <input type="date" class="form-control mt-0" name="pay_date" id="pay_date" value="<?php echo $pay_date; ?>">
                                        </div>
                                        <div class="form-group col">
                                            <label for="employee_number" class="mb-0 control-label">Employee Number</label>
                                            <input type="text" class="form-control mt-0" name="employee_number" id="employee_number" value="<?php echo $employee_no; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="a-form-group mt-3">
                                <h5 class="mb-0 font-weight-bold">Contact Info</h5>
                                <div class="a-fields-group mt-0">
                                    <div class="form-row">
                                        <div class="form-group col-5">
                                            <label for="contact_number" class="mb-0 control-label">Contact No.</label>
                                            <input type="text" class="form-control mt-0" name="contact_number" id="contact_number" value="<?php echo $contact_no; ?>">
                                        </div>
                                        <div class="form-group col">
                                            <label for="email" class="mb-0 control-label">Email</label>
                                            <input type="text" class="form-control mt-0" name="email_address" id="email_address" value="<?php echo $email_address; ?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-5">
                                            <label for="social_media" class="mb-0 control-label">Other (Social Media)</label>
                                            <select class="form-control" name="social_media" id="social_media">
                                                <option value=''>-- select one --</option>
                                                <option value="facebook_messenger">Facebook
                                                    Messenger</option>
                                                <option value="whatsapp_messenger">WhatsApp
                                                    Messenger</option>
                                                <option value="wechat">WeChat</option>
                                                <option value="telegram">Telegram</option>
                                                <option value="snapchat">Snapchat</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                        <div class="form-group col">
                                            <label for="social_media_account_id" class="mb-0 control-label">Social Media Account ID/No.</label>
                                            <input type="text" class="form-control mt-0" name="social_media_account_id" id="social_media_account_id" value="<?php echo $social_media_account_id; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="a-form-group">
                                <h5 class="mb-0 font-weight-bold">Address</h5>
                                <div class="a-fields-group">
                                    <div class="form-row">
                                        <div class="form-group col-12">
                                            <label for="address1" class="mb-0">Address Line 1</label>
                                            <input type="text" class="form-control mt-0" name="address_line1" id="address_line1" value="<?php echo $address_line1; ?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-10">
                                            <label for="address2" class="mb-0">Address Line 2</label>
                                            <input type="text" class="form-control mt-0" name="address_line2" id="address_line2" value="<?php echo $address_line2; ?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col">
                                            <label for="city" class="mb-0">City/Municipality</label>
                                            <input type="text" class="form-control mt-0" name="municipality" id="municipality" value="<?php echo $municipality; ?>">
                                        </div>
                                        <div class="form-group col">
                                            <label for="state" class="mb-0">State/Province</label>
                                            <input type="text" class="form-control mt-0" name="state_province" id="state_province" value="<?php echo $state_province; ?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-6">
                                            <label for="country" class="mb-0">Country</label>
                                            <select class="form-control mt-0" name="country" id="country">
                                                <option value=''>-- select one --</option>
                                                <option value="Afganistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bonaire">Bonaire</option>
                                                <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                <option value="Brunei">Brunei</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Canary Islands">Canary Islands</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Channel Islands">Channel Islands</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos Island">Cocos Island</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote DIvoire">Cote DIvoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Curaco">Curacao</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="East Timor">East Timor</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands">Falkland Islands</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Ter">French Southern Ter</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Great Britain">Great Britain</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Hawaii">Hawaii</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="India">India</option>
                                                <option value="Iran">Iran</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea North">Korea North</option>
                                                <option value="Korea Sout">Korea South</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Laos">Laos</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libya">Libya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macau">Macau</option>
                                                <option value="Macedonia">Macedonia</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Midway Islands">Midway Islands</option>
                                                <option value="Moldova">Moldova</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Nambia">Nambia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherland Antilles">Netherland Antilles</option>
                                                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                <option value="Nevis">Nevis</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau Island">Palau Island</option>
                                                <option value="Palestine">Palestine</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option selected value="Phillipines">Philippines</option>
                                                <option value="Pitcairn Island">Pitcairn Island</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                <option value="Republic of Serbia">Republic of Serbia</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russia">Russia</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="St Barthelemy">St Barthelemy</option>
                                                <option value="St Eustatius">St Eustatius</option>
                                                <option value="St Helena">St Helena</option>
                                                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                <option value="St Lucia">St Lucia</option>
                                                <option value="St Maarten">St Maarten</option>
                                                <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                <option value="Saipan">Saipan</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="Samoa American">Samoa American</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syria">Syria</option>
                                                <option value="Tahiti">Tahiti</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania">Tanzania</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Erimates">United Arab Emirates</option>
                                                <option value="United States of America">United States of America</option>
                                                <option value="Uraguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Vatican City State">Vatican City State</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Vietnam">Vietnam</option>
                                                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                <option value="Wake Island">Wake Island</option>
                                                <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zaire">Zaire</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                        </div>
                                        <div class="form-group col3">
                                            <label for="zip" class="mb-0">Zip Code</label>
                                            <input type="text" class="form-control mt-0" name="zip_code" id="zip_code" value="<?php echo $zip_code; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group col3">
                                        <label for="picpath" class="mb-0">Picture Path</label>
                                        <input type="text" class="form-control mt-0" name="picpath" id="picpath" value="<?php echo $pic_path; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" id="<?php echo isset($type) ? "update" : "save"; ?>" name="savebtn" style="width:130px;" value=""><?php echo isset($type) ? "Update" : "Save"; ?></button>
                        <?php
                        if (isset($type)) {
                            echo "<button type='submit' class='btn btn-danger' id='delete' name='delete' style='width:130px;'>Delete</button>";
                        }
                        ?>
                        <button type="reset" class="btn btn-outline-secondary" id="cancelbtn" name="cancelbtn" style="width:130px;">Cancel</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

</body>

</html