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
            <a href="<?php echo base_url().'admin/tambahkegiatan'; ?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Tambah Kegiatan</a>
<br/><br/>
              <table id="listkegiatan" class="table table-bordered table-striped">
              <thead> 
              <tr>
                  <th>No</th>
                  <th>Nama Kegiatan</th>
                  <th>Satuan Target</th>
                  <th>Target</th>
                  <th>Realisasi</th>
                  <th>Tanggal Mulai</th>
                  <th>Deadline</th>
                  <th>Penanggung Jawab</th>
                  <th>Masalah/Solusi</th>
                  <th>Link SOP</th>
                  <th class="col-md-12">Link Monitoring</th>
                  <th>Link Aplikasi</th>
                  <th></th>
                </tr>
                </thead> 
                <?php 
                $no = 1;
                if($this->session->userdata('userstatus') == "admin")
                {
		            foreach($kegiatan as $k){ 
                ?>
            			<tr>
				        <td><?php echo $no++; ?></td>
				        <td><?php echo $k->nama_detil ?></td>
				        <td><?php echo $k->satuan ?></td>
                <td><?php echo $k->target ?></td>
                <td><?php echo $k->realisasi ?></td>
                <td><?php echo date_indo($k->tanggal_mulai) ?></td>
                <td><?php echo date_indo($k->tanggal_target_kab) ?></td>
                <td><?php echo $k->nama_seksi ?></td>
                <td><a href="<?php echo base_url().'admin/lihatmasalah/'.$k->id_detil; ?>" target="_blank">LIHAT</a></td>
                <td><a href="<?php echo $k->link_sop ?>" target="_blank">UNDUH SOP</a></td>
                <td><a href="<?php echo $k->link_mon ?>" target="_blank">MONITORING</a></td>
                <td><a href="<?php echo $k->link_app ?>" target="_blank">LINK APP</a></td>
				<td> 
                <a class="btn btn-danger btn-sm" href="<?php echo base_url().'admin/hapuskegiatan/'.$k->id_detil; ?>"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
                <a class="btn btn-warning btn-sm" href="<?php echo base_url().'admin/editkegiatan/'.$k->id_detil; ?>"><span class="glyphicon glyphicon-plus"></span> Edit</a>
        </td>
            </tr>
            <?php 
            }
          }
          else
          {
            foreach($kegiatan as $k){ 
            ?>
            <tr>
				        <td><?php echo $no++; ?></td>
				        <td><?php echo $k->nama_detil ?></td>
				        <td><?php echo $k->satuan ?></td>
                <td><?php echo $k->target ?></td>
                <td><?php echo $k->realisasi ?></td>
                <td><?php echo date_indo($k->tanggal_mulai) ?></td>
                <td><?php echo date_indo($k->tanggal_target) ?></td>
                <td><?php echo $k->nama_seksi ?></td>
                <td><a href="<?php echo base_url().'admin/lihatmasalah/'.$k->id_detil; ?>" target="_blank">LIHAT</a></td>
                <td><a href="<?php echo $k->link_sop ?>" target="_blank">UNDUH SOP</a></td>
                <td><a href="<?php echo $k->link_mon ?>" target="_blank">MONITORING</a></td>
                <td><a href="<?php echo $k->link_app ?>" target="_blank">LINK APP</a></td>
				<td> 
                <a class="btn btn-danger btn-sm" href="<?php echo base_url().'admin/hapuskegiatan/'.$k->id_detil; ?>"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
                <a class="btn btn-warning btn-sm" href="<?php echo base_url().'admin/editkegiatan/'.$k->id_detil; ?>"><span class="glyphicon glyphicon-plus"></span> Edit</a>
        </td>
            </tr>
            <?php
          }
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

  </div>