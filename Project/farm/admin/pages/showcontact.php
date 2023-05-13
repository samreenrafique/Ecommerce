<?php require_once('../../config.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>CONTACT</title>
</head>
<body>
<?php include('header.php');?>

<?php 
$selectquery = "SELECT * FROM `tbl_commerce`";
$runquery = mysqli_query($conn,$selectquery);
$rows_check = mysqli_num_rows($runquery);

echo"<center><button class='btn btn-primary'><a style='text-decoration: none;' href='../../template/contact.php'>ADD CONTACT</a></button></center>";

echo "<table class ='table table-striped table-hover table-primary'>";
 echo "<tr>
  <td>ID</td>
  <td>NAME</td>
  <td>EMAIL</td>
  <td>SUBJECT</td>
  <td>MESSAGE</td>
  </tr>";





if($rows_check > 0){

    while($c = mysqli_fetch_array($runquery)){

        echo "<tr>
        <td>$c[0]</td>
        <td>$c[1]</td>
        <td>$c[2]</td>
        <td>$c[3]</td>
        <td>$c[4]</td>       
        <td><a href='deletecontact.php?idgo=$c[0]'><i class='fa-solid fa-delete-left' style='red'></i></a></td>
        <td><a href='updatecontact.php?idgo=$c[0]'><i class='fa-solid fa-edit' style='color:'red'></i></a></td>
         
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