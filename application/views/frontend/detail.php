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
    		color: green;
		}
		.detail{
            padding: 39px;
            background-color: #FBB448;
            border-radius: 0px;
            width: 100%;
            margin-top: -138px;
            padding-bottom: 12px;
            color: white;
        }
        .gtco-cover.gtco-cover-sm {
  			height: 600px;
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

			                    <h1 class="cursive-font texth1">Detail Ingredients</h1>	
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
						<h2 class="cursive-font primary-color">รายละเอียดส่วนผสม</h2>
						<p>  ถ้าไม่อยากเสียเงินเพื่อชีวิตที่ไม่มีคุณค่า เราไม่ควรเสียเงินไปกับอาหารขยะที่ไม่มีคุณค่าเหมือนกัน</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<a class="fh5co-card-item">
						<div class="col-lg-12 col-md-12 col-sm-12">
						<br>
							<div class="fh5co-text">
								<center>
									<h1><?php echo $rw->i_name;?></h1>
								</center>
							</div>
						<br>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<center>
								<br>
								<img src="<?php echo base_url('/imag/') ?><?php echo $rw->main_pic_pic;?>" height="250" width="350" alt="Image" class="">
							</center>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="asd">
									<p><b>รหัสส่วนผสม :</b> <?php echo $rw->i_ingredients_id;?></p>
									<p><b>ชื่อภาษาไทย :</b> <?php echo $rw->i_name;?></p>
								   	<p><b>ชื่อทางวิทยาศาสตร์ :</b> <?php echo $rw->i_name_sci;?></p>
								   	<p><b>เลข H-Number :</b> <?php echo $rw->i_h_number;?></p>
								   	<p><b>เลข E-Number :</b> <?php echo $rw->i_e_number;?></p>
								   	<p><b>สถานะส่วนผสม :</b><font color="green"> <?php echo $rw->s_status;?></font></p>
								   	<!-- <p><b>สามารถทดแทน :</b> <?php echo $rw->i_replace;?></p> -->
								   	<?php
								   		$i_replace = $rw->i_replace;
								   		$s_status = $rw->s_status;

								   		if ($s_status == "ฮาลาล") {?>
								   			
								   		<?php }else if ($i_replace == '') {?>
								   			<p><b>สามารถทดแทน :  - </b></p>
								   		<?php }else { ?>
								   			<p><b>สามารถทดแทน :</b> <?php echo $rw->i_replace;?></p>
								   		<?php }
								   	?>
								   	<!-- <p><b>คำอธิบาย :</b> <?php echo $rw->i_explain;?></p> -->
								   	<?php
								   		$i_explain = $rw->i_explain;

								   		if ($i_explain == '') {?>
								   			<p><b>คำอธิบาย :  - </b></p>
								   		<?php }else{ ?>
								   			<p><b>คำอธิบาย :</b> <?php echo $rw->i_explain;?></p>
								   		<?php }
								   	?>
								   	<p><b>ผู้รับรอง :</b> <?php echo $rw->inves_inspector;?></p>
							</div>
						</div>
						<form id="form_search_ingres" method="post" action="<?php echo site_url("Frontend_control/replace_i1") ?>">
							<input type="hidden" name="replace_i" class="form-control" value="<?php echo $rw->i_name;?>">
							<a href="" class=" search_ingredient btn detail">ส่วนผสมที่สามารถทดแทน</a>									
						</form>	
								<!-- <a href="<?php echo site_url('Frontend_control/replace_i/'.$rw->i_name) ?>" class="btn detail">ส่วนผสมที่สามารถทดแทน</a> -->
								<!-- <a href="<?php echo site_url('Frontend_control/replace_i/'.$rw->i_name) ?>" class="btn detail">ส่วนผสมที่สามารถทดแทน</a> -->
							
						<br>
						</a>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
<!-- 
	
	
	<?php foreach ($data_show as $rw) { ?>
		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
						<h2 class="cursive-font primary-color">รายละเอียดส่วนผสม</h2>
						<p>  ถ้าไม่อยากเสียเงินเพื่อชีวิตที่ไม่มีคุณค่า เราไม่ควรเสียเงินไปกับอาหารขยะที่ไม่มีคุณค่าเหมือนกัน</p>
					</div>
				</div>
				<div class="row">
					
					<div class="col-lg-12 col-md-12 col-sm-12">
						<a href="<?php echo base_url('/imag/') ?><?php echo $rw->main_pic_pic;?>" class="fh5co-card-item image-popup">
							<figure class="text-center">
								<div class="overlay"><i class="ti-plus"></i></div>
								
								<img src="<?php echo base_url('/imag/') ?><?php echo $rw->main_pic_pic;?>" alt="Image" class="">
							</figure>
							<div class="fh5co-text">
								<h2><?php echo $rw->i_name;?></h2>
								<p>
									<p><b>รหัสส่วนผสม :</b> <?php echo $rw->i_ingredients_id;?></p>
									<p><b>ชื่อภาษาไทย :</b> <?php echo $rw->i_name;?></p>
								   	<p><b>ชื่อทางวิทยาศาสตร์ :</b> <?php echo $rw->i_name_sci;?></p>
								   	<p><b>เลข H-Number :</b> <?php echo $rw->i_h_number;?></p>
								   	<p><b>เลข E-Number :</b> <?php echo $rw->i_e_number;?></p>
								   	<p><b>สถานะส่วนผสม :</b><font color="green"> <?php echo $rw->s_status;?></font></p>
								   	<p><b>สามารถทดแทน :</b> <?php echo $rw->i_replace;?></p>
								   	<p><b>คำอธิบาย :</b> <?php echo $rw->i_explain;?></p>
								   	<p><b>ผ่านการตรวจสอบจาก :</b> <?php echo $rw->inves_inspector;?></p>
								</p>
							</div>
						</a>
					</div>

				</div>
			</div>
		</div>
	<?php } ?> -->
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

<script type="text/javascript">
  $(document).ready(function() {
        $(document).on('click','.search_ingredient',function(evan) {
          evan.preventDefault();
          
           $.ajax({
                method: "POST",
                url: "<?php echo site_url('Frontend_control/replace_i') ?>",
                dataType: 'json',
                data: $("#form_search_ingres").serialize(),
                success: function($result) {
                    console.log($result);
                    if ($result == 'false') {
                    	// console.log("aaaa");
                        $('#myModal_replect').modal('show');
                    }else{
                    	// console.log("bbbbb");
                        document.getElementById("form_search_ingres").submit();
                    }
                }
             });
        })
    });
</script>
