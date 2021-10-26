<?php

class Login extends Controller {
	public function index()
	{
		$this->view('login/login');
	}

	public function prosesLogin() {
        $row = $this->model('LoginModel')->checkLogin($_POST);
		if($row > 0 ) {
				$_SESSION['username'] = $row['username'];
				$_SESSION['nama_admin'] = $row['nama_admin'];
				$_SESSION['session_login'] = 'sudah_login'; 
				
				header('location: ' .base_url .'/anggota');
		} else {
			Flasher::setMessage('Username / Password','salah.','danger');
			header('location: ' .base_url .'/login');
			exit;	
		}
	}
}