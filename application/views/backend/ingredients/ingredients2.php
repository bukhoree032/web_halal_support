<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <b>ข้อมูลส่วนผสม</b>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
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
            <div class="box-body">
              <div class="box-header with-border">
                <h3 class="box-title"></h3>
                  <div class="box-tools pull-right">
                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                      <div class="btn-group" role="group" aria-label="1 group">
                        <a href ="" class="btn btn-sm btn-success btn-flat box-add" title="แจ้งอุบัติเหตุ" data-toggle="modal" 
                          data-target="#modal_accident_accident">
                          <i class="fa fa-plus"></i> เพิ่มข้อมูลส่วนผสม
                        </a>
                        <a href ="<?php echo site_url('/Admin_control/form_accident') ?>" class="btn btn-sm btn-default btn-flat act-trash"  title="รายการอุบัติเหตุ">
                          <i class="fa fa-bars"></i> รายการถังขยะ
                        </a>
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
                <tbody>
                  <?php foreach ($ingredient as $rw) { ?>
                    <tr class="css_tr_data">
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
                      <!-- <td>
                        <a href ="" class="btn btn-sm btn-flat btn-success trash-multi"  title="แก้ไข" data-toggle="modal" data-target="#modal_edit">
                        <i class="fa fa-wrench"></i> แก้ไข</a> 
                      </td> -->
                      <td>
                        <a id="<?php echo $rw->i_id; ?>" class="ingredient_edit btn btn-sm btn-flat btn-success trash-multi" title="แก้ไข" data-toggle="modal" data-target="#ingredient_edit">
                          <i class="fa fa-wrench"></i> แก้ไข</a> 
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
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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
        $(document).on('click','.ingredient_edit',function(evan) {
          evan.preventDefault();
          // alert ($(this).attr('id'));
          var id = $(this).attr('id');
           $.ajax({
                method: "POST",
                url: "<?php echo site_url('Backend_control/ingredient_edit') ?>",
                dataType: 'json',
                data: {id:id},
                success: function($result) {
                    console.log($result);
                  //   console.log($result['0']);
                    
                  //   let html = "";
                  //   let html1 = "";
                  //   $.each($result['0'], function(i, v){
                  //   //   // html += v["m_id"] ;
                  //   html += '<div class="content1"> '
                  //         + '<p><b><u>รายละเอียดผู้แจ้ง</u></b></p>'
                  //         + '<p><b>ชื่อ - สกุล :</b> '+ v["m_title"] +''+ v["m_first_name"] +' '+ v["m_surname"] +'</p> ';
                  //         $.each($result['2'], function(i, v_pro_acc){
                  //           html += '<p><b>ลงทะเบัยนร่วมกิจกรรมจังหวัด :</b> '+ v_pro_acc["province_th"] +'</p> ';
                  //         });
                  //         html += '<p><b>ประเทศ :</b> '+ v["m_country"] +'</p>'
                  //         + '<p><b>เลขบัตรประชาชน : </b>'+ v["m_passport_no"] +'</p>'
                  //         + '<p><b>รหัสร่วมกิจกรรม : </b> <input type"text" name="id_activ" class="txtbox" value="'+ v["m_id_activities"] +'" readonly/ > </p>' 
                  //         + '<p><b>เพศ : </b>'+ v["m_sex"] +'</p>'
                  //         + '<p><b>รหัสอุบัติเหตุ : </b> <input type"text" name="a_id" class="txtbox" value="'+ v["a_id"] +'" readonly/ > </p>'
                  //         + '<p><b><u>รายละเอียดอุบัติเหตุ</u></b></p>'
                  //         + '<p><b>จังหวัดที่เกิดเหตุ <font color="red">*</font></b>'
                  //         + '<select class="th form-control bg-light" id=""  name="a_province">'
                  //         + '<option value="'+ v["province_id"] +'" selected>'+ v["province_th"] +'</option>';
                  //           $.each($result['1'], function(i, v_pro_th){
                  //             html += '<option value="'+ v_pro_th["province_id"] +'">'+ v_pro_th["province_th"] +'</option>';
                  //           });
                  //          html += '</select></p> '
                  //         // + '<p><b>จังหวัดที่เกิดเหตุ <font color="red">*</font></b>  <input type="text" class="th form-control" name="a_provice"></p> '
                  //         + '<p><b>สถานที่เกิดเหตุ <font color="red">*</font></b>  <input type="text" class="th form-control" name="a_location" value="'+ v["a_location"] +'"> </p>'
                  //         + '<p><b>จำนวนผู้ไดรับบาดเจ็บ <font color="red">*</font></b>  <input type="text" class="th form-control" name="a_rowsore" value="'+ v["a_rowsore"] +'"></p> '
                  //         + '<p><b>สาเหตุการเกิดอุบัติเหตุ <font color="red">*</font></b>'
                  //         + '<input type="text" class="form-control" name="a_cause" id="a_cause" value="'+ v["a_cause"] +'"></p> '
                  //       + '</div>'
                      
                  //       + '<div class="modal-footer">'
                  //       + '<!-- ปุ่มกดปิด (Close) ตรงส่วนล่างของ Modal -->'
                  //         + '<div class="text-center"> '
                  //               +'<button type="submit" id="'+ v["a_id"] +'" class="bt" style="background-color: #43AF52">ยืนยัน</button>'+ ' '
                  //               +'<button href ="#" id="191" data-dismiss="modal" class="bt" style="background-color: red">ยกเลิก</button>'
                  //         + '</div>'
                  //       + '</div>';
                  // // $('#myModal_confirm').modal('show');
                  //     // console.log();
                  //     // console.log(i, v);
                  //   });

                  //   $('#edit_accident').empty();
                  //   $('#edit_accident').append(html);
                }
             });
        })
    });
