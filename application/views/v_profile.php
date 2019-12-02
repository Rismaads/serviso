<!DOCTYPE html>
<html lang="en">
<head>

     <title>Serviso - Detail Pemesanan</title>
<!-- 
Hydro Template 
http://www.templatemo.com/tm-509-hydro
-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="<?php echo base_url(); ?>user/css/bootstrap.min.css">
     <link rel="stylesheet" href="<?php echo base_url(); ?>user/css/magnific-popup.css">
     <link rel="stylesheet" href="<?php echo base_url(); ?>user/css/font-awesome.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="<?php echo base_url(); ?>user/css/templatemo-style.css">
</head>
<body>

     <!-- PRE LOADER -->
     <!-- <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section> -->


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="<?php echo base_url(); ?>index.php/home_user" class="navbar-brand">Serviso</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="<?php echo base_url(); ?>index.php/home_user">Halaman Utama</a></li>
                         <li><a href=a href="<?php echo base_url(); ?>index.php/home_user">Bengkel</a></li>
                         <li><a href=a href="<?php echo base_url(); ?>index.php/home_user">Kesan</a></li>
                         <li><a href=a href="<?php echo base_url(); ?>index.php/home_user">Kontak</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         
                         <?php if ($this->session->userdata('login_user') == FALSE) : ?>
                         <li class="section-btn" href="#modal-form" data-toggle="modal" data-target="#modal-form"><a>Masuk</a></li>

                         <?php else : ?>

                              <li><a href="<?php echo base_url('index.php/Login/logout') ?>"><i class="fa fa-sign-out"></i></a></li>

                         <?php endif ; ?>
                    </ul>
               </div>

          </div>
     </section>

     <!-- BLOG HEADER -->
     <section id="blog-header" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-1 col-md-5 col-sm-12">
                         <h2>Serviso Membantu Hidup Anda Mulai Dari Hal-Hal Kecil</h2>
                    </div>
                    
               </div>
          </div>
     </section>


     <div class="container">
  <h3 class="text-center mt-5  varian-cake">MY ACCOUNT</h3>
  <hr class="mb-4">
</div>

<main role="main" class="container">
  <div class="row">
    <aside class="col-md-3 blog-sidebar">
      <div class="p-4 account-tab-menu">

        <ol class="list-unstyled mt-4">
          
        </ol>
      </div>
    </aside><!-- /.blog-sidebar -->

    <div class="col-md-9 blog-main">
      <!-- <a href="index.php?pages=histori" class="btn btn-add mt-5" style="color:#615956;"> < </a> -->
      <!-- <h3 class=" mt-4">
        Detail Histori
      </h3> -->

          <div class="row">
            <div class="col-md-4">
              <div class="body-checkout">
                <p>Nama</p>
                <p>Username</p>
              </div>
            </div>
            <div class="col-md-8">
              <div class="body-checkout">
                <p>Baihaqi Ilman Haydar Permana</p>
                <p>high-quality26</p>
              </div>
            </div>
          </div>
          
          <h5 class="your_id2">YOUR ID RESERVATION KC1234567</h5>
          <div class="row">
            <div class="col-md-4">
              <div class="body-checkout">
                <p>Nama</p>
                <p>Username</p>
              </div>
            </div>
            <div class="col-md-8">
              <div class="body-checkout">
                <p>Baihaqi Ilman Haydar Permana</p>
                <p>high-quality26</p>
              </div>
            </div>
          </div>
          
          
          <li><a class="section-btn2" data-toggle="modal"data-target="#modal-pesan" >Repair</a></li>
  </div><!-- /.row -->

