	<style type="text/css">
		.form-control1 {
		    box-shadow: none;
		    /* background: transparent; */
		    border: 2px solid rgba(241, 163, 11, 0.67);
		    height: 46px;
		    font-size: 16px;
		    font-weight: 300;
		    padding-left: 15px;
		    padding-right: 300px;
		    display: block;
		    /* margin: -27px 169px; */
		    border-radius: 20px; */
		}
		.form-control2 {
		    box-shadow: none;
		    /* background: transparent; */
		    border: 2px solid rgba(241, 163, 11, 0.67);
		    /*height: 46px;*/
		    font-size: 16px;
		    font-weight: 300;
		    padding-left: 15px;
		    /*padding-right: 300px;*/
		    display: block;
		    /* margin: -27px 169px; */
		    border-radius: 20px;
    		padding-right: 206px
		}
		.a{
   		 	padding-top: 7px;
		}
		input[type="file"] {
		    display: block;
		    padding-right: 102px;
		    padding-left: -66px;

		}
		.gtco-cover.gtco-cover-sm {
  			height: 600px;
		}
	</style>
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(<?php echo base_url('/api_front1/') ?>images/bg.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">

					<div class="row row-mt-15em">
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1 class="cursive-font">Say hello!</h1>	
						</div>						
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-6 animate-box">
					<h3>ติดต่อสอบถาม/แนะนำส่วนผสมหรือผลิตภัณฑ์</h3>
					<form id="form_contact" action="<?php echo site_url('Frontend_control/contact') ?>" name="form" method="post">
					<!-- <form id="form_contact" method="post" action="#"> -->
						<div class="row form-group">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<select class="th form-control1 " id=""  name="contact_subject" style="color: #979696">
		                            <option value="" selected>เรื่องร้องเรียน</option>';
			                              <option value="ติดต่อสอบถาม">ติดต่อสอบถาม</option>
			                              <option value="แนะนำส่วนผสมหรือผลิตภัณฑ์">แนะนำส่วนผสมหรือผลิตภัณฑ์</option>
			                              <option value="แจ้งปัญหา">แจ้งปัญหา</option>
		                        </select>
								<!-- <label class="sr-only" for="name">เรื่อง</label>
								<input type="text" id="contact_subject" name="contact_subject" class="th form-control" placeholder="เรื่องร้องเรียน"> -->
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<label class="sr-only" for="name">ชื่อ</label>
								<input type="text" id="name" name="name" class="th form-control1" placeholder="ชื่อ">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<label class="sr-only" for="surname">นามสกุล</label>
								<input type="text" id="surname" name="surname" class="th form-control1" placeholder="นามสกุล">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<label class="sr-only" for="email">อีเมล</label>
								<input type="text" id="email" name="email" class="th form-control1" placeholder="อีเมล">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<label class="sr-only" for="name">เบอร์โทรศัพท์</label>
								<input type="text" id="numberphone" name="numberphone" class="th form-control1" placeholder="เบอร์โทรศัพท์">
							</div>
						</div>

						<!-- <div class="row form-group">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<label class="sr-only" for="name">รายละเอียด</label>
								<input type="text" id="numberphone" name="message" class="th form-control1 message" placeholder="รายละเอียด">
							</div>
						</div> -->

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="message">รายละเอียด / ข้อความ</label>
								<textarea name="message" id="message" name="message" cols="30" rows="5" class="th form-control2" placeholder="รายละเอียด / ข้อความ"></textarea>
							</div>
						</div>
						
						<div class="row form-group">
							<div class="col-md-12">
		                        <input type="file" id="i_upload_fill" class="a form-control1 ustom-file-input text-center center-block file-upload img" name="i_upload_fill" multiple="multiple">
		                        <br>
		                        <center>
		                          <img src="<?php echo base_url('/admin_template1/pic/icon.jpg') ?>" class="avatar  rounded-circle img-thumbnail" alt="avatar" style="width: 200px; height: 150px">
		                        </center>
	                      	</div>
                      	</div>
						<div class="form-group">
							<input type="submit" value="ส่งข้อความ" class="btn btn-primary">
						</div>
					</form>		
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">
					<div class="gtco-contact-info">
						<h3>ข้อมูลติดต่อ</h3>
						<ul>
							<li class="address">133 ถนน เทศบาล 3 สะเตง<br> อำเภอเมืองยะลา ยะลา 95000</li>
							<li class="phone"><a href="#">0842631060</a></li>
							<li class="email"><a href=">#">Kanmeeta.b@yru.ac.th</a></li>
							<!-- <li class="url"><a href="<?php echo base_url('/api_front1/') ?>http://FreeHTML5.co">FreeHTML5.co</a></li> -->
						</ul>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>

	
	<footer id="gtco-footer" role="contentinfo" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row row-pb-md">

				

				
				<div class="col-md-12 text-center">
					<div class="gtco-widget">
						<h3>ติดต่อเรา</h3>
						<ul class="gtco-quick-contact">
							<li><a href="<?php echo base_url('/api_front1/') ?>#"><i class="icon-phone"></i> 0842631060</a></li>
							<li><a href="<?php echo base_url('/api_front1/') ?>#"><i class="icon-mail2"></i> Kanmeeta.b@yru.ac.th</a></li>
							<li><a href="<?php echo base_url('/api_front1/') ?>#"><i class="icon-user"></i> มหาวิทยาลัยราชภัฏยะลา</a></li>
						</ul>
					</div>
					<div class="gtco-widget">
						<h3>Social</h3>
						<ul class="gtco-social-icons">
							<li><a href="https://twitter.com/KANMEETA"><i class="icon-twitter"></i></a></li>
							<li><a href="https://www.facebook.com/Kanmeeta"><i class="icon-facebook"></i></a></li>
							<li><a href="<?php echo base_url('/api_front1/') ?>#"><i class="icon-linkedin"></i></a></li>
							<li><a href="<?php echo base_url('/api_front1/') ?>#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-12 text-center copyright">
					<p><small class="block">&copy; คณะวิทยาศาสตร์เทคโนโลยีและการเกษตร</small> 
						<small class="block">มหาวิทยาลัยราชภัฏยะลา จังหวัดยะลา</small></p>
				</div>

			</div>

			

		</div>
	</footer>
	<!-- </div> -->

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
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(".file-upload").on('change', function(){
      readURL(this);
    });
  });
