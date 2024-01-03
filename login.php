
<?php

include 'process/db_connection.php';
$conn = OpenCon();
$sql = "SELECT * FROM user_accounttbl;";
$result = $conn->query($sql);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$user = $_POST['user'];
	$pass = $_POST['password'];
	$sql = "SELECT COUNT(*) AS count
    FROM user_accounttbl
    WHERE username = '$user' AND password = '$pass';
    ";
	$result = mysqli_fetch_assoc($conn->query($sql));

	if ($result['count'] > 0 && $user != "" && $pass != "") {
		$sql = "SELECT * FROM user_accounttbl WHERE username = '$user' AND password = '$pass';";
		$result = mysqli_fetch_assoc($conn->query($sql));
		session_start();
		$_SESSION['privilege'] = $result['privilege'];
		$_SESSION['username'] = $result['username'];
		$_SESSION['employee_no'] = $result['employee_no'];
		
		if($_SESSION['privilege'] == 1){
			header("Refresh:0; url=home_page.php");
		}elseif($_SESSION['privilege'] == 2){
			header("Refresh:0; url=payroll_lab4.php");
		}elseif($_SESSION['privilege'] == 3){
			header("Refresh:0; url=perfume.php");
		}
		
		exit();
	} else {
		echo "<script>";
		echo "alert('Invalid credentials!');";
		echo "</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
        background-image: url('IMAGES/logbg.jpg');
        background-size: cover; 
        background-repeat: no-repeat; 
        background-attachment: fixed; 
    }
    input[type="text"],input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid black; /* Add this line to set the black border */
    border-radius: 10px;
    margin-bottom: 10px;
    box-sizing: border-box;
    background-color: #d8d8d8;
}
        </style>
</head>
<body>
    <div class="logo">
        <img src="IMAGES/LOGO.png" alt="Company Logo">
    </div>
    <div class="login-container">
        <h2>Login</h2>
        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" id="user" name="user" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>