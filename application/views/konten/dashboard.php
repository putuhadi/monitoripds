<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php 
    if($this->session->userdata('userstatus') == "admin" || $this->session->userdata('userstatus') == "pemantau" ) { ?>
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $this->m_rental->get_data('bps_detil_keg')->num_rows(); ?></h3>

              <p>Total Kegiatan</p>
            </div>
            <div class="icon">
              <i class="ion ion-speedometer"></i>
            </div>
            <a href="<?php echo base_url().'admin/listkegiatan'; ?>" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $this->m_rental->totalipd('bps_detil_keg')->num_rows(); ?><sup style="font-size: 20px"></sup></h3>

              <p>Kegiatan IPD</p>
            </div>
            <div class="icon">
              <i class="ion ion-calculator"></i>
            </div>
            <a href="<?php echo base_url().'admin/listkegiatan'; ?>" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $this->m_rental->totaljrs('bps_detil_keg')->num_rows(); ?></h3>

              <p>Kegiatan JRS</p>
            </div>
            <div class="icon">
              <i class="ion ion-mouse"></i>
            </div>
            <a href="<?php echo base_url().'admin/listkegiatan'; ?>" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $this->m_rental->totaldls('bps_detil_keg')->num_rows(); ?></h3>

              <p>Kegiatan DLS</p>
            </div>
            <div class="icon">
              <i class="ion ion-document-text"></i>
            </div>
            <a href="#" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
    <?php } ?>
      <div class="row">
        <!-- Left col -->
        <section class="content">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Timeline Kegiatan</h3>
            </div>
            <div class="box-body" style="overflow-x:scroll;">
        <html>
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['gantt']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Task ID');
      data.addColumn('string', 'Task Name');
      data.addColumn('string', 'Penanggung Jawab');
      data.addColumn('date', 'Tanggal Mulai');
      data.addColumn('date', 'Tanggal Berakhir');
      data.addColumn('number', 'Durasi');
      data.addColumn('number', 'Persen Selesai');
      data.addColumn('string', 'Dependencies');

    <?php 
    if($this->session->userdata('userstatus') == "userkab")
    {
      foreach($timeline as $t)
      { 
        $trealisasi = $t->realisasi;
        $ttarget = $t->target;
        $tpersen = $trealisasi / $ttarget * 100;
    ?>
      data.addRows([
        ['<?php echo $t->id_detil ?>', '<?php echo $t->nama_detil ?>', '<?php echo $t->nama_detil ?>',
        new Date("<?php echo $t->tanggal_mulai ?>"), new Date("<?php echo $t->tanggal_target_kab ?>"), null, <?php echo round($tpersen, 2); ?>, null]
      ]);
      
      <?php 
      } 
    }
    else
    {
      foreach($timeline as $t)
      { 
        $trealisasi = $t->realisasi;
        $ttarget = $t->target;
        $tpersen = $trealisasi / $ttarget * 100;
    ?>
      data.addRows([
        ['<?php echo $t->id_detil ?>', '<?php echo $t->nama_detil ?>', '<?php echo $t->nama_detil ?>',
        new Date("<?php echo $t->tanggal_mulai ?>"), new Date("<?php echo $t->tanggal_target ?>"), null, <?php echo round($tpersen, 2); ?>, null]
      ]);
      
      <?php 
      } 
    }
      ?>



      var options = {
        height: 300,
        gantt: {
          criticalPathEnabled: false,
          trackHeight: 40
        }
      };

      var chart = new google.visualization.Gantt(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
  </script>
</head>
<body>
  <div id="chart_div"></div></div>
</body>
</html>
        </section>
        <section class="col-lg-5 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <!-- /.nav-tabs-custom -->


          <!-- quick email widget -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">5 Kegiatan Terakhir</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Nama Kegiatan</th>
                  <th>Seksi</th>
                  <th style="width: 40px">Realisasi</th>
                </tr>
                <?php 
		            $no = 1;
		            foreach($kegiatan as $k){ 
                ?>
                <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $k->nama_detil ?></td>
				<td><?php echo $k->nama_seksi ?></td>
                <td>
                    <?php 
                    $realisasi = $k->realisasi;
                    $target = $k->target;
                    $persen = $realisasi / $target * 100;
                    if ($persen > 49 && $persen < 80)
                    {
                    echo "<span class='badge bg-yellow'>";
                    echo round($persen, 2);
                    echo "%";
                    echo "</span>";
                    }
                    elseif ($persen < 50 )
                    {
                    echo "<span class='badge bg-red'>";
                    echo round($persen, 2);
                    echo "%";
                    echo "</span>";
                    }
                    elseif ($persen > 79 )
                    {
                    echo "<span class='badge bg-green'>";
                    echo round($persen, 2);
                    echo "%";
                    echo "</span>";
                    }
                    ?>
                </td>
            </tr>
            <?php 
		        }
		        ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-7 connectedSortable">


          <!-- Calendar -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Deadline < 7 Hari</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table id="listkegiatan" class="table table-bordered table-striped">
            <thead>     
            <tr>
                  <th style="width: 10px">#</th>
                  <th>Nama Kegiatan</th>
                  <th>Progress</th>
                  <th style="width: 40px">Deadline</th>
                </tr>
                <?php 
		            $no = 1;
		            foreach($deadline as $d){ 
                ?>
            </thead>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d->nama_detil ?></td>
                <td>
                    <?php 
                    $realisasi = $d->realisasi;
                    $target = $d->target;
                    $persen = $realisasi / $target * 100;
                    if ($persen > 49 && $persen < 80)
                    {
                    echo "<span class='badge bg-yellow'>";
                    echo round($persen, 2);
                    echo "%";
                    echo "</span>";
                    }
                    elseif ($persen < 50 )
                    {
                    echo "<span class='badge bg-red'>";
                    echo round($persen, 2);
                    echo "%";
                    echo "</span>";
                    }
                    elseif ($persen > 79 )
                    {
                    echo "<span class='badge bg-green'>";
                    echo round($persen, 2);
                    echo "%";
                    echo "</span>";
                    }
                    ?>
                </td>
                <td><?php echo date_indo($d->tanggal_target) ?></td>
                <?php 
		        }
		        ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
</section>

</div>
    <!-- /.content -->