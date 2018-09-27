<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Daftar Kegiatan </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Update Pengguna</a></li>
        <li><a href="#">List Pengguna</a></li>
 
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
       <div class="row">
        <div class="col-xs-12">
            <!-- /.box-header -->
            
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pengguna Monitoring</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <a href="<?php echo base_url().'admin/tambah_user'; ?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Tambah Pengguna</a>
<br/><br/>
              <table id="listkegiatan" class="table table-bordered table-striped">
              <thead> 
              <tr>
                  <th>No</th>
                  <th>Nama Pengguna</th>
                  <th>Username</th>
                  <th>Seksi</th>
                  <th></th>
                </tr>
                </thead> 
                <?php 
		            $no = 1;
		            foreach($user as $u){ 
                ?>
            			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $u->admin_nama ?></td>
				<td><?php echo $u->admin_username ?></td>
                <td><?php echo $u->nama_seksi ?></td>
				<td> 
              <a class="btn btn-danger btn-sm" href="<?php echo base_url().'admin/hapususer/'.$u->admin_id; ?>"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
            </div>
            
          </div>
          <!-- /.modal-dialog -->
        </div>
        </td>
            </tr>
            
            <?php 
		        }
		        ?>
          </table>


                
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- left column -->
        
        <!--/.col (left) -->
        <!-- right column -->
        
        <!--/.col (right) -->
      </div>
      <!-- /.box -->
      
    </section>
    <!-- /.content -->
    <!-- konten kedua -->
    <section class="content"> </section>
    <!-- /konten kedua-->
  </div>