<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                            <h4 class="title">DATA BENGKEL</h4>
                                <p class="category">Data Bengkel Aplikasi Serviso</p>
                            </div>
                            <div class="content table-responsive table-full-width">

                                <table class="table table-hover table-striped">
                                <a href="#tambah" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Tambah</a>                      
                                    <thead>
                                      <th>NO</th>
                                      <th>ID BENGKEL</th>
                                      <th>NAMA BENGKEL</th>
                                      <th>FOTO</th>
                                     
                                    	<th>DESKRIPSI</th>
                                    	<th>ALAMAT</th>
                                      <th>JAM BUKA</th>
                                      <th>JAM TUTUP</th>
                                      <th>MAPS</th>
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
                                <td><img src="'.base_url().'assets/cover_bengkel/'.$dt_bengkel->foto.'" width="50px" /></td>
                             
                                <td>'.$dt_bengkel->deskripsi.'</td>
                                <td>'.$dt_bengkel->alamat.'</td>
                                <td>'.$dt_bengkel->jadwal.'</td>
                                <td>'.$dt_bengkel->jam_tutup.'</td>
                                <td>'.$dt_bengkel->maps.'</td>
                                <td><a href="#update_bengkel" class="btn btn-warning" data-toggle="modal" onclick="tm_detail('.$dt_bengkel->id_bengkel.')">Update</a> 
                                <a href="'.base_url('index.php/bengkel/hapus_bengkel/'.$dt_bengkel->id_bengkel).'" onclick="return confirm(\'anda yakin ingin menghapus data?\')" class="btn btn-danger">Delete</a></td>
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

            <form action="<?php echo base_url('index.php/bengkel/add_bengkel') ?>" method="post"  enctype="multipart/form-data">
            NAMA BENGKEL
            <input type="text" name="nama_bengkel" class="form-control"></br>
           
            DESKRIPSI
            <input type="text" name="deskripsi" class="form-control"></br>
           ALAMAT
            <input type="text" name="alamat" class="form-control"></br>
           JAM BUKA
            <input type="time" name="jadwal" class="form-control"></br>
            JAM TUTUP
            <input type="time" name="jam_tutup" class="form-control"></br>
            MAPS
            <input type="text" name="maps" class="form-control"></br>
           
            <input type="file" class="form-control" placeholder="Foto" name="foto">

           
           
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
        <div class="modal-body">
	        	<input type="hidden" name="ubah_id_bengkel"  id="ubah_id_bengkel">
	        	<br>
	        	
	        	<input type="text" class="form-control" placeholder="Deskripsi" name="ubah_deskripsi"  id="ubah_deskripsi">
	        	<br>
	        	<input type="text" class="form-control" placeholder="Alamat" name="ubah_alamat" id="ubah_alamat">
	        	<br>
	        	<input type="time" class="form-control" placeholder="Jam Buka" name="ubah_jadwal" id="ubah_jadwal">
	        	<br>
	        	<input type="time" class="form-control" placeholder="Jam Tutup" name="ubah_jam_tutup" id="ubah_jam_tutup">
	        	<br>
            <input type="text" class="form-control" placeholder="Maps" name="ubah_maps" id="ubah_maps">
	        	<br>
            
	        	<input type="text" class="form-control" placeholder="Nama Bengkel" name="ubah_nama_bengkel" id="ubah_nama_bengkel">
	        	<br>
        
            <input type="file" class="form-control" placeholder="Foto" name="ubah_foto" id="data_foto"><br>
            <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
	      </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

                            

<script type="text/javascript">
  
  function tm_detail(id_bengkel) {
    

    $.getJSON("<?=base_url()?>index.php/bengkel/get_detail_bengkel/"+id_bengkel,function(data){
      $("#ubah_id_bengkel").val(data.id_bengkel);
		
			$("#ubah_deskripsi").val(data.deskripsi);
			$("#ubah_alamat").val(data.alamat);
			$("#ubah_jadwal").val(data.jadwal);
			$("#ubah_jam_tutup").val(data.jam_tutup);
			$("#ubah_nama_bengkel").val(data.nama_bengkel);
      $("#ubah_maps").val(data.maps);
			$("#data_foto").val(data.foto);
   
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
                        
                    </ul>
                </nav>
               
            </div>
        </footer>
