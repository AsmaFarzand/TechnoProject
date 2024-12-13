<?php
include "links.php";
include "connect.php";
include "essentials.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CareWell Hospital</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/style.css"> <!-- Link your CSS file -->
  <style>
        :root {
            --teal: #2ec1ac;
            --teal_hover: #279e8c;
        }

        * {
            font-family: 'Poppins', sans-serif;
        }

        .h-font {
            font-family: 'Merienda', cursive;
        }

        .custom-bg {
            background-color: var(--teal);
            border: 1px solid var(--teal);

        }

        .custom-bg:hover {
            background-color: var(--teal_hover);
            border-color: var(--teal_hover);

        }

        .form-available {
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        .h-line {
            width: 150px;
            margin: 0 auto;
            height: 1.7px;
        }

        @media screen and (max-width: 575px) {
            .form-available {
                margin-top: 25px;
                padding: 0 35px;
            }
        }
        .h-font {
    font-family: 'Merienda', cursive;
}

.responsive-cell-block {
    min-height: 75px;
}

.text-blk {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
    line-height: 25px;
}

.responsive-container-block {
    min-height: 75px;
    height: fit-content;
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    margin-top: 0px;
    margin-right: auto;
    margin-bottom: 0px;
    margin-left: auto;
    justify-content: space-evenly;
}

.container {
    max-width: 1380px;
    margin-top: 60px;
    margin-right: auto;
    margin-bottom: 60px;
    margin-left: auto;
    padding-top: 0px;
    padding-right: 30px;
    padding-bottom: 0px;
    padding-left: 30px;
}

.card {
    text-align: center;
    box-shadow: rgba(0, 0, 0, 0.05) 0px 4px 20px 7px;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-top: 30px;
    padding-right: 25px;
    padding-bottom: 30px;
    padding-left: 25px;
}

.card-container {
    width: 280px;
    margin-top: 0px;
    margin-right: 10px;
    margin-bottom: 25px;
    margin-left: 10px;
}

.name {
    margin-top: 20px;
    margin-right: 0px;
    margin-bottom: 5px;
    margin-left: 0px;
    font-size: 18px;
    font-weight: 800;
}

.position {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 10px;
    margin-left: 0px;
}

.social-icons {
    width: 70px;
    display: flex;
    justify-content: space-between;
}

.team-image-wrapper {
    clip-path: circle(50% at 50% 50%);
    width: 130px;
    height: 130px;
}

.team-member-image {
    max-width: 100%;
}

@media (max-width: 500px) {
    .card-container {
        width: 100%;
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 25px;
        margin-left: 0px;

    }
    #more {display: none;}s
}
    </style>
</head>
 <!-- HOME PAGE -->
<body class="bg-light">
  <?php include "nav.php"; ?>
  <div class="hero_area">
    <div class="hero_bg_box">
      <img src="images/hero-bg.png" alt="Hero Background">
    </div>
    <section class="slider_section">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
       <div class="carousel-inner">
         <div class="carousel-item active">
           <div class="detail-box">
             <h1>Your Health is our Priority</h1>
             <p>CareWell Hospital is committed to providing exceptional, patient-centered healthcare services with a focus on compassion and quality.</p>
           </div>
         </div>
         <div class="carousel-item">
         <div class="detail-box">
          <h1>We Provide Best Healthcare</h1>
          <p>At CareWell Hospital, we deliver exceptional healthcare services tailored to meet the unique needs of each patient.</p>
       </div>
     </div>
     <div class="carousel-item">
       <div class="detail-box">
         <h1>Compassionate Care, Trusted Expertise</h1>
         <p>Our experienced healthcare professionals are committed to delivering compassionate care.</p>
       </div>
     </div>
   </div>
   <ol class="carousel-indicators">
      <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
      <li data-target="#customCarousel1" data-slide-to="1"></li>
      <li data-target="#customCarousel1" data-slide-to="2"></li>
    </ol>
 </div>
</section>
  </div>
  <!-- END HOME PAGE -->

   <!-- ABOUT US -->
   <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
    </div>
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
                               <div id="extra-content" style="display: none;">
                                 <li>The CareWell Hospital is located in the heart of the city, opposite Frere Hall and Park. The hotel enjoys excellent accessibility to and from all directions.</li><br>
                                 <li>The CareWell Hospital is a family Resort in Karachi that provides attractions for all ages and offers guests amenities of their choice.</li><br>
                                 <li>All rooms are spacious, well-furnished, air-conditioned, and have an amazing view of the Arabian Sea creek and tropical green mangroves. Other than that, there is 24-hour room service, Wi-Fi, complimentary bottled water, LCD televisions, and newspapers daily in both English and Urdu.</li><br>
                                 <li>CareWell Hospital offers a huge number of facilities like a swimming pool, gym, massage center, safety deposit boxes, airport pick-and-drop, laundry, and ironing.</li><br>
                                 <li>If you want to be surrounded by the old-world charm of Karachi, with the new-age amenities and facilities of the modern world, look no further!</li><br>
                             </div>
                             <button id="toggle-btn" class="btn btn-primary custom-bg">
                                  <a href="aboutus.php" style="text-decoration: none; color: white;">Read More</a>
                             </button>
                         </div>
                     </div>
                 </div>
                 <div class="col-sm-5">
                     <img src="images/1.jpg" alt="" class="img-fluid" height="470px" width="470px" style="padding-bottom: 20px; display: block; border: none;">
                  </div>
              </div>
         </div>

          
                   </div>
    </div>
     <!-- END ABOUT US -->

      <!-- DOCTORS -->
      <h2 class=" mt-5 pt-4 mb-4 text-center fw-bold h-font"> OUR DOCTORS</h2>
      <div class="h-line bg-dark"></div>
  <div class="responsive-container-block container">
    <div class="responsive-container-block">
      <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
        <div class="card">
          <div class="team-image-wrapper">
            <img class="team-member-image" src="images/d1.jpg">
          </div>
          <p class="text-blk name">
            Kim SeoHyun
          </p>
          <p class="text-blk position">
           Dermatologist
          </p>
          <div class="social-icons">
            <a href="https://www.twitter.com" target="_blank">
              <i class="bi bi-twitter"></i>

            </a>
            <a href="https://www.facebook.com" target="_blank">
              <i class="bi bi-facebook"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
        <div class="card">
          <div class="team-image-wrapper">
            <img class="team-member-image" src="images/d2.jpg" style="width: 100%;">
          </div>
          <p class="text-blk name">
            Kim Seokjin
          </p>
          <p class="text-blk position">
              General Surgeon
          </p>
          <div class="social-icons">
            <a href="https://www.twitter.com" target="_blank">
              <i class="bi bi-twitter"></i>
            </a>
            <a href="https://www.facebook.com" target="_blank">
              <i class="bi bi-facebook"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
        <div class="card">
          <div class="team-image-wrapper">
            <img class="team-member-image" src="images/d3.jpg">
          </div>
          <p class="text-blk name">
            Kim Sejeong
          </p>
          <p class="text-blk position">
          Gynecologist
          </p>
          <div class="social-icons">
            <a href="https://www.twitter.com" target="_blank">
              <i class="bi bi-twitter"></i>
            </a>
            <a href="https://www.facebook.com" target="_blank">
              <i class="bi bi-facebook"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
        <div class="card">
          <div class="team-image-wrapper">
            <img class="team-member-image" src="images/d4.webp">
          </div>
          <p class="text-blk name">
            Cha Enuwo
          </p>
          <p class="text-blk position">
            Oncologist
          </p>
          <div class="social-icons">
            <a href="https://www.twitter.com" target="_blank">
              <i class="bi bi-twitter"></i>
            </a>
            <a href="https://www.facebook.com" target="_blank">
              <i class="bi bi-facebook"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
        <div class="card">
          <div class="team-image-wrapper">
            <img class="team-member-image" src="images/d5.webp">
          </div>
          <p class="text-blk name">
            Hwang In Youp
          </p>
          <p class="text-blk position">
           Neurologist
          </p>
          <div class="social-icons">
            <a href="https://www.twitter.com" target="_blank">
              <i class="bi bi-twitter"></i>
            </a>
            <a href="https://www.facebook.com" target="_blank">
              <i class="bi bi-facebook"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
        <div class="card">
          <div class="team-image-wrapper">
            <img class="team-member-image" src="images/d6.webp">
          </div>
          <p class="text-blk name">
            Moon GaYoung
          </p>
          <p class="text-blk position">
            Cardiologist
          </p>

          <div class="social-icons">
            <a href="https://www.twitter.com" target="_blank">
              <i class="bi bi-twitter"></i>
            </a>
            <a href="https://www.facebook.com" target="_blank">
              <i class="bi bi-facebook"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
        <div class="card">
          <div class="team-image-wrapper">
            <img class="team-member-image" src="images/d7.webp">
          </div>
          <p class="text-blk name">
            Song Joonki
          </p>
          <p class="text-blk position">
          Anesthesiologist
          </p>
          <div class="social-icons">
            <a href="https://www.twitter.com" target="_blank">
              <i class="bi bi-twitter"></i>
            </a>
            <a href="https://www.facebook.com" target="_blank">
              <i class="bi bi-facebook"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
        <div class="card">
          <div class="team-image-wrapper">
            <img class="team-member-image" src="images/d8.webp">
          </div>
          <p class="text-blk name">
            Kim SeonhO
          </p>
          <p class="text-blk position">
          Radiologists
          </p>
          <div class="social-icons">
            <a href="https://www.twitter.com" target="_blank">
              <i class="bi bi-twitter"></i>
            </a>
            <a href="https://www.facebook.com" target="_blank">
              <i class="bi bi-facebook"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

       <!-- END DOCTORS -->

  <!-- FACILITIES -->
  <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.<br>
            Odio perspiciatis aspernatur repellendus, nihil explicabo fugit suscipit! Cum aut amet ad.
        </p>
    </div>
    <div class="container">
        <div class="row">
           
            
                <div class="col-lg-4 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow-4 border-top border-4 border-dark">
                        <div class="d-flex align-items-center mb-2">
                            <img src="images/f1.jfif" width= "40px">
                            <h5 class="m-0 ms-3">Private Rooms</h5>
                            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Tenetur atque, ex dolores animi necessitatibus blanditiis quas possimus soluta facere error.</P>

                            
                        </div>
                       
                    </div>
                </div>
            
            
          
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadownp-4 border-top border-4 border-dark">
                    <div class="d-flex align-items-center mb-2">
                        <img src="slider/icon.jpg" width="40px;">
                        <h5 class="m-0 ms-3">WIFI</h5>
                    </div>
                    <P>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Exercitationem quis eius ipsa consequuntur odio voluptate, quibusdam excepturi tenetur ea dolorem.
                    </P>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadownp-4 border-top border-4 border-dark">
                    <div class="d-flex align-items-center mb-2">
                        <img src="slider/icon.jpg" width="40px;">
                        <h5 class="m-0 ms-3">WIFI</h5>
                    </div>
                    <P>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Exercitationem quis eius ipsa consequuntur odio voluptate, quibusdam excepturi tenetur ea dolorem.
                    </P>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadownp-4 border-top border-4 border-dark">
                    <div class="d-flex align-items-center mb-2">
                        <img src="slider/icon.jpg" width="40px;">
                        <h5 class="m-0 ms-3">WIFI</h5>
                    </div>
                    <P>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Exercitationem quis eius ipsa consequuntur odio voluptate, quibusdam excepturi tenetur ea dolorem.
                    </P>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadownp-4 border-top border-4 border-dark">
                    <div class="d-flex align-items-center mb-2">
                        <img src="slider/icon.jpg" width="40px;">
                        <h5 class="m-0 ms-3">WIFI</h5>
                    </div>
                    <P>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Exercitationem quis eius ipsa consequuntur odio voluptate, quibusdam excepturi tenetur ea dolorem.
                    </P>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadownp-4 border-top border-4 border-dark">
                    <div class="d-flex align-items-center mb-2">
                        <img src="slider/icon.jpg" width="40px;">
                        <h5 class="m-0 ms-3">WIFI</h5>
                    </div>
                    <P>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Exercitationem quis eius ipsa consequuntur odio voluptate, quibusdam excepturi tenetur ea dolorem.
                    </P>
                </div>
            </div>
        </div>
    </div>
  <!-- END FACILITIES-->

      <!-- CONTACT US -->


      <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.<br>
            Odio perspiciatis aspernatur repellendus, nihil explicabo fugit suscipit! Cum aut amet ad.
        </p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4 ">
                    <iframe class="w-100 rounded mb-4" height="320px"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13604.457362339004!2d74.340241!3d31.5210194!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190579f583877d%3A0x7f913dc892bba07!2sRoyal%20Luxury%20Hotel!5e0!3m2!1sen!2s!4v1691488595028!5m2!1sen!2s"
                        style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <h5>Address</h5>
                    <a href="https://goo.gl/maps/zsJR52AkvKuK9srB8" target="_blank"
                        class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt"></i>"CAREWELL HOSPITAL, KARACHI PAKISTAN
                    </a>
                    <h5 class="mt-4">Contact</h5>
                    <a href="tel: 090078601" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-inbound"></i>
                        090078601
                    </a>
                    <br>
                    <a href="tel: 090078601" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-inbound"></i>
                        03002810477
                    </a>
                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: asmafarzand75@gmail.com"
                        class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-envelope"></i>asmafarzand75@gmail.com
                    </a>
                    <h5 class="mt-4">Follow Us </h5>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-instagram"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form method="POST">
                        <h5>Send Your Message</h5>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: 500;">Name</label>
                            <input name="name" type="text" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: 500;">Email</label>
                            <input name="email" type="email" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: 500;">Subject</label>
                            <input name="subj" type="text" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: 500;">Your Message</label>
                            <input name="msg" type="text" class="form-control shadow-none">
                        </div>
                        <button name="submit" type="submit" class="btn text-white custom-bg mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

         <!-- END CONTACT US -->

  <?php include "footer.php"; ?>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script>
              const toggleButton = document.getElementById("toggle-btn");
              const extraContent = document.getElementById("extra-content");

             toggleButton.addEventListener("click", function ()
              {
                if (extraContent.style.display === "none") {
                extraContent.style.display = "block"; // Show the extra content
             toggleButton.textContent = "Read Less"; // Change button text
               } 
             else
             {
              extraContent.style.display = "none"; // Hide the extra content
              toggleButton.textContent = "Read More"; // Revert button text
             }
             });
         </script>
  
</body>
</html>
