<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        /* General Styles */
        body {
                font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            background-image: url('IMAGES/homebackground.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        /* Sidebar Styles */
        .sidebar {
            background-color: #333;
            color: #fff;
            width: 230px;
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

        /* Content Styles */
        .content {
            margin-left: 260px;
            padding: 20px;
        }

        /* Header Styles */
        header {
            background-color: #444;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        .sidebar a:hover {
            color: #00ffff;
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
            <li><a href="perfume.php">POS</a></li>
            <li><a href="pos_listview.php">POS Sales Report</a></li>
            <li><a href="user_account_page.php">User Account</a></li>
            <li><a href="login.php">Logout</a></li>

        </ul>
    </div>

    <div class="content">
        <header>
            <h1>Welcome to Joel's Store</h1>
        </header>

        <h2>Joel's Store</h2>
        <p>All the items you neeed is here</p>
    </div>
</body>

</html>