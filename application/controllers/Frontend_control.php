<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend_control extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
    	$this->load->model('Frontend_model');
    	// if ($this->session->userdata('m_status') > '0'){
     //    	redirect('Backend_control','refresh');
     //    }
    }

 //    // หน้าแรก
	public function scan()
	{
		$this->session->unset_userdata('page');
		$this->session->set_userdata("page",'scan');

		$this->load->view('frontend/scan/camera_head');
		$this->load->view('backend/popup/scan/scan_false');
		$this->load->view('backend/popup/scan/scan_contact');
		$this->load->view('navbar/navbar');
		$this->load->view('frontend/scan/camera');
		// $this->load->view('frontend/scan/camera');
	}

	public function scan1()
	{	
		$this->load->view('frontend/scan/camera1');
	}

	public function scan2()
	{
		$this->session->unset_userdata('page');
		$this->session->set_userdata("page",'product');

	  	$scan = $this->input->post('zbar');
	  	// echo $contact_email;
	    $data_show['data_show'] =  $this->Frontend_model->scan2($scan);
	    // echo json_encode($show_concerned['show_concerned']);
	    if (!$data_show['data_show'] == ''){

	   		$show_p_pic['show_p_pic'] =  $this->Frontend_model->show_p_pic($scan);
	    	$show_concerned['show_concerned'] =  $this->Frontend_model->show_concerned($scan);

		    $this->load->view('frontend/detail_head',$data_show);
			$this->load->view('navbar/navbar',$show_p_pic);
			$this->load->view('frontend/product/product_detail',$show_concerned);
	    }else{
			$this->session->set_flashdata('scan_false','บันทึกการเปลียนแปลงสำเร็จ');
	    	$this->load->view('frontend/scan/camera_head');
			$this->load->view('backend/popup/scan/scan_false');
			$this->load->view('backend/popup/scan/scan_contact');
			$this->load->view('navbar/navbar');
			$this->load->view('frontend/scan/camera');
	    }
	}

	public function scan_sersh()
	{
		$this->session->unset_userdata('page');
		$this->session->set_userdata("page",'scan');

	  	$scan = $this->input->post('zbar');
	    $data_show['data_show'] =  $this->Frontend_model->product_search($scan);
	    // echo json_encode($product['product']);
	    if (!$data_show['data_show'] == ''){
	    	echo "have";
	    }else{
	    	echo "nothave";
	    }
	}

	public function scan_sersh1()
	{
		$this->session->unset_userdata('page');
		$this->session->set_userdata("page",'scan');

	  	$scan = $this->input->post('zbar');
	    $product['product'] =  $this->Frontend_model->product_search($scan);
	    // echo json_encode($product['product']);
	    // echo $product;
	    $this->load->view('frontend/product/product_head',$product);
		$this->load->view('navbar/navbar');
		// $this->load->view('popup/register/register_success');
		$this->load->view('frontend/product/product');
	}
	
    // หน้าแรก
	public function index()
	{
		$this->session->unset_userdata('page');
		$this->session->set_userdata("page",'home');

		// $this->Frontend_model->update_counter();
		$ingredient['ingredient']=$this->Frontend_model->ingredient1();
		// echo json_encode($ingredient['ingredient']);

		$this->load->view('frontend/index_head');
		$this->load->view('navbar/navbar');
		$this->load->view('popup/register/register_success');
		$this->load->view('frontend/index',$ingredient);
		// $this->load->view('welcome_message');

		 // echo json_encode($ingredient);
	}

	public function product()
	{
		$this->session->unset_userdata('page');
		$this->session->set_userdata("page",'product');

		$product['product']=$this->Frontend_model->product();


		$this->load->view('frontend/index_head');
		$this->load->view('navbar/navbar');
		// $this->load->view('popup/register/register_success');
		$this->load->view('frontend/product/product',$product);
	}

	public function search_product()
	{
	    $search_i = $this->input->post('search_p');
	    $product['product'] =  $this->Frontend_model->search_product_ajax($search_i);
	    if (!$product['product'] == ''){
			echo json_encode($product['product']);
	    }else{
			echo json_encode("");
	    }
	}

	public function product_halal($p_id)
	{
		$this->session->unset_userdata('page');
		$this->session->set_userdata("page",'product');

		// $this->Frontend_model->update_counter();
		$product['product']=$this->Frontend_model->product_halal($p_id);

		$this->load->view('frontend/index_head');
		$this->load->view('navbar/navbar');
		// $this->load->view('popup/register/register_success');
		$this->load->view('frontend/product/product',$product);
	}

	public function show_p($p_id)
	{
	    $data_show['data_show'] =  $this->Frontend_model->show_p($p_id);
	    $show_p_pic['show_p_pic'] =  $this->Frontend_model->show_p_pic($p_id);
	    $show_concerned['show_concerned'] =  $this->Frontend_model->show_concerned($p_id);
	    // print_r($show_concerned['show_concerned']);
	    $this->load->view('frontend/index_head',$data_show);
		$this->load->view('navbar/navbar',$show_p_pic);
		$this->load->view('frontend/product/product_detail',$show_concerned);
	}

	public function ingredient()
	{
		$this->session->unset_userdata('page');
		$this->session->set_userdata("page",'ingre');

		// $this->Frontend_model->update_counter();
		$ingredient['ingredient']=$this->Frontend_model->ingredient();


		$this->load->view('frontend/index_head');
		$this->load->view('navbar/navbar');
		$this->load->view('popup/register/register_success');
		$this->load->view('frontend/ingredient/ingredient',$ingredient);
		// $this->load->view('welcome_message');

		 // echo json_encode($ingredient);
	}

	public function ingredient_halal($id)
	{
		$this->session->unset_userdata('page');
		$this->session->set_userdata("page",'halal');

		$ingredient['ingredient']=$this->Frontend_model->ingredient_halal($id);

		$this->load->view('frontend/index_head');
		$this->load->view('navbar/navbar');
		$this->load->view('frontend/ingredient/ingredient',$ingredient);
	}

	public function ingredient_halal1($id)
	{
		$this->session->unset_userdata('page');
		$this->session->set_userdata("page",'halal');

		$ingredient['ingredient']=$this->Frontend_model->ingredient_halal1($id);

		$this->load->view('frontend/index_head');
		$this->load->view('navbar/navbar');
		$this->load->view('frontend/index',$ingredient);
	}
	
	public function search_ingre()
	{
	    $search_i = $this->input->post('search_i');
	    $ingredient['ingredient'] =  $this->Frontend_model->search_ingre($search_i);
	    if (!$ingredient['ingredient'] == ''){
			echo json_encode($ingredient['ingredient']);
	    }else{
			echo json_encode("");
	    }
	}
	// หน้าแรกปิด

	// ----------------------------------------------------------------------

	// หน้าshow

	// ดึงข้อมูลเพื่อshow
	public function show_i($i_id)
	{
	    $data_show['data_show'] =  $this->Frontend_model->show_i($i_id);

		$this->load->view('frontend/index_head',$data_show);
		$this->load->view('navbar/navbar');
		$this->load->view('popup/detail_replect/detail_replect');
		$this->load->view('frontend/detail');
	}

	// public function show_i()
	// {

	// 	$this->load->view('frontend/detail_head');
	// 	$this->load->view('navbar/navbar');
	// 	$this->load->view('frontend/detail');
	//  //    $data_show['data_search'] =  $this->Frontend_model->show_i();

	// 	// echo json_encode($data_show);
	// }

	public function replace_i()
	{
		// $asd = "ฟหกฟหก";
	    $search_i = $this->input->post('replace_i');
	    // echo json_encode($search_i);
	    $replace_i['replace_i'] =  $this->Frontend_model->replace_i($search_i);
	    if (!$replace_i['replace_i'] == ''){
			echo json_encode($replace_i['replace_i']);
	    }else{
			echo json_encode("false");
	    }
		// echo json_encode($asd);
	}

	public function replace_i1()
	{
		// $asd = "ฟหกฟหก";
	    $search_i = $this->input->post('replace_i');
	    // echo json_encode($search_i);
	    $data_show['data_show'] =  $this->Frontend_model->replace_i($search_i);
	    // echo json_encode($data_show['data_show']);

	    $this->load->view('frontend/index_head',$data_show);
		$this->load->view('navbar/navbar');
		$this->load->view('popup/detail_replect/detail_replect');
		$this->load->view('frontend/detail');
		// echo json_encode($asd);
	}

	// ----------------------------------------------------------------------

	public function insert_contack()
	{	
		$config['upload_path']   = './imag/'; 
		$config['allowed_types'] = 'gif|jpg|png'; 
		$config['max_size']      = 0; 
		$config['max_width']     = 0; 
		$config['max_height']    = 0;  
		$config['encrypt_name']  = true;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('i_upload_fill')){ //ถ้าไม่มี
			$contack1['contack1']=$this->Frontend_model->insert_contack_no();
			echo ($contack1['contack1']);
		}else{ //ถ้ามี
			$contack['contack']=$this->Frontend_model->insert_contack();
			echo ($contack['contack']);
		}
	}

	// 	// echo json_encode($replace_i);
	// }

	// public function email_contact()
	// {
	//     $email = $this->input->post('email');
	// 	$this->load->library('phpmailer_lib');
    
 //        // PHPMailer object
 //        $mail = $this->phpmailer_lib->load();
        
 //        // SMTP configuration
 //        $mail->isSMTP();
 //        $mail->CharSet = "utf-8";        
 //        $mail->Host     = 'smtp.gmail.com';
 //        $mail->SMTPAuth = true;
 //        $mail->Username = 'testmail032236@gmail.com';
 //        $mail->Password = '134166kharee';
 //        $mail->SMTPSecure = 'ssl';
 //        $mail->Port = 465;
        
 //        $mail->setFrom('testmail032236@gmail.com', 'BIKE FOR DAD');
 //        $mail->addReplyTo("bukhoree.y@yru.ac.th", 'BIKE FOR DAD');
        
 //        // Add a recipient
 //        $mail->addAddress("bukhoree.y@yru.ac.th");
        
 //        // Add cc or bcc 
 //        // $mail->addCC("$rw->ad_email_address");
 //        // $mail->addBCC("$rw->ad_email_address");
 //        $mail->addCC("bukhoree.y@yru.ac.th");
 //        $mail->addBCC("bukhoree.y@yru.ac.th");
        
 //        // Email subject
 //        $mail->Subject = 'คำร้องขอกู้คืนบัญชีของคุณ';
        
 //        // Set email format to HTML
 //        $mail->isHTML(true);
        
 //        // Email body content
 //        $mailContent = "<h3>เรียน คุณ xxxxxxxxxx rrrrrrrrrr</h3>
 //            <p>ทางเราได้รับคำข้อกู้คืนบัญชี รายละเอียดในการล็อกอินของคุณ คือ</p>
 //            <p>อีเมล : xxxxxxxxxx</p>
 //            <p>รหัสผ่าน : *************</p>
 //            <p></p>
 //            <p>***********************************</p>
 //            <p>BIKE FOR DAD</p>
 //            <p>***********************************</p>";
 //        $mail->Body = $mailContent;
        
 //        // Send email
 //        if(!$mail->send()){
 //            echo "false_mail";
 //        }else{
 //  			// $this->session->set_flashdata('success_forgot','ระบบได้ทำการส่งข้อมูลการเข้าสู่ระบบ ไปยังE-mailของคุณแล้ว');
 //            echo "1";
 //        }
	// 	// echo "false_mail";
	// }


	// ----------------------------------------------------------------------

	public function login()
	{
		$this->load->view('frontend/login_head');
		$this->load->view('popup/login/login_ban');
		$this->load->view('popup/login/login_confirm');
		$this->load->view('popup/login/login_false');
		$this->load->view('frontend/login');
	}

	public function check_login()
	{
		$data['login'] = $this->Frontend_model->check_login();
		//ตรวจสอบค่าที่ส่งจากmodelเพื่อส่งไปหน้าบ้าน
		$data1 = $this->Frontend_model->check_login();


		if (!$data1) {
			// 3รหัสไม่ถูกต้อง
	    	echo "2";
	    }else{
			foreach ($data['login'] as $rw) {
				$m_status_bin = $rw->m_status_bin;
				$m_status = $rw->m_status;
				
				// ถ้าสถานะ=3 ข้อมูลอยู่ในถังขยะ
				if ($m_status_bin == 1) {
					// 3ข้อมูลอยู่ในถังขยะ
					echo "3";
			    }else 
			    if ($m_status >= 1) {
					$login=array(
					'm_id'  =>$rw->m_id,
					'm_status_bin'  =>$rw->m_status_bin,
					'm_status'  =>$rw->m_status,
					'm_name'  =>$rw->m_name,
					);

					$this->session->set_userdata($login);
					// 1ปกติ
			    	echo "1";
			    }else{
			    	// สถานะเป็น0 ระงับการใช้งาน
					echo "0";
			    }
		    }
		}
	}
	
	// ----------------------------------------------------------------------

	public function register()
	{
		$this->load->view('frontend/register_head');
		$this->load->view('frontend/register');
	}

	public function check_register()
	{
		$data = $this->Frontend_model->register_admin();
		//ตรวจสอบค่าที่ส่งจากmodelเพื่อส่งไปหน้าบ้าน
		if ($data=='false_mail') {
			echo "false_mail";
		}else if ($data=='false_m_id'){
			echo "false_m_id";
		}else if ($data=='false_passport'){
			echo "false_passport";
		}else if ($data=='false_mail_sum'){
			echo "false_mail_sum";
		}else if ($data=='false_regieter'){
			echo "false_regieter";
		}else if ($data=='false_true'){
			echo "false_true";
		}

		// echo json_encode($data);
	}


	// ----------------------------------------------------------------------

	public function forgot()
	{
		$this->load->view('frontend/forgot_head');
		$this->load->view('popup/forgot/forgot_false');
		$this->load->view('popup/forgot/forgot_uplode');
		$this->load->view('frontend/forgot');
	}

	public function chek_forgot()
	{
		$data['query'] = $this->Frontend_model->chek_forgot();
		if (!$data['query']) {
			echo "0";
		}else{
			echo "1";
		}
	}

	public function chek_forgot1()
	{
		$data['query'] = $this->Frontend_model->chek_forgot();
		if (!$data['query']) {
			echo "0";
		}else{
			foreach ($data['query'] as $rw) {
				$this->load->library('phpmailer_lib');
	        
		        // PHPMailer object
		        $mail = $this->phpmailer_lib->load();
		        
		        // SMTP configuration
		        $mail->isSMTP();
		        $mail->CharSet = "utf-8";        
		        $mail->Host     = 'smtp.gmail.com';
		        $mail->SMTPAuth = true;
		        $mail->Username = 'testmail032236@gmail.com';
		        $mail->Password = '134166kharee';
		        $mail->SMTPSecure = 'ssl';
		        $mail->Port     = 465;
		        
		        $mail->setFrom('testmail032236@gmail.com', 'HALAL INGREDIENT');
		        $mail->addReplyTo("$rw->m_email", 'HALAL INGREDIENT');
		        
		        // Add a recipient
		        $mail->addAddress("$rw->m_email");
		        
		        // Add cc or bcc 
		        $mail->addCC("$rw->m_email");
		        $mail->addBCC("$rw->m_email");
		        
		        // Email subject
		        $mail->Subject = 'คำร้องขอกู้คืนบัญชีของคุณ';
		        
		        // Set email format to HTML
		        $mail->isHTML(true);
		        
		        // Email body content
		        $mailContent = "<h3>เรียน คุณ $rw->m_name $rw->m_surname</h3>
		            <p>ทางเราได้รับคำข้อกู้คืนบัญชี รายละเอียดในการล็อกอินของคุณ คือ</p>
		            <p>อีเมล : $rw->m_email</p>
		            <p>รหัสผ่าน : $rw->m_password</p>
		            <p></p>
		            <p>***********************************</p>
		            <p>HALAL INGREDIENT</p>
		            <p>***********************************</p>";
		        $mail->Body = $mailContent;
		        
		        // Send email
		        if(!$mail->send()){
		            echo "false_mail";
		        }else{
          			$this->session->set_flashdata('success_forgot','ระบบได้ทำการส่งข้อมูลการเข้าสู่ระบบ ไปยังE-mailของคุณแล้ว');
		            echo "1";
		        }
			}
		}
	}


	// ----------------------------------------------------------------------

	public function contact()
	{
		$this->session->unset_userdata('page');
		$this->session->set_userdata("page",'contact');

		$this->load->view('frontend/contact/contact_head');
		$this->load->view('navbar/navbar');
		$this->load->view('popup/contact/contact_false');
		$this->load->view('popup/contact/contact_sussecc');
		$this->load->view('frontend/contact/contact');
	}

	// ----------------------------------------------------------------------

	public function insert_contact()
	{
		$data = $this->Frontend_model->insert_contact();
		//ตรวจสอบค่าที่ส่งจากmodelเพื่อส่งไปหน้าบ้าน
		if ($data=='false_mail') {
			echo "false_mail";
		// }else if ($data=='false_file'){
		// 	echo "false_file";
		}else if ($data=='false_con_id'){
			echo "false_con_id";
		}else if ($data=='false_insert'){
			echo "false_insert";
		}else if ($data=='true'){
			echo "true";
		}
	}

	// ----------------------------------------------------------------------
}
