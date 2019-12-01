<!DOCTYPE html>
<html lang="en">
<head>

     <title>Welcome to Serviso</title>
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

     <script src="<?php echo base_url(); ?>user/js/jquery.js"></script>
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
                    <a href="index.html" class="navbar-brand">Serviso</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#home" class="smoothScroll">Home</a></li>
                         <!-- <li><a href="#about" class="smoothScroll">About</a></li> -->
                         <li><a href="#blog" class="smoothScroll">Workshop</a></li>
                         <li><a href="#work" class="smoothScroll">Testimonials</a></li>
                         <li><a href="#panggil" class="smoothScroll">Contacts</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                         <?php if ($this->session->userdata('login_user') == FALSE) : ?>
                         <li class="section-btn" href="#modal-form" data-toggle="modal" data-target="#modal-form"><a>Sign in</a></li>

                         <?php else : ?>

                              <li><a href="<?php echo base_url('index.php/Login/logout') ?>"><i class="fa fa-sign-out"></i></a></li>

                         <?php endif ; ?>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="home-info">
                              <h1>Kami adalah sebuah Website yang membuat hidup anda semakin mudah</h1>
                              <a href="<?php echo base_url(); ?>index.php/about_us" class="btn section-btn smoothScroll">About Us</a>
                              <span>
                                   Cepat dan sangat terpercaya
                                   <small>Gunakan jasa kami dan anda tidak akan menyesal</small>
                              </span>
                         </div>
                    </div>

                    <!-- <div class="col-md-6 col-sm-12">
                         <div class="home-video">
                              <div class="embed-responsive embed-responsive-16by9">
                                   <iframe src="https://www.youtube.com/embed/-JSM3MTINTs" frameborder="0" allowfullscreen></iframe>
                              </div>
                         </div>
                    </div> -->
                    
               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-5 col-sm-6">
                         <div class="about-info">
                              <div class="section-title">
                                   <h2>Our Guarantee</h2>
                                   <span class="line-bar">___</span>
                              </div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="about-info skill-thumb">

                              <strong>Fast</strong>
                                   <span class="pull-right">85%</span>
                                        <div class="progress">
                                             <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                                        </div>

                              <strong>Safe</strong>
                                   <span class="pull-right">90%</span>
                                        <div class="progress">
                                             <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                        </div>

                              <strong>Don't spend our time</strong>
                                   <span class="pull-right">75%</span>
                                        <div class="progress">
                                             <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                                        </div>

                              <strong>Back like a new</strong>
                                   <span class="pull-right">70%</span>
                                        <div class="progress">
                                             <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                        </div>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="about-image">
                              <img src="<?php echo base_url(); ?>user/images/about-image.jpg" class="img-responsive" alt="">
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- BLOG -->
     <section id="blog" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                         <a href="<?php echo base_url(); ?>index.php/bengkel_user"><h2> Our Cooperation with Workshop </h2></a>
                              <span class="line-bar">___</span>
                         </div>
                    </div>
                    <div id="tampil_bengkel">
                         
                    </div>
               </div>
          </div>
     </section>


     <!-- WORK -->
     <section id="work" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Our Story</h2>
                              <span class="line-bar">___</span>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <!-- WORK THUMB -->
                         <div class="work-thumb">
                              <a href="<?php echo base_url(); ?>user/images/work-image1.jpg" class="image-popup">
                                   <img src="<?php echo base_url(); ?>user/images/work-image1.jpg" class="img-responsive" alt="Work">

                                   <div class="work-info">
                                        <!-- <h3>Clean &amp; Minimal</h3> -->
                                        <h3>Refanza Pradhipta</h3>
                                        <small>This web is very help me</small>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <!-- WORK THUMB -->
                         <div class="work-thumb">
                              <a href="<?php echo base_url(); ?>user/images/work-image2.jpg" class="image-popup">
                                   <img src="<?php echo base_url(); ?>user/images/work-image2.jpg" class="img-responsive" alt="Work">

                                   <div class="work-info">
                                        <h3>Muhammad Fani</h3>
                                        <small>I am a very lazy person... so this web is very help me to repair my motor without spending my time</small>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <!-- WORK THUMB -->
                         <div class="work-thumb">
                              <a href="<?php echo base_url(); ?>user/images/work-image3.jpg" class="image-popup">
                                   <img src="<?php echo base_url(); ?>user/images/work-image3.jpg" class="img-responsive" alt="Work">

                                   <div class="work-info">
                                        <h3>Hafiyyan Faza</h3>
                                        <small>Such a breakthrough things to help our daily activities</small>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <!-- WORK THUMB -->
                         <div class="work-thumb">
                              <a href="<?php echo base_url(); ?>user/images/work-image4.jpg" class="image-popup">
                                   <img src="<?php echo base_url(); ?>user/images/work-image4.jpg" class="img-responsive" alt="Work">

                                   <div class="work-info">
                                        <h3>Raihan Ahnaf</h3>
                                        <small>Say goodbye to spend our time waiting for the motor to be fixed</small>
                                   </div>
                              </a>
                         </div>
                    </div>

               </div>
          </div>
     </section>

     <!-- FOOTER -->
     <footer id="panggil" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-5 col-sm-12">
                         <div class="footer-thumb footer-info"> 
                              <h2>Serviso</h2>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                         </div>
                    </div>

                    <div class="col-md-2 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h2>Company</h2>
                              <ul class="footer-link">
                                   <li><a href="#">About Us</a></li>
                                   <li><a href="#">Join our team</a></li>
                                   <li><a href="#">Read Blog</a></li>
                                   <li><a href="#">Press</a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-2 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h2>Services</h2>
                              <ul class="footer-link">
                                   <li><a href="#">Pricing</a></li>
                                   <li><a href="#">Documentation</a></li>
                                   <li><a href="#">Support</a></li>
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
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" allowfullscreen></iframe>
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
                                             <h2>Serviso</h2>
                                        </div>

                                        <!-- NAV TABS -->
                                        <ul class="nav nav-tabs" role="tablist">
                                             <li><a href="#sign_in" aria-controls="sign_in" role="tab" data-toggle="tab">Sign in</a></li>
                                             <li class="active"><a href="#sign_up" aria-controls="sign_up" role="tab" data-toggle="tab">Create an account</a></li>
                                        </ul>

                                        <!-- TAB PANES -->
                                        <div class="tab-content">
                                             
                                        <div role="tabpanel" class="tab-pane fade in" id="sign_in">
                                             <form action="<?=base_url()?>index.php/Login/login_cek" method="post">
                                                       <input type="username" class="form-control" name="username" placeholder="Username" required>
                                                       <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                       <input type="submit" class="form-control" name="submit" value="Submit">
                                                       <a href="#sign_up" data-toggle="tab"> Have an account? </a>
                                                  </form>
                                             </div>
                                        
                                             <div role="tabpanel" class="tab-pane fade in active" id="sign_up">

                                                  <form action="<?=base_url()?>index.php/Register/simpan_pelanggan" method="post">
                                                  <input type="text" class="form-control" name="nama_admin" placeholder="Nama Lengkap" required>
                                                  <input type="text" class="form-control" name="username" placeholder="Username" required>
                                                  <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                  <input type="submit" class="form-control" name="submit" value="Submit">
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
     
     <script src="<?php echo base_url(); ?>user/js/bootstrap.min.js"></script>
     <script src="<?php echo base_url(); ?>user/js/jquery.stellar.min.js"></script>
     <script src="<?php echo base_url(); ?>user/js/jquery.magnific-popup.min.js"></script>
     <script src="<?php echo base_url(); ?>user/js/smoothscroll.js"></script>
     <script src="<?php echo base_url(); ?>user/js/custom.js"></script>
     <script type="text/javascript">
          $.getJSON("<?= base_url()?>index.php/home_user/get_bengkel",function(data){
               var tampil="";
               $.each(data,function(key,dt){
                    tampil+=
                    '<div class="col-md-6 col-sm-6">'+
                              '<div class="media blog-thumb">'+
                                   '<div class="media-object media-left">'+
                                        '<a href="<?php echo base_url(); ?>index.php/abut"><img src="<?php echo base_url('assets/cover_bengkel/');?>'+dt['foto']+'" class="img-responsive" alt=""></a>'+
                                   '</div>'+
                                   '<div class="media-body blog-info">'+
                                      
                                        '<h3>'+dt['nama_bengkel']+'</h3>'+
                                        '<p>'+dt['alamat']+'</p>'+
                                        '<a href="<?php echo base_url(); ?>index.php/detail_bengkel" class="btn section-btn">Read article</a>'+
                                   '</div>'+
                              '</div>'+
                         '</div>';
               });
               $('#tampil_bengkel').html(tampil);
          });
     </script>
</body>
</html>