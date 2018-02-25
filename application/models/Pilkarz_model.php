<?php
	class Pilkarz_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_pilkarze($slug = FALSE){
			if($slug === FALSE) {
				$query = "SELECT p.imie_pilkarza, p.nazwisko_pilkarza, po.nazwa_pozycji, kr.nazwa_kraju, k.nazwa_klubu, p.wartosc_pilkarza, p.ID_pilkarz_PK
					FROM pilkarze AS p, pozycje AS po, kraje AS kr, kluby AS k
					WHERE po.ID_pozycja_PK = p.ID_pozycja_FK AND kr.ID_kraj_PK = p.ID_kraj_FK AND k.ID_klub_PK = p.ID_klub_FK
					ORDER BY p.wartosc_pilkarza DESC";
				$db_result = $this->db->query($query);
				$result_array = $db_result->result_array();

				return $result_array;
			}

				$query = "SELECT p.imie_pilkarza, p.nazwisko_pilkarza, po.nazwa_pozycji, kr.nazwa_kraju, k.nazwa_klubu, p.wartosc_pilkarza, k.ID_klub_PK, p.ID_pilkarz_PK
					FROM pilkarze AS p, pozycje AS po, kraje AS kr, kluby AS k
					WHERE po.ID_pozycja_PK = p.ID_pozycja_FK AND kr.ID_kraj_PK = p.ID_kraj_FK AND k.ID_klub_PK = p.ID_klub_FK AND p.ID_pilkarz_PK = " . $slug . " 
					ORDER BY p.wartosc_pilkarza DESC";
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

		public function get_kluby() {
			$query = "SELECT nazwa_klubu, ID_klub_PK
					FROM  kluby";
				$db_result = $this->db->query($query);
				$result_array = $db_result->result_array();

				return $result_array;
			
		}

		public function get_klub_select($slug) {
			$query = "SELECT ID_klub_PK
					FROM  kluby
					WHERE nazwa_klubu = '" . $slug . "'"; 
				$db_result = $this->db->query($query);
				if ($db_result->num_rows() > 0) {
			         return $db_result->row()->ID_klub_PK;
			     }
			     return false;

				return $db_result;
			
		}


		public function get_pozycje() {
			$query = "SELECT nazwa_pozycji, ID_pozycja_PK
					FROM  pozycje";
				$db_result = $this->db->query($query);
				$result_array = $db_result->result_array();

				return $result_array;
			
		}

		public function get_pozycja_select($slug) {
			$query = "SELECT ID_pozycja_PK
					FROM  pozycje
					WHERE nazwa_pozycji = '" . $slug . "'"; 
				$db_result = $this->db->query($query);
				if ($db_result->num_rows() > 0) {
			         return $db_result->row()->ID_pozycja_PK;
			     }
			     return false;

				return $db_result;
			
		}

		public function create_pilkarz() {

			$result_pozycja = $this->pilkarz_model->get_pozycja_select($this->input->post('pozycja'));
			$result_kraj = $this->pilkarz_model->get_kraj_select($this->input->post('kraj'));
			$result_klub = $this->pilkarz_model->get_klub_select($this->input->post('klub'));
				

			$data = array(
				'imie_pilkarza' => $this->input->post('imie_pilkarza'),
				'nazwisko_pilkarza' => $this->input->post('nazwisko_pilkarza'),
				'wartosc_pilkarza' => $this->input->post('wartosc_pilkarza'),
				'ID_pozycja_FK' => $result_pozycja,
				'ID_kraj_FK' => $result_kraj,
				'ID_klub_FK' => $result_klub
			);
			return $this->db->insert('pilkarze', $data);
		}


		public function delete_pilkarz($id) {
			$this->db->where('ID_pilkarz_PK', $id);
			$this->db->delete('pilkarze');
			return true;
		}
	}