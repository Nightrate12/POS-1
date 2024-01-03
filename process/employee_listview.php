<?php
include 'db_connection.php';
$conn = OpenCon();

$sql = "SELECT id, employee_no, fname, mname, lname, suffix, birth_date, qualified_dependent_status, civil_status, department, designation, employee_status FROM personal_infotbl";
if (isset($_GET['search'])) {
    $employee_no = trim($_GET['search']);
    $sql = "SELECT id, employee_no, fname, mname, lname, suffix, birth_date, qualified_dependent_status, civil_status, department, designation, employee_status FROM personal_infotbl WHERE employee_no = $employee_no";
}
$result = $conn->query($sql);
if ($result) {
    if ($result->num_rows > 0) {
        //output data of each row
        while ($row = $result->fetch_assoc()) {
            //while($row = mysqli_fetch_array($sql)){
            ?>
            <tr class='clickable-row' style='cursor: pointer' data-href='employee_registration_save.php?id={$item[' id']}'>
                <td class='py-6 ps-6 border'>$item[employee_no]</td>
                <td class='py-6 ps-6 border'>$item[fname] $item[mname] $item[lname]</td>
                <td class='py-6 ps-6 border'>$item[birth_date]</td>
                <td class='py-6 ps-6 border'>$item[qualified_dependent_status]</td>
                <td class='py-6 ps-6 border'>$item[civil_status]</td>
                <td class='py-6 ps-6 border'>$item[department]</td>
                <td class='py-6 ps-6 border'>$item[designation]</td>
                <td class='py-6 ps-6 border'>$item[employee_status]</td>
            </tr>
            <?php
        }
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>