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
        <h1>ABOUT</h1>

    
    <form action="" method="post">
        <p>ABOUT HEADING</p>
    <input type="text" name="aname">
     <p>ABOUT DESCRIPTION</p>
     <textarea name="ades"  cols="30" rows="10"></textarea>
     <br>
     <button type="submit" class="btn btn-primary" name="abt">ADD MORE</button>

    </form>
    </center>
    <?php include('footer.php');?>

    <?php
    if(isset($_POST["abt"])){
        $ab_name = $_POST["aname"];
        $ab_des = $_POST["ades"];

        $insert_about = "INSERT INTO `tbl_about`(`name`, `description`) 
        VALUES ('$ab_name','$ab_des')";
        $runabout = mysqli_query($conn,$insert_about);
        if($runabout==true){
            echo "<script>
            alert('ABOUT ADDED SUCCESSFULLY')
            window.location.href='showabout.php'
            </script>";







        }
        else{
            echo "<script>
            alert('ERROR ADDING')
            window.location.href='showabout.php'
            </script>";

        }





    }





     ?>



   
    




    



</body>
</html>