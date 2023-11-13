<?php
include 'process/db_connection.php';
$conn = OpenCon();
$sql = "SELECT * FROM `incometbl`";
$result = $conn->query($sql);

$conn->close();
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
    </style>
</head>

<body>
    <div class="container">
        <h2 style="margin-top: 30px; margin-bottom:5px;">Employee's
            Payroll List</h2>
        <form id="form-users-list" action="" method="POST">
            <div style="float: right;">
                <span style="margin-top:5px;">Employee Number:</span>
                <input type="text" style="margin-top:5px;" id="employee_no" name="employee_no">
                <button id="search" type="submit" name="search_btn" class="btn btn-danger" style="padding:5px; margin-bottom:5px;">SEARCH</button>
            </div>
            <table class="table table-bordered table-hover" id="user_table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Employee Number</th>
                        <th>Income date</th>
                        <th>Basic Rate Hour</th>
                        <th>Basic Num Hrs</th>
                        <th>Basic Income</th>
                        <th>Hono Rate Hour</th>
                        <th>Hono Num Hrs</th>
                        <th>Hono Income</th>
                        <th>Other Rate Hour</th>
                        <th>Other Num Hrs</th>
                        <th>Other Income</th>
                        <th>Gross Income</th>
                        <th>Net Income</th>
                    </tr>
                </thead>
                </tbody>
                <?php
                if ($result) {
                    while ($item = $result->fetch_assoc()) {
                        echo "
                    <tr>
                        <td class='py-6 ps-6'>$item[id]</td>
                        <td class='py-6 ps-6'>$item[employee_no]</td>
                        <td class='py-6 ps-6'>$item[income_date]</td>
                        <td class='py-6 ps-6'>$item[basic_rate_hour]</td>
                        <td class='py-6 ps-6'>$item[basic_num_hrs]</td>
                        <td class='py-6 ps-6'>$item[basic_income]</td>
                        <td class='py-6 ps-6'>$item[hono_rate_hour]</td>
                        <td class='py-6 ps-6'>$item[hono_num_hrs]</td>
                        <td class='py-6 ps-6'>$item[hono_income]</td>
                        <td class='py-6 ps-6'>$item[other_rate_hour]</td>
                        <td class='py-6 ps-6'>$item[other_num_hrs]</td>
                        <td class='py-6 ps-6'>$item[other_income]</td>
                        <td class='py-6 ps-6'>$item[gross_income]</td>
                        <td class='py-6 ps-6'>$item[net_income]</td>
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
</html>