
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo" style="background-color: #FBB448  !important;">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>HI</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>INGREDIENTS</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color: #FBB448  !important;">
      <!-- Sidebar toggle button-->
      <a href="<?php echo base_url('/admin_template1/') ?>#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('/admin_template1/') ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          ADMINISTRATION</p>
          <a href="<?php echo base_url('/admin_template1/') ?>#"><i class="fa fa-circle text-success"></i>Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HALAL INGREDIENTS</li>
         <li>
            <a href="home.html">
            <i class="fa fa-tachometer"></i><span>แผงควบคุม</span>
            <span class="pull-right-container">
            </span>
            </a>
        </li>

        <li class="active treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>จัดการข้อมูล</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="ingredients.html"><i class="fa fa-circle-o"></i>ข้อมูลส่วนผสม</a></li>
            <li><a href="status.html"><i class="fa fa-circle-o"></i>สถานะ</a></li>
            <li><a href="office.html"><i class="fa fa-circle-o"></i>สำนักงานที่ตรวจสอบ</a></li>
            <li><a href="about.html"><i class="fa fa-circle-o"></i>ข้อมูลเกี่ยวกับเรา</a></li>
          </ul>
        </li>
        
         
        <li>
            <a href="chart.html">
            <i class="fa fa-bar-chart"></i><span>รายงานสถติ</span>
            <span class="pull-right-container">
            </span>
            </a>
        </li>
       
        <li class="treeview">
            <li class="header" style="font-size: 15px;">Admin</li>
        </li>
       <li>
            <a href="admin_halal.html">
            <i class="fa fa-user-circle-o"></i><span>จัดการข้อมูลเจ้าหน้าที่</span>
            <span class="pull-right-container">
            </span>
            </a>
        </li>
      
        <li>
            <a href="index.html">
            <i class="fa fa-power-off"></i> <span>ออกจากระบบ</span>
            <span class="pull-right-container"></span>
            </a>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <b>ข้อมูลส่วนผสม</b>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('/admin_template1/') ?>#"><i class="fa fa-dashboard"></i>หน้าหลัก</a></li>
        <li class="active">ข้อมูลส่วนผสมทั้งหมด</li>
      </ol>
    </section>

    <!-- Main content -->
     <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title"><b>ข้อมูลส่วนผสม</b></h3>
              </div>
              <!-- /.box-header -->
              <br>
              <div class="box-body">
                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
                    <div class="box-tools pull-right">
                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group" role="group" aria-label="1 group">
                        </div>
                       
                        <div class="btn-group" role="group" aria-label="1 group">
                          <a href ="" id="" class="accident btn btn-sm btn-flat btn-success trash-multi" data-toggle="modal" data-target="#modal_add">
                          <i class="fa fa-plus"></i> เพิ่มส่วนผสม</a> 
                        </div>
                        <div class="modal fade" id="modal_add" role="dialog">
                            <div class="modal-dialog">
                              <!-- เนือหาของ Modal ทั้งหมด -->
                              <div class="modal-content">
                                <!-- ส่วนหัวของ Modal -->
                                <div class="modal-header">
                                  <!-- ปุ่มกดปิด (X) ตรงส่วนหัวของ Modal -->
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title"></h4>
                                  <div class="text-center">
                                  <!-- <img style="width: 85px;" src=""> -->
                                  <img src="<?php echo base_url('/admin_template1/') ?>pic/HALAL.png" style="width: 180px">
                                  </div>
                                </div>
                                <!-- ส่วนเนื้อหาของ Modal -->
                                <div class="modal-body">
                                  <div class="text-center">
                                    <h4><b><u>เพิ่มรายการส่วนผสม</u></b></h4>
                                  </div>
                                  <div class="content1"> 
                                    <div class="content1">
                                      <form  id="">
                                          
                                          <p>
                                            <b>รหัสส่วนผสม <font color="red">*</font></b>  
                                            <input type="text" class="th1 form-control" name="a_first_name" placeholder="รหัสส่วนผสม">
                                          </p> 
                                          <p>
                                            <b>ชื่อส่วนผสม <font color="red">*</font></b>  
                                            <input type="text" class="th1 form-control" name="a_surname" placeholder="ชื่อส่วนผสม">
                                          </p>
                                          <p>
                                            <b>ชื่อทางวิทยาศาสตร์ <font color="red">*</font></b>  
                                            <input type="text" class="th1 form-control" name="a_surname" placeholder="ชื่อทางวิทยาศาสตร์">
                                          </p>
                                           <p>
                                            <b>เลข E-Number <font color="red">*</font></b>  
                                            <input type="text" class="th1 form-control" name="a_surname" placeholder="เลข E-Number">
                                          </p>
                                          <p>
                                            <b>เลข H-Number <font color="red">*</font></b>  
                                            <input type="text" class="th1 form-control" name="a_surname" placeholder="เลข H-Number">
                                          </p>
                                         
                                          <p><b>สถานะ <font color="red">*</font></b>
                                             <select class="th1 form-control bg-light" id=""  name="a_cause">
                                              
                                              <option>ฮาลาล</option>
                                              <option>ฮารอม</option>
                                              <option>ชุบฮัต</option>
                                            
                                            </select>
                                          </p> 
                                          <p>
                                            <b>สามารถทดแทน <font color="red">*</font></b>  
                                            <input type="text" class="th1 form-control" name="a_rowsore" placeholder="สามารถทดแทน">
                                          </p> 
                                         <p><b>องค์กรที่ตรวจสอบ <font color="red">*</font></b>
                                             <select class="th1 form-control bg-light" id=""  name="a_cause">
                                            
                                              <option>สำนักงานจุฬา</option>
                                              <option>แลปมหาวิทยาลัยราชภัฏยะลา</option>
                                              <option>สำนักงานอิสลามแห่งประเทศไทย</option>
                                              
                                            </select>
                                          </p> 
                                          
                                          
                                        <div class="modal-footer">
                                        <!-- ปุ่มกดปิด (Close) ตรงส่วนล่างของ Modal -->
                                          <div class="text-center"> 
                                              <button type="submit" id="clossmodal" class="btn btn-succsess bt" style="background-color: #43AF52; ">ยืนยัน</button> 
                                              <a href ="#" data-dismiss="modal" class="btn btn-danger bt" style="background-color: red">ยกเลิก</a>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="btn-group" role="group" aria-label="3 group">
                            <a href ="" id="asd" name="btnDelete" class="btn btn-sm btn-flat btn-danger trash-multi bt1" data-toggle="modal" data-target="#modal_del">
                            <i class="fa fa-trash"></i> ย้ายลงถังขยะ</a>
                          <div class="modal fade" id="modal_del" role="dialog">
                            <div class="modal-dialog">
                              <!-- เนือหาของ Modal ทั้งหมด -->
                                <div class="modal-content">
                                  <!-- ส่วนหัวของ Modal -->
                                  <div class="modal-header">
                                    <!-- ปุ่มกดปิด (X) ตรงส่วนหัวของ Modal -->
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"></h4>
                                    <div class="text-center">
                                    <img  src="<?php echo base_url('/admin_template1/') ?>pic/LOGO.png" style="width: 85px;">
                                    </div>
                                  </div>
                                  <!-- ส่วนเนื้อหาของ Modal -->
                                  <div class="modal-body">
                                    <center>
                                      <p style="font-size: 17px;">กรุณาเลือกรายการที่ต้องการลบ</p>
                                    </center>
                                    <br>
                                    <div class="modal-footer"> 
                                      <button type="button" class="btn btn" data-dismiss="modal" style="background-color: red;color: white; float: right; ">ปิด</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                            <a href ="trash_ing.html" class="btn btn-sm btn-default btn-flat act-trash bt1"  title="ถังขยะ">
                              <i class="fa fa-recycle"></i> รายการถังขยะ</a>
                          </div>
                        </div>      
                      </div>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="css_tr_data">
                      <th>เลือก</th>
                      <th>รหัสส่วนผสม</th>
                      <th>รหัสส่วนผสมหลัก</th>
                      <th>ชื่อส่วนผสม</th>
                      <th>ชื่อทางวิทยาศาสตร์</th>
                      <th>สถานะ</th>
                      <th>สามารถทดแทน</th>
                      <th>ตรวจสอบจาก</th>
                      <th>แก้ไข</th>
                      <th>ย้ายลงถังขยะ</th>
                    </tr>
                  </thead>
                  <tbody id="div1231">
                      <?php foreach ($ingredient as $rw) { ?>
                        <tr class="css_tr_data" id="">
                            <td>
                              <input name="checkdel[]" type="checkbox" class="css_data_item" id="" value="">
                            </td>
                            <td><?php echo $rw->i_id; ?></td>
                            <td><?php echo $rw->i_ingredients_id; ?></td>
                            <td><?php echo $rw->i_name; ?></td>
                            <td><?php echo $rw->i_name_sci; ?></td>
                            <td><?php echo $rw->s_status; ?></td>
                            <td><?php echo $rw->i_replace; ?></td>
                            <td><?php echo $rw->inves_inspector; ?></td>
                            <!-- <td>
                                <a id="" class="update_status btn btn-sm btn-success btn-flat box-add" data-toggle="modal" data-target="#modal_memorial">
                                ใช้งานได้ปกติ</a>
                            </td> -->
                            <td>
                              <a href ="" class="btn btn-sm btn-flat btn-success trash-multi"  title="แก้ไข" data-toggle="modal" data-target="#modal_edit">
                              <i class="fa fa-wrench"></i> แก้ไข</a> 
                               <div class="modal fade" id="modal_edit" role="dialog">
                                  <div class="modal-dialog">
                                    <!-- เนือหาของ Modal ทั้งหมด -->
                                    <div class="modal-content">
                                      <!-- ส่วนหัวของ Modal -->
                                      <div class="modal-header">
                                        <!-- ปุ่มกดปิด (X) ตรงส่วนหัวของ Modal -->
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"></h4>
                                        <div class="text-center">
                                        <img style="width: 85px;" src="">
                                        </div>
                                      </div>
                                      <!-- ส่วนเนื้อหาของ Modal -->
                                      <div class="modal-body">
                                        <div class="text-center">
                                          <h4><b><u>แก้ไขรายการส่วนผสม</u></b></h4>
                                        </div>
                                        <div class="content1"> 
                                          <div class="content1">
                                            <form  id="insert_accident">
                                                
                                                <p>
                                                  <b>รหัสส่วนผสม <font color="red">*</font></b>  
                                                  <input type="text" class="th1 form-control" name="a_first_name" placeholder="รหัสส่วนผสม">
                                                </p> 
                                                <p>
                                                  <b>ชื่อส่วนผสม <font color="red">*</font></b>  
                                                  <input type="text" class="th1 form-control" name="a_surname" placeholder="ชื่อส่วนผสม">
                                                </p>
                                                <p>
                                                  <b>ชื่อทางวิทยาศาสตร์ <font color="red">*</font></b>  
                                                  <input type="text" class="th1 form-control" name="a_surname" placeholder="ชื่อทางวิทยาศาสตร์">
                                                </p>
                                                 <p>
                                                  <b>เลข E-Number <font color="red">*</font></b>  
                                                  <input type="text" class="th1 form-control" name="a_surname" placeholder="เลข E-Number">
                                                </p>
                                                <p>
                                                  <b>เลข H-Number <font color="red">*</font></b>  
                                                  <input type="text" class="th1 form-control" name="a_surname" placeholder="เลข H-Number">
                                                </p>
                                               
                                                <p><b>สถานะ <font color="red">*</font></b>
                                                   <select class="th1 form-control bg-light" id=""  name="a_cause">
                                                    
                                                    <option>ฮาลาล</option>
                                                    <option>ฮารอม</option>
                                                    <option>ชุบฮัต</option>
                                                  
                                                  </select>
                                                </p> 
                                                <p>
                                                  <b>สามารถทดแทน <font color="red">*</font></b>  
                                                  <input type="text" class="th1 form-control" name="a_rowsore" placeholder="สามารถทดแทน">
                                                </p> 
                                               <p><b>องค์กรที่ตรวจสอบ <font color="red">*</font></b>
                                                   <select class="th1 form-control bg-light" id=""  name="a_cause">
                                                  
                                                    <option>สำนักงานจุฬา</option>
                                                    <option>แลปมหาวิทยาลัยราชภัฏยะลา</option>
                                                    <option>สำนักงานอิสลามแห่งประเทศไทย</option>
                                                    
                                                  </select>
                                                </p> 
                                                
                                                
                                              <div class="modal-footer">
                                              <!-- ปุ่มกดปิด (Close) ตรงส่วนล่างของ Modal -->
                                                <div class="text-center"> 
                                                    <button type="submit" id="clossmodal" class="btn btn-sucsess" style="background-color: #43AF52">ยืนยัน</button> 
                                                    <a href ="#" data-dismiss="modal" class="btn btn-danger" style="background-color: red">ยกเลิก</a>
                                                </div>
                                              </div>
                                            </form>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                            </td> 
                            <td>
                              <a id="" class="del_admin btn btn-sm btn-flat btn-danger trash-multi"  title="ย้ายลงถังขยะ">
                              <i class="fa fa-trash"></i> ย้ายลงถังขยะ</a> 
                            </td>
                        </tr>
                      <?php } ?>
                  </tbody>    
                </table>

              </div>
            </div>
          </div>
        <!-- </div> -->
      </section>
      <!-- </div> -->
      <!-- /.row (main row) -->
    <!-- </section> -->
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

<!-- jQuery 3 -->
<script src="<?php echo base_url('/admin_template1/') ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('/admin_template1/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('/admin_template1/') ?>bower_components/chart.js/Chart.js"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

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
