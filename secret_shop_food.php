<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
        background-image: url('IMAGES/background.jpg');
        background-size: cover; 
        background-repeat: no-repeat; 
        background-attachment: fixed; 
    }

    /* Adjust the select box size and label styles */
    select#drinkSelect {
        width: 200px; /* Adjust the width as needed */
        padding: 10px; /* Adjust padding as needed */
        font-size: 16px; /* Adjust font size as needed */
    }

    label[for="drinkSelect"] {
        font-size: 18px; /* Adjust font size as needed */
        margin-right: 10px; /* Adjust margin as needed */
    }
    </style>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bo
    otstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min
    .js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap4.5.2/js/bootstrap.min.js"></script>

    <!--CSS-->
    <link rel="stylesheet" href="css/pos1_style.css">

    <title>Traitor Joel Store</title>
</head>
<body>
    <div class="container"> 
    <h1 style="text-align:center; margin-top:10px; font-size:70px; font-family:Algerian; color:black">Traitor Joel Store</h1>
        <div style="float:left">
        <div style="margin-left:300px; bottom: 20px; left: 20px;">
        <label for="drinkSelect">Select a Product:</label>
        <select name="drinkSelect" onchange= "location = this.value;" style="width:130px; height:30px;">
        <option value="http://localhost/lpu_web_application/secret_shop_food.php">Food</option>
        <option value="http://localhost/lpu_web_application/secret_shop.php">Drink</option>
        <option value="http://localhost/lpu_web_application/secret_shop_dress.php">Dress</option>
        <option value="http://localhost/lpu_web_application/secret_shop_kitchen.php" >Kitchen Utensils</option>
        <option value="http://localhost/lpu_web_application/secret_shop_perfume.php">Perfume</option>
        </select>
        </div>
        <div>
            <img src="foods_pictures/d1.png" data-toggle="tooltip" data-placement="bottom" title="Food meal 1" width="180" height="180" alt="Food meal 1" style="margin-left:300px; margin-right:30px; margin-top:30px; 
            border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="foods_pictures/d2.jpg" data-toggle="tooltip" data-placement="bottom" title="Food meal 2" alt="Food meal 2" width="180" height="180" style="margin-top:30px; 
            margin-left:30px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="foods_pictures/d3.jpg" data-toggle="tooltip" data-placement="bottom" title="Food meal 3" alt="Food meal 3" width="180" height="180" style="margin-top:30px; 
            margin-left:30px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="foods_pictures/d4.jpg" data-toggle="tooltip" data-placement="bottom" title="Food meal 4" alt="Food meal 4" width="180" height="180" style="margin-top:30px; 
            margin-left:30px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="foods_pictures/d5.jpg" data-toggle="tooltip" data-placement="bottom" title="Food meal 5" alt="Food meal 5" width="180"height="180" style="margin-top:30px; 
            margin-left:30px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
        </div>
        <div>
        <!--Checkbox and name ROW 1-->
        <input type="checkbox" id="checkbox1" name="checkbox1" style="margin-left:335px;">
        <label for="checkbox1" id="lbl_checkbox1" value="">food meal 1 (P300)</label>
        <input type="checkbox" id="checkbox2" name="checkbox2" style="margin-left:120px;">
        <label for="checkbox2" id="lbl_checkbox2" value="">food meal 2 (P80)</label>
        <input type="checkbox" id="checkbox3" name="checkbox3" style="margin-left:130px;">
        <label for="checkbox3" id="lbl_checkbox3" value="">food meal 3 (P60)</label>
        <input type="checkbox" id="checkbox4" name="checkbox4" style="margin-left:110px;">
        <label for="checkbox3" id="lbl_checkbox4" value="">food meal 4 (P250)</label>
        <input type="checkbox" id="checkbox5" name="checkbox5" style="margin-left:120px;">
        <label for="checkbox3" id="lbl_checkbox5" value="">food meal 5 (P230)</label>
