<?php
class Pages extends CI_Controller {
	
	public function index($page = 'home') {
		$data['title'] = "Nashville Number System";
		$this->load->view('templates/header', $data);
		$this->load->view("pages/$page", $data);
		$this->load->view('templates/footer', $data);	
	}
	
	public function single_notes($page = 'single-notes') {
		$data['title'] = "Match Single Notes";
	
		if (!file_exists(APPPATH.'/views/pages/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}
	
		//$data['title'] = ucfirst($page);
	
		$this->load->view('templates/header', $data);
		$this->load->view("pages/$page", $data);
		$this->load->view('templates/footer', $data);
	}
	
	public function help($page = 'help') {
		$data['title'] = ucfirst($page);	
	
		if (!file_exists(APPPATH.'/views/pages/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}
	
		$this->load->view('templates/header', $data);
		$this->load->view("pages/$page", $data);
		$this->load->view('templates/footer', $data);
	}
	
	public function debug($page = 'debug') {
		$data['title'] = ucfirst($page);
	
		if (!file_exists(APPPATH.'/views/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}
	
		$this->load->view('templates/header', $data);
		$this->load->view("$page", $data);
		$this->load->view('templates/footer', $data);
	}
	
}

