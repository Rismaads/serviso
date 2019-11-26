<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">NOTA </h4>
                                <p class="category">Data Nota Aplikasi Serviso
                            <div class="content table-responsive table-full-width">

                                <table class="table table-hover table-striped">
                                <a href="#tambah" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Tambah</a>                      
                                    <thead>
                                    <th>NO</th>
                                    <th>ID NOTA</th>
                                    <th>NAMA PELANGGAN</th>
                                    <th>TANGGAL</th>
                                    <th>NO ANTRIAN</th>
                                    <th>ID BENGKEL</th>
                                    <th>JADWAL</th>
                                    <th>ID UNIT SEPEDA</th>
                                    <th>ID ADMIN</th>
                                    <th>AKSI</th>
                                    </thead>
                                
                                    <?php 
                    $no=0;
                    foreach ($nota1 as $dt_nota) {
                        $no++;
                        echo '<tr>
                                <td>'.$no.'</td>
                                <td>'.$dt_nota->id_nota.'</td>
                                <td>'.$dt_nota->nama_pelanggan.'</td>
                                <td>'.$dt_nota->tanggal.'</td>
                                <td>'.$dt_nota->no_antrian.'</td>
                                <td>'.$dt_nota->id_bengkel.'</td>
                                <td>'.$dt_nota->jadwal.'</td>
                                <td>'.$dt_nota->id_unit_sepeda.'</td>
                                <td>'.$dt_nota->id_admin.'</td>
                               
                                <td>  <a href="'.base_url('index.php/nota/hapus_nota/'.$dt_nota->id_nota).'" onclick="return confirm(\'anda yakin?\')" class="btn btn-danger">Delete</a></td>
                             </tr>';
                    }
                    ?>

<div class="modal fade" id="tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Tambah nota</h4>
      </div>
          <div class="modal-body">

          <form action="<?=base_url('index.php/nota/add_nota')?>" method="post" enctype="multipart/form-data">
           
            TANGGAL
            <input type="datetime-local" name="tanggal" class="form-control"></br>
           NO ANTRIAN
            <input type="text" name="no_antrian" class="form-control"></br>
           ID BENGKEL
           <select name="id_bengkel" class="form-control">
              <option></option>
              <?php foreach ($data_bengkel as $bengkel): ?>
                  <option value="<?=$bengkel->id_bengkel?>"><?=$bengkel->id_bengkel?></option>
              <?php endforeach ?>
          </select>
            JADWAL
            <input type="datetime-local" name="jadwal" class="form-control"></br>
           NAMA PELANGGAN
           <select name="id_unit_sepeda" class="form-control">
              <option></option>
              <?php foreach ($data_unit_sepeda as $unit_sepeda): ?>
                  <option value="<?=$unit_sepeda->id_unit_sepeda?>"><?=$unit_sepeda->nama_pelanggan?></option>
              <?php endforeach ?>
          </select>
           ID ADMIN
           <select name="id_admin" class="form-control">
              <option></option>
              <?php foreach ($data_admin as $admin): ?>
                  <option value="<?=$admin->id_admin?>"><?=$admin->nama_admin?></option>
              <?php endforeach ?>
          </select>
            
           
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



<div class="modal fade" id="update_nota">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Update nota</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/nota/update_nota')?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_nota" id="id_nota">
          <!-- TANGGAL
            <input type="datetime-local" name="tanggal_edit" class="form-control"></br> -->
           ID BENGKEL
            <input type="text" name="id_bengkel_edit" class="form-control"></br>
            JADWAL
            <input type="datetime-local" name="jadwal_edit" class="form-control"></br>
        
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
  
  function tm_detail(id_nota) {
    $.getJSON("<?=base_url()?>index.php/nota/get_detail_nota/"+id_nota,function(data){
        $("#id_nota").val(data['id_nota']);
        $("#tanggal").val(data['tanggal']);
        $("#id_bengkel").val(data['id_bengkel']);
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
                       
                    </ul>
                </nav>
       
            </div>
        </footer>
