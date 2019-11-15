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
                                      <th>ID BENGKEL</th>
                                      <th>NAMA BENGKEL</th>
                                    	<th>DESKRIPSI</th>
                                    	<th>ALAMAT</th>
                                    	<th>JADWAL</th>
                                    
                                        <th>ACTION</th>
                                    </thead>
                                
                                    <?php 
                                     $no=0;
                                 foreach ($arr as $dt_bengkel) {
                                    $no++;
                                        echo '<tr>
                                <td>'.$no.'</td>
                                <td>'.$dt_bengkel->id_bengkel.'</td>
                                <td>'.$dt_bengkel->nama_bengkel.'</td>
                                
                                <td>'.$dt_bengkel->deskripsi.'</td>
                                <td>'.$dt_bengkel->alamat.'</td>
                                <td>'.$dt_bengkel->jadwal.'</td>
                                <td><a href="#update_bengkel" class="btn btn-warning" data-toggle="modal" onclick="tm_detail('.$dt_bengkel->id_bengkel.')">Update</a> 
                                <a href="'.base_url('index.php/bengkel/hapus_bengkel/'.$dt_bengkel->id_bengkel).'" onclick="return confirm(\'anda yakin ingin menghaus data?\')" class="btn btn-danger">Delete</a></td>
                             </tr>';
                                }
                                ?>

    <div class="modal" id="tambah">
        <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel"> Tambah bengkel</h4>
          </div>
          <div class="modal-body">

            <form action="<?php echo base_url('index.php/bengkel/add_bengkel') ?>" method="post">
            NAMA BENGKEL
            <input type="text" name="nama_bengkel" class="form-control"></br>
            DESKRIPSI
            <input type="text" name="deskripsi" class="form-control"></br>
           ALAMAT
            <input type="text" name="alamat" class="form-control"></br>
           JADWAL
            <input type="date" name="jadwal" class="form-control"></br>
           
           
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


<div class="modal fade" id="update_bengkel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Update bengkel</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/bengkel/update_bengkel')?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_bengkel" id="id_bengkel">
          NAMA BENGKEL
          <input id="nama_bengkel" type="text" name="nama_bengkel_edit" class="form-control"><br>
          DESKRIPSI
          <input id="deskripsi" type="text" name="deskripsi_edit" class="form-control"><br>
          ALAMAT
          <input id="alamat" type="text" name="alamat_edit" class="form-control"><br>
         JADWAL
          <input id="jadwal" type="date" name="jadwal_edit" class="form-control"><br>
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
  
  function tm_detail(id_bengkel) {
    $.getJSON("<?=base_url()?>index.php/bengkel/get_detail_bengkel/"+id_bengkel,function(data){
        $("#id_bengkel").val(data['id_bengkel']);
        $("#nama_bengkel").val(data['nama_bengkel']);
        $("#deskripsi").val(data['deskripsi']);
        $("#alamat").val(data['alamat']);
        $("#jadwal").val(data['jadwal']);
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
