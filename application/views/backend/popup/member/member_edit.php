<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>


  

  <div class="modal fade" id="member_edit" role="dialog">
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
            <h4><b><u>แก้ไขข้อมูลเจ้าหน้าที่</u></b></h4>
          </div>
          <form id="form_member" name="form_member"  method="post">
            <div class="content1"> 
              <div class="edit_member"></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>