</div>
        <div>
            <img src="foods_pictures/d6.jpg" data-toggle="tooltip" data-placement="bottom" title="Food meal 6" alt="Food meal 6" width="180" height="180" style="margin-top:30px; 
            margin-left:300px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="foods_pictures/d7.jpg" data-toggle="tooltip" data-placement="bottom" title="Food meal 7" alt="Food meal 7" width="180" height="180" style="margin-top:30px; 
            margin-left:30px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="foods_pictures/d8.jpg" data-toggle="tooltip" data-placement="bottom" title="Food meal 8" alt="Food meal 8" width="180" height="180" style="margin-top:30px; 
            margin-left:30px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="foods_pictures/d9.jpg" data-toggle="tooltip" data-placement="bottom" title="Food meal 9" alt="Food meal 9" width="180" height="180" style="margin-top:30px; 
            margin-left:30px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="foods_pictures/d10.jpg" data-toggle="tooltip" data-placement="bottom" title="Food meal 10" alt="Food meal 10" width="180" height="180" style="margin-top:30px; 
            margin-left:30px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
        </div>
        <div>
        <!--Checkbox and name ROW 2-->
        <input type="checkbox" id="checkbox6" name="checkbox6" style="margin-left:340px;">
        <label for="checkbox1" id="lbl_checkbox6" value="">food meal 6 (P80)</label>
        <input type="checkbox" id="checkbox7" name="checkbox7" style="margin-left:120px;">
        <label for="checkbox2" id="lbl_checkbox7" value="">food meal 7 (P100)</label>
        <input type="checkbox" id="checkbox8" name="checkbox8" style="margin-left:110px;">
        <label for="checkbox3" id="lbl_checkbox8" value="">food meal 8 (P100)</label>
        <input type="checkbox" id="checkbox9" name="checkbox9" style="margin-left:120px;">
        <label for="checkbox3" id="lbl_checkbox9" value="">food meal 9 (P140)</label>
        <input type="checkbox" id="checkbox10" name="checkbox10" style="margin-left:110px;">
        <label for="checkbox3" id="lbl_checkbox10" value="">food meal 10 (P300)</label>
</div>
        <div>
            <img src="foods_pictures/d11.jpg" data-toggle="tooltip" data-placement="bottom" title="Food meal 11" alt="Food meal 11" width="180" height="180" style="margin-top:30px; 
            margin-left:300px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="foods_pictures/d12.jpg" data-toggle="tooltip" data-placement="bottom" title="Food meal 12" alt="Food meal 12" width="180" height="180"style="margin-top:30px; 
            margin-left:30px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="foods_pictures/d13.jpg" data-toggle="tooltip" data-placement="bottom" title="Food meal 13" alt="Food meal 13" width="180" height="180"style="margin-top:30px; 
            margin-left:30px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="foods_pictures/d14.jpg" data-toggle="tooltip" data-placement="bottom" title="Food meal 14" alt="Food meal 14" width="180" 
            height="180"style="margin-top:30px;margin-left:30px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="foods_pictures/d15.jpg" data-toggle="tooltip" data-placement="bottom" title="Food meal 15" alt="Food meal 15" width="180" height="180"style="margin-top:30px; 
            margin-left:30px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
        </div>
        <div>
        <!--Checkbox and name ROW 3-->
        <input type="checkbox" id="checkbox11" name="checkbox11" style="margin-left:330px;">
        <label for="checkbox1" id="lbl_checkbox11" value="">food meal 11 (P60)</label>
        <input type="checkbox" id="checkbox12" name="checkbox12" style="margin-left:110px;">
        <label for="checkbox2" id="lbl_checkbox12" value="">food meal 12 (P1200)</label>
        <input type="checkbox" id="checkbox13" name="checkbox13" style="margin-left:110px;">
        <label for="checkbox3" id="lbl_checkbox14" value="">food meal 13 (P40)</label>
        <input type="checkbox" id="checkbox14" name="checkbox14" style="margin-left:110px;">
        <label for="checkbox3" id="lbl_checkbox14" value="">food meal 14 (P100)</label>
        <input type="checkbox" id="checkbox15" name="checkbox15" style="margin-left:120px;">
        <label for="checkbox3" id="lbl_checkbox15" value="">food meal 15 (P80)</label>
