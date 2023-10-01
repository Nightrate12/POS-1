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
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];

            // You can add your login logic here, e.g., checking the username and password against a database.
            
            // For this example, we'll just redirect to a welcome page on successful login.
            if ($username === "admin" && $password === "admin") {
                header("Location:home_page.php");
                exit();
            } else {
                echo "Invalid username or password. Please try again.";
            }
        }
        ?>
        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>