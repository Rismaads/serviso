<!DOCTYPE html>
<html lang="en">
<head>

     <title>Serviso - Detail Bengkel</title>
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
                         <li><a href="<?php echo base_url(); ?>index.php/home_user">Halaman Utama</a></li>
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


     <!-- BLOG DETAIL -->
     <section id="blog-detail" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-1 col-md-10 col-sm-12">
                         <!-- BLOG THUMB -->
                         <div class="blog-detail-thumb">
                                   <?php
                                        foreach($bengkel as $b){
                                             echo ' 
                                             <h1 style="margin-top:-100px">'.$b->nama_bengkel.'</h1>
                                                  <section id="section-map" class="clearfix">
                                                       <iframe src='.$b->maps.' width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                   </section>
                                                   <h2 style="margin-top: -50px">Deskripsi</h2>
                                                  <p>'.$b->deskripsi.'</p><br>
                                                  <h3>Jam Buka : '.$b->jadwal.'</h3> 
                                                  <h3>Jam Tutup : '.$b->jam_tutup.'</h3> 
                                                  <h3>Alamat : '.$b->alamat.'</h3> 
                                                  ';

                                                
                                        }
                                   ?> 

                             <br>

                              <?php

                                        foreach($bengkel as $b)
                                        {
                                             if ($this->session->userdata('login')==true) 
                                             {
                                                  $cek = $this->db->get_where('unit_sepeda',['nama_pelanggan' => $this->session->userdata('username')])->row_array();
                                                  if ($cek) 
                                                  {
                                                       echo ' <li><a class="alert alert-danger">Anda Melebihi Batas Hari ini</a></li> <br>
                                                       ';
                                                      
                                                      
                                                       echo ' <li><a class="btn btn-primary btn-lg disabled" data-toggle="modal" data-target="#modal-pesan" aria-disabled="true">Pemesanan</a></li>
                                                       ';
                                                  } 
                                                  else 
                                                  {
                                                       echo ' <li><a class="section-btn2" data-toggle="modal" onclick="tm_detail('.$b->id_bengkel.')" data-target="#modal-pesan" >Pemesanan</a></li>
                                                       ';
                                                  }
                                                  
                                                  
                                             } 
                                             else 
                                             {
                                                  echo ' <li style="display: block !important; margin-bottom:20px; text-align:center;"><a class="alert alert-danger">Silahkan Login Terlebih Dahulu</a></li> <br>
                                                  ';
                                                 
                                                 
                                                  echo ' <li style="display: block !important;text-align:center;"><a class="btn btn-primary btn-lg disabled" data-toggle="modal" data-target="#modal-pesan" aria-disabled="true">Pemesanan</a></li>
                                                  ';
                                             }
                                             
                                             
                                        }
                                   ?> 
                              <div class="blog-social-share"> 
                                  
                              </div>
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

     <!-- MODAL -->
     <section class="modal fade" id="modal-pesan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                             <h2>Reservation</h2>
                                        </div>

                                        <!-- NAV TABS -->
                                        <ul class="nav nav-tabs" role="tablist">
                                             <li class="active"><a href="#sign_up" aria-controls="sign_up" role="tab" data-toggle="tab">Please fill your motorcycles data</a></li>
                                        </ul>

                                        <!-- TAB PANES -->
                                        <div class="tab-content">
                                             <div role="tabpanel" class="tab-pane fade in active">
                                                  <form  method="post" id="tambah_antri">
                                                  <div id="pesan_kirim"></div>
                                                       <input type="hidden" id="id_bengkel">
                                                       <input type="text" class="form-control" id="no_polisi" name="no_polisi" placeholder="Nomer Polisi" required>
                                                       <input type="text" class="form-control" id="jenis_sepeda" name="jenis_sepeda" placeholder="Jenis Sepeda" required>
                                                       <input type="text" class="form-control" id="merk_sepeda" name="merk_sepeda" placeholder="Merk Sepeda" required>
                                                       <input type="text" class="form-control" id="kerusakan" name="kerusakan" placeholder="Kerusakkan" required>
                                                       <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="10" placeholder="Alamat" required></textarea>
                                                       <select name="id_jadwal" id="id_jadwal" class="form-control"> 
                                                            <?php
                                                                 foreach($jadwal as $jw)
                                                                 {
                                                                      echo '<option value="'.$jw->id_jadwal.'">'.$jw->jadwal_mulai.' - '.$jw->jadwal_selesai.' </option>';
                                                                 }
                                                            ?>
                                                       </select>
                                                       <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No Telepon" required>
                                                       
                                                       
                                                       <input type="submit" value="submit" class="btn btn-success">
                                                       
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
          function tm_detail(id_bengkel)
          {
               $.getJSON("<?= base_url()?>index.php/detail_bengkel/detail_beng/"+id_bengkel,function(data){
                    $('#id_bengkel').val(data['id_bengkel']);
               });
          }


         $('#tambah_antri').submit(function(event){
              event.preventDefault();
              var id_bengkel = $('#id_bengkel').val();
              var url="<?= base_url()?>index.php/detail_bengkel/tambah_antri/"+id_bengkel;
              var formData =  new FormData($("#tambah_antri")[0]);
               $.ajax({
                    url:url,
                    type:"post",
                    data:formData,
                    contentType: false,
                    processData: false,
                    dataType:"json",
                    success:function(hasil)
                    {
                         if(hasil['status']==1)
                         {
                              $("#pesan_kirim").html("Berhasil Menambahkan ke Antrian");
                              $("#pesan_kirim").show("fade");
                              $("#pesan_kirim").addClass("alert alert-success");
                              setTimeout(function()
                              {
                                   $("#pesan_kirim").hide("fade");
                                   setTimeout(function() 
                                   {
                                        $("#pesan_kirim").removeClass("alert alert-success");    
                                   }, 500);
                              }, 2000);
                         }
                         else
                         {
                              $("#pesan_kirim").html("Gagal Menambahkan ke Antrian");
                              $("#pesan_kirim").show("fade");
                              $("#pesan_kirim").addClass("alert alert-danger");
                              setTimeout(function()
                              {
                                   $("#pesan_kirim").hide("fade");
                                   setTimeout(function() 
                                   {
                                        $("#pesan_kirim").removeClass("alert alert-danger");    
                                   }, 500);
                              }, 2000);
                         }
                    }
               });
         });
     </script>

</body>
</html>