</div>
        <div>
            <img src="foods_pictures/d16.jpg" data-toggle="tooltip" data-placement="bottom" title="Food meal 16" alt="Food meal 16" width="180" height="180"style="margin-top:30px; 
            margin-left:300px; margin-right:30px;  border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="foods_pictures/d17.jpg" data-toggle="tooltip" data-placement="bottom" title="Food meal 17" alt="Food meal 17" width="180" height="180"
            style="margin-top:30px; margin-left:30px; margin-right:30px; border:10px  solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="foods_pictures/d18.jpg" data-toggle="tooltip" data-placement="bottom" title="Food meal 18" alt="Food meal 18" width="180" height="180"style="margin-top:30px; 
            margin-left:30px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="foods_pictures/d19.png" data-toggle="tooltip" data-placement="bottom" title="Food meal 19" alt="Food meal 19" width="180" height="180"
            style="margin-top:30px; margin-left:30px; margin-right:30px; border:10px  solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="foods_pictures/d20.jpg" data-toggle="tooltip" data-placement="bottom" title="Food meal 20" alt="Food meal 20" width="180" height="180"
            style="margin-top:30px; margin-left:30px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
        </div>
        <div>
        <!--Checkbox and name ROW 3-->
        <input type="checkbox" id="checkbox16" name="checkbox16" style="margin-left:325px;">
        <label for="checkbox1" id="lbl_checkbox16" value="">food meal 16 (P100)</label>
        <input type="checkbox" id="checkbox17" name="checkbox17" style="margin-left:120px;">
        <label for="checkbox2" id="lbl_checkbox17" value="">food meal 17 (P90)</label>
        <input type="checkbox" id="checkbox18" name="checkbox18" style="margin-left:110px;">
        <label for="checkbox3" id="lbl_checkbox18" value="">food meal 18 (P120)</label>
        <input type="checkbox" id="checkbox19" name="checkbox19" style="margin-left:110px;">
        <label for="checkbox3" id="lbl_checkbox19" value="">food meal 19 (P100)</label>
        <input type="checkbox" id="checkbox20" name="checkbox20" style="margin-left:110px; margin-bottom:200px">
        <label for="checkbox3" id="lbl_checkbox20" value="">food meal 20 (P80)</label>
</div>
</div>
<div class="row">
    <div class="col-6 d-flex">
        <ul class="list-group">
            <li class="list-group-item border-0">
                <div class="row align-items-center">
                    <div class="col-md-6" style="white-space:nowrap;">
                        Name of an Item:
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="ItemName">
                    </div>
                </div>
            </li>
            <li class="list-group-item border-0">
                <div class="row align-items-center">
                <div class="col-md-6">
                    Quantity:
                </div>
                <div class="col-md-6">
                    <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" id="Quantity" min="1" onchange="updateTotalPrice()">
                </div>
                </div>
            </li>
            <li class="list-group-item border-0">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        Price per Item:
                    </div>
                    <div class="col-md-6">
                        <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="ItemPrice">
                    </div>
                </div>
            </li>
            <li class="list-group-item border-0">
                <div class="row align-items-center">
                    <div class="col-md-6" style="white-space:nowrap;">
                        Discount Amount:
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="Discount">
                    </div>
                </div>
            </li>
            <li class="list-group-item border-0">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        Discounted Amount per Item:
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="Discounted">
                    </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item border-0">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        Total Price:
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="totalPrice">
                    </div>
                </div>
            </li>
            <li class="list-group-item border-0">
                <div class="row align-items-center">
                    <div class="col-md-6" style="white-space:nowrap;">
                        Total Discounted Amount:
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="totalDiscounted">
                    </div>
                </div>
            </li>
            <li class="list-group-item border-0">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        Total Price With Discount:
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="totalPriceDiscount">
                    </div>
                </div>
            </li>
            <li class="list-group-item border-0">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        Cash Given:
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="Cash">
                    </div>
                </div>
            </li>
            <li class="list-group-item border-0">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        Change:
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="Change">
                    </div>
                </div>
            </li>
    <div class="form-group">
        <label>Discount Options:</label>
        <div>
            <label>
                <input type="radio" name="discount_option" value="senior_citizen" onchange="updateDiscountAmount()"> Senior Citizen
            </label>
        </div>
        <div>
            <label>
                <input type="radio" name="discount_option" value="with_disc_card" onchange="updateDiscountAmount()"> With Discount Card
            </label>
        </div>
        <div>
            <label>
                <input type="radio" name="discount_option" value="employee_discount" onchange="updateDiscountAmount()"> Employee Discount
            </label>
        </div>
        <div>
            <label>
                <input type="radio" name="discount_option" value="no_discount" checked onchange="updateDiscountAmount()"> No Discount
            </label>
        </div>
        <button type="button" id="calculateButton" onclick="calculateChange()" onclick="updateDiscountAmount()" onclick="updateTotalPrice()" class="btn btn-primary" href=secret_shop.php>Calculate Change</button>
    </div>
