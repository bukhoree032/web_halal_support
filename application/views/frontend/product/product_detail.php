
	<style type="text/css">
		.fh5co-card-item .fh5co-text h1 {
		    /*font-size: 20px;*/
		    font-weight: 400;
		    margin: 0 0 10px 0;
		    color: #FBB448;
		}
		.asd {
		    /*font-size: 20px;*/
		    font-weight: 400;
		    margin: 0 0 10px 0;
    		color: #000;
		}
		.ddd {
		    font-size: 20px;
		    font-weight: 400;
		    margin: 0 0 10px 0;
    		/*color: red;*/
		}
		@media only screen and (max-width: 600px) {
  .texth1 {
    display: none !important;
  }
  .picbarcod{
  	width: 54% !important;
  	margin-top: 74px !important;
  }
  .gtco-heading{
  	margin-bottom: -29px !important;
  }
  .product1{
  	display: none !important;
  }
  .gtco-heading h2{
  	margin-top: 0px !important;
  }
  .tree{
  	margin-top: 200px !important;
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
  .kong{
  	display: none;
  }
  .pp{
  	display: none;
  }
  .detail1{
  	margin-top: 23px;
  }
  .p1{
  	font-size: 20px;
  }
  
	</style>

		<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(<?php echo base_url('/api_front1/') ?>images/bg.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-center">
						<div class="row row-mt-15em">
							<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
								<!-- <h1 class="cursive-font">All in good Ingredients!</h1>	
								 <div class="service-item">
			                        <a href="<?php echo base_url('/api_front1/') ?>halal_ingredients.html">
			                        <img src="<?php echo base_url('/api_front1/') ?>images/barcode.jpg" class="picbarcod">
			                        </a>
			                    </div> -->

			                    <h1 class="cursive-font texth1">Detail Product</h1>	
								 <div class="service-item">
			                        <a href="<?php echo site_url('/frontend_control/scan') ?>">
			                        <img src="<?php echo base_url('/api_front1/') ?>images/barcode.jpg" class="picbarcod">
			                        </a>
			                    </div>

							</div>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</header>

	
	
	<?php foreach ($data_show as $rw) { ?>
		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
						<h1 class="cursive-font primary-color">รายละเอียดผลิตภัณฑ์</h1>
						<div class="pp">
						<p>  ถ้าไม่อยากเสียเงินเพื่อชีวิตที่ไม่มีคุณค่า เราไม่ควรเสียเงินไปกับอาหารขยะที่ไม่มีคุณค่าเหมือนกัน</p>
						</div>
					</div>
				</div>
				<div class="row">
					
					<div class="col-lg-12 col-md-12 col-sm-12 detail1">

						
						<a class="fh5co-card-item">
						<div class="col-lg-12 col-md-12 col-sm-12">
						<br>
							<div class="fh5co-text">
								<center>
									<h1><?php echo $rw->p_name;?></h1>
								</center>
							</div>
						<br>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<center>
								<img src="<?php echo base_url('/imag/') ?><?php echo $rw->main_pic_pic;?>" height="300" width="300" alt="Image" class="">
							</center>
							<br>
							<br>
							<!-- <?php foreach ($show_p_pic as $rw1) { ?> -->
								<!-- <div class="col-lg-3 col-md-3 col-sm-3">
									<img src="<?php echo base_url('/imag/') ?><?php echo $rw->main_pic_pic;?>" height="100" width="100" alt="Image" class="">
								</div> -->
							<!-- <?php } ?> -->
						</div>
						<!-- <div class="col-lg-2 col-md-2 col-sm-">
							<img src="<?php echo base_url('/imag/') ?><?php echo $rw->main_pic_pic;?>" alt="Image" class="">
						</div> -->
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="asd">
									<p><b>รหัสผลิตภัณฑ์	 :</b> <?php echo $rw->p_idproduct;?></p>
									<p><b>ชื่อผลิตภัณฑ์	:</b> <?php echo $rw->p_name;?></p>
								   	<p><b>รสชาติ :</b> <?php echo $rw->p_taste;?></p>
								   	<p><b>ขนาดผลิตภัณฑ์ :</b> <?php echo $rw->p_size;?> (<?php echo $rw->pz_name;?>)</p>
								   	<p><b>เลขบาร์โค้ด :</b> <?php echo $rw->p_barcode;?></p>

								   	<?php 
								   	$p_status = $rw->p_status;
								   	if ($p_status == "1") { ?>
									   	<p><b>เลขรับรองฮาลาล :</b> <?php echo $rw->h_halal_number;?></p>
									   	<p><b>วันที่รับรองฮาลาล :</b> <?php echo $rw->h_receive;?></p>
									   	<p><b>วันหมดอายุฮาลาล :</b> <?php echo $rw->h_expire;?></p>
									   	<?php 
			  								$date_time = date("m/d/Y");
										   	$h_expire = $rw->h_expire;
										   	if ($date_time > $h_expire) {
										   	// if ("04/17/2020" > "04/16/2020") {; ?> 
										   		<p><b>สถานะผลิตภัณฑ์ :</b><font color="red" class="ddd"> หมดอายุฮาลาล</font></p>
										   	<?php }else{ ?> 
										   		<p><b>สถานะผลิตภัณฑ์ :</b><font color="green" class="ddd"> <?php echo $rw->s_status;?></font></p>
										<?php } ?>
								   	<?php }else{ ?>
								   		<p><b>สถานะผลิตภัณฑ์ :</b><font color="red" class="ddd"> <?php echo $rw->s_status;?></font></p>
								   	<?php } ?>	
								   	
								   	<?php
								   		$p_explain = $rw->p_explain;

								   		if ($p_explain == '') {?>
								   			<p><b>คำอธิบาย :  - </b></p>
								   		<?php }else{ ?>
								   			<p><b>คำอธิบาย :</b> <?php echo $rw->p_explain;?></p>
								   		<?php }
								   	?>
								   	<p><b>ผู้รับรอง :</b> <?php echo $rw->inves_inspector;?></p>
							</div>
							<!-- <div class="asd">
									<p><b>รหัสผลิตภัณฑ์	 :</b> <?php echo $rw->p_idproduct;?></p>
									<p><b>ชื่อผลิตภัณฑ์	:</b> <?php echo $rw->p_name;?></p>
								   	<p><b>รสชาติ :</b> <?php echo $rw->p_taste;?></p>
								   	<p><b>ขนาดผลิตภัณฑ์ :</b> <?php echo $rw->p_size;?> (<?php echo $rw->pz_name;?>)</p>
								   	<p><b>เลขบาร์โค้ด :</b> <?php echo $rw->p_barcode;?></p>
								   	<p><b>เลขรับรองฮาลาล :</b> <?php echo $rw->h_halal_number;?></p>
								   	<p><b>วันที่รับรองฮาลาล :</b> <?php echo $rw->h_receive;?></p>
								   	<p><b>วันหมดอายุฮาลาล :</b> <?php echo $rw->h_expire;?></p>

								   	<?php 
	  								$date_time = date("m/d/Y");
								   	$h_expire = $rw->h_expire;
								   	if ($date_time > $h_expire) {
								   	// if ("04/17/2020" > "04/16/2020") {; ?> 
								   		<p><b>สถานะผลิตภัณฑ์ :</b><font color="red" class="ddd"> หมดอายุฮาลาล</font></p>
								   	<?php }else{ ?> 
								   		<p><b>สถานะผลิตภัณฑ์ :</b><font color="green" class="ddd"> <?php echo $rw->s_status;?></font></p>
								   	<?php } ?>
								   	<?php
								   		$p_explain = $rw->p_explain;

								   		if ($p_explain == '') {?>
								   			<p><b>คำอธิบาย :  - </b></p>
								   		<?php }else{ ?>
								   			<p><b>คำอธิบาย :</b> <?php echo $rw->p_explain;?></p>
								   		<?php }
								   	?>
								   	<p><b>ผู้รับรอง :</b> <?php echo $rw->inves_inspector;?></p>
							</div> -->
						</div>
						<br>
						</a>
						
						<br>
						<div class="kong">
						<h3>ผลิตภัณฑ์ที่เกี่ยวข้อง</h3> 
						<br>
						<hr width=100% size=5>
						<div class="row tree">

							<?php foreach ($show_concerned as $rw2) {
								
								?>
								<div class="col-lg-3 col-md-3 col-sm-3">
				                    <div class="service-item">
				                        <a href="<?php echo site_url('Frontend_control/show_p/'.$rw2->p_id) ?>" class="fh5co-card-item">
				                        <img src="<?php echo base_url('/imag/') ?><?php echo $rw2->main_pic_pic;?>" class="img-responsive">
				                        </a>
				                    </div>
				                </div>	
				            <?php } ?>
		            	</div>
		            </div>
					</div>

				</div>
			</div>
		</div>
	<?php } ?>

	<!-- <div class="gtco-cover gtco-cover-sm" style="background-image: url(<?php echo base_url('/api_front1/') ?>images/bg.jpg)"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container text-center">
			<div class="display-t">
				<div class="display-tc">
					<h1>&ldquo; Their high quality of service makes me back over and over again!&rdquo;</h1>
					<p>&mdash; John Doe, CEO of XYZ Co.</p>
				</div>	
			</div>
		</div>
	</div> -->

	

	<footer id="gtco-footer" role="contentinfo" style="background-image: url(<?php echo base_url('/api_front1/') ?>images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
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
