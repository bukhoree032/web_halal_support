  <body>
		
		<div class="gtco-loader"></div>
		
		<div id="page">

			<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(<?php echo base_url('/api_front1/') ?>images/bg.jpg)" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="gtco-container">
					<div class="row">
						<div class="col-md-12 col-md-offset-0 text-left">

							<div class="row row-mt-15em">
								<div class="col-md-2 mt-text animate-box" data-animate-effect="fadeInUp">
									<!-- <span class="intro-text-small">Hand-crafted by <a href="<?php echo base_url('/api_front1/') ?>http://gettemplates.co" target="_blank">GetTemplates.co</a></span> -->
									<!-- <h1 class="cursive-font">Register for Admin</h1>	 -->
								</div>
								<div class="col-md-9 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
									<div class="form-wrap">
										<div class="tab">
											
											<div class="tab-content">
												<div class="tab-content-inner active" data-content="signup">
													<h3 class="cursive-font text-center"><i class="fas fa-edit" style="color: white; padding: 6px;font-size: 25px"></i>ลงทะเบียน <font style="font-size: 12px;">(สำหรับเจ้หน้าที่)</font></h3>
													<form id="form_rigister" method="post" action="<?php echo site_url("frontend_control") ?>">
                            <!-- เมือกด submit จะส่งไปบรรทัด 201 -->
														<div class="row form-group">
															<div class="col-md-6">
																<label for="text-start">ชื่อ <font color="red">*</font></label>
																<input type="text" id="" name="name" class="th form-control">
															</div>
														
															<div class="col-md-6">
																<label for="text-start">นามสกุล <font color="red">*</font></label>
																<input type="text" id="" name="surname" class="th form-control">
															</div>
														</div>
														<div class="row form-group">
															<div class="col-md-4">
																<label for="text-start">อีเมล <font color="red">*</font></label>
																<input type="text" id="email" name="email" class="th form-control" onblur="onblur_email()">
															</div>
														
															<div class="col-md-4">
																<label for="text-start">รหัสผ่าน <font color="red">*</font></label>
																<input type="text" id="password" name="password" class="th form-control" 
																onblur="onblur_password()">
															</div>
															<div class="col-md-4">
																<label for="text-start">ยืนยันรหัสผ่าน <font color="red">*</font></label>
																<input type="text" id="password_confrim" name="password_confrim" class="th form-control"
																onblur="onblur_password_confrim()">
															</div>
														</div>
														<div class="row form-group">
															<div class="col-md-4">
																<label for="text-start">เลขบัตรประชาชน <font color="red">*</font></label>
																<input type="text" id="idcard" name="passport" class="th form-control" 
																onblur="onblur_Idcard()">
															</div>
														
															<div class="col-md-4">
																<label for="text-start">เบอร์โทรศัพท์ <font color="red">*</font></label>
																<input type="text" id="numberphone" name="numberphone" class="th form-control"
																onblur="onblur_telephon()">
															</div>

															<div class="col-md-4">
																<label for="text-start">ตำแหน่ง <font color="red">*</font></label>
																<input type="text" id="" name="duty" class="th form-control">
															</div>
														</div>
														
														<div class="row form-group">
															<div class="col-md-12">
																<input type="submit" class="btn btn-primary btn-block" value="ลงทะเบียน">
															</div>

														</div>
														<font color="white">มีบันชีผู้ใช้แล้ว</font> <a href="<?php echo base_url('/api_front1/') ?>login.html">เข้าสู่ระบบ</a> 
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
  function onblur_password_confrim(){
    $("#password_confrim + span.require").remove();  
    $(".th ").each(function(){
        var name = $(this).attr("name")
        var val =$(this).val()
        if (name=="password") {
            check_ad_password_confrim(val)
        }     
    });
  }
  function onblur_password(){
    $("#password + span.require").remove();  
    $(".th ").each(function(){ 
        var name = $(this).attr("name")
        var val =$(this).val()
        if (name=="password") {
          var check_password = check_ad_password(val)
          if (check_password==false) {
              $(this).after("<span class='require' style ='color:red'>*รหัสผ่านต้องมีความยาวอย่างน้อย 8 ตัว</span>")
          }else{              
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
  function onblur_telephon(){
    $("#numberphone + span.require").remove();  
    $(".th ").each(function(){ 
        var name = $(this).attr("name")
        var val =$(this).val()
        if (name=="numberphone") {
          var check_telephon = check_ad_telephon(val)
          if (check_telephon==false) {
              $(this).after("<span class='require' style ='color:red'>*ตรวจสอบเบอร์โทรศัพท์ให้ถูกต้อง</span>")
          }else{
          }
        }
    });
  }
</script>

<script type="text/javascript">  
      $(document).ready(function() {
        $("#form_rigister").submit(function(evan) {
          // ดึงข้อมูลทั่งหมดในform ส่งไปบรรทัด227
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
                    if (name=="password") {
                      var check_password = check_ad_password(val)
                      if (check_password==false) {
                          $(this).after("<span class='require' style ='color:red'>*รหัสผ่านต้องมีความยาวอย่างน้อย 8 ตัว</span>")
                      }
                    }
                    if (name=="password") {
                        check_ad_password_confrim(val)
                    }  
                    if (name=="passport") {
                      // ดึงเลขบัตรส่งไปบรรทัด 298
                      var check_idcard = check_ad_idcard(val)
                      if (check_idcard==false) {
                          $(this).after("<span class='require' style ='color:red'>*ตรวจสอบเลขบัตรประชาชนให้ถูกต้อง</span>")
                      }
                    }
                    if (name=="numberphone") {
                      var check_telephon = check_ad_telephon(val)
                      if (check_telephon==false) {
                          $(this).after("<span class='require' style ='color:red'>*ตรวจสอบเบอร์โทรศัพท์ให้ถูกต้อง</span>")
                      }
                    }
                }
            });
            if($(".th ").next().is(".require")==false){
                  $.ajax({
                         type: "POST",
                         url: "<?php echo site_url('frontend_control/check_register') ?>",
                         data: $("#form_rigister").serialize(),
                         success: function($result) {
                            console.log($result);
                             if ($result=='false_true') {
                                document.getElementById("form_rigister").submit();
                             }else if ($result=='false_regieter') {
                             	alert("ไม่สำเร็จ");
                                // $('#myModal_register_admin_mail').modal('show');
                             }else  if ($result=='false_mail') {
                             	alert("emailซ่ำ");
                                // $('#myModal_register_admin_idcard').modal('show');
                             }else  if ($result=='false_m_id') {
                             	alert("รหัดซ่ำ");
                                // $('#myModal_register_admin_idcard').modal('show');
                             }else  if ($result=='false_passport') {
                             	alert("บัตร ปชช ซ่ำ");
                                // $('#myModal_register_admin_idcard').modal('show');
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
     function check_ad_password(password_confrim)
    {
      var patt = /^[0-9 a-z A-Z]{8}/
      if(!password_confrim.match(patt)){
        return false;
      }
    }
    function check_ad_password_confrim(password_confrim)
    {
      $("#password_confrim + span.require").remove();
      $("#password_confrim").each(function(){
          $(this).each(function(){    
              if($(this).val()!=password_confrim){
                  $(this).after("<span class='require'style ='color:red'>*ยืนยันรหัสผ่านไม่ถูกต้อง</span>")
              }
          });
      });
    }
    function check_ad_idcard(idcard)
    {
      if(idcard.length != 13) return false;
      for(i=0, sum=0; i < 12; i++)
        sum += parseFloat(idcard.charAt(i))*(13-i); 
        // console.log(sum);
        if((11-sum%11)%10!=parseFloat(idcard.charAt(12)))
          return false; return true;
    }
    function check_ad_telephon(telephon)
    {
      var patt = /^[0]{1}[0-9]{8}/
      if(telephon.match(patt)){
        if(telephon.length == 9) {
          return true;
        }else if(telephon.length == 10) {
          return true;
        }else{
          return false;
        }
      }else{
        return false;
      }
    }
</script>
