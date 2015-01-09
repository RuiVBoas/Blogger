<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class fst_pag extends CI_Controller {
	public function index(){
		$this->load->library("form_validation");

		$this->form_validation->set_rules("username", "username", "required|xss_clean|trim");
		$this->form_validation->set_rules("pword", "pword", "required");

		if($this->form_validation->run() == FALSE){
			$this->load->view("new_view");	
		}else{
			$this->load->model('user_model');
			$array_login = array( 
				'username' => $_REQUEST['username'],
				'pword' => sha1($_REQUEST['pword']), //sha1 ou md5  é para fazer a encriptação da password
				);
			$user = $this->user_model->login($array_login);
			if(isset($user[0])){ // isset é para saber se existe
				$this->session->set_userdata('username',$_REQUEST['username']);
	//			if(isset($this->session->userdata('username'))){
				$data['lista_users'] = $this->user_model->get_user();
				$this->load->view('pagina_get_user',$data);
			}else{
				redirect('/fst_pag/index');
			}
		}
	}

	public function sign_in_open() {
		$this->load->library("form_validation");

		$this->form_validation->set_rules("username", "username", "required|xss_clean|trim|min_length[4]|max_length[20]");
		$this->form_validation->set_rules("email", "email", "required|trim|valid_email"); // trim é para apagar os espeços à esquerda e à direita
		$this->form_validation->set_rules("nome", "nome", "trim|regex_match[/[a-zA-Z ]+/]");
		$this->form_validation->set_rules("pword", "pword", "required|matches[confirm]");
		$this->form_validation->set_rules("confirm", "confirm", "required");

		if($this->form_validation->run() == FALSE){
			$this->load->view("sign_in");	
		}else{
			$array = array( 
				'username' => $_REQUEST['username'],
				'pword' => sha1($_REQUEST['pword']), //sha1 ou md5  é para fazer a encriptação da password
				'email' => $_REQUEST['email'],
				'nome' => $_REQUEST['nome'],
//				'data_nascimento' => $_REQUEST['data_nascimento'],
			);
			$this->load->model('user_model');
			$this->user_model->sign_in($array);
			redirect('/fst_pag/index');
		}
	}

	public function go_to_parte_minha(){
		$this->load->library("form_validation");

		$this->form_validation->set_rules("conteudo","conteudo","required|min_length[50]");
		$this->form_validation->set_rules("autor","autor","required|max_length[100]");

		if($this->form_validation->run() == FALSE){
			$this->load->view("parte_minha");
		}else{
			$array_post = array(
				'titulo' => $_REQUEST['titulo'],
				'conteudo' => $_REQUEST['conteudo'],
				'autor' => $_REQUEST['autor'],
			);
			$this->load->model('user_model');
			$this->user_model->insert_post($array_post);
			redirect('/fst_pag/index');
		}
	}
}