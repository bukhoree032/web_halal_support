<!-- <div class="page-inner"> -->
		<nav class="gtco-nav" role="navigation">
			<div class="gtco-container">
				
				<div class="row">
					<div class="col-sm-4 col-xs-12">
						<div id="gtco-logo"><a href="<?php echo site_url("frontend_control") ?>"> Halal Ingredients <em>.</em></a></div>
					</div>
					<div class="col-xs-8 text-right menu-1">
						<ul>
							<?php if ($this->session->userdata('page') == 'home') { ?> 
						        <li class="active">
						    <?php }else{ ?> 
						        <li>
						    <?php } ?>
								<a href="<?php echo site_url("frontend_control") ?>">Home</a>
							</li>
							<?php if ($this->session->userdata('page') == 'product') { ?> 
								<li class="active has-dropdown">
						    <?php }else if ($this->session->userdata('page') == 'ingre'){ ?>
						    	<li class="active has-dropdown">
						    <?php }else{ ?>
						    	<li class="has-dropdown">
						    <?php } ?>
								<a href="#">Categories ▼</a>
								<ul class="dropdown">
									<?php if ($this->session->userdata('page') == 'ingre') { ?> 
								        <li class="active">
								    <?php }else{ ?> 
								        <li>
								    <?php } ?>
										<a href="<?php echo site_url("frontend_control/ingredient") ?>">Ingredients</a>
									</li>
									<?php if ($this->session->userdata('page') == 'product') { ?> 
								        <li class="active">
								    <?php }else{ ?> 
								        <li>
								    <?php } ?>
										<a href="<?php echo site_url("frontend_control/product") ?>">Products</a>
									</li>
								</ul>
							</li>
							<!-- <li class="has-dropdown">
								<a href="">แจ้งปัญหา ▼</a>
								<ul class="dropdown">
									<li><a href="<?php echo site_url("/#") ?>">แจ้งปัญหา</a></li>
									<li><a href="<?php echo site_url('/#') ?>">ตอบคำถาม</a></li>
								</ul>
							</li> -->
							<?php if ($this->session->userdata('page') == 'contact') { ?> 
						        <li class="active">
						    <?php }else{ ?> 
						        <li>
						    <?php } ?>
								<a href="<?php echo site_url('/frontend_control/contact') ?>">Contact</a>
							</li>
							<?php if ($this->session->userdata('page') == 'scan') { ?> 
						        <li class="active">
						    <?php }else{ ?> 
						        <li>
						    <?php } ?>
								<a href="<?php echo site_url("frontend_control/scan") ?>">Scan</a>
								<!-- <a onClick="take_snapshot()">สแกน</a> -->
							</li>
							<!-- <li><a href="<?php echo base_url('/api_front1/') ?>contact.html">Contact</a></li> -->
							<?php if ($this->session->userdata('m_status') > '0') { ?>
								<li class="btn-cta"><a href="<?php echo site_url('/Backend_control/') ?>"><span>Managing Data</span></a></li>
						    <?php }else{ ?> 
								<li class="btn-cta"><a href="<?php echo site_url('/frontend_control/login') ?>"><span>Login</span></a></li>
						    <?php } ?>

						</ul>	
					</div>
				</div>
				
			</div>
		</nav>

<script language="JavaScript">
  
   //  function take_snapshot() {
   //      Webcam.snap( function(data_uri) {
   //          <?php
		 //        $result = exec("python scan_webcam.py");
			// 	echo $result;
			// ?>
   //      } );
   //  }
</script>