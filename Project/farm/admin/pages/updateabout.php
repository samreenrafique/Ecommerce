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

$abid = $_GET["idbhaago"];
$goo = mysqli_query($conn,"SELECT * FROM `tbl_about` where id = $abid");
$meriarray = mysqli_fetch_array($goo); 

?>


<center>

<h1>ABOUT</h1>

    
<form action="" method="post">
    <p>ABOUT HEADING</p>
<input type="text" name="aname" value="<?php echo $meriarray[1];?> ">
 <p>ABOUT DESCRIPTION</p>
 <textarea name="ades"  cols="30" rows="10"><?php echo $meriarray[2];?></textarea>
 <br>
 <button type="submit" class="btn btn-primary" name="abtup">UPDATE</button>

</form>
</center>

<?php
if(isset($_POST["abtup"])){
    $ab_name = $_POST["aname"];
    $ab_des = $_POST["ades"];

    $upd_ab = "UPDATE `tbl_about` SET `name`=' $ab_name ',
    `description`='$ab_des'
     WHERE 1";

     $runup = mysqli_query($conn,$upd_ab);

     if($runup==true){
      echo "<script>
      alert('ABOUT UPDATED')
      window.location.href = 'showabout.php'
      </script>";


     }

     



}




?>












<?php include('footer.php');?>

</body>
</html>