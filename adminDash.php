<?php 
    require_once 'dbConfig.php';
    include('adminHeader.html');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Virtual Trip</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon1.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1> Virtual visit to Indian Monuments</h1>
           
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

     

    <!-- ======= Counts Section =======   -->
    <section id="counts" class="counts section-bg">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-end" >

        <?php
            $name="counter.txt";

            $file = fopen($name,"r");
            $hits= fscanf($file,"%d");
            fclose($file);

            $file = fopen($name,"w");
            fprintf($file,"%d",$hits[0]);
            fclose($file);

             
        ?>
        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="00" data-purecounter-end="<?php echo $hits[0];?>" data-purecounter-duration="2" class="purecounter"></span>
              <p>Total Visitors</p>
            </div>
          </div>

            <?php 
                $csql="SELECT * FROM customer;" ; 
                $result = $db->query($csql);
                $count=mysqli_num_rows($result);
            ?>
          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $count;?>" data-purecounter-duration="2" class="purecounter"></span>
              <p>Registered Customer</p>
            </div>
          </div>

          <?php 
                $csql="SELECT * FROM booking;" ; 
                $result = $db->query($csql);
                $count=mysqli_num_rows($result);
            ?>
          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $count;?>" data-purecounter-duration="2" class="purecounter"></span>
              <p>Tickets Booked</p>
            </div>
          </div>
 
          <?php 
          $csql="SELECT * FROM add_monuments;" ; 
          $result = $db->query($csql);
          $count=mysqli_num_rows($result);
          ?>
          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $count;?>" data-purecounter-duration="2" class="purecounter"></span>
              <p>Total Monuments</p>
            </div>
          </div>

        </div>

      </div>
    </section>  
    <!-- End Counts Section -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>