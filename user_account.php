<?php
include 'process/useraccount_fill.php';
//include 'process/session_check.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="js/user_account.js"></script>

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
        <div class="flex-grow-1 ">
            <div class="container d-flex my-4">
                <div class="rounded bg-white overflow-hidden">
                    <form class="row my-5 py-5" method="post">
                        <div class="col-md-3 border-right">
                            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                <img class="rounded-circle mt-5 mb-2 img-thumbnail" src=<?php echo isset($type) ? "$type" : "Images/Assets/placeholder.jpg"; ?>>
                                <span class="text-black-50"><?php echo isset($email_address) ? "$email_address" : "example@email.com" ?></span><span> </span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 py-5">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="text-right fw-bold">User account Credentials</h4>
                                </div>
                                <div class="col-md-12"><label class="labels">Username</label>
                                    <input type="text" class="form-control formdata" placeholder="Username" name='username' id='username' value=<?php echo $username; ?>>
                                </div> <br>
                                <div class="col-md-12"><label class="labels">Password</label>
                                    <input type="password" class="form-control formdata" placeholder="Password" name='password' id='password' value=<?php echo $password; ?>>
                                </div><br>
                                <div class="col-md-12"><label class="labels">Confirm Password</label>
                                    <input type="password" class="form-control formdata mb-2" placeholder="Confirm password" name='confirm_password' id='confirm_password' value=<?php echo $confirm_password; ?>>
                                    <span id='message'></span>
                                </div>
                                <div class="col-md-12 mb-2"><label class="labels">Privilege</label>
                                    <select class="form-control formdata form-select" name="Privilege" id="Privilege">
                                        <option value=''>-- Select Privilege --</option>
                                        <option value="Administrator">Administrator</option>
                                        <option value="Cashier">Cashier</option>
                                        <option value="Accounting">Accounting</option>
                                    </select>
                                </div>
                                <div class="mt-5">
                                    <button type="button" class="btn btn-primary" id='update' name='update'>Update</button>
                                    <button type="reset" class="btn btn-warning" id='delete' name='delete'>Delete</button>
                                    <button type="button" class="btn btn-light" id='cancel' name='cancel'>Cancel</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 border-right">
                            <div class="p-3 py-5">

                                <div class="d-flex justify-content-between align-items-center experience">
                                    <span>Information</span>
                                </div><br>

                                <div class="row mt-2">
                                    <div class="col-md-4"><label class="labels">Name</label>
                                        <input type="text" class="form-control" placeholder="" disabled name='fname' id='fname' value=<?php echo $fname; ?>>
                                    </div>
                                    <div class="col-md-4"><label class="labels">Middle Name</label>
                                        <input type="text" class="form-control" placeholder="" disabled name='mname' id='mname' value=<?php echo $mname; ?>>
                                    </div>
                                    <div class="col-md-4"><label class="labels">Surname</label>
                                        <input type="text" class="form-control" placeholder="" disabled name='lname' id='lname' value=<?php echo $lname; ?>>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12 mb-2"><label class="labels">Suffix</label>
                                        <input type="text" class="form-control" placeholder="" name='suffix' id='suffix' disabled value=<?php echo $suffix; ?>>
                                    </div>
                                    <div class="col-md-12 mb-2"><label class="labels">Department</label>
                                        <input type="text" class="form-control" placeholder="" name='department' id='department' disabled value=<?php echo $department; ?>>
                                    </div>
                                    <div class="col-md-12 mb-2"><label class="labels">Employee Number</label>
                                        <input type="text" class="form-control formdata" placeholder="" name='employee_no' id='employee_no' disabled value=<?php echo $employee_no; ?>>
                                    </div>
                                    <div class="col-md-12 mb-2"><label class="labels">Employee Status</label>
                                        <input type="text" class="form-control" placeholder="" name='employee_status' id='employee_status' disabled value=<?php echo $employee_status; ?>>
                                    </div>

                                    <div class="col-md-12 mb-2"><label class="labels">Designation</label>
                                        <input type="text" class="form-control" placeholder="" name='designation' disabled value=<?php echo $designation; ?>>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
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