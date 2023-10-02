<?php
function empty_inputbox()
{
    $employee_no = "";
    $employee_no = "";
    $department = "";
    $firstname = "";
    $mname = "";
    $surname = "";
    $civil_status = "";
    $designation = "";
    $qualified_dependents = "";
    $paydate = "";
    $emp_status = "";
    //decleration of variables where inputs are stored
    $basic_rate_hour = "";
    $basic_num_hours_cutoff = "";
    $hono_rate_hour = "";
    $hono_num_hours_cutoff = "";
    $other_rate_hour = "";
    $other_num_hours_cutoff = "";
    $sss_contri = 0.00;
    $philH_contri = 0.00;
    $pagibig_contri = 100.00;
    $tax_contri = 0.00;
    $sss_loan = "";
    $pagibig_loan = "";
    $fs_deposit = "";
    $fs_loan = "";
    $salary_loan = "";
    $other_loans = "";
}
//decleration of variables with fix data value for employee info
$employee_no = "69420";
$department = "DOE";
$firstname = "Earl";
$mname = "Nocon";
$surname = "Eustacio";
$civil_status = "Single";
$designation = "Staff";
$qualified_dependents = "S";
$paydate = "October 2 2023";
$emp_status = "Job Order";
//decleration of variables where inputs are stored
$basic_rate_hour = "";
$basic_num_hours_cutoff = "";
$hono_rate_hour = "";
$hono_num_hours_cutoff = "";
$other_rate_hour = "";
$other_num_hours_cutoff = "";
$sss_contri = 0.00;
$philH_contri = 0.00;
$pagibig_contri = 100.00;
$tax_contri = 0.00;
$sss_loan = "";
$pagibig_loan = "";
$fs_deposit = "";
$fs_loan = "";
$salary_loan = "";
$other_loans = "";

//declarion of variables that will the results of the given formula
$basic_income_cutoff = "";
$hono_income_cutoff = "";
$other_income_cutoff = "";
$gross_income = "";
$net_income = "";
$total_deduct = "";

