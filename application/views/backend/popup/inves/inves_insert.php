

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>


  

  <div class="modal fade" id="inves_insert" role="dialog">
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
            <h4><b><u>เพื่มสถานที่ตรวจสอบ</u></b></h4>
          </div>
          <form id="form_inves_insert" name="form_inves_insert"  method="post" enctype="multipart/form-data">
            <div class="content1"> 
                  <p>
                    <b>ชื่อสถานที่ตรวจสอบ <font color="red">*</font></b>  
                    <input type="text" class="th1 form-control" name="name_inves" placeholder="ชื่อสถานะ">
                  </p>
                <div class="modal-footer">
                <!-- ปุ่มกดปิด (Close) ตรงส่วนล่างของ Modal -->
                  <div class="text-center"> 
                      <button type="submit" id="clossmodal" class="bt11" style="background-color: #43AF52">ยืนยัน</button> 
                      <a href ="#" data-dismiss="modal" class="bt211" style="background-color: red">ยกเลิก</a>
                  </div>
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  