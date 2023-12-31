<?php
include 'process/db_connection.php';
include 'process/session_check.php';
$conn = OpenCon();
$sql = "SELECT * FROM incometbl JOIN personal_infotbl ON incometbl.employee_no = personal_infotbl.employee_no JOIN deductiontbl ON incometbl.employee_no = deductiontbl.employee_no;";
$result = $conn->query($sql);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $item_name = $_POST['search'];
    if (!$item_name) {
        $sql = "SELECT * FROM incometbl JOIN personal_infotbl ON incometbl.employee_no = personal_infotbl.employee_no JOIN deductiontbl ON incometbl.employee_no = deductiontbl.employee_no;";
        $result = $conn->query($sql);
    } else {
        $sql = "SELECT * FROM incometbl JOIN personal_infotbl ON incometbl.employee_no = personal_infotbl.employee_no JOIN deductiontbl ON incometbl.employee_no = deductiontbl.employee_no WHERE personal_infotbl.employee_no = $item_name;";
        $result = $conn->query($sql);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll List View</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/payroll_listview.js"></script>
    <style>
        table tr:hover {
            cursor: pointer;
        }

        table thead {
            background: maroon;
        }

        table thead tr th {
            color: #fff;
        }

        body {
            background-image: url('IMAGES/employeebackground.jpg');
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
    <div class="sidebar">
        <h2>Joel's Store</h2>
        <ul style="list-style-type:none; list-style-image: none;">
                <li><a href="home_page.php">Home</a></li>
                <li><a href="employee_registration_save.php"
                        class="<?php echo $user_privilege == 1 ? '' : 'd-none' ?>">Employee Registration</a></li>
                <li><a href="employee_listview.php" class="<?php echo $user_privilege == 1 ? '' : 'd-none' ?>">Employee
                        Report</a></li>
                <li><a href="payroll_lab4.php"
                        class="<?php echo ($user_privilege == 1 || $user_privilege == 2) ? '' : 'd-none' ?>">Payroll</a>
                </li>
                <li><a href="payroll_listview.php"
                        class="<?php echo ($user_privilege == 1 || $user_privilege == 2) ? '' : 'd-none' ?>">Payroll
                        Report</a></li>
                <li><a href="perfume.php"
                        class="<?php echo ($user_privilege == 1 || $user_privilege == 3) ? '' : 'd-none' ?>">POS</a>
                </li>
                <li><a href="pos_listview.php"
                        class="<?php echo ($user_privilege == 1 || $user_privilege == 3) ? '' : 'd-none' ?>">POS Sales
                        Report</a></li>
                <li><a href="user_account_page.php" class="<?php echo ($user_privilege == 1) ? '' : 'd-none' ?>">User
                        Account</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </ul>
    </div>

    <div class="container">
        <h2 style="margin-top:30px; margin-bottom:5px;"> Employee's Payroll List</h2>
        <form id="form-users-list" action="" method="POST">
            <div style="float:right;">
                <span style="margin-top:5px;">Employee Number</span>
                <input type="text" style="margin-top:5px;" id="employee_no" name="employee_no">
                <button id="search" type="submit" name="search_btn" class="btn btn-danger"
                    style="padding:5px; margin-bottom:5px;">SEARCH</button>
            </div>
            <table class="table table-bordered table-hover" id="user_table">
                <thead>
                    <tr>
                        <th>Employee Number</th>
                        <th>Employee Name</th>
                        <th>Basic Income</th>
                        <th>Honorarium Income</th>
                        <th>Other Income</th>
                        <th>Gross Income</th>
                        <th>Total Deduction</th>
                        <th>Net Income</th>
                        <th>Paydate</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result) {
                        while ($item = $result->fetch_assoc()) {
                            echo "
                    <tr class='clickable-row border' style='cursor: pointer' data-href='payroll_lab4.php?id={$item['employee_no']}'>
                        <td class='py-6 ps-6 border'>$item[employee_no]</td>
                        <td class='py-6 ps-6 border'>$item[fname] $item[mname] $item[lname]</td>
                        <td class='py-6 ps-6 border'>$item[basic_income]</td>
                        <td class='py-6 ps-6 border'>$item[hono_income]</td>
                        <td class='py-6 ps-6 border'>$item[other_income]</td>
                        <td class='py-6 ps-6 border'>$item[gross_income]</td>
                        <td class='py-6 ps-6 border'>$item[total_deduction]</td>
                        <td class='py-6 ps-6 border'>$item[net_income]</td>
                        <td class='py-6 ps-6 border'>$item[income_date]</td>
                    </tr>
                    ";
                        }
                    }
                    ?>
                </tbody>
            </table>
    </div>
    </form>
</body>
<script>
    $(document).ready(function() {
        $(".clickable-row").click(function() {
            window.location = $(this).data("href")
        })
    })
</script>
</html>