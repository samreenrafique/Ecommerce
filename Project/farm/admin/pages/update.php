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

$id = $_GET["idbhaag"];
$goo = mysqli_query($conn,"SELECT * FROM `tbl_catogary` where id = $id");
$meriarray = mysqli_fetch_array($goo); 

?>


<center>

    
<form action="" method="post">
    <p>CATOGAEY NAME</p>
<input type="text" name="catname" value="<?php echo $meriarray[1];?>">
 <p>DESCRIPTION</p>



 <textarea placeholder="Enter your message" name="msg"  required><?php echo $meriarray[2];?></textarea>
 <br>
 <button type="submit" class="btn btn-primary" name="upt">UPDATE CATOGARIES</button>

</form>
</center>
<?php
if(isset($_POST["upt"])){

$cname = $_POST["catname"];
$description = $_POST["msg"];

$update_query = "UPDATE `tbl_catogary` SET `name`='$cname',
`description`='$description'
 WHERE id = $id";

 $upr_run = mysqli_query($conn,$update_query);

 if ($upr_run==true) {
    echo "<script>
    alert('CATOGARY UPDATED')
    window.location.href='read_catogary.php'
    </script>";
    # code...
 }
 else{
    echo "<script>
    alert('".mysqli_error($conn)."')
    window.location.href='read_catogary.php'
    </script>";
 }
}

?>











<?php include('footer.php');?>

</body>
</html>