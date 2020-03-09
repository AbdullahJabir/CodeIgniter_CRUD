<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data = array();
		$data['admin_main_content'] = $this->load->view('pages/dashboardd','',true);
		$this->load->view('dashboard',$data);
	}

	public function add_student()
	{
		$data = array();
		$data['admin_main_content'] = $this->load->view('pages/addstudent','',true);
		$this->load->view('dashboard',$data);
		/*$this->load->view('pages/addstudent');*/
	}

	public function save_student(){
		$this->save_studentt->save_student_info();
		$sdata=array();
		$sdata['message']='Student added successfully !!!';

		$this->session->set_userdata($sdata);
		
		 redirect(base_url().'add-student');



	}

	public function view_student()
	{
		$data = array();
		/*go to model*/
		$data['all_student_info'] = $this->save_studentt->all_student_info();
		$data['admin_main_content'] = $this->load->view('pages/view',$data,true);
		$this->load->view('dashboard',$data);
		/*$this->load->view('pages/addstudent');*/
	}

	public function edit_student($student_id){
		$data = array();
		$data['all_student_info_by_id'] = $this->save_studentt->all_student_info_by_id($student_id);
		$data['admin_main_content'] = $this->load->view('pages/edit',$data,true);
		$this->load->view('pages/edit',$data);

	}

	public function update_student(){

		$this->save_studentt->update_student_info();

		$sdata=array();
		$sdata['message']='Student added successfully !!!';

		$this->session->set_userdata($sdata);
		redirect(base_url().'view-student');

		}

		public function delete_student($student_id){

			$this->save_studentt->delete_student_info_by_id($student_id);
			$sdata=array();
		$sdata['message']='Student delete successfully !!!';
		$this->session->set_userdata($sdata);

		redirect('view-student');

		
		}

		public function show_student($student_id){

			$data = array();
		$data['all_student_info_by_id'] = $this->save_studentt->all_student_info_by_id($student_id);
		$data['admin_main_content'] = $this->load->view('pages/show',$data,true);
		$this->load->view('pages/show',$data);
		}

		

}
