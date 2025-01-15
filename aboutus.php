<?php
include "links.php";
include "connect.php";
include "essentials.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CareWell Hospital</title>
    <style>
         *{
            
            font-family: 'Poppins', sans-serif;
          
        }
        .h-font
        {
            font-family: 'Merienda', cursive;
        }
        .custom-bg
        {
          background-color: #2ec1ac;

        }
        .custom-bg:hover
        {
          background-color: #279ebc;

        }
        .form-available
        {
          margin-top: -50px;
          z-index: 2;
          position: relative;
        }
        @media screen and (max-width: 575px )
        {
          .form-available
        {
          margin-top: 25px;
          
          padding: 0 35px;
        }
        }

    </style>
</head>

<body class="bg-light">
 <?php
     include "nav.php"
   ?>
   <div class="main">
     <div class="container">
         <h6 style="color:green;padding:13px;">ABOUT US</h6>
         <h2>WELCOME TO CAREWELL HOSPITAL </h2>
         <div class="row">
             <div class="col-sm-7">
                 <div class="left-text-content">
                     <div class="section-heading">
                           <p>
                             CareWell Hospital has always achieved excellent international standards of quality products & services. The Group is consistently focused on enhancing its brand & creating memorable experiences for people...
                           </p>                               
                           <li>The CareWell Hospital is located in the heart of the city, opposite Frere Hall and Park. The hotel enjoys excellent accessibility to and from all directions.</li><br>
                           <li>The CareWell Hospital is a family Resort in Karachi that provides attractions for all ages and offers guests amenities of their choice.</li><br>
                           <li>All rooms are spacious, well-furnished, air-conditioned, and have an amazing view of the Arabian Sea creek and tropical green mangroves. Other than that, there is 24-hour room service, Wi-Fi, complimentary bottled water, LCD televisions, and newspapers daily in both English and Urdu.</li><br>
                           <li>CareWell Hospital offers a huge number of facilities like a swimming pool, gym, massage center, safety deposit boxes, airport pick-and-drop, laundry, and ironing.</li><br>
                           <li>If you want to be surrounded by the old-world charm of Karachi, with the new-age amenities and facilities of the modern world, look no further!</li><br>
                     </div>
                 </div>
             </div>
             <div class="col-sm-5">
                  <img src="images/1.jpg" alt="" class="img-fluid" height="470px" width="470px" style="padding-bottom: 20px; display: block; border: none;">
             </div>
             <div class="row nopadding">
                 <div class="col-md-4 ">
                     <img src="images/2.jpg" alt="" class="img-fluid" height="300px" width="300px" style="padding-bottom: 20px; display: block; border: none;">
                  </div>
                  <div class="col-md-4">
                     <img src="images/3.jpg" alt="" class="img-fluid" height="300px" width="300px" style="padding-bottom: 20px; display: block; border: none;">
                  </div>
                  <div class="col-md-4">
                     <img src="images/4.jpg" alt="" class="img-fluid" height="300px" width="300px" style="padding-bottom: 20px; display: block; border: none;">
                 </div>
              </div>
              <div class="row nopadding">
                    <div class="col-md-4 ">
                         <img src="images/5.jpg" alt="" class="img-fluid" height="300px" width="300px" style="padding-bottom: 20px; display: block; border: none;">
                     </div>
                     <div class="col-md-4">
                         <img src="images/6.jpg" alt="" class="img-fluid" height="300px" width="300px" style="padding-bottom: 20px; display: block; border: none;">
                      </div>
                     <div class="col-md-4">
                         <img src="images/2.jpg" alt="" class="img-fluid" height="300px" width="300px" style="padding-bottom: 20px; display: block; border: none;">
                     </div>
                 </div>
              </div>
         </div>  
    </div>       
    <?php
    include "footer.php";
    ?>
</body>

</html>