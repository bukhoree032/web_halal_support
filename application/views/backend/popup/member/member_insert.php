

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>


  

  <div class="modal fade" id="member_insert" role="dialog">
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
            <h4><b><u>ลงทะเบียนเจ้าหน้าที่</u></b></h4>
          </div>
          <form id="form_member_insert" name="form_member_insert"  method="post">
            <div class="content1"> 
                  <p>
                    <b>ชื่อ <font color="red">*</font></b>  
                    <input type="text" class="th1 form-control" name="name" placeholder="ชื่อ">
                  </p> 
                  <p>
                    <b>นามสกุล <font color="red">*</font></b>  
                    <input type="text" class="th1 form-control" name="surname" placeholder="นามสกุล">
                  </p>
                  <p>
                    <b>อีเมล <font color="red">*</font></b>  
                    <input type="text" class="th1 form-control" name="email" placeholder="อีเมล">
                  </p>
                   <p>
                    <b>รหัสผ่าน <font color="red">*</font></b>  
                    <input type="password" class="th1 form-control" name="password" placeholder="รหัสผ่าน">
                  </p>
                  <p>
                    <b>ยืนยันรหัสผ่าน <font color="red">*</font></b>  
                    <input type="password" class="th1 form-control" name="password_confrim" placeholder="ยืนยันรหัสผ่าน">
                  </p>
                  <p>
                    <b>เลขบัตรประชาชน <font color="red">*</font></b>  
                    <input type="text" class="th1 form-control" name="passport" placeholder="เลขบัตรประชาชน">
                  </p>
                  <p>
                    <b>เบอร์โทรศัพท์ <font color="red">*</font></b>  
                    <input type="text" class="th1 form-control" name="numberphone" placeholder="เบอร์โทรศัพท์">
                  </p> 
                <div class="modal-footer">
                <!-- ปุ่มกดปิด (Close) ตรงส่วนล่างของ Modal -->
                  <div class="text-center"> 
                      <button type="submit" id="clossmodal" class="bt11" style="background-color: #43AF52">ยืนยัน</button> 
                      <button href ="#" data-dismiss="modal" class="bt21" style="background-color: red">ยกเลิก</button>
                  </div>
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>