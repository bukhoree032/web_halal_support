<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend_admin_control extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
    	$this->load->model('Backend_model');
    	if ($this->session->userdata('m_status') < '2'){
        	redirect('Frontend_control','refresh');
        }
    }

	public function member()
	{	
		$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'member');

		$member['member']=$this->Backend_model->member();
		// $status_inves['status_inves']=$this->Backend_model->status_inves();

		 // echo json_encode($ingredient);
		 // echo $ingredient['ingredient'];

		$this->load->view('backend/member/member_head',$member);
		$this->load->view("navbar/navbar_backend");
		$this->load->view('backend/popup/success');
		$this->load->view('backend/popup/member/member_edit');
		$this->load->view('backend/popup/member/member_insert');
		$this->load->view('backend/member/member');
	}

	public function member_insert()//
	{
		$member_insert['member_insert']=$this->Backend_model->member_insert();
		echo json_encode($member_insert['member_insert']);
		// echo json_encode("asdasd");
	}
	
	public function member_edit()//แก้ไขอุบัติเหตุ
	{
        $id_member = $_POST["id"];
		$member_edit['member_edit']=$this->Backend_model->member_edit($id_member);
		echo json_encode($member_edit['member_edit']);
	}

	public function member_update()//แก้ไขอุบัติเหตุ
	{
		$member_update['member_update']=$this->Backend_model->member_update();
		echo json_encode($member_update['member_update']);
		// echo json_encode("asdasd");
	}

	public function member_bin()//
	{
		$member_bin['member_bin']=$this->Backend_model->member_bin();
		echo json_encode($member_bin['member_bin']);
	}

	public function member_bin1()//
	{
		$this->session->unset_userdata('back_page');
		$this->session->set_userdata("back_page",'member');

		$member['member']=$this->Backend_model->member_bin1();

		 // echo json_encode($ingredient);
		 // echo $ingredient['ingredient'];

		$this->load->view('backend/member/member_bin_head',$member);
		$this->load->view("navbar/navbar_backend");
		$this->load->view('backend/popup/success');	
		// $this->load->view('backend/popup/ingredient/ingredient_edit');
		// $this->load->view('backend/popup/ingredient/ingredient_insert');
		$this->load->view('backend/member/member_bin');
	}

	public function member_bin_all()
	{	
		$member_bin_all['member_bin_all']=$this->Backend_model->member_bin_all();
		echo json_encode($member_bin_all['member_bin_all']);
	}

	public function member_recover()
	{	
		$member_recover['member_recover']=$this->Backend_model->member_recover();
		echo json_encode($member_recover['member_recover']);
	}

	public function member_delet()
	{	
		$member_delet['member_delet']=$this->Backend_model->member_delet();
		echo json_encode($member_delet['member_delet']);
	}

	public function member_recover_all()
	{	
		$member_recover_all['member_recover_all']=$this->Backend_model->member_recover_all();
		echo json_encode($member_recover_all['member_recover_all']);
	}

	public function member_delet_all()
	{	
		$member_delet_all['member_delet_all']=$this->Backend_model->member_delet_all();
		echo json_encode($member_delet_all['member_delet_all']);
	}

	public function member_master_delet_all()
	{	
		$member_master_delet_all['member_master_delet_all']=$this->Backend_model->member_master_delet_all();
		echo json_encode($member_master_delet_all['member_master_delet_all']);
	}

	public function update_status()
    {
        $update_status['update_status']=$this->Backend_model->update_status();
        echo json_encode($update_status['update_status']);
    }
}
