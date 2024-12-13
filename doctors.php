<?php
include "links.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CareWell Hospital</title>
  <style>
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
}
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
    font-family: 'Merienda', cursive;}
    </style>
</head>

<body class="bg-light">
  <?php
  include "nav.php"
  ?>
  <h2 class=" mt-5 pt-4 mb-4 text-center fw-bold h-font"> OUR DOCTORS </h2>
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
  <?php
  include "footer.php";
  ?>

</body>

</html>