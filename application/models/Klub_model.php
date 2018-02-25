<?php
	class Klub_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_kluby($slug = FALSE){
			if($slug === FALSE) {
				$query = "SELECT k.nazwa_klubu, k.data_zalozenia, s.nazwa_stadionu, s.pojemnosc,tr.imie_trenera, tr.nazwisko_trenera, l.nazwa_ligi, k.ID_klub_PK, kr.nazwa_kraju, tr.ID_trener_PK
					FROM kluby AS k, kraje AS kr, stadiony AS s, trenerzy AS tr, ligi AS l
					WHERE kr.ID_kraj_PK = k.ID_kraj_FK AND k.ID_stadion_FK = s.ID_stadion_PK AND k.ID_trener_FK = tr.ID_trener_PK AND k.ID_liga_FK = l.ID_liga_PK";
				$db_result = $this->db->query($query);
				$result_array = $db_result->result_array();

				return $result_array;
			}

				$query = "SELECT k.nazwa_klubu, k.data_zalozenia, s.nazwa_stadionu, s.pojemnosc,tr.imie_trenera, tr.nazwisko_trenera, l.nazwa_ligi, k.ID_klub_PK, kr.nazwa_kraju, tr.ID_trener_PK, l.ID_liga_PK
					FROM kluby AS k, kraje AS kr, stadiony AS s, trenerzy AS tr, ligi AS l
					WHERE kr.ID_kraj_PK = k.ID_kraj_FK AND k.ID_stadion_FK = s.ID_stadion_PK AND k.ID_trener_FK = tr.ID_trener_PK AND k.ID_liga_FK = l.ID_liga_PK AND k.ID_klub_PK=" . $slug;
				$db_result = $this->db->query($query);
				$result_array = $db_result->row_array();

				return $result_array;
		}

		public function get_kraje() {
			$query = "SELECT nazwa_kraju, ID_kraj_PK
					FROM  kraje";
				$db_result = $this->db->query($query);
				$result_array = $db_result->result_array();

				return $result_array;
			
		}

		public function get_kraj_select($slug) {
			$query = "SELECT ID_kraj_PK
					FROM  kraje
					WHERE nazwa_kraju = '" . $slug . "'"; 
				$db_result = $this->db->query($query);
				if ($db_result->num_rows() > 0) {
			         return $db_result->row()->ID_kraj_PK;
			     }
			     return false;

				return $db_result;
			
		}


		public function get_stadiony() {
			$query = "SELECT nazwa_stadionu, ID_stadion_PK
					FROM  stadiony";
				$db_result = $this->db->query($query);
				$result_array = $db_result->result_array();

				return $result_array;
			
		}

		public function get_stadion_select($slug) {
			$query = "SELECT ID_stadion_PK
					FROM  stadiony
					WHERE nazwa_stadionu = '" . $slug . "'"; 
				$db_result = $this->db->query($query);
				if ($db_result->num_rows() > 0) {
			         return $db_result->row()->ID_stadion_PK;
			     }
			     return false;

				return $db_result;
			
		}


		public function get_trenerzy() {
			$query = "SELECT nazwisko_trenera, ID_trener_PK
					FROM  trenerzy";
				$db_result = $this->db->query($query);
				$result_array = $db_result->result_array();

				return $result_array;
			
		}

		public function get_trener_select($slug) {
			$query = "SELECT ID_trener_PK
					FROM  trenerzy
					WHERE nazwisko_trenera = '" . $slug . "'"; 
				$db_result = $this->db->query($query);
				if ($db_result->num_rows() > 0) {
			         return $db_result->row()->ID_trener_PK;
			     }
			     return false;

				return $db_result;
			
		}


		public function get_ligi() {
			$query = "SELECT nazwa_ligi, ID_liga_PK
					FROM  ligi";
				$db_result = $this->db->query($query);
				$result_array = $db_result->result_array();

				return $result_array;
			
		}

		public function get_liga_select($slug) {
			$query = "SELECT ID_liga_PK
					FROM  ligi
					WHERE nazwa_ligi = '" . $slug . "'"; 
				$db_result = $this->db->query($query);
				if ($db_result->num_rows() > 0) {
			         return $db_result->row()->ID_liga_PK;
			     }
			     return false;

				return $db_result;
			
		}



		public function create_klub() {

			$result_kraj = $this->klub_model->get_kraj_select($this->input->post('kraj'));
			$result_stadion = $this->klub_model->get_stadion_select($this->input->post('stadion'));
			$result_trener = $this->klub_model->get_trener_select($this->input->post('trener'));
			$result_liga = $this->klub_model->get_liga_select($this->input->post('liga'));

			
			

			$data = array(
				'nazwa_klubu' => $this->input->post('nazwa'),
				'data_zalozenia' => $this->input->post('data_zalozenia'),
				'ID_kraj_FK' => $result_kraj,
				'ID_stadion_FK' => $result_stadion,
				'ID_trener_FK' => $result_trener,
				'ID_liga_FK' => $result_liga
			);
			return $this->db->insert('kluby', $data);
		}


		public function delete_klub($id) {
			$this->db->where('ID_klub_PK', $id);
			$this->db->delete('kluby');
			return true;
		}
	}