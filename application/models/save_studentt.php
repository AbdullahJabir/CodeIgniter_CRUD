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
		
		$query_result = $this->db->get();

		$student_info = $query_result->result();

		return $student_info;
	}

	public function all_student_info_by_id($student_id){

		$this->db->SELECT('*');
		$this->db->FROM('student');
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
}
