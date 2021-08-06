<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<style type="text/css">
  .bt11{
    display: block;
    /*margin: -8px -133px;*/
    margin:0 -18px;
    padding-top: 7px;
     padding-bottom: 7px;
     padding-right: 15px;
     padding-left: 15px;
     background-color: #00aeef;
     color: white;
     border:0px;
     margin-left: -94px;
   }
   .bt21{
    display: block;
    margin: -34px 57px;
    padding-top: 7px;
     padding-bottom: 7px;
     padding-right: 39px;
     padding-left: 25px;
     background-color: #00aeef;
     color: white;
     border:0px;
     display: block;
     margin: -34px 68px;
   }
   .modal-body{
      padding-bottom: 38px;
   }
</style>
  <div class="modal fade" id="modal_contact_alert" role="dialog">
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
        <form id="form_contact_show" name="form_contact_show"  method="post">
          <div class="modal-body">
            <div class="content1">
              
                <div class="edit_ingredient"></div>
                <div class="modal-footer">
                <!-- ปุ่มกดปิด (Close) ตรงส่วนล่างของ Modal -->
                  <div class="text-center"> 
                      <button type="submit" id="clossmodal" class="bt11" style="background-color: #43AF52">ยืนยันการตรวจสอบ</button> 
                      <a href ="#" data-dismiss="modal" class="bt21" style="background-color: red">ปิด</a>
                  </div>
                </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>