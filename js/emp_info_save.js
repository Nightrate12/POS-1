$(document).ready(function(){
    //event listener for SAVE button
    $('#savebtn').click(function(e){
        e.preventDefault();
        //inputs data from the design
        var employee_number=$('#employee_number').val();
        var fname= $('#fname').val();
        var mname= $('#mname').val();
        var lname= $('#lname').val();
        var suffix = $('#suffix').val();
        var birth_date= $('#birth_date').val();
        var gender= $('#gender').val();
        var nationality= $('#nationality').val();
        var civil_status= $('#civil_status').val();
        var department= $('#department').val();
        var designation= $('designation').val();
        var qualified_dependent_status= $('qualified_dependent_status').val();
        var employee_status= $('#employee_status').val();
        var pay_date= $('#pay_date').val();
        var contact_number = $('#contact_number').val();
        var email_address = $('#email_address').val();
        var social_media = $('#social_media').val();
        var social_media_account_id = $('#social_media_account_id').val();
        var address_line1 = $('#address_line1').val();
        var address_line2= $('#address_line2').val();
        var municipality= $('#municipality').val();
        var state_province = $('#state_province').val();
        var country= $('country').val();
        var zip_code = $('zip_code').val();
        var picpath= $('picpath').val();

        var data_string = 'employee_number' + employee_number;
        data_string += '&fname=' + fname;
        data_string += '&mname=' + mname;
        data_string += '&lname=' + lname;
        data_string += '&suffix=' + suffix;
        datastring += '&birth_date=' + birth_date;
        datastring += '&gender=' + gender;
        datastring += '&nationality=' + nationality;
        datastring += '&civil_status=' + civil_status;
        datastring += '&department=' + department;
        datastring += '&designation=' + designation;
        datastring += '&qualified_dependent_status=' + qualified_dependent_status;
        datastring += '&employee_status=' + employee_status;
        datastring += '&pay_date=' + pay_date;
        datastring += '&contact_number=' + contact_number;
        datastring += '&email_address=' + email_address;
        datastring += '&social_media=' + social_media;
        datastring += '&social_media_account_id=' + social_media_account_id;
        datastring += '&address_line1=' + address_line1;
        datastring += '&address_line2=' + address_line2;
        datastring += '&municipality=' + municipality;
        datastring += '&state_province=' + state_province;
        datastring += '&country=' + country;
        datastring += '&zip_code' + zip_code;
        datastring += '&picpath=' + picpath;
        $,ajax({
            type: 'POST',
            url: 'process/employee_info_save.php',
            data: data_string,
            dataType: 'json',
            success: function(result){
                if (result.ok){
                    alert('Data successfully added!')
                    //codes for landing page after clicking OK in the alert 
                    //for Data Successfully added!
                    window.location.href=
                    "http://localhost/lpu_web_application/my_web/employee_registration_save.php";
                }
                var picpath= result.picpath;
                $('#picpath').val(picpath);
            }
        })
    });
})

$(document).ready(function(){
    $('#uploadfile').change(function(e){
        var formData= new FormData($('#pic-upload')[0]);
        //codes in AJAX for uploading of picture
        $.ajax({
            type:'POST',
            url: 'upload_pic.php',
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(result){
                if (result.ok){
                    $('#pic-box').html('');
                    $('#pic-box').append("<img src='"+ result.temp_path+"' style='width:100%'/>");
                    $('#picpath').val(result.temp_path);
                }
                else {
                    alert('Error encountered while trying to upload the picture!');
                }
            }
        });
        return false;
    });
});