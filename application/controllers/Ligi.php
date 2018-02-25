<?php
	class Ligi extends CI_Controller{
		public function index(){
			
			$data['title'] = 'Ligi';

			$data['ligi'] = $this->liga_model->get_ligi();

			$this->load->view('templates/header');
			$this->load->view('ligi/index', $data);
			$this->load->view('templates/footer');
		}

		public function view($id) {
			$data['liga'] = $this->liga_model->get_ligi($id);

			if(empty($data['liga'])) {
				show_404();
			}

			$data['title'] = $data['liga'];

			$this->load->view('templates/header');
			$this->load->view('ligi/view', $data);
			$this->load->view('templates/footer');
		}



		public function create() {

			if(!$this->session->userdata('logged_in')) {
				redirect('users/login');
			}
			$data['title'] = 'Stwórz ligę';

			$data['kraje'] = $this->liga_model->get_kraje();

			$this->form_validation->set_rules('nazwa', 'Nazwa', 'required');

			if($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header');
				$this->load->view('ligi/create', $data);
				$this->load->view('templates/footer');
			} else {
				$this->liga_model->create_liga();

				$this->session->set_flashdata('liga_created', 'Stworzono nową ligę');	

				redirect('ligi');
			}

			

		}


		public function delete($id) {
			$this->liga_model->delete_liga($id);
			$this->session->set_flashdata('liga_deleted', 'Usunięto ligę');
			redirect('ligi');
		}

		
	}