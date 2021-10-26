<?php
class Buku extends Controller{
    public function __construct()
    {
        if($_SESSION['session_login'] != 'sudah_login'){
            Flasher::setMessage('Login',' Tidak ditemukan','danger');
            header('location: ' .base_url .'/login');
            exit;
        }
    }
    
    public function index()
    {
        $data['title'] = 'Buku';
        $data['judul'] = 'Data Buku';
        $data['buku'] = $this->model('BukuModel')->getAllBuku();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('buku/index', $data);
        $this->view('templates/modals');
        $this->view('templates/footer');
    }

    public function detail($id_buku)
    {
        $data['title'] = 'Buku';
        $data['judul'] = 'Detail Buku';
        $data['buku'] = $this->model('BukuModel')->getBukuById($id_buku);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('buku/edit', $data);
        $this->view('templates/modals');
        $this->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = 'Buku';
        $data['judul'] = 'Tambah Buku';
        $data['buku'] = $this->model('BukuModel')->getBukuId();
        $this->view('templates/header',$data);
        $this->view('templates/sidebar',$data);
        $this->view('buku/create',$data);
        $this->view('templates/modals');
        $this->view('templates/footer');
    }

	public function simpanBuku()
	{		
		if( $this->model('BukuModel')->tambahBuku($_POST) > 0 ) {
			Flasher::setMessage('Berhasil ','ditambahkan','success');
			header('location: '. base_url . '/buku');
			exit;			
		}else{
			Flasher::setMessage('Gagal ','ditambahkan','danger');
			header('location: '. base_url . '/buku');
			exit;	
		}
	}

    public function updateBuku()
    {
        if($this->model('BukuModel')->updateDataBuku($_POST) > 0){
            Flasher::setMessage('Berhasil ','diupdate','success');
            header('location: ' .base_url .'/buku');
            exit;
        }else{
            Flasher::setMessage('Gagal ','diupdate','danger');
            header('location: ' .base_url .'/buku');
            exit;
        }
    }

    public function hapus($id_buku)
    {
        if($this->model('BukuModel')->deleteBuku($id_buku) > 0){
            Flasher::setMessage('Berhasil ','dihapus','success');
            header('location: ' .base_url .'/buku');
            exit;
        }else{
            Flasher::setMessage('Gagal ','dihapus','danger');
            header('location: ' .base_url .'/buku');
            exit;
        }
    }

    public function print()
    {
        $data['title'] = 'Laporan Data Buku';
        $data['buku'] = $this->model('BukuModel')->getAllBuku();
        $this->view('buku/print2',$data);
    }
}