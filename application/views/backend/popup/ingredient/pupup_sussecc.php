 <?php  
    if($this->session->flashdata('rigister_success')) {
    ?> 
      <script type="text/javascript">
        $(window).load(function(){
        $('#myModal_success').modal('show');
        });
      </script> 
    <?php
    }
    ?>
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
          <img style="width: 85px;" src="<?php echo base_url('pic/logo.png') ?>">
          </div>
        </div>
        <!-- ส่วนเนื้อหาของ Modal -->
        <div class="modal-body">
          <center>
            <?php  
                echo $this->session->flashdata('rigister_success');
            ?>
          </center>
          <br>
          <div class="modal-footer"> 
            <button type="button" class="btn btn" data-dismiss="modal" style="background-color: red">ปิด</button>
          </div>
        </div>
      </div>
    </div>
</div>