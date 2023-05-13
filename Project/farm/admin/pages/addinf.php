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
        <p>ADDRESS</p>
    <input type="text" name="add">
     <p>PHONE NUMBER</p>
     <input type="text" name="inum">
     <p>EMAIL</p>
     <input type="email" name="iemail">
   
     <br>
     <button type="submit" class="btn btn-primary" name="inf">ADD INFORMATION</button>

    </form>
    </center>
    <?php
     if(isset($_POST["inf"])){
        $add = $_POST["add"];
        $iphnum = $_POST["inum"];
        $inemail = $_POST["iemail"];

        $insert_inf = "INSERT INTO `information`(`addresss`,`phnm`,`email`) 
        
        VALUES ('$add',' $iphnum','$inemail')";

        $chlo = mysqli_query($conn,$insert_inf);

        if($chlo==true){
            echo  "<script>
            alert('INFORMATION ADDED')
            window.location.href = 'showinf.php'
            
            </script>";
        }
        else{

            echo  "<script>
            alert('INFORMATION ERROR')
            window.location.href = 'showinf.php'
            
            </script>";

        }













     }










?>
    <?php include('footer.php');?>



   



</body>
</html>