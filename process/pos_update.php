<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fieldArray = [];
    foreach ($_POST as $key => $value) {
        $fieldArray[] = $value;
    }
    //echo json_encode($fieldArray);
    include 'db_connection.php';

    $conn = OpenCon();
    $sql1 = "UPDATE salestbl SET 
                    discount_option='$fieldArray[0]',
                      employee_no = '$fieldArray[1]',
                      item_name='$fieldArray[2]',
                  quantity = '$fieldArray[3]',
                  price = '$fieldArray[4]',
                  discount_amount = '$fieldArray[5]',
                  discounted_amount = '$fieldArray[6]',
                  total_quantity = '$fieldArray[7]',
                  total_discount_given = '$fieldArray[8]',
                  total_discounted_amount = '$fieldArray[9]',
                  cash_given = '$fieldArray[10]',
                  customer_change = '$fieldArray[11]',
                  item_type = '$fieldArray[12]'
                  WHERE item_name = '$fieldArray[2]'";
    $conn->query($sql1);
    CloseCon($conn);
    echo json_encode([
        'ok' => 1,
    ]);

}
