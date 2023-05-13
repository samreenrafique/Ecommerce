<?php require_once('../../config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PRODUCT</title>
</head>
<body>
    <?php include('header.php');?>
    

 <?php 
 
     $insert_query = "SELECT * FROM `table_products`";
     $execute = mysqli_query($conn,$insert_query);
     $kitni_rows = mysqli_num_rows($execute);

     echo"<center><button class='btn btn-primary'><a style='text-decoration: none;' href='addPRODUCT.php'>ADD PRODUCT</a></button></center>";

     echo  "<table class='table table-striped table-hover table-dark'>";
        
       echo 
       "
       <tr  class='table-primary'>
        <td>PRODUCT ID</td>
        <td>PRODUICT NAME</td>
        <td>PRODUCT PRICE</td>
        <td>PRODUCT QUANTITY</td>
        <td>PRODUCT CATOOGARY</td>
        <td>PRODUCT IMAGE</td>
        </tr>";

       

      
      
      


     if($kitni_rows > 0 ){
     

        while($b = mysqli_fetch_array($execute)){
          $fetchcatogary = "SELECT * FROM `tbl_catogary` where id = $b[4]";
          $run = mysqli_query($conn,$fetchcatogary);
          $fetcharray = mysqli_fetch_array($run);
            echo "<tr class='table-primary'>
            <td>$b[0]</td>
            <td>$b[1]</td>
            <td>$b[2]</td>
            <td>$b[3]</td>
            <td>$fetcharray[1]</td>
            <td><img src='$b[5]' width = 190px height = 150px></td>

             
            <td><a href='deleteproduct.php?idbhaago=$b[0]'><i class='fa-solid fa-delete-left' style='red'></i></a></td>
            <td><a href='updateproduct.php?idbhaago=$b[0]'><i class='fa-solid fa-edit' style='color:'red'></i></a></td>
               
             </tr>";


        }
     }
     else{

       echo "<tr class='bg-info'>
            <td colspan = '3' style='text-align:center' class='text-danger'>no records</td>
             </tr>";    
     }
      "</table>";


      
    ?>
    <?php include('footer.php');?>

</body>
</html>