<script>
     // Function to update input boxes when a checkbox is checked
     function updateInputBoxes(checkboxId, itemName, itemPrice) {
            var checkbox = document.getElementById(checkboxId);
            var itemNameInput = document.getElementById('ItemName');
            var itemPriceInput = document.getElementById('ItemPrice');

            if (checkbox.checked) {
                itemNameInput.value = itemName;
                itemPriceInput.value = itemPrice;
            } else {
                itemNameInput.value = '';
                itemPriceInput.value = '';
            }
        }
function updateDiscountAmount() {
    var discountOption = document.querySelector('input[name="discount_option"]:checked').value;
    var discountInput = document.getElementById('Discount');

    if (discountOption === "no_discount") {
        discountInput.value = ''; // Clear the input when no discount is selected
        discountInput.disabled = true;
    } else if (discountOption === "senior_citizen" || discountOption === "with_disc_card") {
        discountInput.value = '20%'; // Set the input value to '20%'
        discountInput.disabled = true;
    } else if (discountOption === "employee_discount") {
        discountInput.value = '30%'; // Set the input value to '30%'
        discountInput.disabled = true;
    }
}
function updateTotalPrice() {
    // Get the quantity and price per item
    var quantity = parseFloat(document.getElementById('Quantity').value);
    var pricePerItem = parseFloat(document.getElementById('ItemPrice').value);
    var cashgiven= parseFloat(document.getElementById('Cash').value);

    // Calculate the total price
    var totalPrice = quantity * pricePerItem;

    // Get the selected discount option
    var discountOption = document.querySelector('input[name="discount_option"]:checked').value;
    var discountAmount = 0;

    // Calculate the discount amount based on the selected option
    if (discountOption === "senior_citizen" || discountOption === "with_disc_card") {
        discountAmount = 0.2 * pricePerItem; // 20% discount
    } else if (discountOption === "employee_discount") {
        discountAmount = 0.3 * pricePerItem; // 30% discount
    }

    // Calculate the discounted price per item
    var discountedPricePerItem = pricePerItem - discountAmount;
    var totalpriceDiscount= totalPrice-(discountAmount*quantity);

    // Calculate the total discounted price
    var totalDiscountedPrice = quantity * discountedPricePerItem;

    // Update the "Total Price" input field with the calculated value
    document.getElementById('totalPrice').value = totalPrice.toFixed(2); // Display the result with two decimal places

    // Update the "Discounted Amount per Item" input field with the calculated value
    document.getElementById('Discounted').value = (discountAmount).toFixed(2);
    
    //Update the "Total Discounted Amount" input field with the calculated value
    document.getElementById('totalDiscounted').value=(discountAmount*quantity).toFixed(2);

    //Update the "Total Price With Discount" input field with the calculated value
    document.getElementById('totalPriceDiscount').value = (totalpriceDiscount).toFixed(2);

    //Update the "Change" input field with the calculated value
    document.getElementById('Change').value=(cashgiven-totalpriceDiscount).toFixed(2)
}

