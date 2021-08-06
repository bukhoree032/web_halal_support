<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <b>Information of Ingredients</b>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Main</a></li>
        <li class="active">All Information</li>
      </ol>
    </section>

    <form  id="form_bin_all" class="" action="#" method="post">
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title"><b>INGREDIENTS</b></h3>
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
                          <a href ="<?php echo site_url('/Backend_control/insert_ingredient') ?>" class="btn btn-sm btn-success btn-flat act-trash"  title="เพิ่มส่วนผสม">
                            <i class="fa fa-bars"></i> ADD
                          </a>
                        </div>
                        <div class="btn-group" role="group" aria-label="2 group">
                          <a class="ingredient_bin_all btn btn-sm btn-flat btn-danger trash-multi bt1">
                              <i class="fa fa-trash"></i> REMOVE</a>
                          <a href ="<?php echo site_url('/Backend_control/ingredient_bin1') ?>" class="btn btn-sm btn-default btn-flat act-trash"  title="Recycle Bin">
                            <i class="fa fa-bars"></i> Recycle Bin
                          </a>
                        </div>
                      </div>
                      
                    </div>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="css_tr_data">
                      <th>SELECT</th>
                        <!-- <th width='20%'>รหัสส่วนผสม</th> -->
                        <th width=''>CODE</th>
                        <th>ORDER</th>
                        <th>GENERAL NAME</th>
                        <th>SCIENTIFIC NAME</th>
                        <th>STATUS</th>
                        <th>SUBSTITUTE</th>
                        <th>INSPECTER</th>
                        <!-- <th>รายละเอียด</th> -->
                        <th>EDIT</th>
                        <th>REMOVE</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($ingredient as $rw) { ?>
                      <tr class="css_tr_data">
                        <td>
                          <input name="checkdel[]" type="checkbox" class="css_data_item" id="<?php echo $rw->i_id; ?>" value="<?php echo $rw->i_id; ?>">
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

                        <!-- <td>
                          <a id="<?php echo $rw->i_id; ?>" class="ing_detail btn btn-sm btn-flat btn-success trash-multi" title="รายละเอียด" data-toggle="modal" data-target="#ing_detail">
                            <i class="fa fa-eye"></i> รายละเอียด</a> 
                        </td> -->

                        <td>
                          <a id="" href="<?php echo site_url("Backend_control/ingredient_edit/".$rw->i_id); ?>" class="btn btn-sm btn-flat btn-success trash-multi" title="แก้ไข">
                            <i class="fa fa-wrench"></i> EDIT</a> 
                        </td>
                        <td>
                          <a id="<?php echo $rw->i_id; ?>" class="ingredient_bin btn btn-sm btn-flat btn-danger trash-multi"  title="ย้ายลงถังขยะ">
                          <i class="fa fa-trash"></i> REMOVE</a> 
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
        $(document).on('click','.ing_detail',function(evan) {
          evan.preventDefault();
          // alert ($(this).attr('id'));
          var id = $(this).attr('id');
           $.ajax({
                method: "POST",
                url: "<?php echo site_url('Backend_control/ing_detail') ?>",
                dataType: 'json',
                data: {id:id},              
                success: function($result) {
                    console.log($result);
                    let html = "";
                        $.each($result, function(i, v){
                          html += '<div class="content1"> '
                                    + '<p>'
                                      // + '<b>รหัส <font color="red">*</font></b>  '
                                      + '<center>'
                                          + '<img src="<?php echo base_url('/imag/') ?>'+v["main_pic_pic"]+'" height="100" width="150" alt="Image" class="">'
                                      + '</center>'
                                    + '</p> '
                                    + '<p>'
                                      + '<b>รหัสส่วนผสม : '+v["i_ingredients_id"]
                                    + '</p> '
                                    + '<p>'
                                      + '<b>ชื่อภาษาไทย : '+v["i_name"]
                                    + '</p> '
                                    + '<p>'
                                      + '<b>ชื่อทางวิทยาศาสตร์ : '+v["i_name_sci"]
                                    + '</p> '
                                    + '<p>'
                                      + '<b>เลข H-Number : '+v["i_h_number"]
                                    + '</p> '
                                    + '<p>'
                                      + '<b>เลข E-Number : '+v["i_e_number"]
                                    + '</p> '
                                    + '<p>'
                                      + '<b>สถานะส่วนผสม : '+v["s_status"]
                                    + '</p> '

                                    if (v["s_status"] == 'ฮาลาล') {

                                    }else if (v["i_replace"] == '') {
                                        html += '<p>'
                                                  + '<b>สามารถทดแทน : - </p> ';
                                    }else{
                                          html += '<p>'
                                                  + '<b>สามารถทดแทน : '+v["i_replace"]
                                                + '</p> ';
                                    }

                                    // + '<p>'
                                    //   + '<b>คำอธิบาย : '+v["province_th"]
                                    // + '</p> '
                                    if (v["i_explain"] == '') {
                                          html += '<p>'
                                                  + '<b>คำอธิบาย : - </p> ';
                                    }else{
                                          html += '<p>'
                                                  + '<b>คำอธิบาย : '+v["province_th"]
                                                + '</p> ';
                                    }
                                  html += '<p>'
                                      + '<b>ผู้รับรอง : '+v["inves_inspector"]
                                    + '</p> '
                                  + '</div>'

                                    + '<div class="modal-footer">'
                                      + '<div class="text-center"> '
                                          // + '<button type="submit" id="clossmodal" class="bt11" style="background-color: #43AF52">ยืนยัน</button> '
                                          + '<button href ="#" data-dismiss="modal" class="btx" style="background-color: red">ปิด</button>'
                                      + '</div>'
                                    + '</div>';
                        });

                        // $('#modal_accident').modal('toggle');
                        // $('#myModal_confirm').modal('show');
                        $('.edit_ingredient').empty();
                        $('.edit_ingredient').append(html);
                }
             });
        })
    });
