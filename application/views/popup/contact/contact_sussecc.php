
  <div class="modal fade" id="myModal_success" role="dialog">
    <div class="modal-dialog">
      <!-- เนือหาของ Modal ทั้งหมด -->
      <div class="modal-content">
        <!-- ส่วนหัวของ Modal -->
        <div class="modal-header">
          <!-- ปุ่มกดปิด (X) ตรงส่วนหัวของ Modal -->
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
          <div class="text-center">
          <img style="width: 174px;" src="<?php echo base_url('admin_template1/pic/halal.png') ?>">
          </div>
        </div>
        <!-- ส่วนเนื้อหาของ Modal -->

        <form id="form_contact1" action="<?php echo site_url('Frontend_control/contact') ?>" name="form" method="post">
          <div class="modal-body">
            <center>
              <?php  
                echo "บันการเปลียนแปลงสำเร็จ";
              ?>
            </center>
            <br>
            <div class="modal-footer"> 
              <input type="submit" value="ปิด" class="btn btn-primary" style="display: block; margin: 0 auto">
              <!-- <button type="submit" class="btn btn" data-dismiss="modal" style="background-color: red">ปิด</button> -->
            </div>
          </div>
        </form>
      </div>
    </div>
</div>