</script>

<script type="text/javascript">
  $(document).ready(function() {
        $(document).on('click','.accident',function(evan) {
          evan.preventDefault();
          var id = $(this).attr('id');
           $.ajax({
                method: "POST",
                url: "<?php echo site_url('Admin_control/accident') ?>",
                dataType: 'json',
                data: {id:id},
                success: function($result) {
                    console.log($result);
                    let html = "";
                    let html1 = "";
                    $.each($result['0'], function(i, v){
                    //   // html += v["m_id"] ;
                    html += '<div class="content1"> '
                          + '<p><b><u>รายละเอียดผู้แจ้ง</u></b></p>'
                          + '<p><b>ชื่อ - สกุล :</b> '+ v["m_title"] +''+ v["m_first_name"] +' '+ v["m_surname"] +'</p> '
                          + '<p><b>ลงทะเบัยนร่วมกิจกรรมจังหวัด :</b> '+ v["province_th"] +'</p> '
                          + '<p><b>ประเทศ :</b> '+ v["m_country"] +'</p>'
                          + '<p><b>เลขบัตรประชาชน : </b>'+ v["m_passport_no"] +'</p>'
                          + '<p><b>รหัสร่วมกิจกรรม : </b> <input type"text" name="id_activ" class="txtbox" value="'+ v["m_id_activities"] +'" readonly/ > </p>' 
                          + '<p><b>เพศ : </b>'+ v["m_sex"] +'</p>'
                          + '<p><b><u>รายละเอียดอุบัติเหตุ</u></b></p>'
                          + '<p><b>จังหวัดที่เกิดเหตุ <font color="red">*</font></b>'
                           + '<select class="th form-control bg-light" id=""  name="a_province">'
                            + '<option value="'+ v["province_id"] +'" selected>'+ v["province_th"] +'</option>';
                            $.each($result['1'], function(i, vs){
                              html += '<option value="'+ vs["province_id"] +'">'+ vs["province_th"] +'</option>';
                            });
                           html += '</select></p> '
                          // + '<p><b>จังหวัดที่เกิดเหตุ <font color="red">*</font></b>  <input type="text" class="th form-control" name="a_provice"></p> '
                          + '<p><b>สถานที่เกิดเหตุ <font color="red">*</font></b>  <input type="text" class="th form-control" name="a_location"> </p>'
                          + '<p><b>จำนวนผู้ไดรับบาดเจ็บ <font color="red">*</font></b>  <input type="text" class="th form-control" name="a_rowsore"></p> '
                          + '<p><b>สาเหตุการเกิดอุบัติเหตุ <font color="red">*</font></b>'
                           + '<select class="th form-control bg-light" id=""  name="a_cause">'
                            + '<option value="" selected>สาเหตุการเกิดอุบัติเหตุ</option>'
                            + '<option>ล้มจักรยาน</option>'
                            + '<option>มีสิ่งกีดขวาง</option>'
                            + '<option>จักรยานชนกัน</option>'
                            + '<option>หมดสติ</option>'
                            + '<option>อื่นๆ</option>'
                          + '</select></p> '
                          + '<p><b>อื่นๆ </b>'
                          + '<input type="text" class="form-control" name="a_other" id="other_accident" ></p> '
                        + '</div>'
                      
                        + '<div class="modal-footer">'
                        + '<!-- ปุ่มกดปิด (Close) ตรงส่วนล่างของ Modal -->'
                          + '<div class="text-center"> '
                                +'<button type="submit" id="clossmodal" class="bt" style="background-color: #43AF52">ยืนยัน</button>'+ ' '
                                +'<button href ="#" id="191" data-dismiss="modal" class="bt" style="background-color: red">ยกเลิก</button>'
                          + '</div>'
                        + '</div>';
                  // $('#myModal_confirm').modal('show');
                      console.log();
                      console.log(i, v);
                    });

                    $('#accident').empty();
                    $('#accident').append(html);
                }
             });
        })
    });
