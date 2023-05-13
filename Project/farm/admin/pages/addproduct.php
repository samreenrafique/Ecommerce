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
    <title>ADD PRODUCTS</title>
</head>
<body>
    <center>

    
    <form action="" method="post" enctype="multipart/form-data">
     <p>PRODUCT NAME</p>
    <input type="text" name="pname">
    <p>PRODUCT PRICE</p>
    <input type="number" name="ppr">
    <p>PRODUCT QUANTITY</p>
    <input type="number" name="pquan">
    <p>PRODUCT CATOGARY</p>
    <select name="cat">
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
    <input type="file" name="meriimage"  required accept="image/*">
    <br><br>
  
     <button type="submit" class="btn btn-primary" name="btn1">ADD PRODUCT</button>

    </form>
    </center>
    <?php include('footer.php');?>

    <?php
    if(isset($_POST["btn1"])){
    $product_name = $_POST["pname"];
    $product_price = $_POST["ppr"];
    $product_quantity = $_POST["pquan"];
    $product_catogary = $_POST["cat"];
    $img_name=$_FILES["meriimage"]["name"];
    $img_size = $_FILES["meriimage"]["size"];
    $_tmp_loc = $_FILES["meriimage"]["tmp_name"];

    $img_location = "../../productimages/" .$img_name;



       
       if($img_size <=1000000){
        
    $insert_product = "INSERT INTO `table_products`(`product_name`,`product_price`,`product_quantity`,`product_catogary`,`product_image`) 
    VALUES ('$product_name',' $product_price','$product_quantity','$product_catogary','$img_location')";
        
     $run_product = mysqli_query($conn,$insert_product);
     if ($run_product==true) {
      move_uploaded_file($_tmp_loc,$img_location);
      echo "<script>
      alert('PRODUCT ADDED SUCCESSFULLY')
      window.location.href ='showproduct.php'
      </script>";
      # code...
     }
     else{
      echo "<script>
      alert('".mysqli_error($conn)."')
      window.location.href ='showproduct.php'
      </script>";

     }


       }
       else{
        echo "<script>
        alert('image must be 1mb')    
        </script>";
       }



    }
    else{
      header("location:showproduct.php");
    }
    ?>





    





        



</body>
</html>