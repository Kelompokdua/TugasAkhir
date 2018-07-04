<?php

class Jadwal_model extends CI_Model
{
	public function spesific($param)
	{
		$data = $this->db->get_where('jadwal',$param);
		if($data->num_rows() > 0){
			return $data->result();
		}else{
			$data = array('none');
			return $data;
		}
	}

	public function getAlljadwal()
    {
        $query = $this->db->get('jadwal');
        if($query->num_rows()>0){
            return $query->result();
        }
    }
}