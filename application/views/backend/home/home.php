<?php 
    // print "<br>";
    // ข้อมูลที่ดึงมา
    $member = ($query['0']);
    $i_halal = ($query['1']);
    $i_haram = ($query['2']);
    $i_syubhat = ($query['3']);
    $p_halal = ($query['4']);
    $p_haram = ($query['5']);
    $p_syubhat = ($query['6']);
    $contact = ($query['7']);
    // $register_day5 = ($query['8']);
    // $register_day6 = ($query['9']);
    // $register_day7 = ($query['10']);
    // $counter_day = ($query['11']);
    // $counter_day1 = ($query['12']);
    // $counter_day2 = ($query['13']);
    // $counter_day3 = ($query['14']);
    // $counter_day4 = ($query['15']);
    // $counter_day5 = ($query['16']);
    // $counter_day6 = ($query['17']);

    // //วันที่
    // $day = date ("d-m-Y", strtotime ("0 days"));
    // $day1 = date ("d-m-Y", strtotime ("-1 days"));
    // $day2 = date ("d-m-Y", strtotime ("-2 days"));
    // $day3 = date ("d-m-Y", strtotime ("-3 days"));
    // $day4 = date ("d-m-Y", strtotime ("-4 days"));
    // $day5 = date ("d-m-Y", strtotime ("-5 days"));
    // $day6 = date ("d-m-Y", strtotime ("-6 days"));
    
    // foreach($query1 as $rw) {
    //  echo $rw->province_th;
    // }
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <b>แผงควบคุม</b>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('/admin_template1/') ?>#"><i class="fa fa-dashboard"></i>Main</a></li>
        <li class="active">แผงควบคุม</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h4><?php echo "$i_halal"; ?><sup style="font-size: 20px"></sup></h4>
              <p>จำนวนส่วนผสมที่ฮาลาลทั้งหมด</p>
            </div>
            <div class="icon">
              <i class="ion-android-happy"></i>
            </div>
            <a href="#" class="small-box-footer">ข้อมูลเพิ่มเติม <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h4><?php echo "$i_haram"; ?></h4>
              <p>จำนวนส่วนผสมที่ชุบฮัตทั้งหมด</p>
            </div>
            <div class="icon">
              <i class="fa fa-list-alt"></i>
            </div>
            <a href="#" class="small-box-footer">ข้อมูลเพิ่มเติม <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <!-- ./col -->
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h4><?php echo "$i_syubhat"; ?></h4>
              <p>จำนวนส่วนผสมที่ฮารอมทั้งหมด</p>
            </div>
            <div class="icon">
              <i class="fa fa-hand-paper-o"></i>
            </div>
            <a href="#" class="small-box-footer">ข้อมูลเพิ่มเติม <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h4><?php echo "$member"; ?> คน</h4>
              <p>จำนวนเจ้าหน้าที่</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="#" class="small-box-footer">ข้อมูลเพิ่มเติม <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h4><?php echo "$p_halal"; ?><sup style="font-size: 20px"></sup></h4>
              <p>จำนวนผลิตภัณฑ์ที่ฮาลาลทั้งหมด</p>
            </div>
            <div class="icon">
              <i class="ion-android-happy"></i>
            </div>
            <a href="#" class="small-box-footer">ข้อมูลเพิ่มเติม <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h4><?php echo "$p_haram"; ?></h4>
              <p>จำนวนผลิตภัณฑ์ที่ชุบฮัตทั้งหมด</p>
            </div>
            <div class="icon">
              <i class="fa fa-list-alt"></i>
            </div>
            <a href="#" class="small-box-footer">ข้อมูลเพิ่มเติม <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <!-- ./col -->
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h4><?php echo "$p_syubhat"; ?></h4>
              <p>จำนวนผลิตภัณฑ์ที่ฮารอมทั้งหมด</p>
            </div>
            <div class="icon">
              <i class="fa fa-hand-paper-o"></i>
            </div>
            <a href="#" class="small-box-footer">ข้อมูลเพิ่มเติม <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h4><?php echo "$contact"; ?> เรื่อง</h4>
              <p>จำนวนติดต่อสอบถาม</p>
            </div>
            <div class="icon">
              <i class="fa fa-compress"></i>
            </div>
            <a href="#" class="small-box-footer">ข้อมูลเพิ่มเติม <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <section class="content">
      <!--  -->

      <!-- /.row -->

    </section>
      </div>
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">  
  </footer>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script             
src="<?php echo base_url('/admin_template1/') ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script             
src="<?php echo base_url('/admin_template1/') ?>bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('/admin_template1/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('/admin_template1/') ?>bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url('/admin_template1/') ?>bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('/admin_template1/') ?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('/admin_template1/') ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url('/admin_template1/') ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('/admin_template1/') ?>bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('/admin_template1/') ?>bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url('/admin_template1/') ?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url('/admin_template1/') ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('/admin_template1/') ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('/admin_template1/') ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('/admin_template1/') ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('/admin_template1/') ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('/admin_template1/') ?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('/admin_template1/') ?>dist/js/demo.js"></script>
<script src="<?php echo base_url('/admin_template1/') ?>bower_components/chart.js/Chart.js"></script>

<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
    // This will get the first returned node in the jQuery collection.
    var areaChart       = new Chart(areaChartCanvas)

    var areaChartData = {
      labels  : ['07/10/2562', '08/10/2562', '09/10/2562', '10/10/2562 ', '11/10/2562 ', '12/10/2562 ', '13/10/2562 '],
      datasets: [
        {
          label               : 'Electronics',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [0, 59, 80, 81, 56, 55, 40]
        },
        {
          label               : 'Digital Goods',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.😎',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [80, 48, 40, 19, 86, 27, 90]
        }
      ]
    }

    


    

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData
    barChartData.datasets[1].fillColor   = '#00a65a'
    barChartData.datasets[1].strokeColor = '#00a65a'
    barChartData.datasets[1].pointColor  = '#00a65a'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)
  })
</script>


</body>
</html>
