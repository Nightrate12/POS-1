<?php
    $target='';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        //getting data from inputs
        $employee_number = $_POST['employee_number'];
        $fname= $_POST['fname'];
        $mname= $_POST['mname'];
        $lname= $_POST['lname'];
        $suffix= $_POST["suffix"];
        $birth_date= $_POST["birth_date"];
        $gender = $_POST["gender"];
        $nationality = $_POST["gender"];
        $civil_status = $_POST["nationality"];
        $department = $_POST["department"];
        $designation = $_POST["designation"];
        $qualified_dependent_status = $_POST["qualified_dependent_status"];
        $employee_status= $_POST["employee_status"];
        $pay_date = $_POST["pay_date"];
        $contact_no = $_POST["contact_number"];
        $email_address = $_POST["email_address"];
        $other_social_media_account = $_POST["social_media"];
        $social_media_account_id= $_POST["social_media_account_id"];
        $address_line1 = $_POST["address_line1"];
        $address_line2 = $_POST["address_line2"];
        $municipality = $_POST["municipality"];
        $state_province = $_POST["state_province"];
        $country = $_POST["country"];
        $zip_code = $_POST["zip_code"];
        $picpath = $_POST["picpath"];

        //move uploaded pic from temp folder to permanent folder
        if(file_exist($picpath)){
            $pic_filename= explode('temp/',$picpath)[1];
            rename($picpath, 'uploads/' . $pic_filename);
            $picpath = 'uploads/' . $pic_filename;
        }
        //database connection
        include 'db_connection.php';
        $conn = OpenCon();

        //save employee record to database

        $sql1="INSERT INTO personal_infotbl (employee_no, fname, mname, lname, suffix, birth_date, gender, nationality, civil_status, department, designation, qualified_dependent_status, employee_status, pay_date, contact_no, email_address, other_social_media_account, social_media_account_id, address_line1, address_line2, municipality, state_province, country, zip_code, picpath)
        VALUES ('$employee_number', '$fname', '$mname', '$lname', '$suffix', '$birth_date', '$gender', '$nationality', '$civil_status', '$department', '$designation', '$qualified_dependent_status','$employee_status', '$pay_date', '$contact_no', '$email_address', '$other_social_media_account', '$social_media_account_id', '$address_line1', '$address_line2', '$municipality', '$state_province', '$country', '$zip_code', '$picpath')";
        
        if ($conn->query($sql1)===TRUE){
            //echo '<script>alert ("New record created successfully")</script>';
            //echo '<script> window.location.href="http://localhost/lpu_web_development/my_web/employee_registration_save.php"</script>';
        }
        else{
            echo "Error: ". $sql1 . "<br>". $conn_>error;
        }
        $sql2="INSERT INTO user_accounttbl (employee_no)
        VALUES ('$employee_number')";
        if ($conn_>query($sql2)===TRUE){
            //echo '<script>alert ("New record created successfully")</script>';
        }
        else{
            //echo "Error: ". $sql2 . "<br>". $conn->error;
        }
        //close database connection
        $conn->close();

        //return results
        echo json_encode([
            'picpath'=>$picpath,
            'ok'=>1
        ]);
    }
    ?>