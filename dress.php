<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <title>POS Page</title>
    <style>
        .sidebar a:hover {
            color: #00ffff;
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
    </style>
</head>

<body>
    <div class="row flex">
        <div class="sidebar">
            <h2>Joel's Store</h2>
            <ul>
                <li><a href="home_page.php">Home</a></li>
                <li><a href="employee_registration_save.php">Employee Registration</a></li>
                <li><a href="employee_listview.php">Employee Report</a></li>
                <li><a href="payroll_lab4.php">Payroll</a></li>
                <li><a href="payroll_listview.php">Payroll Report</a></li>
                <li><a href="dress.php">POS</a></li>
                <li><a href="#">POS Sales Report</a></li>
                <li><a href="user_account_page.php">User Account</a></li>
                <li><a href="login.php">Logout</a></li>

            </ul>
        </div>
        <div class="col-8  flex-grow-1"
            style="background-image:url('IMAGES/background.jpg');background-attachment:fixed; background-size:cover;background-repeat: no-repeat;">
            <main class="container">
                <h1 class="text-center my-1" style="font-family:Helvetica; font-size:70px;"><b>CLOTHING STORE</b>
                </h1>
                <div class="">
                    <!-- dropdown -->
                    <div class="px-3">
                        <div class="btn-group bg-white">
                            <button class="btn btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                More &#9776
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="dress.php" style="color: blue;">Dress</a>
                                </li>
                                <li><a class="dropdown-item" href="drinks.php">Drinks</a></li>
                                <li><a class="dropdown-item" href="perfume.php">Perfume</a></li>
                                <li><a class="dropdown-item" href="food.php">Food</a></li>
                                <li><a class="dropdown-item" href="kitchen.php">Kitchen Utensils </a></li>
                            </ul>
                        </div>
                    </div>
                    <br>
                    <!-- cards -->
                    <div class="row mx-auto row-cols-5">
                        <?php
                        require_once('Prices.php');
                        for ($i = 1; $i < 21; $i++) {
                            $label = "Dress $i";
                            $price = "$Dress[$i]";
                            echo "
                            <div class='col'onclick='handleItems(\"$label\", \"$price\")' role='button'>
                                <div class='card mb-4 mx-3 ' style='width: 190px;'>
                                    <div class='row g-0'>
                                        <img src='dress_pictures/d$i.jpg' class='card-img-top rounded-start' alt='...' height='190'/>
                                        <div class='form-check d-flex justify-content-center align-items-center'>
                                            <label class='form-check-label px-3' for='checkbox$i'>
                                                 $label - <span style='font-weight:bold;'>₱$price</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
                        }
                        ?>
                    </div>
                    <!-- inputs -->
                    <div class="row">
                        <div class="col-6 d-flex">
                            <ul class="list-group">
                                <li class="list-group-item border-0">
                                    <h5>Order Details:</h5>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6" style="white-space:nowrap;">
                                            Name of an Item:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control"
                                                aria-label="Amount (to the nearest dollar)" disabled id="ItemName">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Quantity:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control"
                                                aria-label="Amount (to the nearest dollar)" id="Quantity" min="1">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Price:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control"
                                                aria-label="Amount (to the nearest dollar)" disabled id="ItemPrice">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6" style="white-space:nowrap;">
                                            Discount Amount:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control"
                                                aria-label="Amount (to the nearest dollar)" disabled id="Discount">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Discounted Amount:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control"
                                                aria-label="Amount (to the nearest dollar)" disabled id="Discounted">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-group">
                                <li class="list-group-item border-0">
                                    <h1></h1>
                                    <br>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Total Quantity:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control"
                                                aria-label="Amount (to the nearest dollar)" disabled id="totalQuantity">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6" style="white-space:nowrap;">
                                            Total Discount Given:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control"
                                                aria-label="Amount (to the nearest dollar)" disabled id="totalDiscount">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Total Discounted Amount:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control"
                                                aria-label="Amount (to the nearest dollar)" disabled
                                                id="totalDiscounted">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Cash Given:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control"
                                                aria-label="Amount (to the nearest dollar)" id="Cash">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Change:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control"
                                                aria-label="Amount (to the nearest dollar)" disabled id="Change">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- calculator -->
                        <div class="col-6">
                            <!-- radio -->
                            <div>
                                <li class="list-group-item border-0">
                                    <h5>Order Discount Options:</h5>
                                </li>
                                <ul class="list-group list-group-horizontal gap-5">
                                    <li class="" style="list-style-type: none;">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="senior"
                                            onclick="handleDiscounts(0.12)" value="senior discount">
                                        <label class="form-check-label" for="flexRadioDefault1">Senior Citizen
                                            (12%)</label>
                                    </li>
                                    <li class="" style="list-style-type: none;"> <input class="form-check-input"
                                            type="radio" name="flexRadioDefault" id="discountCard"
                                            onclick="handleDiscounts(0.08)" value="discount card">
                                        <label class="form-check-label" for="flexRadioDefault1">With Disc. Card
                                            (8%)</label>
                                    </li>
                                    <li class="" style="list-style-type: none;"> <input class="form-check-input"
                                            type="radio" name="flexRadioDefault" id="employee"
                                            onclick="handleDiscounts(0.1)" value="employee discount">
                                        <label class="form-check-label" for="flexRadioDefault1">Employee Discount
                                            (10%)</label>
                                    </li>
                                    <li class="" style="list-style-type: none;"> <input class="form-check-input"
                                            type="radio" name="flexRadioDefault" id="noDiscount"
                                            onclick="handleDiscounts(0)" value="no discount">
                                        <label class="form-check-label" for="flexRadioDefault1">No Discount</label>
                                    </li>
                                </ul>
                            </div>
                            <!-- buttons -->
                            <div class="my-3 w-100">
                                <div class="row row-cols-4 mb-3">
                                    <div class="col">
                                        <button type="button" class="btn btn-primary " style="white-space:nowrap"
                                            onclick="handleChange()">Calculate Change</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-danger w-100"
                                            onclick="handleNew()">New</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" id="save" class="btn btn-warning w-100">Save</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-dark w-100">Update</button>
                                    </div>
                                </div>
                                <div class="row row-cols-5">
                                    <div class="col-3">
                                        <button type="button" class="btn btn-primary h-100 w-100"
                                            onclick="handleCalculator()">Enter</button>
                                    </div>
                                    <div class="col-9">
                                        <div class="row row-cols-3">
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1"
                                                    onclick="document.getElementById('Cash').value += '/'">/</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1"
                                                    onclick="document.getElementById('Cash').value += '*'">*</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1"
                                                    onclick="document.getElementById('Cash').value += '-'">-</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1"
                                                    onclick="document.getElementById('Cash').value += '+'">+</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1"
                                                    onclick="document.getElementById('Cash').value += '9'">9</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1"
                                                    onclick="document.getElementById('Cash').value += '8'">8</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1"
                                                    onclick="document.getElementById('Cash').value += '7'">7</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1"
                                                    onclick="document.getElementById('Cash').value += '6'">6</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1"
                                                    onclick="document.getElementById('Cash').value += '5'">5</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1"
                                                    onclick="document.getElementById('Cash').value += '4'">4</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1"
                                                    onclick="document.getElementById('Cash').value += '3'">3</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1"
                                                    onclick="document.getElementById('Cash').value += '2'">2</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1"
                                                    onclick="document.getElementById('Cash').value += '1'">1</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1"
                                                    onclick="document.getElementById('Cash').value += '0'">0</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1"
                                                    onclick="document.getElementById('Cash').value += '.'">.</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script>
        totalQuantity = 0
        totalDiscount = 0
        totalDiscounted = 0
    </script>
    <script src="js/Calculator.js" defer></script>
    <script src="js/Change.js" defer></script>
    <script src="js/New.js" defer></script>
    <script src="js/Discount.js" defer></script>
    <script src="js/Items.js" defer></script>
    <script src="js/pos_save.js"></script>
</body>

</html>