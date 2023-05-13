<?php
 require_once('../../config.php');
 if(isset($_GET["idbhaago"])){
   $id = $_GET["idbhaago"];
   $del_emp = "DELETE FROM `tbl_employee` WHERE emp_id = $id";
   $del_run = mysqli_query($conn,$del_emp);
  
   if($del_run==true){
    echo "<script>
    alert('EMPLOYEE DELETED SUCCESSFULLY')
    window.location.href='showemployee.php'
    
    </script>";
   }

   else{
    echo "<script>
    alert('ERROR DELETING EMPLOYEE')
    window.location.href='showemployee.php'
     </script>";
   }
  



 }
?>