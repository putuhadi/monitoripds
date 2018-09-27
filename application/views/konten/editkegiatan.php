<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Edit Kegiatan</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tambah Kegiatan</a></li>
 
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
       <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><strong>Edit Detail Kegiatan</strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php foreach($kegiatan as $k){ ?>
            <form role="form" method="post" action="<?php echo base_url().'admin/updatekegiatan' ?>" enctype="multipart/form-data">
                
              <div class="box-body">
                <div class="form-group">
                
                  <label form="namakegiatan">Nama Kegiatan</label>
                  <input type="hidden" name="id" value="<?php echo $k->id_detil; ?>">
                  <input type="text" class="form-control" value="<?php echo $k->nama_detil; ?>" id="namakegiatan" name="namakegiatan" placeholder="Nama Kegiatan">
                  <?php echo form_error('namakegiatan'); ?>
                </div>
                <div class="form-group">
                
                  <label form="namakegiatan">Link SOP</label>
                  <input type="url" class="form-control" value="<?php echo $k->link_sop; ?>" id="linksop" name="linksop" placeholder="Link SOP">
                  <?php echo form_error('linksop'); ?>
                </div>

                <div class="form-group">
                
                <label form="namakegiatan">Link Monitoring</label>
                <input type="url" class="form-control" value="<?php echo $k->link_mon; ?>" id="linkmon" name="linkmon" placeholder="Link Monitoring">
                <?php echo form_error('linkmon'); ?>
              </div>

              <div class="form-group">
                
                <label form="namakegiatan">Link Aplikasi</label>
                <input type="url" class="form-control" value="<?php echo $k->link_app; ?>" id="linkapp" name="linkapp" placeholder="Link Aplikasi">
                <?php echo form_error('linkapp'); ?>
              </div>
                <div class="form-group">
                  <label form="satuan">Satuan</label>
                  <input type="text" class="form-control" id="satuan" name="satuan" value="<?php echo $k->satuan; ?>" placeholder="Satuan">
                  <?php echo form_error('satuan'); ?>
                </div>
                <div class="form-group">
                  <label form="target">Target</label>
                  <input type="text" class="form-control" id="target" name="target" value="<?php echo $k->target; ?>" placeholder="Target" readonly>
                  <?php echo form_error('target'); ?>
                </div>  
                <div class="form-group">
                  <label form="realisasi">Realisasi</label>
                  <input type="text" class="form-control" id="realisasi" name="realisasi" value="<?php echo $k->realisasi; ?>" placeholder="Realisasi">
                  <?php echo form_error('realisasi'); ?>
                </div> 
            
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="button" class="btn btn-primary">Edit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          
          <!-- /.box -->

          
          <!-- /.box -->

          <!-- Input addon -->
          
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><strong>Informasi</strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			  <div class="box-body">
			    <p>Masukkan kegiatan seksi yang akan dimasukkan sebagai kegiatan di tahun 2018.</p>
			    <p><strong>Nama Kegiatan </strong>: Adalah nama kegiatan dsb </p>
			  </div>
            <form class="form-horizontal">
<!-- /.box-body -->
              <div class="box-footer">
               
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
          
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
    <!-- konten kedua -->
    <section class="content"> </section>
	  <!-- /konten kedua-->
  </div>
  <?php } ?>