<?php

	class Pages extends CI_controller
	{
		public function view($page = 'home')
		{
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))
			{
				show_404(); //Show a 404 page if the page passed in is not found.
			}

			$data['title'] = ucfirst($page);

			$this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
		}
	}



