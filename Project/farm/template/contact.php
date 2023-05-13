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


        
      
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Contact us</h3>
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

                     <form action="" method="post">
                        <fieldset>
                           <input type="text" placeholder="Enter your full name" name="name" required />
                           <input type="email" placeholder="Enter your email address" name="email" required />
                           <input type="text" placeholder="Enter subject" name="subject" required />
                           <textarea placeholder="Enter your message" name="msg" required></textarea>
                           <input type="submit" value="Submit" name="btn" />
                        </fieldset>
                     </form>

                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end why section -->
      <!-- arrival section -->
      <section class="arrival_section">
         <div class="container">
            <div class="box">
               <div class="arrival_bg_box">
                  <img src="images/arrival-bg.png" alt="">
               </div>
               <div class="row">
                  <div class="col-md-6 ml-auto">
                     <div class="heading_container remove_line_bt">
                        <h2>
                           #NewArrivals
                        </h2>
                     </div>
                     <p style="margin-top: 20px;margin-bottom: 30px;">
                        Vitae fugiat laboriosam officia perferendis provident aliquid voluptatibus dolorem, fugit ullam sit earum id eaque nisi hic? Tenetur commodi, nisi rem vel, ea eaque ab ipsa, autem similique ex unde!
                     </p>
                     <a href="">
                     Shop Now
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end arrival section -->
      <?php
        include('footer.php');

       ?>
       <?php
       if(isset($_POST["btn"])){
         require_once('../config.php');
         $name = $_POST["name"];
         $email = $_POST["email"];
         $sub = $_POST["subject"];
         $text = $_POST["msg"];

         $insert_query = "INSERT INTO `tbl_commerce`(`name`, `email`, `subject`, `mssg`) 
         VALUES ('$name','$email','$sub','$text')";

         $execute = mysqli_query($conn,$insert_query);

          if ($execute==true) {
            echo "<script>
            alert('sent')
            window.location.href='../admin/pages/showcontact.php'
            
            </script>";
          }
          else{
            echo "<script>
            alert('petrol khtm')
            
            </script>";
           
          }


       }

       ?>
    
</body>
</html>