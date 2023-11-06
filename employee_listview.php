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
        table tr:hover{
            cursor:pointer;
        }
        table thead{
            background:maroon;
        }
        table thead tr th {
            color:#fff;
        }
        </style>
        </head>
        <body>
            <div class="container">
                <h2 style="margin-top:30px; margin-bottom:5px;">Company Employee's List</h2>
                <form id="form-user-list" action="" method="POST">
                    <div style="float:right;">
                        <span style="margin-top:5px;">Employee Number: </span>
                        <input type="text" style="margin-top:5px;" id="employee_no" name="employee_no">
                        <button id="search" type="submit" name="search_btn" class="btn btn-danger" style="padding:5px; margin-bottom:5px;">SEARCH</button>
                    </div>
                    <table class ="table table-bordered table-hover" id="user_table">
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
                        </tbody>
                        <?php 
                        include 'process/employee_listview.php';
                        ?>
                    </table>
                    </div>
                </form>
            </div>
        </body>
</html>