<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <b>Product Information</b>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">All Data</li>
      </ol>
    </section>

    <form  id="form_bin_all" class="" action="#" method="post">
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title"><b>Details</b></h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
                    <div class="box-tools pull-right">
                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group" role="group" aria-label="1 group">
                          <!-- <a href ="" class="btn btn-sm btn-success btn-flat box-add" title="เพิ่มส่วนผสม" data-toggle="modal" 
                            data-target="#ingredient_insert">
                            <i class="fa fa-plus"></i> เพิ่มส่วนผสม
                          </a> -->
                          <a href ="<?php echo site_url('/Backend_control/insert_product') ?>" class="btn btn-sm btn-success btn-flat act-trash"  title="Add product">
                            <i class="fa fa-bars"></i> Add product
                          </a>
                        </div>
                        <div class="btn-group" role="group" aria-label="2 group">
                          <a class="product_bin_all btn btn-sm btn-flat btn-danger trash-multi bt1">
                              <i class="fa fa-trash"></i> Remove</a>
                          <a href ="<?php echo site_url('/Backend_control/product_bin1') ?>" class="btn btn-sm btn-default btn-flat act-trash"  title="Remove">
                            <i class="fa fa-bars"></i> Trash
                          </a>
                        </div>
                      </div>
                      
                    </div>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="css_tr_data">
                      <th  width='5'>Select</th>
                        <!-- <th width='20%'>รหัสส่วนผสม</th> -->
                        <th width='5'>ID</th>
                        <th width="">Code</th>
                        <th width=''>Name</th>
                        <th width=''>Brand</th>
                        <th width=''>Barcode</th>
                        <th width=''>Description</th>
                        <th width=''>Status</th>
                        <th width=''>Inspector</th>
                        <th>Detail</th>
                        <th width='10'>Edit</th>
                        <th width='10'>Remove</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($product as $rw) { ?>
                      <tr class="css_tr_data">
                        <td>
                          <center>
                            <input name="checkdel[]" type="checkbox" class="css_data_item" id="<?php echo $rw->p_id; ?>" value="<?php echo $rw->p_id; ?>">
                          </center>
                        </td>
                        <td><?php echo $rw->p_id; ?></td>
                        <td><?php echo $rw->p_idproduct; ?></td>
                        <td><?php echo $rw->p_name_eng; ?></td>
                        <td><?php echo $rw->p_brand; ?></td>
                        <td><?php echo $rw->p_barcode; ?></td>
                        <td><?php echo $rw->p_taste; ?></td>
                        <td><?php echo $rw->s_status_eng; ?></td>
                        <td><?php echo $rw->inves_inspector; ?></td>
                        <!-- <td>
                            <a id="" class="update_status btn btn-sm btn-success btn-flat box-add" data-toggle="modal" data-target="#modal_memorial">
                            ใช้งานได้ปกติ</a>
                        </td> -->
                        <!-- <td>
                          <a href ="" class="btn btn-sm btn-flat btn-success trash-multi"  title="แก้ไข" data-toggle="modal" data-target="#modal_edit">
                          <i class="fa fa-wrench"></i> แก้ไข</a> 
                        </td> -->
                        <td>
                          <a id="<?php echo $rw->p_id; ?>" class="pro_detail btn btn-sm btn-flat btn-success trash-multi" title="Detail" data-toggle="modal" data-target="#pro_detail">
                            <i class="fa fa-eye"></i> Detail</a> 
                        </td>

                        <td>
                          <a id="" href ="<?php echo site_url("Backend_control/product_edit/".$rw->p_id); ?>" class="btn btn-sm btn-flat btn-success trash-multi" title="Edit" >
                            <i class="fa fa-wrench"></i> Edit</a> 
                        </td>
                        <td>
                          <a id="<?php echo $rw->p_id; ?>" class="product_bin btn btn-sm btn-flat btn-danger trash-multi"  title="Remove">
                          <i class="fa fa-trash"></i> Remove</a> 
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>    
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
    </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
  </footer>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="<?php echo base_url('/admin_template1/') ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('/admin_template1/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url('/admin_template1/') ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('/admin_template1/') ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('/admin_template1/') ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('/admin_template1/') ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('/admin_template1/') ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('/admin_template1/') ?>dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>

<script type="text/javascript">  
$(function(){        
 
    var highlight_bgColor="#C0C1BC";     // กำหนดสี highlight ที่ต้องการ
    $("#css_all_check").click(function(){ // เมื่อคลิกที่ checkbox ตัวควบคุม  
        if($(this).prop("checked")){ // ตรวจสอบค่า ว่ามีการคลิกเลือก  
            $(".css_data_item").prop("checked",true); // กำหนดให้ เลือก checkbox ที่ต้องการ ที่มี class ตามกำหนด   
            $(".css_tr_data").css("background-color",highlight_bgColor); // กำหนดสีพื้นหลังของแถวที่เลือก
        }else{ // ถ้าไม่มีการ ยกเลิกการเลือก  
            $(".css_data_item").prop("checked",false); // กำหนดให้ ยกเลิกการเลือก checkbox ที่ต้องการ ที่มี class ตามกำหนด              
            $(".css_tr_data").each(function(k_data,v_data){ // วนหลูปแถวที่มี class ชื่อ css_tr_data
                var old_bgColor=$(this).attr("bgcolor");        // เรียกสีพื้นหลังเดิมมาเก็บไว้ในตัวแปร         
                old_bgColor=(old_bgColor!=undefined)?old_bgColor:"";    // กำหนดค่าสีพื้นหลังเดิม กรณีไม่มี หรือมีค่า       
                $(this).css("background-color",old_bgColor); // ยกเลือกสีพื้นหลัง หรือกำหนดเป็นค่าเดิม
            });             
        }  
    });       
    $(".css_data_item").click(function(){  // เมื่อคลิก checkbox  ใดๆ       
        var parentTR=$(this).parents(".css_tr_data");  // หาแถวที่ checkbox นั้นๆที่คลิก อยู่ด้านใน
        var old_bgColor=parentTR.attr("bgcolor"); // เรียกสีพื้นหลังเดิมมาเก็บไว้ในตัวแปร
        old_bgColor=(old_bgColor!=undefined)?old_bgColor:""; // กำหนดค่าสีพื้นหลังเดิม กรณีไม่มี หรือมีค่า
        if($(this).prop("checked")){
            parentTR.css("background-color",highlight_bgColor); // กำหนดสีพื้นหลังของแถวที่เลือกทั้งหมด
        }else{
            parentTR.css("background-color",old_bgColor); // ยกเลือกสีพื้นหลัง หรือกำหนดเป็นค่าเดิม
        }
    });  
 
    $("#form_checkbox1").submit(function(){ // เมื่อมีการส่งข้อมูลฟอร์ม  
        if($(".css_data_item:checked").length==0){ // ถ้าไม่มีการเลือก checkbox ใดๆ เลย  
            alert("NO");  
            return false;     
        }  
    });     
   
});  
</script>
</body>
</html>

<script type="text/javascript">
  $(document).ready(function() {
        $(document).on('click','.pro_detail',function(evan) {
          evan.preventDefault();
          // alert ($(this).attr('id'));
          var id = $(this).attr('id');
           $.ajax({
                method: "POST",
                url: "<?php echo site_url('Backend_control/pro_detail') ?>",
                dataType: 'json',
                data: {id:id},              
                success: function($result) {
                    console.log($result);
                    let html = "";
                        $.each($result, function(i, v){
                          html += '<div class="content1"> '
                                    + '<p>'
                                      + '<center>'
                                          + '<img src="<?php echo base_url('/imag/') ?>'+v["main_pic_pic"]+'" height="150" width="250" alt="Image" class="">'
                                      + '</center>'
                                    + '</p> '
                                    + '<p>'
                                      + '<b>Product Code : '+v["p_idproduct"]
                                    + '</p> '
                                    + '<p>'
                                      + '<b>Name : '+v["p_name_eng"]
                                    + '</p> '
                                    + '<p>'
                                      + '<b>Description : '+v["p_taste"]
                                    + '</p> '
                                    + '<p>'
                                      + '<b>Size : '+v["p_size"]+' ('+v["pz_name"]+')</p> '
                                    + '<p>'
                                      + '<b>Barcode : '+v["p_barcode"]
                                    + '</p> '
                                    // + '<p>'
                                    //   + '<b>เลขรับรองฮาลาล : '+v["h_halal_number"]
                                    // + '</p> '
                                    // + '<p>'
                                    //   + '<b>วันที่รับรองฮาลาล : '+v["h_receive"]
                                    // + '</p> '
                                    // + '<p>'
                                    //   + '<b>วันหมดอายุฮาลาล : '+v["h_expire"]
                                    // + '</p> '
                                    // + '<p>'
                                    //   + '<b>สถานะผลิตภัณฑ์ : '+v["s_status"]
                                    // + '</p> '

                                    // $date_time = date("m/d/Y");
                                    if (v["p_status"] == "1") {
                                      html  += '<p>'
                                              + '<b>Halal Number : '+v["h_halal_number"]
                                            + '</p> '
                                            + '<p>'
                                              + '<b>Start Date : '+v["h_receive"]
                                            + '</p> '
                                            + '<p>'
                                              + '<b>Expired Date : '+v["h_expire"]
                                            + '</p> '
                                            + '<p>'
                                              + '<b>Status : '+v["s_status_eng"]
                                            + '</p> ';
                                    }else{
                                      html  += '<p>'
                                              + '<b>Status : '+ v["s_status_eng"]
                                            + '</p> ';
                                    }

                                    if (v["p_explain"] == '') {
                                          html += '<p>'
                                                  + '<b>Description : - </p> ';
                                    }else{
                                          html += '<p>'
                                                  + '<b>Description : '+v["p_explain"]
                                                + '</p> ';
                                    }
                                  html += '<p>'
                                      + '<b>Inspector : '+v["inves_inspector"]
                                    + '</p> '
                                  + '</div>'

                                    + '<div class="modal-footer">'
                                      + '<div class="text-center"> '
                                          // + '<button type="submit" id="clossmodal" class="bt11" style="background-color: #43AF52">ยืนยัน</button> '
                                          + '<button href ="#" data-dismiss="modal" class="btx" style="background-color: red">Close</button>'
                                      + '</div>'
                                    + '</div>';
                        });

                        // $('#modal_accident').modal('toggle');
                        // $('#myModal_confirm').modal('show');
                        $('.edit_ingredient').empty();
                        $('.edit_ingredient').append(html);
                }
             });
        })
    });
</script>

<script type="text/javascript">
  $(document).ready(function() {
        $(document).on('click','.product_bin',function(evan) {
          evan.preventDefault();
          // alert ($(this).attr('id'));
          var id = $(this).attr('id');
           $.ajax({
                method: "POST",
                url: "<?php echo site_url('Backend_control/product_bin') ?>",
                dataType: 'json',
                data: {id:id},
                success: function($result) {
                  console.log($result);
                    let html = "";
                        $.each($result, function(i, v){
                          html += '<tr class="css_tr_data" id="'+ v["p_id"] +'">'
                            + '<td>'
                              + '<input name="checkdel[]" type="checkbox" class="css_data_item" id="'+ v["p_id"] +'" value="'+ v["p_id"] +'">' 
                            + '</td>'
                            + '<td>'+ v["p_id"] +'</td>'
                            + '<td>'+ v["p_idproduct"] +'</td>'
                            + '<td>'+ v["p_name"] +'</td>'
                            + '<td>'+ v["p_brand"] +'</td>'
                            + '<td>'+ v["p_barcode"] +'</td>'
                            + '<td>'+ v["p_taste"] +'</td>'
                            + '<td>'+ v["s_status"] +'</td>'
                            + '<td>'+ v["inves_inspector"] +'</td>'
                            + '<td>'
                              + '<a id="'+ v["p_id"] +'" class="pro_detail btn btn-sm btn-flat btn-success trash-multi" title="Detail" data-toggle="modal" data-target="#pro_detail">'
                                + '<i class="fa fa-eye"></i> Detail</a> '
                            + '</td>'
                            + '<td>'
                            + '<a id="" href ="<?php echo site_url("Backend_control/product_edit/"); ?>'+ v["p_id"] +'"'
                              + '<a id="'+ v["p_id"] +'" class="btn btn-sm btn-flat btn-success trash-multi" title="แก้ไข">'
                                + '<i class="fa fa-wrench"></i> แก้ไข</a> '
                            + '</td>'
                            + '<td>'
                              + '<a id="'+ v["p_id"] +'" class="product_bin btn btn-sm btn-flat btn-danger trash-multi"  title="ย้ายลงถังขยะ">'
                              + '<i class="fa fa-trash"></i> ย้ายลงถังขยะ</a> '
                            + '</td>'
                          + '</tr>';

                          console.log(i, v);
                        });

                        // $('#modal_accident_accident').modal('toggle');
                        $('#myModal_success').modal('show');
                        $('.table tbody').empty();
                        $('.table tbody').append(html);
                }
             });
        })
    });
</script>

<script type="text/javascript">
  $(document).ready(function() {
        $(document).on('click','.product_bin_all',function(evan) {
          evan.preventDefault();
          // alert ($(this).attr('id'));
          var id = $(this).attr('id');
           $.ajax({
                method: "POST",
                url: "<?php echo site_url('Backend_control/product_bin_all') ?>",
                dataType: 'json',
                data: $("#form_bin_all").serialize(),
                success: function($result) {
                    console.log($result);
                    let html = "";
                    $.each($result, function(i, v){
                               html += '<tr class="css_tr_data" id="'+ v["p_id"] +'">'
                            + '<td>'
                              + '<input name="checkdel[]" type="checkbox" class="css_data_item" id="'+ v["p_id"] +'" value="'+ v["p_id"] +'">' 
                            + '</td>'
                            + '<td>'+ v["p_id"] +'</td>'
                            + '<td>'+ v["p_idproduct"] +'</td>'
                            + '<td>'+ v["p_name"] +'</td>'
                            + '<td>'+ v["p_brand"] +'</td>'
                            + '<td>'+ v["p_barcode"] +'</td>'
                            + '<td>'+ v["p_taste"] +'</td>'
                            + '<td>'+ v["s_status"] +'</td>'
                            + '<td>'+ v["inves_inspector"] +'</td>'
                            + '<td>'
                              + '<a id="'+ v["p_id"] +'" class="pro_detail btn btn-sm btn-flat btn-success trash-multi" title="Detail" data-toggle="modal" data-target="#pro_detail">'
                                + '<i class="fa fa-eye"></i> Detail</a> '
                            + '</td>'
                            + '<td>'
                            + '<a id="" href ="<?php echo site_url("Backend_control/product_edit/"); ?>'+ v["p_id"] +'"'
                              + '<a id="'+ v["p_id"] +'" class="btn btn-sm btn-flat btn-success trash-multi" title="แก้ไข">'
                                + '<i class="fa fa-wrench"></i> แก้ไข</a> '
                            + '</td>'
                            + '<td>'
                              + '<a id="'+ v["p_id"] +'" class="product_bin btn btn-sm btn-flat btn-danger trash-multi"  title="ย้ายลงถังขยะ">'
                              + '<i class="fa fa-trash"></i> ย้ายลงถังขยะ</a> '
                            + '</td>'
                          + '</tr>';

                          console.log(i, v);
                        });

                  // $('#modal_accident_accident').modal('toggle');
                  $('#myModal_success').modal('show');
                  $('.table tbody').empty();
                  $('.table tbody').append(html);
                }
             });
        })
    });
</script>



