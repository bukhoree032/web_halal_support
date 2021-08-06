<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <b>ข้อมูลสถานะ</b>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
        <li class="active">สถานะทั้งหมด</li>
      </ol>
    </section>

    <form  id="form_delet_all" class="" action="#" method="post">
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title"><b>ข้อมูลสถานะ</b></h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
                    <div class="box-tools pull-right">
                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group" role="group" aria-label="1 group">
                          <a href ="" class="btn btn-sm btn-success btn-flat box-add" title="เพิ่มส่วนผสม" data-toggle="modal" 
                            data-target="#status_insert">
                            <i class="fa fa-plus"></i> เพิ่มสถานะ
                          </a>
                        </div>
                        <div class="btn-group" role="group" aria-label="2 group">
                          <a class="status_delet_all btn btn-sm btn-flat btn-danger trash-multi bt1">
                              <i class="fa fa-trash"></i> ลบสถานะที่เลือก</a>
                          <!-- <a href ="<?php echo site_url('/Backend_control/ingredient_bin1') ?>" class="btn btn-sm btn-default btn-flat act-trash"  title="รายการถังขยะ">
                            <i class="fa fa-bars"></i> รายการถังขยะ
                          </a> -->
                        </div>
                      </div>
                      
                    </div>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="css_tr_data">
                        <th width='5%'>เลือก</th>
                        <!-- <th width='20%'>รหัสส่วนผสม</th> -->
                        <th width='8%'>รหัสสถานะ</th>
                        <th width='30%'>ชื่อสถานะ</th>
                        <th width='30%'>ชื่อสถานะ(ภาษาอังกฤษ)</th>
                        <th width='10%'>แก้ไข</th>
                        <th width='10%'>ลบสถานะ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($status as $rw) { ?>
                      <tr class="css_tr_data">
                        <td>
                          <input name="checkdel[]" type="checkbox" class="css_data_item" id="<?php echo $rw->s_id; ?>" value="<?php echo $rw->s_id; ?>">
                        </td>
                        <td><?php echo $rw->s_id; ?></td>
                        <td><?php echo $rw->s_status; ?></td>
                        <td><?php echo $rw->s_status_eng; ?></td>
                        <td>
                          <a id="<?php echo $rw->s_id; ?>" class="status_edit btn btn-sm btn-flat btn-success trash-multi" title="แก้ไข" data-toggle="modal" data-target="#status_edit">
                            <i class="fa fa-wrench"></i> แก้ไข</a> 
                        </td>
                        <td>
                          <a id="<?php echo $rw->s_id; ?>" class="status_delet btn btn-sm btn-flat btn-danger trash-multi"  title="ลบสถานะ">
                          <i class="fa fa-trash"></i> ลบสถานะ</a> 
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
        $(document).on('click','.status_edit',function(evan) {
          evan.preventDefault();
          // alert ($(this).attr('id'));
          var id = $(this).attr('id');
           $.ajax({
                method: "POST",
                url: "<?php echo site_url('Backend_control/status_edit') ?>",
                dataType: 'json',
                data: {id:id},              
                success: function($result) {
                    console.log($result);
                    let html = "";
                        $.each($result, function(i, v){
                          html += '<div class="content1"> '
                                    + '<p>'
                                      // + '<b>รหัส <font color="red">*</font></b>  '
                                      + '<input type="hidden" class="form-control" name="id" placeholder="รหัสส่วนผสม" value="'+ v["s_id"] +'">'
                                    + '</p> '
                                    + '<p>'
                                      + '<b>ชื่อสถานะ <font color="red">*</font></b>  '
                                      + '<input type="text" class="th2 form-control" name="s_name" placeholder="ชื่อสถานะ" value="'+ v["s_status"] +'">'
                                    + '</p> '
                                    + '<p>'
                                      + '<b>ชื่อสถานะ(ภาษาอังกฤษ) <font color="red">*</font></b>  '
                                      + '<input type="text" class="th2 form-control" name="s_name_eng" placeholder="ชื่อสถานะ(ภาษาอังกฤษ)" value="'+ v["s_status_eng"] +'">'
                                    + '</p>'
                                    + '<div class="modal-footer">'
                                      + '<div class="text-center"> '
                                          + '<button type="submit" id="clossmodal" class="bt11" style="background-color: #43AF52">ยืนยัน</button> '
                                          + '<button href ="#" data-dismiss="modal" class="bt21" style="background-color: red">ยกเลิก</button>'
                                      + '</div>'
                                    + '</div>';
                        });

                        // $('#modal_accident').modal('toggle');
                        // $('#myModal_confirm').modal('show');
                        $('.edit_status').empty();
                        $('.edit_status').append(html);
                }
             });
        })
    });
