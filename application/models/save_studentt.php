<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class save_studentt extends CI_Model {

	public function save_student_info(){

		$data = array();

		$data['student_name'] = $this->input->post('student_name');
		$data['student_phone'] = $this->input->post('student_phone');
		$data['student_roll'] = $this->input->post('student_roll');

		$this->db->insert('student',$data);
	}

	public function all_student_info(){

		$this->db->SELECT('*');
		$this->db->FROM('student');
		/************join 2 table**************/
		$this->db->join('admin', 'admin.admin_id = student.student_id');
		
		$query_result = $this->db->get();

		$student_info = $query_result->result();

		return $student_info;
	}

	public function all_student_info_by_id($student_id){

		$this->db->SELECT('*');
		$this->db->FROM('student');
	/*	$this->db->join('admin', 'admin.admin_id = student.student_id');*/
		$this->db->WHERE('student_id',$student_id);
		$query_result = $this->db->get();

		$result = $query_result->row();

		return $result;

	}

	public function update_student_info(){
		$data = array();

		$student_id = $this->input->post('student_id',true);

		$data['student_name'] = $this->input->post('student_name',true);
		$data['student_phone'] = $this->input->post('student_phone',true);
		$data['student_roll'] = $this->input->post('student_roll',true);

		$this->db->WHERE('student_id',$student_id);

		$this->db->update('student',$data);


	}

	public function delete_student_info_by_id($student_id){

		$this->db->WHERE('student_id',$student_id);
		$this->db->delete('student');
	}

	public function save_admin_info(){

		$data = array();
		$data['admin_email'] = $this->input->post('admin_email',true);

		$data['admin_password'] = $this->input->post('admin_password',true);


		/*************for Image upload**********/
			$sdata=array();
		    $error='';

		 $config['upload_path']          = 'image/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100000;
                $config['max_width']            = 2048;
                $config['max_height']           = 1024;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('admin_image'))
                {
                        $error =$this->upload->display_errors();

                        //$this->load->view('upload_form', $error);
                }
                else
                {
                	$sdata = $this->upload->data();
                	$data['admin_image'] = $config['upload_path'].$sdata['file_name'];
                        /*$data = $this->upload->data();*/

                        //$this->load->view('upload_success', $data);
                }

                $this->db->insert('admin',$data);
	}


	public function all_admin_info(){

		$this->db->SELECT('*');
		$this->db->FROM('admin');
		
		$query_result = $this->db->get();

		$student_info = $query_result->result();

		return $student_info;
	}
}