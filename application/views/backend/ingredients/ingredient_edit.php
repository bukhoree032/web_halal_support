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
    .rounded-pill{
      margin-top: 28px !important; 
    }
</style>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>
        <b>แก้ไขายการส่วนผสม</b>
        <small></small>
      </h3>
      <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
        <li class="active"><a href="">แก้ไขรายการส่วนผสม</a></li>
      </ol>
    </section>

    <?php foreach ($ingredient["0"] as $rw123) { ?>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="row">
                <div class="col-sm-12 form" >
                   <h1 class="box-title text-center"><i class="fa fa-pencil-square-o"></i> <b>แก้ไขส่วนผสม</b></h1> 
                    <form name="ingredient_edit" id="ingredient_edit" action="<?php echo site_url("Backend_control/ingredient") ?>" method="post"enctype="multipart/form-data">
                      <div class="col col-sm-12 col-md">

                          <input type="hidden" name="id"value="<?php echo $rw123->i_id  ; ?>">
                        <div class="col col-sm-4 col-md">
                          <label>รหัสส่วนผสม</label>
                          <font color="red">*</font>
                          <input type="text" class="ing form-control" name="i_ingredients_id" placeholder="รหัสส่วนผสม" value="<?php echo $rw123->i_ingredients_id  ; ?>">
                        </div>

                        <div class="col col-sm-4 col-md">
                          <label>ชื่อส่วนผสม</label>
                          <font color="red">*</font>
                          <input type="text" class="ing form-control" name="i_name" placeholder="ชื่อส่วนผสม" value="<?php echo $rw123->i_name; ?>">
                        </div>
                        <div class="col col-sm-4 col-md">
                          <label>ชื่อทางวิทยาศาสตร์</label>
                          <font color="red">*</font>
                          <input type="text" class="ing form-control" name="i_name_sci" placeholder="ชื่อทางวิทยาศาสตร์" value="<?php echo $rw123->i_name_sci; ?>">
                        </div>
                      </div>
                      <div class="col col-sm-12 col-md">
                        <div class="col col-sm-4 col-md">
                          <label>ประเภทส่วนผสม</label>
                          <font color="red">*</font>
                          <select class="th2 form-control bg-light" id=""  name="i_type">
                              <option value="" selected>เลือกประเภทส่วนผสม</option>';

                              <?php foreach ($status_inves['4'] as $rw) { ?>
                                <option value="<?php echo $rw->i_t_id ; ?>"><?php echo $rw->i_t_name; ?></option>
                              <?php } ?>
                          </select>
                        </div>
                        <div class="col col-sm-4 col-md">
                          <label>เลข E-Number</label>
                          <font color="red">*</font>
                          <input type="text" class="ing form-control" name="i_h_number" placeholder="เลข E-Number" value="<?php echo $rw123->i_e_number; ?>">
                        </div>
                        <div class="col col-sm-4 col-md">
                          <label>เลข H-Number </label>
                          <font color="red">*</font>
                          <input type="text" class="ing form-control" name="i_e_number" placeholder="เลข H-Number" value="<?php echo $rw123->i_h_number; ?>">
                        </div>
                      </div>
                      
                      <div class="col col-sm-12 col-md">
                        <div class="col col-sm-4 col-md">
                          <label>สถานะส่วนผสม</label>
                          <font color="red">*</font>
                          <select class="ing form-control bg-light" id=""  name="i_status">
                              <option value="<?php echo $rw123->i_status; ?>" selected><?php echo $rw123->s_status; ?></option>';

                              <?php foreach ($status_inves['0'] as $rw) { ?>
                                <option value="<?php echo $rw->s_id; ?>"><?php echo $rw->s_status; ?></option>
                              <?php } ?>
                          </select>
                        </div>
                        <div class="col col-sm-4 col-md">
                          <label>สามารถทดแทน</label>
                          <font color="red"></font>
                          <input type="text" class="form-control" name="i_replace" placeholder="สามารถทดแทน" value="<?php echo $rw123->i_replace; ?>">
                        </div>
                        <div class="col col-sm-4 col-md">
                          <label>องค์กรที่ตรวจสอบ</label>
                          <font color="red">*</font>
                          <select class="ing form-control bg-light" id=""  name="i_id_investigate">
                            <option value="<?php echo $rw123->inves_id; ?>" selected><?php echo $rw123->inves_inspector; ?></option>';

                            <?php foreach ($status_inves['1'] as $rw) { ?>
                              <option value="<?php echo $rw->inves_id; ?>"><?php echo $rw->inves_inspector; ?></option>
                            <?php } ?> 

                          </select>
                        </div>
                      </div>
                      
                      <div class="col col-sm-12 col-md">
                        <div class="col col-sm-12 col-md">
                          <label>อธิบายเพิ่มเติม</label>
                          <font color="red"></font>
                          <textarea class="form-control aa" rows="5" id="" placeholder="อธิบายเพิ่มเติม"  name="i_explain" ><?php echo $rw123->i_explain; ?></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="text-center mb-4">
                            <button type="submit" class="btn btn mt-3 rounded-pill"><b>บันทึก</b></button>
                            <a href="<?php echo site_url('Backend_control/ingredient') ?>" class="btn btn mt-3 rounded-pill"><b>ยกเลิก</b></a>
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
                 <form name="form_edit_ing" id="form_edit_ing" method="post" enctype="multipart/form-data">
                   <div class="form-row data">
                      <div class="col col-sm-12 col-md">
                        <div class="col col-sm-12 col-md">
                          <input type="hidden"name="p_id" value="">
                          <center>
                            <img src="<?php echo base_url('/imag/') ?><?php echo $rw123->main_pic_pic; ?>" class="avatar rounded-circle img-thumbnail" alt="avatar" style="width: 250px; height: 200px">
                          </center>
                        </div>
                        <div class="col col-sm-4 col-md"></div>

                        <input type="hidden" name="id"value="<?php echo $rw123->i_id  ; ?>">
                        <div class="col col-sm-4 col-md">
                          <label>แก้ไขรูปภาพประกอบ</label>
                          <font color="red">*</font>
                          <input type="file" class="ing_pic form-control ustom-file-input text-center center-block file-upload img" value="" name="p_upload_fill_update" multiple="multiple">
                        </div>
                      </div>
                     <br>
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
      $("#ingredient_edit").submit(function(evan) {
      evan.preventDefault();
          $(".ing + span.require").remove();
          // $("#other_accident + span.require").remove();
          $(".ing").each(function(){
              //ดึงnameจากform
              var name = $(this).attr("name")
              var val = $(this).val()
               //เช็คค่าว่าง
               if (val=="") {
                   $(this).after("<span class='require'style ='color:red'>*จำเป็นต้องกรอก</span>")
               }
            });
            if($(".ing").next().is(".require")==false){
            // if($(".th1").next().is(".require")==false){
                var formData = new FormData($(this)[0]);
                $.post("<?php echo site_url('Backend_control/ingredient_update') ?>",formData,function($data){
                  console.log($data);
                    document.getElementById("ingredient_edit").submit();
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
    $.ajaxSetup({
        cache: false,
        contentType: false,
        processData: false
    }); 
      //เรียกใช้ evnet submit
      $("#form_edit_ing").submit(function(evan) {
      evan.preventDefault();
          $(".ing_pic + span.require").remove();
          // $("#other_accident + span.require").remove();
          $(".ing_pic").each(function(){
              //ดึงnameจากform
              var name = $(this).attr("name")
              var val = $(this).val()
               //เช็คค่าว่าง
               if (val=="") {
                   $(this).after("<span class='require'style ='color:red'>*จำเป็นต้องกรอก</span>")
               }
            });
            if($(".ing_pic").next().is(".require")==false){
            // if($(".th1").next().is(".require")==false){
                var formData = new FormData($(this)[0]);
                $.post("<?php echo site_url('Backend_control/ingredient_update_pic') ?>",formData,function($data){
                  console.log($data);
                    document.getElementById("ingredient_edit").submit();
                  });
            }else{
                // alert ("asd");
                return false;  
            }
      });
    });
</script>