	
<style type="text/css">
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
								<!-- <h1 class="cursive-font">All in good Ingredients!</h1>	
								 <div class="service-item">
			                        <a href="<?php echo base_url('/api_front1/') ?>halal_ingredients.html">
			                        <img src="<?php echo base_url('/api_front1/') ?>images/barcode.jpg" class="picbarcod">
			                        </a>
			                    </div> -->

			                    <h1 class="cursive-font texth1">All in good Ingredients!</h1>	
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
						<h2 class="cursive-font primary-color product2">Products and Ingredients</h2>
						<div class="product1">
						<p>“O people! Eat of the lawful and pure things in the earth <br>
							and follow not in the footsteps of Satan. <br> 
							For surely he is your open enemy” (Al-Baqara : 168)
						</p>
						</div>
					</div>
				</div>
				<section class="text-center services">
		            <div class="row tree">
		            	<center>
			                <div class="col-md-4 col-sm-6 col-xs-12">
			                    <div class="service-item">
			                        <a href="<?php echo site_url('/frontend_control/ingredient_halal1/'."1") ?>" class="fh5co-card-item">
			                        <img src="<?php echo base_url('/api_front1/') ?>images/logo_halal2.png" class="img-responsive">
			                        </a>
			                    </div>
			                </div>
			                <div class="col-md-4 col-sm-6 col-xs-12">
			                    <div class="service-item">
			                        <a href="<?php echo site_url('/frontend_control/ingredient_halal1/'."2") ?>" class="fh5co-card-item">
			                        <img src="<?php echo base_url('/api_front1/') ?>images/haram2.png"  class="img-responsive">
			                        </a>
			                    </div>
			                </div>
			                <div class="col-md-4 col-sm-6 col-xs-12">
			                    <div class="service-item">
			                        <a href="<?php echo site_url('/frontend_control/ingredient_halal1/'."3") ?>" class="fh5co-card-item" >
			                        <img src="<?php echo base_url('/api_front1/') ?>images/syubhat2.png" height="1000" width="1000" class="img-responsive">
			                        
			                        </a>
			                    </div>
			                </div>
		               	</center>
		            </div>
		    	</section>
			    <div class="tab-content">
					<div class="tab-content-inner active" data-content="signup">
						<h3 class="cursive-font"></h3>
						<form id="form_search_ingre" method="post">
							<div class="row form-group row1">
								<div class="col-md-8">
									<input type="text" id="" placeholder="Search" name="search_i" class="form-control">

								</div>
								<div class="col-md-4">
									<!-- <input type="text" id="" placeholder=" ค้นหา" name="search_i" class="form-control"> -->
									<button class="btn search1">Search</button>
								</div>
							</div>												
						</form>	
					</div>	
				</div>
				<?php if (!$ingredient['1']) {

				}else{?>
					<a class="btn show_i" href="<?php echo site_url('Frontend_control/product') ?>">View All Products</a>
					<hr width=100% size=5>
				<?php } ?>
				<div class="row R1" id="ingredient1">
					<?php foreach ($ingredient['1'] as $rw) {
					if (!$rw) {

					}else{?>
					<div class="col-lg-4 col-md-4 col-sm-6" >
						<a href="<?php echo site_url('Frontend_control/show_p/'.$rw->p_id) ?>" class="fh5co-card-item">
							<figure>
								<div class="overlay"><i class="ti-plus"></i></div>
								<img src="<?php echo base_url('/imag/') ?><?php echo $rw->main_pic_pic;?>" height="1500" width="1500" alt="Image" class="img-responsive">
							</figure>
							<div class="fh5co-text">
								<h2><?php echo $rw->p_name_eng;?></h2>
								<p>
									<b>Name :</b> <?php echo $rw->p_name_eng;?>
									<br>
									<?php $aaa = $rw->inves_inspector;  ?>
								   	<b>Certifier :</b> <?php echo $aaa ?>
								   	<?php if ($aaa == "คณะกรรมการอิสลามแห่งประเทศไทย") {
								   		
								   	}else { ?>
								   		<br>
								   		<br>
								   	<?php } ?>
								</p>
								<?php if ($rw->p_status == 1) { 
									$date_time = date("m/d/Y");
									$h_expire = $rw->h_expire;
									if ($date_time > $h_expire) {?>
										<p><span class="price cursive-font" style="color: red;">Expired</span></p>
									<?php }else{?>
										<p><span class="price cursive-font" style="color: green;"><?php echo $rw->s_status_eng;?></span></p>
									<?php }?>
								<?php }else if ($rw->p_status == 2) {?>
									<p><span class="price cursive-font" style="color: red;"><?php echo $rw->s_status_eng;?></span></p>
								<?php }else{ ?>
									<p><span class="price cursive-font"  ><?php echo $rw->s_status_eng;?></span></p>
								<?php } ?>

							</div>
						</a>
						<div class="row form-group">
							<div class="col-md-12">
								<a href="<?php echo site_url('Frontend_control/show_p/'.$rw->p_id) ?>" class="btn detail">more detail</a>
							</div>
						</div>
					</div>
					<?php }
					} ?>
				</div>
				<br>
				<br>
				<?php if (!$ingredient['0']) {

				}else{?>
					<a class="btn show_i" href="<?php echo site_url('Frontend_control/ingredient') ?>">View All Ingredients</a>
					<hr width=100% size=5>
				<?php } ?>
				<div class="row R1" id="ingredient1">

					<?php foreach ($ingredient['0'] as $rw) { 
						if (!$rw) {

						}else{?>
							<div class="col-lg-4 col-md-4 col-sm-6" >
								<a href="<?php echo site_url('Frontend_control/show_i/'.$rw->i_id) ?>" class="fh5co-card-item">
									<figure>
										<div class="overlay"><i class="ti-plus"></i></div>
										<img src="<?php echo base_url('/imag/') ?><?php echo $rw->main_pic_pic;?>" height="1500" width="1500" alt="Image" class="img-responsive">
									</figure>
									<div class="fh5co-text">
										<h2><?php echo $rw->i_name_sci;?></h2>
										<p>
											<!--<b>ชื่อภาษาไทย :</b> <?php echo $rw->i_name;?>
											<br> -->
										   	<b>Name :</b> <?php echo $rw->i_name_sci;?>
										</p>
										<?php if ($rw->i_status == 1) { ?>
											<p><span class="price cursive-font" style="color: green;"><?php echo $rw->s_status_eng;?></span></p>
										<?php }else if ($rw->i_status == 2) {?>
											<p><span class="price cursive-font" style="color: red;"><?php echo $rw->s_status_eng;?></span></p>
										<?php }else{ ?>
											<p><span class="price cursive-font"  ><?php echo $rw->s_status_eng;?></span></p>
										<?php } ?>

									</div>
								</a>
								<div class="row form-group">
									<div class="col-md-12">
										<a href="<?php echo site_url('Frontend_control/show_i/'.$rw->i_id) ?>" class="btn detail">more detail</a>
									</div>
								</div>
							</div>
						<?php } 
					} ?>

				</div>
			</div>
		</div>
		<div class="gtco-cover gtco-cover-sm" style="background-image: url(<?php echo base_url('/api_front1/') ?>images/bg.jpg)"  data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="gtco-container text-center">
				<div class="display-t">
					<div class="display-tc">
						<h1>&ldquo;... and eat and drink without going to excesses. For Allah does not like those who go to excess.&rdquo;</h1>
						<p>&mdash; (Al-A'raf : 31)</p>
					</div>	
				</div>
			</div>
		</div>

		<div id="gtco-counter" class="gtco-section">
			<div class="gtco-container">

				<div class="row">
					<div class="col-md-16 text-center gtco-heading animate-box">
						<h2 class="cursive-font primary-color">The Meaning of Halal, Haram and Shubahat</h2>
						<p> Halal, Haram and Shubahat are Arabic words. In reference to food, they becomes the dietary standard, as prescribed in the Islamic law.<br>
						    - Halal food means the lawful or permissible food for muslims and non-muslims. <br>
						    - Haram food means the impermissible or unlawful food for muslims.<br>
						    - Shubahat food means the doubtful food which cannot be classified whether halal or haram.  
						<p></p>
						    
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
    //เรียกใช้ evnet submit
    $("#form_search_ingre").submit(function(evan) {
    evan.preventDefault();
         $.ajax({
            method: "POST",
            url: "<?php echo site_url('Frontend_control/search_ingre') ?>",
            dataType: 'json',
            data: $("#form_search_ingre").serialize(),                
        	success: function($result) {
            console.log($result);;
            if (!$result) {
            	alert ("ไม่พบข้อมูลที่ค้นหา");
                // $('#myModal_confirm').modal('show');
            }else{
	      		$('#ingredient1').html($result);
            	let html = "";
	            $.each($result, function(i, v){
	              	html += '<div class="col-lg-4 col-md-4 col-sm-6" >'
	      					+ '<a href="<?php echo site_url('Frontend_control/show_i/') ?>'+ v["i_id"] +'" class="fh5co-card-item">'
							 + '<figure>'
								 + '<div class="overlay"><i class="ti-plus"></i></div>'
								 + '<img src="<?php echo base_url('/imag/') ?>'+ v["main_pic_pic"] +'" alt="Image" class="img-responsive">'
							 + '</figure>'
							 + '<div class="fh5co-text">'
								 + '<h2>'+ v["i_name_sci"] +'</h2>'
								 + '<p><b>ชื่อผลิตภัณฑ์ :</b> '+ v["i_name"] +'<br>'
								    + '<b>ผ่านการตรวจสอบโดย :</b> '+ v["i_name_sci"]
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
								 + '<a href="<?php echo site_url('Frontend_control/show_i/') ?>'+ v["i_id"] +'" class="btn detail">ดูข้อมูลเพิ่มเติม</a>'
							 + '</div>'
						 + '</div>'
						+ '</div>';
	              // console.log();
	              console.log(i, v);
	            });

	            // $('#ingredient_edit').modal('toggle');
	            // $('#myModal_success').modal('show');
	            $('#ingredient1').empty();
	            $('#ingredient1').append(html);
            }
            
            }
        });
    });
});
</script>

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

