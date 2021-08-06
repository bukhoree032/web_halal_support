<style type="text/css">
 body{
      font-family: 'Kanit', sans-serif;
    }
    h1,h3{
       font-family: 'Kanit', sans-serif;
    }
    .col-sm-12.form{
      display: inline-block;
      
    }
    .col-sm-12 {
      background-color: white;
      
    }
    label,h3,h1{
      
    }
    .col-sm-6{
      background-color: white;
      padding-bottom: 20px;
      padding-top: 5px;
      
    }

    .col-sm-4{
      background-color: white;
      padding-bottom: 20px;
      padding-top: 5px;
      
    }

    .col-sm-3{
      background-color: white;
      padding-bottom: 20px;
      padding-top: 5px;
      
    }

    .col-sm-2{
      background-color: white;
      padding-bottom: 20px;
      padding-top: 5px;
      
    }

    .form-control{
      
      padding: 3px;
      padding-left: 13px;
      width: 100%
      border:none;
    }
    .rounded-pill{
         padding-right: 50px;
         padding-left: 50px;
         background-color: #00aeef;
         color: white !important;
         margin-right: 6px;
      }
      .rounded-pill:hover{
        background-color: #00aeef;
        color: white !important; 
      }
      h1.box-title.text-center{
        padding-bottom: 11px;
      }
      .text-center.mb-4{
        padding-bottom: 25px;
      }
     nav.navbar.navbar-static-top,a.logo{
      background-color: #FFE800 !important;
     }
     .sidebar-menu li.active a{
      border-left-color: #FFE800 !important;
     }
     li.user-footer{
      background-color: #F7E888 !important;
    }
    li.user-header{
      background-color: #F9E358 !important;
     
    }
