<?php
  require_once('../../config.php');
  if(isset($_GET["idbhaago"])){
    $id = $_GET["idbhaago"];
    $delete_query = "DELETE FROM `table_products` WHERE product_id = $id";
    $go = mysqli_query($conn,$delete_query);

   if ($go==true) {
    echo "<script>
    alert('PRODUCT DELETED')
    window.location.href='showproduct.php'
    </script>";
    # code...
   }
   else{
    echo "<script>
    alert('ERROR DELETING')
    window.location.href='showproduct.php'
    </script>";
    
   }




  }
  else{
    header("location:showproduct.php");
  }




?>