</script>
<script> //อัพโหลดภาพแสดงชื่อภาพ
  // Add the following code if you want the name of the file appear on select
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });
</script>

<script type="text/javascript">  
      $(document).ready(function() {
      	$.ajaxSetup({
	        cache: false,
	        contentType: false,
	        processData: false
	    }); 
        $("#form_contact").submit(function(evan) {
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
                    if (name=="numberphone") {
                      var check_telephon = check_ad_telephon(val)
                      if (check_telephon==false) {
                          $(this).after("<span class='require' style ='color:red'>*ตรวจสอบเบอร์โทรศัพท์ให้ถูกต้อง</span>")
                      }
                    }
                    // if (name=="contact_subject") {
                    //   var check_contact_subject = check_subject(val)
                    //   if (check_contact_subject==false) {
                    //       $(this).after("<span class='require' style ='color:red'>*ตรวจสอบเบอร์โทรศัพท์ให้ถูกต้อง</span>")
                    //   }
                    // }
                    if (name=="contact_subject") {
                      	var check_contact_subject = check_subject(val)
                      	if (check_contact_subject==false) {
				       	  	// $(this).after("<span class='require' style ='color:red'>*รูปแบบE-Mailไม่ถูกต้อง</span>")
				       	}
			       }
                }
            });
            if($(".th ").next().is(".require")==false){
            	if ($("#i_upload_fill ").next().is(".require")!=false) {
		    		return false;
		    	}else{
	            	var formData = new FormData($(this)[0]);
	                $.post("<?php echo site_url('frontend_control/insert_contack') ?>",formData,function(data){
	                	console.log(data);
	                	if (data == "false_file") {
		                    $('#myModal_false').modal('show');
		                }else if (data == "false_insert") {
		                    $('#myModal_false').modal('show');
		                }else if (data == "true") {
		                    // alert("สำเร็จ")
		                    $('#myModal_success').modal('show');
		                }
	                 });
	            }
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
    function check_subject(m_title)
	{
		if (m_title=="แนะนำส่วนผสมหรือผลิตภัณฑ์") {
			$("#i_upload_fill + span.require").remove();
		    $("#i_upload_fill").each(function(){
		        $(this).each(function(){    
		            if($(this).val()==""){
		                $(this).after("<span class='require'style ='color:red'>*จำเป็นต้องกรอก</span>")
		            }
		        });
		    });
		}else{
			$("#i_upload_fill + span.require").remove();
		}
	}
</script>