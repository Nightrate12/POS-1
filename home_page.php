<?php
include 'process/db_connection.php';
include 'process/session_check.php';

$conn = OpenCon();
$sql = "SELECT * FROM `salestbl` ORDER BY id DESC LIMIT 5;";
$result = $conn->query($sql);

$sql2 = "SELECT id FROM `personal_infotbl`;";
$result2 = mysqli_fetch_all($conn->query($sql2));

$sql3 = "SELECT COUNT(privilege) AS privilege_count FROM user_accounttbl WHERE privilege != 0 GROUP BY privilege WITH ROLLUP;";
$result3 = mysqli_fetch_all($conn->query($sql3));
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
        .content {
            margin-left: 260px;
            padding: 20px;
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

    <div class="content" style=margin-left:300px;>
        <header>
            <h1>Welcome to Joel's Store</h1>
        </header>

        <h2>Joel's Store</h2>
        <p>All the items you neeed is here</p>
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
                data: [result3['0'], result3['2'], result3['1']],
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