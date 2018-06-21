<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

	public function __construct(){
        parent::__construct();
        // LOAD MODEL
        // $this->load->model('SignInUpModel');
		// $this->load->model('SearchModel');
    }

	public function index()
	{
		$data['js'] = $this->load->view('include/jsLandingPage.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/cssLandingPage.php', NULL, TRUE);
		$this->load->view('pages/Homepage',$data);
	}

	public function index2()
	{
        $data['js'] = $this->load->view('include/jsLoginRegister.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/cssLoginRegister.php', NULL, TRUE);
		$this->load->view('pages/loginRegister.php', $data);
    }

	public function actionLogin(){

    }

    public function actionRegister(){
        
    }
}
