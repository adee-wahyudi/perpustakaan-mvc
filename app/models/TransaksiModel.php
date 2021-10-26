<?php

class TransaksiModel {
	
	private $table = 'transaksi';
    private $view = 'transaksiperpus';
	private $db;

    public $denda = 0;
    public $tgl_realisasi = null;
    public $tgl_peminjaman;
    public $tgl_pengembalian;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllTransaksi()
	{
		// $this->db->query('SELECT * FROM ' .$this->table);
		$this->db->query('SELECT 
                            id_transaksi,
                            id_anggota,
                            nama_anggota,
                            id_buku,
                            judul_buku,
                            tgl_peminjaman,
                            tgl_pengembalian,
                            tgl_realisasi,
                            denda
                        FROM
                            transaksi
                        INNER JOIN
                            anggota USING (id_anggota)
                        INNER JOIN
                            buku USING (id_buku)
                        ORDER BY 
                            id_transaksi;');
		return $this->db->resultSet();
	}

	public function getTransaksiById($id_transaksi)
	{
		$this->db->query('SELECT * FROM ' .$this->view . ' WHERE id_transaksi=:id_transaksi');
		$this->db->bind('id_transaksi', $id_transaksi);
		return $this->db->single();
	}

    public function getByPeriode($tgl_awal, $tgl_akhir)
    {
        $this->db->query("SELECT * FROM transaksiperpus WHERE tgl_peminjaman BETWEEN '$tgl_awal' AND '$tgl_akhir'");
        return $this->db->resultSet();
    }

	public function getTransaksiId()
	{
		$this->db->query('SELECT * FROM ' .$this->table .' ORDER BY id_transaksi DESC');
		return $this->db->single();
	}

	public function tambahTransaksi($data)
	{
		$query = "INSERT INTO transaksi (id_transaksi,id_anggota,id_buku,tgl_peminjaman,tgl_pengembalian, tgl_realisasi, denda) 
					VALUES(:id_transaksi, :id_anggota, :id_buku, :tgl_peminjaman, :tgl_pengembalian, :tgl_realisasi, :denda)";
		$this->db->query($query);
		$this->db->bind('id_transaksi',$data['id_transaksi']);
		$this->db->bind('id_anggota',$data['id_anggota']);
		$this->db->bind('id_buku',$data['id_buku']);
		$this->db->bind('tgl_peminjaman',$data['tgl_peminjaman']);
		$this->db->bind('tgl_pengembalian',$data['tgl_pengembalian']);
		$this->db->bind('tgl_realisasi',$this->tgl_realisasi);
		$this->db->bind('denda',$this->denda);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateRealisasi($data)
	{
        $this->tgl_pengembalian = $data['tgl_pengembalian'];
		$query = "UPDATE transaksi SET tgl_realisasi=now(), denda=:denda WHERE id_transaksi=:id_transaksi";
		$this->db->query($query);;
		$this->db->bind('id_transaksi',$data['id_transaksi']);
		$this->db->bind('denda',$this->_hitungDenda());
		$this->db->execute();

		return $this->db->rowCount();
	}

    private function _hitungDenda()
    {
        $tgl_kembali = date_create($this->tgl_pengembalian);
		$tgl_realisasi = date_create(date('Y-m-d'));
		$terlambat = date_diff($tgl_kembali, $tgl_realisasi);
		$hari = $terlambat->format("%a");
        
        return $denda = $hari * 2000;
    }
}