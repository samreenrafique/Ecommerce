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
<div class="hero_area">
        
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Product Grid</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <center>
            <div class="container d-flex flex-row-reverse">
               <form action="" method="get">
                  <div class="row">
               
                  <div class="col-md-4">
                     <input type="text" name="searchtxt" class="form-control">
                  </div>
                  <div class="col-md-4">
                     <select name="filter"  class="form-control">
                        <option value="n">Name</option>
                        <option value="c">Category</option>
                        <option value="l">Low to High</option>
                        <option value="h">High to Low</option>
                     </select>
                  </div>
                  <div class="col-md-4">
                     <button type="submit" class="btn btn-danger" name="btn">
                         <i class="fa fa-search" aria-hidden="true"></i>
                     </button>
                  </div>
               
            </div>
            </form>
           </div>
           </center>




            <div class="row">
               <?php
                     if (isset($_GET["btn"])) {
                        $search = $_GET["searchtxt"];
                        $filter = $_GET["filter"];

                        if ($filter == "n") {
                           $fetchproduct = "SELECT * FROM `table_products` where product_name like '%" . $search ."%'";
                        }
                        else if  ($filter == "c") {
                           $fetchcategory = "SELECT * FROM `tbl_catogary` where name like '%" . $search ."%'";
                           $runcat = mysqli_query($conn , $fetchcategory);
                           $num = mysqli_num_rows($runcat);

                           $c = mysqli_fetch_array($runcat);
                           $cat_id = $c[0];
                           $fetchproduct = "SELECT * FROM `table_products` where product_catogary  = '$cat_id'";

                        }
                        else if  ($filter == "l") {
                           $fetchproduct = "SELECT * FROM `table_products` order by product_price asc";
                        }
                        else if  ($filter == "h") {
                           $fetchproduct = "SELECT * FROM `table_products` order by product_price desc";
                        }

                     }
                     else{
                        $fetchproduct = "SELECT * FROM `table_products`";
                      
                     }
                     
                     $executeproduct = mysqli_query($conn, $fetchproduct);
                     $check_prodt = mysqli_num_rows($executeproduct);
                     if ($check_prodt > 0) {
                       while($convert_array = mysqli_fetch_array($executeproduct)){ ?>
                           <div class="col-sm-6 col-md-4 col-lg-3">
                           <div class="box">
                              <div class="option_container">
                                 <div class="options">
                                    <a href="" class="option1">
                                       <?php echo $convert_array[1]; ?>
                                    </a>
                                    <a href="" class="option2">
                                    Buy Now
                                    </a>
                                 </div>
                              </div>
                              <div class="img-box">
                                 <img src="<?php echo $convert_array[5]; ?>" alt="">
                              </div>
                              <div class="detail-box">
                                 <h5>
                                 <?php echo $convert_array[1]; ?>
                                 </h5>
                                 <h6> Rs 
                                 <?php echo $convert_array[2]; ?>
                                 </h6>
                              </div>
                           </div>
                        </div>
                  <?php     }
                     } else {
                         echo "Nothing To Show";
                     }
                     


               ?>


               
              
            </div>
            <div class="btn-box">
               <a href="">
               View All products
               </a>
            </div>
         </div>
      </section>
      <!-- end product section -->
      <?php
       include('footer.php');
      ?>
    
</body>
</html>