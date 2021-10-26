<?php
class Transaksi extends Controller{
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
        $data['title'] = 'Transaksi';
        // $data['judul'] = 'Data Transaksi';
        $data['judul'] = 'Transaksi Peminjaman';
        $data['transaksi'] = $this->model('TransaksiModel')->getAllTransaksi();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('transaksi/index', $data);
        $this->view('templates/modals');
        $this->view('templates/footer');
    }

    public function addTransaksi()
    {
        $data['title'] = 'Transaksi';
        $data['judul'] = 'Tambah Transaksi';
        $data['transaksi'] = $this->model('TransaksiModel')->getTransaksiId();
        $data['anggota'] = $this->model('AnggotaModel')->getAllAnggota();
        $data['buku'] = $this->model('BukuModel')->getAllBuku();
        $this->view('templates/header',$data);
        $this->view('templates/sidebar',$data);
        $this->view('transaksi/create',$data);
        $this->view('templates/modals');
        $this->view('templates/footer');
    }

	public function simpanTransaksi()
	{		
		if( $this->model('TransaksiModel')->tambahTransaksi($_POST) > 0 ) {
			Flasher::setMessage('Berhasil ','ditambahkan','success');
			header('location: '. base_url . '/transaksi');
			exit;			
		}else{
			Flasher::setMessage('Gagal ','ditambahkan','danger');
			header('location: '. base_url . '/transaksi');
			exit;	
		}
	}

    public function updateTransaksi()
    {
        if($this->model('TransaksiModel')->updateRealisasi($_POST) > 0){
            Flasher::setMessage('Berhasil ','diupdate','success');
            header('location: ' .base_url .'/transaksi');
            exit;
        }else{
            Flasher::setMessage('Gagal ','diupdate','danger');
            header('location: ' .base_url .'/transaksi');
            exit;
        }
    }

    public function cetak_nota($id_transaksi)
    {
        $data['transaksi'] = $this->model('TransaksiModel')->getTransaksiById($id_transaksi);
        $this->view('transaksi/cetak_nota', $data);
    }

    public function laporan()
    {
        $data['title'] = 'Laporan';
        $data['judul'] = 'Laporan Transaksi';
        $this->view('templates/header',$data);
        $this->view('templates/sidebar',$data);
        $this->view('transaksi/laporan', $data);
        $this->view('templates/footer');
    }

    public function printLaporan()
    {
            $tgl_awal = $_POST['tgl_awal'];
            $tgl_akhir = $_POST['tgl_akhir'];
            $data['transaksi'] = $this->model('TransaksiModel')->getByPeriode($tgl_awal, $tgl_akhir);
            $this->view('transaksi/print', $data);
    }
}