</style>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>
        <b>แก้ไขรายการผลิตภัณฑ์</b>
        <small></small>
      </h3>
      <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
        <li class="active"><a href="">แก้ไขรายการผลิตภัณฑ์</a></li>
      </ol>
    </section>


    <?php foreach ($product_edit as $rw ) { ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="row">
              <div class="col-sm-12 form" >
                 <h1 class="box-title text-center"><i class="fa fa-pencil-square-o"></i> <b>แก้ไขผลิตภัณฑ์</b></h1> 
                  <!-- <form name="form_ingredient" id="form_ingredient" action="<?php echo site_url("Backend_control/ingredient") ?>" method="post"enctype="multipart/form-data"> -->
                  <form name="form_product" id="form_product" method="post" action="<?php echo site_url("Backend_control/product") ?>" enctype="multipart/form-data">
                    <div class="col col-sm-12 col-md">
                      <input type="hidden"name="p_id" value="<?php echo $rw->p_id; ?>">
                      <div class="col col-sm-3 col-md">
                        <label>รหัสผลิตภัณฑ์</label>
                        <font color="red">*</font>
                        <input type="text" class="pro form-control" name="p_idproduct" placeholder="รหัสผลิตภัณฑ์" value="<?php echo $rw->p_idproduct; ?>">
                      </div>
                      <div class="col col-sm-3 col-md">
                        <label>ชื่อผลิตภัณฑ์</label>
                        <font color="red">*</font>
                        <input type="text" class="pro form-control" name="p_name" placeholder="ชื่อผลิตภัณฑ์" value="<?php echo $rw->p_name; ?>">
                      </div>
                      <div class="col col-sm-3 col-md">
                        <label>ชื่อผลิตภัณฑ์ภาษาอังกฤษ</label>
                        <font color="red">*</font>
                        <input type="text" class="pro form-control" name="p_name_eng" placeholder="ชื่อผลิตภัณฑ์ภาษาอังกฤษ" value="<?php echo $rw->p_name_eng; ?>">
                      </div>
                      <div class="col col-sm-3 col-md">
                        <label>ยี่ห้อ(brand)</label>
                        <font color="red">*</font>
                        <input type="text" class="pro form-control" name="p_brand" placeholder="ยี่ห้อ(brand)ผลิตภัณฑ์" value="<?php echo $rw->p_brand; ?>">
                      </div>
                      
                    </div>
                    <div class="col col-sm-12 col-md">
                      <div class="col col-sm-4 col-md">
                        <label>ประเภทผลิตภัณฑ์</label>
                        <font color="red">*</font>
                        <select class="pro form-control bg-light" id=""  name="p_type">
                            <option value="<?php echo $rw->p_type; ?>" selected>เลือกประเภทผลิตภัณฑ์</option>';
                            <?php foreach ($status_inves['2'] as $rw1) { ?>
                              <option value="<?php echo $rw1->p_t_id; ?>"><?php echo $rw->p_t_name; ?></option>
                            <?php } ?> 
                        </select>
                      </div>
                      <!-- <div class="col col-sm-4 col-md">
                        <label>ขนาดของผลิตภัณฑ์(ลิตร/กรัม)</label>
                        <font color="red">*</font>
                        <input type="text" class="pro form-control" name="p_size" placeholder="ป้อนตัวเลข(ลิตร/กรัม)"  value="<?php echo $rw->p_size; ?>">
                      </div> -->
                      <div class="col col-sm-4 col-md">
                        <label>รสชาติ</label>
                        <font color="red">*</font>
                        <input type="text" class="pro form-control" name="p_taste" placeholder="รสชาติของผลิตภัณฑ์"  value="<?php echo $rw->p_taste; ?>">
                      </div>
                      <div class="col col-sm-2 col-md">
                        <!-- <label>ขนาดของผลิตภัณฑ์(ลิตร/กรัม)</label> -->
                        <label>ขนาดของผลิตภัณฑ์</label>
                        <font color="red">*</font>
                        <input type="text" class="pro form-control sizee" name="p_size" placeholder="ป้อนตัวเลขเท่านั้น" value="<?php echo $rw->p_size; ?>">
                      </div>
                      <div class="col col-sm-2 col-md">
                        <label>ประเภทขนาด</label>
                        <font color="red">*</font>
                        <select class="pro form-control bg-light" id=""  name="p_size2">
                            <option value="<?php echo $rw->p_net; ?>" selected><?php echo $rw->pz_name; ?></option>';
                            <?php foreach ($status_inves['3'] as $rw3) { ?>
                              <option value="<?php echo $rw3->pz_id; ?>"><?php echo $rw3->pz_name; ?></option>
                            <?php } ?> 
                        </select>
                      </div>
                    </div>
                    
                    <div class="col col-sm-12 col-md">
                      <div class="col col-sm-4 col-md">
                        <label>บาร์โค้ด(Barcode)</label>
                        <font color="red"></font>
                        <input type="text" class="pro form-control" name="p_barcode" placeholder="เลขบาร์โค้ดของผลิตภัณฑ์"  value="<?php echo $rw->p_barcode; ?>">
                      </div>
                      <!-- <div class="col col-sm-4 col-md">
                        <label>สถานะผลิตภัณฑ์</label>
                        <font color="red">*</font>
                        <select class="pro form-control bg-light" id=""  name="p_status">
                            <option value="<?php echo $rw->p_status; ?>" selected><?php echo $rw->s_status; ?></option>';

                             <?php foreach ($status_inves['0'] as $rw1) { ?>
                              <option value="<?php echo $rw1->s_id; ?>"><?php echo $rw1->s_status; ?></option>
                            <?php } ?> 
                        </select>
                      </div> -->

                      <div class="col col-sm-4 col-md">
                        <label>เลขรับรองฮาลาล</label>
                        <font color="red"></font>  
                        <input type="text" class="form-control" name="p_halal" placeholder="เลขรับรองฮาลาลของผลิตภัณฑ์" id="m_other1" value="<?php echo $rw->h_halal_number; ?>">
                      </div>

                      <div class="col col-sm-4 col-md">
                        <label>องค์กรที่ตรวจสอบ</label>
                        <font color="red">*</font>
                        <select class="pro form-control bg-light" id=""  name="p_id_investigate">
                          <option value="<?php echo $rw->p_id_investigate; ?>" selected><?php echo $rw->inves_inspector; ?></option>';

                          <?php foreach ($status_inves['1'] as $rw1) { ?>
                            <option value="<?php echo $rw1->inves_id; ?>"><?php echo $rw1->inves_inspector; ?></option>
                          <?php } ?>

                        </select>
                      </div>
                    </div>
                    <div class="col col-sm-12 col-md">
                      <div class="col col-sm-4 col-md">
                        <label>สถานะผลิตภัณฑ์</label>
                        <font color="red">*</font>
                        <select class="pro form-control bg-light" id=""  name="p_status">
                            <option value="<?php echo $rw->p_status; ?>" selected><?php echo $rw->s_status; ?></option>';

                             <?php foreach ($status_inves['0'] as $rw1) { ?>
                              <option value="<?php echo $rw1->s_id; ?>"><?php echo $rw1->s_status; ?></option>
                            <?php } ?> 
                        </select>

                      </div>
                      <div class="col col-sm-4 col-md">
                        <label>วันที่รับรองฮาลาล</label>
                        <font color="red"></font>
                        <input type="text" class="dateInput form-control bg-light" name="p_receive" id="m_other2" value="<?php echo $rw->h_receive; ?>">
                      </div>
                      <div class="col col-sm-4 col-md">
                        <label>วันหมดอายุฮาลาล</label>
                        <font color="red"></font>
                        <input type="text" class="dateInput1 form-control bg-light" name="p_expire" id="m_other3" value="<?php echo $rw->h_expire; ?>">
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="text-center mb-4">
                          <button type="submit" class="btn btn mt-3 rounded-pill"><b>บันทึก</b></button>
                          <a href="<?php echo site_url('Backend_control/ingredient') ?>" class="btn btn mt-3 rounded-pill"><b>ออก </b></a>
                      </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="col-sm-12 form two">
               <h2 class="box-title text-center"><i class="fa fa-pencil-square-o"></i> <b>แก้ไขรูปภาพ</b></h2> 
               <form name="form1" id="form1" method="post" action="<?php echo site_url("Backend_control/product") ?>" enctype="multipart/form-data">
                 <div class="form-row data">
                    <div class="col col-sm-12 col-md">
                      <div class="col col-sm-12 col-md">
                        <input type="hidden"name="p_id" value="<?php echo $rw->p_id; ?>">
                        <center>
                          <img src="<?php echo base_url('/imag/') ?><?php echo $rw->main_pic_pic; ?>" class="avatar  rounded-circle img-thumbnail" alt="avatar" style="width: 250px; height: 200px">
                        </center>
                      </div>
                      <div class="col col-sm-4 col-md"></div>
                      <div class="col col-sm-4 col-md">
                        <label>แก้ไขรูปภาพประกอบ</label>
                        <font color="red">*</font>
                        <input type="file" class="pro1 form-control ustom-file-input text-center center-block file-upload img" value="<?php echo $rw->p_id_investigate; ?>" name="p_upload_fill" multiple="multiple">
                      </div>
                    </div>
                   <!-- <div class="col col-sm-12 col-md text-centerx">
                    <div class="text-center" style="padding-bottom: 10px">
                     <label>รูปเดิม</label>
                     </div>
                     <img src="<?php echo base_url('../bike_for_dad/image/') ?><?php echo $rw->p_id; ?>" class="thumbnail">
                   </div>
                    <div class="col col-sm-12 col-md">
                    <div class="font1 text-center">
                     <label>แก้ไขรูปภาพ</label>
                     </div>
                     <input type="file" class="thh form-group pic" name="newimg">
                   </div> -->
                    <div class="row">
                        <div class="text-center mb-4">
                            <button type="submit" class="btn btn mt-3 rounded-pill"><b>บันทึก</b></button>
                            <a href="<?php echo site_url('admin_control/confirm/') ?>" class="btn btn mt-3 rounded-pill"><b>ออก</b></a>
                        </div>
                    </div>
                  </div>
               </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php } ?>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
   
  </footer>
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

