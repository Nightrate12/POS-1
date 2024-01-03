<?php
include 'process/payroll.php';
include 'process/earl_payroll_fill.php';
include 'process/session_check.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Joel's Store Payroll</title>
    <style>
        /* Add CSS styles for the layout and form */
        body{
            background-image: url('IMAGES/employeebackground.jpg');
            background-size: cover; 
            background-repeat: no-repeat; 
            background-attachment: fixed; 
        }
        .container {
            width: 100%;
            max-width: 1500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #000;
            border-radius: 5px;
            text-align: left;
        }
        .title {
            text-align: center;
        }
        .title img {
            max-width: 150px; /* Adjust the maximum width of the picture box */
            max-height: 150px; /* Adjust the maximum height of the picture box */
            margin: 10px 0; /* Add some spacing between the title and picture */
        }
        .employee-info {
            display: flex;
            flex-wrap: wrap; /* Wrap columns to the next line if they don't fit */
            justify-content: space-between; /* Distribute elements evenly */
            width: 100%;
        }
        .employee-info h2 {
        }
        .column {
            flex: 1;
            padding: 0 10px; /* Add horizontal spacing between columns */
            width: calc(33.33% - 20px); /* Distribute the columns evenly with some spacing */
        }
        .employee-info input {
            width: 100%;
            margin-bottom: 5px; /* Reduced margin to make input boxes more compact */
            padding: 5px;
            font-size: 14px; /* Smaller font size */
        }
        /* Style for the search button */
        .search-button {
            background-color: red;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        .search-button:hover {
            background-color: #FF0000; /* Change color on hover if desired */
        }
        .buttons {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .blue-button {
            background-color: #40E0D0;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            margin-right: 10px;
        }

        .blue-green-button {
            background-color: #088F8F; /* Blue-green color */
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            margin-right: 10px;
        }

        .yellow-button {
            background-color: yellow;
            color: black;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            margin-right: 10px;
        }

        .blue-button:hover,
        .blue-green-button:hover,
        .yellow-button:hover {
            opacity: 0.8; /* Reduce opacity on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">
            <h1>Joel's Store Payroll</h1>
            <img src="IMAGES/Null.jpg" alt="Employee Picture">
        </div>
        <div class="employee-info">
            <div class="column"> <!-- Left column -->
                <h2>Employee Basic Info</h2>
                <form action="process.php" method="POST">
                    <input type="text" name="employee_number" placeholder="Employee Number">
                    <input type="text" name="department" placeholder="Department">
                    <input type="text" name="first_name" placeholder="First Name">
                    <input type="text" name="middle_name" placeholder="Middle Name">
                    <input type="text" name="surname" placeholder="Surname">
                    <input type="text" name="civil_status" placeholder="Civil Status">
                    <input type="text" name="qualified_dependents" placeholder="Qualified Dependent Status">
                    <input type="text" name="paydate" placeholder="Paydate">
                    <input type="text" name="employee_status" placeholder="Employee Status">
                    <input type="text" name="designation" placeholder="Designation">
                    <input type="submit" name="search_employee" class="search-button" value="Search Employee">
                    <h2>Deduction Summary</h2>
                    <input type="text" name="total_deduction" placeholder="Total Deduction">
                </form>
            </div>
            <div class="column"> <!-- Right column -->
                <h2>Basic Income</h2>
                <form action="process.php" method="POST">
                    <input type="text" name="rate_per_hour" placeholder="Rate/Hour:">
                    <input type="text" name="hours_per_cut_off"  placeholder="No. of Hours/Cut Off:">
                    <input type="text" name="income_per_cut_off" placeholder="Income/Cut Off:">
                </form>
                <h2>Honorarium Income</h2>
                <form action="process.php" method="POST">
                    <input type="text" name="honorarium_rate_per_hour" placeholder="Rate/Hour">
                    <input type="text" name="hours_per_cut_off" placeholder="No. of Hours/Cut Off">
                    <input type="text" name="income_per_cut_off" placeholder="Income/Cut Off">
                </form>
                <h2>Other Income</h2>
                <form action="process.php" method="POST">
                    <input type="text" name="honorarium_rate_per_hour" placeholder="Rate/Hour">
                    <input type="text" name="hours_per_cut_off" placeholder="No. of Hours/Cut Off">
                    <input type="text" name="income_per_cut_off" placeholder="Income/Cut Off">
                </form>
            </div>
            <div class="column"> <!-- Right column -->
                <h2>Regular Deductions</h2>
                <form action="process.php" method="POST">
                    <input type="text" name="sss_contribution" placeholder="SSS Contribution">
                    <input type="text" name="philhealth_contribution" placeholder="Philhealth Contribution">
                    <input type="text" name="pagibig_contribution" placeholder="Pagibig Contribution">
                    <input type="text" name="income_tax_contribution" placeholder="Income Tax Contribution">
                </form>
                <h2>Other Deductions</h2>
                <form action="process.php" method="POST">
                    <input type="text" name="sss_loan" placeholder="SSS Loan">
                    <input type="text" name="pagibig_loan" placeholder="Pagibig Loan">
                    <input type="text" name="faculty_savings_deposit" placeholder="Faculty Savings Deposit">
                    <input type="text" name="faculty_savings_loan" placeholder="Faculty Savings Loan">
                    <input type="text" name="salary_loan" placeholder="Salary Loan">
                    <input type="text" name="other_loan" placeholder="Other Loans">
                </form>
            </div>
        </div>
        <!-- Add buttons below the form -->
        <div class="buttons">
            <button class="blue-button">Gross Income</button>
            <button class="blue-button">Net Income</button>
            <button class="blue-green-button">Save and Update</button>
            <button class="yellow-button">New</button>
        </div>
    </div>
</body>
</html>
