<?php
class Pages extends CI_Controller {
	
	public function view($page = 'home') {
		if (!file_exists(APPPATH.'/views/pages/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}
		if($page = 'home'){
		$data['title'] = "Nashville Number System"; // Capitalize the first letter
		}else{
			$data['title'] = ucfirst($page);
		}
		
		/*$this->load->model('Db_model');
		$data['table']= $this->Db_model->go();*/
		
		$this->load->view('templates/header', $data);
		$this->load->view("pages/$page", $data);
		
		/*$this->load->helper ( 'form' );
		$this->load->library ( 'form_validation' );*/
		$this->load->view('templates/footer', $data);		
	}
	
	/*public function rename(){
		//TODO rename this nigger
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper ( 'url' );
		$this->load->view('debug');
		$this->load->model('Db_model');
		$this->Db_model->new_table($this->input->post());
	}
	
	public function tbl_columns($data = ""){
		echo "hellooooo";
		$this->load->model('Db_model');
		var_dump($data);
		var_dump($_POST);
		$this->Db_model->new_table();
	}
	
	public function tbl_create($data = null){
		echo "hellooooo";
		$this->load->model('Db_model');
		var_dump($data);
		var_dump($_POST);
		$this->Db_model->new_table($data);
	}
	*/
	
}