</script>

<!-- <script type="text/javascript">
    $(document).ready(function() {
        $("#form_ingredient").submit(function(evan) {
          evan.preventDefault();
           $.ajax({
                method: "POST",
                url: "<?php echo site_url('Backend_control/ingredient_update') ?>",
                dataType: 'json',
                // data: {id:id},
                data: $("#form_ingredient").serialize(),
                success: function($result) {
                    console.log($result);
                    let html = "";
                    $.each($result, function(i, v){
                      // html += v["m_id"] ;
                      html += '<tr class="css_tr_data">'
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
                                  + '<a id="'+ v["i_id"] +'" class="del_admin btn btn-sm btn-flat btn-danger trash-multi"  title="ย้ายลงถังขยะ">'
                                  + '<i class="fa fa-trash"></i> ย้ายลงถังขยะ</a> '
                                + '</td>'
                              + '</tr>';

                      // console.log();
                      console.log(i, v);
                    });

                    $('#ingredient_edit').modal('toggle');
                    $('#myModal_success').modal('show');
                    $('.table tbody').empty();
                    $('.table tbody').append(html);
                    
                }
             });
        })
    });
</script> -->

<script type="text/javascript">
  $(document).ready(function() {

      //เรียกใช้ evnet submit
      $("#form_ingredient").submit(function(evan) {
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
                    url: "<?php echo site_url('Backend_control/ingredient_update') ?>",
                    dataType: 'json',
                    data: $("#form_ingredient").serialize(),                
                success: function($result) {
                    console.log($result);
                    let html = "";
                    $.each($result, function(i, v){
                      // html += v["m_id"] ;
                      html += '<tr class="css_tr_data">'
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
                                // + '<td>'
                                //   + '<a id="'+ v["i_id"] +'" class="ing_detail btn btn-sm btn-flat btn-success trash-multi" title="รายละเอียด" data-toggle="modal" data-target="#ing_detail">'
                                //     + '<i class="fa fa-eye"></i> รายละเอียด</a> '
                                // + '</td>'
                                + '<td>'
                                  + '<a id="'+ v["i_id"] +'" class="ingredient_edit btn btn-sm btn-flat btn-success trash-multi" title="แก้ไข" data-toggle="modal" data-target="#ingredient_edit">'
                                    + '<i class="fa fa-wrench"></i> แก้ไข</a> '
                                + '</td>'
                                + '<td>'
                                  + '<a id="'+ v["i_id"] +'" class="del_admin btn btn-sm btn-flat btn-danger trash-multi"  title="ย้ายลงถังขยะ">'
                                  + '<i class="fa fa-trash"></i> ย้ายลงถังขยะ</a> '
                                + '</td>'
                              + '</tr>';

                      // console.log();
                      console.log(i, v);
                    });

                    $('#ingredient_edit').modal('toggle');
                    $('#myModal_success').modal('show');
                    $('.table tbody').empty();
                    $('.table tbody').append(html);
                    
                    }
                  });
            }else{
                alert ("asd");
                return false;  
            }
      });
    });
