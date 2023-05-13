<?php require_once('../../config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
include('header.php');

?>
<?php
$id = $_GET["idbhaago"];
$goemp = mysqli_query($conn,"SELECT * FROM `tbl_employee` WHERE emp_id = $id");
$emparray = mysqli_fetch_array($goemp); 


?>

<center>

    
<form action="" method="post" enctype="multipart/form-data">
    <p>EMPLOYEE NAME</p>
<input type="text" name="ename" value="<?php echo $emparray[1] ?>">
 <p>EMPLOYEE EMAIL</p>
 <input type="email" name="eemail" value="<?php echo $emparray[2] ?>">
 <p>EMPLOYEE ADDRESS</p>
 <input type="text" name="eadd" value="<?php echo $emparray[3] ?>">
 <p>EMPLOYEE PHNUMBER</p>
 <input type="text" name="enm" value="<?php echo $emparray[4] ?>">
 <p>EMPLOYEE GENDER</p>
 <input type="radio" name="egender" value="FEMALE"
 <?php
 if($emparray[5]=="FEMALE"){
    echo "checked";
 }
 ?>
 >FEMALE
 <input type="radio" name="egender" value="MALE" <?php
 if($emparray[5]=="MALE"){
    echo "checked";
 }
 ?>>MALE
 <input type="radio" name="egender" value="OTHERS" <?php
 if($emparray[5]=="OTHERS"){
    echo "checked";
 }
 ?>>OTHERS

 <p>EMPLOYEE SALARY</p>
 <input type="number" name="esalary" value="<?php echo $emparray[6] ?>">
 <p>EMPLOYEE DEPARTMENT</p>
 <input type="text" name="edep" value="<?php echo $emparray[7] ?>">
 <p>EMPLOYEE IMAGE</p>
 <input type="file" name="eimage" required accept="image/*" value="<?php echo $emparray[8]?>">
 
 <br><br>
 <button type="submit" class="btn btn-primary" name="updemp">UPDATE EMPLOYEES</button>

</form>
</center>
      
<?php
include('footer.php');

?>

<?php
if(isset($_POST["updemp"])){   
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
        $update_emp="UPDATE `tbl_employee` SET `emp_name`=' $em_name',
        `emp_email`='$em_mail',
        `emp_add`=' $em_address',
        `emp_num`=' $em_ph',
        `emp_gender`=' $em_gender',
        `emp_salary`='$em_salary',
        `emp_dep`='$em_dep',
        `emp_img`=' $_loc_img'
         WHERE emp_id = $id";

         $run_upd = mysqli_query($conn,$update_emp);
         if($run_upd==true){
            echo "<script>
            alert('EMPLOYEE UPDATED SUCCESSFULLY')
           window.location.href='showemployee.php'
            </script>";
         }

         else{
            echo "<script>
            alert('".mysqli_error($conn)."')
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


