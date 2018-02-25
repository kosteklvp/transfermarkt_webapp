<?php
	class Transfer_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_transfery($slug = FALSE){
			if($slug === FALSE) {
				$query = "SELECT p.imie_pilkarza, p.nazwisko_pilkarza, t.data_transferu, t.kwota, p.wartosc_pilkarza, k.nazwa_klubu, t.ID_transfer_PK
					FROM pilkarze AS p, transfery AS t, kluby AS k 
					WHERE p.ID_pilkarz_PK = t.ID_pilkarz_FK AND t.ID_klub_poz_FK = k.ID_klub_PK 
					ORDER BY t.data_transferu DESC";
				$db_result = $this->db->query($query);
				$result_array = $db_result->result_array();

				return $result_array;
			}

				$query = "SELECT p.imie_pilkarza, p.nazwisko_pilkarza, t.data_transferu, t.kwota, p.wartosc_pilkarza, k.nazwa_klubu, t.ID_transfer_PK, k.ID_klub_PK
					FROM pilkarze AS p, transfery AS t, kluby AS k 
					WHERE p.ID_pilkarz_PK = t.ID_pilkarz_FK AND t.ID_klub_poz_FK = k.ID_klub_PK AND t.ID_transfer_PK=" . $slug . "
					ORDER BY t.data_transferu DESC";
				$db_result = $this->db->query($query);
				$result_array = $db_result->row_array();

				return $result_array;
		}

		public function search_transfery($id) {
			$query = "SELECT p.imie_pilkarza, p.nazwisko_pilkarza, t.data_transferu, t.kwota, p.wartosc_pilkarza, k.nazwa_klubu, t.ID_transfer_PK
					FROM pilkarze AS p, transfery AS t, kluby AS k 
					WHERE p.ID_pilkarz_PK = t.ID_pilkarz_FK AND t.ID_klub_poz_FK = k.ID_klub_PK  AND
					CONCAT(p.imie_pilkarza, p.nazwisko_pilkarza, k.nazwa_klubu) LIKE '%" . $id . "%'
					ORDER BY t.data_transferu DESC";
				$db_result = $this->db->query($query);
				$result_array = $db_result->result_array();

				return $result_array;
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

		public function get_pilkarze() {
			$query = "SELECT imie_pilkarza, nazwisko_pilkarza, ID_pilkarz_PK
					FROM  pilkarze";
				$db_result = $this->db->query($query);
				$result_array = $db_result->result_array();

				return $result_array;
			
		}

		public function get_pilkarz_select($slug) {
			$query = "SELECT ID_pilkarz_PK
					FROM  pilkarze
					WHERE nazwisko_pilkarza = '" . $slug . "'"; 
				$db_result = $this->db->query($query);
				if ($db_result->num_rows() > 0) {
			         return $db_result->row()->ID_pilkarz_PK;
			     }
			     return false;

				return $db_result;
			
		}

		public function get_current_klub($slug) {
			$query = "SELECT ID_klub_FK
					FROM  pilkarze AS p, kluby AS k
					WHERE ID_pilkarz_PK = '" . $slug . "' AND k.ID_klub_PK = p.ID_klub_FK"; 
				$db_result = $this->db->query($query);
				if ($db_result->num_rows() > 0) {
			         return $db_result->row()->ID_klub_FK;
			     }
			     return false;

				return $db_result;
			
		}

		public function create_transfer() {

			$result_klub = $this->transfer_model->get_klub_select($this->input->post('klub_pozyskujacy'));
			$result_pilkarz = $this->transfer_model->get_pilkarz_select($this->input->post('pilkarz'));
			$current_klub = $this->transfer_model->get_current_klub($result_pilkarz);
				

			$data = array(
				'kwota' => $this->input->post('kwota'),
				'data_transferu' => $this->input->post('data_transferu'),
				'ID_klub_poz_FK' => $result_klub,
				'ID_klub_odd_FK' => $current_klub,
				'ID_pilkarz_FK' => $result_pilkarz
			);
			return $this->db->insert('transfery', $data);
		}


		public function delete_transfer($id) {
			$this->db->where('ID_transfer_PK', $id);
			$this->db->delete('transfery');
			return true;
		}
	}