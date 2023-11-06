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

<script src="js/payroll_listview.js"></script>
<script src="admin_page.js"></script>

<style>
    table tr:hover{
        cursor:pointer;

    }
    table thead{
        background:maroon;
    }
    table thead tr th{
        color:#fff;
    }
    </style>
    </head>
    <body>
        <div class="container">
            <h2 style="margin-top:30px; margin-bottom:5px;"> Employee's Payroll List</h2>
            <form id="form-users-list" action="" method="POST">
                