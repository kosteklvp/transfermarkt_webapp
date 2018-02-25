<?php
	class Transfery extends CI_Controller{
		public function index(){
			
			$data['title'] = 'transfery';

			$data['transfery'] = $this->transfer_model->get_transfery();

			$this->load->view('templates/header');
			$this->load->view('transfery/index', $data);
			$this->load->view('templates/footer');
		}

		public function view($id) {
			$data['transfer'] = $this->transfer_model->get_transfery($id);

			if(empty($data['transfer'])) {
				show_404();
			}

			$data['title'] = $data['transfer'];

			$this->load->view('templates/header');
			$this->load->view('transfery/view', $data);
			$this->load->view('templates/footer');
		}

		public function create() {

			if(!$this->session->userdata('logged_in')) {
				redirect('users/login');
			}
			$data['title'] = 'Stwórz transfer';

			$data['kluby'] = $this->transfer_model->get_kluby();
			$data['pilkarze'] = $this->transfer_model->get_pilkarze();

			$this->form_validation->set_rules('kwota', 'Kwota', 'required');
			$this->form_validation->set_rules('data_transferu', 'Data transferu', 'required');

			if($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header');
				$this->load->view('transfery/create', $data);
				$this->load->view('templates/footer');
			} else {
				$this->transfer_model->create_transfer();

				$this->session->set_flashdata('transfer_created', 'Stworzono nowy transfer');

				redirect('transfery');
			}

			

		}

		public function search() {
			$data['title'] = 'transfery';

			$id = $this->input->post('szukana');
			$data['transfery'] = $this->transfer_model->search_transfery($id);

			$this->load->view('templates/header');
			$this->load->view('transfery/index', $data);
			$this->load->view('templates/footer');
		}

		public function delete($id) {
			$this->transfer_model->delete_transfer($id);
			$this->session->set_flashdata('transfer_deleted', 'Usunięto transfer');
			redirect('transfery');
		}
	}