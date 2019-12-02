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
                    <a href="<?php echo base_url(); ?>index.php/home_user" class="navbar-brand">Serviso</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="<?php echo base_url(); ?>index.php/about_us">About Us</a></li>
                         <li><a href="#blog" class="smoothScroll">Bengkel</a></li>
                         <li><a href="#work" class="smoothScroll">Kesan</a></li>
                         <li><a href="#panggil" class="smoothScroll">Kontak</a></li>
                         <?php if($this->session->userdata('id_level') == 2) :?>
                         <li><a href="<?=base_url()?>index.php/dashboard_c" class="smoothScroll">Dashboard</a></li>
                         <?php endif ; ?>
                         
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         
                         <?php if ($this->session->userdata('login') == FALSE) : ?>
                         <li class="section-btn" href="#modal-form" data-toggle="modal" data-target="#modal-form"><a>Masuk</a></li>

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

                    <div class="col-md-7 col-sm-12">
                         <div class="home-info">
                              <h1>Serviso Membantu Hidup Anda Mulai Dari Hal-Hal Kecil Seperti memperbaiki Sepeda Motor</h1>
                              <a href="<?php echo base_url(); ?>index.php/about_us" class="btn section-btn smoothScroll">Tentang Kami</a>
                              <span>
                              Gunakan jasa kami dan
                                   <small>anda bisa lebih menghemat waktu</small>
                              </span>
                         </div>
                    </div>
                    
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
                                   <h2>Jaminan Kami </h2>
                                   <span class="line-bar">___</span>
                              </div>
                              <p>Kami Menjamin bahwa waktu anda tidak akan terbuang sia sia dengan menunggu servis sepeda yang tergantung antrian disana, siapa yang datang awal dia yang dapat. </p>
                              <p>Sedangkan waktu anda terbatas... Tetapi dengan Serviso anda dapat memilih waktu yang anda inginkan dan memilih tanggal yang anda inginkan juga.</p>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="about-image">
                              <img src="<?php echo base_url(); ?>user/images/about-image5.jpg" class="img-responsive" alt="">
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
                         <a href="<?php echo base_url(); ?>index.php/bengkel_user"><h2> Kerjasama Kami </h2></a>
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
                              <h2>Kesan Dari Pengguna Kami</h2>
                              <span class="line-bar">___</span>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <!-- WORK THUMB -->
                         <div class="work-thumb">
                              <a href="<?php echo base_url(); ?>user/images/face-10.jpg" class="image-popup">
                                   <img src="<?php echo base_url(); ?>user/images/face-10.jpg" class="img-responsive" alt="Work">

                                   <div class="work-info">
                                        <!-- <h3>Clean &amp; Minimal</h3> -->
                                        <h3>Kobe Brayant</h3>
                                        <small>This web is very help me</small>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <!-- WORK THUMB -->
                         <div class="work-thumb">
                              <a href="<?php echo base_url(); ?>user/images/face-9.jpg" class="image-popup">
                                   <img src="<?php echo base_url(); ?>user/images/face-9.jpg" class="img-responsive" alt="Work">

                                   <div class="work-info">
                                        <h3>Lebron James</h3>
                                        <small>I am a very lazy person... so this web is very help me to repair my motor without spending my time</small>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <!-- WORK THUMB -->
                         <div class="work-thumb">
                              <a href="<?php echo base_url(); ?>user/images/face-11.jpg" class="image-popup">
                                   <img src="<?php echo base_url(); ?>user/images/face-11.jpg" class="img-responsive" alt="Work">

                                   <div class="work-info">
                                        <h3>Michael Jordan</h3>
                                        <small>Such a breakthrough things to help our daily activities</small>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <!-- WORK THUMB -->
                         <div class="work-thumb">
                              <a href="<?php echo base_url(); ?>user/images/face-8.jpg" class="image-popup">
                                   <img src="<?php echo base_url(); ?>user/images/face-8.jpg" class="img-responsive" alt="Work">

                                   <div class="work-info">
                                        <h3>Dirk Nowitzki</h3>
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
                                        '<a href="<?php echo base_url(); ?>index.php/detail_bengkel/index/'+dt['id_bengkel']+'" class="btn section-btn">Read article</a>'+
                                   '</div>'+
                              '</div>'+
                         '</div>';
               });
               $('#tampil_bengkel').html(tampil);
          });
     </script>
</body>
</html>