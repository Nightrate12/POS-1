<?php
include 'process/db_connection.php';
//include 'process/session_check.php';
$conn = OpenCon();
$sql = "SELECT * FROM `salestbl`;";


$result = $conn->query($sql);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $item_name = $_POST['search'];
    $sql = "SELECT * FROM `salestbl` WHERE item_name = '$item_name' OR id = '$item_name';";
    $result = $conn->query($sql);
    if (!$item_name) {
        $sql = "SELECT * FROM `salestbl`;";
        $result = $conn->query($sql);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>


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
<div class="sidebar">
    <h2>Joel's Store</h2>
    <ul>
        <li><a href="home_page.php">Home</a></li>
        <li><a href="employee_registration_save.php">Employee Registration</a></li>
        <li><a href="employee_listview.php">Employee Report</a></li>
        <li><a href="payroll_lab4.php">Payroll</a></li>
        <li><a href="payroll_listview.php">Payroll Report</a></li>
        <li><a href="perfume.php">POS</a></li>
        <li><a href="pos_listview">POS Sales Report</a></li>
        <li><a href="user_account_page.php">User Account</a></li>
        <li><a href="login.php">Logout</a></li>

    </ul>
</div>
<!-- main content -->
<div class="flex-grow-1 bg-white">
    <div class="container bg-white">
        <h1 class="d-flex justify-content-center m-2" style="font-size:30px;">POS Report</h1>
        <form action="" method="post" class="input-group mb-3 mt-3" style="height: 2rem; width:250px">
            <input type="text" class="form-control" aria-describedby="button-addon2" placeholder="Search item name"
                name='search'>
            <button class="btn btn-outline-secondary" type="submit" id="search_button"> <svg
                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 24 24"
                    class="">
                    <path
                        d="M 9 2 C 5.1458514 2 2 5.1458514 2 9 C 2 12.854149 5.1458514 16 9 16 C 10.747998 16 12.345009 15.348024 13.574219 14.28125 L 14 14.707031 L 14 16 L 20 22 L 22 20 L 16 14 L 14.707031 14 L 14.28125 13.574219 C 15.348024 12.345009 16 10.747998 16 9 C 16 5.1458514 12.854149 2 9 2 z M 9 4 C 11.773268 4 14 6.2267316 14 9 C 14 11.773268 11.773268 14 9 14 C 6.2267316 14 4 11.773268 4 9 C 4 6.2267316 6.2267316 4 9 4 z">
                    </path>
                </svg></button>
        </form>
        <table class="table table-bordered table-hover" id="user_table">
            <thead>
                <tr>
                    <th class="bg-maroon" scope="col">Product Name</th>
                    <th class="bg-maroon" scope="col">Quantity</th>
                    <th class="bg-maroon" scope="col">Product Price</th>
                    <th class="bg-maroon" scope="col">Discount Amount</th>
                    <th class="bg-maroon" scope="col">Discounted Amount</th>
                    <th class="bg-maroon" scope="col">Discount Option</th>
                    <th class="bg-maroon" scope="col">Cash Given</th>
                    <th class="bg-maroon" scope="col">Change</th>
                    <th class="bg-maroon" scope="col">Sale ID</th>

                </tr>
            </thead>
            <tbody>
                <?php
                if ($result) {
                    while ($item = $result->fetch_assoc()) {
                        echo "
                                <tr class='clickable-row' style='cursor: pointer' data-href='{$item['item_type']}.php?id={$item['id']}'>
                                <td class='border'>$item[item_name]</td>
                                <td class='border'>$item[quantity]</td>
                                <td class='border'>$item[price]</td>
                                <td class='border'>$item[discount_amount]</td>
                                <td class='border'>$item[discounted_amount]</td>
                                <td class='border'>$item[discount_option]</td>
                                <td class='border'>$item[cash_given]</td>
                                <td class='border'>$item[customer_change]</td>
                                <td class='border'>$item[id]</td>
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

</body>
<script>
    $(document).ready(function () {
        $(".clickable-row").click(function () {
            window.location = $(this).data("href")
        })
    })
</script>

</html>