<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        TIMELINE KEGIATAN KABUPATEN
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kegiatan</li>
        <li class="active">Timeline Kegiatan Kabupaten</li>
      </ol>
    </section>
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
</div>