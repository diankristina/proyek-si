<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_jadwal extends CI_Model {
	
	public function getJadwal()
	{
		$query=Array();
		$sqlJadwal = "select jadwal.sesi, jadwal.hari, dosen.nama_dosen, matkul.kode_mk, matkul.nama_matkul, matkul.sks, kelas.nama_kelas, ruang.nama_ruang from jadwal, dosen, matkul, kelas, ruang";
		$query = $this->db->query($sqlJadwal)->result_array();
		return $query;
	}
}
