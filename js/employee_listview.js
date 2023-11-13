$(document).ready(function(){
    $('table tr').click(function(){
        var id= $(this).attr('row_id');
        window.open("http://localhost/lpu_web_application/employee_registration_update.php?id=" +id);
    });
    $('#search').click(function(e){
        var employee_no = $('#employee_no').val();
        window.open("http//localhost/lpu_web_application/employee_listview.php?search=" + employee_no);
    });
});