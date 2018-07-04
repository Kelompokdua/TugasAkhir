<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model {
     public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function getAlluser()
    {
        $query = $this->db->get('login');
        if($query->num_rows()>0){
            return $query->result();
        }
    }

     public function save($data)
    {
      $this->db->insert('login', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_login', $id);
        $this->db->delete('login');
    }

    public function update($data)
    {
        $this->db->where('id_login', $data['id_login']);
        $this->db->update('login', $data);
    }
}
        