function calculateChange() {
    // Get the total price with discount
    var totalPriceDiscount = parseFloat(document.getElementById('totalPriceDiscount').value);

    // Get the cash given by the customer
    var cashGiven = parseFloat(document.getElementById('Cash').value);

    // Calculate the change
    var change = cashGiven - totalPriceDiscount;

    // Display the change in the "Change" input field
    document.getElementById('Change').value = change.toFixed(2);
}

        // Add event listeners to each checkbox
        document.getElementById('checkbox1').addEventListener('change', function() {
            updateInputBoxes('checkbox1', 'Food Meal 1', '300');
        });
        document.getElementById('checkbox2').addEventListener('change', function() {
            updateInputBoxes('checkbox2', 'Food Meal 2', '80');
        });
        document.getElementById('checkbox3').addEventListener('change', function() {
            updateInputBoxes('checkbox3', 'Food Meal 3', '60');
        });
        document.getElementById('checkbox4').addEventListener('change', function() {
            updateInputBoxes('checkbox4', 'Food Meal 4', '250');
        });
        document.getElementById('checkbox5').addEventListener('change', function() {
            updateInputBoxes('checkbox5', 'Food Meal 5', '230');
        });
        document.getElementById('checkbox6').addEventListener('change', function() {
            updateInputBoxes('checkbox6', 'Food Meal 6', '80');
        });
        document.getElementById('checkbox7').addEventListener('change', function() {
            updateInputBoxes('checkbox7', 'Food Meal 7', '100');
        });
        document.getElementById('checkbox8').addEventListener('change', function() {
            updateInputBoxes('checkbox8', 'Food Meal 8', '100');
        });
        document.getElementById('checkbox9').addEventListener('change', function() {
            updateInputBoxes('checkbox9', 'Food Meal 9', '140');
        });
        document.getElementById('checkbox10').addEventListener('change', function() {
            updateInputBoxes('checkbox10', 'Food Meal 10', '300');
        });
        document.getElementById('checkbox11').addEventListener('change', function() {
            updateInputBoxes('checkbox11', 'Food Meal 11', '60');
        });
        document.getElementById('checkbox12').addEventListener('change', function() {
            updateInputBoxes('checkbox12', 'Food Meal 12', '1200');
        });
        document.getElementById('checkbox13').addEventListener('change', function() {
            updateInputBoxes('checkbox13', 'Food Meal 13', '40');
        });
        document.getElementById('checkbox14').addEventListener('change', function() {
            updateInputBoxes('checkbox14', 'Food Meal 14', '100');
        });
        document.getElementById('checkbox15').addEventListener('change', function() {
            updateInputBoxes('checkbox15', 'Food Meal 15', '80');
        });
        document.getElementById('checkbox16').addEventListener('change', function() {
            updateInputBoxes('checkbox16', 'Food Meal 16', '100');
        });
        document.getElementById('checkbox17').addEventListener('change', function() {
            updateInputBoxes('checkbox17', 'Food Meal 17', '90');
        });
        document.getElementById('checkbox18').addEventListener('change', function() {
            updateInputBoxes('checkbox18', 'Food Meal 18', '120');
        });
        document.getElementById('checkbox19').addEventListener('change', function() {
            updateInputBoxes('checkbox19', 'Food Meal 19', '100');
        });
        document.getElementById('checkbox20').addEventListener('change', function() {
            updateInputBoxes('checkbox20', 'Food Meal 20', '80');
        });
        // Add event listeners for other checkboxes in a similar manner

     $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
    });
</script>

</body>
</html>