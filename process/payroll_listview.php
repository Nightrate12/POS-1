<?php
include 'db_connection.php';
$conn = OpenCon();
$sql = "SELECT * FROM personal_infotbl INNER JOIN incometbl ON
personal_infotbl.employee_no =
incometbl.employee_no
INNER JOIN deductiontbl ON incometbl.employee_no =
deductiontbl.employee_no";

if(isset($_GET['search'])){
$employee_no = trim( $_GET['search']);
$sql = "SELECT * FROM personal_infotbl INNER JOIN incometbl ON
personal_infotbl.employee_no=
incometbl.employee_no
INNER JOIN deductiontbl ON incometbl.employee_no =
deductiontbl. employee_no WHERE
personal_infotbl.employee_no WHERE employee_no = '12345'";
}
$result = $conn->query($sql); 
if($result){
if ($result->num_rows > 0) {
     // output data of each row 
    while ($row = $result->fetch_assoc()) {
    ?>
<tr row_id = <?php echo $row['id']; ?>>
<td><?php echo $row['employee_no']; ?></td>
<td><?php echo $row['fname']. " " . $row ['mname']. " " .
$row['lname']. " " . $row['suffix']; ?></td>
<td><?php echo $row['basic_income']; ?></td> 
<td><?php echo $row['hono_income']; ?></td> 
<td><?php echo $row [ 'other_income']; ?></td> 
<td><?php echo $row['gross_income']; ?></td> 
<td><?php echo $row[ 'total_deduction']; ?></td> 
<td><?php echo $row [ 'net_income']; ?></td>
 <td><?php echo $row['pay_date']; ?></td>
    </tr>
    <?php
    }
}
echo"</table>";
} else{
    echo "0 results";
}
$conn->close();
?>
