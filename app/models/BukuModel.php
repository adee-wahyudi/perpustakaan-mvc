<?php

class BukuModel {
	
	private $table = 'buku';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllBuku()
	{
		$this->db->query('SELECT * FROM ' .$this->table);
		return $this->db->resultSet();
	}

	public function getBukuById($id_buku)
	{
		$this->db->query('SELECT * FROM ' .$this->table . ' WHERE id_buku=:id_buku');
		$this->db->bind('id_buku', $id_buku);
		return $this->db->single();
	}

	public function getBukuId()
	{
		$this->db->query('SELECT * FROM ' .$this->table .' ORDER BY id_buku DESC');
		return $this->db->single();
	}

	public function tambahBuku($data)
	{
		$query = "INSERT INTO buku (id_buku,judul_buku,penerbit,penulis,tahun) 
					VALUES(:id_buku, :judul_buku, :penerbit, :penulis, :tahun)";
		$this->db->query($query);
		$this->db->bind('id_buku',$data['id_buku']);
		$this->db->bind('judul_buku',$data['judul_buku']);
		$this->db->bind('penerbit',$data['penerbit']);
		$this->db->bind('penulis',$data['penulis']);
		$this->db->bind('tahun',$data['tahun']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateDataBuku($data)
	{
		$query = "UPDATE buku SET judul_buku=:judul_buku, penerbit=:penerbit, penulis=:penulis,
				tahun=:tahun WHERE id_buku=:id_buku";
		$this->db->query($query);
		$this->db->bind('id_buku',$data['id_buku']);
		$this->db->bind('judul_buku',$data['judul_buku']);
		$this->db->bind('penerbit',$data['penerbit']);
		$this->db->bind('penulis',$data['penulis']);
		$this->db->bind('tahun',$data['tahun']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteBuku($id_buku)
	{
		$this->db->query('DELETE FROM ' .$this->table .' WHERE id_buku=:id_buku');
		$this->db->bind('id_buku',$id_buku);
		$this->db->execute();

		return $this->db->rowCount();
	}
}