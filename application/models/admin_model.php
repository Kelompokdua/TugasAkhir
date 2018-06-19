<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function dataUser()
	{
		$query = $this->db->query("SELECT * FROM user");
		return $query->result_array();
	}

	public function daftarUser()
	{
		$data = array(
    		'username' => $this->input->post('username'),
    		'password' => $this->input->post('password'),
    		'level' => $this->input->post('level'),
    		);
    	$this->db->insert('user', $data);
	}

	public function updateUser($id)
	{
		$data = array(
    		'username' => $this->input->post('username'),
    		'password' => $this->input->post('password'),
    		'level' => $this->input->post('level'),
    		);
		$this->db->where('id', $id);
    	$this->db->update('user', $data);
	}

	public function deleteUser($id)
	{
		$this->db->where('id', $id);
    	$this->db->delete('user');
	}
}

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */
?>