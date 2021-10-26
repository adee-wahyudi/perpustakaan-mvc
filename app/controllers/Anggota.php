<?php
class Anggota extends Controller{
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
        $data['title'] = 'Anggota';
        $data['judul'] = 'Data Anggota';
        $data['anggota'] = $this->model('AnggotaModel')->getAllAnggota();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('anggota/index', $data);
        $this->view('templates/modals');
        $this->view('templates/footer');
    }

    public function detail($id_anggota)
    {
        $data['title'] = 'Anggota';
        $data['judul'] = 'Detail Anggota';
        $data['anggota'] = $this->model('AnggotaModel')->getAnggotaById($id_anggota);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('anggota/edit', $data);
        $this->view('templates/modals');
        $this->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = 'Anggota';
        $data['judul'] = 'Tambah Anggota';
        $data['anggota'] = $this->model('AnggotaModel')->getAnggotaId();
        $this->view('templates/header',$data);
        $this->view('templates/sidebar',$data);
        $this->view('anggota/create',$data);
        $this->view('templates/modals');
        $this->view('templates/footer');
    }

	public function simpanAnggota()
	{		
		if( $this->model('AnggotaModel')->tambahAnggota($_POST) > 0 ) {
			Flasher::setMessage('Berhasil ','ditambahkan','success');
			header('location: '. base_url . '/anggota');
			exit;			
		}else{
			Flasher::setMessage('Gagal ','ditambahkan','danger');
			header('location: '. base_url . '/anggota');
			exit;	
		}
        
	}

    public function updateAnggota()
    {
        if($this->model('AnggotaModel')->updateDataAnggota($_POST) > 0){
            Flasher::setMessage('Berhasil ','diupdate','success');
            header('location: ' .base_url .'/anggota');
            exit;
        }else{
            Flasher::setMessage('Gagal ','diupdate','danger');
            header('location: ' .base_url .'/anggota');
            exit;
        }
    }

    public function hapus($id_anggota)
    {
        if($this->model('AnggotaModel')->deleteAnggota($id_anggota) > 0){
            Flasher::setMessage('Berhasil ','dihapus','success');
            header('location: ' .base_url .'/anggota');
            exit;
        }else{
            Flasher::setMessage('Gagal ','dihapus','danger');
            header('location: ' .base_url .'/anggota');
            exit;
        }
    }

    public function cetak_kartu($id_anggota)
    {
        $data['anggota'] = $this->model('AnggotaModel')->getAnggotaById($id_anggota);
        $this->view('anggota/cetak_kartu', $data);
    }

    public function print()
    {
        $data['anggota'] = $this->model('AnggotaModel')->getAllAnggota();
        $this->view('anggota/print2', $data);
    }
}