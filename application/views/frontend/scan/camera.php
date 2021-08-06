
<style type="text/css">
		.detail{
			padding: 30px;
			background-color: #FBB448;
			border-radius: 0px;
			width: 100%;
			margin-top: -60px;
			padding-bottom: 12px;
			color: white;

		}
		section.services {
			padding-bottom: 100px;
		}

		.services .service-item  a {
			text-decoration: none;
			color: #FBB448;
		    -webkit-transition: 0.5s;
		    -o-transition: 0.5s;
		    transition: 0.5s;
		}

		.services .service-item {
			text-align: center;
		}
		.services .service-item img {
			max-width: 100%;
			overflow: hidden;
			border: 5px solid #0000;
			/*border-radius: 50%;*/
			text-align: center;
		}

		.services .service-item h4 {
			margin-top: 20px;
			font-size: 22px;
			color: #121212;
			font-family: 'Spectral', serif;
			font-weight: 600;
			margin-bottom: 0px;
		}
		.pichalal{
			display: block;
			margin: -74px 206px;
		}
		.picharam{
			display: block;
			margin: -74px 101px;
		}
		.picsyubhat{
			display: block;
			margin: -74px -5px;
		}
		.search1{
			margin-top: -33px;
			background-color: #FBB448;
			color: white;
			margin-left: 39px;
		}
		.row1{
			margin-bottom: 35px;
		}
		.picbarcod{
			width: 35%;
		}
		.scanfont{
			margin-top: -264px;
		}
		.sc{
			font-size: 70px !important;
			font-family: 'Mitr', sans-serif !important;
		}
		#page {
 			 position: relative;
			  overflow-x: unset !important;
			  width: 100%;
			  height: 100%;
			  -webkit-transition: 0.5s;
			  -o-transition: 0.5s;
			  transition: 0.5s;
		}
		#my_camera{
			max-width: 0% !important;
			margin-left: 273px;
			margin-top: 22px;
		}
		.btnscan{
			padding-right: 179px;
			padding-left: 195px;
			padding-top: 10px;
			padding-bottom: 15px;
			margin-left:  306px;
			background-color: #FBB448 ;
			color: white;
			font-size: 20px;
		}
		#gtco-header h2 {
			margin: -40px;
		  	font-weight: 300;
		  	font-size: 50px;
		  	line-height: 1.5;
		  	margin-bottom: -20px;
		}
		.element-style{
		    width: 519px;
		    height: 402px;
		}
		.cammobile{
			display: none;
		}
	@media only screen and (max-width: 600px) {
		.camcom{
			display: none;
		}
		.cammobile{
			display: block;
		}
		.texth1 {
		    display: none !important;
		  }

		  .picbarcod{
		  	width: 68% !important;
		  	margin-top: 50px !important;
		  }
		  .gtco-heading{
		  	/*margin-bottom: -29px !important;*/
		  }
		  
		  .search1{
		  	display: block !important;
		  	margin: -43px 260px !important;
		  }
		  .form-control{
		  	margin: -20px auto !important;
		  }
		  .services {
		  	padding-bottom: 0px !important;
		  }
		  .show_i{
		  	display: block !important;
		  	margin: 73px auto !important;
		  	background-color: #FBB448 !important;
		  	border: 2px solid #FBB448 !important;
		  	color: white ;
		  }
		  hr{
		  	margin-top: -55px !important;
		  }
		  .bodban{
		  	margin-top: 327px !important;
		  }
		  .scancom{
		  	display: none;
		  }
		  .gtco-heading{
		  	margin-top: 63px !important;
		  }
		  .btn{
		  	color: white !important;
		  	font-size: 22px !important;
		  }
          /*#results { 
          	padding:20px; 
          	border:1px solid; 
          	background:#ccc; 
          }*/
	}
</style>

	<!-- <script type="text/javascript" src="<?php echo base_url('/api_front/1/') ?>webcam.min.js"></script> -->
