<style type="text/css">

	.search1{
  	margin-left: 39px !important  
  }	
	@media only screen and (max-width: 600px) {
  .texth1 {
    display: none !important;
  }
  .picbarcod{
  	display: none;
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
  	margin-top: 20px !important;
  }
  .search1{
  	display: block !important;
  	margin: -43px 244px !important;
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
}

  /*.img-responsive{
  	margin-top: 31px !important;
  }*/
</style>
  
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(<?php echo base_url('/api_front1/') ?>images/bg.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-center">
						<div class="row row-mt-15em">
							<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
			                    <h1 class="cursive-font texth1">All in good Product!</h1>	
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
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font primary-color">ผลิตภัณฑ์ทั้งหมด</h2>
					<p>“โอ้มนุษย์ทั้งหลาย จงบริโภคสิ่งที่ฮาลาล ดี มีประโยชน์ จากสิ่งที่อยู่ในแผ่นดิน
						และจงอย่าตามบรรดาก้าวเดินของชัยฎอน (มารร้าย) แท้จริงมันคือศัตรูที่ชัดแจ้งของพวกเจ้า”
						(อัล-บากอเราะห์ : 168)
					</p>
				</div>
			</div>
			<!-- <section class="text-center services">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-3 col-sm-6 col-xs-12">
		                    <div class="service-item">
		                        <a href="<?php echo site_url('/frontend_control/product_halal') ?>">
		                        <img src="<?php echo base_url('/api_front1/') ?>images/logo_halal.png" class="pichalal">
		                        </a>
		                    </div>
		                </div>
		                <div class="col-md-3 col-sm-6 col-xs-12">
		                    <div class="service-item">
		                        <a href="<?php echo site_url('/frontend_control/product_harom') ?>">
		                        <img src="<?php echo base_url('/api_front1/') ?>images/haram.png"  class="picharam">
		                        </a>
		                    </div>
		                </div>
		                <div class="col-md-3 col-sm-6 col-xs-12">
		                    <div class="service-item">
		                        <a href="<?php echo site_url('/frontend_control/product_syubhat') ?>">
		                        <img src="<?php echo base_url('/api_front1/') ?>images/syubhat.png" class="picsyubhat">
		                        
		                        </a>
		                    </div>
		                </div>
		               
		            </div>
		        </div>
		    </section> -->
		    <section class="text-center services">
	            <div class="row tree">
	            	<center>
		                <div class="col-md-4 col-sm-6 col-xs-12">
		                    <div class="service-item">
		                        <a href="<?php echo site_url('/frontend_control/product_halal/'."1") ?>" class="fh5co-card-item">
		                        <img src="<?php echo base_url('/api_front1/') ?>images/logo_halal.png" class="img-responsive">
		                        </a>
		                    </div>
		                </div>
		                <div class="col-md-4 col-sm-6 col-xs-12">
		                    <div class="service-item">
		                        <a href="<?php echo site_url('/frontend_control/product_halal/'."2") ?>" class="fh5co-card-item">
		                        <img src="<?php echo base_url('/api_front1/') ?>images/haram.png"  class="img-responsive">
		                        </a>
		                    </div>
		                </div>
		                <div class="col-md-4 col-sm-6 col-xs-12">
		                    <div class="service-item">
		                        <a href="<?php echo site_url('/frontend_control/product_halal/'."3") ?>" class="fh5co-card-item" >
		                        <img src="<?php echo base_url('/api_front1/') ?>images/syubhat.png" height="1000" width="1000" class="img-responsive">
		                        </a>
		                    </div>
		                </div>
	               	</center>
	            </div>
	    	</section>
		    <div class="tab-content">
				<div class="tab-content-inner active" data-content="signup">
					<h3 class="cursive-font"></h3>

					<form id="form_search_pro" method="post">
						<div class="row form-group row1">
							<div class="col-md-8">
								<input type="text" id="" placeholder=" ค้นหา" name="search_p" class="form-control">
							</div>
							<div class="col-md-4 ">
								<button type="submit" class="btn search1">ค้นหา</button>
							</div>
						</div>												
					</form>	
				</div>	
			</div>
					
			<div class="row" id="product1">

				<?php foreach ($product as $rw) { ?>
					<div class="col-lg-4 col-md-4 col-sm-6" >
						<a href="<?php echo site_url('Frontend_control/show_p/'.$rw->p_id) ?>" class="fh5co-card-item">
							<figure>
								<div class="overlay"><i class="ti-plus"></i></div>
								<img src="<?php echo base_url('/imag/') ?><?php echo $rw->main_pic_pic;?>" alt="Image" class="img-responsive">
							</figure>
							<div class="fh5co-text">
								<h2><?php echo $rw->p_name_eng;?></h2>
								<p><b>ชื่อผลิตภัณฑ์ :</b> <?php echo $rw->p_name;?><br>
								   <b>ผ่านการตรวจสอบโดย :</b> <?php echo $rw->inves_inspector;?>
									</p>
								<?php if ($rw->p_status == 1) { ?>
									<p><span class="price cursive-font" style="color: green;"><?php echo $rw->s_status;?></span></p>
								<?php }else if ($rw->p_status == 2) {?>
									<p><span class="price cursive-font" style="color: red;"><?php echo $rw->s_status;?></span></p>
								<?php }else{ ?>
									<p><span class="price cursive-font"  ><?php echo $rw->s_status;?></span></p>
								<?php } ?>
							</div>
						</a>
						<div class="row form-group">
							<div class="col-md-12">
								<a href="<?php echo site_url('Frontend_control/show_p/'.$rw->p_id) ?>" class="btn detail">ดูข้อมูลเพิ่มเติม</a>
							</div>
						</div>
					</div>
				<?php } ?>

			</div>

		</div>
	</div>
	


	<div class="gtco-cover gtco-cover-sm" style="background-image: url(images/bg.jpg)"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container text-center">
			<div class="display-t">
				<div class="display-tc">
					<h1>&ldquo;และพวกเจ้าจงกิน จงดื่ม แต่พวกเจ้าอย่าสุรุ่ยสุร่าย&rdquo;</h1>
					<p>&mdash; (อัล-อะอ์รอฟ  : 31)</p>
				</div>	
			</div>
		</div>
	</div>

	<div id="gtco-counter" class="gtco-section">
		<div class="gtco-container">

			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2 class="cursive-font primary-color">บทบัญญัติอิสลามเกี่ยวกับอาหาร</h2>
					<p>- อาหารฮาลาล หมายถึง อาหารที่อนุมัติ<br>
						- อาหารหะรอม หมายถึง อาหารที่ไม่อนุมัติ<br>
						- อาหารมัชบูฮฺ หรือ ชุบฮาต หมายถึง อาหารที่ยังมีข้อเคลือบแคลงหรือน่าสงสัย ที่ยังไม่สามารถระบุได้ว่าฮาลาลหรือหะรอม จนกว่าจะผ่านการตรวจสอบ พิสูจน์ และวินิจฉัย ซึ่งตามหลักการแล้วให้หลีกเลี่ยง
					</p>
				</div>
			</div>

			<!-- <div class="row">
				
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="5" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">จำนวนส่วนผสมที่ฮาลาล</span>

					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="43" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">จำนวนส่วนผสมที่ฮารอม</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="32" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">จำนวนส่วนผสมที่ซุบฮาต</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="1985" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">จำนวนผู้เข้าชมเว็ปไซต์</span>

					</div>
				</div>
					
			</div> -->
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

 
<script type="text/javascript">
$(document).ready(function() {
    //เรียกใช้ evnet submit
    $("#form_search_pro").submit(function(evan) {
    evan.preventDefault();
         $.ajax({
            method: "POST",
            url: "<?php echo site_url('Frontend_control/search_product') ?>",
            dataType: 'json',
            data: $("#form_search_pro").serialize(),                
        	success: function($result) {
            console.log($result);;
            if (!$result) {
            	alert ("ไม่พบข้อมูลที่ค้นหา");
            }else{
	      		// $('#product1').html($result);
            	let html = "";
	            $.each($result, function(i, v){
	              	html += '<div class="col-lg-4 col-md-4 col-sm-6" >'
	      					+ '<a href="<?php echo site_url('Frontend_control/show_p/') ?>'+ v["p_id"] +'" class="fh5co-card-item">'
							 + '<figure>'
								 + '<div class="overlay"><i class="ti-plus"></i></div>'
								 + '<img src="<?php echo base_url('/imag/') ?>'+ v["main_pic_pic"] +'" alt="Image" class="img-responsive">'
							 + '</figure>'
							 + '<div class="fh5co-text">'
								 + '<h2>'+ v["p_name"] +'</h2>'
								 + '<p><b>ชื่อผลิตภัณฑ์ :</b> '+ v["p_name"] +'<br>'
								    + '<b>ผ่านการตรวจสอบโดย :</b> '+ v["inves_inspector"]
									 + '</p>';
								 if ( v["p_status "] == 1) {
									 html += '<p><span class="price cursive-font" style="color: green;">'+ v["s_status"] +'</span></p>';
								 }else if (v["p_status"] == 2) {
									html += '<p><span class="price cursive-font" style="color: red;">'+ v["s_status"] +'</span></p>';
								 }else{
									html += '<p><span class="price cursive-font"  >'+ v["s_status"] +'</span></p>';
								 }
							 html += '</div>'
						 + '</a>'
						 + '<div class="row form-group">'
							 + '<div class="col-md-12">'
								 + '<a href="<?php echo site_url('Frontend_control/show_p/') ?>'+ v["p_id"] +'" class="btn detail">ดูข้อมูลเพิ่มเติม</a>'
							 + '</div>'
						 + '</div>'
						+ '</div>';
	              // console.log();
	              console.log(i, v);
	            });

	            // $('#ingredient_edit').modal('toggle');
	            // $('#myModal_success').modal('show');
	            $('#product1').empty();
	            $('#product1').append(html);
            }
            
            }
        });
    });
});
</script>

