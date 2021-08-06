<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> 

<div class="modal fade" id="myModal_login_ban" role="dialog">
    <div class="modal-dialog">
      <!-- เนือหาของ Modal ทั้งหมด -->
      <div class="modal-content"> 
        <!-- ส่วนหัวของ Modal -->
        <div class="modal-header">
          <!-- ปุ่มกดปิด (X) ตรงส่วนหัวของ Modal -->
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
          <div class="text-center">
          <img style="width: 85px;" src="<?php echo base_url('/api_front1/') ?>images/LOGO.png">
          </div>
        </div>
        <!-- ส่วนเนื้อหาของ Modal -->
        <div class="modal-body">
          <div class="text-center">
            <?php
                 echo "บัญชีของคุณ ถูกระงับการใช้งาน";
            ?>
            <br>
            <?php
                 echo "กรุณาติดต่อเจ้าหน้าที ที่เกียวข้อง";
            ?>
            <!-- <h4>
              <?php
                echo "บัญชีของคุณ ถูกระงับการใช้งาน";
              ?>
            </h4>
            <br>
            
              <?php
                echo "กรุณาติดต่อเจ้าหน้าที ที่เกียวข้อง";
              ?> -->
          </div>
          <br>
          <div class="modal-footer">
            <button type="button" class="btn btn" data-dismiss="modal" style="background-color: red">ปิด</button>
          </div>
        </div>
      </div>
    </div>
</div>