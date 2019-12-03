<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                            <h4 class="title">DATA daftarpesanan PELANGGAN</h4>
                                <p class="category">Data daftarpesanan Pelanggan Aplikasi Serviso</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                            <?= $this->session->flashdata('pesan');?>
                                <table class="table table-hover table-striped">

                                    <thead>
                                        <th>NO</th>
                                        <th>ID NOTA</th>
                                        <th>TANGGAL</th>
                                        <th>NAMA PELANGGAN</th>
                                        <th>JADWAL MULAI</th>
                                        <th>JADWAL SELESAI</th>
                                        <th>MERK SEPEDA</th>
                                        <th>NO POLISI</th>
                                        <th>KERUSAKAN</th>
                                        <th>KETERANGAN</th>
                                        <th>ID ADMIN</th>
                                        <th>AKSI</th>
                                    </thead>
                                
                                    <?php 
                                     $no=0;
                                 foreach ($nota as $dp) {
                                    $no++;
                                        echo '<tr>
                                            <td>'.$no.'</td>
                                            <td>'.$dp->id_nota.'</td>
                                            <td>'.$dp->tanggal.'</td>
                                            <td>'.$dp->nama_pelanggan.'</td>
                                            <td>'.$dp->jadwal_mulai.'</td>
                                            <td>'.$dp->jadwal_selesai.'</td>
                                            <td>'.$dp->merk_sepeda.'</td>
                                            <td>'.$dp->no_polisi.'</td>
                                            <td>'.$dp->kerusakan.'</td>
                                            <td>'.$dp->keterangan.'</td>
                                            <td>'.$dp->id_admin.'</td>
                                        <td><a href="#update_daftarpesanan" class="btn btn-warning" data-toggle="modal" onclick="detail('.$dp->id_nota.')">Update</a> 
                                            <a href="'.base_url('index.php/daftarpesanan/hapus_daftarpesanan/'.$dp->id_nota).'" onclick="return confirm(\'anda yakin?\')" class="btn btn-danger">Delete</a></td>
                                        </tr>';
                                }
                                ?>



<div class="modal fade" id="update_daftarpesanan">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Update Daftar Pesanan</h4>
      </div>
      <div class="modal-body">
      <form action="<?= base_url()?>index.php/daftarpesanan/terima" method="post">
        <input type="hidden" name="id_nota" id="id_nota">
        <input type="hidden" name="keterangan" value="diterima">
        <input type="submit" class="btn btn-primary" value="terima">
      </form>
      <a href="" class="btn btn-danger">Tolak</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

                            

<script>
  
  function tm_detail(id_unit_daftarpesanan) {
    $.getJSON("<?=base_url()?>index.php/daftarpesanan/get_detail_daftarpesanan/"+id_unit_daftarpesanan,function(data){
        $("#id_unit_daftarpesanan").val(data['id_unit_daftarpesanan']);
        $("#nama_pelanggan").val(data['nama_pelanggan']);
        $("#no_hp").val(data['no_hp']);
        $("#alamat").val(data['alamat']);
        $("#no_polisi").val(data['no_polisi']);
        $("#jenis_daftarpesanan").val(data['jenis_daftarpesanan']);
        $("#merk_daftarpesanan").val(data['merk_daftarpesanan']);
        $("#kerusakan").val(data['kerusakan']);
        $("#id_jadwal").val(data['id_jadwal']);
    });
  }

  function detail(id_nota){
    $.getJSON("<?= base_url()?>index.php/daftarpesanan/get_byId/"+id_nota,function(data){
        $('#id_nota').val(data['id_nota']);
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
