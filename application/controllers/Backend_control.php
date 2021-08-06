<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend_control extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
    	$this->load->model('Backend_model');
    	if ($this->session->userdata('m_status') < '1'){
        	redirect('Frontend_control','refresh');
        }
    }

    public function ingredients_type()
	{	
		$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'ingredients_type');

		$ingredients_type['ingredients_type']=$this->Backend_model->ingredients_type();
		// $ingredient['ingredient']=$this->Backend_model->ingredient();

		// $status_inves['status_inves']=$this->Backend_model->status_inves();

		 // echo json_encode($ingredient);
		 // echo $ingredient['ingredient'];

		$this->load->view('backend/product/product_head',$ingredients_type);
		$this->load->view("navbar/navbar_backend");
		$this->load->view('backend/popup/success');	
		$this->load->view('backend/popup/ingredient/ingredient_type_edit');
		$this->load->view('backend/popup/ingredient/pupup_sussecc');
		$this->load->view('backend/popup/ingredient/ingredient_type_insert');
		$this->load->view('backend/ingredients/ingredients_type');
		
	}

	public function type_ing_edit()//แก้ไขอุบัติเหตุ
	{
        $id_type = $_POST["id"];
		$status_edit['status_edit']=$this->Backend_model->type_ing_edit($id_type);
		echo json_encode($status_edit['status_edit']);
	}

	public function type_ing_update()//แก้ไขอุบัติเหตุ
	{
		$type_ing_update['type_ing_update']=$this->Backend_model->type_ing_update();
		$ingredients_type['ingredients_type']=$this->Backend_model->ingredients_type();
		echo json_encode($ingredients_type['ingredients_type']);
		// echo json_encode("asdasd");
	}

	public function type_ing_insert()//
	{
		$type_insert['type_insert']=$this->Backend_model->type_ing_insert();
		// echo json_encode($type_insert['type_insert']);
		$ingredients_type['ingredients_type']=$this->Backend_model->ingredients_type();
		echo json_encode($ingredients_type['ingredients_type']);
		// echo json_encode("asdasd");
	}

	public function type_ing_delet()//
	{	
		// $s_id = $this->input->post('id');
		$type_ing_delet['type_ing_delet']=$this->Backend_model->type_ing_delet();
		$ingredients_type['ingredients_type']=$this->Backend_model->ingredients_type();
		echo json_encode($ingredients_type['ingredients_type']);
		// echo json_encode($s_id);
	}

	public function type_ing_delet_all()
	{	
		$type_ing_delet_all['type_ing_delet_all']=$this->Backend_model->type_ing_delet_all();
		$ingredients_type['ingredients_type']=$this->Backend_model->ingredients_type();
		echo json_encode($ingredients_type['ingredients_type']);
	}

 //    public function index()
	// {	

	// 	$this->session->unset_userdata('back_page');
	// 	$this->session->set_userdata("back_page",'index');
	// 	$data['query']=$this->Backend_model->indexx();
	// 	// $ingredient['ingredient']=$this->Backend_model->indexx();

	// 	 // echo json_encode($ingredient);

	// 	$this->load->view('backend/home/home_head',$data);
	// 	$this->load->view("navbar/navbar_backend");
	// 	$this->load->view('backend/home/home');
		
	// }

	public function index()
	{	

		$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'ingredient');

		$ingredient['ingredient']=$this->Backend_model->ingredient();
		$status_inves['status_inves']=$this->Backend_model->status_inves();

		 // echo json_encode($ingredient);
		 // echo $ingredient['ingredient'];

		$this->load->view('backend/ingredients/ingredients_head',$ingredient);
		$this->load->view("navbar/navbar_backend");
		$this->load->view('backend/popup/success');	
		$this->load->view('backend/popup/ingredient/ingredient_edit');
		$this->load->view('backend/popup/ingredient/pupup_sussecc');
		$this->load->view('backend/popup/ingredient/ingredient_insert',$status_inves);
		$this->load->view('backend/ingredients/ingredients');	
	}

    public function ingredient()
	{	
		$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'ingredient');

		$ingredient['ingredient']=$this->Backend_model->ingredient();
		$status_inves['status_inves']=$this->Backend_model->status_inves();

		 // echo json_encode($ingredient);
		 // echo $ingredient['ingredient'];

		$this->load->view('backend/ingredients/ingredients_head',$ingredient);
		$this->load->view("navbar/navbar_backend");
		$this->load->view('backend/popup/success');	
		$this->load->view('backend/popup/ingredient/ingredient_edit');
		$this->load->view('backend/popup/ingredient/ingredient_detail');
		$this->load->view('backend/popup/ingredient/pupup_sussecc');
		$this->load->view('backend/popup/ingredient/ingredient_insert',$status_inves);
		$this->load->view('backend/ingredients/ingredients');	
	}

	public function insert_ingredient()//
	{
		$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'ingredient');

		$ingredient['ingredient']=$this->Backend_model->ingredient();
		$status_inves['status_inves']=$this->Backend_model->status_inves();

		 // echo json_encode($ingredient);
		 // echo $ingredient['ingredient'];

		$this->load->view('backend/ingredients/ingredients_head');
		$this->load->view("navbar/navbar_backend");
		// $this->load->view('backend/popup/success');	
		// $this->load->view('backend/popup/ingredient/ingredient_edit');
		$this->load->view('backend/popup/ingredient/ingredient_insert',$status_inves);
		$this->load->view('backend/ingredients/ingredient_insert');
	}

	public function ingredient_edit($id)//
	{
		$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'ingredient');

		$ingredient['ingredient']=$this->Backend_model->ingredient_edit($id);
		$status_inves['status_inves']=$this->Backend_model->status_inves();

		 // echo json_encode($ingredient);
		 // echo $ingredient['ingredient'];
		// echo("arg1");
		$this->load->view('backend/ingredients/ingredients_head',$ingredient);
		$this->load->view("navbar/navbar_backend",$status_inves);
		$this->load->view('backend/popup/success');	
		// $this->load->view('backend/popup/ingredient/ingredient_edit');
		// $this->load->view('backend/popup/ingredient/ingredient_insert');
		$this->load->view('backend/ingredients/ingredient_edit');
	}

	public function ing_detail()
	{	
		$i_id = $_POST["id"];
		$data_show['data_show']=$this->Backend_model->ing_detail($i_id);
		echo json_encode($data_show['data_show']);
	}

	public function pro_detail()
	{	
		$p_id = $_POST["id"];
		$data_show['data_show']=$this->Backend_model->pro_detail($p_id);
		echo json_encode($data_show['data_show']);
	}

	// public function ingredient_edit()//แก้ไขอุบัติเหตุ
	// {
 //        $id_ingredient = $_POST["id"];
	// 	$ingredient['ingredient']=$this->Backend_model->ingredient_edit($id_ingredient);
	// 	echo json_encode($ingredient['ingredient']);
	// }

	public function ingredient_update()//แก้ไขอุบัติเหตุ
	{
		$ingredientupdate['ingredientupdate']=$this->Backend_model->ingredient_update();
		echo json_encode($ingredientupdate['ingredientupdate']);
		// echo json_encode("asdasd");
	}

	public function ingredient_update_pic()//แก้ไขอุบัติเหตุ
	{
		$ingredient_update_pic['ingredient_update_pic']=$this->Backend_model->ingredient_update_pic();
		echo json_encode($ingredient_update_pic['ingredient_update_pic']);
		// echo json_encode("asdasd");
	}

	public function ingredient_insert()//
	{	
		// $i_id = $this->input->post('i_upload_fill');
		$ingredient_insert['ingredient_insert']=$this->Backend_model->ingredient_insert();
		echo json_encode($ingredient_insert['ingredient_insert']);
		// echo json_encode("asdasd");
	}

	public function ingredient_bin()//
	{
        
		$i_id = $this->input->post('id');
		$ingredient_bin['ingredient_bin']=$this->Backend_model->ingredient_bin($i_id);
		echo json_encode($ingredient_bin['ingredient_bin']);
	}

	// ส่วนของถังขยะ
	public function ingredient_bin1()
	{	
		$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'ingredient');

		$ingredient['ingredient']=$this->Backend_model->ingredient_bin1();

		 // echo json_encode($ingredient);
		 // echo $ingredient['ingredient'];

		$this->load->view('backend/ingredients/ingredients_bin_head',$ingredient);
		$this->load->view("navbar/navbar_backend");
		$this->load->view('backend/popup/success');	
		$this->load->view('backend/popup/ingredient/ingredient_edit');
		$this->load->view('backend/popup/ingredient/ingredient_insert');
		$this->load->view('backend/ingredients/ingredients_bin');
	}

	public function ingredient_bin_all()
	{	
		$ingredient_bin_all['ingredient_bin_all']=$this->Backend_model->ingredient_bin_all();
		echo json_encode($ingredient_bin_all['ingredient_bin_all']);
	}

	public function ingredient_recover()
	{	
		$ingredient_recover['ingredient_recover']=$this->Backend_model->ingredient_recover();
		echo json_encode($ingredient_recover['ingredient_recover']);
	}

	public function ingredient_delet()
	{	
		$ingredient_delet['ingredient_delet']=$this->Backend_model->ingredient_delet();
		echo json_encode($ingredient_delet['ingredient_delet']);
	}

	public function ingredient_recover_all()
	{	
		$ingredient_recover_all['ingredient_recover_all']=$this->Backend_model->ingredient_recover_all();
		echo json_encode($ingredient_recover_all['ingredient_recover_all']);
	}

	public function ingredient_delet_all()
	{	
		$ingredient_delet_all['ingredient_delet_all']=$this->Backend_model->ingredient_delet_all();
		echo json_encode($ingredient_delet_all['ingredient_delet_all']);
	}

	public function ingredient_master_delet_all()
	{	
		$ingredient_master_delet_all['ingredient_master_delet_all']=$this->Backend_model->ingredient_master_delet_all();
		echo json_encode($ingredient_master_delet_all['ingredient_master_delet_all']);
	}

	public function product()
	{	
		$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'product');

		$product['product']=$this->Backend_model->product();
		// $ingredient['ingredient']=$this->Backend_model->ingredient();

		// $status_inves['status_inves']=$this->Backend_model->status_inves();

		 // echo json_encode($ingredient);
		 // echo $ingredient['ingredient'];

		$this->load->view('backend/product/product_head',$product);
		$this->load->view("navbar/navbar_backend");
		$this->load->view('backend/popup/success');	
		$this->load->view('backend/popup/product/product_detail');
		$this->load->view('backend/popup/ingredient/ingredient_edit');
		$this->load->view('backend/popup/ingredient/pupup_sussecc');
		// $this->load->view('backend/popup/product/product_insert',$status_inves);
		$this->load->view('backend/product/product');
		
	}

	public function product_expire()
	{	
		$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'product_expire');

		$product['product']=$this->Backend_model->product();
		// $ingredient['ingredient']=$this->Backend_model->ingredient();

		// $status_inves['status_inves']=$this->Backend_model->status_inves();

		 // echo json_encode($ingredient);
		 // echo $ingredient['ingredient'];

		$this->load->view('backend/product/product_head',$product);
		$this->load->view("navbar/navbar_backend");
		$this->load->view('backend/popup/success');	
		$this->load->view('backend/popup/product/product_detail');
		$this->load->view('backend/popup/ingredient/ingredient_edit');
		$this->load->view('backend/popup/ingredient/pupup_sussecc');
		// $this->load->view('backend/popup/product/product_insert',$status_inves);
		$this->load->view('backend/product/product_expire');
		
	}

	public function insert_product()//
	{
		$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'product');

		// $insert_product['insert_product']=$this->Backend_model->insert_product();
		$status_inves['status_inves']=$this->Backend_model->status_inves();

		 // echo json_encode($ingredient);
		 // echo $ingredient['ingredient'];

		$this->load->view('backend/product/product_head',$status_inves);
		$this->load->view("navbar/navbar_backend");
		// $this->load->view('backend/popup/success');	
		// $this->load->view('backend/popup/ingredient/ingredient_edit');
		// $this->load->view('backend/popup/product/product_insert');
		$this->load->view('backend/product/product_insert');
	}

	public function product_edit($id_product)//แก้ไขอุบัติเหตุ
	{
        $this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'product');

		$product_edit['product_edit']=$this->Backend_model->product_edit($id_product);
		$status_inves['status_inves']=$this->Backend_model->status_inves();

		 // echo json_encode($ingredient);
		 // echo $ingredient['ingredient'];

		$this->load->view('backend/product/product_head',$status_inves);
		$this->load->view("navbar/navbar_backend",$product_edit);
		// $this->load->view('backend/popup/success');	
		// $this->load->view('backend/popup/ingredient/ingredient_edit');
		// $this->load->view('backend/popup/product/product_insert');
		$this->load->view('backend/product/product_edit');
	}

	public function product_update()//แก้ไขอุบัติเหตุ
	{
		$product_update['product_update']=$this->Backend_model->product_update();
		echo json_encode($product_update['product_update']);
		// echo ("asd");
	}

	public function product_update_file()//แก้ไขอุบัติเหตุ
	{
		$product_update['product_update']=$this->Backend_model->product_update_file();
		echo json_encode($product_update['product_update']);
		// echo ("asd");
	}

	public function product_insert()//
	{	
		// $i_id = $this->input->post('i_upload_fill');
		$product_insert['product_insert']=$this->Backend_model->product_insert();
		echo json_encode($product_insert['product_insert']);
		// echo "false_p_id";
		// echo json_encode("asdasd");
	}

	public function product_bin()//
	{
        
		// $i_id = $this->input->post('id');
		$product_bin['product_bin']=$this->Backend_model->product_bin();
		$product['product']=$this->Backend_model->product();
		echo json_encode($product['product']);
	}

	public function product_bin_all()
	{	
		$product_bin_all['product_bin_all']=$this->Backend_model->product_bin_all();
		$product['product']=$this->Backend_model->product();
		echo json_encode($product['product']);
	}

	// ส่วนของถังขยะ
	public function product_bin1()
	{	
		$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'product');

		$product_bin1['product_bin1']=$this->Backend_model->product_bin1();

		 // echo json_encode($ingredient);
		 // echo $ingredient['ingredient'];

		$this->load->view('backend/product/product_head',$product_bin1);
		$this->load->view("navbar/navbar_backend");
		$this->load->view('backend/popup/success');	
		// $this->load->view('backend/popup/product/ingredient_edit');
		// $this->load->view('backend/popup/product/ingredient_insert');
		$this->load->view('backend/product/product_bin');
	}

	

	public function product_recover()
	{	
		$product_recover['product_recover']=$this->Backend_model->product_recover();
		$product_bin1['product_bin1']=$this->Backend_model->product_bin1();
		echo json_encode($product_bin1['product_bin1']);
	}

	public function product_delet()
	{	
		$product_delet['product_delet']=$this->Backend_model->product_delet();
		$product_bin1['product_bin1']=$this->Backend_model->product_bin1();
		echo json_encode($product_bin1['product_bin1']);
	}

	public function product_recover_all()
	{	
		$product_recover_all['product_recover_all']=$this->Backend_model->product_recover_all();
		$product_bin1['product_bin1']=$this->Backend_model->product_bin1();
		echo json_encode($product_bin1['product_bin1']);
	}

	public function product_delet_all()
	{	
		$product_delet_all['product_delet_all']=$this->Backend_model->product_delet_all();
		$product_bin1['product_bin1']=$this->Backend_model->product_bin1();
		echo json_encode($product_bin1['product_bin1']);
	}

	public function product_master_delet_all()
	{	

		// echo json_encode("asd");
		$product_master_delet_all['product_master_delet_all']=$this->Backend_model->product_master_delet_all();
		$product_bin1['product_bin1']=$this->Backend_model->product_bin1();
		echo json_encode($product_bin1['product_bin1']);
	}

	
	public function product_type()
	{	
		$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'product_type');

		$product_type['product_type']=$this->Backend_model->product_type();
		// $ingredient['ingredient']=$this->Backend_model->ingredient();

		// $status_inves['status_inves']=$this->Backend_model->status_inves();

		 // echo json_encode($ingredient);
		 // echo $ingredient['ingredient'];

		$this->load->view('backend/product/product_head',$product_type);
		$this->load->view("navbar/navbar_backend");
		$this->load->view('backend/popup/success');	
		$this->load->view('backend/popup/product/product_type_edit');
		$this->load->view('backend/popup/ingredient/pupup_sussecc');
		$this->load->view('backend/popup/product/product_type_insert');
		$this->load->view('backend/product/product_type');
		
	}

	public function type_edit()//แก้ไขอุบัติเหตุ
	{
        $id_type = $_POST["id"];
		$status_edit['status_edit']=$this->Backend_model->type_edit($id_type);
		echo json_encode($status_edit['status_edit']);
	}

	public function type_update()//แก้ไขอุบัติเหตุ
	{
		$type_update['type_update']=$this->Backend_model->type_update();
		$product_type['product_type']=$this->Backend_model->product_type();
		echo json_encode($product_type['product_type']);
		// echo json_encode("asdasd");
	}

	public function type_insert()//
	{
		$type_insert['type_insert']=$this->Backend_model->type_insert();
		// echo json_encode($type_insert['type_insert']);
		$product_type['product_type']=$this->Backend_model->product_type();
		echo json_encode($product_type['product_type']);
		// echo json_encode("asdasd");
	}

	public function type_delet()//
	{	
		// $s_id = $this->input->post('id');
		$type_delet['type_delet']=$this->Backend_model->type_delet();
		$product_type['product_type']=$this->Backend_model->product_type();
		echo json_encode($product_type['product_type']);
		// echo json_encode($s_id);
	}

	public function type_delet_all()
	{	
		$type_delet_all['type_delet_all']=$this->Backend_model->type_delet_all();
		$product_type['product_type']=$this->Backend_model->product_type();
		echo json_encode($product_type['product_type']);
	}

	public function contact_all()
	{	
		$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'contact');

		$contact_all['contact_all']=$this->Backend_model->contact_all();

		$this->load->view('backend/status/status_head',$contact_all);
		$this->load->view("navbar/navbar_backend");
		$this->load->view('backend/popup/success');	
		$this->load->view('backend/popup/contact/contact_alert');
		// $this->load->view('backend/popup/status/status_insert');
		$this->load->view('backend/contact/contact');
		
	}

	public function contact_alert_all()
	{	
		$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'contact');

		$contact_all['contact_all']=$this->Backend_model->contact_alert_all();

		$this->load->view('backend/status/status_head',$contact_all);
		$this->load->view("navbar/navbar_backend");
		$this->load->view('backend/popup/success');	
		$this->load->view('backend/popup/contact/contact_alert');
		// $this->load->view('backend/popup/status/status_insert');
		$this->load->view('backend/contact/contact');
		
	}

	public function contact_read($contact)
	{	
		$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'contact');

		$contact_all['contact_all']=$this->Backend_model->contact_read($contact);

		$this->load->view('backend/status/status_head',$contact_all);
		$this->load->view("navbar/navbar_backend");
		$this->load->view('backend/popup/success');	
		$this->load->view('backend/popup/contact/contact_alert_read');
		// $this->load->view('backend/popup/status/status_insert');
		$this->load->view('backend/contact/contact_read');
		
	}

	public function contact_detall()
	{	
		$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'contact');

		$contact_all['contact_all']=$this->Backend_model->contact_detall();
		echo json_encode($contact_all['contact_all']);
	}

	public function contact_sussecc()
	{	
		$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'contact');

		$contact_all['contact_all']=$this->Backend_model->contact_sussecc();
		echo json_encode($contact_all['contact_all']);
	}

	public function contact_delet()//
	{	
		// $s_id = $this->input->post('id');
		$contact_all['contact_all']=$this->Backend_model->contact_delet();
		// $contact_all['contact_all']=$this->Backend_model->contact_all();
		echo json_encode($contact_all['contact_all']);
		// echo json_encode($s_id);
	}

	public function contact_delet_read()//
	{	
		// $s_id = $this->input->post('id');
		$contact_all['contact_all']=$this->Backend_model->contact_delet_read();
		// $contact_all['contact_all']=$this->Backend_model->contact_delet_read();
		echo json_encode($contact_all['contact_all']);
		// echo json_encode($s_id);
	}
	
	public function contact_list($contact)//
	{	

		// $s_id = $this->input->post('id');
		$contact_all['contact_all']=$this->Backend_model->contact_list($contact);
		// echo json_encode($contact_all['contact_all']);
		
		$this->load->view('backend/status/status_head',$contact_all);
		$this->load->view("navbar/navbar_backend");
		$this->load->view('backend/popup/success');	
		$this->load->view('backend/popup/contact/contact_alert');
		// $this->load->view('backend/popup/status/status_edit');
		// $this->load->view('backend/popup/status/status_insert');
		$this->load->view('backend/contact/contact');
	}

	public function contact_detall_read()//
	{	
		$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'contact');

		$contact_all['contact_all']=$this->Backend_model->contact_detall_read();
		echo json_encode($contact_all['contact_all']);
	}

	public function status()
	{	
		$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'status');

		// $ingredient['ingredient']=$this->Backend_model->ingredient();
		$status['status']=$this->Backend_model->status();

		 // echo json_encode($ingredient);
		 // echo $ingredient['ingredient'];

		$this->load->view('backend/status/status_head',$status);
		$this->load->view("navbar/navbar_backend");
		$this->load->view('backend/popup/success');	
		$this->load->view('backend/popup/status/status_edit');
		$this->load->view('backend/popup/status/status_insert');
		$this->load->view('backend/status/status');
		
	}

	public function status_edit()//แก้ไขอุบัติเหตุ
	{
        $id_ingredient = $_POST["id"];
		$status_edit['status_edit']=$this->Backend_model->status_edit($id_ingredient);
		echo json_encode($status_edit['status_edit']);
	}

	public function status_update()//แก้ไขอุบัติเหตุ
	{
		$status_update['status_update']=$this->Backend_model->status_update();
		echo json_encode($status_update['status_update']);
		// echo json_encode("asdasd");
	}

	public function status_insert()//
	{
		$status_insert['status_insert']=$this->Backend_model->status_insert();
		echo json_encode($status_insert['status_insert']);
		// echo json_encode("asdasd");
	}

	public function status_delet()//
	{	
		// $s_id = $this->input->post('id');
		$status_delet['status_delet']=$this->Backend_model->status_delet();
		echo json_encode($status_delet['status_delet']);
		// echo json_encode($s_id);
	}

	public function status_delet_all()
	{	
		$status_delet_all['status_delet_all']=$this->Backend_model->status_delet_all();
		echo json_encode($status_delet_all['status_delet_all']);
	}

	public function inves()
	{	
		$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'inves');

		// $ingredient['ingredient']=$this->Backend_model->ingredient();
		$inves['inves']=$this->Backend_model->inves();

		 // echo json_encode($ingredient);
		 // echo $ingredient['ingredient'];

		$this->load->view('backend/inves/inves_head',$inves);
		$this->load->view("navbar/navbar_backend");
		$this->load->view('backend/popup/success');	
		$this->load->view('backend/popup/inves/inves_edit');
		$this->load->view('backend/popup/inves/inves_insert');
		$this->load->view('backend/inves/inves');
		
	}

	public function inves_edit()//แก้ไขอุบัติเหตุ
	{
        $id_inves = $_POST["id"];
		$inves_edit['inves_edit']=$this->Backend_model->inves_edit($id_inves);
		echo json_encode($inves_edit['inves_edit']);
	}

	public function inves_update()//แก้ไขอุบัติเหตุ
	{
		$inves_update['inves_update']=$this->Backend_model->inves_update();
		echo json_encode($inves_update['inves_update']);
		// echo json_encode("asdasd");
	}

	public function inves_insert()//
	{
		$inves_insert['inves_insert']=$this->Backend_model->inves_insert();
		echo json_encode($inves_insert['inves_insert']);
		// echo json_encode("asdasd");
	}

	public function inves_delet()//
	{	
		// $s_id = $this->input->post('id');
		$inves_delet['inves_delet']=$this->Backend_model->inves_delet();
		echo json_encode($inves_delet['inves_delet']);
		// echo json_encode($s_id);
	}

	public function inves_delet_all()
	{	
		$inves_delet_all['inves_delet_all']=$this->Backend_model->inves_delet_all();
		echo json_encode($inves_delet_all['inves_delet_all']);
	}

    public function logout()
	{
		$this->session->unset_userdata(array('m_id','m_status'));
		redirect('Frontend_control','refresh');
	}
}
