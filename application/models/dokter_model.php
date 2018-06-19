 
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter_model extends CI_Model {

public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}	

public function getDataDokter()
{
	$query = $this->db->query("SELECT * FROM dokter");
		return $query->result_array();
}

public function lihatJadwal($id)
{
	$query = $this->db->query("SELECT * FROM jadwal where fk_dokter_jadwal = $id");
	return $query->result_array();
}

public function tambahPengobatan($id)
{
	$data = array(
    		'nama_pasien' => $this->input->post('nama_pasien'),
    		'umur' => $this->input->post('umur'),
    		'ttl' => $this->input->post('ttl'),
    		'keluhan' => $this->input->post('keluhan'),
    		'keputusan' => $this->input->post('keputusan'),
    		);
    	$this->db->insert('pengobatan', $data);
}

public function updateProfil($id)
{
	$data = array(
    		'nama_dokter' => $this->input->post('nama_dokter'),
    		'spesialisasi' => $this->input->post('spesialisasi'),
    		'alamat' => $this->input->post('alamat'),
    		'no_telp' => $this->input->post('no_telp'),
    		);

    	$this->db->where('id_dokter', $id);
    	$this->db->update('dokter', $data);
}

public function updatePengobatan($id)
{
	$data = array(
    		'nama_pasien' => $this->input->post('nama_pasien'),
    		'umur' => $this->input->post('umur'),
    		'ttl' => $this->input->post('ttl'),
    		'keluhan' => $this->input->post('keluhan'),
    		'keputusan' => $this->input->post('keputusan'),
    		);
		$this->db->where('fk_dokter', $id);
    	$this->db->update('pengobatan', $data);
}

}

/* End of file dokter_model.php */
/* Location: ./application/models/dokter_model.php */
 ?>