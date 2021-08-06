	<body>	
		<div class="gtco-loader"></div>
		<div id="page">
			<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(<?php echo base_url('/api_front1/') ?>images/bg.jpg)" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="gtco-container">
					<div class="row">
						<div class="col-md-12 col-md-offset-0 text-left">
							<div class="row row-mt-15em">
								<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
									<!-- <span class="intro-text-small">Hand-crafted by <a href="<?php echo base_url('/api_front1/') ?>http://gettemplates.co" target="_blank">GetTemplates.co</a></span> -->
									<h1 class="cursive-font">Forgot Password</h1>	
								</div>
								<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
									<div class="form-wrap">
										<div class="tab">									<div class="tab-content">
												<div class="tab-content-inner active" data-content="signup">
													<h3 class="cursive-font">ลืมรหัสผ่าน <font style="font-size: 12px;">(สำหรับเจ้หน้าที่)</font></h3>
													<form id="form_forgot" method="post" action="<?php echo site_url("frontend_control/login") ?>">
														<div class="row form-group">
															<div class="col-md-12">
																<label for="text-start">อีเมลล์ <font color="red">*</font></label>
																<input type="text" id="email" name="email" class="th form-control" onblur="onblur_email()">
															</div>
														</div>
														<div class="row form-group">
															<div class="col-md-12">
																<label for="text-start">เลขบัตรประจำตัวประชาชน <font color="red">*</font></label>
																<input type="text" id="idcard" name="passport" class="th form-control" 
																onblur="onblur_Idcard()">
															</div>
														</div>
														
														<div class="row form-group">
															<div class="col-md-12">
																<input type="submit" class="forgot btn btn-primary btn-block" value="ยืนยัน">
															</div>
														</div>
          												<div class="text-center">
															<a href="<?php echo site_url("frontend_control") ?>">เข้าสู่หน้าเว็บ</a> | 
															<a href="<?php echo site_url("frontend_control/login") ?>">เข้าสู่ระบบ</a>
														</div>
													</form>	
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
		</div>

		<div class="gototop js-top">
			<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
		</div>
		
		<!-- jQuery -->
		<script src="<?php echo base_url('/api_front1/') ?>js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<script src="<?php echo base_url('/api_front1/') ?>js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="<?php echo base_url('/api_front1/') ?>js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script src="<?php echo base_url('/api_front1/') ?>js/jquery.waypoints.min.js"></script>
		<!-- Carousel -->
		<script src="<?php echo base_url('/api_front1/') ?>js/owl.carousel.min.js"></script>
		<!-- countTo -->
		<script src="<?php echo base_url('/api_front1/') ?>js/jquery.countTo.js"></script>

		<!-- Stellar Parallax -->
		<script src="<?php echo base_url('/api_front1/') ?>js/jquery.stellar.min.js"></script>

		<!-- Magnific Popup -->
		<script src="<?php echo base_url('/api_front1/') ?>js/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo base_url('/api_front1/') ?>js/magnific-popup-options.js"></script>
		
		<script src="<?php echo base_url('/api_front1/') ?>js/moment.min.js"></script>
		<script src="<?php echo base_url('/api_front1/') ?>js/bootstrap-datetimepicker.min.js"></script>


		<!-- Main -->
		<script src="<?php echo base_url('/api_front1/') ?>js/main.js"></script>

	</body>
</html>

<script type="text/javascript">
  function onblur_email(){
    $("#email + span.require").remove();  
    $(".th ").each(function(){ 
        var name = $(this).attr("name")
        var val =$(this).val()
        if (name=="email") {
          var check_email = check_email_address(val)
          if (check_email==false) {
              $(this).after("<span class='require' style ='color:red'>*รูปแบบE-Mailไม่ถูกต้อง</span>")
          }
        }
    });
  }
  function onblur_Idcard(){
    $("#idcard + span.require").remove();  
    $(".th ").each(function(){ 
        var name = $(this).attr("name")
        var val =$(this).val()
        if (name=="passport") {
          var check_idcard = check_ad_idcard(val)
          if (check_idcard==false) {
              $(this).after("<span class='require' style ='color:red'>*ตรวจสอบเลขบัตรประชาชนให้ถูกต้อง</span>")
          }else{              
          }
        }
    });
  }
</script>

<script type="text/javascript">  
      $(document).ready(function() {
        $("#form_forgot").submit(function(evan) {
          evan.preventDefault();
            $(".th + span.require").remove();  
            $(".th ").each(function(){
                var name = $(this).attr("name")
                var val =$(this).val()
               //เช็คค่าว่าง
                if (val=="") {
                    $(this).after("<span class='require'style ='color:red'>*จำเป็นต้องกรอก</span>")
                }else{
                    if (name=="email") {
                      var check_email = check_email_address(val)
                      if (check_email==false) {
                          $(this).after("<span class='require' style ='color:red'>*รูปแบบE-Mailไม่ถูกต้อง</span>")
                      }
                    }
                    if (name=="passport") {
                      var check_idcard = check_ad_idcard(val)
                      if (check_idcard==false) {
                          $(this).after("<span class='require' style ='color:red'>*ตรวจสอบเลขบัตรประชาชนให้ถูกต้อง</span>")
                      }
                    }
                }
            });
            if($(".th ").next().is(".require")==false){
                  $.ajax({
                         type: "POST",
                         url: "<?php echo site_url('frontend_control/chek_forgot') ?>",
                         data: $("#form_forgot").serialize(),
                         success: function($result) {
                          	console.log($result);
                          	if ($result=='0') {
                                    $('#myModal_forgot').modal('show');
                              }else{
                                    $('#myModal_forgot_uplode').modal('show');
                                    $.ajax({
                                       type: "POST",
                                       url: "<?php echo site_url('frontend_control/chek_forgot1') ?>",
                                       data: $("#form_forgot").serialize(),
                                       success: function($result) {
                                            console.log($result);
                                            if ($result=='0') {
                                                $('#myModal_forgot').modal('show');
                                            }else if ($result=='false_mail') {
                                            	console.log("aaaaaaaa");
                                                // $('#myModal_forgot1').modal('show');
                                            }else{
                                            	console.log("aaaaaaaa");
                                                // document.getElementById("form_forgot").submit();
                                            }
                                       }
                                    });
                              }
                         }
                      });
            }else{
                return false;  
            }
        });
    });
</script>
<script>
    function check_email_address(email_address)
    {
      var emailFilter=/^.+@.+\..{2,3}$/;
      if (!(emailFilter.test(email_address))) { 
          return false;
      }
    }
    function check_ad_idcard(idcard)
    {
      if(idcard.length != 13) return false;
      for(i=0, sum=0; i < 12; i++)
        sum += parseFloat(idcard.charAt(i))*(13-i); 
        // console.log(sum);
        if((11-sum%11)%10!=parseFloat(idcard.charAt(12)))
          return false; return true;;
    }
</script>