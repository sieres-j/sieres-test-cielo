<?php

class Users extends CI_controller
{

	//This will display all the users
	public function index()
	{
		$data['title'] = 'User List';
		$data['users'] = $this->User_Model->getUsers();

		$this->load->view('templates/header');
		$this->load->view('users/index', $data);
		$this->load->view('templates/footer');
	}

	//This will display the form to create the users
	public function create()
	{
		$data['title'] = 'Intake Form';

		$this->load->view('templates/header');
		$this->load->view('users/create', $data);
		$this->load->view('templates/footer');
	}

	//This will store the newly created user
	public function store()
	{
		$this->User_Model->createUser();

		redirect('users');
	}

	//This will update the current user
	public function edit($id)
	{
		$data['title'] = 'Edit User';
		$data['user'] = $this->User_Model->getUser($id);

		$this->load->view('templates/header');
		$this->load->view('users/edit', $data);
		$this->load->view('templates/footer');
	}

	//This will Delete the selected User
	public function destroy()
	{
		$this->User_Model->deleteUser();
		redirect('users');
	}

	public function update()
	{
		$this->User_Model->updateUser();
		redirect('users');
	}

}



