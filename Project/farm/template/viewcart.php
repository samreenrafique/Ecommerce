
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
    <table class="table table-border">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Total Price</th>
        </tr>
   
    <?php
$total = 0;
    if(!empty($_SESSION['cart']))
        {
            $i = 0;
            if (!isset($_SESSION['qty_array'])) {
                $_SESSION['qty_array'] = array_fill(0,count($_SESSION['cart']),1);
            }
            $fetchid = implode(",",$_SESSION['cart']);
            $run = mysqli_query($conn,"select * from table_products where product_id  in ($fetchid)");
            if (mysqli_num_rows($run) == 0) {
               echo  "<tr>
                    <th colspan='5'>No Data in Cart</th>
                </tr>";
            }
            else{
                while($data = mysqli_fetch_array($run))
                {
                   echo  "<tr>
                        <td>$data[0]</td>
                        <td>$data[1]</td>
                        <td>$data[2]</td>
                        <td>". $_SESSION['qty_array'][$i] ."</td>
                        <td>".number_format( $_SESSION['qty_array'][$i] * $data[2])."</td>
                    </tr>";
                    $total +=  $_SESSION['qty_array'][$i] * $data[2];
                    $i++;
                }
               echo "
               <tr><a href='clear_cart.php' class='btn btn-danger'>Clear Cart</a></tr>
               <tr>
                    <td colspan='5' style='text-align:right'>$total</td>
                </tr>";
            }
        }

    ?>
     </table>
</body>
</html>