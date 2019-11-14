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
                                <td>
              
                                <a href="'.base_url('index.php/pelanggan/hapus_pelanggan/'.$dt_pelanggan->id_pelanggan).'" onclick="return confirm(\'anda yakin?\')" class="btn btn-danger">Delete</a></td>
                             </tr>';
                                }
                                ?>

   
          </form>
        </div>


                                </table>



                                
    </div>
  </div>
</div>

                     


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