<body>
	<div class="gtco-loader"></div>
	<div id="page">
		<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(<?php echo base_url('/api_front1/') ?>images/bg.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-center">
						<div class="row row-mt-15em">
							<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
								<div class="scancom">
								<p class="scanfont sc">สแกน</p>	
								<h2 class="cursive-font scanfont">บาร์โค้ด/ผลิตภัณฑ์</h2>
								</div>
								 <div class="service-item">
								 	<!-- คอม -->
								 	<div class="camcom">
									 	<form id="myform1" method="POST" action="<?php echo site_url('Frontend_control/scan1') ?>">
								            <div class="col-md-6">
								                <div class="element-style" id="my_camera"></div>
								                <br/>
								                <input type="hidden" name="image" class="image-tag">
								                <button onClick="take_snapshot_phone()" type="submit" class="btn  btnscan">สแกน</button>
								            </div>
								    	</form>
								 	</div>

								 	<!-- โทรศัพ -->
								 	<div class="cammobile">
								 		<form method="POST" action="<?php echo site_url('Frontend_control/scan1') ?>">
									        <div class="row">
									            <div class="col-md-1"></div>
									            <div class="col-md-10">
									                <center>
									                    <div id="results_phon">
									                        <a onClick="take_snapshot_phone()" href="#">
									                            <img src="<?php echo base_url('/api_front1/') ?>images/barcode.jpg" class="picbarcod">
									                        </a>
									                    </div>
									                </center>
									            </div>
									            <div class="col-md-12 text-center">
									                <br>
									                <a onClick="take_snapshot_phone()" class="btn btn-success">เปิดกล้อง</a>
									                <button class="btn btn-success">สแกน</button>
									            </div>

									            <div hidden="" class="col-md-12">
									                <input id="my_camera">
									                <br/>
									                <input type=button value="Take Snapshot" onClick="take_snapshot_phone()">
									                <input type="hidden" name="image" class="image-tag">
									            </div>
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
	<div id="gtco-counter" class="gtco-section">
		<div class="gtco-container bodban">

			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2 class="cursive-font primary-color">บทบัญญัติอิสลามเกี่ยวกับอาหาร</h2>
					<p>- อาหารฮาลาล หมายถึง อาหารที่อนุมัติ<br>
						- อาหารหะรอม หมายถึง อาหารที่ไม่อนุมัติ<br>
						- อาหารมัชบูฮฺ หรือ ชุบฮาต หมายถึง อาหารที่ยังมีข้อเคลือบแคลงหรือน่าสงสัย ที่ยังไม่สามารถระบุได้ว่าฮาลาลหรือหะรอม จนกว่าจะผ่านการตรวจสอบ พิสูจน์ และวินิจฉัย ซึ่งตามหลักการแล้วให้หลีกเลี่ยง<br>
						☀ ส่วนผสมอาหาร คือ ส่วนผสมอาหารที่เป็นเครื่องปรุง เช่น น้ำตาล เกลือ เป็นต้น<br>
						☀ ผลิตภัณฑ์ คือ อาหารที่ปรุงสำเร็จที่อยู่ในรูปแบบของขนมขบเคี้ยว เครื่องดื่ม เป็นต้น
					</p>
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
							<li><a href="<?php echo base_url('/api_front1/') ?>https://twitter.com/KANMEETA"><i class="icon-twitter"></i></a></li>
							<li><a href="<?php echo base_url('/api_front1/') ?>https://www.facebook.com/Kanmeeta"><i class="icon-facebook"></i></a></li>
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
		<a href="<?php echo base_url('/api_front1/') ?>#" class="js-gotop"><i class="icon-arrow-up"></i></a>
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

<script language="JavaScript">
    Webcam.set({
        width: 490,
        height: 390,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
  
    Webcam.attach( '#my_camera' );
  
    function take_snapshot_phone() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results_phon').innerHTML = '<img src="'+data_uri+'"/>';
        } );
    }
</script>

<!-- <script language="JavaScript">
    Webcam.set({
        width: 490,
        height: 390,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
  
    Webcam.attach( '#my_camera' );
</script> -->
<!-- <script type="text/javascript">
$(function(){
    setInterval(function(){ // เขียนฟังก์ชัน javascript ให้ทำงานทุก ๆ 30 วินาที
        Webcam.snap( function(data_uri1) {
            $(".image-tag").val(data_uri1);
            document.getElementById('results').innerHTML = '<img src="'+data_uri1+'"/>';
        } );
    },1000);
});
</script> -->



<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->
<script type="text/javascript">
  $(document).ready(function() {
      //เรียกใช้ evnet submit
      $("#form_scan").submit(function(evan) {
      evan.preventDefault();
          $(".scan + span.require").remove();
          // $("#other_accident + span.require").remove();
          $(".scan").each(function(){
              //ดึงnameจากform
              var name = $(this).attr("name")
              var val = $(this).val()
               //เช็คค่าว่าง
               if (val=="") {
                   $(this).after("<span class='require'style ='color:red'>*จำเป็นต้องกรอก</span>")
               }
            });
            if($(".scan").next().is(".require")==false){
                // alert ("ok");
                 $.ajax({
                    method: "POST",
                    url: "<?php echo site_url('Frontend_control/scan_sersh') ?>",
                    // dataType: 'json',
                    data: $("#form_scan").serialize(),                
                	success: function($result) {
	                    console.log($result);
	                    if ($result == "have") {
	                  		document.getElementById("form_scan").submit();
		                    // $('#myModal_scan_contact').modal('show');
	                    }else{
		                    $('#myModal_scan_false').modal('toggle');
		                    $('#myModal_scan_contact').modal('show');
	                    }
                    }
                  });
            }else{
                return false;  
            }
      });
    });
</script>