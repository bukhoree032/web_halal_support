<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <b>ข้อมูลเจ้าหน้าที่</b>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
        <li class="active">ข้อมูลเจ้าหน้าที่</li>
      </ol>
    </section>

    <form  id="form_bin_all" class="" action="#" method="post">
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title"><b>ข้อมูลเจ้าหน้าที่</b></h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
                    <div class="box-tools pull-right">
                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group" role="group" aria-label="1 group">
                          <a href ="" class="btn btn-sm btn-success btn-flat box-add" title="เพิ่มส่วนผสม" data-toggle="modal" 
                            data-target="#member_insert">
                            <i class="fa fa-plus"></i> เพิ่มเจ้าหน้าที่
                          </a>
                        </div>
                        <div class="btn-group" role="group" aria-label="2 group">
                          <a name="btnDelete" class="member_bin_all btn btn-sm btn-flat btn-danger trash-multi bt1" >
                              <i class="fa fa-trash"></i> ย้ายลงถังขยะ</a>
                          <a href ="<?php echo site_url('/Backend_admin_control/member_bin1') ?>" class="btn btn-sm btn-default btn-flat act-trash"  title="รายการถังขยะ">
                            <i class="fa fa-bars"></i> รายการถังขยะ
                          </a>
                        </div>
                      </div>  
                    </div>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="css_tr_data">
                      <th  width='5%'>เลือก</th>
                        <th width='10%'>รหัส</th>
                        <th width='15%'>ชื่อ</th>
                        <th width='15%'>นามสกุล</th>
                        <th width='15%'>Email</th>
                        <th width='15%'>เบอโทรศัพท์</th>
                        <th width='9%'>สถานะใช้งาน</th>
                        <th width='8%'>แก้ไข</th>
                        <th width='8%'>ย้ายลงถังขยะ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($member as $rw) { ?>
                      <tr class="css_tr_data">
                        <td>
                            <input name="checkdel[]" type="checkbox" class="css_data_item" id="<?php echo $rw->m_id; ?>" value="<?php echo $rw->m_id; ?>">
                          </td>
                        <td><?php echo $rw->m_id; ?></td>
                        <td><?php echo $rw->m_name; ?></td>
                        <td><?php echo $rw->m_surname; ?></td>
                        <td><?php echo $rw->m_email; ?></td>
                        <td><?php echo $rw->m_tel; ?></td>
                        <!-- <td>
                            <a id="" class="update_status btn btn-sm btn-success btn-flat box-add" data-toggle="modal" data-target="#modal_memorial">
                            ใช้งานได้ปกติ</a>
                        </td> -->
                        <?php if ($rw->m_status == 0) { ?>
                            <td>
                                <a href ="#" id="<?php echo $rw->m_id; ?>" class="update_status btn btn-sm btn-success btn-flat box-add" data-toggle="modal" data-target="#modal_memorial">
                                ใช้งานได้ปกติ</a>
                            </td>
                        <?php }else{ ?>
                            <td>
                                 <a href ="#" id="<?php echo $rw->m_id; ?>" class="update_status btn btn-sm btn btn-flat box-add" data-toggle="modal" data-target="#modal_memorial" style="background-color: red;color: white">ระงับการใช้งาน</a>
                            </td>
                        <?php } ?>
                        <!-- <td>
                          <a href ="" class="btn btn-sm btn-flat btn-success trash-multi"  title="แก้ไข" data-toggle="modal" data-target="#modal_edit">
                          <i class="fa fa-wrench"></i> แก้ไข</a> 
                        </td> -->
                        <td>
                          <a id="<?php echo $rw->m_id; ?>" class="member_edit btn btn-sm btn-flat btn-success trash-multi" title="แก้ไข" data-toggle="modal" data-target="#member_edit">
                            <i class="fa fa-wrench"></i> แก้ไข</a> 
                        </td>
                        <td>
                          <a id="<?php echo $rw->m_id; ?>" class="member_bin btn btn-sm btn-flat btn-danger trash-multi"  title="ย้ายลงถังขยะ">
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
        $(document).on('click','.member_edit',function(evan) {
          evan.preventDefault();
          // alert ($(this).attr('id'));
          var id = $(this).attr('id');
           $.ajax({
                method: "POST",
                url: "<?php echo site_url('Backend_admin_control/member_edit') ?>",
                dataType: 'json',
                data: {id:id},
                success: function($result) {
                    console.log($result);
                    let html = "";
                        $.each($result, function(i, v){
                          html += '<div class="content1"> '
                                    + '<p>'
                                      // + '<b>รหัส <font color="red">*</font></b>  '
                                      + '<input type="hidden" class="form-control" name="id" placeholder="รหัสส่วนผสม" value="'+ v["m_id"] +'">'
                                    + '</p> '
                                    + '<p>'
                                      + '<b>ชื่อ <font color="red">*</font></b>  '
                                      + '<input type="text" class="th2 form-control" name="name" value="'+ v["m_name"] +'">'
                                    + '</p> '
                                    + '<p>'
                                      + '<b>นามสกุล <font color="red">*</font></b>  '
                                      + '<input type="text" class="th2 form-control" name="surname"  value="'+ v["m_surname"] +'">'
                                    + '</p> '
                                    // + '<p>'
                                    //   + '<b>อีเมล <font color="red">*</font></b>  '
                                    //   + '<input type="text" class="th2 form-control" name="email"  value="'+ v["m_email"] +'">'
                                    // + '</p>'
                                    // + '<p>'
                                    //   + '<b>เลขบัตรประชาชน <font color="red">*</font></b>  '
                                    //   + '<input type="text" class="th2 form-control" name="passport"  value="'+ v["m_passport"] +'">'
                                    // + '</p>'
                                     + '<p>'
                                      + '<b>เบอร์โทรศัพท์ <font color="red">*</font></b>  '
                                      + '<input type="text" class="th2 form-control" name="numberphone"  value="'+ v["m_tel"] +'">'
                                    + '</p>'

                                  + '</div>'
                                    + '<div class="modal-footer">'
                                      + '<div class="text-center"> '
                                          + '<button type="submit" id="clossmodal" class="bt11" style="background-color: #43AF52">ยืนยัน</button> '
                                          + '<button href ="#" data-dismiss="modal" class="bt21" style="background-color: red">ยกเลิก</button>'
                                      + '</div>'
                                    + '</div>';
                        });

                        // $('#modal_accident').modal('toggle');
                        // $('#myModal_confirm').modal('show');
                        $('.edit_member').empty();
                        $('.edit_member').append(html);
                }
             });
        })
    });