<!-- date-range-picker -->
<script src="<?php echo base_url('/admin_template1/') ?>bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url('/admin_template1/') ?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url('/admin_template1/') ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

</body>
</html>

<script type="text/javascript">
  $(document).ready(function() {
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(".file-upload").on('change', function(){
      readURL(this);
    });
  });
</script>
<script> //อัพโหลดภาพแสดงชื่อภาพ
  // Add the following code if you want the name of the file appear on select
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $.ajaxSetup({
        cache: false,
        contentType: false,
        processData: false
    }); 
      //เรียกใช้ evnet submit
      $("#form_product").submit(function(evan) {
      evan.preventDefault();
          $(".pro + span.require").remove();
          // $("#other_accident + span.require").remove();
          $(".pro").each(function(){
              //ดึงnameจากform
              var name = $(this).attr("name")
              var val = $(this).val()
               //เช็คค่าว่าง
                if (val=="") {
                    $(this).after("<span class='require'style ='color:red'>*จำเป็นต้องกรอก</span>")
                }else{
                  if (name=="p_name_eng") {
                    var p_name_eng = check_name_eng(val)
                    if (p_name_eng==false) {
                        $(this).after("<span class='require' style ='color:red'>ไม่สามารถใช้ภาษาไทย</span>")
                    }
                  }
                  if (name=="p_size") {
                    var p_size = check_p_size(val)
                    if (p_size==false) {
                        $(this).after("<span class='require' style ='color:red'>ป้อนตัวตัวเลขหรือ(.)</span>")
                    }
                  }
                  //เช็คความถูกต้อง
                  if (name=="p_barcode") {
                    var p_barcode = check_p_barcode(val)
                    if (p_barcode==false) {
                        $(this).after("<span class='require' style ='color:red'>ป้อนตัวตัวเลข</span>")
                    }
                  }
                  if (name=="p_halal") {
                    var p_halal = check_p_halal(val)
                    if (p_halal==false) {
                        $(this).after("<span class='require' style ='color:red'>ตรวจสอบเลขรับรองฮาลาลใหม่อีกครั้ง</span>")
                    }
                  }
                  if (name=="p_status") {
                  var check_status = check_p_status(val)
                    if (check_status==false) {
                        // $(this).after("<span class='require' style ='color:red'>*รูปแบบE-Mailไม่ถูกต้อง</span>")
                    }
                  }
                }
            });
            if($(".pro").next().is(".require")==false){
              if ($("#m_other1 ").next().is(".require")!=false) {
                return false;
              }else if ($("#m_other2 ").next().is(".require")!=false) {
                return false;
              }else if ($("#m_other3 ").next().is(".require")!=false) {
                return false;
              }else{
                  var formData = new FormData($(this)[0]);
                  $.post("<?php echo site_url('Backend_control/product_update') ?>",formData,function($data){
                    console.log($data);
                    document.getElementById("form_product").submit();
                    });
              } 
            }else{
                // alert ("asd");
                return false;  
            }
      });
    });
    function check_name_eng(check_name_eng1)
      {
        var nameFilter=/^[ก-๏\s]+$/;
        if ((nameFilter.test(check_name_eng1))) {
          return false;
        }
      }

    function check_p_size(check_p_size1)
    {
      // var emailFilter=/^.+@.+\..{2,3}$/;
      var emailFilter=/^[0-9.]/;
      if (!(emailFilter.test(check_p_size1))) { 
          return false;
      }
    }

    function check_p_barcode(check_p_barcode1)
    {
      // var emailFilter=/^.+@.+\..{2,3}$/;
      var emailFilter=/^[0-9]/;
      if (!(emailFilter.test(check_p_barcode1))) { 
          return false;
      }
    }

    function check_p_halal(halal_number)
    { 
      // var obj_l2=obj_l-1; 
        if(halal_number.length == 13) {
          return true;
        }else{
          return false;
        }
    }
    
    function check_p_status(p_status)
    {
      // if (p_status!="ฮาลาล") {
      if (p_status=="1") {
        $("#m_other1 + span.require").remove();
          $("#m_other1").each(function(){
              $(this).each(function(){
                var name1 = $(this).attr("name")
                var val1 = $(this).val()
                if (val1=="" || val1=="(01/01/2019)") {
                  $(this).after("<span class='require'style ='color:red'>*จำเป็นต้องกรอก</span>")
                }
              });
          });
        $("#m_other2 + span.require").remove();
          $("#m_other2").each(function(){
              $(this).each(function(){
                var name1 = $(this).attr("name")
                var val1 = $(this).val()
                if (val1=="" || val1=="(01/01/2019)") {
                  $(this).after("<span class='require'style ='color:red'>*จำเป็นต้องกรอก</span>")
                }
              });
          });
        $("#m_other3 + span.require").remove();
          $("#m_other3").each(function(){
              $(this).each(function(){
                var name1 = $(this).attr("name")
                var val1 = $(this).val()
                if (val1=="" || val1=="(01/01/2019)") {
                  $(this).after("<span class='require'style ='color:red'>*จำเป็นต้องกรอก</span>")
                }
              });
          });
      }else{
        $("#m_other1 + span.require").remove();
      }
    }
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $.ajaxSetup({
        cache: false,
        contentType: false,
        processData: false
    }); 
      //เรียกใช้ evnet submit
      $("#form1").submit(function(evan) {
      evan.preventDefault();
          $(".pro1 + span.require").remove();
          // $("#other_accident + span.require").remove();
          $(".pro1").each(function(){
              //ดึงnameจากform
              var name = $(this).attr("name")
              var val = $(this).val()
               //เช็คค่าว่าง
                if (val=="") {
                    $(this).after("<span class='require'style ='color:red'>*จำเป็นต้องกรอก</span>")
                }
            });
            if($(".pro1").next().is(".require")==false){
            // if($(".th1").next().is(".require")==false){
                var formData = new FormData($(this)[0]);
                $.post("<?php echo site_url('Backend_control/product_update_file') ?>",formData,function($data){
                  console.log($data);
                  document.getElementById("form1").submit();
                  });
            }else{
                // alert ("asd");
                return false;  
            }
      });
    });
</script>

<script type="text/javascript">
    $(function(){
        $(".dateInput").datepicker({
            dateFormat: 'dd/mm/yy',
        changeMonth: true,
        changeYear: true
        });
    });
</script>

<script type="text/javascript">
    $(function(){
        $(".dateInput1").datepicker({
            dateFormat: 'dd/mm/yy',
        changeMonth: true,
        changeYear: true
        });
    });
</script>