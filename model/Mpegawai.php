<?php
/**
 * 
 */
class MPegawai
{
	private $connection;
    public function __construct()
    {
        global $dbh;
        $this->connection = $dbh;
    }

	public function getDataPegawai(){
		// query
		$query = 'select pg.*, dv.nama as nama_divisi from dbpegawai.pegawai as pg join dbpegawai.divisi as dv on pg.iddivisi = dv.id';
		// prepare statement
		$get = $this->connection->prepare($query);
		// execute
		$get->execute();
		$result = $get->fetchAll();
		return $result;
	}

	public function detailPegawai($id){
		// query
		$query = 'select pegawai.*, divisi.nama as nama_divisi from dbpegawai.pegawai as pegawai join dbpegawai.divisi as divisi on pegawai.iddivisi = divisi.id where pegawai.id = ' . $id;
		$get = $this->connection->prepare($query);
		// execute
		$get->execute();
		$result = $get->fetch();
		
		return $result;
	}

	public function getDivisi(){
		// query
		$query = 'select * from dbpegawai.divisi';
		$get = $this->connection->prepare($query);
		$get->execute();
		$result = $get->fetchAll();
		return $result;
	}

	public function editPegawai($data){
		// query
		$query = 'update dbpegawai.pegawai set nip = '.$data[0].', nama = "'.$data[1].'", email = "'.$data[2].'", agama = "'.$data[3].'", iddivisi = '.$data[4].', foto = "'.$data[5].'" where id = ' .$data[6];
		
		$doChange = $this->connection->prepare($query);
		$doChange->execute();

	}

	public function deletePegawai($id){
		// query 
		$query = "delete from dbpegawai.pegawai WHERE id = ?";

		$doAdd = $this->connection->prepare($query);
		$doAdd->execute($id);
	}

	public function insertPegawai($data){
		// query 
		$query = 'insert into dbpegawai.pegawai (nip,nama,email,agama,iddivisi,foto) values (?,?,?,?,?,?)';

		$doAdd = $this->connection->prepare($query);
		$doAdd->execute($data);
	}
}