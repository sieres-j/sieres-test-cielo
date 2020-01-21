<?php

class User_Model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}


	//fetches all users
	public function getUsers()
	{
			$query = $this->db->get_where('users', array('is_deleted'=>0));
			return $query->result_array();
		//SELECT * FROM `users` WHERE is_deleted = 0
	}

	public function createUser()
	{

		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'dob' => $this->input->post('dob'),
			'color' => $this->input->post('color'),
			'is_deleted' => $this->input->post('is_deleted')
		);

		return $this->db->insert('users', $data);
		//INSERT INTO `users`(name, email, dob, color, is_deleted) VALUES (name,email,dob,color,is_deleted);)
	}


	public function deleteUser()
	{
		$id = $this->input->post('id');
		$this->db->set('is_deleted', 1);
		$this->db->where('id', $id);
		return $this->db->update('users'); // UPDATE `users` SET `is_deleted` = 0 WHERE `id` = $id

	}

	public function getUser($id)
	{
		$query = $this->db->get_where('users', array('id'=>$id, 'is_deleted'=>0));
		return $query->result_array();
		//SELECT * FROM users WHERE id=$id AND is_deleted=0;
	}

	public function updateUser()
	{
		$this->db->set('name',$this->input->post('name'));
		$this->db->set('email', $this->input->post('email'));
		$this->db->set('dob', $this->input->post('dob'));
		$this->db->set('color', $this->input->post('color'));
		$this->db->where('id', $this->input->post('id'));
		return $this->db->update('users'); // UPDATE `users` SET `is_deleted` = 0 WHERE `id` = $id
	}

}
