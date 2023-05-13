<?php require_once('../../config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>EMPLOYEES</title>
</head>
<body>
    <?php include('header.php');?>
    

 <?php 
 
     $insert_query = "SELECT * FROM `tbl_employee`";
     $execute = mysqli_query($conn,$insert_query);
     $kitni_rows = mysqli_num_rows($execute);

     echo"<center><button class='btn btn-primary'><a style='text-decoration: none;' href='addemployee.php'>ADD EMPLOYEES</a></button></center>";

     echo  "<table class='table table-striped table-hover table-dark'>";
        
       echo 
       "
       <tr  class='table-primary'>
        <td>EMPLOYEE ID</td>
        <td>EMPLOYEE NAME</td>
        <td>EMPLOYEE EMAIL</td>
        <td>EMPLOYEE ADDRESS</td>
        <td>EMPLOYEE PH#</td>
        <td>EMPLOYEE GENDER</td>
        <td>EMPLOYEE SALARY</td>
        <td>EMPLOYEE DEPARTMENT</td>
        <td>EMPLOYEE IMAGE</td>
        </tr>";

       

      
      
      


     if($kitni_rows > 0 ){
     

        while($em = mysqli_fetch_array($execute)){
          
            echo "<tr class='table-primary'>
            <td>$em[0]</td>
            <td>$em[1]</td>
            <td>$em[2]</td>
            <td>$em[3]</td>
            <td>$em[4]</td>
            <td>$em[5]</td>
            <td>$em[6]</td>
            <td>$em[7]</td>
            <td><img src='$em[8]' width = 200px height = 250px></td>
           

             
            <td><a href='deleteemployee.php?idbhaago=$em[0]'><i class='fa-solid fa-delete-left' style='red'></i></a></td>
            <td><a href='updateemployee.php?idbhaago=$em[0]'><i class='fa-solid fa-edit' style='color:'red'></i></a></td>
               
             </tr>";


        }
     }
     else{

       echo "<tr class='bg-info'>
            <td colspan = '10' style='text-align:center' class='text-danger'>no records</td>
             </tr>";    
     }
      "</table>";


      
    ?>
    <?php include('footer.php');?>

</body>
</html>