</script>

<script type="text/javascript">
  $(document).ready(function() {
      //เรียกใช้ evnet submit
      $("#form_status").submit(function(evan) {
      evan.preventDefault();
          $(".th2 + span.require").remove();
          // $("#other_accident + span.require").remove();
          $(".th2").each(function(){
              //ดึงnameจากform
              var name = $(this).attr("name")
              var val = $(this).val()
               //เช็คค่าว่าง
               if (val=="") {
                   $(this).after("<span class='require'style ='color:red'>*จำเป็นต้องกรอก</span>")
               }
            });
            if($(".th2").next().is(".require")==false){

                // alert ("ok");
                 $.ajax({
                    method: "POST",
                    url: "<?php echo site_url('Backend_control/status_update') ?>",
                    dataType: 'json',
                    data: $("#form_status").serialize(),                
                success: function($result) {
                    console.log($result);
                    let html = "";
                    $.each($result, function(i, v){
                      // html += v["m_id"] ;
                      html += '<tr class="css_tr_data" id="'+ v["s_id"] +'">'
                                  + '<td>'
                                    + '<input name="checkdel[]" type="checkbox" class="css_data_item" id="'+ v["s_id"] +'" value="'+ v["s_id"] +'">' 
                                  + '</td>'
                                  + '<td>'+ v["s_id"] +'</td>'
                                  + '<td>'+ v["s_status"] +'</td>'
                                  + '<td>'+ v["s_status_eng"] +'</td>'
                                  + '<td>'
                                    + '<a id="'+ v["s_id"] +'" class="status_edit btn btn-sm btn-flat btn-success trash-multi" title="แก้ไข" data-toggle="modal" data-target="#status_edit">'
                                      + '<i class="fa fa-wrench"></i> แก้ไข</a> '
                                  + '</td>'
                                  + '<td>'
                                    + '<a id="'+ v["s_id"] +'" class="status_delet btn btn-sm btn-flat btn-danger trash-multi"  title="ลบสถานะ">'
                                    + '<i class="fa fa-trash"></i> ลบสถานะ</a> '
                                  + '</td>'
                                + '</tr>';

                                console.log(i, v);
                              });

                    $('#status_edit').modal('toggle');
                    $('#myModal_success').modal('show');
                    $('.table tbody').empty();
                    $('.table tbody').append(html);
                    
                    }
                  });
            }else{
                // alert ("asd");
                return false;  
            }
      });
    });
</script>

<script type="text/javascript">
  $(document).ready(function() {
      //เรียกใช้ evnet submit
      $("#form_status_insert").submit(function(evan) {
      evan.preventDefault();
          $(".th1 + span.require").remove();
          // $("#other_accident + span.require").remove();
          $(".th1").each(function(){
              //ดึงnameจากform
              var name = $(this).attr("name")
              var val = $(this).val()
               //เช็คค่าว่าง
               if (val=="") {
                   $(this).after("<span class='require'style ='color:red'>*จำเป็นต้องกรอก</span>")
               }
            });
            if($(".th1").next().is(".require")==false){
                 $.ajax({
                    method: "POST",
                    url: "<?php echo site_url('Backend_control/status_insert') ?>",
                    dataType: 'json',
                    data: $("#form_status_insert").serialize(),
                    success: function($result) {
                        console.log($result);
                          let html = "";
                              $.each($result, function(i, v){
                                html += '<tr class="css_tr_data" id="'+ v["s_id"] +'">'
                                  + '<td>'
                                    + '<input name="checkdel[]" type="checkbox" class="css_data_item" id="'+ v["s_id"] +'" value="'+ v["s_id"] +'">' 
                                  + '</td>'
                                  + '<td>'+ v["s_id"] +'</td>'
                                  + '<td>'+ v["s_status"] +'</td>'
                                  + '<td>'+ v["s_status_eng"] +'</td>'
                                  + '<td>'
                                    + '<a id="'+ v["s_id"] +'" class="status_edit btn btn-sm btn-flat btn-success trash-multi" title="แก้ไข" data-toggle="modal" data-target="#status_edit">'
                                      + '<i class="fa fa-wrench"></i> แก้ไข</a> '
                                  + '</td>'
                                  + '<td>'
                                    + '<a id="'+ v["s_id"] +'" class="status_delet btn btn-sm btn-flat btn-danger trash-multi"  title="ลบสถานะ">'
                                    + '<i class="fa fa-trash"></i> ลบสถานะ</a> '
                                  + '</td>'
                                + '</tr>';

                                console.log(i, v);
                              });

                              $('#status_insert').modal('toggle');
                              $('#myModal_success').modal('show');
                              $('.table tbody').empty();
                              $('.table tbody').append(html);
                        //   }
                    }
                  });
            }else{
                return false;  
            }
      });
    });
