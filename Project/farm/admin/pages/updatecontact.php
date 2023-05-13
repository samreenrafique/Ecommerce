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
$idd = $_GET["idgo"];
$upd_con = mysqli_query($conn,"SELECT * FROM `tbl_commerce` WHERE id = $idd");
$carray = mysqli_fetch_array($upd_con);


?>
<!-- inner page section -->
<section class="inner_page_head">
  <div class="container_fuild">
     <div class="row">
        <div class="col-md-12">
           <div class="full">
              <h3 style="text-align: center;">Contact us</h3>
           </div>
        </div>
     </div>
  </div>
</section>
<!-- end inner page section -->
<!-- why section -->
<section class="why_section layout_padding">
  <div class="container">
  
     <div class="row">
        <div class="col-lg-8 offset-lg-2">
           <div class="full">
                 <center>
              <form action="" method="post">
                 <fieldset>
                    <input type="text" placeholder="Enter your full name" name="name" value="<?php echo $carray[1]; ?>" required />
                    <br><br>
                    <input type="email" placeholder="Enter your email address" name="email" value="<?php echo $carray[2]; ?>" required />
                    <br><br>
                    <input type="text" placeholder="Enter subject" name="subject" value="<?php echo $carray[3];?>" required />
                    <br><br>
                    <textarea placeholder="Enter your message" name="msg"  required><?php echo $carray[4];?></textarea>
                    <br><br>
                    <button type="submit" class="btn btn-primary" name="upc">UPDATE CONTACT</button>
                 </fieldset>
              </form>
              </center>
           </div>
        </div>
     </div>
  </div>
</section>

<?php
if(isset($_POST["upc"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $sub = $_POST["subject"];
    $text = $_POST["msg"];

    $upd_con = "UPDATE `tbl_commerce` SET `name`=' $name',
    `email`=' $email',
    `subject`=' $sub',
    `mssg`='$text'
     WHERE id = $idd";

     $updrun = mysqli_query($conn,$upd_con);

     if($updrun==true){
      echo "<script>
      alert('CONTACT UPDATED')
      window.location.href='showcontact.php'
      </script>";
     }
     else{
        echo "<script>
        alert('".mysqli_error($conn)."')
        window.location.href='showcontact.php'
        </script>";

     }


}




?>
<!-- end why section -->
<!-- arrival section -->

<!-- end arrival section -->
    
</body>
</html> 
