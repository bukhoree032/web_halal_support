

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>


  

  <div class="modal fade" id="ingredient_insert" role="dialog">
    <div class="modal-dialog">
      <!-- เนือหาของ Modal ทั้งหมด -->
      <div class="modal-content">
        <!-- ส่วนหัวของ Modal -->
        <div class="modal-header">
          <!-- ปุ่มกดปิด (X) ตรงส่วนหัวของ Modal -->
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
          <div class="text-center">
          <img style="width: 180px; margin-top: 13px" src="<?php echo base_url('admin_template1/pic/halal.png') ?>">
          </div>
        </div>
        <!-- ส่วนเนื้อหาของ Modal -->
        <div class="modal-body">
          <div class="text-center">
            <h4><b><u>เพิ่มรายการส่วนผสม</u></b></h4>
          </div>
          <form id="form_ingredient_insert" name="form_ingredient_insert" action="<?php echo site_url("Backend_control/ingredient_insert") ?>"   method="post" enctype="multipart/form-data">
            <div class="content1"> 
                      <p>
                        <b>รหัสส่วนผสม <font color="red">*</font></b>  
                        <input type="text" class="th1 form-control" name="i_ingredients_id" placeholder="รหัสส่วนผสม">
                      </p> 
                      <p>
                        <b>ชื่อส่วนผสม <font color="red">*</font></b>  
                        <input type="text" class="th1 form-control" name="i_name" placeholder="ชื่อส่วนผสม">
                      </p>
                      <p>
                        <b>ชื่อทางวิทยาศาสตร์ <font color="red">*</font></b>  
                        <input type="text" class="th1 form-control" name="i_name_sci" placeholder="ชื่อทางวิทยาศาสตร์">
                      </p>
                       <p>
                        <b>เลข E-Number <font color="red">*</font></b>  
                        <input type="text" class="th1 form-control" name="i_h_number" placeholder="เลข E-Number">
                      </p>
                      <p>
                        <b>เลข H-Number <font color="red">*</font></b>  
                        <input type="text" class="th1 form-control" name="i_e_number" placeholder="เลข H-Number">
                      </p>
                      <p>
                        <b>อธิบายเพิ่มเติม <font color="red"></font></b>
                        <textarea class="form-control" rows="5" id="" placeholder="อธิบายเพิ่มเติม"  name="i_explain"></textarea>
                      </p>
                      <p>
                        <b>สถานะ <font color="red">*</font></b>
                         <select class="th1 form-control bg-light" id=""  name="i_status">
                            <option value="" selected>เลือกสถานะ</option>';

                            <?php foreach ($status_inves['0'] as $rw) { ?>
                              <option value="<?php echo $rw->s_id; ?>"><?php echo $rw->s_status; ?></option>
                            <?php } ?>

                        </select>
                      </p>

                      <p>
                        <b>สามารถทดแทน <font color="red"></font></b>  
                        <input type="text" class="form-control" name="i_replace" placeholder="สามารถทดแทน">
                      </p> 
                      <p>
                        <b>องค์กรที่ตรวจสอบ <font color="red">*</font></b>
                         <select class="th1 form-control bg-light" id=""  name="i_id_investigate">
                          <option value="" selected>เลือกองค์กรที่ตรวจสอบ</option>';

                          <?php foreach ($status_inves['1'] as $rw) { ?>
                            <option value="<?php echo $rw->inves_id; ?>"><?php echo $rw->inves_inspector; ?></option>
                          <?php } ?>

                        </select>
                      </p>

                      <p>
                        <b>รูปส่วนผสม <font color="red">*</font></b>
                        <input type="file" class="th1 form-control ustom-file-input text-center center-block file-upload img" name="i_upload_fill" multiple="multiple">
                        <center>
                          <img src="<?php echo base_url('/admin_template/pic/icon.jpg') ?>" class="avatar  rounded-circle img-thumbnail" alt="avatar" style="width: 200px; height: 150px">
                        </center>
                      </p>

                    <div class="modal-footer">
                    <!-- ปุ่มกดปิด (Close) ตรงส่วนล่างของ Modal -->
                      <div class="text-center"> 
                          <button type="submit" id="clossmodal" class="bt" style="background-color: #43AF52">ยืนยัน</button> 
                          <a href ="#" data-dismiss="modal" class="bt" style="background-color: red">ยกเลิก</a>
                      </div>
                    </div>
                    
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

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