</script>

<script type="text/javascript">
  $(document).ready(function() {
        $(document).on('click','.status_delet',function(evan) {
          evan.preventDefault();
          // alert ($(this).attr('id'));
          var id = $(this).attr('id');
            $.ajax({
                method: "POST",
                url: "<?php echo site_url('Backend_control/status_delet') ?>",
                dataType: 'json',
                data: {id:id},
                success: function($result) {
                        console.log($result);
                          let html = "";
                              $.each($result, function(i, v){
                                html += '<tr class="css_tr_data" id="'+ v["s_id"] +'">'
                                  + '<td>'
                                    + '<input name="checkdel[]" type="checkbox" class="css_data_item" id="'+ v["s_id"] +'" value="'+ v["s_id"] +'">' 
                                  + '</td>'
                                  + '<td>'+ v["s_id"] +'</td>'
                                  + '<td>'+ v["s_status"] +'</td>'
                                  + '<td>'+ v["s_status_eng"] +'</td>'
                                  + '<td>'
                                    + '<a id="'+ v["s_id"] +'" class="status_edit btn btn-sm btn-flat btn-success trash-multi" title="แก้ไข" data-toggle="modal" data-target="#status_edit">'
                                      + '<i class="fa fa-wrench"></i> แก้ไข</a> '
                                  + '</td>'
                                  + '<td>'
                                    + '<a id="'+ v["s_id"] +'" class="status_delet btn btn-sm btn-flat btn-danger trash-multi"  title="ลบสถานะ">'
                                    + '<i class="fa fa-trash"></i> ลบสถานะ</a> '
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
        $(document).on('click','.status_delet_all',function(evan) {
          evan.preventDefault();
          // alert ($(this).attr('id'));
          var id = $(this).attr('id');
           $.ajax({
                method: "POST",
                url: "<?php echo site_url('Backend_control/status_delet_all') ?>",
                dataType: 'json',
                data: $("#form_delet_all").serialize(),
                success: function($result) {
                    console.log($result);
                    let html = "";
                    $.each($result, function(i, v){
                                html += '<tr class="css_tr_data" id="'+ v["s_id"] +'">'
                                  + '<td>'
                                    + '<input name="checkdel[]" type="checkbox" class="css_data_item" id="'+ v["s_id"] +'" value="'+ v["s_id"] +'">' 
                                  + '</td>'
                                  + '<td>'+ v["s_id"] +'</td>'
                                  + '<td>'+ v["s_status"] +'</td>'
                                  + '<td>'+ v["s_status_eng"] +'</td>'
                                  + '<td>'
                                    + '<a id="'+ v["s_id"] +'" class="status_edit btn btn-sm btn-flat btn-success trash-multi" title="แก้ไข" data-toggle="modal" data-target="#status_edit">'
                                      + '<i class="fa fa-wrench"></i> แก้ไข</a> '
                                  + '</td>'
                                  + '<td>'
                                    + '<a id="'+ v["s_id"] +'" class="status_delet btn btn-sm btn-flat btn-danger trash-multi"  title="ลบสถานะ">'
                                    + '<i class="fa fa-trash"></i> ลบสถานะ</a> '
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



