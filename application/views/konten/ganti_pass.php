<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Ganti Password</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Ganti Password</a></li>
 
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
              <h3 class="box-title"><strong>Detail Password</strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url().'admin/ganti_password_act' ?>" enctype="multipart/form-data">
            <?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "berhasil"){
				echo "<div class='alert alert-success'>Ganti Password Berhasil</div>";
			}
		}
		?>
              <div class="box-body">
                <div class="form-group">
                  <label form="namapengguna">Username</label>
                  <input type="text" class="form-control" id="namapengguna" name="namapengguna" value="<?php $username=$this->session->userdata('username'); echo $username; ?>" readonly>
                </div>
                <div class="form-group">
                  <label form="pass_baru">Password</label>
                  <input type="password" class="form-control" id="pass_baru" name="pass_baru" placeholder="Password">
                  <?php echo form_error('pass_baru'); ?>
                </div>
                <div class="form-group">
                  <label form="pass_ulang">Ulang Password</label>
                  <input type="password" class="form-control" id="ulang_pass" name="ulang_pass" placeholder="Ulang Password">
                  <?php echo form_error('ulang_pass'); ?>
                </div>
    
                
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="button" class="btn btn-primary">Ganti Password</button>
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