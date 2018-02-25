<?php
	class Kluby extends CI_Controller{
		public function index(){
			
			$data['title'] = 'kluby';

			$data['kluby'] = $this->klub_model->get_kluby();

			$this->load->view('templates/header');
			$this->load->view('kluby/index', $data);
			$this->load->view('templates/footer');
		}

		public function view($id) {
			$data['klub'] = $this->klub_model->get_kluby($id);

			if(empty($data['klub'])) {
				show_404();
			}

			$data['title'] = $data['klub'];

			$this->load->view('templates/header');
			$this->load->view('kluby/view', $data);
			$this->load->view('templates/footer');
		}

		public function create() {

			if(!$this->session->userdata('logged_in')) {
				redirect('users/login');
			}

			$data['title'] = 'Stwórz klub';

			$data['kraje'] = $this->klub_model->get_kraje();
			$data['stadiony'] = $this->klub_model->get_stadiony();
			$data['trenerzy'] = $this->klub_model->get_trenerzy();
			$data['ligi'] = $this->klub_model->get_ligi();

			$this->form_validation->set_rules('nazwa', 'Nazwa', 'required');
			$this->form_validation->set_rules('data_zalozenia', 'Data założenia', 'required');

			if($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header');
				$this->load->view('kluby/create', $data);
				$this->load->view('templates/footer');
			} else {
				$this->klub_model->create_klub();

				$this->session->set_flashdata('klub_created', 'Stworzono nowy klub');

				redirect('kluby');
			}

			

		}


		public function delete($id) {

			$this->klub_model->delete_klub($id);
			$this->session->set_flashdata('klub_deleted', 'Usunięto klub');
			redirect('kluby');
		}

		
	}