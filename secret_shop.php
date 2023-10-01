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
    .sidebar a {
            display: block;
            color: #fff;
            padding: 10px 0;
            text-decoration: none;
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
        <option value="http://localhost/lpu_web_application/secret_shop.php">Drinks</option>
        <option value="http://localhost/lpu_web_application/secret_shop_dress.php">Dress</option>
        <option value="http://localhost/lpu_web_application/secret_shop_food.php">Food</option>
        <option value="http://localhost/lpu_web_application/secret_shop_kitchen.php" >Kitchen Utensils</option>
        <option value="http://localhost/lpu_web_application/secret_shop_perfume.php">Perfume</option>
        </select>
        </div>
        <div>
            <img src="drinks_pictures/d1.jpg" data-toggle="tooltip" data-placement="bottom" title="Cobra" width="180" height="180" alt="Cobra" style="margin-left:300px; margin-right:30px; margin-top:30px; 
            border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="drinks_pictures/d2.jpg" data-toggle="tooltip" data-placement="bottom" title="7Up" alt="7Up" width="180" height="180" style="margin-top:30px; 
            margin-left:20px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="drinks_pictures/d3.png" data-toggle="tooltip" data-placement="bottom" title="Mug" alt="Mug" width="180" height="180" style="margin-top:30px; 
            margin-left:30px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="drinks_pictures/d4.jpg" data-toggle="tooltip" data-placement="bottom" title="Zesto" alt="Zesto" width="180" height="180" style="margin-top:30px; 
            margin-left:30px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="drinks_pictures/d5.jpg" data-toggle="tooltip" data-placement="bottom" title="Soju" alt="Soju" width="180"height="180" style="margin-top:30px; 
            margin-left:30px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
        </div>
        <div>
        <!--Checkbox and name ROW 1-->
        <input type="checkbox" id="checkbox1" name="checkbox1" style="margin-left:360px;">
        <label for="checkbox1" id="lbl_checkbox1" value="">Cobra (P20)</label>
        <input type="checkbox" id="checkbox2" name="checkbox2" style="margin-left:150px;">
        <label for="checkbox2" id="lbl_checkbox2" value="">7UP (P20)</label>
        <input type="checkbox" id="checkbox3" name="checkbox3" style="margin-left:170px;">
        <label for="checkbox3" id="lbl_checkbox3" value="">Mug (P20)</label>
        <input type="checkbox" id="checkbox4" name="checkbox4" style="margin-left:170px;">
        <label for="checkbox3" id="lbl_checkbox4" value="">Zesto (P11)</label>
        <input type="checkbox" id="checkbox5" name="checkbox5" style="margin-left:170px;">
        <label for="checkbox3" id="lbl_checkbox5" value="">Soju (P75)</label>
</div>
        <div>
            <img src="drinks_pictures/d6.png" data-toggle="tooltip" data-placement="bottom" title="Blue" alt="Blue" width="180" height="180" style="margin-top:30px; 
            margin-left:300px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="drinks_pictures/d7.jpg" data-toggle="tooltip" data-placement="bottom" title="Espresso" alt="Espresso" width="180" height="180" style="margin-top:30px; 
            margin-left:30px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="drinks_pictures/d8.jpg" data-toggle="tooltip" data-placement="bottom" title="Coca Cola" alt="Coca Cola" width="180" height="180" style="margin-top:30px; 
            margin-left:30px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="drinks_pictures/d9.jpg" data-toggle="tooltip" data-placement="bottom" title="Fruit Soda" alt="Fruit Soda" width="180" height="180" style="margin-top:30px; 
            margin-left:30px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="drinks_pictures/d10.jpg" data-toggle="tooltip" data-placement="bottom" title="Proyo" alt="Proyo" width="180" height="180" style="margin-top:30px; 
            margin-left:30px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
        </div>
        <div>
        <!--Checkbox and name ROW 2-->
        <input type="checkbox" id="checkbox6" name="checkbox6" style="margin-left:360px;">
        <label for="checkbox1" id="lbl_checkbox6" value="">Blue (P35)</label>
        <input type="checkbox" id="checkbox7" name="checkbox7" style="margin-left:160px;">
        <label for="checkbox2" id="lbl_checkbox7" value="">Espresso (P55)</label>
        <input type="checkbox" id="checkbox8" name="checkbox8" style="margin-left:135px;">
        <label for="checkbox3" id="lbl_checkbox8" value="">Coca Cola (P40)</label>
        <input type="checkbox" id="checkbox9" name="checkbox9" style="margin-left:140px;">
        <label for="checkbox3" id="lbl_checkbox9" value="">Fruit Soda (P20)</label>
        <input type="checkbox" id="checkbox10" name="checkbox10" style="margin-left:140px;">
        <label for="checkbox3" id="lbl_checkbox10" value="">Proyo (P55)</label>
</div>
        <div>
            <img src="drinks_pictures/d11.jpg" data-toggle="tooltip" data-placement="bottom" title="Mogu Mogu" alt="Mogu Mogu" width="180" height="180" style="margin-top:30px; 
            margin-left:300px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="drinks_pictures/d12.jpg" data-toggle="tooltip" data-placement="bottom" title="Nestea" alt="Nestea" width="180" height="180"style="margin-top:30px; 
            margin-left:30px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="drinks_pictures/d13.png" data-toggle="tooltip" data-placement="bottom" title="Pocari Sweat" alt="Pocari Sweat" width="180" height="180"style="margin-top:30px; 
            margin-left:30px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="drinks_pictures/d14.jpg" data-toggle="tooltip" data-placement="bottom" title="Del Monte Pinapple Juice" alt="Del Monte Pineapple Juice" width="180" 
            height="180"style="margin-top:30px;margin-left:30px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="drinks_pictures/d15.jpg" data-toggle="tooltip" data-placement="bottom" title="Orange Juice" alt="Orange Juice" width="180" height="180"style="margin-top:30px; 
            margin-left:30px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
        </div>
        <div>
        <!--Checkbox and name ROW 3-->
        <input type="checkbox" id="checkbox11" name="checkbox11" style="margin-left:340px;">
        <label for="checkbox1" id="lbl_checkbox11" value="">Mogu Mogu (P45)</label>
        <input type="checkbox" id="checkbox12" name="checkbox12" style="margin-left:130px;">
        <label for="checkbox2" id="lbl_checkbox12" value="">Nestea (P35)</label>
        <input type="checkbox" id="checkbox13" name="checkbox13" style="margin-left:140px;">
        <label for="checkbox3" id="lbl_checkbox14" value="">Pocari Sweat (P40)</label>
        <input type="checkbox" id="checkbox14" name="checkbox14" style="margin-left:110px;">
        <label for="checkbox3" id="lbl_checkbox14" value="">Pineapple Juice (P45)</label>
        <input type="checkbox" id="checkbox15" name="checkbox15" style="margin-left:110px;">
        <label for="checkbox3" id="lbl_checkbox15" value="">Orange Juice (P45)</label>
</div>
        <div>
            <img src="drinks_pictures/d16.jpg" data-toggle="tooltip" data-placement="bottom" title="C2 Apple" alt="C2 Apple" width="180" height="180"style="margin-top:30px; 
            margin-left:300px; margin-right:30px;  border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="drinks_pictures/d17.png" data-toggle="tooltip" data-placement="bottom" title="Smart C Dalandan" alt="Smart C Dalandan" width="180" height="180"
            style="margin-top:30px; margin-left:30px; margin-right:30px; border:10px  solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="drinks_pictures/d18.jpg" data-toggle="tooltip" data-placement="bottom" title="Sprite" alt="Sprite" width="180" height="180"style="margin-top:30px; 
            margin-left:30px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="drinks_pictures/d19.jpg" data-toggle="tooltip" data-placement="bottom" title="Tropicana Twister" alt="Tropicana Twister" width="180" height="180"
            style="margin-top:30px; margin-left:30px; margin-right:30px; border:10px  solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
            <img src="drinks_pictures/d20.jpg" data-toggle="tooltip" data-placement="bottom" title="Yakult" alt="Yakult" width="180" height="180"
            style="margin-top:30px; margin-left:30px; margin-right:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:0px ">
        </div>
        <div>
        <!--Checkbox and name ROW 3-->
        <input type="checkbox" id="checkbox16" name="checkbox16" style="margin-left:340px;">
        <label for="checkbox1" id="lbl_checkbox16" value="">C2 Apple (P31)</label>
        <input type="checkbox" id="checkbox17" name="checkbox17" style="margin-left:140px;">
        <label for="checkbox2" id="lbl_checkbox17" value="">Smart C (P30)</label>
        <input type="checkbox" id="checkbox18" name="checkbox18" style="margin-left:160px;">
        <label for="checkbox3" id="lbl_checkbox18" value="">Sprite (P25)</label>
        <input type="checkbox" id="checkbox19" name="checkbox19" style="margin-left:130px;">
        <label for="checkbox3" id="lbl_checkbox19" value="">Tropicana Twister (P30)</label>
        <input type="checkbox" id="checkbox20" name="checkbox20" style="margin-left:120px;">
        <label for="checkbox3" id="lbl_checkbox20" value="">Yakult (P20)</label>
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
    } else {
        discountInput.value = ''; // Clear the input when no specific discount is selected
        discountInput.disabled = false;
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
            updateInputBoxes('checkbox1', 'Cobra', '20');
        });
        document.getElementById('checkbox2').addEventListener('change', function() {
            updateInputBoxes('checkbox2', '7UP', '20');
        });
        document.getElementById('checkbox3').addEventListener('change', function() {
            updateInputBoxes('checkbox3', 'Mug', '20');
        });
        document.getElementById('checkbox4').addEventListener('change', function() {
            updateInputBoxes('checkbox4', 'Zesto', '11');
        });
        document.getElementById('checkbox5').addEventListener('change', function() {
            updateInputBoxes('checkbox5', 'Soju', '75');
        });
        document.getElementById('checkbox6').addEventListener('change', function() {
            updateInputBoxes('checkbox6', 'Blue', '35');
        });
        document.getElementById('checkbox7').addEventListener('change', function() {
            updateInputBoxes('checkbox7', 'Espresso', '55');
        });
        document.getElementById('checkbox8').addEventListener('change', function() {
            updateInputBoxes('checkbox8', 'Cocacola', '40');
        });
        document.getElementById('checkbox9').addEventListener('change', function() {
            updateInputBoxes('checkbox9', 'Fruit Soda', '20');
        });
        document.getElementById('checkbox10').addEventListener('change', function() {
            updateInputBoxes('checkbox10', 'Proyo', '5');
        });
        document.getElementById('checkbox11').addEventListener('change', function() {
            updateInputBoxes('checkbox11', 'Mogu Mogu', '45');
        });
        document.getElementById('checkbox12').addEventListener('change', function() {
            updateInputBoxes('checkbox12', 'Nestea', '35');
        });
        document.getElementById('checkbox13').addEventListener('change', function() {
            updateInputBoxes('checkbox13', 'Pocari Sweat', '40');
        });
        document.getElementById('checkbox14').addEventListener('change', function() {
            updateInputBoxes('checkbox14', 'Pineapple Juice', '45');
        });
        document.getElementById('checkbox15').addEventListener('change', function() {
            updateInputBoxes('checkbox15', 'Orange Juice', '45');
        });
        document.getElementById('checkbox16').addEventListener('change', function() {
            updateInputBoxes('checkbox16', 'C2 Apple', '31');
        });
        document.getElementById('checkbox17').addEventListener('change', function() {
            updateInputBoxes('checkbox17', 'Smart C', '30');
        });
        document.getElementById('checkbox18').addEventListener('change', function() {
            updateInputBoxes('checkbox18', 'Sprite', '25');
        });
        document.getElementById('checkbox19').addEventListener('change', function() {
            updateInputBoxes('checkbox19', 'Tropicana Twister', '30');
        });
        document.getElementById('checkbox20').addEventListener('change', function() {
            updateInputBoxes('checkbox20', 'Yakult', '20');
        });
        // Add event listeners for other checkboxes in a similar manner

     $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
    });
    updateDiscountAmount();
</script>

</body>
</html>