</main><!-- /.container -->




    <!-- FOOTER -->
    <footer id="panggil" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-5 col-sm-12">
                         <div class="footer-thumb footer-info"> 
                              <h2>Serviso</h2>
                              <p>Membantu Hidup Anda Mulai Dari Hal-Hal Kecil Seperti memperbaiki Sepeda Motor, Gunakan jasa kami dan anda bisa lebih menghemat waktu</p>
                              <p>Kontak kami jika anda mempunyai pertanyaan +62 822-316-549</p>
                         </div>
                    </div>

                    <div class="col-md-2 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h2>Rumah</h2>
                              <ul class="footer-link">
                                   <li><a href="<?php echo base_url(); ?>index.php/about_us">About Us</a></li>
                                   <li><a href="#home">Halaman Utama</a></li>
                                   <li><a href="#blog">Bengkel</a></li>
                                   <li><a href="#work">Testimoni</a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-2 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h2>Layanan</h2>
                              <ul class="footer-link">
                                   <li><a href="#">Terpercaya</a></li>
                                   <li><a href="#">Cepat</a></li>
                                   <li><a href="#">Sesuai dengan jadwal</a></li>
                              </ul>
                         </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-4">
                         <div class="map">
                         <div class="google-map">
	<!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.21390906776!2d112.65676931418928!3d-7.976829994254922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6285c5c1b44e3%3A0xf6c889ac7452dc3a!2sSMK%20Telkom%20Malang!5e0!3m2!1sen!2sid!4v1575185980613!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                         </div>

                         </div>
                         
                    </div>                   

                    <div class="col-md-12 col-sm-12">
                         <div class="footer-bottom">
                              <div class="col-md-6 col-sm-5">
                                   <div class="copyright-text"> 
                                        <p>Copyright &copy; 2019 Your Company</p>
                                   </div>
                              </div>
                              <div class="col-md-6 col-sm-7">
                                   <div class="phone-contact"> 
                                        <p> <span> </span></p>
                                   </div>
                                   <ul class="social-icon">
                                        <li><a href="https://www.facebook.com/templatemo" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-instagram"></a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>

     <!-- MODAL -->
     <section class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
               <div class="modal-content modal-popup">

                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                         </button>
                    </div>

                    <div class="modal-body">
                         <div class="container-fluid">
                              <div class="row">

                                   <div class="col-md-12 col-sm-12">
                                        <div class="modal-title">
                                             <h2>Hydro Co</h2>
                                        </div>

                                        <!-- NAV TABS -->
                                        <ul class="nav nav-tabs" role="tablist">
                                             <li class="active"><a href="#sign_up" aria-controls="sign_up" role="tab" data-toggle="tab">Create an account</a></li>
                                             <li><a href="#sign_in" aria-controls="sign_in" role="tab" data-toggle="tab">Sign In</a></li>
                                        </ul>

                                        <!-- TAB PANES -->
                                        <div class="tab-content">
                                             <div role="tabpanel" class="tab-pane fade in active" id="sign_up">
                                                  <form action="#" method="post">
                                                       <input type="text" class="form-control" name="name" placeholder="Name" required>
                                                       <input type="telephone" class="form-control" name="telephone" placeholder="Telephone" required>
                                                       <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                       <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                       <input type="submit" class="form-control" name="submit" value="Submit Button">
                                                  </form>
                                             </div>

                                             <div role="tabpanel" class="tab-pane fade in" id="sign_in">
                                                  <form action="#" method="post">
                                                       <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                       <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                       <input type="submit" class="form-control" name="submit" value="Submit Button">
                                                       <a href="https://www.facebook.com/templatemo">Forgot your password?</a>
                                                  </form>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>

     <!-- SCRIPTS -->
     <script src="<?php echo base_url(); ?>user/js/jquery.js"></script>
     <script src="<?php echo base_url(); ?>user/js/bootstrap.min.js"></script>
     <script src="<?php echo base_url(); ?>user/js/jquery.stellar.min.js"></script>
     <script src="<?php echo base_url(); ?>user/js/jquery.magnific-popup.min.js"></script>
     <script src="<?php echo base_url(); ?>user/js/smoothscroll.js"></script>
     <script src="<?php echo base_url(); ?>user/js/custom.js"></script>

</body>
</html>