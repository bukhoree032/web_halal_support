<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> 
<!-- <style type="text/css">
  .modal-body{
      padding-bottom: 15px;
     }
</style> -->

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
          <img style="width: 180px; margin-top: 13px" src="<?php echo base_url('/admin_template1/') ?>pic/halal.png">
          </div>
        </div>
        <!-- ส่วนเนื้อหาของ Modal -->
        <div class="modal-body" style="
      padding-bottom: 15px;
     ">
          <div class="text-center">
            <?php
                 echo "บันทึกการเปลียนแปลงสำเร็จ";
            ?>
          </div>
          <br>
          <div class="modal-footer">
            <button type="button" class="btn btn" data-dismiss="modal" style="background-color: red ; color: white;">เสร็จสิ้น</button>
          </div>
        </div>
      </div>
    </div>
</div>