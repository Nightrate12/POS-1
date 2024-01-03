<?php
include 'process/db_connection.php';
include 'process/session_check.php';

$conn = OpenCon();
$sql = "SELECT * FROM `personal_infotbl`;";
$result = $conn->query($sql);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $item_name = $_POST['search'];
    $sql = "SELECT * FROM `personal_infotbl` WHERE employee_no = '$item_name' OR id = '$item_name';";
    $result = $conn->query($sql);
    if (!$item_name) {
        $sql = "SELECT * FROM `personal_infotbl`;";
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
    <title>Employee List View</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- script src="js/admin_page.js?v.2"></script> -->
    <script src="js/employee_listview.js?v.2"></script>
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
        <ul>
            <li><a href="home_page.php">Home</a></li>
            <li><a href="employee_registration_save.php">Employee Registration</a></li>
            <li><a href="employee_listview.php">Employee Report</a></li>
            <li><a href="payroll_lab4.php">Payroll</a></li>
            <li><a href="payroll_listview.php">Payroll Report</a></li>
            <li><a href="secret_shop.php">POS</a></li>
            <li><a href="pos_listview.php">POS Sales Report</a></li>
            <li><a href="user_account_page.php">User Account</a></li>
            <li><a href="login.php">Logout</a></li>

        </ul>
    </div>
    <div class="container">
        <h2 style="margin-top:30px; margin-bottom:5px;">Company Employee's List</h2>
        <form id="form-user-list" action="" method="POST">
            <div style="float:right;">
                <span style="margin-top:5px;">Employee Number: </span>
                <input type="text" style="margin-top:5px;" id="employee_no" name="employee_no">
                <button id="search" type="submit" name="search_btn" class="btn btn-danger"
                    style="padding:5px; margin-bottom:5px;">SEARCH</button>
            </div>
            <table class="table table-bordered table-hover" id="user_table">
                <thead>
                    <tr>
                        <th>Employee Number</th>
                        <th>Employee Name</th>
                        <th>Date of Birth</th>
                        <th>Qual. Dependents</th>
                        <th>Civil Status</th>
                        <th>Department</th>
                        <th>Designation</th>
                        <th>Employee Status</th>
                    </tr>
                </thead>
                <tbody>
                                <?php
                                if ($result) {
                                    while ($item = $result->fetch_assoc()) {
                                        echo "
                                <tr class='clickable-row' style='cursor: pointer' data-href='employee_registration_save.php?id={$item['id']}'>
                                    <td class='py-6 ps-6 border'>$item[employee_no]</td>
                                    <td class='py-6 ps-6 border'>$item[fname] $item[mname] $item[lname]</td>
                                    <td class='py-6 ps-6 border'>$item[birth_date]</td>
                                    <td class='py-6 ps-6 border'>$item[qualified_dependent_status]</td>
                                    <td class='py-6 ps-6 border'>$item[civil_status]</td>
                                    <td class='py-6 ps-6 border'>$item[department]</td>
                                    <td class='py-6 ps-6 border'>$item[designation]</td>
                                    <td class='py-6 ps-6 border'>$item[employee_status]</td>
                                </tr>
                                ";
                                    }
                                }
                                ?>
                            </tbody>
            </table>
    </div>
    </form>
    </div>
</body>
<script>
    $(document).ready(function() {
        $(".clickable-row").click(function() {
            window.location = $(this).data("href")
        })
    })
</script>
</html>