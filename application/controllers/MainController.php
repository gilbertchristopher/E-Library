<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'assets/PHPMailer-master/src/Exception.php';
require 'assets/PHPMailer-master/src/PHPMailer.php';
require 'assets/PHPMailer-master/src/SMTP.php';
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

	//Menampilkan userpage
	public function displayUserPage(){
		$sessiondata = $this->session->userdata('logged_user');

		$data['js'] = $this->load->view('include/jsLoginRegister.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/cssLoginRegister.php', NULL, TRUE);

		$msg = "Selamat datang " .$sessiondata['nim'];

		if($sessiondata['nim'] == '00000011461' || $sessiondata['nim'] == '00000011634' || $sessiondata['nim'] == '00000012175' || $sessiondata['nim'] == '00000012373'){
			$data['genress'] = $this->LDB->generateGenre();
			$data['searchres'] = $this->LDB->displayAllBooks();
			$this->session->set_flashdata('msg',$msg);
			$this->load->view('pages/adminPage', $data);
		} else {
			$data['searchres'] = $this->LDB->displayAllBooks();
			$this->session->set_flashdata('msg',$msg);
			$this->load->view('pages/userPage', $data);
		}
	}
	
	//Halaman user
	public function userPage()
	{
		$data['js'] = $this->load->view('include/jsUserPage.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/cssUserPage.php', NULL, TRUE);

		$data['searchres'] = $this->LDB->displayAllBooks();

		$this->load->view('pages/userPage.php', $data);
	}

	//Function untuk mencari sesuai keyword di userpage
	public function searchUserPage()
	{
		$data['js'] = $this->load->view('include/jsLandingPage.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/cssLandingPage.php', NULL, TRUE);
			
		$keyword = $this->input->post('search_keywords');
		$keyword_clean = $this->security->xss_clean($keyword);
		$keyword_clean = strip_tags($keyword_clean);

		$this->load->library('pagination');
		
		$jumlah_data = $this->LDB->countDataByKeyword($keyword_clean);
		
		$config['base_url']=base_url().'index.php/MainController/searchUserPage';
		$config['total_rows'] = $jumlah_data;
		$config['per_page']= 20;
		$config['num_links']= 4;
		$config['use_page_numbers'] = TRUE;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data['user'] = $this->LDB->searchByKey($keyword_clean, $config['per_page'], $from);
		
		$this->load->view('pages/userPage.php', $data);
	}	

	//Halaman admin
	public function adminPage()
	{
		$data['js'] = $this->load->view('include/jsAdminPage.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/cssAdminPage.php', NULL, TRUE);

		$data['searchres'] = $this->LDB->displayAllBooks();
		$data['genress'] = $this->LDB->generateGenre();

		$this->load->view('pages/adminPage.php', $data);
	}

	//Halaman admin dengan apply filter
	public function adminPageFilter()
	{
		if($this->input->post('filter')){
			$data['js'] = $this->load->view('include/jsAdminPage.php', NULL, TRUE);
			$data['css'] = $this->load->view('include/cssAdminPage.php', NULL, TRUE);

			$keyword = $this->input->post('search_bos');

			$data['searchres'] = $this->LDB->displayFilteredBooks($keyword);
			$data['genress'] = $this->LDB->generateGenre();

			$this->load->view('pages/adminPage.php', $data);
		}
		else if($this->input->post('search')){
			$data['js'] = $this->load->view('include/jsAdminPage.php', NULL, TRUE);
			$data['css'] = $this->load->view('include/cssAdminPage.php', NULL, TRUE);
				
			$keyword = $this->input->post('search_keywords');
			$keyword_clean = $this->security->xss_clean($keyword);
			$keyword_clean = strip_tags($keyword_clean);

			$this->load->library('pagination');
			
			$jumlah_data = $this->LDB->countDataByKeyword($keyword_clean);
			
			$config['base_url']=base_url().'index.php/MainController/searchMainpage';
			$config['total_rows'] = $jumlah_data;
			$config['per_page']= 20;
			$config['num_links']= 4;
			$config['use_page_numbers'] = TRUE;
			$from = $this->uri->segment(3);
			$this->pagination->initialize($config);
			$data['user'] = $this->LDB->searchByKey($keyword_clean, $config['per_page'], $from);
			$data['genress'] = $this->LDB->generateGenre();
			
			$this->load->view('pages/adminPage.php', $data);
		}
	}

	//Function untuk pindah halaman ke edit atau delete
	public function adminEditOrDelete(){
		$data['js'] = $this->load->view('include/jsAdminPage.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/cssAdminPage.php', NULL, TRUE);

		$asin = $this->input->post('asin');
		$data['buku'] = $this->LDB->selectedBooks($asin);
		$data['genress'] = $this->LDB->generateGenre();

		if(isset($_POST['btnDeleteBook'])){
			$this->load->view('pages/bookDetailsDelete.php', $data);
		}
		else if(isset($_POST['btnEditBook'])){
			$this->load->view('pages/bookDetailsEdit.php', $data);
			
		}
	}

	//function untuk eksekusi edit record di databes
	public function actionEditBook(){
		$data['js'] = $this->load->view('include/jsAdminPage.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/cssAdminPage.php', NULL, TRUE);

		$data['searchres'] = $this->LDB->displayAllBooks();
		$data['genress'] = $this->LDB->generateGenre();

		if($this->input->post('cancel')){
			$this->load->view('pages/adminPage.php', $data);
		}
		else if($this->input->post('edit')){
			$data = array('upload_data' => $this->upload->data());
			$asin = $this->input->post('asin');
			$title = $this->input->post('title');
			$author = $this->input->post('author');
			$genre = $this->input->post('genre');
			$imgUrl = $data['upload_data']['full_path'];
			$this->LDB->editBook($asin, $title, $author, $genre, $imgUrl);
			$this->load->view('pages/adminPage.php', $data);
			echo '<script>location.replace("'.base_url("index.php/MainController/adminPage").'")</script>';
		}
	}

	//function untuk eksekusi delete record dr databes
	public function actionDeleteBook(){
		$data['js'] = $this->load->view('include/jsAdminPage.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/cssAdminPage.php', NULL, TRUE);

		$data['searchres'] = $this->LDB->displayAllBooks();
		$data['genress'] = $this->LDB->generateGenre();

		if($this->input->post('cancel')){
			$this->load->view('pages/adminPage.php', $data);
		}
		else if($this->input->post('delete')){
			$asin = $this->input->post('asin');
			$this->LDB->deleteBook($asin);
			$this->load->view('pages/adminPage.php', $data);
			echo '<script>location.replace("'.base_url("index.php/MainController/adminPage").'")</script>';
		}
	}

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
			
		$keyword = $this->input->post('search_keywords');
		$keyword_clean = $this->security->xss_clean($keyword);

		$keyword_clean = strip_tags($keyword_clean);

		//$data['searchres'] = $this->LDB->searchByKey($keyword_clean);
		$this->load->library('pagination');
		
		//$jumlah_data = count($data['searchres']);
		$jumlah_data = $this->LDB->countDataByKeyword($keyword_clean);
		
		$config['base_url']=base_url().'index.php/MainController/searchMainpage';
		$config['total_rows'] = $jumlah_data;
		$config['per_page']= 20;
		$config['num_links']= 4;
		//$config['uri_segment'] = 3;
		$config['use_page_numbers'] = TRUE;
		//$data['baris']=$jumlah_data;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		//$data['user'] = $this->LDB->subset($config['per_page'],$from);
		$data['user'] = $this->LDB->searchByKey($keyword_clean, $config['per_page'], $from);
		
		$this->load->view('pages/display_search_result', $data);
		
	}	

	//Script php untuk login
	public function actionLogin()
	{
		$data['js'] = $this->load->view('include/jsLoginRegister.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/cssLoginRegister.php', NULL, TRUE);

		$this->form_validation->set_rules('email_login','Email','trim|required',
					array(
						'required' => 'You must provide a %s'
						)
					);
		$this->form_validation->set_rules('password_login','Password','trim|required', 
					array('required' => 'You must provide a %s'));
		$this->form_validation->set_error_delimiters('<strong style="color:red">','</strong>');
		
		if($this->form_validation->run() == FALSE)
		{
			$data['activeLogin'] = "active";
			$data['activeRegister'] = "";
			//$data['error_message_login'] = $this->form_validation->error_array();
			$this->load->view('pages/loginRegister', $data);
		} 
		else 
		{
			$email = $this->input->post('email_login');
			$pass = $this->input->post('password_login');
			$result = $this->LDB->login($email, $pass);

			if($result != FALSE) {
				$sessiondata = array(
					'nim' => $result[0]->nim,
					'email' => $result[0]->email,
					'password' => $result[0]->password,
					'salt' => $result[0]->salt
				);

				$this->session->set_userdata('logged_user', $sessiondata);

				$this->displayUserPage();
			} else {
				$data['activeLogin'] = "active";
				$data['activeRegister'] = "";
				$data['error_message_login2'] = "Invalid Credentials";
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

		$this->form_validation->set_rules('email','Email','trim|required|valid_email',
					array(
						'required' => 'You must provide a valid %s'
						)
					);
		$this->form_validation->set_rules('password','Password','trim|required', 
					array('required' => 'You must provide a %s'));
		$this->form_validation->set_rules('re-password','Retype Password','trim|required|matches[password]',
					array('required' => "You must provide a %s"));
		$this->form_validation->set_rules('nim','NIM','trim|required',
					array('required' => "You must provide a %s"));
		$this->form_validation->set_error_delimiters('<strong style="color:red">','</strong>');
					
		if($this->form_validation->run() == FALSE)
		{
			$data['activeLogin'] = "";
			$data['activeRegister'] = "active";
			//$data['error_message_register'] = $this->form_validation->error_array();
			$this->load->view('pages/loginRegister', $data);
		} 
		else 
		{
			$email = $this->input->post('');
			$nim = $this->input->post('');
			$password = $this->input->post('');
			$this->load->view('pages/userPage', $data);
		}
	}
	
	//Script buat add
	public function actionAdd()
	{
		$data['js'] = $this->load->view('include/jsLoginRegister.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/cssLoginRegister.php', NULL, TRUE);

		$this->form_validation->set_rules('title','Title','trim|required|xss_clean',
					array(
						'required' => 'You must provide a %s'
						)
					);
		$this->form_validation->set_rules('password_login','Password','trim|required|xss_clean', 
					array('required' => 'You must provide a %s'));
		$this->form_validation->set_error_delimiters('<strong style="color:red">','</strong>');

		$this->load->view('pages/adminPage', $data);
	}

	public function testemail(){
		$this->load->library('email');

		$subject = 'This is a test';
		$message = '<p>This message has been sent for testing purposes.</p>';

		// Get full html:
		$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
			<title>' . html_escape($subject) . '</title>
			<style type="text/css">
				body {
					font-family: Arial, Verdana, Helvetica, sans-serif;
					font-size: 16px;
				}
			</style>
		</head>
		<body>
		' . $message . '
		</body>
		</html>';
		// Also, for getting full html you may use the following internal method:
		//$body = $this->email->full_html($subject, $message);

		$result = $this->email
			->from('ELibraryUMN@gmail.com')
			//->reply_to('yoursecondemail@somedomain.com')    // Optional, an account where a human being reads.
			->to('nathanielsuhardiman@gmail.com')
			->subject($subject)
			->message($body)
			->send();

		var_dump($result);
		echo '<br />';
		echo $this->email->print_debugger();

		exit;
	}

	public function testemail2(){

		//Load Composer's autoloader
		//require 'vendor/autoload.php';

		$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
		try {
			//Server settings
			$mail->SMTPDebug = 2;                                 // Enable verbose debug output
			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'ELibraryUMN@gmail.com';                 // SMTP username
			$mail->Password = 'burunggede';                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to

			//Recipients
			$mail->setFrom('ELibraryUMN@gmail.com', 'Mailer');
			$mail->addAddress('nathanielsuhardiman@gmail.com', 'Joe User');     // Add a recipient
			$mail->addAddress('ellen@example.com');               // Name is optional
			$mail->addReplyTo('info@example.com', 'Information');
			$mail->addCC('cc@example.com');
			$mail->addBCC('bcc@example.com');

			//Attachments
			//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

			//Content
			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject = 'Here is the subject';
			$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			$mail->send();
			echo 'Message has been sent';
		} catch (Exception $e) {
			echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		}
	}

	public function do_upload()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                //$config['max_size']             = 100;
                //$config['max_width']            = 1024;
                //$config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
						//$error = array('error' => $this->upload->display_errors());
						
						echo $data['upload_data']['full_path'];
                        //$this->load->view('upload_form', $error);
                }
                else
                {
                        //$data = array('upload_data' => $this->upload->data());

                        //$this->load->view('upload_success', $data);
                }
        }
}
