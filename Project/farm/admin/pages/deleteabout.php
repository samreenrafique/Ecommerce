<?php
 require_once('../../config.php');

 if(isset($_GET["idbhaago"])){
    $abid = $_GET["idbhaago"];
    $delete_about = "DELETE FROM `tbl_about` WHERE id = $abid ";
    $rundel = mysqli_query($conn,$delete_about);
     
    if($rundel==true){
     echo "<script>
     alert('ABOUT DELETED')
     window.location.href='showabout.php'
     </script>";

    }
    else{
        echo "<script>
     alert('ERROR DELETING')
     window.location.href='showabout.php'
     </script>";

    }
 }











?>