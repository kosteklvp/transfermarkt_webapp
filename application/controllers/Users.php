<?php
	class Users extends CI_Controller{
		public function register(){
			
			$data['title'] = 'Rejestracja';

			$this->form_validation->set_rules('name', 'Nazwa', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('username', 'Login', 'required');
			$this->form_validation->set_rules('password', 'Hasło', 'required');
			$this->form_validation->set_rules('password2', 'Potwierdź hasło', 'matches[password]');

			if ($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header');
				$this->load->view('users/register', $data);
				$this->load->view('templates/footer');
			} else {
				$enc_password = md5($this->input->post('password'));

				$this->user_model->register($enc_password);

				$this->session->set_flashdata('user_registered', 'Rejestracja przebiegła pomyślnie');

				redirect('transfery');
			}
		}

		public function login(){
			
			$data['title'] = 'Logowanie';

			$this->form_validation->set_rules('username', 'Login', 'required');
			$this->form_validation->set_rules('password', 'Hasło', 'required');

			if ($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header');
				$this->load->view('users/login', $data);
				$this->load->view('templates/footer');
			} else {
				
				$username = $this -> input->post('username');
				$password = md5($this -> input -> post('password'));

				$user_id = $this ->user_model->login($username, $password);

				if($user_id) {
						$user_data = array(
							'user_id' => $user_id,
							'username' => $username,
							'logged_in' => true
						);

						$this->session->set_userdata($user_data);

						$this->session->set_flashdata('user_loggedin', 'Zalogowano');
						redirect('transfery');
				} else {
					$this->session->set_flashdata('login_failed', 'Błędne logowanie');

					redirect('users/login');
				}

				

				
			}
		}

		public function logout(){
			
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('username');

			$this->session->set_flashdata('user_loggedout', 'Wylogowano');

			redirect('users/login');
		}
	}