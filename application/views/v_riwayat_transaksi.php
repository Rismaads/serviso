<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Riwayat Transakasi </h4>
                                <p class="category">Riwayat Transaksi Aplikasi Serviso
                            <div class="content table-responsive table-full-width">

                                <table class="table table-hover table-striped">
                                <a href="#tambah" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Tambah</a>                      
                                    <thead>
                                    <th>NO</th>
                                    <th>ID RIWAYAT TRANSAKSI</th>
                                    <th>ID PELANGGAN</th>
                                    <th>ID BENGKEL</th>
                                    <TH>KERUSAKAN</th>
                                    <th>AKSI</th>
                                    </thead>
                                
                                    <?php 
                    $no=0;
                    foreach ($DataRiwayat as $tr) {
                        $no++;
                        echo '<tr>
                                <td>'.$no.'</td>
                                <td>'.$tr->id_riwayat_transaksi.'</td>
                                <td>'.$tr->id_pelanggan.'</td>
                                <td>'.$tr->id_bengkel.'</td>
                                <td>'.$tr->kerusakan.'</td>
                               
                                <td><a href="#update_riwayat_transaksi" class="btn btn-warning" data-toggle="modal" onclick="tm_detail('.$tr->id_riwayat_transaksi.')">Update</a>  <a href="'.base_url('index.php/Riwayat_transaksi/hapus_riwayat_transaksi/'.$tr->id_riwayat_transaksi).'" onclick="return confirm(\'anda yakin?\')" class="btn btn-danger">Delete</a></td>
                             </tr>';
                    }
                    ?>

<div class="modal fade" id="tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Tambah Riwayat Transaksi</h4>
      </div>
          <div class="modal-body">

          <form action="<?=base_url('index.php/riwayat_transaksi/add_riwayat_transaksi')?>" method="post" enctype="multipart/form-data">
          
            ID PELANGGAN
            <select name="id_pelanggan" class="form-control">
              <option></option>
              <?php foreach ($data_pelanggan as $pelanggan): ?>
                  <option value="<?=$pelanggan->id_pelanggan?>"><?=$pelanggan->nama_lengkap?></option>
              <?php endforeach ?>
          </select>
           
           ID BENGKEL
           <select name="id_bengkel" class="form-control">
              <option></option>
              <?php foreach ($data_bengkel as $bengkel): ?>
                  <option value="<?=$bengkel->id_bengkel?>"><?=$bengkel->id_bengkel?></option>
              <?php endforeach ?>
          </select>
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



<div class="modal fade" id="update_riwayat_transaksi">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Update riwayat transaksi</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/riwayat_transaksi/update_riwayat_transaksi')?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_riwayat_transaksi" id="id_riwayat_transaksi">
        
          Kerusakan
            <input type="text" name="kerusakan_edit" id="kerusakan_edit" class="form-control"></br>
            
        
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
  
  function tm_detail(id_riwayat_transaksi) {
    $.getJSON("<?=base_url()?>index.php/riwayat_transaksi/get_detail_riwayat_transaksi/"+id_riwayat_transaksi,function(data){
        $("#id_riwayat_transaksi").val(data['id_riwayat_transaksi']);
        $("#id_pelanggan").val(data['id_pelanggan']);
        $("#id_bengkel").val(data['id_bengkel']);
        $("#kerusakan_edit").val(data['kerusakan']);
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
