<?php require_once('../../config.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include('header.php');?>

<?php

$infid = $_GET["idbhaago"];
$goo = mysqli_query($conn,"SELECT * FROM `information` where id = $infid");
$meriarray = mysqli_fetch_array($goo); 

?>

<center>

    
    <form action="" method="post">
        <p>ADDRESS</p>
    <input type="text" name="add" value="<?php echo $meriarray[1] ?>">
     <p>PHONE NUMBER</p>
     <input type="text" name="inum" value="<?php echo $meriarray[2] ?>">
     <p>EMAIL</p>
     <input type="email" name="iemail" value="<?php echo $meriarray[3] ?>">
   
     <br>
     <button type="submit" class="btn btn-primary" name="upinf">UPDATE INFORMATION</button>

    </form>
    </center>
  <?php
    if(isset($_POST["upinf"])){
        $add = $_POST["add"];
        $iphnum = $_POST["inum"];
        $inemail = $_POST["iemail"];

        $upinf = "UPDATE `information` SET `addresss`='$add',
        `phnm`='$iphnum',
        `email`= '$inemail'
         WHERE id = $infid";

         $bhago = mysqli_query($conn,$upinf);
         if($bhago==true){
            echo "<script>
            alert('INFORMATION UPDATED SUCCESSFULLY')
            window.location.href='showinf.php'
            
            </script>";



         }
         else{

            echo "<script>
            alert('".mysqli_error($conn)."')
            window.location.href='showinf.php'
            
            </script>";
         }



    }




?>


<?php include('footer.php');?>

</body>
</html>