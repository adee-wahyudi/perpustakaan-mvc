<?php

class AnggotaModel {
	
	private $table = 'anggota';
	private $db;

	public $id_anggota;
	public $old_foto;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllAnggota()
	{
		$this->db->query('SELECT * FROM ' .$this->table);
		return $this->db->resultSet();
	}

	public function getAnggotaById($id_anggota)
	{
		$this->db->query('SELECT * FROM ' .$this->table .' WHERE id_anggota=:id_anggota');
		$this->db->bind('id_anggota', $id_anggota);
		return $this->db->single();
	}

	public function getAnggotaId()
	{
		$this->db->query('SELECT * FROM ' .$this->table .' ORDER BY id_anggota DESC');
		return $this->db->single();
	}

	public function tambahAnggota($data)
	{
		$this->id_anggota = $data['id_anggota'];
		$query = "INSERT INTO anggota (id_anggota,nama_anggota,jenis_kelamin,tempat_lahir,tgl_lahir,alamat,telp,foto) 
					VALUES(:id_anggota, :nama_anggota, :jenis_kelamin, :tempat_lahir, :tgl_lahir, :alamat, :telp, :foto)";
		$this->db->query($query);
		$this->db->bind('id_anggota',$data['id_anggota']);
		$this->db->bind('nama_anggota',$data['nama_anggota']);
		$this->db->bind('jenis_kelamin',$data['jenis_kelamin']);
		$this->db->bind('tempat_lahir',$data['tempat_lahir']);
		$this->db->bind('tgl_lahir',$data['tgl_lahir']);
		$this->db->bind('alamat',$data['alamat']);
		$this->db->bind('telp',$data['telp']);
		$this->db->bind('foto',$this->_uploadImage());
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateDataAnggota($data)
	{
		$this->id_anggota = $data['id_anggota'];
		$this->old_foto = $data['old_foto'];
        $query = "UPDATE anggota SET nama_anggota=:nama_anggota, jenis_kelamin=:jenis_kelamin, tempat_lahir=:tempat_lahir,
					tgl_lahir=:tgl_lahir, alamat=:alamat, telp=:telp, foto=:foto WHERE id_anggota=:id_anggota";
		$this->db->query($query);
		$this->db->bind('id_anggota',$data['id_anggota']);
		$this->db->bind('nama_anggota',$data['nama_anggota']);
		$this->db->bind('jenis_kelamin',$data['jenis_kelamin']);
		$this->db->bind('tempat_lahir',$data['tempat_lahir']);
		$this->db->bind('tgl_lahir',$data['tgl_lahir']);
		$this->db->bind('alamat',$data['alamat']);
		$this->db->bind('telp',$data['telp']);
		$this->db->bind('foto',$this->_updateImage());
		$this->db->execute();

		return $this->db->rowCount();
	}
	
	public function deleteAnggota($id_anggota)
	{
		$this->_deleteImage($id_anggota);
		$this->db->query('DELETE FROM ' .$this->table .' WHERE id_anggota=:id_anggota');
		$this->db->bind('id_anggota',$id_anggota);
		$this->db->execute();
		
		return $this->db->rowCount();
	}

	private function _uploadImage()
	{
		$extension = array('jpg','png','jpeg');
		$file_name = $_FILES['foto']['name'];
		$file_tmp = $_FILES['foto']['tmp_name'];
		$file = explode('.',$file_name);
		$file_extension = strtolower(end($file));
		
		if(!empty($file_name)){
			if(in_array($file_extension, $extension) === true){
				$newFileName = $this->id_anggota ."." .$file_extension;
				move_uploaded_file($file_tmp, 'assets/dist/img/upload/Foto-Anggota/'.$newFileName);
				return $newFileName;
			}else{
				return "default.jpg";
			}
		}else{
			return "default.jpg";
		}
	}
	
	private function _updateImage()
	{
		$extension = array('jpg','png','jpeg');
		$file_name = $_FILES['foto']['name'];
		$file_tmp = $_FILES['foto']['tmp_name'];
		$file = explode('.',$file_name);
		$file_extension = strtolower(end($file));

		if(!empty($file_name)){
			if(in_array($file_extension, $extension) === true){
				$newFileName = $this->id_anggota ."." .$file_extension;
				unlink("assets/dist/img/upload/Foto-Anggota/" .$newFileName);
				move_uploaded_file($file_tmp, 'assets/dist/img/upload/Foto-Anggota/'.$newFileName);
				return $newFileName;
			}else{
				return $this->old_foto;
			}
		}else{
			return $this->old_foto;
		}
	}

	private function _deleteImage($id_anggota)
	{
		$data['anggota'] = $this->getAnggotaById($id_anggota);
		if ($data['anggota']['foto'] != "default.jpg") {
			return unlink("assets/dist/img/upload/Foto-Anggota/" .$data['anggota']['foto']);
		}
	}
}