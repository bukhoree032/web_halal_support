

	
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="<?php echo site_url("frontend_control") ?>"> Halal Ingredients <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li class="active"><a href="<?php echo site_url("frontend_control") ?>">Main</a></li>
						<li class="has-dropdown">
							<a href="#">Groups ▼</a>
							<ul class="dropdown">
								<li><a href="<?php echo site_url("frontend_control/ingredient_halal") ?>">ส่วนผสมที่ฮาลาล</a></li>
								<li><a href="<?php echo site_url("frontend_control/ingredient_harom") ?>">ส่วนผสมที่ฮารอม</a></li>
								<li><a href="<?php echo site_url("frontend_control/ingredient_syubhat") ?>">ส่วนผสมที่ชุบฮาต</a></li>
							</ul>
						</li>
						<li class="has-dropdown">
							<a href="<?php echo base_url('/api_front1/') ?>services.html">แจ้งปัญหา ▼</a>
							<ul class="dropdown">
								<li><a href="<?php echo base_url('/api_front1/') ?>#">แจ้งปัญหา</a></li>
								<li><a href="<?php echo base_url('/api_front1/') ?>#">ตอบคำถาม</a></li>
							</ul>
						</li>
						<li><a href="<?php echo base_url('/api_front1/') ?>contact.html">เกี่ยวกับเรา</a></li>
						<!-- <li><a href="<?php echo base_url('/api_front1/') ?>contact.html">Contact</a></li> -->
						<li class="btn-cta"><a href="<?php echo site_url('/frontend_control/login') ?>"><span>เข้าสู่ระบบ</span></a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(<?php echo base_url('/api_front1/') ?>images/bg.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<!-- <span class="intro-text-small">Hand-crafted by <a href="<?php echo base_url('/api_front1/') ?>http://gettemplates.co" target="_blank">GetTemplates.co</a></span> -->
							<h1 class="cursive-font">All in good Ingredients!</h1>	
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3 class="cursive-font">ค้นหา</h3>
											<!-- <form id="form_search" action=""> -->
											<form id="form_search" method="post" action="<?php echo site_url('/frontend_control/search_ajax') ?>">
												<div class="row form-group">
													<div class="col-md-12">
														<input type="text" id="search_i" placeholder="" name="search_i" class="form-control">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="search_ingredient btn btn-primary btn-block" value="ค้นหา">
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

	
	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font primary-color">ส่วนผสมทั้งหมด</h2>
					<p>“โอ้มนุษย์ทั้งหลาย จงบริโภคสิ่งที่ฮาลาล ดี มีประโยชน์ จากสิ่งที่อยู่ในแผ่นดิน
						และจงอย่าตามบรรดาก้าวเดินของชัยฎอน (มารร้าย) แท้จริงมันคือศัตรูที่ชัดแจ้งของพวกเจ้า”
						(อัล-บากอเราะห์ : 168)
					</p>
				</div>
			</div>

			<div class="row R1">

				<?php foreach ($ingredient as $rw) { ?>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<a href="<?php echo base_url('/imag/') ?><?php echo $rw->main_pic_pic;?>" class="fh5co-card-item image-popup">
							<figure>
								<div class="overlay"><i class="ti-plus"></i></div>
								<img src="<?php echo base_url('/imag/') ?><?php echo $rw->main_pic_pic;?>" alt="Image" class="img-responsive">
							</figure>
							<div class="fh5co-text">
								<h2><?php echo $rw->i_name_sci;?></h2>
								<p><b>ชื่อภาษาไทย :</b> <?php echo $rw->i_name_sci;?><br><!-- i_name --> 
								   <b>ชื่อภาษาอังกฤษ :</b> <?php echo $rw->i_name_sci;?>
									</p>
								<?php if ($rw->i_status == 1) { ?>
									<p><span class="price cursive-font" style="color: green;"><?php echo $rw->s_status;?></span></p>
								<?php }else if ($rw->i_status == 2) {?>
									<p><span class="price cursive-font" style="color: red;"><?php echo $rw->s_status;?></span></p>
								<?php }else{ ?>
									<p><span class="price cursive-font"  ><?php echo $rw->s_status;?></span></p>
								<?php } ?>
							</div>
						</a>
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

			<div class="row">
				
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
	</div>

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

<!-- <script type="text/javascript">
  $(document).ready(function() {
        $(document).on('click','.search_ingredient',function(evan) {
          evan.preventDefault();
          // alert ($(this).attr('id'));
          // var id = $(this).attr('id');
           $.ajax({
                method: "POST",
                url: "<?php echo site_url('frontend_control/search_ajax') ?>",
                dataType: 'json',
                data: $("#form_search").serialize(),
                success: function($result) {
                    console.log($result);
                    let html = "";
                    $.each($result, function(i, v){
						html += '<div class="col-lg-4 col-md-4 col-sm-6">'
							+ '<a href="" class="fh5co-card-item image-popup">'
								+ '<figure>'
									+ '<div class="overlay"><i class="ti-plus"></i></div>'
									+ '<img src="'+<?php echo base_url('/imag/') ?>v["main_pic_pic"]+'" alt="Image" class="img-responsive">'
								+ '</figure>'
								+ '<div class="fh5co-text">'
									+ '<h2>'+v["i_name_sci"]+'</h2>'
									+ '<p><b>ชื่อภาษาไทย :</b>'+v["i_name_sci"]+' <br>'
									   + '<b>ชื่อภาษาอังกฤษ :</b>'+v["i_name_sci"]+''
										+ '</p>';
									if (v["i_status"] == 1) {
										html += '<p><span class="price cursive-font" style="color: green;">'+v["s_status"]+'</span></p>'
									}else if (v["i_status"] == 2) {
										html += '<p><span class="price cursive-font" style="color: red;">'+v["s_status"]+'</span></p>'
									}else{
										html += '<p><span class="price cursive-font"  >'+v["s_status"]+'</span></p>'
									}
								html += '</div>'
							+ '</a>'
						+ '</div>';

                      console.log();
                      console.log(i, v);
                    });


                    $('#myModal_confirm').modal('show');
                    $('.R1').empty();
                    $('.R1').append(html);
                }
             });
        })
    });
</script>

 -->