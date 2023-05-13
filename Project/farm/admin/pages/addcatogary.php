<?php
  require_once('../../config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>

<?php include('header.php');?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>

    
    <form action="" method="post">
        <p>CATOGAEY NAME</p>
    <input type="text" name="catname">
     <p>DESCRIPTION</p>
     <textarea name="des"  cols="30" rows="10"></textarea>
     <br>
     <button type="submit" class="btn btn-primary" name="btn">ADD CATOGARIES</button>

    </form>
    </center>
    <?php include('footer.php');?>

    <?php

    if(isset($_POST["btn"])){

        $cname = $_POST["catname"];
        $description = $_POST["des"];


        $insert_cat = "INSERT INTO `tbl_catogary`(`name`, `description`) 
        VALUES ('$cname','$description')";

        $run = mysqli_query($conn,$insert_cat);

        if ($run==true) {
            echo "<script>
             alert('CATOGARIES ADDED SUCCESSFULLY')
             window.location.href='read_catogary.php'
            </script>";
        }
        else{
            echo "<script>
            alert('CATOGARIES ADDED SUCCESSFULLY')
           </script>"; 
        }


    }





        ?>



</body>
</html>