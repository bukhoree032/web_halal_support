	<style type="text/css">
		.aaa{
			margin: 0px !important;
		}
	</style>
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
									<h1 class="cursive-font">Login for Admin</h1>	
								</div>
								<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
									<div class="form-wrap">
										<div class="tab">									<div class="tab-content">
												<div class="tab-content-inner active" data-content="signup">
													<h3 class="cursive-font">Login <font style="font-size: 12px;">(staff only)</font></h3>
													<form id="form_login" method="post" action="<?php echo site_url("Backend_control") ?>">
														<div class="row form-group">
															<div class="col-md-12">
																<label for="text-start">E-mail <font color="red">*</font></label>
																<input type="text" id="" name="user" class="th aaa form-control">
															</div>
														</div>
														<div class="row form-group">
															<div class="col-md-12">
																<label for="text-start">Password <font color="red">*</font></label>
																<input type="password" id="" name="password" class="th aaa form-control">
															</div>
														</div>
														
														<div class="row form-group">
															<div class="col-md-12">
																<input type="submit" class="login btn btn-primary btn-block" value="Login">
															</div>
														</div>
          												<div class="text-center">
															<a href="<?php echo site_url("frontend_control") ?>">Back</a> | 
															<a href="<?php echo site_url("frontend_control/forgot") ?>">Foget Password</a> | 
															<a href="<?php echo site_url("frontend_control/register") ?>">Register</a>
															<!-- <a href="<?php echo site_url("frontend_control/aaa") ?>">ลงทะเบียน</a> -->
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
  $(document).ready(function() {
        $(document).on('click','.login',function(evan) {
          evan.preventDefault();
          // alert ($(this).attr('id'));
          // var id = $(this).attr('id');
          $(".th + span.require").remove();  
            $(".th ").each(function(){

              var name = $(this).attr("name")
                var val =$(this).val()

               //เช็คค่าว่าง
               if (val=="") {
                    $(this).after("<span class='require'style ='color:red'>*จำเป็นต้องกรอก</span>")
               }
            });

            if($(".th ").next().is(".require")==false){
                  $.ajax({
		                method: "POST",
		                url: "<?php echo site_url('frontend_control/check_login') ?>",
		                dataType: 'json',
		                data: $("#form_login").serialize(),
		                success: function($result) {
		                     console.log($result);
		                     if ($result=='0') {
		                     	// console.log("ระงับ");
		                        $('#myModal_login_ban').modal('show');
		                     	// console.log("ยังไม่ยืนยัน");
		                        // $('#myModal_login_confirm').modal('show');
		                     }else if ($result=='1'){
		                     	console.log("ปกติ");
		                        document.getElementById("form_login").submit();
		                     }else if ($result=='2'){
		                     	// console.log("ไม่ถูก");
		                        $('#myModal_login_false').modal('show');
		                     	// console.log("ระงับ");
		                        // $('#myModal_login_ban').modal('show');
		                     }else if ($result=='3'){
		                     	// console.log("ข้อมูลอยู่ในถังขยะ");
		                        $('#myModal_login_false').modal('show');
		                     	// console.log("ไม่ถูก");
		                        // $('#myModal_login_false').modal('show');
		                     }
		                }
		             });
            }else{  
                return false;  
            }


           // $.ajax({
           //      method: "POST",
           //      url: "<?php echo site_url('frontend_control/check_login') ?>",
           //      dataType: 'json',
           //      data: $("#form_login").serialize(),
           //      success: function($result) {
           //           console.log($result);
           //           if ($result=='0') {
           //           	// console.log("ยังไม่ยืนยัน");
           //               $('#myModal_login_confirm').modal('show');
           //           }else if ($result=='1'){
           //           	console.log("ปกติ");
           //              document.getElementById("form_login").submit();
           //           }else if ($result=='2'){
           //           	// console.log("ระงับ");
           //              $('#myModal_login_ban').modal('show');
           //           }else if ($result=='3'){
           //           	// console.log("ไม่ถูก");
           //              $('#myModal_login_false').modal('show');
           //           }
           //      }
           //   });
        })
    });
</script>
