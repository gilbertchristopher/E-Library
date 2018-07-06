<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('LDB');
    }

	//Halaman homepage
	public function index()
	{
		$data['js'] = $this->load->view('include/jsLandingPage.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/cssLandingPage.php', NULL, TRUE);
		$this->load->view('pages/Homepage',$data);
	}

	//Halaman login dan register
	public function loginRegisterPage()
	{
        $data['js'] = $this->load->view('include/jsLoginRegister.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/cssLoginRegister.php', NULL, TRUE);
		$data['activeLogin'] = "active";
		$data['activeRegister'] = "";
		$this->load->view('pages/loginRegister.php', $data);
	}
	
	//Halaman user
	public function userPage()
	{
		$data['js'] = $this->load->view('include/jsUserPage.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/cssUserPage.php', NULL, TRUE);
		$this->load->view('pages/userPage.php', $data);
	}

	//Halaman admin
	public function adminPage()
	{
		$data['js'] = $this->load->view('include/jsAdminPage.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/cssAdminPage.php', NULL, TRUE);

		$data['searchres'] = $this->LDB->displayAllBooks();

		$this->load->view('pages/adminPage.php', $data);
	}

	//Halaman admin dengan apply filter
	// public function adminPageFilter()
	// {
	// 	$data['js'] = $this->load->view('include/jsAdminPage.php', NULL, TRUE);
	// 	$data['css'] = $this->load->view('include/cssAdminPage.php', NULL, TRUE);

	// 	$this->load->view('pages/adminPage.php', $data);
	// }

	//Halaman about us
	public function aboutUsPage(){
		$data['js'] = $this->load->view('include/jsAdminPage.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/cssAdminPage.php', NULL, TRUE);
		$this->load->view('pages/aboutUsPage.php', $data);
	}

	//Function untuk mencari sesuai keyword
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

	//Script php untuk login
	public function actionLogin()
	{
		$data['js'] = $this->load->view('include/jsLoginRegister.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/cssLoginRegister.php', NULL, TRUE);

		$this->form_validation->set_rules('email','Email','trim|required|valid_email|xss_clean',
					array('required' => 'You must provide a %s', 'valid_email' => 'You must provide a valid email.'));
		$this->form_validation->set_rules('password','Password','trim|required|xss_clean', 
					array('required' => 'You must provide a %s'));
		
		if($this->form_validation->run() == FALSE)
		{
			$data['activeLogin'] = "active";
			$data['activeRegister'] = "";
			$data['error_message_login'] = $this->form_validation->error_array();
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
				$data['activeLogin'] = "active";
				$data['activeRegister'] = "";
				$data['error_message_login2'] = "Email or/and password didn't match or account doesn't exist";
				$this->load->view('pages/loginRegister', $data);
			}
		}
	}
	
	//Script untuk logout
	public function actionLogout(){
		$data['js'] = $this->load->view('include/jsLoginRegister.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/cssLoginRegister.php', NULL, TRUE);

		$this->session->unset_userdata('logged_user');

		$this->load->view('pages/Homepage', $data);
	}

	//Script untuk register
    public function actionRegister(){
        $data['js'] = $this->load->view('include/jsLoginRegister.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/cssLoginRegister.php', NULL, TRUE);

		$this->form_validation->set_rules('email','Email','trim|required|valid_email|xss_clean',
					array('required' => 'You must provide an %s', 'valid_email' => 'You must provide a valid email.'));
		$this->form_validation->set_rules('password','Password','trim|required|xss_clean', 
					array('required' => 'You must provide a %s'));
		$this->form_validation->set_rules('re-password','Retype Password','trim|required|xss_clean|matches[password]',
					array('required' => "You must provide a %s"));
		$this->form_validation->set_rules('nim','NIM','trim|required|xss_clean',
					array('required' => "You must provide a %s"));
					
		if($this->form_validation->run() == FALSE)
		{
			$data['activeLogin'] = "";
			$data['activeRegister'] = "active";
			$data['error_message_register'] = $this->form_validation->error_array();
			$this->load->view('pages/loginRegister', $data);
		} 
		else 
		{
			$this->load->view('pages/userPage', $data);
		}
    }
}
