

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<style type="text/css">
  .bt11{
      display: block;
      /*margin: -8px -133px;*/
      margin:0 -40px;
      padding-top: 7px;
       padding-bottom: 7px;
       padding-right: 15px;
       padding-left: 15px;
       background-color: #00aeef;
       color: white;
       border:0px;
     }
     .bt21{
      display: block;
      margin: -34px 45px;
      padding-top: 7px;
       padding-bottom: 7px;
       padding-right: 15px;
       padding-left: 15px;
       background-color: #00aeef;
       color: white;
       border:0px;
     }
    nav.navbar.navbar-static-top,a.logo{
      background-color: #FFE800 !important;
     }
     .sidebar-menu li.active a{
      border-left-color: #FFE800 !important;
     }
     .modal-body{
      padding-bottom: 38px;
     }
</style>
  

  <div class="modal fade" id="status_insert" role="dialog">
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
            <h4><b><u>เพิ่มสถานะ</u></b></h4>
          </div>
          <form id="form_status_insert" name="form_status_insert"  method="post" enctype="multipart/form-data">
            <div class="content1"> 
                  <p>
                    <b>ชื่อสถานะ <font color="red">*</font></b>  
                    <input type="text" class="th1 form-control" name="s_name" placeholder="ชื่อสถานะ">
                  </p> 
                  <p>
                    <b>ชื่อสถานะ(ภาษาอังกฤษ) <font color="red">*</font></b>  
                    <input type="text" class="th1 form-control" name="s_name_eng" placeholder="ชื่อสถานะ(ภาษาอังกฤษ)">
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
  