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
            <form role="form" method="post" action="<?php echo base_url().'admin/update_evaluasi' ?>" enctype="multipart/form-data">
                
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
                

                <div class="form-group">
                <label>Pilih Kabupaten Terlambat</label>
                <select class="form-control select2" multiple="multiple" name="kabupaten[]" data-placeholder="Pilih Kabupaten"
                        style="width: 100%;" type="namakab">
                  <option value="Sumba Barat">Sumba Barat</option>
                  <option value="Sumba Timur">Sumba Timur</option>
                  <option value="Kab Kupang">Kab Kupang</option>
                  <option value="Timor Tengah Selatan">Timor Tengah Selatan</option>
                  <option value="Timor Tengah Utara">Timor Tengah Utara</option>
                  <option value="Belu">Belu</option>
                  <option value="Alor">Alor</option>
                </select>
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





