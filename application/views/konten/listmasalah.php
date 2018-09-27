<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Daftar Kegiatan </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Update Kegiatan</a></li>
        <li><a href="#">List Kegiatan</a></li>
 
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
              <h3 class="box-title">Data Kegiatan IPDS</h3>
            </div>
            <!-- /.box-header -->
            
            <div class="box-body" style="overflow-x:scroll;">
            <a href="<?php echo base_url().'admin/tambahmasalah'; ?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Tambah Masalah</a>
<br/><br/>
              <table id="listkegiatan" class="table table-bordered table-striped">
              <thead> 
              <tr>
                  <th>Kegiatan</th>
                  <th>Judul Masalah</th>
                  <th>Detail Masalah</th>
                  <th>Detail Solusi</th>
                  <th></th>
                </tr>
                </thead> 
                <?php 
		            foreach($masalah as $k){ 
                ?>
            			<tr>
				<td><?php echo $k->nama_detil ?></td>
				<td><?php echo $k->judul_masalah ?></td>
				<td><?php echo $k->masalah ?></td>
                <td><?php echo $k->solusi ?></td>
				<td> 
                <a class="btn btn-danger btn-sm" href="<?php echo base_url().'admin/hapusmasalah/'.$k->no; ?>"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
                <a class="btn btn-warning btn-sm" href="<?php echo base_url().'admin/editkegiatan/'.$k->id_detil; ?>"><span class="glyphicon glyphicon-plus"></span> Edit</a>
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