<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Tambah Masalah/Solusi</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tambah Masalah</a></li>
 
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
       <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><strong>Tambah Masalah</strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url().'admin/masalah_tambah' ?>" enctype="multipart/form-data">
                
              <div class="box-body">
               <div class="form-group">
                  <label>Pilih Kegiatan</label>
                  <select class="form-control" name="id_detil">
                   <?php foreach($masalah as $m)
                    {
                    ?>
                    <option value="<?php echo $m->id_detil ?>"><?php echo $m->nama_detil ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
                <div class="form-group has-error">
                  <label form="namapengguna">Judul Masalah</label>
                  <input type="text" class="form-control" id="judulmasalah" name="judulmasalah" placeholder="Judul" />
                  <?php echo form_error('judulmasalah'); ?>
                </div>

                <div class="form-group has-error">
                  <label form="namapengguna">Detail Masalah</label>
                  <textarea class="form-control" row="8" id="masalah" name="masalah" placeholder="Tuliskan detail masalah"></textarea>
                  <?php echo form_error('masalah'); ?>
                </div>

                <div class="form-group has-success">
                  <label form="namapengguna">Detail Solusi</label>
                  <textarea class="form-control" row="8" id="solusi" name="solusi" placeholder="Tuliskan detail masalah"></textarea>
                  <?php echo form_error('solusi'); ?>
                </div>
 

                
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="button" class="btn btn-primary">Tambah</button>
              </div>
            </form>
          </div>

 </div>
      
			  
            <form class="form-horizontal">

            </form>
          </div>
         
        </div>

      </div>



