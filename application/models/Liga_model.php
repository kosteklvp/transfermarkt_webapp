<?php
	class Liga_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_ligi($slug = FALSE){
			if($slug === FALSE) {
				$query = "SELECT l.nazwa_ligi, l.szczebel, l.ilosc_druzyn, kr.nazwa_kraju, l.ID_liga_PK
					FROM ligi AS l, kraje AS kr
					WHERE l.ID_kraj_FK = kr.ID_kraj_PK";
				$db_result = $this->db->query($query);
				$result_array = $db_result->result_array();

				return $result_array;
			}

			$query = "SELECT l.nazwa_ligi, l.szczebel, l.ilosc_druzyn, kr.nazwa_kraju, l.ID_liga_PK
				FROM ligi AS l, kraje AS kr
				WHERE l.ID_kraj_FK = kr.ID_kraj_PK AND l.ID_liga_PK=" . $slug;
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

		public function create_liga() {

			$result_kraj = $this->liga_model->get_kraj_select($this->input->post('kraj'));
			
			

			$data = array(
				'nazwa_ligi' => $this->input->post('nazwa'),
				'szczebel' => $this->input->post('szczebel'),
				'ilosc_druzyn' => $this->input->post('ilosc'),
				'ID_kraj_FK' => $result_kraj
			);
			return $this->db->insert('ligi', $data);
		}

		public function delete_liga($id) {
			$this->db->where('ID_liga_PK', $id);
			$this->db->delete('ligi');
			return true;
		}
	}