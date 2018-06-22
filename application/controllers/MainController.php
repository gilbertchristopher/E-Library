<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

	public function __construct(){
        parent::__construct();
    }

	public function index()
	{
		$data['js'] = $this->load->view('include/jsLandingPage.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/cssLandingPage.php', NULL, TRUE);
		$this->load->view('pages/Homepage',$data);
	}

	public function loginRegisterPage()
	{
        $data['js'] = $this->load->view('include/jsLoginRegister.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/cssLoginRegister.php', NULL, TRUE);
		$this->load->view('pages/loginRegister.php', $data);
	}
	
	public function userPage()
	{
		$data['js'] = $this->load->view('include/jsUserPage.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/cssUserPage.php', NULL, TRUE);
		$this->load->view('pages/userPage.php', $data);
	}

	public function searchMainpage(){
		$data['js'] = $this->load->view('include/jsLandingPage.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/cssLandingPage.php', NULL, TRUE);
		
		if($this->input->post('search_submit')){
			$keyword = $this->input->post('search_keywords');
			$keyword_clean = $this->security->xss_clean($keyword);

			$data['keywords'] = $keyword_clean;
			$data['keywords'] = strip_tags($data['keywords']);
			$this->load->view('pages/display_search_result', $data);
		}
	}	

	public function actionLogin(){

    }

    public function actionRegister(){
        
    }
}
