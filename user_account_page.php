<?php
// Include any necessary validation and processing logic here
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and process form data
    // Replace this with your validation and processing code
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            background-image: url('IMAGES/employeebackground.jpg');
            background-size: cover; 
            background-repeat: no-repeat; 
            background-attachment: fixed; 
        }

        .container {
            width: 700px;
            margin: 0 auto;
            margin-top: 50px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007bff; /* Blue */
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .buttons {
            text-align: center;
            margin-top: 20px;
        }

        .buttons button {
            margin-right: 10px;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        .update-button{
            background-color: #4169e1;
            color: #ffffff;
        }

        .delete-button {
            background-color: #ffc107; /* Yellow */
            color: #000;
        }

        .cancel-button {
            background-color: #fff;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>User Account Information</h2>
        <div class="top-right">
            <img src="IMAGES/Null.jpg" alt="Profile Image" width="100px">
    </div>
        <form action="user_account.php" method="POST">
            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname" required>

            <label for="middlename">Middle Name:</label>
            <input type="text" id="middlename" name="middlename">

            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname" required>

            <label for="suffix">Suffix:</label>
            <input type="text" id="suffix" name="suffix">

            <label for="department">Department:</label>
            <input type="text" id="department" name="department" required>

            <label for="designation">Designation:</label>
            <input type="text" id="designation" name="designation" required>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <label for="usertype">User Type:</label>
            <select id="usertype" name="usertype" required>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>

            <label for="user_status">User Status:</label>
            <select id="user_status" name="user_status" required>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>

            <label for="employee_number">Employee Number:</label>
            <input type="text" id="employee_number" name="employee_number" required>

            <div class="buttons">
                <button type="submit" class="update-button">Update</button>
                <button type="submit" class="delete-button">Delete</button>
                <button type="button" class="cancel-button" onclick="window.location.href='home_page.php'">Cancel</button>
            </div>
        </form>
    </div>
</body>
</html>
