<?php
 require_once('../../config.php');

 if(isset($_GET["idbhaago"])){
    $infid = $_GET["idbhaago"];
    $deleteinf = "DELETE FROM `information` WHERE id = $infid";
    $runinf = mysqli_query($conn,$deleteinf);

    if($runinf){
        echo "<script>
        alert('INMFORMATION DELETED')
        window.location.href='showinf.php'
        </script>";
    }
    else{
        echo "<script>
        alert('ERROR DELETING')
        window.location.href='showinf.php'
        </script>";
    }
 }














?>