</script>

<script type="text/javascript">
  $(document).ready(function() {

      //เรียกใช้ evnet submit
      $("#form_accident").submit(function(evan) {
      evan.preventDefault();
          $(".th + span.require").remove();
          $("#other_accident + span.require").remove();
          $(".th").each(function(){
              //ดึงnameจากform
              var name = $(this).attr("name")
              var val = $(this).val()
               //เช็คค่าว่าง
               if (val=="") {
                   $(this).after("<span class='require'style ='color:red'>*จำเป็นต้องกรอก</span>")
               }else{
                  if (name=="a_rowsore") {
                    var check_a_rowsore = check_rowsore(val)
                    if (check_a_rowsore==false) {
                        $(this).after("<span class='require' style ='color:red'>*ใส่เฉพาะตัวเลขเท่านั้น</span>")
                    }
                  }
                   if (name=="a_cause") {
                   var check_a_accident = check_accident(val)
                   if (check_a_accident==false) {
                      // $(this).after("<span class='require' style ='color:red'>*รูปแบบE-Mailไม่ถูกต้อง</span>")
                   }
                  }
               }
            });
            if($(".th").next().is(".require")==false){
                 $.ajax({
                    method: "POST",
                    url: "<?php echo site_url('Admin_control/insert_accident') ?>",
                    dataType: 'json',
                    data: $("#form_accident").serialize(),
                    success: function($result) {
                        console.log($result);
                        let html = "";
                            $.each($result, function(i, v){
                              html += '<tr class="css_tr_data" id="'+ v["m_id"] +'">'
                                + '<td><input name="checkdel[]" type="checkbox" class="css_data_item" id="'+ v["m_id_activities"] +'" value="'+ v["m_id_activities"] +'"></td>'
                                + '<td>'+ v["m_first_name"] +'</td>'
                                + '<td>'+ v["m_surname"] +'</td>'
                                + '<td>'+ v["m_passport_no"] +'</td>'
                                + '<td>'+ v["m_id_activities"] +'</td>'
                                + '<td>'+ v["province_th"] +'</td>'
                                + '<td><a href ="" id="'+ v["m_id_activities"] +'" class="accident btn btn-sm btn-flat btn-success trash-multi" data-toggle="modal" data-target="#modal_accident"><i class="fa fa-wrench"></i> แจ้งอุบัติเหตุ</a></td>';
                              console.log(i, v);
                            });

                            $('#modal_accident').modal('toggle');
                            $('#myModal_confirm').modal('show');
                            $('.table tbody').empty();
                            $('.table tbody').append(html);
                    }
                  });
            }else{
                return false;  
            }
      });
    });
      function check_rowsore(rowsore)
    { 
       var patt = /^([0-9])+$/i
      if(!rowsore.match(patt)){
        return false;
      }
    }
    function check_accident(accident)
    {
     if (accident=="อื่นๆ") {
      $("#other_accident + span.require").remove();
      $("#other_accident").each(function(){
             $(this).each(function(){    
                 if($(this).val()==""){
                     $(this).after("<span class='require'style ='color:red'>*จำเป็นต้องกรอก</span>")
                 }
             });
         });
     }else{
      $("#other_accident + span.require").remove();
     }
    }