</script>

<script type="text/javascript">
  $(document).ready(function() {
      //เรียกใช้ evnet submit
      $("#form_ingredient_insert").submit(function(evan) {
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
                return true;
            }else{
                return false;  
            }
      });
    });
</script>

<!-- <script type="text/javascript">
  $(document).ready(function() {
      $.ajaxSetup({
          cache: false,
          contentType: false,
          processData: false
      }); 
      //เรียกใช้ evnet submit
      $("#form_ingredient_insert").submit(function(evan) {
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
                var formData = new FormData($(this)[0]);
                $.post("<?php echo site_url('Backend_control/ingredient_insert') ?>",formData,function($result){
                    console.log($result);
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

                        $('#ingredient_insert').modal('toggle');
                        $('#myModal_success').modal('show');
                        $('.table tbody').empty();
                        $('.table tbody').append(html);
                      });
                  });
            }else{
                return false;  
            }
      });
    });
</script> -->

<script type="text/javascript">
  $(document).ready(function() {
        $(document).on('click','.ingredient_bin',function(evan) {
          evan.preventDefault();
          // alert ($(this).attr('id'));
          var id = $(this).attr('id');
           $.ajax({
                method: "POST",
                url: "<?php echo site_url('Backend_control/ingredient_bin') ?>",
                dataType: 'json',
                data: {id:id},
                success: function($result) {
                        console.log($result);
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
                                // + '<td>'
                                //   + '<a id="'+ v["i_id"] +'" class="ing_detail btn btn-sm btn-flat btn-success trash-multi" title="รายละเอียด" data-toggle="modal" data-target="#ing_detail">'
                                //     + '<i class="fa fa-eye"></i> รายละเอียด</a> '
                                // + '</td>'
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
        $(document).on('click','.ingredient_bin_all',function(evan) {
          evan.preventDefault();
          // alert ($(this).attr('id'));
          var id = $(this).attr('id');
           $.ajax({
                method: "POST",
                url: "<?php echo site_url('Backend_control/ingredient_bin_all') ?>",
                dataType: 'json',
                data: $("#form_bin_all").serialize(),
                success: function($result) {
                    console.log($result);
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
                                  // + '<td>'
                                  //   + '<a id="'+ v["i_id"] +'" class="ing_detail btn btn-sm btn-flat btn-success trash-multi" title="รายละเอียด" data-toggle="modal" data-target="#ing_detail">'
                                  //     + '<i class="fa fa-eye"></i> รายละเอียด</a> '
                                  // + '</td>'
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


                    $('#myModal_success').modal('show');
                    $('.table tbody').empty();
                    $('.table tbody').append(html);
                }
             });
        })
    });
</script>



