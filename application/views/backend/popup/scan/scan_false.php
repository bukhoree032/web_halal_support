<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style type="text/css">
  .st{
    color: black;
    font-size: 20px;
  }
  .black{
    color: black;
  }
  .form_scan1{
    margin: 0px !important;

  }
  .bt_s{
    display: block;
    /*margin: -8px -133px;*/
    margin:0 -40px;
    padding-top: 7px;
     padding-bottom: 7px;
     padding-right: 24px;
     padding-left: 24px;
     background-color: #00aeef;
     color: white;
     border:0px;
   }
   .bt_scan{
    display: block;
    margin: -40px 45px;
    padding-top: 5px;
     padding-bottom: 7px;
     padding-right: 15px;
     padding-left: 15px;
     background-color: #00aeef;
     color: white;
     border:0px;
   }
    .modal-footer .btn3 , .btn3 {
        margin-left: 260px;
        margin-bottom: 0px;
        border-radius: 29px
    }
    .modal-footer .btn2 , .btn2 {
        margin-left: 160px;
        margin-bottom: 0px;
        border-radius: 29px
    }
    .bs {
        text-align: left !important;
        border-top: 0px !important;
        padding: 0px !important;
    }
</style>
 <?php  
    if($this->session->flashdata('scan_false')) {
    ?> 
      <script type="text/javascript">
        $(window).load(function(){
        $('#myModal_scan_false').modal('show');
        });
      </script>
    <?php
    }
    ?>
    <div class="modal fade" id="myModal_scan_false" role="dialog">
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
        <div class="modal-body" style="padding-bottom: 5px;">
          <div class="text-center" style="padding-bottom: 10px;">
            <strong class="st">
            <?php
              echo "การค้นหา";
            ?>
            </strong>
            <br>
            <div class="black">
            <?php
              echo "ไม่พบข้อมูลผลิตภัณฑ์หรือหมายเลขบาร์โค้ด";
            ?>
            </div>
            <?php
                echo "โปรดตรวจสอบอีกครั้ง โดยการป้อนหมายเลขบาร์โค้ดหรือชื่อผลิตภัณฑ์";
              ?>
                <br>
              <?php
                echo "";
              ?>
          </div>
          <div class="modal-footer bs">
            <form id="form_scan" class="" name="form_scan"  method="post" action="<?php echo site_url('Frontend_control/scan_sersh1') ?>" enctype="multipart/form-data">
              <div class="content1">
                      <!-- <b>ประเภทของผลิตภัณฑ์ <font color="red">*</font></b>   -->
                      <input type="text" class="form-control form_scan1 scan" name="zbar" placeholder="ป้อนหมายเลขบาร์โค้ดหรือชื่อผลิตภัณฑ์">
                  <div class="modal-footer">
                  <!-- ปุ่มกดปิด (Close) ตรงส่วนล่างของ Modal -->
                    <div class="text-center"> 
                      <div class="row"></div>
                      <button type="submit" class="bt_s btn2 btn2" style="background-color: #43AF52">ค้นหา</button>
                      <button data-dismiss="modal" class="bt_scan btn3 btn3" style="background-color: red">สแกนใหม่</button>
                    </div>
                  </div>
              </div>
            </form>
            <!-- <button type="button" class="btn btn" data-dismiss="modal" style="background-color: red ; color: white;">เสร็จสิ้น</button> -->
          </div>
        </div>
      </div>
    </div>
</div>