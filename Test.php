<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Point of Sale A</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!--linking css selectors and elements inside the css file -->
    <link rel="stylesheet" href="css/pos1_style.css">
</head>

<body>

    <div class="container pag">
        <h1 class="text-center" style="padding-top:10px; padding-bottom:10px; font-
                    weight:bold;">Sample Food Ordering Application</h1> 
    <div class="pic_group"> 
    <div class="pic_option"> 
        <div><img src="drinks_pictures/d1.jpg" alt="Cobra"></div>
        <input type="checkbox" id="checkbox1" name="checkbox1">
        <label for="checkbox1" id="lbl_checkbox1" value="" >Cobra</label> 
    </div>
        <div class="pic_option"> 
        <div><img src="drinks_pictures/d2.jpg" alt="Cinque Terre"></div>
        <input type="checkbox" id="checkbox2" name="checkbox2">
        <label for="checkbox2">Family Meal A</label>
    </div>
        <div class="pic_option">
        <div><img src="drinks_pictures/d3.png" alt="Cinque Terre"></div>
        <input type="checkbox" id="checkbox3" name="checkbox3">
        <label for="checkbox3">Chicken Value Meal 1</label>
    </div>
        <div class="pic_option"> 
        <div><img src="drinks_pictures/d4.jpg" alt="Cinque Terre"></div>
        <input type="checkbox" id="checkbox4" name="checkbox4">
        <label for="checkbox4">Family Drink Pack B</label>
    </div>
        <div class="pic_option"> 
        <div><img src="drinks_pictures/d4.jpg" alt="Cinque Terre"></div>
        <input type="checkbox" id="checkbox5" name="checkbox5">
        <label for="checkbox5">Barkada Meal 2</label>
    </div>

 <div style="width:100%; text-align:left;">
 <div style="width:40%; float:left;">
 <div style="width:100%; text-align:left; padding-left:50px;">
 <h5 class="text-left" style="padding-top:10px; font-weight:bold;"> Food Order Choices:</h5>
 <div class="bundle_option">
 <input type="radio" name="optradio_A" id="optradio_A">
 <label for="optradio_A">Food Bundle A</label>
 </div>
 <div class="bundle_option">
 <input type="radio" name="optradio_B" id="optradio_B">
 <label for="optradio_B">Food Bundle B</label>
 </div>
 </div>
 <div style="width:100%; text-align:left; padding-left:100px;">
 <h6 class="text-left" style="padding-top:10px; font-weight:bold;">Food Bundles A:</h6>
 <div class="bundle_checkbox">
 <input type="checkbox" name="deli_chicken" id="deli_chicken" value="" disabled> 10 pcs. Delici
 ous Friend Chicken
 </div>
 </div>
 <div style="width:100%; text-align:left; padding-left:100px">
 <h6 class="text-left" style="padding-top:10px; font-weight:bold;">Food Bundles B:</h6>
 <div class="bundle_checkbox">
 <input type="checkbox" name="halo_halo" id="halo_halo" value="" disabled> 4 Cups Special Halo-
 Halo Regular
 </div>
 </div>
 </div>
 <div style="width:40%; float:left;">
 <h5 class="text-left" style="padding-top:10px; padding-left:10px; font-
 weight:bold;">Order Details:</h5>
 <div style="width:100%; text-align:left; padding-left:10px; margin-bottom:50px;">
 <div class="input_box" >
 <span>Price:</span>
 <input type="text" name="price" id="price" value="" disabled>
 </div>
 <div class="input_box">
 <span>Quantity:</span>
 <input type="text" name="quantity" id="quantity" value="">
 </div> 
 <div class="input_box">
 <span>Amount To Pay:</span>
 <input type="text" name="amount_to_pay" id="amount_to_pay" value="" disabled>
 </div>
 <div class="input_box">
 <span>Cash From Customer:</span>
 <input type="text" name="amount_from_customer" id="amount_from_customer" value="">
 </div>
 <div class="input_box" style="margin-bottom:10px;">
 <span>Change:</span><input type="text" name="change" id="change" value="" disabled>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 <div class="container" id="process_button" style="margin-top:43px;">
 <button type="submit" id="btn_calculate_bills" name="calculate_bills" class="btn btn-
 primary btn_process">CALCULATE BILLS</button>
 <button type="submit" id="btn_change" name="change" class="btn btn-info btn_process">CHANGE</button>
 <button type="submit" id="btn_new" name="new" class="btn btn-secondary btn_process">NEW</button>
 </div>
 </div> 
</body>
</html>

