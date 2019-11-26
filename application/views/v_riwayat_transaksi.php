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
                                                     
                                    <thead>
                                    <th>NO</th>
                                    <th>ID RIWAYAT TRANSAKSI</th>
                                    <th>NAMA PELANGGAN</th>
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
                                <td>'.$tr->id_nota.'</td>
                                <td>'.$tr->nama_pelanggan.'</td>
                                <td>'.$tr->id_bengkel.'</td>
                                <td>'.$tr->keterangan.'</td>
                               
                                <td><a href="'.base_url('index.php/nota/hapus_nota/'.$tr->id_nota).'" onclick="return confirm(\'anda yakin?\')" class="btn btn-danger">Delete</a></td>
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

          <form action="<?=base_url('index.php/Riwayat_transaksi/add_nota')?>" method="post" enctype="multipart/form-data">
          
            ID PELANGGAN
            <select name="id_unit_sepeda" class="form-control">
              <option></option>
              <?php foreach ($data_pelanggan as $pelanggan): ?>
                  <option value="<?=$pelanggan->id_unit_sepeda?>"><?=$pelanggan->nama_pelanggan?></option>
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



<div class="modal fade" id="update_nota">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Update riwayat transaksi</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/Riwayat_transaksi/update_nota')?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_nota" id="id_nota">
        
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
  
  function tm_detail(id_nota) {
    $.getJSON("<?=base_url()?>index.php/nota/get_detail_nota/"+id_nota,function(data){
        $("#id_nota").val(data['id_nota']);
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
                        
                    </ul>
                </nav>
     
            </div>
        </footer>
