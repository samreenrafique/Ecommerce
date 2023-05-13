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

    
    <form action="" method="post" enctype="multipart/form-data">
        <p>EMPLOYEE NAME</p>
    <input type="text" name="ename">
     <p>EMPLOYEE EMAIL</p>
     <input type="email" name="eemail">
     <p>EMPLOYEE ADDRESS</p>
     <input type="text" name="eadd">
     <p>EMPLOYEE PHNUMBER</p>
     <input type="text" name="enm">
     <p>EMPLOYEE GENDER</p>
     <input type="radio" name="egender" value="FEMALE">FEMALE
     <input type="radio" name="egender" value="MALE">MALE
     <input type="radio" name="egender" value="OTHERS">OTHERS

     <p>EMPLOYEE SALARY</p>
     <input type="number" name="esalary">
     <p>EMPLOYEE DEPARTMENT</p>
     <input type="text" name="edep">
     <p>EMPLOYEE IMAGE</p>
     <input type="file" name="eimage" required accept="image/*">
     
     <br><br>
     <button type="submit" class="btn btn-primary" name="emp">ADD EMPLOYEES</button>

    </form>
    </center>
    <?php include('footer.php');?>
    <?php
    if(isset($_POST["emp"])){
     $em_name = $_POST["ename"];
     $em_mail = $_POST["eemail"];
     $em_address = $_POST["eadd"];
     $em_ph = $_POST["enm"];
     $em_gender = $_POST["egender"];
     $em_salary = $_POST["esalary"];
     $em_dep = $_POST["edep"];
     $img_name = $_FILES["eimage"]["name"];
     $img_size = $_FILES["eimage"]["size"];
     $img_temp = $_FILES["eimage"]["tmp_name"];

     $_loc_img = "../../employeeimages/" . $img_name;

     if($img_size <= 1000000){
        move_uploaded_file($img_temp,$_loc_img);
        $inser_emp="INSERT INTO `tbl_employee`(`emp_name`, `emp_email`, `emp_add`, `emp_num`, `emp_gender`, `emp_salary`, `emp_dep`, `emp_img`) 
        VALUES ('$em_name','$em_mail','$em_address','$em_ph','$em_gender','$em_salary','$em_dep','$_loc_img')";

         $run_emp = mysqli_query($conn,$inser_emp);

         if($run_emp==true){
            echo "<script>
            alert('EMPLOYEE ADDED SUCCESSFULLY')
            window.location.href='showemployee.php'
            </script>";
         }
         else{
            echo "<script>
            alert('ERROR ADDING')
            window.location.href='showemployee.php'
            </script>";
         }

     }
     else{
        echo "<script>
        alert('image must be 1mb')
        window.location.href='addemployee.php'
        </script>";
     }






    }


          ?>



    



</body>
</html>