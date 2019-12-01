<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                            <h4 class="title">DATA JADWAL SERVIS</h4>
                                <p class="category">Data Jadwal Servis</p>
                            </div>
                            <div class="content table-responsive table-full-width">

                                <table class="table table-hover table-striped">
                                <a href="#tambah" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Tambah</a>                      
                                    <thead>
                                        <th>NO</th>
                                        <th>ID JADWAL</th>
                                        <th>JAM MULAI SERVIS</th>
                                        <th>JAM SELESAI SERVIS</th>
                                        <th>STATUS</th>
                                        <th>ID BENGKEL</th>
                                        <th>ACTION</th>
                                    </thead>
                                
                                    <?php 
                                     $no=0;
                                 foreach ($arr as $dt_jadwal) {
                                    $no++;
                                        echo '<tr>
                                <td>'.$no.'</td>
                                <td>'.$dt_jadwal->id_jadwal.'</td>
                                <td>'.$dt_jadwal->jadwal_mulai.'</td>
                                <td>'.$dt_jadwal->jadwal_selesai.'</td>
                                <td>'.$dt_jadwal->status.'</td>
                                <td>'.$dt_jadwal->id_bengkel.'</td>
                              
                                <td><a href="#update_jadwal" class="btn btn-warning" data-toggle="modal" onclick="tm_detail('.$dt_jadwal->id_jadwal.')">Update</a> 
                                <a href="'.base_url('index.php/jadwal/hapus_jadwal/'.$dt_jadwal->id_jadwal).'" onclick="return confirm(\'anda yakin?\')" class="btn btn-danger">Delete</a></td>
                             </tr>';
                                }
                                ?>

    <div class="modal" id="tambah">
        <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel"> Tambah jadwal</h4>
          </div>
          <div class="modal-body">

            <form action="<?php echo base_url('index.php/jadwal/add_jadwal') ?>" method="post">
            JAM MULAI SERVIS
            <input type="time" name="jadwal_mulai" class="form-control"></br>
            JAM SELESAI SERVIS
            <input type="time" name="jadwal_selesai" class="form-control"></br>
            STATUS
            <input type="text" name="status" class="form-control"></br>
            ID BENGKEL
           <select name="id_bengkel" class="form-control">
              <option></option>
              <?php foreach ($data_bengkel as $bengkel): ?>
                  <option value="<?=$bengkel->id_bengkel?>"><?=$bengkel->id_bengkel?></option>
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


<div class="modal fade" id="update_jadwal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Update jadwal</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/jadwal/update_jadwal')?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_jadwal" id="id_jadwal">
          JAM MULAI SERVIS
          <input id="jadwal_mulai" type="time" name="jadwal_mulai_edit" class="form-control"><br>
          JAM SELESAI SERVIS
          <input id="jadwal_selesai" type="time" name="jadwal_selesai_edit" class="form-control"><br>
          STATUS
          <input id="status" type="text" name="status_edit" class="form-control"><br>
          ID BENGKEL
          <select name="id_bengkel_edit"  input id="id_bengkel" class="form-control">
            
              <?php foreach ($data_bengkel as $bengkel): ?>
                  <option value="<?=$bengkel->id_bengkel?>"><?=$bengkel->id_bengkel?></option>
              <?php endforeach ?>
          </select>
            <br>
         
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
  
  function tm_detail(id_jadwal) {
    $.getJSON("<?=base_url()?>index.php/jadwal/get_detail_jadwal/"+id_jadwal,function(data){
        $("#id_jadwal").val(data['id_jadwal']);
        $("#jadwal_mulai").val(data['jadwal_mulai']);
        $("#jadwal_selesai").val(data['jadwal_selesai']);
        $("#status").val(data['status']);
        $("#id_bengkel").val(data['id_bengkel']);
       
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
