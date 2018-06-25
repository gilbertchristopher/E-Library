<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('LDB');
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

	public function adminPage()
	{
		$data['js'] = $this->load->view('include/jsAdminPage.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/cssAdminPage.php', NULL, TRUE);
		$this->load->view('pages/adminPage.php', $data);
	}

	public function searchMainpage()
	{
		$data['js'] = $this->load->view('include/jsLandingPage.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/cssLandingPage.php', NULL, TRUE);
		
		if($this->input->post('search_submit')){
			$keyword = $this->input->post('search_keywords');
			$keyword_clean = $this->security->xss_clean($keyword);

			$keyword_clean = strip_tags($keyword_clean);

			$data['searchres'] = $this->LDB->searchByKey($keyword_clean);
			
			$this->load->view('pages/display_search_result', $data);
		}
	}	

	public function actionLogin()
	{
		$data['js'] = $this->load->view('include/jsLoginRegister.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/cssLoginRegister.php', NULL, TRUE);

		$this->form_validation->set_rules('email','Email','trim|required|xss_clean',
					array('required' => 'You must provide a %s'));
		$this->form_validation->set_rules('password','Password','trim|required|xss_clean', 
					array('required' => 'You must provide a %s'));
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('pages/loginRegister', $data);
		} 
		else 
		{
			$email = $this->input->post('email');
			$pass = $this->input->post('password');
			$result = $this->LDB->login($email, $pass);

			if($result != FALSE) {
				$sessiondata = array(
					'nim' => $result[0]->nim,
					'email' => $result[0]->email,
					'password' => $result[0]->password,
					'salt' => $result[0]->salt
				);

				$this->session->set_userdata('logged_user', $sessiondata);

				if($sessiondata['nim'] == '00000011461' || $sessiondata['nim'] == '00000011634' || $sessiondata['nim'] == '00000012175' || $sessiondata['nim'] == '00000012373'){
					$this->load->view('pages/adminPage', $data);
				} else {
					$this->load->view('pages/userPage', $data);
				}
			} else {
				$this->load->view('pages/Homepage', $data);
			}
		}
    }

    public function actionRegister(){
        $data['js'] = $this->load->view('include/jsLoginRegister.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/cssLoginRegister.php', NULL, TRUE);

		$this->form_validation->set_rules('email','Email','trim|required|xss_clean',
					array('required' => 'You must provide a %s'));
		$this->form_validation->set_rules('password','Password','trim|required|xss_clean', 
					array('required' => 'You must provide a %s'));
		$this->form_validation->set_rules('re-password','Retype Password','trim|required|xss_clean',
					array('required' => "You must provide a %s"));
		$this->form_validation->set_rules('nim','NIM','trim|required|xss_clean',
					array('required' => "You must provide a %s"));
					
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('pages/loginRegister', $data);
		} 
		else 
		{
			$this->load->view('pages/userPage', $data);
		}
    }
}
