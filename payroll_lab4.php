<?php
error_reporting(E_ALL);
ini_set("display_errors", "On");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--CSS STYLE -->
    <link rel="stylesheet" href="css/payroll_style.css">
    <script src='js/payroll_save.js'> </script>
    <style>
        body {
            background-image: url('IMAGES/homebackground.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .sidebar a:hover {
            color: #00ffff;
        }

        /* Sidebar Styles */
        .sidebar {
            background-color: #333;
            color: #fff;
            width: 250px;
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
        }

        .sidebar a {
            display: block;
            color: #fff;
            padding: 10px 0;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="row flex">
        <div class="sidebar">
            <h2>Joel's Store</h2>
            <ul>
                <li><a href="home_page.php">Home</a></li>
                <li><a href="employee_registration_save.php">Employee Registration</a></li>
                <li><a href="employee_listview.php">Employee Report</a></li>
                <li><a href="payroll_lab4.php">Payroll</a></li>
                <li><a href="payroll_listview.php">Payroll Report</a></li>
                <li><a href="perfume.php">POS</a></li>
                <li><a href="#">POS Sales Report</a></li>
                <li><a href="user_account_page.php">User Account</a></li>
                <li><a href="login.php">Logout</a></li>

            </ul>
        </div>
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
        $employee_no = "2021-2-01379";
        $department = "Department of Computer Studies";
        $firstname = "Daniel John";
        $mname = "Villanueva";
        $surname = "Catamio";
        $civil_status = "Single";
        $designation = "Student";
        $qualified_dependents = "ME";
        $paydate = "March 31, 2023";
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
                $sss_contri = 180;
                for ($i = 0; $i < 52; $i++) {
                    if ($gross_income >= 4250 + $i * 500 && $gross_income <= 4749.99 + $i * 500) {
                        $sss_contri = 202.50 + $i * 22.50;
                        break;
                    } else if ($gross_income >= 29750) {
                        $sss_contri = 1350;
                    }
                }
                //philhealth contribution based from the given PhilHealth Table
                if ($gross_income <= 10000.00 && $gross_income >= 0) {
                    $philH_contri = 450.00;
                } else if ($gross_income >= 10000.01 && $gross_income <= 89999.99) {
                    $philH_contri = $gross_income * 0.045;
                } else {
                    $philH_contri = 4050.00;
                }

                //tax computation
                //example ( net income - from the table data) * .25 + tax from table base from net income range
                if ($gross_income <= 0 && $gross_income <= 10417) {
                    $tax_contri = $gross_income * 0;
                } else if ($gross_income > 10417 && $gross_income <= 16666) {
                    $tax_contri = $gross_income * 0.20;
                } else if ($gross_income >= 16667 && $gross_income <= 33332) {
                    $tax_contri = $gross_income * 0.25;
                } else if ($gross_income >= 33333 && $gross_income <= 83332) {
                    $tax_contri = $gross_income * 0.30;
                } else if ($gross_income >= 83333 && $gross_income <= 333332) {
                    $tax_contri = $gross_income * 0.32;
                } else if ($gross_income >= 333333) {
                    $tax_contri = $gross_income * 0.32;
                }
                //$tax_contri=100;
        
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
                $sss_contri = 180;
                for ($j = 0; $j < 52; $j++) {
                    if ($gross_income >= 4250 + $j * 500 && $gross_income <= 4749.99 + $j * 500) {
                        $sss_contri = 202.50 + $j * 22.50;
                    } else if ($gross_income >= 29750) {
                        $sss_contri = 1350;
                    }
                }

                //philhealth contribution based from the given PhilHealth Table
                if ($gross_income <= 10000.00 && $gross_income >= 0) {
                    $philH_contri = 450.00;
                } else if ($gross_income >= 10000.01 && $gross_income <= 89999.99) {
                    $philH_contri = $gross_income * 0.045;
                } else {
                    $philH_contri = 4050.00;
                }

                //tax computation
                //example ( net income - from the table data) * .25 + tax from table base from net income range
        
                if ($gross_income <= 0 && $gross_income <= 10417) {
                    $tax_contri = $gross_income * 0;
                } else if ($gross_income > 10417 && $gross_income <= 16666) {
                    $tax_contri = $gross_income * 0.20;
                } else if ($gross_income >= 16667 && $gross_income <= 33332) {
                    $tax_contri = $gross_income * 0.25;
                } else if ($gross_income >= 33333 && $gross_income <= 83332) {
                    $tax_contri = $gross_income * 0.30;
                } else if ($gross_income >= 83333 && $gross_income <= 333332) {
                    $tax_contri = $gross_income * 0.32;
                } else if ($gross_income >= 333333) {
                    $tax_contri = $gross_income * 0.32;
                }
                //$tax_contri=100;
        
                $total_deduct = $sss_contri + $philH_contri + $pagibig_contri + $tax_contri + $sss_loan + $pagibig_loan + $fs_deposit + $fs_loan + $salary_loan + $other_loans;
                $net_income = $gross_income - $total_deduct;

                // to press NEW button
            } else if (isset($_POST["new"])) {
                empty_inputbox();
                // $employee_no="";
                //$department="";
                // $firstname="";
                // $mname="";
                // $surname="";
                //$civil_status="";
                //$designation="";
                // $qualified_dependents="";
                // $paydate="";
                // $emp_status="";
        
                //decleration of variables where inputs are stored
                // $basic_rate_hour="";
                // $basic_num_hours_cutoff="";
                // $hono_rate_hour="";
                // $hono_num_hours_cutoff="";
                // $other_rate_hour="";
                // $other_num_hours_cutoff="";
                // $sss_contri=0.00;
                // $philH_contri=0.00;
                // $pagibig_contri=100.00;
                // $tax_contri=0.00;
                // $sss_loan="";
                // $pagibig_loan="";
                // $fs_deposit="";
                // $fs_loan="";
                // $salary_loan="";
                // $other_loans="";
        
                // to press Print Preview Payslip button
            } else if (isset($_POST["print_preview"])) {
                echo "PRINT PREVIEW";

                // to press Print Payslip button
            } else if (isset($_POST["print_payslip"])) {
                echo "PRINT PAYSLIP";

                // to press Cancel button
            } else if (isset($_POST["cancel"])) {
                empty_inputbox();

                // to press Close button
            } else if (isset($_POST["close"])) {
                echo "CLOSE";
            }
        }
        ?>

        <div class="container">
            <div class="page_border">
                <h1 class="text-center" style="padding-top:10px; padding-bottom:10px; fontweight:bold;">Joel's Store
                    Payroll Application</h1>
                <h5 style="padding-top:10px; font-weight:bold;">EMPLOYEE BASIC INFO:</h5>
                <form action="payroll_lab4.php" method="POST">
                    <div class="payrol_form_group1">
                        <div style="float:left; width:50%;">
                            <div style="margin-left:100px; margin-top:10px;">
                                <img src="IMAGES/Null.jpg" class="imgthumbnail" style="width:250px;" alt="user profile">
                                <input type="file" style="margintop:10px; text:center;" name="file">
                            </div>

                            <div>
                                <span style="margin-top:20px;">Employee Number:</span>
                                <input type="text" class="formcontrol input_box1" style="margintop:20px;"
                                    id="employee_no" name="employee_no" value="<?php echo $employee_no; ?>" disabled>
                            </div>
                            <div>

                                <span>Department:</span>
                                <input type="text" class="formcontrol input_box1" id="department" name="department"
                                    value="<?php echo $department; ?>" disabled>
                            </div>
                            <div>
                                <button type="submit" name="cancel" class="btn btn-danger"
                                    style="padding:5px; width:100px; margin-left:200px;">SEARCH&#128269</button>
                            </div>
                        </div>
                        <div class="payrol_form_group1" style="width:50%; margin:right; margintop:36px;">
                            <div>
                                <span>Firstname:</span>
                                <input type="text" class="formcontrol input_box1" id="firstname" name="firstname"
                                    value="<?php echo $firstname; ?>" disabled>
                            </div>
                            <div>
                                <span>Middle Name:</span>
                                <input type="text" class="formcontrol input_box1" id="mname" name="mname"
                                    value="<?php echo $mname; ?>" disabled>
                            </div>
                            <div>
                                <span>Surname:</span>
                                <input type="text" class="formcontrol input_box1" id="surname" name="surname"
                                    value="<?php echo $surname; ?>" disabled>
                            </div>
                            <div>
                                <span>Civil Status:</span>
                                <input type="text" class="formcontrol input_box1" id="civil_status" name="civil_status"
                                    value="<?php echo $civil_status; ?>" disabled>
                            </div>
                            <div>
                                <span>Designation:</span>
                                <input type="text" class="formcontrol input_box1" id="designation" name="designation"
                                    value="<?php echo $designation; ?>" disabled>
                            </div>
                            <div>
                                <span>Qualified Dependents Status:</span>
                                <input type="text" class="formcontrol input_box1" id="qualified_dependents"
                                    name="qualified_dependents" value="<?php echo $qualified_dependents; ?>">
                            </div>
                            <div>
                                <span>Paydate:</span>
                                <input type="text" class="formcontrol input_box1" id="paydate" name="paydate"
                                    value="<?php echo $paydate; ?>" disabled>
                            </div>
                            <div>
                                <span>Employee Status:</span>
                                <input type="text" class="formcontrol input_box1" id="emp_status" name="emp_status"
                                    value="<?php echo $emp_status; ?>" disabled>
                            </div>
                        </div>

                    </div>
                    <div>
                        <div class="payrol_form_group">
                            <div style="float:left; width:50%;">
                                <div>
                                    <h5 style="padding-top:10px; padding-bottom:10px; fontweight:bold;">BASIC INCOME:
                                    </h5>
                                </div>
                                <div>
                                    <span>Rate / Hour:</span>
                                    <input type="text" class="formcontrol input_box" id="basic_rate_hour"
                                        name="basic_rate_hour" value="<?php echo $basic_rate_hour; ?>">
                                </div>
                                <div>
                                    <span>No. of Hours / Cut Off:</span>
                                    <input type="text" class="formcontrol input_box" id="basic_num_hours_cutoff"
                                        name="basic_num_hours_cutoff" value="<?php echo $basic_num_hours_cutoff; ?>">
                                </div>
                                <div>
                                    <span>Income / Cut Off:</span>
                                    <input type="text" class="formcontrol input_box" id="basic_income_cutoff"
                                        name="basic_income_cutoff" value="<?php echo $basic_income_cutoff; ?>" disabled>
                                </div>
                                <div>

                                    <h5 style="padding-top:10px; padding-bottom:10px; fontweight:bold;">HONORARIUM
                                        INCOME:</h5>
                                </div>
                                <div>
                                    <span>Rate / Hour:</span>
                                    <input type="text" class="formcontrol input_box" id="hono_rate_hour"
                                        name="hono_rate_hour" value="<?php echo $hono_rate_hour; ?>">
                                </div>
                                <div>
                                    <span>No. of Hours / Cut Off:</span>
                                    <input type="text" class="formcontrol input_box" id="hono_num_hours_cutoff"
                                        name="hono_num_hours_cutoff" value="<?php echo $hono_num_hours_cutoff; ?>">
                                </div>
                                <div>
                                    <span>Income / Cut Off:</span>
                                    <input type="text" class="formcontrol input_box" id="hono_income_cutoff"
                                        name="hono_income_cutoff" value="<?php echo $hono_income_cutoff; ?>" disabled>
                                </div>
                                <div>
                                    <h5 style="padding-top:10px; padding-bottom:10px; fontweight:bold;">OTHER INCOME:
                                    </h5>
                                </div>
                                <div>
                                    <span>Rate / Hour:</span>
                                    <input type="text" class="formcontrol input_box" id="other_rate_hour"
                                        name="other_rate_hour" value="<?php echo $other_rate_hour; ?>">
                                </div>
                                <div>
                                    <span>No. of Hours / Cut Off:</span>
                                    <input type="text" class="formcontrol input_box" id="other_num_hours_cutoff"
                                        name="other_num_hours_cutoff" value="<?php echo $other_num_hours_cutoff; ?>">
                                </div>
                                <div>
                                    <span>Income / Cut Off:</span>
                                    <input type="text" class="formcontrol input_box" id="other_income_cutoff"
                                        name="other_income_cutoff" value="<?php echo $other_income_cutoff; ?>" disabled>
                                </div>
                                <div>

                                    <h5 style="padding-top:10px; padding-bottom:10px; fontweight:bold;">SUMMARY INCOME:
                                    </h5>
                                </div>
                                <div>
                                    <span>GROSS INCOME:</span>
                                    <input type="text" class="formcontrol input_box" id="gross_income"
                                        name="gross_income" value="<?php echo $gross_income; ?>" disabled>
                                </div>
                                <div>
                                    <span>NET INCOME:</span>
                                    <input type="text" class="formcontrol input_box" id="net_income" name="net_income"
                                        value="<?php echo $net_income; ?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="deduction_form_group" style="width:50%; margin:right; float:right;">
                            <div>
                                <div>
                                    <h5 style="padding-top:10px; padding-bottom:10px; fontweight:bold;">REGULAR
                                        DEDUCTIONS:</h5>
                                </div>
                                <div>
                                    <span>SSS Contribution:</span>
                                    <input type="text" class="formcontrol deduction_box" id="sss_contri"
                                        name="sss_contri" value="<?php echo $sss_contri; ?>" disabled>
                                </div>
                                <div>
                                    <span>PhilHealth Contribution:</span>
                                    <input type="text" class="formcontrol deduction_box" id="philH_contri"
                                        name="philH_contri" value="<?php echo $philH_contri; ?>" disabled>
                                </div>
                                <div>
                                    <span>Pagibig Contribution:</span>
                                    <input type="text" class="formcontrol deduction_box" id="pagibig_contri"
                                        name="pagibig_contri" value="<?php echo $pagibig_contri; ?>" disabled>
                                </div>
                                <div>
                                    <span>Income Tax Contribution:</span>
                                    <input type="text" class="formcontrol deduction_box" id="tax_contri"
                                        name="tax_contri" value="<?php echo $tax_contri; ?>" disabled>
                                </div>
                                <div>
                                    <h5 style="padding-top:10px; padding-bottom:10px; fontweight:bold;">OTHER
                                        DEDUCTIONS:</h5>
                                </div>
                                <div>
                                    <span>SSS Loan:</span>
                                    <input type="text" class="formcontrol deduction_box" id="sss_loan" name="sss_loan"
                                        value="<?php echo $sss_loan; ?>">
                                </div>
                                <div>
                                    <span>Pagibig Loan:</span>
                                    <input type="text" class="formcontrol deduction_box" id="pagibig_loan"
                                        name="pagibig_loan" value="<?php echo $pagibig_loan; ?>">
                                </div>
                                <div>
                                    <span>Faculty Savings Deposit:</span>
                                    <input type="text" class="formcontrol deduction_box" id="fs_deposit"
                                        name="fs_deposit" value="<?php echo $fs_deposit; ?>">
                                </div>
                                <div>
                                    <span>Faculty Savings Loan:</span>
                                    <input type="text" class="formcontrol deduction_box" id="fs_loan" name="fs_loan"
                                        value="<?php echo $fs_loan; ?>">
                                </div>
                                <div>
                                    <span>Salary Loan:</span>
                                    <input type="text" class="formcontrol deduction_box" id="salary_loan"
                                        name="salary_loan" value="<?php echo $salary_loan; ?>">
                                </div>
                                <div>
                                    <span>Other Loans:</span>
                                    <input type="text" class="formcontrol deduction_box" id="other_loans"
                                        name="other_loans" value="<?php echo $other_loans; ?>">
                                </div>
                                <div>
                                    <h5 style="padding-top:10px; padding-bottom:10px; fontweight:bold;">DEDUCTION
                                        SUMMARY:</h5>
                                </div>
                                <div>
                                    <span>Total Deductions:</span>
                                    <input type="text" class="formcontrol deduction_box" id="total_deduct"
                                        name="total_deduct" value="<?php echo $total_deduct ?>" disabled>
                                </div>
                                <div>
                                    <div>
                                        <button type="submit" name="calculate_gross_income" class="btn btn-primary"
                                            style="padding:5px; margin-bottom:5px;">CALCULATE GROSS INCOME</button>
                                        <button type="submit" name="calculate_net_income" class="btn btn-primary"
                                            style="padding:5px; margin-bottom:5px;">CALCULATE NET INCOME</button>
                                        <button type="submit" name="new" class="btn btn-warning"
                                            style="padding:5px; margin-bottom:5px; width:100px;">NEW</button>
                                        <button type="submit" name="save" id="save" class="btn btn-info"
                                            style="padding:5px;">SAVE</button>
                                        <button type="submit" name="print_payslip" class="btn btn-info"
                                            style="padding:5px; width:117px;">PRINT PAYSLIP</button>
                                        <button type="submit" name="cancel" class="btn btn-danger"
                                            style="padding:5px; width:100px;">CANCEL</button>
                                        <button type="submit" name="close" class="btn btn-dark"
                                            style="padding:5px; width:100px;">CLOSE</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</body>

</html>