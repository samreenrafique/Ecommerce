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
  <?php include('header.php')?>
<?php

$id = $_GET["idbhaago"];
$goo = mysqli_query($conn,"SELECT * FROM `table_products` where product_id = $id");
$array = mysqli_fetch_array($goo); 

?>

<center>

    
<form action="" method="post" enctype="multipart/form-data">
 <p>PRODUCT NAME</p>
<input type="text" name="pname" value="<?php echo $array[1];?>">
<p>PRODUCT PRICE</p>
<input type="number" name="ppr" value="<?php echo $array[2];?>">
<p>PRODUCT QUANTITY</p>
<input type="number" name="pquan" value="<?php echo $array[3];?>">
<p>PRODUCT CATOGARY</p>
<select name="cat" value="<?php echo $array[4];?>" <?php if($array[4]==true){echo "checked";}?>>
    <option value="">SELECT CATOGARY</option>
    <?php
    $fetch_cat = "SELECT * FROM `tbl_catogary`";
    $gocat = mysqli_query($conn,$fetch_cat);
      if(mysqli_num_rows($gocat)==0){
        echo "<option value=''>NO CATOGERY AVALAIBLE</option>";
      }
      else{
       while($i = mysqli_fetch_array($gocat)){
         echo "<option value='$i[0]'>$i[1]</option>";
       }
      }

       ?>



</select>

<p>PRODUCT IMAGE</p>
<input type="file" name="meriimage"  accept="image/*" 
onchange="document.getElementById('myimg').src=window.URL.createObjectURL(this.files[0])" />
<img src="<?php echo $array[5];?>" width="100" height="100" id="myimg"/>
<br><br>

 <button type="submit" class="btn btn-primary" name="upt">UPDATE PRODUCT</button>

</form>
</center>

<?php
if(isset($_POST["upt"])){
   $pro_name = $_POST["pname"];
   $pro_price = $_POST["ppr"];
   $pro_quant = $_POST["pquan"];
   $pro_cat = $_POST["cat"];

   if (isset($_FILES["meriimage"]["name"])) {
    
     $image_name = $_FILES["meriimage"]["name"];
     $image_size = $_FILES["meriimage"]["size"];
     $image_temp_Loc = $_FILES["meriimage"]["tmp_name"];

     $img_location = "../../productimages/" .$image_name;

     if ($image_size <= 1000000) {
      $update = "update `table_products` set product_name='$pro_name',
      product_price='$pro_price',
      product_quantity='$pro_quant',
      product_catogary='$pro_cat',
      product_image = '$img_location'
      where product_id = '$id'";
      $update_run = mysqli_query($conn, $update);

      if ($update_run) {
        move_uploaded_file($image_temp_Loc, $img_location);
        ?>
        <script>
         
          alert("Record Updated");
          window.location.href="showproduct.php";
        </script>
      <?php
      } else {
        echo mysqli_error($conn);
      }

     } else {
     ?>
      <script>
        alert("Invalid Picture Size");
      </script>
     <?php
     }
     

   } else {
    $previous_image = $array[5];
    $update = "update `table_products` set product_name='$pro_name',
    product_price='$pro_price',
    product_quantity='$pro_quant',
    product_catogary='$pro_cat',
    product_image = '$previous_image'
    where product_id = '$id'";

    $update_run = mysqli_query($conn, $update);

    if ($update_run) {
      ?>
      <script>
        alert("Record Updated");
        window.location.href="showproduct.php";
      </script>
    <?php
    } else {
      echo mysqli_error($conn);
    }
    
   }
   


}

?>
<?php
include('footer.php');
  ?>  
</body>
</html>