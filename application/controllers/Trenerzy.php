<?php
	class Trenerzy extends CI_Controller{
		public function index(){
			
			$data['title'] = 'trenerzy';

			$data['trenerzy'] = $this->trener_model->get_trenerzy();

			$this->load->view('templates/header');
			$this->load->view('trenerzy/index', $data);
			$this->load->view('templates/footer');
		}

		public function view($id) {
			$data['trener'] = $this->trener_model->get_trenerzy($id);

			if(empty($data['trener'])) {
				show_404();
			}

			$data['title'] = $data['trener'];

			$this->load->view('templates/header');
			$this->load->view('trenerzy/view', $data);
			$this->load->view('templates/footer');
		}


		public function create() {

			if(!$this->session->userdata('logged_in')) {
				redirect('users/login');
			}
			$data['title'] = 'Stwórz trenera';

			$data['kraje'] = $this->trener_model->get_kraje();

			$this->form_validation->set_rules('imie', 'Imię', 'required');
			$this->form_validation->set_rules('nazwisko', 'Nazwisko', 'required');
			
			if($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header');
				$this->load->view('trenerzy/create', $data);
				$this->load->view('templates/footer');
			} else {
				$this->trener_model->create_trener();

				$this->session->set_flashdata('trener_created', 'Stworzono nowego trenera');

				redirect('trenerzy');
			}

			

		}


		public function delete($id) {
			$this->trener_model->delete_trener($id);
			$this->session->set_flashdata('trener_deleted', 'Usunięto trenera');
			redirect('trenerzy');
		}

	}