<?php 
    //include 'koneksi.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Simple Order</title>
<!--

DIGITAL TREND

https://templatemo.com/tm-538-digital-trend

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/remodal.css">
     <link rel="stylesheet" href="css/remodal-default-theme.css">

     <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet"></link>
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-digital-trend.css">

</head>
<body>

     <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
              Online Ticket
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link smoothScroll">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link contact" data-remodal-target="modal">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


     <!-- HERO -->
     <section class="hero hero-bg d-flex justify-content-center align-items-center" id="home">
               <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text">

                                   <h1 class="text-white" data-aos="fade-up">Tiket Konser BLACKPINK</h1>

                                   <a href="#" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100" data-remodal-target="order">Order Now</a>

                                   <strong class="d-block py-3 pl-5 text-white" data-aos="fade-up" data-aos-delay="200"><i class="fa fa-ceklist mr-2"></i> Make your life easier</strong>
                              </div>
                        </div>

                        <div class="col-lg-6 col-12">
                          <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                            <img src="images/newsletter.png" class="img-fluid" alt="working girl">
                          </div>
                        </div>

                    </div>
               </div>
     </section>


     <!-- ABOUT -->
     <section class="about section-padding pb-0" id="about">
          <div class="container">
               <div class="row">

                    <div class="col-lg-7 mx-auto col-md-10 col-12">
                         <div class="about-info">

                              <h2 class="mb-4" data-aos="fade-up">Girlband <strong>Black</strong> PINK</h2>

                              <p class="mb-0" data-aos="fade-up">Blackpink adalah grup vokal wanita asal Korea Selatan. Blackpink dibentuk oleh YG Entertainment dengan beranggotakan empat orang, diantaranya Jennie, Jisoo, Lisa, dan Rosé<br></p>
                         </div>

                         <div class="about-image" data-aos="fade-up" data-aos-delay="200">

                          <img src="images/office.png" class="img-fluid" alt="office">
                        </div>
                    </div>

               </div>
          </div>
     </section>

     <!-- ORDER -->
     <section class="remodal-bg remodal-is-close">
               <div class="remodal" data-remodal-id="order">
                    <button class="remodal-close" data-remodal-action="close"></button>
                    <h2>Form Order</h2>
                    <form action="<?php echo e(route('order.store')); ?>" method="POST" class="contact-form" data-aos="fade-up" data-aos-delay="300" role="form">
                        <div class="row">
                          <div class="col-lg-12">
                            <input type="date" class="form-control" name="tanggal" required>
                          </div>

                          <div class="col-lg-12">
                            <input type="text" class="form-control" name="id_order">
                          </div>

                          <div class="col-lg-12">
                            <select class="form-control selectpicker" name="paket" required>
                              <option value="">Pilih Tiket</option>
                              <option value="Reguler">Reguler</option>
                              <option value="VIP">VIP</option>
                              <option value="VVIP">VVIP</option>
                            </select>
                          </div>

                          <div class="col-lg-12">
                            <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                          </div>

                          <div class="col-lg-12">
                            <input type="text" class="form-control" name="kontak" placeholder="Kontak" required>
                          </div>

                          <div class="col-lg-12">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                          </div>

                          <div class="col-lg-12">
                            <input type="text" class="form-control" name="Alamat" placeholder="Alamat" required>
                          </div>

                          <div class="col-lg-5 mx-auto col-7">
                            <button type="submit" class="form-control" id="submit-button" name="submit">ORDER</button>
                          </div>
                        </div>

                    </form>
               </div>
     </section>

     <!-- LOGIN -->
     <section class="remodal-bg remodal-is-close">
               <div class="remodal" data-remodal-id="modal">
                    <button class="remodal-close" data-remodal-action="close"></button>
                    <h2>Start Your Session</h2>
                    <form action="aksilogin.php" method="post" class="contact-form" data-aos="fade-up" data-aos-delay="300" role="form">
                        <div class="row">
                          <div class="col-lg-12">
                            <input type="text" class="form-control" name="username" placeholder="Username / No. Handphone">
                          </div>

                          <div class="col-lg-12">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                          </div>

                          <div class="col-lg-5 mx-auto col-7">
                            <button type="submit" class="form-control" id="submit-button" name="submit">LOG IN</button>
                          </div>
                        </div>

                    </form>
               </div>
     </section>


    <footer class="site-footer">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
            <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">Dhampo <strong>Project</strong></h1>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
            <h4 class="my-4">Contact Info</h4>

            <p class="mb-1">
              <i class="fa fa-phone mr-2 footer-icon"></i> 
              +62 822 7107 4343
            </p>

            <p>
              <a href="#">
                <i class="fa fa-envelope mr-2 footer-icon"></i>
                dhampo19@gmail.com
              </a>
            </p>
          </div>

          <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
            <p class="copyright-text">Copyright &copy; 2020 Your Company
            <br>
            <a rel="nofollow noopener" href="https://templatemo.com">Design: TemplateMo</a></p>
          </div>

          <div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
            
            <ul class="footer-link">
              <li><a href="#">Stories</a></li>
              <li><a href="#">Work with us</a></li>
              <li><a href="#">Privacy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
            <ul class="social-icon">
              <li><a href="#" class="fa fa-instagram"></a></li>
              <li><a href="#" class="fa fa-twitter"></a></li>
              <li><a href="#" class="fa fa-dribbble"></a></li>
              <li><a href="#" class="fa fa-behance"></a></li>
            </ul>
          </div>

        </div>
      </div>
    </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
     <script src="js/remodal.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
 <?php if(@$_SESSION['sukses']){ ?>
  <script>swal("Welcome", "<?php echo $_SESSION['sukses']; ?>", "success");</script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
  <?php unset($_SESSION['sukses']); }elseif(@$_SESSION['gagal']){ ?>
  <script>swal("Sorry", "<?php echo $_SESSION['gagal']; ?>", "gagal");</script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
  <?php unset($_SESSION['gagal']); } ?>

</body>
</html><?php /**PATH D:\xampp\htdocs\simpleorder\resources\views/home.blade.php ENDPATH**/ ?>