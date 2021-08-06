<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <b>รายการถังขยะ</b>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
        <li class="active">รายการถังขยะ</li>
      </ol>
    </section>

    <form  id="form_delet_all" class="" action="#" method="post">
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title"><b>รายการถังขยะ</b></h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
                    <div class="box-tools pull-right">
                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group" role="group" aria-label="1 group">
                          <!-- <a href ="" class="btn btn-sm btn-success btn-flat box-add" title="เพิ่มส่วนผสม" data-toggle="modal" 
                            data-target="#ingredient_insert">
                            <i class="fa fa-plus"></i> เพิ่มส่วนผสม
                          </a> -->
                          <a class="product_recover_all btn btn-sm btn-success btn-flat box-add" title=" กู้คืน">
                            <i class="fa fa-plus"></i>  กู้คืนข้อมูลที่เลือก
                          </a>
                        </div>
                        <div class="btn-group" role="group" aria-label="2 group">
                          <a class="product_delet_all btn btn-sm btn-flat btn-danger trash-multi bt1">
                              <i class="fa fa-trash"></i> ลบข้อมูลที่เลือก</a>
                        </div>
                        <div class="btn-group" role="group" aria-label="3 group">
                          <a class="product_master_delet_all btn btn-sm btn-flat btn-danger trash-multi bt1">
                              <i class="fa fa-trash"></i> ลบทั่งหมด</a>
                          <a href ="<?php echo site_url('/Backend_control/product') ?>" class="btn btn-sm btn-default btn-flat act-trash"  title="รายการถังขยะ">
                            <i class="fa fa-bars"></i> รายการผลิตภัณฑ์
                          </a>
                        </div>
                      </div>
                      
                    </div>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="css_tr_data">
                      <th  width='5'>เลือก</th>
                        <!-- <th width='20%'>รหัสส่วนผสม</th> -->
                        <th width='5'>รหัส</th>
                        <th width="">รหัสผลิตภัณฑ์</th>
                        <th width=''>ชื่อผลิตภัณฑ์</th>
                        <th width=''>ยี่ห้อ</th>
                        <th width=''>บาร์โค้ด</th>
                        <th width=''>รสชาติ</th>
                        <th width=''>สถานะ</th>
                        <th width=''>ตรวจสอบโดย</th>
                        <th width='10'>กู้คืน</th>
                        <th width='10'>ลบถาวร</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($product_bin1 as $rw) { ?>
                      <tr class="css_tr_data">
                        <td>
                          <center>
                            <input name="checkdel[]" type="checkbox" class="css_data_item" id="<?php echo $rw->p_id; ?>" value="<?php echo $rw->p_id; ?>">
                          </center>
                        </td>
                        <td><?php echo $rw->p_id; ?></td>
                        <td><?php echo $rw->p_idproduct; ?></td>
                        <td><?php echo $rw->p_name; ?></td>
                        <td><?php echo $rw->p_brand; ?></td>
                        <td><?php echo $rw->p_barcode; ?></td>
                        <td><?php echo $rw->p_taste; ?></td>
                        <td><?php echo $rw->s_status; ?></td>
                        <td><?php echo $rw->inves_inspector; ?></td>
                        <td>
                          <a href ="" id="<?php echo $rw->p_id; ?>" class="product_recover btn btn-sm btn-flat btn-success trash-multi"  title="กู้คืน">
                          <i class="fa fa-wrench"></i> กู้คืน</a> 
                        </td> 
                        <td>
                          <a id="<?php echo $rw->p_id; ?>" class="product_delet btn btn-sm btn-flat btn-danger trash-multi"  title="ลบถาร">
                          <i class="fa fa-trash"></i> ลบถาร</a> 
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>    
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
    </form>
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
<script src="<?php echo base_url('/admin_template1/') ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('/admin_template1/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url('/admin_template1/') ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('/admin_template1/') ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('/admin_template1/') ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('/admin_template1/') ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('/admin_template1/') ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('/admin_template1/') ?>dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>

<script type="text/javascript">  
$(function(){        
 
    var highlight_bgColor="#C0C1BC";     // กำหนดสี highlight ที่ต้องการ
    $("#css_all_check").click(function(){ // เมื่อคลิกที่ checkbox ตัวควบคุม  
        if($(this).prop("checked")){ // ตรวจสอบค่า ว่ามีการคลิกเลือก  
            $(".css_data_item").prop("checked",true); // กำหนดให้ เลือก checkbox ที่ต้องการ ที่มี class ตามกำหนด   
            $(".css_tr_data").css("background-color",highlight_bgColor); // กำหนดสีพื้นหลังของแถวที่เลือก
        }else{ // ถ้าไม่มีการ ยกเลิกการเลือก  
            $(".css_data_item").prop("checked",false); // กำหนดให้ ยกเลิกการเลือก checkbox ที่ต้องการ ที่มี class ตามกำหนด              
            $(".css_tr_data").each(function(k_data,v_data){ // วนหลูปแถวที่มี class ชื่อ css_tr_data
                var old_bgColor=$(this).attr("bgcolor");        // เรียกสีพื้นหลังเดิมมาเก็บไว้ในตัวแปร         
                old_bgColor=(old_bgColor!=undefined)?old_bgColor:"";    // กำหนดค่าสีพื้นหลังเดิม กรณีไม่มี หรือมีค่า       
                $(this).css("background-color",old_bgColor); // ยกเลือกสีพื้นหลัง หรือกำหนดเป็นค่าเดิม
            });             
        }  
    });       
    $(".css_data_item").click(function(){  // เมื่อคลิก checkbox  ใดๆ       
        var parentTR=$(this).parents(".css_tr_data");  // หาแถวที่ checkbox นั้นๆที่คลิก อยู่ด้านใน
        var old_bgColor=parentTR.attr("bgcolor"); // เรียกสีพื้นหลังเดิมมาเก็บไว้ในตัวแปร
        old_bgColor=(old_bgColor!=undefined)?old_bgColor:""; // กำหนดค่าสีพื้นหลังเดิม กรณีไม่มี หรือมีค่า
        if($(this).prop("checked")){
            parentTR.css("background-color",highlight_bgColor); // กำหนดสีพื้นหลังของแถวที่เลือกทั้งหมด
        }else{
            parentTR.css("background-color",old_bgColor); // ยกเลือกสีพื้นหลัง หรือกำหนดเป็นค่าเดิม
        }
    });  
 
    $("#form_checkbox1").submit(function(){ // เมื่อมีการส่งข้อมูลฟอร์ม  
        if($(".css_data_item:checked").length==0){ // ถ้าไม่มีการเลือก checkbox ใดๆ เลย  
            alert("NO");  
            return false;     
        }  
    });     
   
});  
</script>
</body>
</html>
<script type="text/javascript">
  $(document).ready(function() {
        $(document).on('click','.product_recover',function(evan) {
          evan.preventDefault();
          // alert ($(this).attr('id'));
          var id = $(this).attr('id');
           $.ajax({
                method: "POST",
                url: "<?php echo site_url('Backend_control/product_recover') ?>",
                dataType: 'json',
                data: {id:id},
                success: function($result) {
                        console.log($result);
                          let html = "";
                              $.each($result, function(i, v){
                                html += '<tr class="css_tr_data" id="'+ v["p_id"] +'">'
                                  + '<td>'
                                    + '<input name="checkdel[]" type="checkbox" class="css_data_item" id="'+ v["p_id"] +'" value="'+ v["p_id"] +'">' 
                                  + '</td>'
                                  + '<td>'+ v["p_id"] +'</td>'
                                  + '<td>'+ v["p_idproduct"] +'</td>'
                                  + '<td>'+ v["p_name"] +'</td>'
                                  + '<td>'+ v["p_brand"] +'</td>'
                                  + '<td>'+ v["p_barcode"] +'</td>'
                                  + '<td>'+ v["p_taste"] +'</td>'
                                  + '<td>'+ v["s_status"] +'</td>'
                                  + '<td>'+ v["inves_inspector"] +'</td>'
                                  + '<td>'
                                    + '<a href ="" id="'+ v["p_id"] +'" class="product_recover btn btn-sm btn-flat btn-success trash-multi"  title="กู้คืน">'
                                    + '<i class="fa fa-wrench"></i> กู้คืน</a> '
                                  + '</td>'
                                  + '<td>'
                                    + '<a id="'+ v["p_id"] +'" class="product_delet btn btn-sm btn-flat btn-danger trash-multi"  title="ลบถาร">'
                                    + '<i class="fa fa-trash"></i> ลบถาร</a> '
                                  + '</td>'
                                + '</tr>';

                                console.log(i, v);
                              });

                              // $('#modal_accident_accident').modal('toggle');
                              $('#myModal_success').modal('show');
                              $('.table tbody').empty();
                              $('.table tbody').append(html);
                    }
             });
        })
    });
</script>

<script type="text/javascript">
  $(document).ready(function() {
        $(document).on('click','.product_delet',function(evan) {
          evan.preventDefault();
          // alert ($(this).attr('id'));
          var id = $(this).attr('id');
           $.ajax({
                method: "POST",
                url: "<?php echo site_url('Backend_control/product_delet') ?>",
                dataType: 'json',
                data: {id:id},
                success: function($result) {
                        console.log($result);
                          let html = "";
                              $.each($result, function(i, v){
                                html += '<tr class="css_tr_data" id="'+ v["p_id"] +'">'
                                  + '<td>'
                                    + '<input name="checkdel[]" type="checkbox" class="css_data_item" id="'+ v["p_id"] +'" value="'+ v["p_id"] +'">' 
                                  + '</td>'
                                  + '<td>'+ v["p_id"] +'</td>'
                                  + '<td>'+ v["p_idproduct"] +'</td>'
                                  + '<td>'+ v["p_name"] +'</td>'
                                  + '<td>'+ v["p_brand"] +'</td>'
                                  + '<td>'+ v["p_barcode"] +'</td>'
                                  + '<td>'+ v["p_taste"] +'</td>'
                                  + '<td>'+ v["s_status"] +'</td>'
                                  + '<td>'+ v["inves_inspector"] +'</td>'
                                  + '<td>'
                                    + '<a href ="" id="'+ v["p_id"] +'" class="product_recover btn btn-sm btn-flat btn-success trash-multi"  title="กู้คืน">'
                                    + '<i class="fa fa-wrench"></i> กู้คืน</a> '
                                  + '</td>'
                                  + '<td>'
                                    + '<a id="'+ v["p_id"] +'" class="product_delet btn btn-sm btn-flat btn-danger trash-multi"  title="ลบถาร">'
                                    + '<i class="fa fa-trash"></i> ลบถาร</a> '
                                  + '</td>'
                                + '</tr>';

                                console.log(i, v);
                              });

                              // $('#modal_accident_accident').modal('toggle');
                              $('#myModal_success').modal('show');
                              $('.table tbody').empty();
                              $('.table tbody').append(html);
                    }
             });
        })
    });
</script>

<script type="text/javascript">
  $(document).ready(function() {
        $(document).on('click','.product_delet_all',function(evan) {
          evan.preventDefault();
          // alert ($(this).attr('id'));
          var id = $(this).attr('id');
           $.ajax({
                method: "POST",
                url: "<?php echo site_url('Backend_control/product_delet_all') ?>",
                dataType: 'json',
                data: $("#form_delet_all").serialize(),
                success: function($result) {
                    console.log($result);
                    let html = "";
                      $.each($result, function(i, v){
                                html += '<tr class="css_tr_data" id="'+ v["p_id"] +'">'
                                  + '<td>'
                                    + '<input name="checkdel[]" type="checkbox" class="css_data_item" id="'+ v["p_id"] +'" value="'+ v["p_id"] +'">' 
                                  + '</td>'
                                  + '<td>'+ v["p_id"] +'</td>'
                                  + '<td>'+ v["p_idproduct"] +'</td>'
                                  + '<td>'+ v["p_name"] +'</td>'
                                  + '<td>'+ v["p_brand"] +'</td>'
                                  + '<td>'+ v["p_barcode"] +'</td>'
                                  + '<td>'+ v["p_taste"] +'</td>'
                                  + '<td>'+ v["s_status"] +'</td>'
                                  + '<td>'+ v["inves_inspector"] +'</td>'
                                  + '<td>'
                                    + '<a href ="" id="'+ v["p_id"] +'" class="product_recover btn btn-sm btn-flat btn-success trash-multi"  title="กู้คืน">'
                                    + '<i class="fa fa-wrench"></i> กู้คืน</a> '
                                  + '</td>'
                                  + '<td>'
                                    + '<a id="'+ v["p_id"] +'" class="product_delet btn btn-sm btn-flat btn-danger trash-multi"  title="ลบถาร">'
                                    + '<i class="fa fa-trash"></i> ลบถาร</a> '
                                  + '</td>'
                                + '</tr>';

                                console.log(i, v);
                              });


                    $('#myModal_success').modal('show');
                    $('.table tbody').empty();
                    $('.table tbody').append(html);
                }
             });
        })
    });
</script>

<script type="text/javascript">
  $(document).ready(function() {
        $(document).on('click','.product_recover_all',function(evan) {
          evan.preventDefault();
          // alert ($(this).attr('id'));
          var id = $(this).attr('id');
           $.ajax({
                method: "POST",
                url: "<?php echo site_url('Backend_control/product_recover_all') ?>",
                dataType: 'json',
                data: $("#form_delet_all").serialize(),
                success: function($result) {
                    console.log($result);
                    let html = "";
                      $.each($result, function(i, v){
                                html += '<tr class="css_tr_data" id="'+ v["p_id"] +'">'
                                  + '<td>'
                                    + '<input name="checkdel[]" type="checkbox" class="css_data_item" id="'+ v["p_id"] +'" value="'+ v["p_id"] +'">' 
                                  + '</td>'
                                  + '<td>'+ v["p_id"] +'</td>'
                                  + '<td>'+ v["p_idproduct"] +'</td>'
                                  + '<td>'+ v["p_name"] +'</td>'
                                  + '<td>'+ v["p_brand"] +'</td>'
                                  + '<td>'+ v["p_barcode"] +'</td>'
                                  + '<td>'+ v["p_taste"] +'</td>'
                                  + '<td>'+ v["s_status"] +'</td>'
                                  + '<td>'+ v["inves_inspector"] +'</td>'
                                  + '<td>'
                                    + '<a href ="" id="'+ v["p_id"] +'" class="product_recover btn btn-sm btn-flat btn-success trash-multi"  title="กู้คืน">'
                                    + '<i class="fa fa-wrench"></i> กู้คืน</a> '
                                  + '</td>'
                                  + '<td>'
                                    + '<a id="'+ v["p_id"] +'" class="product_delet btn btn-sm btn-flat btn-danger trash-multi"  title="ลบถาร">'
                                    + '<i class="fa fa-trash"></i> ลบถาร</a> '
                                  + '</td>'
                                + '</tr>';

                                console.log(i, v);
                              });


                    $('#myModal_success').modal('show');
                    $('.table tbody').empty();
                    $('.table tbody').append(html);
                }
             });
        })
    });
</script>

<script type="text/javascript">
  $(document).ready(function() {
        $(document).on('click','.product_master_delet_all',function(evan) {
          evan.preventDefault();
          // alert ($(this).attr('id'));
          var id = $(this).attr('id');
           $.ajax({
                method: "POST",
                url: "<?php echo site_url('Backend_control/product_master_delet_all') ?>",
                dataType: 'json',
                data: $("#form_delet_all").serialize(),
                success: function($result) {
                    console.log($result);
                    let html = "";
                      $.each($result, function(i, v){
                                html += '<tr class="css_tr_data" id="'+ v["p_id"] +'">'
                                  + '<td>'
                                    + '<input name="checkdel[]" type="checkbox" class="css_data_item" id="'+ v["p_id"] +'" value="'+ v["p_id"] +'">' 
                                  + '</td>'
                                  + '<td>'+ v["p_id"] +'</td>'
                                  + '<td>'+ v["p_idproduct"] +'</td>'
                                  + '<td>'+ v["p_name"] +'</td>'
                                  + '<td>'+ v["p_brand"] +'</td>'
                                  + '<td>'+ v["p_barcode"] +'</td>'
                                  + '<td>'+ v["p_taste"] +'</td>'
                                  + '<td>'+ v["s_status"] +'</td>'
                                  + '<td>'+ v["inves_inspector"] +'</td>'
                                  + '<td>'
                                    + '<a href ="" id="'+ v["p_id"] +'" class="product_recover btn btn-sm btn-flat btn-success trash-multi"  title="กู้คืน">'
                                    + '<i class="fa fa-wrench"></i> กู้คืน</a> '
                                  + '</td>'
                                  + '<td>'
                                    + '<a id="'+ v["p_id"] +'" class="product_delet btn btn-sm btn-flat btn-danger trash-multi"  title="ลบถาร">'
                                    + '<i class="fa fa-trash"></i> ลบถาร</a> '
                                  + '</td>'
                                + '</tr>';

                                console.log(i, v);
                              });


                    $('#myModal_success').modal('show');
                    $('.table tbody').empty();
                    $('.table tbody').append(html);
                }
             });
        })
    });
</script>