</script>


<script type="text/javascript">
  $(document).ready(function() {

      //เรียกใช้ evnet submit
      $("#insert_accident").submit(function(evan) {
      evan.preventDefault();
          $(".th1 + span.require").remove();
          $("#other_accident + span.require").remove();
          $(".th1").each(function(){
              //ดึงnameจากform
              var name = $(this).attr("name")
              var val = $(this).val()
               //เช็คค่าว่าง
               if (val=="") {
                   $(this).after("<span class='require'style ='color:red'>*จำเป็นต้องกรอก</span>")
               }else{
                  if (name=="a_rowsore") {
                    var check_a_rowsore = check_rowsore1(val)
                    if (check_a_rowsore==false) {
                        $(this).after("<span class='require' style ='color:red'>*ใส่เฉพาะตัวเลขเท่านั้น</span>")
                    }
                  }
                   if (name=="a_cause") {
                   var check_a_accident = check_accident1(val)
                   if (check_a_accident==false) {
                      // $(this).after("<span class='require' style ='color:red'>*รูปแบบE-Mailไม่ถูกต้อง</span>")
                   }
                  }
               }
            });
            if($(".th1").next().is(".require")==false){
                 $.ajax({
                    method: "POST",
                    url: "<?php echo site_url('Admin_control/insert_accident1') ?>",
                    dataType: 'json',
                    data: $("#insert_accident").serialize(),
                    success: function($result) {
                        console.log($result);
                        let html = "";
                            $.each($result, function(i, v){
                              html += '<tr class="css_tr_data" id="'+ v["m_id"] +'">'
                                + '<td><input name="checkdel[]" type="checkbox" class="css_data_item" id="'+ v["m_id_activities"] +'" value="'+ v["m_id_activities"] +'"></td>'
                                + '<td>'+ v["m_first_name"] +'</td>'
                                + '<td>'+ v["m_surname"] +'</td>'
                                + '<td>'+ v["m_passport_no"] +'</td>'
                                + '<td>'+ v["m_id_activities"] +'</td>'
                                + '<td>'+ v["province_th"] +'</td>'
                                + '<td><a href ="" id="'+ v["m_id_activities"] +'" class="accident btn btn-sm btn-flat btn-success trash-multi" data-toggle="modal" data-target="#modal_accident"><i class="fa fa-wrench"></i> แจ้งอุบัติเหตุ</a></td>';
                              console.log(i, v);
                            });

                            $('#modal_accident_accident').modal('toggle');
                            $('#myModal_confirm').modal('show');
                            $('.table tbody').empty();
                            $('.table tbody').append(html);
                    }
                  });
            }else{
                return false;  
            }
      });
    });
      function check_rowsore1(rowsore)
    { 
       var patt = /^([0-9])+$/i
      if(!rowsore.match(patt)){
        return false;
      }
    }
    function check_accident1(accident)
    {
     if (accident=="อื่นๆ") {
      $("#other_accident + span.require").remove();
      $("#other_accident").each(function(){
             $(this).each(function(){    
                 if($(this).val()==""){
                     $(this).after("<span class='require'style ='color:red'>*จำเป็นต้องกรอก</span>")
                 }
             });
         });
     }else{
      $("#other_accident + span.require").remove();
     }
    }
</script>
