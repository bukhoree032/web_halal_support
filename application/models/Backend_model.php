
<?php  
class Backend_model extends CI_Model {

	public function ingredients_type()
	{ 
		$quer_code = $this->db->query(" SELECT *
										FROM  halal_ingredients_type
										ORDER BY i_t_id DESC
									  ");
		return $quer_code->result();
	}

	public function type_ing_insert() //แก้ไข
	{
		$query_id = $this->db->query("SELECT i_t_id 
									FROM halal_ingredients_type 
									ORDER BY i_t_id DESC LIMIT 1");
		$numrow = $query_id->num_rows();
		foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
			$cal = $rs["i_t_id"]; //ตรงนี้เราจะได้ค่า CP18100
		}

		if ($numrow == 0) { //นับแถวของข้อมูล ถ้าเท่ากับ 0
    		$i_t_id = "1";
		}else{
			$cal++;
			$i_t_id = $cal;

		}

		// return $p_t_id;
		$data = array(
					  'i_t_id' => $i_t_id,
					  'i_t_name' => $this->input->post('i_name_type'),
					);
		$query_check=$this->db->insert('halal_ingredients_type',$data);
	}

	public function type_ing_edit($edit_id)
	{
		$this->db->FROM('halal_ingredients_type');
		$this->db->WHERE('halal_ingredients_type.i_t_id',$edit_id);
		$edit = $this->db->get();
		// return $edit->result();
		$status = $edit->result();
		return $status;
	}

	public function type_ing_update() //แก้ไข
	{
		$i_t_id = $this->input->post('id');
		// $date_time = date("Y/m/d H:i:s");//ดึงเวลาปัจจุบันใส่ในตัวแปร
		// $id_admin = $this->session->userdata('ad_id');//ดึงรหัสผู้ลบข้อมูลใส่ตัวแปร
		$data = array(
					  'i_t_id' => $i_t_id,
					  'i_t_name' => $this->input->post('i_name_type'),
					);

		$this->db->where('i_t_id',$i_t_id);
		$this->db->update('halal_ingredients_type',$data);

	}

	public function type_ing_delet() //ลบ
	{
		$i_t_id = $this->input->post('id');
		$this->db->where('i_t_id',$i_t_id);
        $this->db->delete('halal_ingredients_type');
	}

	public function type_ing_delet_all()
    { 
        for($i=0;$i<count($_POST["checkdel"]);$i++){
            if ($_POST["checkdel"][$i] != ""){
                $id_delet = $_POST["checkdel"][$i];

				$this->db->where('i_t_id',$id_delet);
				$this->db->delete('halal_ingredients_type');
            }
        }
    }


	public function indexx()
	{ 
		$query1 = $this->db->query("SELECT *
									FROM halal_member 
									");
		$member = $query1->num_rows();

		$query2 = $this->db->query("SELECT *
									FROM halal_ingredients
									WHERE i_status = '1'
									");
		$i_halal = $query2->num_rows();

		$query2 = $this->db->query("SELECT *
									FROM halal_ingredients
									WHERE i_status = '2'
									");
		$i_haram = $query2->num_rows();

		$query2 = $this->db->query("SELECT *
									FROM halal_ingredients
									WHERE i_status = '3'
									");
		$i_syubhat = $query2->num_rows();

		$query2 = $this->db->query("SELECT *
									FROM halal_product
									WHERE p_status = '1'
									");
		$p_halal = $query2->num_rows();

		$query2 = $this->db->query("SELECT *
									FROM halal_product
									WHERE p_status = '2'
									");
		$p_haram = $query2->num_rows();

		$query2 = $this->db->query("SELECT *
									FROM halal_product
									WHERE p_status = '3'
									");
		$p_syubhat = $query2->num_rows();

		$query2 = $this->db->query("SELECT *
									FROM halal_contact
									");
		$contact = $query2->num_rows();

		$the_chart["data"] = ["$member", "$i_halal", "$i_haram", "$i_syubhat", "$p_halal", "$p_haram", "$p_syubhat", "$contact"];

		return  $the_chart["data"];
	}

	public function product()
	{ 
		$quer_code = $this->db->query(" SELECT *
										FROM  halal_product
										LEFT JOIN halal_status ON halal_status.s_id = halal_product.p_status
										LEFT JOIN halal_investigate ON halal_investigate.inves_id = halal_product.p_id_investigate
										LEFT JOIN halal_halal ON halal_halal.h_id_product = halal_product.p_id
										-- LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_product.i_id
										WHERE halal_product.p_status_bin IS NULL OR NOT halal_product.p_status_bin = '1'ORDER BY p_id DESC
									  ");
		return $quer_code->result();
	}

	public function product_type()
	{ 
		$quer_code = $this->db->query(" SELECT *
										FROM  halal_product_type
										ORDER BY p_t_id DESC
									  ");
		return $quer_code->result();
	}

	public function type_insert() //แก้ไข
	{
		$query_id = $this->db->query("SELECT p_t_id 
									FROM halal_product_type 
									ORDER BY p_t_id DESC LIMIT 1");
		$numrow = $query_id->num_rows();
		foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
			$cal = $rs["p_t_id"]; //ตรงนี้เราจะได้ค่า CP18100
		}

		if ($numrow == 0) { //นับแถวของข้อมูล ถ้าเท่ากับ 0
    		$p_t_id = "1";
		}else{
			$cal++;
			$p_t_id = $cal;

		}

		// return $p_t_id;
		$data = array(
					  'p_t_id' => $p_t_id,
					  'p_t_name' => $this->input->post('p_name'),
					);
		$query_check=$this->db->insert('halal_product_type',$data);
	}

	public function type_edit($edit_id)
	{
		$this->db->FROM('halal_product_type');
		$this->db->WHERE('halal_product_type.p_t_id',$edit_id);
		$edit = $this->db->get();
		// return $edit->result();
		$status = $edit->result();
		return $status;
	}

	public function type_update() //แก้ไข
	{
		$p_t_id = $this->input->post('id');
		// $date_time = date("Y/m/d H:i:s");//ดึงเวลาปัจจุบันใส่ในตัวแปร
		// $id_admin = $this->session->userdata('ad_id');//ดึงรหัสผู้ลบข้อมูลใส่ตัวแปร
		$data = array(
					  'p_t_id' => $p_t_id,
					  'p_t_name' => $this->input->post('p_name'),
					);

		$this->db->where('p_t_id',$p_t_id);
		$this->db->update('halal_product_type',$data);

	}

	public function type_delet() //ลบ
	{
		$p_t_id = $this->input->post('id');
		$this->db->where('p_t_id',$p_t_id);
        $this->db->delete('halal_product_type');
	}

	public function type_delet_all()
    { 
        for($i=0;$i<count($_POST["checkdel"]);$i++){
            if ($_POST["checkdel"][$i] != ""){
                $id_delet = $_POST["checkdel"][$i];

				$this->db->where('p_t_id',$id_delet);
				$this->db->delete('halal_product_type');
            }
        }
    }


	public function product_edit($id_product)
	{ 
		// $quer_code = $this->db->query(" SELECT *
		// 								FROM  halal_product
		// 								LEFT JOIN halal_status ON halal_status.s_id = halal_product.p_status
		// 								LEFT JOIN halal_investigate ON halal_investigate.inves_id = halal_product.p_id_investigate
		// 								-- LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_product.i_id
		// 								WHERE halal_product.p_id = '$id_product'
		// 							  ");
		// return $quer_code->result();
		$this->db->FROM('halal_product');
        $this->db->join('halal_status', 'halal_product.p_status = halal_status.s_id', 'left');
        $this->db->join('halal_investigate', 'halal_product.p_id_investigate = halal_investigate.inves_id', 'left');
        $this->db->join('halal_main_pic', 'halal_product.p_id = halal_main_pic.main_pic_ip_id', 'left');
        $this->db->join('halal_product_size', 'halal_product.p_net = halal_product_size.pz_id', 'left');
        $this->db->join('halal_halal', 'halal_product.p_id = halal_halal.h_id_product', 'left');
        $this->db->WHERE('halal_product.p_id',$id_product);
        $edit = $this->db->get();
        return $edit->result();
	}

	public function product_insert() //แก้ไข
	{
		$date_time = date("Y/m/d H:i:s");//ดึงเวลาปัจจุบันใส่ในตัวแปร
		// $id_admin = $this->session->userdata('ad_id');//ดึงรหัสผู้ลบข้อมูลใส่ตัวแปร

		$query_id = $this->db->query("SELECT p_id 
									FROM halal_product 
									ORDER BY p_id DESC LIMIT 1");
			$numrow = $query_id->num_rows();
			foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
				$cal = $rs["p_id"]; //ตรงนี้เราจะได้ค่า CP18100
			}

			if ($numrow == 0) { //นับแถวของข้อมูล ถ้าเท่ากับ 0
        		$p_id = "P101";
			}else{
				$cut_cp = substr($cal, 1); // ตัด1ตัวหน้าออก
				$cut_cp++;
				$set_id = str_replace($cut_cp, "P". $cut_cp, $cut_cp); //ทำการ Get Year ของปัจจุบันลงไป$PROVINCE_CODE
				$p_id = $set_id;

			}

			$config['upload_path']   = './imag/'; 
			$config['allowed_types'] = 'gif|jpg|png'; 
			$config['max_size']      = 0; 
			$config['max_width']     = 0; 
			$config['max_height']    = 0;  
			$config['encrypt_name']  = true;

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('p_upload_fill')) 
			{
				$this->db->select('p_id');
				$this->db->where('p_id',$p_id);
				$query_num = $this->db->get('halal_product');
				$num = $query_num->num_rows();
				if($num > 0){
					//รหัสกิจกรรมซ้ำ
					return "false_p_id";
				}else{
					$data = array(
								  'p_id' => $p_id,
								  'p_idproduct' => $this->input->post('p_idproduct'),
								  'p_name' => $this->input->post('p_name'),
								  'p_name_eng' => $this->input->post('p_name_eng'),
								  'p_brand' => $this->input->post('p_brand'),
								  'p_barcode' => $this->input->post('p_barcode'),
								  'p_size' => $this->input->post('p_size'),
					  			  'p_net' => $this->input->post('p_size2'),
								  'p_taste' => $this->input->post('p_taste'),
								  'p_type' => $this->input->post('p_type'),
								  'p_status' => $this->input->post('p_status'),
								  'p_id_investigate' => $this->input->post('p_id_investigate'),
								  'p_explain' => $this->input->post('p_explain'),
								  'p_status_bin' => 0,
								  'p_time' => $date_time,
								);

					$data1 = array(
						  		  'main_pic_pic' => $this->upload->data('file_name'),
								  'main_pic_ip_id' => $p_id,
								);

					$data2 = array(
								  'h_id_product' => $p_id,
								  'h_halal_number' => $this->input->post('p_halal'),
								  'h_receive' => $this->input->post('p_receive'),
								  'h_expire' => $this->input->post('p_expire'),
								);

					// $this->db->insert('halal_member',$data);
					$query_check=$this->db->insert('halal_product',$data);
					$query_check1=$this->db->insert('halal_main_pic',$data1);
					
					$p_status = $this->input->post('p_status');
					if ($p_status == '1') {
						$query_check2=$this->db->insert('halal_halal',$data2);
					}

					if ($query_check) {
						$this->session->set_flashdata('rigister_success','บันทึกการเปลียนแปลงสำเร็จ');
						return "false_true";
					}else{
					  	return "false_regieter";
					}
				}
			}else{//อัปโหลดรูปไม่สำเร็จ
			  return "false_file";
			}
	}

	public function product_update() //แก้ไข
	{
		$p_id = $this->input->post('p_id');
		$date_time = date("Y/m/d H:i:s");//ดึงเวลาปัจจุบันใส่ในตัวแปร
		// $id_admin = $this->session->userdata('ad_id');//ดึงรหัสผู้ลบข้อมูลใส่ตัวแปร
		$data = array(
					  'p_idproduct' => $this->input->post('p_idproduct'),
					  'p_name' => $this->input->post('p_name'),
					  'p_name_eng' => $this->input->post('p_name_eng'),
					  'p_brand' => $this->input->post('p_brand'),
					  'p_barcode' => $this->input->post('p_barcode'),
					  'p_size' => $this->input->post('p_size'),
					  'p_net' => $this->input->post('p_size2'),
					  'p_taste' => $this->input->post('p_taste'),
					  'p_type' => $this->input->post('p_type'),
					  'p_status' => $this->input->post('p_status'),
					  'p_id_investigate' => $this->input->post('p_id_investigate'),
					  'p_status_bin' => 0,
					  'p_time_update' => $date_time,
					);

		$data1 = array(
					  	'h_id_product' => $p_id,
					  	'h_halal_number' => $this->input->post('p_halal'),
					  	'h_receive' => $this->input->post('p_receive'),
					  	'h_expire' => $this->input->post('p_expire'),
						);

		$this->db->where('p_id',$p_id);
		$this->db->update('halal_product',$data);


		$p_status = $this->input->post('p_status');
		if ($p_status == '1') {
			$this->db->where('h_id_product',$p_id);
			$this->db->update('halal_halal',$data1);
		}
		$this->session->set_flashdata('rigister_success','บันทึกการเปลียนแปลงสำเร็จ');
	}

	public function product_update_file() //แก้ไข
	{
		$p_id = $this->input->post('p_id');
		$config['upload_path']   = './imag/'; 
		$config['allowed_types'] = 'gif|jpg|png'; 
		$config['max_size']      = 0; 
		$config['max_width']     = 0; 
		$config['max_height']    = 0;  
		$config['encrypt_name']  = true;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('p_upload_fill')) 
		{
			return "false_fill";
		}else{
			$data = array(
					'main_pic_pic' => $this->upload->data('file_name'),
					);

			$this->db->where('main_pic_ip_id',$p_id);
			$this->db->update('halal_main_pic',$data);
			$this->session->set_flashdata('rigister_success','บันทึกการเปลียนแปลงสำเร็จ');
			return "ok";
		}
	}

	public function product_bin() //แก้ไข
	{
		$p_id = $this->input->post('id');
		$data = array(
					  'p_status_bin' => "1",
					);

		$this->db->where('p_id',$p_id);
		$this->db->update('halal_product',$data);
	}

	public function product_bin_all()
    { 
        for($i=0;$i<count($_POST["checkdel"]);$i++){
            if ($_POST["checkdel"][$i] != ""){
                $id_delet = $_POST["checkdel"][$i];

				$data = array(
					  'p_status_bin' => "1",
					);
				
				$this->db->where('p_id',$id_delet);
				$this->db->update('halal_product',$data);
            }
        }
    }

    public function product_bin1()
	{ 
		$quer_code = $this->db->query(" SELECT *
										FROM  halal_product
										LEFT JOIN halal_status ON halal_status.s_id = halal_product.p_status
										LEFT JOIN halal_investigate ON halal_investigate.inves_id = halal_product.p_id_investigate
										-- LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_product.i_id
										WHERE halal_product.p_status_bin = '1'ORDER BY p_id DESC
									  ");
		return $quer_code->result();
	}

	public function product_recover() //แก้ไข
	{
		$p_id = $this->input->post('id');
		$data = array(
					  'p_status_bin' => 0,
					);

		$this->db->where('p_id',$p_id);
		$this->db->update('halal_product',$data);
	}

	public function product_delet() //ลบ
	{
		$p_id = $this->input->post('id');
		$this->db->where('p_id',$p_id);
        $this->db->delete('halal_product');
		$this->db->where('main_pic_ip_id',$p_id);
        $this->db->delete('halal_main_pic');
	}

	public function product_recover_all()
    { 
        for($i=0;$i<count($_POST["checkdel"]);$i++){
            if ($_POST["checkdel"][$i] != ""){
                $id_delet = $_POST["checkdel"][$i];

				$data = array(
					  'p_status_bin' => 0,
					);

				$this->db->where('p_id',$id_delet);
				$this->db->update('halal_product',$data);
            }
        }
    }

	public function product_delet_all()
    { 
        for($i=0;$i<count($_POST["checkdel"]);$i++){
            if ($_POST["checkdel"][$i] != ""){
                $id_delet = $_POST["checkdel"][$i];

				$this->db->where('p_id',$id_delet);
				$this->db->delete('halal_product');
            }
        }
    }

    public function product_master_delet_all()
    {

        $p_status_bin = "1";
		$this->db->WHERE('p_status_bin',$p_status_bin);
		$this->db->delete('halal_product');
		$this->db->where('main_pic_ip_id',$p_status_bin);
        $this->db->delete('halal_main_pic');
    }

	public function ingredient()
	{ 
		$quer_code = $this->db->query(" SELECT *
										FROM  halal_ingredients
										LEFT JOIN halal_status ON halal_status.s_id = halal_ingredients.i_status
										LEFT JOIN halal_investigate ON halal_investigate.inves_id = halal_ingredients.i_id_investigate
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_ingredients.i_id
										WHERE halal_ingredients.i_status_bin IS NULL OR NOT halal_ingredients.i_status_bin = '1'ORDER BY i_id DESC
									  ");
		return $quer_code->result();
	}

	public function ing_detail($key_show)
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

	public function pro_detail($key_show)
	{ 
		$quer_code = $this->db->query(" SELECT *
										FROM  halal_product
										LEFT JOIN halal_status ON halal_status.s_id = halal_product.p_status
										LEFT JOIN halal_investigate ON halal_investigate.inves_id = halal_product.p_id_investigate
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_product.p_id
										LEFT JOIN halal_product_size ON halal_product_size.pz_id = halal_product.p_net
										-- LEFT JOIN halal_halal ON halal_halal.h_id_product = halal_product.p_id
										LEFT JOIN halal_halal ON halal_halal.h_id_product = halal_product.p_id
										WHERE halal_product.p_id LIKE '$key_show'
									  ");
		return $quer_code->result();
	}

	public function status_inves()
	{

		$this->db->FROM('halal_status');
		$status1 = $this->db->get();
		// return $edit->result();
		$status = $status1->result();

		$this->db->FROM('halal_investigate');
		$investigate1 = $this->db->get();
		// return $edit->result();
		$investigate = $investigate1->result();

		$this->db->FROM('halal_product_type');
		$product_type1 = $this->db->get();
		// return $edit->result();
		$product_type = $product_type1->result();

		$this->db->FROM('halal_product_size');
		$product_size = $this->db->get();
		// return $edit->result();
		$product_size1 = $product_size->result();

		$this->db->FROM('halal_ingredients_type');
		$halal_ingredients_type = $this->db->get();
		// return $edit->result();
		$halal_ingredients_type1 = $halal_ingredients_type->result();

		$data = array(
					   '0' => $status,
					   '1' => $investigate,
					   '2' => $product_type,
					   '3' => $product_size1,
					   '4' => $halal_ingredients_type1,
					 );
		return $data;
	}


	public function ingredient_edit($edit_id)
	{
		$this->db->FROM('halal_ingredients');
		$this->db->join('halal_status', 'halal_ingredients.i_status = halal_status.s_id', 'left');
		$this->db->join('halal_investigate', 'halal_ingredients.i_id_investigate = halal_investigate.inves_id', 'left');
		$this->db->join('halal_main_pic', 'halal_ingredients.i_id = halal_main_pic.main_pic_ip_id', 'left');
		$this->db->WHERE('halal_ingredients.i_id',$edit_id);
		$edit = $this->db->get();
		// return $edit->result();
		$ingredients = $edit->result();

		$this->db->FROM('halal_status');
		$status1 = $this->db->get();
		// return $edit->result();
		$status = $status1->result();

		$this->db->FROM('halal_investigate');
		$investigate1 = $this->db->get();
		// return $edit->result();
		$investigate = $investigate1->result();

		$data = array(
					   '0' => $ingredients,
					   '1' => $status,
					   '2' => $investigate,
					 );
		return $data;
	}

	public function ingredient_update() //แก้ไข
	{
		$i_id = $this->input->post('id');
		$date_time = date("Y/m/d H:i:s");//ดึงเวลาปัจจุบันใส่ในตัวแปร
		// $id_admin = $this->session->userdata('ad_id');//ดึงรหัสผู้ลบข้อมูลใส่ตัวแปร
		$data = array(
					  'i_ingredients_id' => $this->input->post('i_ingredients_id'),
					  'i_name' => $this->input->post('i_name'),
					  'i_name_sci' => $this->input->post('i_name_sci'),
					  'i_h_number' => $this->input->post('i_h_number'),
					  'i_e_number' => $this->input->post('i_e_number'),
					  'i_status' => $this->input->post('i_status'),
					  'i_explain' => $this->input->post('i_explain'),
					  'i_replace' => $this->input->post('i_replace'),
					  'i_id_investigate' => $this->input->post('i_id_investigate'),
					  'i_type' => $this->input->post('i_type'),
					  'i_time_update' => $date_time,
					);

		$this->db->where('i_id',$i_id);
		$this->db->update('halal_ingredients',$data);
	}

	public function ingredient_update_pic() //แก้ไข
	{
		$i_id = $this->input->post('id');

		$config['upload_path']   = './imag/'; 
		$config['allowed_types'] = 'gif|jpg|png'; 
		$config['max_size']      = 0; 
		$config['max_width']     = 0; 
		$config['max_height']    = 0;  
		$config['encrypt_name']  = true;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('p_upload_fill_update')){
			return ("false_fill");
		}else{
			$data1 = array(
						  'main_pic_ip_id' => $i_id,
				  		  'main_pic_pic' => $this->upload->data('file_name'),
						);

			$this->db->where('main_pic_ip_id',$i_id);
			$this->db->update('halal_main_pic',$data1);
		}
	}

	public function ingredient_insert() //แก้ไข
	{
		$i_id = $this->input->post('id');
		$date_time = date("Y/m/d H:i:s");//ดึงเวลาปัจจุบันใส่ในตัวแปร
		// $id_admin = $this->session->userdata('ad_id');//ดึงรหัสผู้ลบข้อมูลใส่ตัวแปร

		$query_id = $this->db->query("SELECT i_id 
												FROM halal_ingredients 
												ORDER BY i_id DESC LIMIT 1");
			$numrow = $query_id->num_rows();
			foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
				$cal = $rs["i_id"]; //ตรงนี้เราจะได้ค่า CP18100
			}

			if ($numrow == 0) { //นับแถวของข้อมูล ถ้าเท่ากับ 0
        		$i_id = "I100";
			}else{
				$cut_cp = substr($cal, 1); // ตัด1ตัวหน้าออก
				$cut_cp++;
				$set_id = str_replace($cut_cp, "I". $cut_cp, $cut_cp); //ทำการ Get Year ของปัจจุบันลงไป$PROVINCE_CODE
				$i_id = $set_id;

			}

			$config['upload_path']   = './imag/'; 
			$config['allowed_types'] = 'gif|jpg|png'; 
			$config['max_size']      = 0; 
			$config['max_width']     = 0; 
			$config['max_height']    = 0;  
			$config['encrypt_name']  = true;

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('i_upload_fill')) 
			{
				// $this->db->select('i_id');
				// $this->db->where('i_id',$i_id);
				// $query_num = $this->db->get('halal_ingredients');
				// $num = $query_num->num_rows();
				// if($num > 0){
				// 	//รหัสกิจกรรมซ้ำ
				// 	return "false_i_id";
				// }else{
					$data = array(
								  'i_id' => $i_id,
								  'i_ingredients_id' => $this->input->post('i_ingredients_id'),
								  'i_name' => $this->input->post('i_name'),
								  'i_name_sci' => $this->input->post('i_name_sci'),
								  'i_h_number' => $this->input->post('i_h_number'),
								  'i_e_number' => $this->input->post('i_e_number'),
								  'i_status' => $this->input->post('i_status'),
								  'i_explain' => $this->input->post('i_explain'),
								  'i_replace' => $this->input->post('i_replace'),
								  'i_id_investigate' => $this->input->post('i_id_investigate'),
								  'i_type' => $this->input->post('i_type'),
								  'i_time' => $date_time,
								);

					$data1 = array(
								  'main_pic_ip_id' => $i_id,
						  		  'main_pic_pic' => $this->upload->data('file_name'),
								);
					// $this->db->insert('halal_member',$data);
					$query_check=$this->db->insert('halal_ingredients',$data);
					$query_check1=$this->db->insert('halal_main_pic',$data1);

					if ($query_check) {
						$this->session->set_flashdata('rigister_success','บันทึกการเปลียนแปลงสำเร็จ');
						return "false_true";
					}else{
					  	return "false_regieter";
					}

					// $quer_code = $this->db->query(" SELECT *
					// 								FROM  halal_ingredients
					// 								LEFT JOIN halal_status ON halal_status.s_id = halal_ingredients.i_status
					// 								LEFT JOIN halal_investigate ON halal_investigate.inves_id = halal_ingredients.i_id_investigate
					// 								LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_ingredients.i_id
					// 								WHERE halal_ingredients.i_status_bin IS NULL OR NOT halal_ingredients.i_status_bin = '1'ORDER BY i_id DESC
					// 							  ");
					// return $quer_code->result();

				}else{//อัปโหลดรูปไม่สำเร็จ
				  return "false_file";
				}
	}

	public function ingredient_bin() //แก้ไข
	{
		$i_id = $this->input->post('id');
		$data = array(
					  'i_status_bin' => "1",
					);

		$this->db->where('i_id',$i_id);
		$this->db->update('halal_ingredients',$data);

		$quer_code = $this->db->query(" SELECT *
										FROM  halal_ingredients
										LEFT JOIN halal_status ON halal_status.s_id = halal_ingredients.i_status
										LEFT JOIN halal_investigate ON halal_investigate.inves_id = halal_ingredients.i_id_investigate
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_ingredients.i_id
										WHERE halal_ingredients.i_status_bin IS NULL OR NOT halal_ingredients.i_status_bin = '1'ORDER BY i_id DESC
									  ");
		return $quer_code->result();
	}

	public function ingredient_bin1() //แก้ไข
	{
		$quer_code = $this->db->query(" SELECT *
										FROM  halal_ingredients
										LEFT JOIN halal_status ON halal_status.s_id = halal_ingredients.i_status
										LEFT JOIN halal_investigate ON halal_investigate.inves_id = halal_ingredients.i_id_investigate
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_ingredients.i_id
										WHERE halal_ingredients.i_status_bin = '1'ORDER BY i_id DESC
									  ");
		return $quer_code->result();
	}

	public function ingredient_bin_all()
    { 
        for($i=0;$i<count($_POST["checkdel"]);$i++){
            if ($_POST["checkdel"][$i] != ""){
                $id_delet = $_POST["checkdel"][$i];

				$data = array(
					  'i_status_bin' => "1",
					);
				
				$this->db->where('i_id',$id_delet);
				$this->db->update('halal_ingredients',$data);
            }
        }
        
        $quer_code = $this->db->query(" SELECT *
										FROM  halal_ingredients
										LEFT JOIN halal_status ON halal_status.s_id = halal_ingredients.i_status
										LEFT JOIN halal_investigate ON halal_investigate.inves_id = halal_ingredients.i_id_investigate
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_ingredients.i_id
										WHERE halal_ingredients.i_status_bin IS NULL OR NOT halal_ingredients.i_status_bin = '1'ORDER BY i_id DESC
									  ");
		return $quer_code->result();
    }

	public function ingredient_recover() //แก้ไข
	{
		$i_id = $this->input->post('id');
		$data = array(
					  'i_status_bin' => 0,
					);

		$this->db->where('i_id',$i_id);
		$this->db->update('halal_ingredients',$data);

		$quer_code = $this->db->query(" SELECT *
										FROM  halal_ingredients
										LEFT JOIN halal_status ON halal_status.s_id = halal_ingredients.i_status
										LEFT JOIN halal_investigate ON halal_investigate.inves_id = halal_ingredients.i_id_investigate
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_ingredients.i_id
										WHERE halal_ingredients.i_status_bin = '1'ORDER BY i_id DESC
									  ");
		return $quer_code->result();
	}

	public function ingredient_delet() //ลบ
	{
		$i_id = $this->input->post('id');
		$this->db->where('i_id',$i_id);
        $this->db->delete('halal_ingredients');
		$this->db->where('main_pic_ip_id',$i_id);
        $this->db->delete('halal_main_pic');

		$quer_code = $this->db->query(" SELECT *
										FROM  halal_ingredients
										LEFT JOIN halal_status ON halal_status.s_id = halal_ingredients.i_status
										LEFT JOIN halal_investigate ON halal_investigate.inves_id = halal_ingredients.i_id_investigate
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_ingredients.i_id
										WHERE halal_ingredients.i_status_bin = '1'ORDER BY i_id DESC
									  ");
		return $quer_code->result();
	}

	public function ingredient_recover_all()
    { 
        for($i=0;$i<count($_POST["checkdel"]);$i++){
            if ($_POST["checkdel"][$i] != ""){
                $id_delet = $_POST["checkdel"][$i];

				$data = array(
					  'i_status_bin' => 0,
					);

				$this->db->where('i_id',$id_delet);
				$this->db->update('halal_ingredients',$data);
            }
        }
        
        $quer_code = $this->db->query(" SELECT *
										FROM  halal_ingredients
										LEFT JOIN halal_status ON halal_status.s_id = halal_ingredients.i_status
										LEFT JOIN halal_investigate ON halal_investigate.inves_id = halal_ingredients.i_id_investigate
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_ingredients.i_id
										WHERE halal_ingredients.i_status_bin = '1'ORDER BY i_id DESC
									  ");
		return $quer_code->result();
    }

	public function ingredient_delet_all()
    { 
        for($i=0;$i<count($_POST["checkdel"]);$i++){
            if ($_POST["checkdel"][$i] != ""){
                $id_delet = $_POST["checkdel"][$i];

				$this->db->where('i_id',$id_delet);
				$this->db->delete('halal_ingredients');
            }
        }

        $quer_code = $this->db->query(" SELECT *
										FROM  halal_ingredients
										LEFT JOIN halal_status ON halal_status.s_id = halal_ingredients.i_status
										LEFT JOIN halal_investigate ON halal_investigate.inves_id = halal_ingredients.i_id_investigate
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_ingredients.i_id
										WHERE halal_ingredients.i_status_bin = '1'ORDER BY i_id DESC
									  ");
		return $quer_code->result();
    }

    public function ingredient_master_delet_all()
    {

        $i_status_bin = "1";
		$this->db->WHERE('i_status_bin',$i_status_bin);
		$this->db->delete('halal_ingredients');
		$this->db->where('main_pic_ip_id',$i_status_bin);
        $this->db->delete('halal_main_pic');

        $quer_code = $this->db->query(" SELECT *
										FROM  halal_ingredients
										LEFT JOIN halal_status ON halal_status.s_id = halal_ingredients.i_status
										LEFT JOIN halal_investigate ON halal_investigate.inves_id = halal_ingredients.i_id_investigate
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_ingredients.i_id
										WHERE halal_ingredients.i_status_bin = '1'ORDER BY i_id DESC
									  ");
		return $quer_code->result();
    }

    public function contact_all()
    {
    	$quer_code = $this->db->query(" SELECT *
										FROM  halal_contact
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_contact.con_id
										WHERE halal_contact.con_status = '0' OR halal_contact.con_status = '1' ORDER BY con_id DESC
									  ");
		return $quer_code->result();
    }

    public function contact_alert_all()
    {
    	$quer_code = $this->db->query(" SELECT *
										FROM  halal_contact
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_contact.con_id
										WHERE halal_contact.con_status = '0'ORDER BY con_id DESC
									  ");
		return $quer_code->result();
    }

    public function contact_read($contact)
    {
    	if ($contact == "1") {
			$quer_code = $this->db->query(" SELECT *
										FROM  halal_contact
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_contact.con_id
										WHERE (halal_contact.con_subject LIKE 'ติดต่อสอบถาม') AND (halal_contact.con_status = '2') ORDER BY con_id DESC
									  ");
			return $quer_code->result();
		}else if ($contact == "2"){
			$quer_code = $this->db->query(" SELECT *
										FROM  halal_contact
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_contact.con_id
										WHERE (halal_contact.con_subject LIKE 'แจ้งปัญหา') AND (halal_contact.con_status = '2') ORDER BY con_id DESC
									  ");
			return $quer_code->result();
		}else if ($contact == "3"){
			$quer_code = $this->db->query(" SELECT *
										FROM  halal_contact
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_contact.con_id
										WHERE (halal_contact.con_subject LIKE 'แนะนำส่วนผสมหรือผลิตภัณฑ์') AND (halal_contact.con_status = '2') ORDER BY con_id DESC
									  ");
			return $quer_code->result();
		}
    }

     public function contact_detall()
    {
    	$con_id  = $this->input->post('id');
		$data = array(
					  'con_status' => 1,
					);

		$this->db->where('con_id ',$con_id );
		$this->db->update('halal_contact',$data);

    	$quer_code = $this->db->query(" SELECT *
										FROM  halal_contact
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_contact.con_id
										WHERE halal_contact.con_id LIKE '$con_id' ORDER BY con_id DESC
									  ");
		return $quer_code->result();
    }

    public function contact_detall_read()
    {
    	$con_id  = $this->input->post('id');
		// $data = array(
		// 			  'con_status' => 1,
		// 			);

		// $this->db->where('con_id ',$con_id );
		// $this->db->update('halal_contact',$data);

    	$quer_code = $this->db->query(" SELECT *
										FROM  halal_contact
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_contact.con_id
										WHERE halal_contact.con_id LIKE '$con_id' ORDER BY con_id DESC
									  ");
		return $quer_code->result();
    }

	public function contact_sussecc() //ลบ
	{
		$con_id  = $this->input->post('id');
		$con_subject1  = $this->input->post('con_subject');

		$data = array(
					  'con_status' => 2,
					);

		$this->db->where('con_id ',$con_id );
		$this->db->update('halal_contact',$data);

    	$quer_code = $this->db->query(" SELECT *
										FROM  halal_contact
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_contact.con_id
										WHERE (halal_contact.con_subject LIKE '$con_subject1') AND (halal_contact.con_status = '0' OR halal_contact.con_status = '1') ORDER BY con_id DESC
									  ");
		return $quer_code->result();
	}

	public function contact_delet() //ลบ
	{
		$con_id = $this->input->post('id');
		

        $query_id = $this->db->query("	SELECT * 
										FROM halal_contact 
										WHERE halal_contact.con_id LIKE '$con_id' ORDER BY con_id DESC LIMIT 1
										");
		$numrow = $query_id->num_rows();
		foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
			$cal = $rs["con_subject"]; //ตรงนี้เราจะได้ค่า CP18100
		}
		$this->db->where('con_id',$con_id);
        $this->db->delete('halal_contact');
		$this->db->where('main_pic_ip_id',$con_id);
        $this->db->delete('halal_main_pic');
		// return $cal;
        $quer_code = $this->db->query(" SELECT *
										FROM  halal_contact
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_contact.con_id
										WHERE (halal_contact.con_subject LIKE '$cal') AND (halal_contact.con_status = '0' OR halal_contact.con_status = '1') ORDER BY con_id DESC
									  ");
		return $quer_code->result();
	}

	public function contact_delet_read() //ลบ
	{
		$con_id = $this->input->post('id');
		
        $query_id = $this->db->query("	SELECT * 
										FROM halal_contact 
										WHERE halal_contact.con_id LIKE '$con_id' ORDER BY con_id DESC LIMIT 1
										");
		$numrow = $query_id->num_rows();
		foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
			$cal = $rs["con_subject"]; //ตรงนี้เราจะได้ค่า CP18100
		}
		$this->db->where('con_id',$con_id);
        $this->db->delete('halal_contact');
		$this->db->where('main_pic_ip_id',$con_id);
        $this->db->delete('halal_main_pic');
		// return $cal;
        $quer_code = $this->db->query(" SELECT *
										FROM  halal_contact
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_contact.con_id
										WHERE (halal_contact.con_subject LIKE '$cal') AND (halal_contact.con_status = '2') ORDER BY con_id DESC
									  ");
		return $quer_code->result();
	}

	public function contact_list($contact) //ลบ
	{
		if ($contact == "1") {
			$quer_code = $this->db->query(" SELECT *
										FROM  halal_contact
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_contact.con_id
										WHERE (halal_contact.con_subject LIKE 'ติดต่อสอบถาม') AND (halal_contact.con_status = '0' OR halal_contact.con_status = '1') ORDER BY con_id DESC
									  ");
			return $quer_code->result();
		}else if ($contact == "2"){
			$quer_code = $this->db->query(" SELECT *
										FROM  halal_contact
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_contact.con_id
										WHERE (halal_contact.con_subject LIKE 'แจ้งปัญหา') AND (halal_contact.con_status = '0' OR halal_contact.con_status = '1') ORDER BY con_id DESC
									  ");
			return $quer_code->result();
		}else if ($contact == "3"){
			$quer_code = $this->db->query(" SELECT *
										FROM  halal_contact
										LEFT JOIN halal_main_pic ON halal_main_pic.main_pic_ip_id = halal_contact.con_id
										WHERE (halal_contact.con_subject LIKE 'แนะนำส่วนผสมหรือผลิตภัณฑ์') AND (halal_contact.con_status = '0' OR halal_contact.con_status = '1') ORDER BY con_id DESC
									  ");
			return $quer_code->result();
		}
		
	}

	public function member()
	{ 
		$quer_code = $this->db->query(" SELECT *
										FROM  halal_member
										WHERE halal_member.m_status_bin IS NULL OR NOT halal_member.m_status_bin = '1' AND NOT halal_member.m_status = '2' ORDER BY m_id DESC
									  ");
		return $quer_code->result();
	}

	public function member_insert() //แก้ไข
	{
		// $i_id = $this->input->post('id');
		$date_time = date("Y/m/d H:i:s");//ดึงเวลาปัจจุบันใส่ในตัวแปร
		// $id_admin = $this->session->userdata('ad_id');//ดึงรหัสผู้ลบข้อมูลใส่ตัวแปร
		$m_passport_no = $this->input->post('passport');
		// num rows example
		$this->db->select('m_passport');
		$this->db->where('m_passport',$m_passport_no);
		$query = $this->db->get('halal_member');
		$num = $query->num_rows();
		if($num > 0)
		{
		  return "p_false";
		}else{
			$email = $this->input->post('email');
			// num rows example
			$this->db->select('m_email');
			$this->db->where('m_email',$email);
			$query = $this->db->get('halal_member');
			$num = $query->num_rows();
			if($num > 0)
			{
			  return "m_false";
			}else{
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
				// return $m_id;
				$m_status = "1";
				$this->db->select('m_id');
				$this->db->where('m_id',$m_id);
				$query_num = $this->db->get('halal_member');
				$num = $query_num->num_rows();
				if($num > 0){
					//รหัสกิจกรรมซ้ำ
					return "false_i_id";
				}else{
						$data = array(
									  'm_id' => $m_id,
									  'm_name' => $this->input->post('name'),
									  'm_surname' => $this->input->post('surname'),
									  'm_email' => $this->input->post('email'),
									  'm_password' => $this->input->post('password'),
									  'm_passport' => $this->input->post('passport'),
									  'm_tel' => $this->input->post('numberphone'),
									  'm_status' => $m_status,
									  'm_time' => $date_time,
									);
						// $this->db->insert('halal_member',$data);
						$query_check=$this->db->insert('halal_member',$data);

						if ($query_check) {
							// $this->session->set_flashdata('rigister_success','บันทึกการเปลียนแปลงสำเร็จ');
							// return "false_true";
							$quer_code = $this->db->query(" SELECT *
															FROM  halal_member
															WHERE halal_member.m_status_bin IS NULL OR NOT halal_member.m_status_bin = '1' AND NOT halal_member.m_status = '2'  ORDER BY m_id DESC
														  ");
							return $quer_code->result();
						}else{
						  	return "false_regieter";
						}		
				}
			}
		}
	}

	public function member_bin() //
	{
		$m_id = $this->input->post('id');
		$data = array(
					  'm_status_bin' => "1",
					);

		$this->db->where('m_id',$m_id);
		$this->db->update('halal_member',$data);

		$quer_code = $this->db->query(" SELECT *
										FROM  halal_member
										WHERE halal_member.m_status_bin IS NULL OR NOT halal_member.m_status_bin = '1' AND NOT halal_member.m_status = '2'  ORDER BY m_id DESC
									  ");
		return $quer_code->result();
	}

	public function member_bin_all()
    { 
        for($i=0;$i<count($_POST["checkdel"]);$i++){
            if ($_POST["checkdel"][$i] != ""){
                $id_delet = $_POST["checkdel"][$i];

				$data = array(
					  'm_status_bin' => "1",
					);
				
				$this->db->where('m_id',$id_delet);
				$this->db->update('halal_member',$data);
            }
        }
        
        $quer_code = $this->db->query(" SELECT *
										FROM  halal_member
										WHERE halal_member.m_status_bin IS NULL OR NOT halal_member.m_status_bin = '1' AND NOT halal_member.m_status = '2'  ORDER BY m_id DESC
									  ");
		return $quer_code->result();
	}

	public function member_bin1()
	{ 
		$quer_code = $this->db->query(" SELECT *
										FROM  halal_member
										WHERE halal_member.m_status_bin = '1'ORDER BY m_id DESC
									  ");
		return $quer_code->result();
	}

	public function member_recover() //แก้ไข
	{
		$m_id = $this->input->post('id');
		$data = array(
					  'm_status_bin' => 0,
					);

		$this->db->where('m_id',$m_id);
		$this->db->update('halal_member',$data);

		$quer_code = $this->db->query(" SELECT *
										FROM  halal_member
										WHERE halal_member.m_status_bin = '1'ORDER BY m_id DESC
									  ");
		return $quer_code->result();
	}

	public function member_delet() //ลบ
	{
		$m_id = $this->input->post('id');
		$this->db->where('m_id',$m_id);
        $this->db->delete('halal_member');

		$quer_code = $this->db->query(" SELECT *
										FROM  halal_member
										WHERE halal_member.m_status_bin = '1'ORDER BY m_id DESC
									  ");
		return $quer_code->result();
	}

	public function member_recover_all()
    { 
        for($i=0;$i<count($_POST["checkdel"]);$i++){
            if ($_POST["checkdel"][$i] != ""){
                $id_delet = $_POST["checkdel"][$i];

				$data = array(
					  'm_status_bin' => 0,
					);

				$this->db->where('m_id',$id_delet);
				$this->db->update('halal_member',$data);
            }
        }
        
        $quer_code = $this->db->query(" SELECT *
										FROM  halal_member
										WHERE halal_member.m_status_bin = '1'ORDER BY m_id DESC
									  ");
		return $quer_code->result();
    }

	public function member_delet_all()
    { 
        for($i=0;$i<count($_POST["checkdel"]);$i++){
            if ($_POST["checkdel"][$i] != ""){
                $id_delet = $_POST["checkdel"][$i];

				$this->db->where('m_id',$id_delet);
				$this->db->delete('halal_member');
            }
        }

        $quer_code = $this->db->query(" SELECT *
										FROM  halal_member
										WHERE halal_member.m_status_bin = '1'ORDER BY m_id DESC
									  ");
		return $quer_code->result();
    }

    public function member_master_delet_all()
    {

        $i_status_bin = "1";
		$this->db->WHERE('m_status_bin',$i_status_bin);
		$this->db->delete('halal_member');

        $quer_code = $this->db->query(" SELECT *
										FROM  halal_member
										WHERE halal_member.m_status_bin = '1'ORDER BY m_id DESC
									  ");
		return $quer_code->result();
    }
	
	public function update_status()
    {
		$m_id = $this->input->post('id');
    	$this->db->select('m_status');
        $this->db->where('m_id',$m_id);
        $query_status = $this->db->get('halal_member');

        foreach ($query_status->result_array() as $rs) { 
            $status_confirm = $rs["m_status"];
        }
        if ($status_confirm < 1) {
            $status_con = "1";
        }else{
            $status_con = "0";
        }
        $data = array(
                        'm_status ' => $status_con,
                      );

        $this->db->where('m_id ',$m_id);
        $this->db->update('halal_member',$data);

        $quer_code = $this->db->query(" SELECT *
										FROM  halal_member
										WHERE halal_member.m_status_bin IS NULL OR NOT halal_member.m_status_bin = '1'  AND NOT halal_member.m_status = '2' ORDER BY m_id DESC
									  ");
		return $quer_code->result();
    }

    public function member_edit($edit_id)
	{
		$this->db->FROM('halal_member');
		// $this->db->join('halal_status', 'halal_ingredients.i_status = halal_status.s_id', 'left');
		// $this->db->join('halal_investigate', 'halal_ingredients.i_id_investigate = halal_investigate.inves_id', 'left');
		$this->db->WHERE('halal_member.m_id',$edit_id);
		$edit = $this->db->get();
		// return $edit->result();
		$member = $edit->result();
		
		return $member;
	}

	public function member_update() //แก้ไข
	{
		$m_id = $this->input->post('id');
		$date_time = date("Y/m/d H:i:s");//ดึงเวลาปัจจุบันใส่ในตัวแปร
		// $id_admin = $this->session->userdata('ad_id');//ดึงรหัสผู้ลบข้อมูลใส่ตัวแปร
		
		$data = array(
					  'm_name' => $this->input->post('name'),
					  'm_surname' => $this->input->post('surname'),
					  'm_tel' => $this->input->post('numberphone'),
					  'm_time_update' => $date_time,
					);
		$this->db->where('m_id',$m_id);
		$query_check = $this->db->update('halal_member',$data);

		if ($query_check) {
			$quer_code = $this->db->query(" SELECT *
											FROM  halal_member
											WHERE halal_member.m_status_bin IS NULL OR NOT halal_member.m_status_bin = '1' AND NOT halal_member.m_status = '2'  ORDER BY m_id DESC
										  ");
			return $quer_code->result();
		}else{
		  	return "false_regieter";
		}

	}

	// public function member_update() //แก้ไข
	// {
	// 	// $i_id = $this->input->post('id');
	// 	$date_time = date("Y/m/d H:i:s");//ดึงเวลาปัจจุบันใส่ในตัวแปร
	// 	// $id_admin = $this->session->userdata('ad_id');//ดึงรหัสผู้ลบข้อมูลใส่ตัวแปร
	// 	$m_passport_no = $this->input->post('passport');
	// 	// num rows example
	// 	$this->db->select('m_passport');
	// 	$this->db->where('m_passport',$m_passport_no);
	// 	$query = $this->db->get('halal_member');
	// 	$num = $query->num_rows();
	// 	if($num > 0)
	// 	{
	// 	  return "p_false";
	// 	}else{
	// 		$email = $this->input->post('email');
	// 		// num rows example
	// 		$this->db->select('m_email');
	// 		$this->db->where('m_email',$email);
	// 		$query = $this->db->get('halal_member');
	// 		$num = $query->num_rows();
	// 		if($num > 0)
	// 		{
	// 		  return "m_false";
	// 		}else{
	// 			$data = array(
	// 						  'm_name' => $this->input->post('name'),
	// 						  'm_surname' => $this->input->post('surname'),
	// 						  'm_email' => $this->input->post('email'),
	// 						  'm_password' => $this->input->post('password'),
	// 						  'm_passport' => $this->input->post('passport'),
	// 						  'm_tel' => $this->input->post('numberphone'),
	// 						  'm_status' => $m_status,
	// 						  'm_time' => $date_time,
	// 						);
	// 			$this->db->where('m_id',$m_id);
	// 			$this->db->update('halal_member',$data);

	// 			if ($query_check) {
	// 				$quer_code = $this->db->query(" SELECT *
	// 												FROM  halal_member
	// 												WHERE halal_member.m_status_bin IS NULL OR NOT halal_member.m_status_bin = '1' AND NOT halal_member.m_status = '2'  ORDER BY m_id DESC
	// 											  ");
	// 				return $quer_code->result();
	// 			}else{
	// 			  	return "false_regieter";
	// 			}		
	// 		}
	// 	}
		
	// }

	public function status()
	{
		$quer_code = $this->db->query(" SELECT *
										FROM  halal_status
										ORDER BY s_id DESC
									  ");
		return $quer_code->result();
	}

	public function status_insert() //แก้ไข
	{
		// $date_time = date("Y/m/d H:i:s");//ดึงเวลาปัจจุบันใส่ในตัวแปร
		// $id_admin = $this->session->userdata('ad_id');//ดึงรหัสผู้ลบข้อมูลใส่ตัวแปร

		$query_id = $this->db->query("SELECT s_id 
												FROM halal_status 
												ORDER BY s_id DESC LIMIT 1");
			$numrow = $query_id->num_rows();
			foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
				$cal = $rs["s_id"]; //ตรงนี้เราจะได้ค่า CP18100
			}

			if ($numrow == 0) { //นับแถวของข้อมูล ถ้าเท่ากับ 0
        		$s_id = "1";
			}else{
				$cal++;
				$s_id = $cal;

			}
			$data = array(
						  's_id' => $s_id,
						  's_status' => $this->input->post('s_name'),
						  's_status_eng' => $this->input->post('s_name_eng'),
						);
			$query_check=$this->db->insert('halal_status',$data);

			$quer_code = $this->db->query(" SELECT *
											FROM  halal_status
											ORDER BY s_id DESC
										  ");
			return $quer_code->result();
	}

	public function status_edit($edit_id)
	{
		$this->db->FROM('halal_status');
		$this->db->WHERE('halal_status.s_id',$edit_id);
		$edit = $this->db->get();
		// return $edit->result();
		$status = $edit->result();
		return $status;
	}

	public function status_update() //แก้ไข
	{
		$s_id = $this->input->post('id');
		// $date_time = date("Y/m/d H:i:s");//ดึงเวลาปัจจุบันใส่ในตัวแปร
		// $id_admin = $this->session->userdata('ad_id');//ดึงรหัสผู้ลบข้อมูลใส่ตัวแปร
		$data = array(
					  's_id' => $s_id,
					  's_status' => $this->input->post('s_name'),
					  's_status_eng' => $this->input->post('s_name_eng'),
					);

		$this->db->where('s_id',$s_id);
		$this->db->update('halal_status',$data);
		

		$quer_code = $this->db->query(" SELECT *
										FROM  halal_status
										ORDER BY s_id DESC
									  ");
		return $quer_code->result();

	}

	public function status_delet() //ลบ
	{
		$s_id = $this->input->post('id');
		$this->db->where('s_id',$s_id);
        $this->db->delete('halal_status');

		$quer_code = $this->db->query(" SELECT *
										FROM  halal_status
										ORDER BY s_id DESC
									  ");
		return $quer_code->result();
	}

	public function status_delet_all()
    { 
        for($i=0;$i<count($_POST["checkdel"]);$i++){
            if ($_POST["checkdel"][$i] != ""){
                $id_delet = $_POST["checkdel"][$i];

				$this->db->where('s_id',$id_delet);
				$this->db->delete('halal_status');
            }
        }

		$quer_code = $this->db->query(" SELECT *
										FROM  halal_status
										ORDER BY s_id DESC
									  ");
		return $quer_code->result();
    }

	public function inves()
	{
		$quer_code = $this->db->query(" SELECT *
										FROM  halal_investigate
										ORDER BY inves_id DESC
									  ");
		return $quer_code->result();
	}

	public function inves_insert() //แก้ไข
	{
		// $date_time = date("Y/m/d H:i:s");//ดึงเวลาปัจจุบันใส่ในตัวแปร
		// $id_admin = $this->session->userdata('ad_id');//ดึงรหัสผู้ลบข้อมูลใส่ตัวแปร

		$query_id = $this->db->query("SELECT inves_id 
												FROM halal_investigate 
												ORDER BY inves_id DESC LIMIT 1");
			$numrow = $query_id->num_rows();
			foreach ($query_id->result_array() as $rs) { //ไปวิ่งเช็คข้อมูล
				$cal = $rs["inves_id"]; //ตรงนี้เราจะได้ค่า CP18100
			}

			if ($numrow == 0) { //นับแถวของข้อมูล ถ้าเท่ากับ 0
        		$inves_id = "1";
			}else{
				$cal++;
				$inves_id = $cal;

			}
			$data = array(
						  'inves_id' => $inves_id,
						  'inves_inspector' => $this->input->post('name_inves'),
						);
			$query_check=$this->db->insert('halal_investigate',$data);

			$quer_code = $this->db->query(" SELECT *
											FROM  halal_investigate
											ORDER BY inves_id DESC
										  ");
			return $quer_code->result();
	}

	public function inves_edit($edit_id)
	{
		$this->db->FROM('halal_investigate');
		$this->db->WHERE('halal_investigate.inves_id',$edit_id);
		$edit = $this->db->get();
		// return $edit->result();
		$inves = $edit->result();
		return $inves;
	}

	public function inves_update() //แก้ไข
	{
		$inves_id = $this->input->post('id');
		// $date_time = date("Y/m/d H:i:s");//ดึงเวลาปัจจุบันใส่ในตัวแปร
		// $id_admin = $this->session->userdata('ad_id');//ดึงรหัสผู้ลบข้อมูลใส่ตัวแปร
		$data = array(
						'inves_id' => $inves_id,
						'inves_inspector' => $this->input->post('name_inves'),
					);

		$this->db->where('inves_id',$inves_id);
		$this->db->update('halal_investigate',$data);
		

		$quer_code = $this->db->query(" SELECT *
										FROM  halal_investigate
										ORDER BY inves_id DESC
									  ");
		return $quer_code->result();

	}

	public function inves_delet() //ลบ
	{
		$inves_id = $this->input->post('id');
		$this->db->where('inves_id',$inves_id);
        $this->db->delete('halal_investigate');

		$quer_code = $this->db->query(" SELECT *
										FROM  halal_investigate
										ORDER BY inves_id DESC
									  ");
		return $quer_code->result();
	}

	public function inves_delet_all()
    { 
        for($i=0;$i<count($_POST["checkdel"]);$i++){
            if ($_POST["checkdel"][$i] != ""){
                $id_delet = $_POST["checkdel"][$i];

				$this->db->where('inves_id',$id_delet);
				$this->db->delete('halal_investigate');
            }
        }
        
		$quer_code = $this->db->query(" SELECT *
										FROM  halal_investigate
										ORDER BY inves_id DESC
									  ");
		return $quer_code->result();
    }
}
