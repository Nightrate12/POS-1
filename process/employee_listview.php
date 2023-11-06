<?php
include 'db_connection.php';
$conn = OpenCon();

$sql = "SELECT id, employee_no, fname, mname, lname, suffix, birth_date, qualified_dpendent_status, civil_status, department, designation, employee_status FROM personal_infotbl";
if(isset($_GET['search'])){
    $employee_no = trim($_GET['search']);
    $sql= "SELECT id, employee_no, fname, mname, lname, suffix, birth_date, qualified_dpendent_status, civil_status, department, designation, employee_status FROM personal_infotbl WHERE employee_no = $employee_no";
}
$result= $conn->query($sql);
if($result){
    if ($result->num_rows > 0){
        //output data of each row
        while ($row= $result->fetch_assoc()){
            //while($row = mysqli_fetch_array($sql)){
?>
<tr row_id = <?php echo $row['id']; ?>>
<td><?php echo $row ['employee_no']; ?></td>
<td><?php echo $row['fname']. " " . $row['mname']. ' ' . $row['lname'] . ' ' . $row['suffix']; ?></td>
<td><?php echo $row['birth_date']; ?></td>
<td><?php echo $row['qualified_dependent_status']; ?></td>
<td><?php echo $row['civil_status']; ?></td>
<td><?php echo $row['department']; ?></td>
<td><?php echo $row['designation']; ?></td>
<td><?php echo $row['employee_status']; ?></td>
            </tr>
            <?php
        }
    }
    echo "</table>";
}else {
    echo "0 results";
}
$conn->close();
?>
