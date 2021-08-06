<?php  
class Frontend_model extends CI_Model {

	public function scan2($key_show)
	{ 
		$quer_code1 = $this->db->query(" SELECT *
										FROM  halal_product
										LEFT JOIN halal_status ON halal_status.s_id = halal_product.p_status
										LEFT JOIN halal_investigate ON halal_investigate.inves_id = halal_product.p_id_investigate
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_product.p_id
										LEFT JOIN halal_product_size ON halal_product_size.pz_id = halal_product.p_net
										LEFT JOIN halal_halal ON halal_halal.h_id_product = halal_product.p_id
										WHERE (halal_product.p_id LIKE '$key_show' OR halal_product.p_barcode LIKE '$key_show') AND (halal_product.p_status_bin IS NULL OR NOT halal_product.p_status_bin = '1')
									  ");
		$numrow = $quer_code1->num_rows();
		if ($numrow == 0) { //นับแถวของข้อมูล ถ้าเท่ากับ 0
        		return '';
		}else{
			return $quer_code1->result();
		}
	}

	public function product()
	{ 
		$quer_code = $this->db->query(" SELECT *
										FROM  halal_product
										LEFT JOIN halal_status ON halal_status.s_id = halal_product.p_status
										LEFT JOIN halal_investigate ON halal_investigate.inves_id = halal_product.p_id_investigate
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_product.p_id
										LEFT JOIN halal_halal ON halal_halal.h_id_product = halal_product.p_id
										WHERE halal_product.p_status_bin IS NULL OR NOT halal_product.p_status_bin = '1'ORDER BY p_id DESC
									  ");
		return $quer_code->result();
	}

	public function product_search($key_show)
	{ 
		$quer_code = $this->db->query(" SELECT *
										FROM  halal_product
										LEFT JOIN halal_status ON halal_status.s_id = halal_product.p_status
										LEFT JOIN halal_investigate ON halal_investigate.inves_id = halal_product.p_id_investigate
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_product.p_id
										WHERE (halal_product.p_name LIKE '%$key_show%' OR halal_product.p_name_eng LIKE '%$key_show%' OR halal_product.p_barcode LIKE '%$key_show%') AND (halal_product.p_status_bin IS NULL OR NOT halal_product.p_status_bin = '1')
									  ");
		// return $quer_code->result();
		$numrow = $quer_code->num_rows();
		if ($numrow == 0) { //นับแถวของข้อมูล ถ้าเท่ากับ 0
        		return '';
		}else{
			return $quer_code->result();
		}
	}

	public function search_product_ajax($key_show)
	{ 
		$quer_code = $this->db->query(" SELECT *
										FROM  halal_product
										LEFT JOIN halal_status ON halal_status.s_id = halal_product.p_status
										LEFT JOIN halal_investigate ON halal_investigate.inves_id = halal_product.p_id_investigate
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_product.p_id
										WHERE (halal_product.p_name LIKE '%$key_show%' OR halal_product.p_name_eng LIKE '%$key_show%' OR halal_product.p_barcode LIKE '%$key_show%' OR halal_product.p_brand LIKE '%$key_show%' OR halal_product.p_status LIKE '%$key_show%') AND (halal_product.p_status_bin IS NULL OR NOT halal_product.p_status_bin = '1')
									  ");
		// return $quer_code->result();
		// return $quer_code->result();
		$numrow = $quer_code->num_rows();
		if ($numrow == 0) { //นับแถวของข้อมูล ถ้าเท่ากับ 0
        		return '';
		}else{
			return $quer_code->result();
		}
	}

	public function product_halal($id)
	{ 
		$quer_code = $this->db->query(" SELECT *
										FROM  halal_product
										LEFT JOIN halal_status ON halal_status.s_id = halal_product.p_status
										LEFT JOIN halal_investigate ON halal_investigate.inves_id = halal_product.p_id_investigate
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_product.p_id
										LEFT JOIN halal_halal ON halal_halal.h_id_product = halal_product.p_id
										WHERE (halal_product.p_status = '$id') AND (halal_product.p_status_bin IS NULL OR NOT halal_product.p_status_bin = '1')ORDER BY p_id DESC
									  ");
		return $quer_code->result();
	}

	public function show_p($key_show)
	{
		$quer_code = $this->db->query(" SELECT *
										FROM  halal_product
										LEFT JOIN halal_status ON halal_status.s_id = halal_product.p_status
										LEFT JOIN halal_investigate ON halal_investigate.inves_id = halal_product.p_id_investigate
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_product.p_id
										LEFT JOIN halal_product_size ON halal_product_size.pz_id = halal_product.p_net
										-- LEFT JOIN halal_halal ON halal_halal.h_id_product = halal_product.p_id
										LEFT JOIN halal_halal ON halal_halal.h_id_product = halal_product.p_id
										WHERE halal_product.p_id LIKE '$key_show' ORDER BY main_pic_id  DESC LIMIT 1
									  ");
		return $quer_code->result();
	}

	public function show_p_pic($key_show)
	{
		$quer_code = $this->db->query(" SELECT *
										FROM  halal_pic
										WHERE halal_pic.pic_ip_id LIKE '$key_show' ORDER BY pic_id DESC LIMIT 4
									  ");
		return $quer_code->result();
	}

	public function show_concerned($key_show)
	{
		$quer_code = $this->db->query(" SELECT *
										FROM  halal_product
										WHERE (halal_product.p_id LIKE '$key_show' OR halal_product.p_barcode LIKE '$key_show')
									  ");
		// $pro = $quer_code->result();
		foreach ($quer_code->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
			$cal = $rs["p_brand"]; //ตรงนี้เราจะได้ค่า CP18100
		}

		$quer_code111 = $this->db->query("  SELECT *
											FROM  halal_product
											LEFT JOIN halal_status ON halal_status.s_id = halal_product.p_status
											LEFT JOIN halal_investigate ON halal_investigate.inves_id = halal_product.p_id_investigate
											LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_product.p_id
											WHERE halal_product.p_brand LIKE '$cal' ORDER BY p_brand DESC LIMIT 4
									  ");
		
		return $quer_code111->result();
		// return $cal;
	}

	public function ingredient()
	{ 
		$quer_code = $this->db->query(" SELECT *
										FROM  halal_ingredients
										LEFT JOIN halal_status ON halal_status.s_id = halal_ingredients.i_status
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_ingredients.i_id
										WHERE halal_ingredients.i_status_bin IS NULL OR NOT halal_ingredients.i_status_bin = '1'ORDER BY i_id DESC
									  ");
		return $quer_code->result();
	}
	public function ingredient1()
	{ 
		$quer_code = $this->db->query(" SELECT *
										FROM  halal_ingredients
										LEFT JOIN halal_status ON halal_status.s_id = halal_ingredients.i_status
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_ingredients.i_id
										WHERE halal_ingredients.i_status_bin IS NULL OR NOT halal_ingredients.i_status_bin = '1'ORDER BY i_id DESC LIMIT 3
									  ");
		$ing = $quer_code->result();

		$quer_code1 = $this->db->query(" SELECT *
										FROM  halal_product
										LEFT JOIN halal_status ON halal_status.s_id = halal_product.p_status
										LEFT JOIN halal_investigate ON halal_investigate.inves_id = halal_product.p_id_investigate
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_product.p_id
										LEFT JOIN halal_halal ON halal_halal.h_id_product = halal_product.p_id
										WHERE halal_product.p_status_bin IS NULL OR NOT halal_product.p_status_bin = '1'ORDER BY p_id DESC LIMIT 3
									  ");
		$pro = $quer_code1->result();

		$data = array(
					   '0' => $ing,
					   '1' => $pro,
					 );
		return $data;
	}

	public function ingredient_halal($id)
	{ 
		$quer_code = $this->db->query(" SELECT *
										FROM  halal_ingredients
										LEFT JOIN halal_status ON halal_status.s_id = halal_ingredients.i_status
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_ingredients.i_id
										WHERE (halal_ingredients.i_status = '$id') AND (halal_ingredients.i_status_bin IS NULL OR NOT halal_ingredients.i_status_bin = '1')ORDER BY i_id DESC LIMIT 3
									  ");
		return $quer_code->result();
	}

	public function ingredient_halal1($id)
	{ 
		$quer_code = $this->db->query(" SELECT *
										FROM  halal_ingredients
										LEFT JOIN halal_status ON halal_status.s_id = halal_ingredients.i_status
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_ingredients.i_id
										WHERE (halal_ingredients.i_status = '$id') AND (halal_ingredients.i_status_bin IS NULL OR NOT halal_ingredients.i_status_bin = '1')ORDER BY i_id DESC LIMIT 3
									  ");
		$ing = $quer_code->result();

		$quer_code1 = $this->db->query(" SELECT *
										FROM  halal_product
										LEFT JOIN halal_status ON halal_status.s_id = halal_product.p_status
										LEFT JOIN halal_investigate ON halal_investigate.inves_id = halal_product.p_id_investigate
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_product.p_id
										LEFT JOIN halal_halal ON halal_halal.h_id_product = halal_product.p_id
										WHERE (halal_product.p_status = '$id') AND (halal_product.p_status_bin IS NULL OR NOT halal_product.p_status_bin = '1')ORDER BY p_id DESC LIMIT 3
									  ");
		$pro = $quer_code1->result();

		$data = array(
					   '0' => $ing,
					   '1' => $pro,
					 );
		return $data;
	}

	public function search_ingre($key_search)
	{ 
        $quer_code = $this->db->query(" SELECT *
        								FROM  halal_ingredients
										LEFT JOIN halal_status ON halal_status.s_id = halal_ingredients.i_status
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_ingredients.i_id
										LEFT JOIN halal_investigate ON halal_investigate.inves_id = halal_ingredients.i_id_investigate
										WHERE (halal_ingredients.i_name LIKE '%$key_search%' OR halal_ingredients.i_h_number LIKE '%$key_search%' OR halal_ingredients.i_e_number LIKE '%$key_search%' OR halal_status.s_status LIKE '%$key_search%' OR halal_status.s_status_eng LIKE '%$key_search%' OR halal_investigate.inves_inspector LIKE '%$key_search%')
										AND (halal_ingredients.i_status_bin IS NULL OR NOT halal_ingredients.i_status_bin = '1') ORDER BY i_id DESC
									  ");
		$numrow = $quer_code->num_rows();
		if ($numrow == 0) { //นับแถวของข้อมูล ถ้าเท่ากับ 0
        		return '';
		}else{
			return $quer_code->result();
		}
	}

	// public function search_ingre($key_search)
	// { 
	// 	$quer_code = $this->db->query(" SELECT *
	// 									FROM  halal_product
	// 									LEFT JOIN halal_status ON halal_status.s_id = halal_product.p_status
	// 									LEFT JOIN halal_investigate ON halal_investigate.inves_id = halal_product.p_id_investigate
	// 									LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_product.p_id
	// 									WHERE (halal_product.p_name LIKE '%$key_search%' OR halal_product.p_name_eng LIKE '%$key_search%' OR halal_product.p_barcode LIKE '%$key_search%' OR halal_product.p_brand LIKE '%$key_search%' OR halal_product.p_status LIKE '%$key_search%') AND (halal_product.p_status_bin IS NULL OR NOT halal_product.p_status_bin = '1')
	// 								  ");
	// 	$numrow = $quer_code->num_rows();
				
        
	// 	if ($numrow == 0) { //นับแถวของข้อมูล ถ้าเท่ากับ 0
 //        		$quer_code = $this->db->query(" SELECT *
	// 	        								FROM  halal_ingredients
	// 											LEFT JOIN halal_status ON halal_status.s_id = halal_ingredients.i_status
	// 											LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_ingredients.i_id
	// 											LEFT JOIN halal_investigate ON halal_investigate.inves_id = halal_ingredients.i_id_investigate
	// 											WHERE (halal_ingredients.i_name LIKE '%$key_search%' OR halal_ingredients.i_h_number LIKE '%$key_search%' OR halal_ingredients.i_e_number LIKE '%$key_search%' OR halal_status.s_status LIKE '%$key_search%' OR halal_status.s_status_eng LIKE '%$key_search%' OR halal_investigate.inves_inspector LIKE '%$key_search%')
	// 											AND (halal_ingredients.i_status_bin IS NULL OR NOT halal_ingredients.i_status_bin = '1') ORDER BY i_id DESC
	// 										  ");
	// 			$numrow = $quer_code->num_rows();
	// 	}else if ($numrow == 0) {
	// 		return '';
	// 	}else{
	// 		return $quer_code->result();
	// 	}
	// }

	public function show_i($key_show)
	{
		$quer_code = $this->db->query(" SELECT *
										FROM  halal_ingredients
										LEFT JOIN halal_status ON halal_status.s_id = halal_ingredients.i_status 
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_ingredients.i_id
										LEFT JOIN halal_investigate ON halal_investigate.inves_id = halal_ingredients.i_id_investigate
										WHERE halal_ingredients.i_id LIKE '$key_show'
									  ");
		return $quer_code->result();
	}

	public function replace_i($i_name)
	{
		$this->db->select('i_replace');
        $this->db->where('i_replace',$i_name);
        $query = $this->db->get('halal_ingredients');
        $num = $query->num_rows();
        if($num > 0){
			$quer_code = $this->db->query(" SELECT *
											FROM  halal_ingredients
											LEFT JOIN halal_status ON halal_status.s_id = halal_ingredients.i_status 
											LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_ingredients.i_id
											LEFT JOIN halal_investigate ON halal_investigate.inves_id = halal_ingredients.i_id_investigate
											WHERE halal_ingredients.i_replace LIKE '$i_name'
										  ");
			return $quer_code->result();
		}else{
			return "false";
		}
	}

	public function replace_i1($key_show)
	{
		$quer_code = $this->db->query(" SELECT *
										FROM  halal_ingredients
										WHERE halal_ingredients.i_id LIKE '$key_show'
									  ");
		// $pro = $quer_code->result();
		foreach ($quer_code->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
			$cal = $rs["i_name"]; //ตรงนี้เราจะได้ค่า CP18100
		}
		// return $cal;
		$quer_code111 = $this->db->query("  SELECT *
											FROM  halal_product
											LEFT JOIN halal_status ON halal_status.s_id = halal_product.p_status
											LEFT JOIN halal_investigate ON halal_investigate.inves_id = halal_product.p_id_investigate
											LEFT JOIN halal_pic ON halal_pic.pic_ip_id = halal_product.p_id
											WHERE halal_product.p_brand LIKE '$cal' ORDER BY p_brand DESC LIMIT 4
									  ");
		
		return $quer_code111->result();
	}
		

	public function insert_contack()
	{
	  	// เวลาปัจจุบัน
	  	$date_time = date("Y/m/d H:i:s");
	  
			$query_id = $this->db->query("SELECT con_id 
												FROM halal_contact 
												ORDER BY con_id DESC LIMIT 1");
			$numrow = $query_id->num_rows();
			foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
				$cal = $rs["con_id"]; //ตรงนี้เราจะได้ค่า CP18100
			}

			if ($numrow == 0) { //นับแถวของข้อมูล ถ้าเท่ากับ 0
        		$con_id = "C101";
			}else{
				$cut_cp = substr($cal, 1); // ตัด1ตัวหน้าออก
				$cut_cp++;
				$set_id = str_replace($cut_cp, "C". $cut_cp, $cut_cp); //ทำการ Get Year ของปัจจุบันลงไป$PROVINCE_CODE
				$con_id = $set_id;

			}

			$this->db->select('con_id');
			$this->db->where('con_id',$con_id);
			$query_num = $this->db->get('halal_contact');
			$num = $query_num->num_rows();
			if($num > 0){
				//รหัสกิจกรรมซ้ำ
				return "false_con_id";
			}else{
				$config['upload_path']   = './imag/'; 
				$config['allowed_types'] = 'gif|jpg|png'; 
				$config['max_size']      = 0; 
				$config['max_width']     = 0; 
				$config['max_height']    = 0;  
				$config['encrypt_name']  = true;

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('i_upload_fill')) 
				{//อัปโหลดรูปไม่สำเร็จ
			  		return "false_file";
				}else{
					$data = array(
					  'con_id' => $con_id,
					  'con_name' => $this->input->post('name'),
					  'con_surname' => $this->input->post('surname'),
					  'con_subject' => $this->input->post('contact_subject'),
					  'con_detail' => $this->input->post('message'),
					  'con_email' => $this->input->post('email'),
					  'con_tel' => $this->input->post('numberphone'),
					  'con_status' => 0,
					  'con_time' => $date_time,
					);

					$data1 = array(
					  'main_pic_ip_id' => $con_id,
			  		  'main_pic_pic' => $this->upload->data('file_name'),
					);

					$query_check=$this->db->insert('halal_contact',$data);
					$query_check1=$this->db->insert('halal_main_pic',$data1);

					if ($query_check) {
						// $this->session->set_flashdata('false_true','ลงทะเบียนสำเร็จ');
						return "true";
					}else{
					  	return "false_insert";
					}
				}
			}
	}

	public function insert_contack_no()
	{
	  	// เวลาปัจจุบัน
	  	$date_time = date("Y/m/d H:i:s");
	  
		$query_id = $this->db->query("SELECT con_id 
											FROM halal_contact 
											ORDER BY con_id DESC LIMIT 1");
		$numrow = $query_id->num_rows();
		foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
			$cal = $rs["con_id"]; //ตรงนี้เราจะได้ค่า CP18100
		}

		if ($numrow == 0) { //นับแถวของข้อมูล ถ้าเท่ากับ 0
    		$con_id = "C101";
		}else{
			$cut_cp = substr($cal, 1); // ตัด1ตัวหน้าออก
			$cut_cp++;
			$set_id = str_replace($cut_cp, "C". $cut_cp, $cut_cp); //ทำการ Get Year ของปัจจุบันลงไป$PROVINCE_CODE
			$con_id = $set_id;

		}

		$this->db->select('con_id');
		$this->db->where('con_id',$con_id);
		$query_num = $this->db->get('halal_contact');
		$num = $query_num->num_rows();
		if($num > 0){
			//รหัสกิจกรรมซ้ำ
			return "false_con_id";
		}else{
			$data = array(
			  'con_id' => $con_id,
			  'con_name' => $this->input->post('name'),
			  'con_surname' => $this->input->post('surname'),
			  'con_subject' => $this->input->post('contact_subject'),
			  'con_detail' => $this->input->post('message'),
			  'con_email' => $this->input->post('email'),
			  'con_tel' => $this->input->post('numberphone'),
			  'con_status' => 0,
			  'con_time' => $date_time,
			);

			// $data1 = array(
			//   'main_pic_ip_id' => $con_id,
	  // 		  'main_pic_pic' => $this->upload->data('file_name'),
			// );

			$query_check=$this->db->insert('halal_contact',$data);
			// $query_check1=$this->db->insert('halal_main_pic',$data1);

			if ($query_check) {
				// $this->session->set_flashdata('false_true','ลงทะเบียนสำเร็จ');
				return "true";
			}else{
			  	return "false_insert";
			}
			
		}
	}

	// public function insert_contact()
	// {
	//   // เวลาปัจจุบัน
	//   $date_time = date("Y/m/d H:i:s");
	  
	//   //ตรวจาอบemail
	//   $contact_email = $this->input->post('email');
	//   if (!filter_var($contact_email, FILTER_VALIDATE_EMAIL)) {
	// 	return "false_mail";
	//   }else{
 //            	$query_id = $this->db->query("SELECT con_id 
	// 												FROM halal_contact 
	// 												ORDER BY con_id DESC LIMIT 1");
	// 			$numrow = $query_id->num_rows();
	// 			foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
	// 				$cal = $rs["con_id"]; //ตรงนี้เราจะได้ค่า CP18100
	// 			}

	// 			if ($numrow == 0) { //นับแถวของข้อมูล ถ้าเท่ากับ 0
	//         		$con_id = "C100";
	// 			}else{
	// 				$cut_cp = substr($cal, 1); // ตัด1ตัวหน้าออก
	// 				$cut_cp++;
	// 				$set_id = str_replace($cut_cp, "C". $cut_cp, $cut_cp); //ทำการ Get Year ของปัจจุบันลงไป$PROVINCE_CODE
	// 				$con_id = $set_id;

	// 			}

	// 			$this->db->select('con_id');
	// 			$this->db->where('con_id',$con_id);
	// 			$query_num = $this->db->get('halal_contact');
	// 			$num = $query_num->num_rows();
	// 			if($num > 0){
	// 				//รหัสกิจกรรมซ้ำ
	// 				return "false_con_id";
	// 			}else{

	// 				$config['upload_path']   = './imag/'; 
	// 				$config['allowed_types'] = 'gif|jpg|png'; 
	// 				$config['max_size']      = 0; 
	// 				$config['max_width']     = 0; 
	// 				$config['max_height']    = 0;  
	// 				$config['encrypt_name']  = true;

	// 				$this->load->library('upload', $config);

	// 				if ($this->upload->do_upload('i_upload_fill')) 
	// 				{//อัปโหลดรูปไม่สำเร็จ
	// 			  		return "false_file";
	// 				}else{
	// 					$data = array(
	// 					  'con_id' => $con_id,
	// 					  'con_name' => $this->input->post('name'),
	// 					  'con_surname' => $this->input->post('surname'),
	// 					  'con_subject' => $this->input->post('contact_subject'),
	// 					  'con_detail' => $this->input->post('message'),
	// 					  'con_email' => $contact_email,
	// 					  'con_tel' => $this->input->post('numberphone'),
	// 					  'con_time' => $date_time,
	// 					);

	// 					$data1 = array(
	// 					  'main_pic_ip_id' => $i_id,
	// 			  		  'main_pic_pic' => $this->upload->data('file_name'),
	// 					);


	// 					// $data1 = array(
	// 					// 	'main_pic_pic' => $this->upload->data('file_name'),
	// 					// );

	// 					$query_check=$this->db->insert('halal_contact',$data);
	// 					$query_check1=$this->db->insert('halal_contact',$data1);

	// 					if ($query_check) {
	// 						// $this->session->set_flashdata('false_true','ลงทะเบียนสำเร็จ');
	// 						return "true";
	// 					}else{
	// 					  	return "false_insert";
	// 					}
	// 				}
	// 			}
	// 		// }else{//อัปโหลดรูปไม่สำเร็จ
	// 		//   return "false_file";
	// 		// }
	// 	}
	// }

	public function check_login()
	{
	  	$user = $this->input->post('user');
	  	$password = $this->input->post('password');

		$where1 = "m_email='$user' AND m_password='$password'";
		$this->db->where($where1);
		$query = $this->db->get("halal_member");
		return $query->result();
	}

	public function register_admin()
	{
	  	// เวลาปัจจุบัน
	  	$date_time = date("Y/m/d H:i:s");
	  	$email = $this->input->post('email');
	  	$passport = $this->input->post('passport');
	  
	  	//ตรวจาอบemail
	  // 	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			// return "false_mail";
	  // 	}else{
			$query_id = $this->db->query("SELECT m_id 
												FROM halal_member 
												ORDER BY m_id DESC LIMIT 1");
			$numrow = $query_id->num_rows();
			foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
				$cal = $rs["m_id"]; //ตรงนี้เราจะได้ค่า CP18100
			}

			if ($numrow == 0) { //นับแถวของข้อมูล ถ้าเท่ากับ 0
        		$m_id = "M100";
			}else{
				$cut_cp = substr($cal, 1); // ตัด1ตัวหน้าออก
				$cut_cp++;
				$set_id = str_replace($cut_cp, "M". $cut_cp, $cut_cp); //ทำการ Get Year ของปัจจุบันลงไป$PROVINCE_CODE
				$m_id = $set_id;

			}

			$this->db->select('m_id');
			$this->db->where('m_id',$m_id);
			$query_num = $this->db->get('halal_member');
			$num = $query_num->num_rows();
			if($num > 0){
				//รหัสกิจกรรมซ้ำ
				return "false_m_id";
			}else{
				$this->db->select('m_passport');
				$this->db->where('m_passport',$passport);
				$query_passport = $this->db->get('halal_member');
				$num = $query_passport->num_rows();
				if($num > 0){
					return "false_passport";
				}else{
					$this->db->select('m_email');
					$this->db->where('m_email',$email);
					$query = $this->db->get('halal_member');
					$num = $query->num_rows();
					if($num > 0){
						return "false_mail";
					}else{
						$data = array(
						  'm_id' => $m_id,
						  'm_name' => $this->input->post('name'),
						  'm_surname' => $this->input->post('surname'),
						  'm_surname' => $this->input->post('surname'),
						  'm_email' => $this->input->post('email'),
						  'm_password' => $this->input->post('password'),
						  'm_passport' => $this->input->post('passport'),
						  'm_tel' => $this->input->post('numberphone'),
						  'm_position' => $this->input->post('duty'),
						  'm_status' => "0",
						);

						// $this->db->insert('halal_member',$data);
						$query_check=$this->db->insert('halal_member',$data);

						if ($query_check) {
							$this->session->set_flashdata('rigister_success','ลงทะเบียนสำเร็จ');
							return "false_true";
						}else{
						  	return "false_regieter";
						}
					}//ปิดเช็คเมล
				}//ปีกกาของเลขปชช
			}//ปิดid
		// }ปิดเมล
	}

	public function chek_forgot()
	{
		$forgot_email = $this->input->post('email');
		$forgot_id_card = $this->input->post('passport');

		$quer_code = $this->db->query(" SELECT *
										FROM halal_member
										WHERE m_email = '$forgot_email' AND m_passport = '$forgot_id_card' 
									  ");
		return $quer_code->result();
	}

	public function insert_contack1()
	{
	  	$date_time = date("Y/m/d H:i:s");
	  
		$query_id = $this->db->query("SELECT con_id 
											FROM halal_contact 
											ORDER BY con_id DESC LIMIT 1");
		$numrow = $query_id->num_rows();
		foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
			$cal = $rs["con_id"]; //ตรงนี้เราจะได้ค่า CP18100
		}

		if ($numrow == 0) { //นับแถวของข้อมูล ถ้าเท่ากับ 0
    		$con_id = "C101";
		}else{
			$cut_cp = substr($cal, 1); // ตัด1ตัวหน้าออก
			$cut_cp++;
			$set_id = str_replace($cut_cp, "C". $cut_cp, $cut_cp); //ทำการ Get Year ของปัจจุบันลงไป$PROVINCE_CODE
			$con_id = $set_id;

		}
		$this->db->select('con_id');
		$this->db->where('con_id',$con_id);
		$query_num = $this->db->get('halal_contact');
		$num = $query_num->num_rows();
		if($num > 0){
			//รหัสกิจกรรมซ้ำ
			return "false_con_id";
		}else{
			
	  		return $con_id;
		}//ปิดid
	}

	

	// public function update_counter()
 //    {
 //        $data = array(
 //                      'count_date' => date("Y-m-d"),
 //                      'count_ip' => $_SERVER["REMOTE_ADDR"],
 //                      );

 //        $query=$this->db->insert('counter',$data);
 //    }
}
