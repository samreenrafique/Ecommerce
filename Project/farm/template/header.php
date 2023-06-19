
<?php
   session_start();
   require_once ("../config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="css/responsive.css" rel="stylesheet" />
</head>
<body>

         <!-- header section strats -->
         <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="index.php"><img width="250" src="images/logo.png" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="about.php">About</a></li>
                              <li><a href="testimonial.php">Testimonial</a></li>
                           </ul>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Shop By <span class="caret"></span></a>
                           <ul class="dropdown-menu">

                           <?php
                               $fetchproduct = "SELECT * FROM `tbl_catogary`";
                               $executeproduct = mysqli_query($conn, $fetchproduct);
                               $check_prodt = mysqli_num_rows($executeproduct);

                               if ($check_prodt > 0 ) {
                                 while($d = mysqli_fetch_array($executeproduct)){  
                                   echo   "<li><a href='collection.php?n=$d[0]'>$d[1]</a></li>";
                                 }
                               } else {
                                 echo   "<li><a href='#'>Nothing</a></li>";
                               }
                               
                           ?>

                            
                              
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="product.php">Products</a>
                        </li>
                      
                        <li class="nav-item">
                           <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">
                           <a href="viewCart.php" class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <span class="badge"><?php if(isset($_SESSION['cart'])){
                              echo count($_SESSION['cart']); }?></span><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                           </a>
                        </li>
                        <form class="form-inline">
                           <a href="../UserRegistration/index.php" class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <i class="fa fa-user" aria-hidden="true"></i>
                              </a>
                        </form>
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
    
</body>
</html>