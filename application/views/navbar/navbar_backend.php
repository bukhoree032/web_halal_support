
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo" style="background-color: #FBB448  !important;">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>HI</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>INGREDIENTS</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color: #FBB448  !important;">
      <!-- Sidebar toggle button-->
      <a href="<?php echo base_url('/admin_template1/') ?>#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        </ul>
      </div>
    </nav>
    
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('/admin_template1/') ?>dist/img/manager1.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>
          <?php 
            echo $this->session->userdata('m_name');
           ?>
           </p>
          <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HALAL INGREDIENTS</li>
         <!-- <?php if ($this->session->userdata('back_page') == 'index') { ?> 
            <li class="active">
        <?php }else{ ?> 
            <li>
        <?php } ?>
            <a href="<?php echo site_url('/Backend_control') ?>">
            <i class="fa fa-tachometer"></i><span>แผงควบคุม</span>
            <span class="pull-right-container">
            </span>
            </a>
        </li> -->

    
        
        <?php if ($this->session->userdata('back_page') == 'ingredient') { ?> 
        <li class="active treeview">
    <?php }else if ($this->session->userdata('back_page') == 'ingredients_type') { ?> 
        <li class="active treeview">
    <?php }else{ ?> 
        <li class="treeview">
    <?php } ?>
          <a href="<?php echo base_url('/admin_template1/') ?>#">
            <i class="fa fa-edit"></i>
            <span>Ingredient Management</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php if ($this->session->userdata('back_page') == 'ingredient') { ?> 
              <li class="active">
            <?php }else{ ?> 
              <li>
            <?php } ?>
              <a href="<?php echo site_url('/Backend_control/ingredient') ?>"><i class="fa fa-circle-o"></i>Detail</a>
            </li>

            <?php if ($this->session->userdata('back_page') == 'ingredients_type') { ?> 
              <li class="active">
            <?php }else{ ?> 
              <li>
            <?php } ?>
              <a href="<?php echo site_url('/Backend_control/ingredients_type') ?>"><i class="fa fa-circle-o"></i>Type</a>
            </li>
          </ul>
        </li>
    <?php if ($this->session->userdata('back_page') == 'product') { ?> 
        <li class="active treeview">
    <?php }else if ($this->session->userdata('back_page') == 'product_type') { ?> 
        <li class="active treeview">
    <?php }else if ($this->session->userdata('back_page') == 'product_expire') { ?> 
        <li class="active treeview">
    <?php }else{ ?>
        <li class="treeview">
    <?php } ?>
          <a href="<?php echo base_url('/admin_template1/') ?>#">
            <i class="fa fa-edit"></i>
            <span>Product Management</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php if ($this->session->userdata('back_page') == 'product') { ?> 
              <li class="active">
            <?php }else{ ?> 
              <li>
            <?php } ?>
              <a href="<?php echo site_url('/Backend_control/product') ?>"><i class="fa fa-circle-o"></i>Detail</a>
            </li>

            <?php if ($this->session->userdata('back_page') == 'product_expire') { ?> 
              <li class="active">
            <?php }else{ ?> 
              <li>
            <?php } ?>
              <a href="<?php echo site_url('/Backend_control/product_expire') ?>"><i class="fa fa-circle-o"></i>Duration</a>
            </li>

            <?php if ($this->session->userdata('back_page') == 'product_type') { ?> 
              <li class="active">
            <?php }else{ ?> 
              <li>
            <?php } ?>
              <a href="<?php echo site_url('/Backend_control/product_type') ?>"><i class="fa fa-circle-o"></i>Type</a>
            </li>
          </ul>
        </li>

        <?php if ($this->session->userdata('back_page') == 'status') { ?> 
        <li class="active treeview">
    <?php }else if ($this->session->userdata('back_page') == 'inves') { ?> 
        <li class="active treeview">
    <?php }else{ ?> 
        <li class="treeview">
    <?php } ?>
          <a href="<?php echo base_url('/admin_template1/') ?>#">
            <i class="fa fa-edit"></i>
            <span>Inspectation Management</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <?php if ($this->session->userdata('back_page') == 'inves') { ?> 
              <li class="active">
            <?php }else{ ?> 
              <li>
            <?php } ?>
              <a href="<?php echo site_url('/Backend_control/inves') ?>"><i class="fa fa-circle-o"></i>Inspector</a>
            </li>

            <?php if ($this->session->userdata('back_page') == 'status') { ?> 
              <li class="active">
            <?php }else{ ?> 
              <li>
            <?php } ?>
              <a href="<?php echo site_url('/Backend_control/status') ?>"><i class="fa fa-circle-o"></i>Classification</a>
            </li>

            <!-- <li><a href="#"><i class="fa fa-circle-o"></i>ข้อมูลเกี่ยวกับเรา</a></li> -->
          </ul>
        </li>
        
        <?php if ($this->session->userdata('back_page') == 'contact') { ?> 
            <li class="active">
        <?php }else{ ?> 
            <li>
        <?php } ?>
            <a href="<?php echo site_url('/Backend_control/contact_alert_all') ?>">
            <i class="fa fa-comments-o"></i><span>Notification</span>
            <!-- <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span> -->
            </a>
        </li>

        <!-- <li>
            <a href="#">
            <i class="fa fa-bar-chart"></i><span>รายงานสถติ</span>
            <span class="pull-right-container">
            </span>
            </a>
        </li> -->
       <?php if ($this->session->userdata('m_status') < '2') { 
        
        }else{ ?> 
          <li class="treeview">
              <li class="header" style="font-size: 15px;">ADMINISTRATION</li>
          </li>
          <?php if ($this->session->userdata('back_page') == 'member') { ?> 
              <li class="active">
          <?php }else{ ?> 
              <li>
          <?php } ?>
                <a href="<?php echo site_url('/Backend_admin_control/member') ?>">
                <i class="fa fa-user-circle-o"></i><span>Administrator Management</span>
                <span class="pull-right-container">
                </span>
                </a>
              </li>
          <?php } ?>
        <li>
            <a href="<?php echo site_url('/Frontend_control/') ?>">
            <i class="fa fa-home" ></i><span>HOME</span>
            <span class="pull-right-container"></span>
            </a>
        </li>
        <li>
            <a href="<?php echo site_url('/Backend_control/logout') ?>">
            <i class="fa fa-power-off"></i> <span>LOGOUT</span>
            <span class="pull-right-container"></span>
            </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>