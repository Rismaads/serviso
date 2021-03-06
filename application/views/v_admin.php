<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                            <h4 class="title">DATA ADMIN</h4>
                                <p class="category">Data Admin Aplikasi Serviso</p>
                            </div>
                            <div class="content table-responsive table-full-width">

                                <table class="table table-hover table-striped">
                                <a href="#tambah" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Tambah</a>                      
                                    <thead>
                                    <th>NO</th>
                        <th>ID ADMIN</th>
                        <th>NAMA ADMIN</th>
                        <th>USERNAME</th>
                        <th>PASSWORD</th>
                        <th>ID LEVEL</th>
                        <th>AKSI</th>
                                    </thead>
                                
                                    <?php 
                    $no=0;
                    foreach ($Data_admin1 as $dt_admin) {
                        $no++;
                        echo '<tr>
                                <td>'.$no.'</td>
                                <td>'.$dt_admin->id_admin.'</td>
                                <td>'.$dt_admin->nama_admin.'</td>
                                <td>'.$dt_admin->username.'</td>
                                <td>'.$dt_admin->password.'</td>
                                <td>'.$dt_admin->id_level.'</td>
                                <td><a href="#update_admin" class="btn btn-warning" data-toggle="modal" onclick="tm_detail('.$dt_admin->id_admin.')">Update</a>  <a href="'.base_url('index.php/admin/hapus_admin/'.$dt_admin->id_admin).'" onclick="return confirm(\'anda yakin?\')" class="btn btn-danger">Delete</a></td>
                             </tr>';
                    }
                    ?>

<div class="modal fade" id="tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Tambah admin</h4>
      </div>
          <div class="modal-body">

          <form action="<?=base_url('index.php/admin/add_admin')?>" method="post" enctype="multipart/form-data">
            NAMA ADMIN
            <input type="text" name="nama_admin" class="form-control"></br>
            USERNAME
            <input type="text" name="username" class="form-control"></br>
           PASSWORD
            <input type="password" name="password" class="form-control"></br>
            EMAIL
            <input type="text" name="email" class="form-control"></br>
            LEVEL
            <select name="id_level" class="form-control">
              <option></option>
              <?php foreach ($data_level as $level): ?>
                  <option value="<?=$level->id_level?>"><?=$level->nama_level?></option>
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



<div class="modal fade" id="update_admin">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Update admin</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/admin/update_admin')?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_admin" id="id_admin">
          NAMA ADMIN
          <input id="nama_admin" type="text" name="nama_admin_edit" class="form-control"><br>
         USERNAME
          <input id="username" type="text" name="username_edit" class="form-control"><br>
          PASSWORD
          <input id="password" type="text" name="password_edit" class="form-control"><br>
          <!-- ID LEVEL
          <input id="id_level" type="number" name="id_level_edit" class="form-control"><br> -->
        
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
  
  function tm_detail(id_admin) {
    $.getJSON("<?=base_url()?>index.php/admin/get_detail_admin/"+id_admin,function(data){
        $("#id_admin").val(data['id_admin']);
        $("#nama_admin").val(data['nama_admin']);
        $("#username").val(data['username']);
        $("#password").val(data['password']);
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
