<!DOCTYPE html>contact
<html lang="en">
  <head>
    <title>English Postmodernism</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900|Oswald:400,700" rel="stylesheet">
    
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/fancybox.min.css">

    <link rel="stylesheet" href="css/style.css">

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="200">
  

  <div class="site-wrap">

  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  
    
    

  <main class="main-content">

    <section class="site-section-hero bg-image" style="background-image: url('images/background.jpg');"  data-stellar-background-ratio="0.5" id="section-home">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-7 text-center">
            <h1 class="text-white heading text-uppercase" data-aos="fade-up">Welcome</h1>
            <p class="lead text-white mb-5" data-aos="fade-up" data-aos-delay="100">Здесь Вы можете познакомиться с английскими писателями, которые работали в направлении <a href="postmodernism">"Постмодернизм"</a></p>
            <p data-aos="fade-up" data-aos-delay="100"></p>
          </div>
        </div>
      </section>

    <div class="container-fluid">
        
      


      

      <section class="site-section" id="section-testimonial">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 text-center">
              <h2 class="heading text-uppercase text-white">Writers</h2>

              <div class="row justify-content-center">
                <div class="col-md-12">

                  <div class="owl-carousel slide-one-item home-slider">
                  <?php
                      $con = mysqli_connect("localhost", "root", "", "DB");
                      mysqli_set_charset($con, "utf8");

                      if ($con == false) {
                          echo ("Ошибка подключения: " . mysqli_connect_error());
                      }
                      else {
                          $sql = "SELECT id, name, image, description FROM data";
                          $result = mysqli_query($con, $sql);
                          $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

                          foreach ($rows as $row) {
                              echo (
                                  "<div class='testimony text-center px-md-4'>
                                  <figure class='mx-auto d-inline-block'>
                                    <img src='{$row['image']}' alt='Image' class='mx-auto img-fluid w-25 rounded-circle'>
                                  </figure>
                                  <p class='text-white'><strong>{$row['name']}</strong></p>
                                  <blockquote>
                                    <p>{$row['description']}</p>
                                  </blockquote>
                                </div>"
                              );
                          }
                      }
                  ?>

                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
     
        
          
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
      </div>
    </div>
  </main>

</div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  

  <script src="js/jquery.fancybox.min.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>
