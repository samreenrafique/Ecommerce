<?php
  require_once('../../config.php');
  if(isset($_GET["idbhaag"])){
    $id = $_GET["idbhaag"];
    $delete_query = "DELETE FROM `tbl_catogary` WHERE id = $id";
    $go = mysqli_query($conn,$delete_query);

   if ($go==true) {
    echo "<script>
    alert('CATOGARY DELETED')
    window.location.href='read_catogary.php'
    </script>";
    # code...
   }
   else{
    echo "<script>
    alert('ERROR DELETING')
    window.location.href='read_catogary.php'
    </script>";
    
   }




  }
  else{
    header("location:read_catogary.php");
  }




?>