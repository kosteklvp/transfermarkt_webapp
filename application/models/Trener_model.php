<?php
	class Trener_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_trenerzy($slug = FALSE){
			if($slug === FALSE) {
				$query = "SELECT tr.imie_trenera, tr.nazwisko_trenera, kr.nazwa_kraju, k.nazwa_klubu, tr.ID_trener_PK, k.ID_klub_PK
					FROM kluby AS k, trenerzy AS tr, kraje AS kr
					WHERE tr.ID_trener_PK = k.ID_trener_FK AND tr.ID_kraj_FK = kr.ID_kraj_PK";
				$db_result = $this->db->query($query);
				$result_array = $db_result->result_array();

				return $result_array;
			}

				$query = "SELECT tr.imie_trenera, tr.nazwisko_trenera, kr.nazwa_kraju, k.nazwa_klubu, tr.ID_trener_PK, k.ID_klub_PK, pilkarze.wartosc_pilkarza
					FROM kluby AS k, trenerzy AS tr, kraje AS kr, pilkarze
					WHERE tr.ID_trener_PK = k.ID_trener_FK AND tr.ID_kraj_FK = kr.ID_kraj_PK AND tr.ID_trener_PK=" . $slug;
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

		public function create_trener() {

			$result_kraj = $this->trener_model->get_kraj_select($this->input->post('kraj'));
			
			

			$data = array(
				'imie_trenera' => $this->input->post('imie'),
				'nazwisko_trenera' => $this->input->post('nazwisko'),
				'ID_kraj_FK' => $result_kraj
			);
			return $this->db->insert('trenerzy', $data);
		}

		public function delete_trener($id) {
			$this->db->where('ID_trener_PK', $id);
			$this->db->delete('trenerzy');
			return true;
		}
	}