</script>

<script type="text/javascript">
  $(document).ready(function() {

      //เรียกใช้ evnet submit
      $("#form_member").submit(function(evan) {
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
               else{
                 //เช็คความถูกต้อง
                  if (name=="passport") {
                    var check = check_passport_no(val)            
                   if (check==false) {
                      $(this).after("<span class='require' style ='color:red'>*เลขบัตรประชาชนไม่ถูกต้อง</span>")
                   }
                  }
                 if (name=="numberphone") {
                    var check_telephone = check_telephone_number(val)
                    if (check_telephone==false) {
                        $(this).after("<span class='require' style ='color:red'>*ตรวจสอบเบอร์โทรศัพท์ให้ถูกต้อง</span>")
                    }
                 }
                 if (name=="email") {
                    var check_email = check_email_address(val)
                    if (check_email==false) {
                        $(this).after("<span class='require' style ='color:red'>*รูปแบบE-Mailไม่ถูกต้อง</span>")
                    }
                 }
                 if (name=="name") {
                    var check_name1 = check_name(val)
                    if (check_name1==false) {
                        $(this).after("<span class='require' style ='color:red'>*ภาษาไทยหรือภาษาอังกฤษ</span>")
                    }
                 }
                 if (name=="surname") {
                    var check_name1 = check_name(val)
                    if (check_name1==false) {
                        $(this).after("<span class='require' style ='color:red'>*ภาษาไทยหรือภาษาอังกฤษ</span>")
                    }
                 }
               }
            });
            if($(".th2").next().is(".require")==false){
                 $.ajax({
                    method: "POST",
                    url: "<?php echo site_url('Backend_admin_control/member_update') ?>",
                    dataType: 'json',
                    data: $("#form_member").serialize(),
                    success: function($result) {
                        console.log($result);
                        if ($result=='false_regieter') {
                          // alert("ไม่สำเร็จ");
                            // $('#myModal_register_admin_mail').modal('show');
                        }else{
                          // alert("สำเร็จ");
                          let html = "";
                              $.each($result, function(i, v){
                                html += '<tr class="css_tr_data" id="'+ v["m_id"] +'">'
                                  + '<td>'
                                    + '<input name="checkdel[]" type="checkbox" class="css_data_item" id="'+ v["m_id"] +'" value="'+ v["m_id"] +'">' 
                                  + '</td>'
                                  + '<td>'+ v["m_id"] +'</td>'
                                  + '<td>'+ v["m_name"] +'</td>'
                                  + '<td>'+ v["m_surname"] +'</td>'
                                  + '<td>'+ v["m_email"] +'</td>'
                                  + '<td>'+ v["m_tel"] +'</td>';
                                  if (v["m_status"] == 0) {
                                        html += '<td>'
                                           + ' <a href ="#" id="'+v["m_id"]+'" class="update_status btn btn-sm btn-success btn-flat box-add" data-toggle="modal" data-target="#modal_memorial">ใช้งานได้ปกติ</a>'
                                        + '</td>';
                                  }else{
                                      html += '<td>'
                                             + '<a href ="#" id="'+v["m_id"]+'" class="update_status btn btn-sm btn btn-flat box-add" data-toggle="modal" data-target="#modal_memorial" style="background-color: red;color: white">ระงับการใช้งาน</a>'
                                        + '</td>';
                                  }
                                  html += '<td>'
                                    + '<a id="'+ v["m_id"] +'" class="member_edit btn btn-sm btn-flat btn-success trash-multi" title="แก้ไข" data-toggle="modal" data-target="#member_edit">'
                                      + '<i class="fa fa-wrench"></i> แก้ไข</a> '
                                  + '</td>'
                                  + '<td>'
                                    + '<a id="'+ v["m_id"] +'" class="member_bin btn btn-sm btn-flat btn-danger trash-multi"  title="ย้ายลงถังขยะ">'
                                    + '<i class="fa fa-trash"></i> ย้ายลงถังขยะ</a> '
                                  + '</td>'
                                + '</tr>';

                                console.log(i, v);
                              });

                              $('#member_edit').modal('toggle');
                              $('#myModal_success').modal('show');
                              $('.table tbody').empty();
                              $('.table tbody').append(html);
                        }
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

      //เรียกใช้ evnet submit
      $("#form_member_insert").submit(function(evan) {
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
               }else{
                 //เช็คความถูกต้อง
                  if (name=="passport") {
                    var check = check_passport_no(val)            
                   if (check==false) {
                      $(this).after("<span class='require' style ='color:red'>*เลขบัตรประชาชนไม่ถูกต้อง</span>")
                   }
                  }
                 if (name=="numberphone") {
                    var check_telephone = check_telephone_number(val)
                    if (check_telephone==false) {
                        $(this).after("<span class='require' style ='color:red'>*ตรวจสอบเบอร์โทรศัพท์ให้ถูกต้อง</span>")
                    }
                 }
                 if (name=="email") {
                    var check_email = check_email_address(val)
                    if (check_email==false) {
                        $(this).after("<span class='require' style ='color:red'>*รูปแบบE-Mailไม่ถูกต้อง</span>")
                    }
                 }
                 if (name=="name") {
                    var check_name1 = check_name(val)
                    if (check_name1==false) {
                        $(this).after("<span class='require' style ='color:red'>*ภาษาไทยหรือภาษาอังกฤษ</span>")
                    }
                 }
                 if (name=="surname") {
                    var check_name1 = check_name(val)
                    if (check_name1==false) {
                        $(this).after("<span class='require' style ='color:red'>*ภาษาไทยหรือภาษาอังกฤษ</span>")
                    }
                 }
                 if (name=="password") {
                    var check_password = check_ad_password(val)
                    if (check_password==false) {
                        $(this).after("<span class='require' style ='color:red'>*รหัสผ่านต้องมีความยาวอย่างน้อย 8 ตัว</span>")
                    }
                  }
                  if (name=="password") {
                      check_ad_password_confrim(val)
                  }  
               }
            });
            if($(".th1").next().is(".require")==false){
                 $.ajax({
                    method: "POST",
                    url: "<?php echo site_url('Backend_admin_control/member_insert') ?>",
                    dataType: 'json',
                    data: $("#form_member_insert").serialize(),
                    success: function($result) {
                        console.log($result);
                        if ($result=='false_i_id') {
                          alert("ไอดีซ่ำ");
                        }else if ($result=='false_regieter') {
                          alert("ไม่สำเร็จ");
                            // $('#myModal_register_admin_mail').modal('show');
                        }else if ($result=='p_false') {
                          alert("เลขบัตรซ่ำ");
                            // $('#myModal_register_admin_mail').modal('show');
                        }else if ($result=='m_false') {
                          alert("เมลซ่ำ");
                            // $('#myModal_register_admin_mail').modal('show');
                        }else{
                          alert("สำเร็จ");
                            // $('#myModal_register_admin_idcard').modal('show');
                          let html = "";
                              $.each($result, function(i, v){
                                html += '<tr class="css_tr_data" id="'+ v["m_id"] +'">'
                                  + '<td>'
                                    + '<input name="checkdel[]" type="checkbox" class="css_data_item" id="'+ v["m_id"] +'" value="'+ v["m_id"] +'">' 
                                  + '</td>'
                                  + '<td>'+ v["m_id"] +'</td>'
                                  + '<td>'+ v["m_name"] +'</td>'
                                  + '<td>'+ v["m_surname"] +'</td>'
                                  + '<td>'+ v["m_email"] +'</td>'
                                  + '<td>'+ v["m_tel"] +'</td>';
                                  if (v["m_status"] == 0) {
                                        html += '<td>'
                                           + ' <a href ="#" id="'+v["m_id"]+'" class="update_status btn btn-sm btn-success btn-flat box-add" data-toggle="modal" data-target="#modal_memorial">ใช้งานได้ปกติ</a>'
                                        + '</td>';
                                  }else{
                                      html += '<td>'
                                             + '<a href ="#" id="'+v["m_id"]+'" class="update_status btn btn-sm btn btn-flat box-add" data-toggle="modal" data-target="#modal_memorial" style="background-color: red;color: white">ระงับการใช้งาน</a>'
                                        + '</td>';
                                  }
                                  html += '<td>'
                                    + '<a id="'+ v["m_id"] +'" class="member_edit btn btn-sm btn-flat btn-success trash-multi" title="แก้ไข" data-toggle="modal" data-target="#member_edit">'
                                      + '<i class="fa fa-wrench"></i> แก้ไข</a> '
                                  + '</td>'
                                  + '<td>'
                                    + '<a id="'+ v["m_id"] +'" class="member_bin btn btn-sm btn-flat btn-danger trash-multi"  title="ย้ายลงถังขยะ">'
                                    + '<i class="fa fa-trash"></i> ย้ายลงถังขยะ</a> '
                                  + '</td>'
                                + '</tr>';

                                console.log(i, v);
                              });

                              $('#member_insert').modal('toggle');
                              $('#myModal_success').modal('show');
                              $('.table tbody').empty();
                              $('.table tbody').append(html);
                        }  
                    }
                  });
            }else{
                return false;  
            }
      });
    });
    function check_passport_no(passport_no)
      {
      if(passport_no.length != 13) return false;
        for(i=0, sum=0; i < 12; i++)
          sum += parseFloat(passport_no.charAt(i))*(13-i); 
          console.log(sum);
          if((11-sum%11)%10!=parseFloat(passport_no.charAt(12)))
            return false; return true;
      }
    function check_passport_f(passport)
      {
        var patt = /^[0-9]{13}/
        if(!passport.match(patt)){
          return false;
        }if(passport.length != 13 ) {
          return false;
        }
      }
    function check_telephone_number(telephone_number)
      { 
        // var obj_l2=obj_l-1; 
        var patt = /^[0]{1}[0-9]{8}/
        if(telephone_number.match(patt)){
          if(telephone_number.length == 9) {
            return true;
          }else if(telephone_number.length == 10) {
            return true;
          }else{
            return false;
          }
        }else{
          return false;
        }
      }
    function check_email_address(email_address)
      {
        var emailFilter=/^.+@.+\..{2,3}$/;
        if (!(emailFilter.test(email_address))) { 
            return false;
        }
      }
    function check_m_title(m_title)
      {
        if (m_title=="อื่นๆ") {
          $("#m_other1 + span.require").remove();
            $("#m_other1").each(function(){
                $(this).each(function(){    
                    if($(this).val()==""){
                        $(this).after("<span class='require'style ='color:red'>*จำเป็นต้องกรอก</span>")
                    }
                });
            });
        }else{
          $("#m_other1 + span.require").remove();
        }
      }
    function check_name(name)
      {
        var nameFilter=/^[ก-๏a-zA-Z\s]+$/;
        if (!(nameFilter.test(name))) {
              return false;
            }
      }
      function check_ad_password(password_confrim)
      {
        var patt = /^[0-9 a-z A-Z]{8}/
        if(!password_confrim.match(patt)){
          return false;
        }
      }
      function check_ad_password_confrim(password_confrim)
      {
        $("#password_confrim + span.require").remove();
        $("#password_confrim").each(function(){
            $(this).each(function(){    
                if($(this).val()!=password_confrim){
                    $(this).after("<span class='require'style ='color:red'>*ยืนยันรหัสผ่านไม่ถูกต้อง</span>")
                }
            });
        });
      }
</script>

<script type="text/javascript">
  $(document).ready(function() {
        $(document).on('click','.member_bin',function(evan) {
          evan.preventDefault();
          // alert ($(this).attr('id'));
          var id = $(this).attr('id');
           $.ajax({
                method: "POST",
                url: "<?php echo site_url('Backend_admin_control/member_bin') ?>",
                dataType: 'json',
                data: {id:id},
                // method: "POST",
                // url: "<?php echo site_url('Backend_control/ingredient_bin') ?>",
                // dataType: 'json',
                // data: {id:id},
                success: function($result) {
                        console.log($result);
                          let html = "";
                              $.each($result, function(i, v){
                                html += '<tr class="css_tr_data" id="'+ v["m_id"] +'">'
                                  + '<td>'
                                    + '<input name="checkdel[]" type="checkbox" class="css_data_item" id="'+ v["m_id"] +'" value="'+ v["m_id"] +'">' 
                                  + '</td>'
                                  + '<td>'+ v["m_id"] +'</td>'
                                  + '<td>'+ v["m_name"] +'</td>'
                                  + '<td>'+ v["m_surname"] +'</td>'
                                  + '<td>'+ v["m_email"] +'</td>'
                                  + '<td>'+ v["m_tel"] +'</td>';
                                  if (v["m_status"] == 0) {
                                        html += '<td>'
                                           + ' <a href ="#" id="'+v["m_id"]+'" class="update_status btn btn-sm btn-success btn-flat box-add" data-toggle="modal" data-target="#modal_memorial">ใช้งานได้ปกติ</a>'
                                        + '</td>';
                                  }else{
                                      html += '<td>'
                                             + '<a href ="#" id="'+v["m_id"]+'" class="update_status btn btn-sm btn btn-flat box-add" data-toggle="modal" data-target="#modal_memorial" style="background-color: red;color: white">ระงับการใช้งาน</a>'
                                        + '</td>';
                                  }
                                  html += '<td>'
                                    + '<a id="'+ v["m_id"] +'" class="member_edit btn btn-sm btn-flat btn-success trash-multi" title="แก้ไข" data-toggle="modal" data-target="#member_edit">'
                                      + '<i class="fa fa-wrench"></i> แก้ไข</a> '
                                  + '</td>'
                                  + '<td>'
                                    + '<a id="'+ v["m_id"] +'" class="member_bin btn btn-sm btn-flat btn-danger trash-multi"  title="ย้ายลงถังขยะ">'
                                    + '<i class="fa fa-trash"></i> ย้ายลงถังขยะ</a> '
                                  + '</td>'
                                + '</tr>';

                                console.log(i, v);
                              });

                              $('#modal_accident_accident').modal('toggle');
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
        $(document).on('click','.member_bin_all',function(evan) {
          evan.preventDefault();
          // alert ($(this).attr('id'));
          var id = $(this).attr('id');
           $.ajax({
                method: "POST",
                url: "<?php echo site_url('Backend_admin_control/member_bin_all') ?>",
                dataType: 'json',
                data: $("#form_bin_all").serialize(),
                success: function($result) {
                    console.log($result);
                    let html = "";
                    $.each($result, function(i, v){
                                html += '<tr class="css_tr_data" id="'+ v["m_id"] +'">'
                                  + '<td>'
                                    + '<input name="checkdel[]" type="checkbox" class="css_data_item" id="'+ v["m_id"] +'" value="'+ v["m_id"] +'">' 
                                  + '</td>'
                                  + '<td>'+ v["m_id"] +'</td>'
                                  + '<td>'+ v["m_name"] +'</td>'
                                  + '<td>'+ v["m_surname"] +'</td>'
                                  + '<td>'+ v["m_email"] +'</td>'
                                  + '<td>'+ v["m_tel"] +'</td>';
                                  if (v["m_status"] == 0) {
                                        html += '<td>'
                                           + ' <a href ="#" id="'+v["m_id"]+'" class="update_status btn btn-sm btn-success btn-flat box-add" data-toggle="modal" data-target="#modal_memorial">ใช้งานได้ปกติ</a>'
                                        + '</td>';
                                  }else{
                                      html += '<td>'
                                             + '<a href ="#" id="'+v["m_id"]+'" class="update_status btn btn-sm btn btn-flat box-add" data-toggle="modal" data-target="#modal_memorial" style="background-color: red;color: white">ระงับการใช้งาน</a>'
                                        + '</td>';
                                  }
                                  html += '<td>'
                                    + '<a id="'+ v["m_id"] +'" class="member_edit btn btn-sm btn-flat btn-success trash-multi" title="แก้ไข" data-toggle="modal" data-target="#member_edit">'
                                      + '<i class="fa fa-wrench"></i> แก้ไข</a> '
                                  + '</td>'
                                  + '<td>'
                                    + '<a id="'+ v["m_id"] +'" class="member_bin btn btn-sm btn-flat btn-danger trash-multi"  title="ย้ายลงถังขยะ">'
                                    + '<i class="fa fa-trash"></i> ย้ายลงถังขยะ</a> '
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
        $(document).on('click','.update_status',function(evan) {
          evan.preventDefault();
          // alert ($(this).attr('id'));
          var id = $(this).attr('id');
           $.ajax({
                method: "POST",
                url: "<?php echo site_url('Backend_admin_control/update_status') ?>",
                dataType: 'json',
                data: {id:id},
                success: function($result) {
                    console.log($result);
                    let html = "";
                    $.each($result, function(i, v){
                       html += '<tr class="css_tr_data" id="'+ v["m_id"] +'">'
                                  + '<td>'
                                    + '<input name="checkdel[]" type="checkbox" class="css_data_item" id="'+ v["m_id"] +'" value="'+ v["m_id"] +'">' 
                                  + '</td>'
                                  + '<td>'+ v["m_id"] +'</td>'
                                  + '<td>'+ v["m_name"] +'</td>'
                                  + '<td>'+ v["m_surname"] +'</td>'
                                  + '<td>'+ v["m_email"] +'</td>'
                                  + '<td>'+ v["m_tel"] +'</td>';
                                  if (v["m_status"] == 0) {
                                        html += '<td>'
                                           + ' <a href ="#" id="'+v["m_id"]+'" class="update_status btn btn-sm btn-success btn-flat box-add" data-toggle="modal" data-target="#modal_memorial">ใช้งานได้ปกติ</a>'
                                        + '</td>';
                                  }else{
                                      html += '<td>'
                                             + '<a href ="#" id="'+v["m_id"]+'" class="update_status btn btn-sm btn btn-flat box-add" data-toggle="modal" data-target="#modal_memorial" style="background-color: red;color: white">ระงับการใช้งาน</a>'
                                        + '</td>';
                                  }
                                  html += '<td>'
                                    + '<a id="'+ v["m_id"] +'" class="member_edit btn btn-sm btn-flat btn-success trash-multi" title="แก้ไข" data-toggle="modal" data-target="#member_edit">'
                                      + '<i class="fa fa-wrench"></i> แก้ไข</a> '
                                  + '</td>'
                                  + '<td>'
                                    + '<a id="'+ v["m_id"] +'" class="member_bin btn btn-sm btn-flat btn-danger trash-multi"  title="ย้ายลงถังขยะ">'
                                    + '<i class="fa fa-trash"></i> ย้ายลงถังขยะ</a> '
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

<!-- <script type="text/javascript">
  $(document).ready(function() {

      //เรียกใช้ evnet submit
      $("#form_member_insert").submit(function(evan) {
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
                    url: "<?php echo site_url('Backend_control/member_insert') ?>",
                    dataType: 'json',
                    data: $("#form_member_insert").serialize(),
                    success: function($result) {
                        console.log($result);
                        // if ($result=='false_i_id') {
                        //   alert("ไอดีซ่ำ");
                        // }else if ($result=='false_regieter') {
                        //   alert("ไม่สำเร็จ");
                        //     // $('#myModal_register_admin_mail').modal('show');
                        // }else  if ($result=='false_true') {
                        //   alert("สำเร็จ");
                        //     // $('#myModal_register_admin_idcard').modal('show');
                         
                          let html = "";
                              $.each($result, function(i, v){
                                html += '<tr class="css_tr_data" id="'+ v["i_id"] +'">'
                                  + '<td>'
                                    + '<input name="checkdel[]" type="checkbox" class="css_data_item" id="'+ v["i_id"] +'" value="'+ v["i_id"] +'">' 
                                  + '</td>'
                                  + '<td>'+ v["i_id"] +'</td>'
                                  + '<td>'+ v["i_ingredients_id"] +'</td>'
                                  + '<td>'+ v["i_name"] +'</td>'
                                  + '<td>'+ v["i_name_sci"] +'</td>'
                                  + '<td>'+ v["s_status"] +'</td>'
                                  + '<td>'+ v["i_replace"] +'</td>'
                                  + '<td>'+ v["inves_inspector"] +'</td>'
                                  + '<td>'
                                    + '<a id="'+ v["i_id"] +'" class="ingredient_edit btn btn-sm btn-flat btn-success trash-multi" title="แก้ไข" data-toggle="modal" data-target="#ingredient_edit">'
                                      + '<i class="fa fa-wrench"></i> แก้ไข</a> '
                                  + '</td>'
                                  + '<td>'
                                    + '<a id="'+ v["i_id"] +'" class="ingredient_bin btn btn-sm btn-flat btn-danger trash-multi"  title="ย้ายลงถังขยะ">'
                                    + '<i class="fa fa-trash"></i> ย้ายลงถังขยะ</a> '
                                  + '</td>'
                                + '</tr>';

                                console.log(i, v);
                              });

                              $('#ingredient_insert').modal('toggle');
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
</script> -->