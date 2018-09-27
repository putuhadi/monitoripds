<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Tambah Kegiatan</h1>
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
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><strong>Masukkan Detail Kegiatan</strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url().'admin/kegiatan_tambah' ?>" enctype="multipart/form-data">
                
              <div class="box-body">
               <div class="form-group">
                  <label>Pilih Seksi</label>
                  <select class="form-control" name="seksi">
                    <option value="530062">Integrasi Pengolahan Data</option>
                    <option value="530061">Diseminasi Layanan Statistik</option>
                    <option value="530063">Jaringan dan Rujukan Statistik</option>
                  </select>
                </div>
                <div class="form-group">
                  <label form="namakegiatan">Nama Kegiatan</label>
                  <input type="text" class="form-control" id="namakegiatan" name="namakegiatan" placeholder="Nama Kegiatan">
                  <?php echo form_error('namakegiatan'); ?>
                </div>
                <div class="form-group">
                  <label form="satuan">Satuan</label>
                  <input type="text" class="form-control" id="satuan" name="satuan" placeholder="Satuan">
                  <?php echo form_error('satuan'); ?>
                </div>
                <div class="form-group">
                  <label form="target">Target</label>
                  <input type="text" class="form-control" id="target" name="target" placeholder="Target">
                  <?php echo form_error('target'); ?>
                </div>
                <div class="form-group">
                  <label>Seksi Terkait</label>
                  <select class="form-control" name="seksiterkait">
                    <option value="530071"><b>Statistik Produksi</b></option>
                    <option value="530072">Pertanian</option>
                    <option value="530073">Pertambangan</option>
                  </select>
                </div>
                
                <div class="form-group">
                <label>Tanggal Mulai:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" name="start" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>

                <div class="form-group">
                <label>Deadline:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" name="deadline" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>

                
              <div class="form-group">
                  <label form="target">Link SOP</label>
                  <input type="url" class="form-control" id="linksop" name="linksop" placeholder="Link SOP">
                  <?php echo form_error('linksop'); ?>
                </div>
                
                <div class="form-group">
                  <label form="target">Link Monitoring</label>
                  <input type="url" class="form-control" id="linkmon" name="linkmon" placeholder="Link Monitoring">
                  <?php echo form_error('linkmon'); ?>
                </div>

                <div class="form-group">
                  <label form="target">Link App</label>
                  <input type="url" class="form-control" id="linkapp" name="linkapp" placeholder="Link Monitoring">
                  <?php echo form_error('linkapp'); ?>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="button" class="btn btn-primary">Tambah</button>
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
        
          <!-- Horizontal Form -->
       

            <!-- /.box-header -->
            <!-- form start -->
			  <div class="box-body">
			   
			  </div>
            <form class="form-horizontal">
<!-- /.box-body -->
              
              <!-- /.box-footer -->
            </form>
          </div>
         
        </div>
        <!--/.col (right) -->
      </div>


    </section>

   </div>

  </div>