session_start();
//getting input from textbox and place it inside the variable by calling the name of the inputs
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // to press Calculate Gross Income button
    if (isset($_POST["calculate_gross_income"])) {
        $basic_rate_hour = $_POST["basic_rate_hour"];
        $basic_num_hours_cutoff = $_POST["basic_num_hours_cutoff"];
        $hono_rate_hour = $_POST["hono_rate_hour"];
        $hono_num_hours_cutoff = $_POST["hono_num_hours_cutoff"];
        $other_rate_hour = $_POST["other_rate_hour"];
        $other_num_hours_cutoff = $_POST["other_num_hours_cutoff"];
        $sss_loan = $_POST["sss_loan"];
        $pagibig_loan = $_POST["pagibig_loan"];
        $fs_deposit = $_POST["fs_deposit"];
        $fs_loan = $_POST["fs_loan"];
        $salary_loan = $_POST["salary_loan"];
        $other_loans = $_POST["other_loans"];
        $qualified_dependents = $_POST["qualified_dependents"];

        $basic_income_cutoff = $basic_rate_hour * $basic_num_hours_cutoff;
        $hono_income_cutoff = $hono_rate_hour * $hono_num_hours_cutoff;
        $other_income_cutoff = $other_rate_hour * $other_num_hours_cutoff;
        $gross_income = $basic_income_cutoff + $hono_income_cutoff + $other_income_cutoff;


        //sss contribution
        if ($gross_income >= 4250 && $gross_income <= 4749.99) {
            $sss_contri = 427.50;
        } else if ($gross_income >= 4750 && $gross_income <= 5249.99) {
            $sss_contri = 475.00;
        } else if ($gross_income >= 5250 && $gross_income <= 5749.99) {
            $sss_contri = 522.50;
        } else if ($gross_income >= 5750 && $gross_income <= 6249.99) {
            $sss_contri = 570.00;
        } else if ($gross_income >= 6250 && $gross_income <= 6749.99) {
            $sss_contri = 617.50;
        } else if ($gross_income >= 6750 && $gross_income <= 7249.99) {
            $sss_contri = 665.00;
        } else if ($gross_income >= 7250 && $gross_income <= 7749.99) {
            $sss_contri = 712.50;
        } else if ($gross_income >= 7750 && $gross_income <= 8249.99) {
            $sss_contri = 760.00;
        } else if ($gross_income >= 8250 && $gross_income <= 8749.99) {
            $sss_contri = 807.50;
        } else if ($gross_income >= 8750 && $gross_income <= 9249.99) {
            $sss_contri = 855.00;
        } else if ($gross_income >= 9250 && $gross_income <= 9749.99) {
            $sss_contri = 902.50;
        } else if ($gross_income >= 9750 && $gross_income <= 10249.99) {
            $sss_contri = 950.00;
        } else if ($gross_income >= 10250 && $gross_income <= 10749.99) {
            $sss_contri = 997.50;
        } else if ($gross_income >= 10750 && $gross_income <= 11249.99) {
            $sss_contri = 1045.00;
        } else if ($gross_income >= 11250 && $gross_income <= 11749.99) {
            $sss_contri = 1092.50;
        } else if ($gross_income >= 11750 && $gross_income <= 12249.99) {
            $sss_contri = 1140.00;
        } else if ($gross_income >= 12250 && $gross_income <= 12749.99) {
            $sss_contri = 1187.50;
        } else if ($gross_income >= 12750 && $gross_income <= 13249.99) {
            $sss_contri = 1235.00;
        } else if ($gross_income >= 13250 && $gross_income <= 13749.99) {
            $sss_contri = 1282.50;
        } else if ($gross_income >= 13750 && $gross_income <= 14249.99) {
            $sss_contri = 1330.00;
        } else if ($gross_income >= 14250 && $gross_income <= 14749.99) {
            $sss_contri = 1377.50;
        } else if ($gross_income >= 14750 && $gross_income <= 15249.99) {
            $sss_contri = 1425.00;
        } else if ($gross_income >= 15250 && $gross_income <= 15749.99) {
            $sss_contri = 1472.50;
        } else if ($gross_income >= 15750 && $gross_income <= 16249.99) {
            $sss_contri = 1520.00;
        } else if ($gross_income >= 16250 && $gross_income <= 16749.99) {
            $sss_contri = 1567.50;
        } else if ($gross_income >= 16750 && $gross_income <= 17249.99) {
            $sss_contri = 1615.00;
        } else if ($gross_income >= 17250 && $gross_income <= 17749.99) {
            $sss_contri = 1662.50;
        } else if ($gross_income >= 17750 && $gross_income <= 18249.99) {
            $sss_contri = 1710.00;
        } else if ($gross_income >= 18250 && $gross_income <= 18749.99) {
            $sss_contri = 1757.50;
        } else if ($gross_income >= 18750 && $gross_income <= 19249.99) {
            $sss_contri = 1805.00;
        } else {
            // Handle cases outside the specified ranges
            $sss_contri = 1852.50; // You can set a default value or take appropriate action
        }
        
        //philhealth contribution based from the given PhilHealth Table
        if ($gross_income <= 8999.99 && $gross_income >= 0) {
            $philH_contri = 100.00;
        } else if ($gross_income >= 9000 && $gross_income <= 9999.99) {
            $philH_contri = 112.50;
        } else if ($gross_income >= 10000 && $gross_income <= 10999.99) {
            $philH_contri = 125.00;
        } else if ($gross_income >= 11000 && $gross_income <= 11999.99) {
            $philH_contri = 137.50;
        } else if ($gross_income >= 12000 && $gross_income <= 12999.99) {
            $philH_contri = 150.00;
        } else if ($gross_income >= 13000 && $gross_income <= 13999.99) {
            $philH_contri = 162.50;
        } else if ($gross_income >= 14000 && $gross_income <= 14999.99) {
            $philH_contri = 175.00;
        } else if ($gross_income >= 15000 && $gross_income <= 15999.99) {
            $philH_contri = 187.50;
        } else if ($gross_income >= 16000 && $gross_income <= 16999.99) {
            $philH_contri = 200.00;
        } else if ($gross_income >= 17000 && $gross_income <= 17999.99) {
            $philH_contri = 212.50;
        } else if ($gross_income >= 18000 && $gross_income <= 18999.99) {
            $philH_contri = 225.00;
        } else if ($gross_income >= 19000 && $gross_income <= 19999.99) {
            $philH_contri = 237.50;
        } else if ($gross_income >= 20000 && $gross_income <= 20999.99) {
            $philH_contri = 250.00;
        } else if ($gross_income >= 21000 && $gross_income <= 21999.99) {
            $philH_contri = 262.50;
        } else if ($gross_income >= 22000 && $gross_income <= 22999.99) {
            $philH_contri = 275.00;
        } else if ($gross_income >= 23000 && $gross_income <= 23999.99) {
            $philH_contri = 287.50;
        } else if ($gross_income >= 24000 && $gross_income <= 24999.99) {
            $philH_contri = 300.00;
        } else if ($gross_income >= 25000 && $gross_income <= 25999.99) {
            $philH_contri = 312.50;
        } else if ($gross_income >= 26000 && $gross_income <= 26999.99) {
            $philH_contri = 325.00;
        } else if ($gross_income >= 27000 && $gross_income <= 27999.99) {
            $philH_contri = 337.50;
        } else if ($gross_income >= 28000 && $gross_income <= 28999.99) {
            $philH_contri = 350.00;
        } else if ($gross_income >= 29000 && $gross_income <= 29999.99) {
            $philH_contri = 362.50;
        } else if ($gross_income >= 30000 && $gross_income <= 30999.99) {
            $philH_contri = 375.00;
        } else if ($gross_income >= 31000 && $gross_income <= 31999.99) {
            $philH_contri = 387.50;
        } else if ($gross_income >= 32000 && $gross_income <= 32999.99) {
            $philH_contri = 400.00;
        } else if ($gross_income >= 33000 && $gross_income <= 33999.99) {
            $philH_contri = 412.50;
        } else if ($gross_income >= 34000 && $gross_income <= 34999.99) {
            $philH_contri = 425.00;
        } else {
            $philH_contri = 437.50;
        }

        //tax computation
        //example ( net income - from the table data) * .25 + tax from table base from net income range

        switch (strtolower($qualified_dependents)) {

                //for zero exemption
            case "z":
                if ($gross_income <= 833 && $gross_income >= 0) {
                    $tax_contri = ((($gross_income - 0) * .05) + 0);
                } else if ($gross_income >= 834 && $gross_income <= 2500) {
                    $tax_contri = ((($gross_income - 833) * .10) + 41.67);
                } else if ($gross_income >= 2501 && $gross_income <= 5833) {
                    $tax_contri = ((($gross_income - 2500) * .15) + 208.33);
                } else if ($gross_income >= 5834 && $gross_income <= 11667) {
                    $tax_contri = ((($gross_income - 5833) * .20) + 708.33);
                } else if ($gross_income >= 11668 && $gross_income <= 20833) {
                    $tax_contri = ((($gross_income - 11667) * .25) + 1875);
                } else if ($gross_income >= 20834 && $gross_income <= 41667) {
                    $tax_contri = ((($gross_income - 20834) * .30) + 4166.67);
                } else {
                    $tax_contri = ((($gross_income - 41667) * .32) + 10416.67);
                }
                //$tax_contri=100;
                break;

                //for single or married with one qualified dependents
            case "s":
            case "me":
                if ($gross_income <= 50 && $gross_income >= 0) {
                    $tax_contri = (($gross_income - 0) + 0);
                } else if ($gross_income >= 4167 && $gross_income <= 5000) {
                    $tax_contri = ((($gross_income - 0) * .05) + 0);
                } else if ($gross_income >= 5001 && $gross_income <= 6667) {
                    $tax_contri = ((($gross_income - 5000) * .10) + 41.67);
                } else if ($gross_income >= 6668 && $gross_income <= 10000) {
                    $tax_contri = ((($gross_income - 6667) * .15) + 208.33);
                } else if ($gross_income >= 10001 && $gross_income <= 15833) {
                    $tax_contri = ((($gross_income - 10000) * .20) + 708.33);
                } else if ($gross_income >= 15834 && $gross_income <= 25000) {
                    $tax_contri = ((($gross_income - 15833) * .25) + 1875);
                } else if ($gross_income >= 25001 && $gross_income <= 45833) {
                    $tax_contri = ((($gross_income - 25000) * .30) + 4166.67);
                } else {
                    $tax_contri = ((($gross_income - 45833) * .32) + 10416.67);
                }
                //$tax_contri=100;
                break;

                //for single or married with qualified dependents
            case "me1":
            case "s1":
                if ($gross_income <= 75 && $gross_income >= 6250) {
                    $tax_contri = (($gross_income - 0) + 0);
                } else if ($gross_income >= 6251 && $gross_income <= 7083) {
                    $tax_contri = ((($gross_income - 6250) * .05) + 0);
                } else if ($gross_income >= 7084 && $gross_income <= 8750) {
                    $tax_contri = ((($gross_income - 7083) * .10) + 41.67);
                } else if ($gross_income >= 8751 && $gross_income <= 12083) {
                    $tax_contri = ((($gross_income - 8750) * .15) + 208.33);
                } else if ($gross_income >= 12084 && $gross_income <= 17917) {
                    $tax_contri = ((($gross_income - 12083) * .20) + 708.33);
                } else if ($gross_income >= 17918 && $gross_income <= 27083) {
                    $tax_contri = ((($gross_income - 17917) * .25) + 1875);
                } else if ($gross_income >= 27084 && $gross_income <= 47917) {
                    $tax_contri = ((($gross_income - 27083) * .30) + 4166.67);
                } else {
                    $tax_contri = ((($gross_income - 47917) * .32) + 10416.67);
                }
                //$tax_contri=100;
                break;

                //for single or married with qualified dependents
            case "me2":
            case "s2":
                if ($gross_income <= 100 && $gross_income >= 8333) {
                    $tax_contri = (($gross_income - 0) + 0);
                } else if ($gross_income >= 8334 && $gross_income <= 9167) {
                    $tax_contri = ((($gross_income - 8333) * .05) + 0);
                } else if ($gross_income >= 9168 && $gross_income <= 10833) {
                    $tax_contri = ((($gross_income - 9167) * .10) + 41.67);
                } else if ($gross_income >= 10834 && $gross_income <= 14167) {
                    $tax_contri = ((($gross_income - 10833) * .15) + 208.33);
                } else if ($gross_income >= 14168 && $gross_income <= 20000) {
                    $tax_contri = ((($gross_income - 14167) * .20) + 708.33);
                } else if ($gross_income >= 20001 && $gross_income <= 29167) {
                    $tax_contri = ((($gross_income - 20000) * .25) + 1875);
                } else if ($gross_income >= 29168 && $gross_income <= 50000) {
                    $tax_contri = ((($gross_income - 29167) * .30) + 4166.67);
                } else {
                    $tax_contri = ((($gross_income - 50000) * .32) + 10416.67);
                }
                //$tax_contri=100;
                break;

                //for single or married with qualified dependents
            case "me3":
            case "s3":
                if ($gross_income <= 125 && $gross_income >= 10417) {
                    $tax_contri = (($gross_income - 0) + 0);
                } else if ($gross_income >= 10418 && $gross_income <= 11250) {
                    $tax_contri = ((($gross_income - 10417) * .05) + 0);
                } else if ($gross_income >= 11251 && $gross_income <= 12917) {
                    $tax_contri = ((($gross_income - 11250) * .10) + 41.67);
                } else if ($gross_income >= 12918 && $gross_income <= 16250) {
                    $tax_contri = ((($gross_income - 12917) * .15) + 208.33);
                } else if ($gross_income >= 16251 && $gross_income <= 22083) {
                    $tax_contri = ((($gross_income - 16250) * .20) + 708.33);
                } else if ($gross_income >= 22084 && $gross_income <= 31250) {
                    $tax_contri = ((($gross_income - 22084) * .25) + 1875);
                } else if ($gross_income >= 31251 && $gross_income <= 52083) {
                    $tax_contri = ((($gross_income - 31250) * .30) + 4166.67);
                } else {
                    $tax_contri = ((($gross_income - 52083) * .32) + 10416.67);
                }
                //$tax_contri=100;
                break;

                //for single or married with qualified dependents
            case "me4":
            case "s4":
                if ($gross_income <= 150 && $gross_income >= 12500) {
                    $tax_contri = (($gross_income - 0) + 0);
                } else if ($gross_income >= 12501 && $gross_income <= 13333) {
                    $tax_contri = ((($gross_income - 12500) * .05) + 0);
                } else if ($gross_income >= 13334 && $gross_income <= 15000) {
                    $tax_contri = ((($gross_income - 13333) * .10) + 41.67);
                } else if ($gross_income >= 15001 && $gross_income <= 18333) {
                    $tax_contri = ((($gross_income - 15001) * .15) + 208.33);
                } else if ($gross_income >= 18334 && $gross_income <= 24167) {
                    $tax_contri = ((($gross_income - 18333) * .20) + 708.33);
                } else if ($gross_income >= 24168 && $gross_income <= 33333) {
                    $tax_contri = ((($gross_income - 24167) * .25) + 1875);
                } else if ($gross_income >= 33334 && $gross_income <= 54167) {
                    $tax_contri = ((($gross_income - 33333) * .30) + 4166.67);
                } else {
                    $tax_contri = ((($gross_income - 54167) * .32) + 10416.67);
                }
                //$tax_contri=100;
                break;

            default:
                $tax_contri = 0;
        }

        // to press Calculate Net Income button
    } else if (isset($_POST["calculate_net_income"])) {
        $basic_rate_hour = $_POST["basic_rate_hour"];
        $basic_num_hours_cutoff = $_POST["basic_num_hours_cutoff"];
        $hono_rate_hour = $_POST["hono_rate_hour"];
        $hono_num_hours_cutoff = $_POST["hono_num_hours_cutoff"];
        $other_rate_hour = $_POST["other_rate_hour"];
        $other_num_hours_cutoff = $_POST["other_num_hours_cutoff"];
        $sss_loan = $_POST["sss_loan"];
        $pagibig_loan = $_POST["pagibig_loan"];
        $fs_deposit = $_POST["fs_deposit"];
        $fs_loan = $_POST["fs_loan"];
        $salary_loan = $_POST["salary_loan"];
        $other_loans = $_POST["other_loans"];
        $qualified_dependents = $_POST["qualified_dependents"];

        $basic_income_cutoff = $basic_rate_hour * $basic_num_hours_cutoff;
        $hono_income_cutoff = $hono_rate_hour * $hono_num_hours_cutoff;
        $other_income_cutoff = $other_rate_hour * $other_num_hours_cutoff;
        $gross_income = $basic_income_cutoff + $hono_income_cutoff + $other_income_cutoff;


        //sss contribution
        if ($gross_income >= 1000 && $gross_income <= 1249) {
            $sss_contri = 73.70;
        } else if ($gross_income >= 1250 && $gross_income <= 1749) {
            $sss_contri = 110.50;
        } else if ($gross_income >= 1750 && $gross_income <= 2249) {
            $sss_contri = 147.30;
        } else if ($gross_income >= 2250 && $gross_income <= 2749.99) {
            $sss_contri = 184.20;
        } else if ($gross_income >= 2750 && $gross_income <= 3249.99) {
            $sss_contri = 221.00;
        } else if ($gross_income >= 3250 && $gross_income <= 3749.99) {
            $sss_contri = 257.80;
        } else if ($gross_income >= 3750 && $gross_income <= 4249.99) {
            $sss_contri = 294.70;
        } else if ($gross_income >= 4250 && $gross_income <= 4749.99) {
            $sss_contri = 331.50;
        } else if ($gross_income >= 4750 && $gross_income <= 5249.99) {
            $sss_contri = 368.30;
        } else if ($gross_income >= 5250 && $gross_income <= 5749.99) {
            $sss_contri = 405.20;
        } else if ($gross_income >= 5750 && $gross_income <= 6249.99) {
            $sss_contri = 442.00;
        } else if ($gross_income >= 6250 && $gross_income <= 6749.99) {
            $sss_contri = 478.80;
        } else if ($gross_income >= 6750 && $gross_income <= 7249.99) {
            $sss_contri = 515.70;
        } else if ($gross_income >= 7250 && $gross_income <= 7749.99) {
            $sss_contri = 552.50;
        } else if ($gross_income >= 7750 && $gross_income <= 8249.99) {
            $sss_contri = 589.30;
        } else if ($gross_income >= 8250 && $gross_income <= 8749.99) {
            $sss_contri = 626.20;
        } else if ($gross_income >= 8750 && $gross_income <= 9249.99) {
            $sss_contri = 663.00;
        } else if ($gross_income >= 9250 && $gross_income <= 9749.99) {
            $sss_contri = 699.80;
        } else if ($gross_income >= 9750 && $gross_income <= 10249.99) {
            $sss_contri = 736.70;
        } else if ($gross_income >= 10250 && $gross_income <= 10749.99) {
            $sss_contri = 773.50;
        } else if ($gross_income >= 10750 && $gross_income <= 11249.99) {
            $sss_contri = 810.30;
        } else if ($gross_income >= 11250 && $gross_income <= 11749.99) {
            $sss_contri = 847.20;
        } else if ($gross_income >= 11750 && $gross_income <= 12249.99) {
            $sss_contri = 884.00;
        } else if ($gross_income >= 12250 && $gross_income <= 12749.99) {
            $sss_contri = 920.80;
        } else if ($gross_income >= 12750 && $gross_income <= 13249.99) {
            $sss_contri = 957.70;
        } else if ($gross_income >= 13250 && $gross_income <= 13749.99) {
            $sss_contri = 994.50;
        } else if ($gross_income >= 13750 && $gross_income <= 14249.99) {
            $sss_contri = 1031.30;
        } else if ($gross_income >= 14250 && $gross_income <= 14749.99) {
            $sss_contri = 1068.20;
        } else if ($gross_income >= 14750 && $gross_income <= 15249.99) {
            $sss_contri = 1105.00;
        } else if ($gross_income >= 15250 && $gross_income <= 15749.99) {
            $sss_contri = 1141.80;
        } else {
            $sss_contri = 1178.70;
        }

        //philhealth contribution based from the given PhilHealth Table
        if ($gross_income <= 8999.99 && $gross_income >= 0) {
            $philH_contri = 100.00;
        } else if ($gross_income >= 9000 && $gross_income <= 9999.99) {
            $philH_contri = 112.50;
        } else if ($gross_income >= 10000 && $gross_income <= 10999.99) {
            $philH_contri = 125.00;
        } else if ($gross_income >= 11000 && $gross_income <= 11999.99) {
            $philH_contri = 137.50;
        } else if ($gross_income >= 12000 && $gross_income <= 12999.99) {
            $philH_contri = 150.00;
        } else if ($gross_income >= 13000 && $gross_income <= 13999.99) {
            $philH_contri = 162.50;
        } else if ($gross_income >= 14000 && $gross_income <= 14999.99) {
            $philH_contri = 175.00;
        } else if ($gross_income >= 15000 && $gross_income <= 15999.99) {
            $philH_contri = 187.50;
        } else if ($gross_income >= 16000 && $gross_income <= 16999.99) {
            $philH_contri = 200.00;
        } else if ($gross_income >= 17000 && $gross_income <= 17999.99) {
            $philH_contri = 212.50;
        } else if ($gross_income >= 18000 && $gross_income <= 18999.99) {
            $philH_contri = 225.00;
        } else if ($gross_income >= 19000 && $gross_income <= 19999.99) {
            $philH_contri = 237.50;
        } else if ($gross_income >= 20000 && $gross_income <= 20999.99) {
            $philH_contri = 250.00;
        } else if ($gross_income >= 21000 && $gross_income <= 21999.99) {
            $philH_contri = 262.50;
        } else if ($gross_income >= 22000 && $gross_income <= 22999.99) {
            $philH_contri = 275.00;
        } else if ($gross_income >= 23000 && $gross_income <= 23999.99) {
            $philH_contri = 287.50;
        } else if ($gross_income >= 24000 && $gross_income <= 24999.99) {
            $philH_contri = 300.00;
        } else if ($gross_income >= 25000 && $gross_income <= 25999.99) {
            $philH_contri = 312.50;
        } else if ($gross_income >= 26000 && $gross_income <= 26999.99) {
            $philH_contri = 325.00;
        } else if ($gross_income >= 27000 && $gross_income <= 27999.99) {
            $philH_contri = 337.50;
        } else if ($gross_income >= 28000 && $gross_income <= 28999.99) {
            $philH_contri = 350.00;
        } else if ($gross_income >= 29000 && $gross_income <= 29999.99) {
            $philH_contri = 362.50;
        } else if ($gross_income >= 30000 && $gross_income <= 30999.99) {
            $philH_contri = 375.00;
        } else if ($gross_income >= 31000 && $gross_income <= 31999.99) {
            $philH_contri = 387.50;
        } else if ($gross_income >= 32000 && $gross_income <= 32999.99) {
            $philH_contri = 400.00;
        } else if ($gross_income >= 33000 && $gross_income <= 33999.99) {
            $philH_contri = 412.50;
        } else if ($gross_income >= 34000 && $gross_income <= 34999.99) {
            $philH_contri = 425.00;
        } else {
            $philH_contri = 437.50;
        }

        //tax computation
        //example ( net income - from the table data) * .25 + tax from table base from

        switch (strtolower($qualified_dependents)) {

                //for zero exemption
            case "z":
                if ($gross_income <= 833 && $gross_income >= 0) {
                    $tax_contri = ((($gross_income - 0) * .05) + 0);
                } else if ($gross_income >= 834 && $gross_income <= 2500) {
                    $tax_contri = ((($gross_income - 833) * .10) + 41.67);
                } else if ($gross_income >= 2501 && $gross_income <= 5833) {
                    $tax_contri = ((($gross_income - 2500) * .15) + 208.33);
                } else if ($gross_income >= 5834 && $gross_income <= 11667) {
                    $tax_contri = ((($gross_income - 5833) * .20) + 708.33);
                } else if ($gross_income >= 11668 && $gross_income <= 20833) {
                    $tax_contri = ((($gross_income - 11667) * .25) + 1875);
                } else if ($gross_income >= 20834 && $gross_income <= 41667) {
                    $tax_contri = ((($gross_income - 20834) * .30) + 4166.67);
                } else {
                    $tax_contri = ((($gross_income - 41667) * .32) + 10416.67);
                }
                //$tax_contri=100;
                break;

                //for single or married with one qualified dependents
            case "s":
            case "me":
                if ($gross_income <= 50 && $gross_income >= 0) {
                    $tax_contri = (($gross_income - 0) + 0);
                } else if ($gross_income >= 4167 && $gross_income <= 5000) {
                    $tax_contri = ((($gross_income - 0) * .05) + 0);
                } else if ($gross_income >= 5001 && $gross_income <= 6667) {
                    $tax_contri = ((($gross_income - 5000) * .10) + 41.67);
                } else if ($gross_income >= 6668 && $gross_income <= 10000) {
                    $tax_contri = ((($gross_income - 6667) * .15) + 208.33);
                } else if ($gross_income >= 10001 && $gross_income <= 15833) {
                    $tax_contri = ((($gross_income - 10000) * .20) + 708.33);
                } else if ($gross_income >= 15834 && $gross_income <= 25000) {
                    $tax_contri = ((($gross_income - 15833) * .25) + 1875);
                } else if ($gross_income >= 25001 && $gross_income <= 45833) {
                    $tax_contri = ((($gross_income - 25000) * .30) + 4166.67);
                } else {
                    $tax_contri = ((($gross_income - 45833) * .32) + 10416.67);
                }
                //$tax_contri=100;
                break;

                //for single or married with qualified dependents
            case "me1":
            case "s1":
                if ($gross_income <= 75 && $gross_income >= 6250) {
                    $tax_contri = (($gross_income - 0) + 0);
                } else if ($gross_income >= 6251 && $gross_income <= 7083) {
                    $tax_contri = ((($gross_income - 6250) * .05) + 0);
                } else if ($gross_income >= 7084 && $gross_income <= 8750) {
                    $tax_contri = ((($gross_income - 7083) * .10) + 41.67);
                } else if ($gross_income >= 8751 && $gross_income <= 12083) {
                    $tax_contri = ((($gross_income - 8750) * .15) + 208.33);
                } else if ($gross_income >= 12084 && $gross_income <= 17917) {
                    $tax_contri = ((($gross_income - 12083) * .20) + 708.33);
                } else if ($gross_income >= 17918 && $gross_income <= 27083) {
                    $tax_contri = ((($gross_income - 17917) * .25) + 1875);
                } else if ($gross_income >= 27084 && $gross_income <= 47917) {
                    $tax_contri = ((($gross_income - 27083) * .30) + 4166.67);
                } else {
                    $tax_contri = ((($gross_income - 47917) * .32) + 10416.67);
                }
                //$tax_contri=100;
                break;

                //for single or married with qualified dependents
            case "me2":
            case "s2":
                if ($gross_income <= 100 && $gross_income >= 8333) {
                    $tax_contri = (($gross_income - 0) + 0);
                } else if ($gross_income >= 8334 && $gross_income <= 9167) {
                    $tax_contri = ((($gross_income - 8333) * .05) + 0);
                } else if ($gross_income >= 9168 && $gross_income <= 10833) {
                    $tax_contri = ((($gross_income - 9167) * .10) + 41.67);
                } else if ($gross_income >= 10834 && $gross_income <= 14167) {
                    $tax_contri = ((($gross_income - 10833) * .15) + 208.33);
                } else if ($gross_income >= 14168 && $gross_income <= 20000) {
                    $tax_contri = ((($gross_income - 14167) * .20) + 708.33);
                } else if ($gross_income >= 20001 && $gross_income <= 29167) {
                    $tax_contri = ((($gross_income - 20000) * .25) + 1875);
                } else if ($gross_income >= 29168 && $gross_income <= 50000) {
                    $tax_contri = ((($gross_income - 29167) * .30) + 4166.67);
                } else {
                    $tax_contri = ((($gross_income - 50000) * .32) + 10416.67);
                }
                //$tax_contri=100;
                break;

                //for single or married with qualified dependents
            case "me3":
            case "s3":
                if ($gross_income <= 125 && $gross_income >= 10417) {
                    $tax_contri = (($gross_income - 0) + 0);
                } else if ($gross_income >= 10418 && $gross_income <= 11250) {
                    $tax_contri = ((($gross_income - 10417) * .05) + 0);
                } else if ($gross_income >= 11251 && $gross_income <= 12917) {
                    $tax_contri = ((($gross_income - 11250) * .10) + 41.67);
                } else if ($gross_income >= 12918 && $gross_income <= 16250) {
                    $tax_contri = ((($gross_income - 12917) * .15) + 208.33);
                } else if ($gross_income >= 16251 && $gross_income <= 22083) {
                    $tax_contri = ((($gross_income - 16250) * .20) + 708.33);
                } else if ($gross_income >= 22084 && $gross_income <= 31250) {
                    $tax_contri = ((($gross_income - 22084) * .25) + 1875);
                } else if ($gross_income >= 31251 && $gross_income <= 52083) {
                    $tax_contri = ((($gross_income - 31250) * .30) + 4166.67);
                } else {
                    $tax_contri = ((($gross_income - 52083) * .32) + 10416.67);
                }
                //$tax_contri=100;
                break;

                //for single or married with qualified dependents
            case "me4":
            case "s4":
                if ($gross_income <= 150 && $gross_income >= 12500) {
                    $tax_contri = (($gross_income - 0) + 0);
                } else if ($gross_income >= 12501 && $gross_income <= 13333) {
                    $tax_contri = ((($gross_income - 12500) * .05) + 0);
                } else if ($gross_income >= 13334 && $gross_income <= 15000) {
                    $tax_contri = ((($gross_income - 13333) * .10) + 41.67);
                } else if ($gross_income >= 15001 && $gross_income <= 18333) {
                    $tax_contri = ((($gross_income - 15001) * .15) + 208.33);
                } else if ($gross_income >= 18334 && $gross_income <= 24167) {
                    $tax_contri = ((($gross_income - 18333) * .20) + 708.33);
                } else if ($gross_income >= 24168 && $gross_income <= 33333) {
                    $tax_contri = ((($gross_income - 24167) * .25) + 1875);
                } else if ($gross_income >= 33334 && $gross_income <= 54167) {
                    $tax_contri = ((($gross_income - 33333) * .30) + 4166.67);
                } else {
                    $tax_contri = ((($gross_income - 54167) * .32) + 10416.67);
                }
                //$tax_contri=100;
                break;

            default:
                $tax_contri = 0;
        }
        $total_deduct = $sss_contri + $philH_contri + $pagibig_contri + $tax_contri +
            $sss_loan
            + $pagibig_loan + $fs_deposit + $fs_loan + $salary_loan + $other_loans;
        $net_income = $gross_income - $total_deduct;

        $_SESSION['basic_income_cutoff'] = $basic_income_cutoff;
        $_SESSION['hono_income_cutoff'] = $hono_income_cutoff;
        $_SESSION['other_income_cutoff'] = $other_income_cutoff;
        $_SESSION['sss_contri'] = $sss_contri;
        $_SESSION['philH_contri'] = $philH_contri;
        $_SESSION['pagibig_contri'] = $pagibig_contri;
        $_SESSION['tax_contri'] = $tax_contri;
        $_SESSION['total_deduct'] = $total_deduct;
        $_SESSION['gross_income'] = $gross_income;
        $_SESSION['net_income'] = $net_income;


        // to press NEW button
    } else if (isset($_POST["new"])) {
        empty_inputbox();
    } else if (isset($_POST["print_preview"])) {
        // to press Print Payslip button
    } else if (isset($_POST["print_payslip"])) {
        // to press Cancel button
    } else if (isset($_POST["cancel"])) {
        empty_inputbox();
        // to press Close button
    } else if (isset($_POST["close"])) {
        header('Location: '. '/admin_page.php');
    }
}
