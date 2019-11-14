<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Striped Table with Hover</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width">

                                <table class="table table-hover table-striped">
                                <a href="#tambah" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Tambah</a>                      
                                    <thead>
                                        <th>NO</th>
                                        <th>ID PELANGGAN</th>
                                    	<th>NAMA LENGKAP</th>
                                    	<th>NOMOR HP</th>
                                    	<th>EMAIL</th>
                                    	<th>ALAMAT</th>
                                        <th>ACTION</th>
                                    </thead>
                                
                                    <?php 
                                     $no=0;
                                 foreach ($arr as $dt_pelanggan) {
                                    $no++;
                                        echo '<tr>
                                <td>'.$no.'</td>
                                <td>'.$dt_pelanggan->id_pelanggan.'</td>
                                <td>'.$dt_pelanggan->nama_lengkap.'</td>
                                
                                <td>'.$dt_pelanggan->nomer_hp.'</td>
                                <td>'.$dt_pelanggan->email.'</td>
                                <td>'.$dt_pelanggan->alamat.'</td>
                                <td><a href="#update_pelanggan" class="btn btn-warning" data-toggle="modal" onclick="tm_detail('.$dt_pelanggan->id_pelanggan.')">Update</a> 
                                <a href="'.base_url('index.php/pelanggan/hapus_pelanggan/'.$dt_pelanggan->id_pelanggan).'" onclick="return confirm(\'anda yakin?\')" class="btn btn-danger">Delete</a></td>
                             </tr>';
                                }
                                ?>

    <div class="modal" id="tambah">
        <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel"> Tambah Pelanggan</h4>
          </div>
          <div class="modal-body">

            <form action="<?php echo base_url('index.php/pelanggan/add_pelanggan') ?>" method="post">
            NAMA LENGKAP
            <input type="text" name="nama_lengkap" class="form-control"></br>
            PASSWORD
            <input type="text" name="password" class="form-control"></br>
           NOMOR HP
            <input type="number" name="nomer_hp" class="form-control"></br>
            EMAIL
            <input type="text" name="email" class="form-control"></br>
            ALAMAT
            <input type="text" name="alamat" class="form-control"></br>
            
           
            <br>
          <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
          </form>
        </div>


                                </table>



                                <?php if($this->session->flashdata('pesan')!=null): ?>
      <div class="alert alert-danger"><?= $this->session->flashdata('pesan');?></div>
    <?php endif?>
    </div>
  </div>
</div>


<div class="modal fade" id="update_pelanggan">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Update pelanggan</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/pelanggan/update_pelanggan')?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_pelanggan" id="id_pelanggan">
          Nama Lengkap 
          <input id="nama_lengkap" type="text" name="nama_lengkap_edit" class="form-control"><br>
          Nomor HP
          <input id="nomer_hp" type="number" name="nomer_hp_edit" class="form-control"><br>
          Email
          <input id="email" type="text" name="email_edit" class="form-control"><br>
         Alamat
          <input id="alamat" type="text" name="alamat_edit" class="form-control"><br>
          <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

                            

<script>
  
  function tm_detail(id_pelanggan) {
    $.getJSON("<?=base_url()?>index.php/pelanggan/get_detail_pelanggan/"+id_pelanggan,function(data){
        $("#id_pelanggan").val(data['id_pelanggan']);
        $("#nama_lengkap").val(data['nama_lengkap']);
        $("#nomer_hp").val(data['nomer_hp']);
        $("#email").val(data['email']);
        $("#alamat").val(data['alamat']);
    });
  }

</script>

                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>
