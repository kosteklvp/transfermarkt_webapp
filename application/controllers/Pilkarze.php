<?php
	class Pilkarze extends CI_Controller{
		public function index(){
			
			$data['title'] = 'pilkarze';

			$data['pilkarze'] = $this->pilkarz_model->get_pilkarze();

			$this->load->view('templates/header');
			$this->load->view('pilkarze/index', $data);
			$this->load->view('templates/footer');
		}



		public function view($id) {
			$data['pilkarz'] = $this->pilkarz_model->get_pilkarze($id);

			if(empty($data['pilkarz'])) {
				show_404();
			}

			$data['title'] = $data['pilkarz'];

			$this->load->view('templates/header');
			$this->load->view('pilkarze/view', $data);
			$this->load->view('templates/footer');
		}


		public function create() {

			if(!$this->session->userdata('logged_in')) {
				redirect('users/login');
			}
			$data['title'] = 'Stwórz piłkarza';

			$data['kraje'] = $this->pilkarz_model->get_kraje();
			$data['pozycje'] = $this->pilkarz_model->get_pozycje();
			$data['kluby'] = $this->pilkarz_model->get_kluby();

			$this->form_validation->set_rules('imie_pilkarza', 'Imię', 'required');
			$this->form_validation->set_rules('nazwisko_pilkarza', 'Nazwisko', 'required');
			$this->form_validation->set_rules('wartosc_pilkarza', 'Wartość', 'required');

			if($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header');
				$this->load->view('pilkarze/create', $data);
				$this->load->view('templates/footer');
			} else {
				$this->pilkarz_model->create_pilkarz();

				$this->session->set_flashdata('pilkarz_created', 'Stworzono nowego piłkarza');

				redirect('pilkarze');
			}

			

		}


		public function delete($id) {
			$this->pilkarz_model->delete_pilkarz($id);
			$this->session->set_flashdata('pilkarz_deleted', 'Usuinęto piłkarza');
			redirect('pilkarze');
		}
	}