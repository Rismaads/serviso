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
                         <li><a href="<?php echo base_url(); ?>index.php/home_user#home" class="smoothScroll">Home</a></li>
                         <li><a href="<?php echo base_url(); ?>index.php/about_user" class="smoothScroll">Workshop</a></li>
                         <li><a href="<?php echo base_url(); ?>index.php/home_user#work" class="smoothScroll">Testimonials</a></li>
                         <li><a href="<?php echo base_url(); ?>index.php/home_user#contact" class="smoothScroll">Contacts</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                         <li class="section-btn" href="#" data-toggle="modal" data-target="#modal-form" ><a >Sign in</a></li>
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
                         <h2>Do you Know What Thing Really Makes Artist Nowadays?</h2>
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
                                             echo ' <div class="blog-image">
                                                       <img src="'.base_url().'assets/cover_bengkel/'.$b->foto.'" class="img-responsive" alt="Blog Image">
                                                  </div>
                                                  <h2>Deskripsi</h2>
                                                  <p>'.$b->deskripsi.'</p><br>
                                                  <a class="section-btn2" data-toggle="modal" onclick="tm_detail('.$b->id_bengkel.')" data-target="#modal-pesan" >Repair</a>
                                                  ';
                                        }
                                   ?> 
                              <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, quisquam, aut, eum, natus excepturi impedit ipsa rerum ratione id dolores ducimus minus eos veniam similique.</blockquote>

                              <p>Vivamus quis velit sed ante suscipit aliquam nec sed ex. Maecenas porta leo at mi suscipit congue. Donec ipsum metus, tristique eu leo ut, luctu Vivamus sit amet purus nec risus mollis tempor.</p>

                              <section id="section-map" class="clearfix">
                                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                               </section>
                              
                              <ul>
                                   <li>Brand Identity ipsum dolor eget vestibulum justo imper diet.</li>
                                   <li>Social Marketing porta leo at mi suscipit congue. Donec ipsum metus, tristique leo luctus.</li>
                                   <li>Wordpress Themes augue vulputate voluptate neque, curabitur dolor vitae massa.</li>
                              </ul>
                              <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque, curabitur dolor libero sodales vitae elit massa.</p>
                              <div class="blog-social-share"> 
                                  
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- FOOTER -->
     <footer data-stellar-background-ratio="0.5">
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
                                        <p>Copyright &copy; 2017 Your Company</p>
                                   </div>
                              </div>
                              <div class="col-md-6 col-sm-7">
                                   <!-- <div class="phone-contact"> 
                                        <p>Call us <span>(+66) 010-020-0340</span></p>
                                   </div> -->
                                   <ul class="social-icon">
                                        <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
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
                                                       <input type="name" class="form-control" id="nama_pelanggan" name="nama_pelanggan" placeholder="Nama Lengkap" required>
                                                       <input type="text" class="form-control" id="no_polisi" name="no_polisi" placeholder="Nomer Polisi" required>
                                                       <input type="text" class="form-control" id="jenis_sepeda" name="jenis_sepeda" placeholder="Jenis Sepeda" required>
                                                       <input type="text" class="form-control" id="merk_sepeda" name="merk_sepeda" placeholder="Merek Sepeda" required>
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
                                                       <input type="telephone" class="form-control" id="no_hp" name="no_hp" placeholder="No Telepon" required>
                                                       
                                                       
                                                       <button type="submit" class="btn btn-success">Submit</button>
                                                       
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
              var formData = new FormData($("#tambah_antri")[0]);
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