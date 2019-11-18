<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                            <h4 class="title">DATA SEPEDA PELANGGAN</h4>
                                <p class="category">Data Sepeda Pelanggan Aplikasi Serviso</p>
                            </div>
                            <div class="content table-responsive table-full-width">

                                <table class="table table-hover table-striped">
                                <a href="#tambah" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Tambah</a>                      
                                    <thead>
                                        <th>NO</th>
                                        <th>ID SEPEDA</th>
                                        <th>NAMA PELANGGANN</th>
                                        <th>NO HP</th>
                                        <th>ALAMAT</th>
                                        <th>NOMOR POLISI</th>
                                        <th>JENIS SEPEDA</th>
                                        <th>MERK SEPEDA</th>
                                        <th>KERUSAKAN</th>
                                        <th>ACTION</th>
                                    </thead>
                                
                                    <?php 
                                     $no=0;
                                 foreach ($arr as $dt_sepeda) {
                                    $no++;
                                        echo '<tr>
                                <td>'.$no.'</td>
                                <td>'.$dt_sepeda->id_unit_sepeda.'</td>
                                <td>'.$dt_sepeda->nama_pelanggan.'</td>
                                <td>'.$dt_sepeda->no_hp.'</td>
                                <td>'.$dt_sepeda->alamat.'</td>
                                <td>'.$dt_sepeda->no_polisi.'</td>
                                <td>'.$dt_sepeda->jenis_sepeda.'</td>
                                <td>'.$dt_sepeda->merk_sepeda.'</td>
                                <td>'.$dt_sepeda->kerusakan.'</td>
                                <td><a href="#update_sepeda" class="btn btn-warning" data-toggle="modal" onclick="tm_detail('.$dt_sepeda->id_unit_sepeda.')">Update</a> 
                                <a href="'.base_url('index.php/sepeda/hapus_sepeda/'.$dt_sepeda->id_unit_sepeda).'" onclick="return confirm(\'anda yakin?\')" class="btn btn-danger">Delete</a></td>
                             </tr>';
                                }
                                ?>

    <div class="modal" id="tambah">
        <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel"> Tambah Unit Sepeda</h4>
          </div>
          <div class="modal-body">

            <form action="<?php echo base_url('index.php/sepeda/add_sepeda') ?>" method="post">
            NAMA PELANGGAN
            <input type="text" name="nama_pelanggan" class="form-control"></br>
            NO HP
            <input type="text" name="no_hp" class="form-control"></br>
             ALAMAT
            <input type="text" name="alamat" class="form-control"></br>
             NOMOR POLISI
            <input type="text" name="no_polisi" class="form-control"></br>
            JENIS SEPEDA
            <input type="text" name="jenis_sepeda" class="form-control"></br>
            MERK SEPEDA
            <input type="text" name="merk_sepeda" class="form-control"></br>
            KERUSAKAN
            <input type="text" name="kerusakan" class="form-control"></br>
            
           
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


<div class="modal fade" id="update_sepeda">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Update Sepeda</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/pelanggan/update_sepeda')?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_unit_sepeda" id="id_unit_sepeda">
          NAMA PELANGGAN 
          <input id="nama_pelanggan" type="text" name="nama_pelanggan_edit" class="form-control"><br>
          NO HP
          <input id="no_hp" type="text" name="no_hp_edit" class="form-control"><br>
          Alamat
          <input id="alamat" type="text" name="alamat_edit" class="form-control"><br>
          Nomor POLISI
          <input id="no_polisi" type="text" name="no_polisi_edit" class="form-control"><br>
          JENIS SEPEDA
          <input id="jenis_sepeda" type="text" name="jenis_sepeda_edit" class="form-control"><br>
         MERK SEPEDA
          <input id="merk_sepeda" type="text" name="merk_sepeda_edit" class="form-control"><br>
          KERUSAKAN
          <input id="kerusakan" type="text" name="kerusakan_edit" class="form-control"><br>
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
  
  function tm_detail(id_unit_sepeda) {
    $.getJSON("<?=base_url()?>index.php/sepeda/get_detail_sepeda/"+id_unit_sepeda,function(data){
        $("#id_unit_sepeda").val(data['id_unit_sepeda']);
        $("#nama_pelanggan").val(data['nama_pelanggan']);
        $("#no_hp").val(data['no_hp']);
        $("#alamat").val(data['alamat']);
        $("#no_polisi").val(data['no_polisi']);
        $("#jenis_sepeda").val(data['jenis_sepeda']);
        $("#merk_sepeda").val(data['merk_sepeda']);
        $("#kerusakan").val(data['kerusakan']);
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
