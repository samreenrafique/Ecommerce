<?php
 require_once('../../config.php');
 if(isset($_GET["idgo"])){
   $id = $_GET["idgo"];
   $del_contact = "DELETE FROM `tbl_commerce` WHERE id = $id";
   $del_run = mysqli_query($conn,$del_contact);
   
   if($del_run==true){
    echo "<script>
    alert('CONTACT DELETED')
    window.location.href='showcontact.php'
    </script>";
   }
   else{
    echo "<script>
    alert('ERROR DELETING')
    window.location.href='showcontact.php'
    </script>";
   }

 }
 else{
    header("location:showcontact.php");
 }
?>