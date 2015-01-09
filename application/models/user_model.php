<?php
	class user_model extends CI_Model {
		public function sign_in($array_sign_in){
			$this->db->insert('Utilizador', $array_sign_in);
			return $this->db->insert_id(); 
		}
		public function get_user(){
			$query = $this->db->get('Utilizador');
			return $query->result();
		}
		public function login($array_login){
			$query = $this->db->get_where('Utilizador', $array_login); //$limit, $offset); //$limit é para dar o limite de resultados e o offset é para dar os resultados a partir de um determinado valor;
			return $query->result();
		}
		public function insert_post($array_post){
			$query = $this->db->insert('Post', $array_post);
			return $this->db->insert_id();
		}
	}
?>