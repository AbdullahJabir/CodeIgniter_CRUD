<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LearnHunter extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function indexx()
	{
		$data = array();
		$data['admin_main_content'] = $this->load->view('pages/dashboardd','',true);
		$this->load->view('dashboard',$data);
	}

	public function edit_admin()
	{

		$data = array();
		$data['admin_main_content'] = $this->load->view('pages/addAdmin','',true);
		$this->load->view('dashboard',$data);
	}

	public function save_admin(){

		$this->save_studentt->save_admin_info();
		$sdata=array();
		$sdata['message']='Admin added successfully !!!';

		$this->session->set_userdata($sdata);
		
		 redirect(base_url().'add-student');
	}

	public function view_admin()
	{
		$data = array();
		/*go to model*/
		$data['all_student_info'] = $this->save_studentt->all_admin_info();
		$data['admin_main_content'] = $this->load->view('pages/admin_view',$data,true);
		$this->load->view('dashboard',$data);
	}
	
}
