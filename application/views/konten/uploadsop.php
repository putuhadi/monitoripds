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
            <div class="box-body">
              <table id="listkegiatan" class="table table-bordered table-striped">
              <thead> 
              <tr>
                  <th>No</th>
                  <th>Nama Kegiatan</th>
                  <th>Satuan Target</th>
                  <th>Target</th>
                  <th>Realisasi</th>
                  <th>Deadline</th>
                  <th>Penanggung Jawab</th>
                  <th></th>
                </tr>
                </thead> 
                <?php 
		            $no = 1;
		            foreach($kegiatan as $k){ 
                ?>
            			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $k->nama_detil ?></td>
				<td><?php echo $k->satuan ?></td>
                <td><?php echo $k->target ?></td>
                <td><?php echo $k->realisasi ?></td>
                <td><?php echo date_indo($k->tanggal_target) ?></td>
                <td><?php echo $k->nama_seksi ?></td>
				<td> 
                <a class="btn btn-info btn-sm" href="#"><span class="glyphicon glyphicon-plus"></span> Upload</a>
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