<?php
/**
* 
*/
class M_dashboard extends CI_Model
{
	
	public function tampil_data()
	{
		$data = $this->db->get('mahasiswa');
		return $data;
	}

	public function input($data)
	{
		$this->db->insert('mahasiswa',$data);
	}

	public function update_data($data,$id)
	{
	$this->db->where('id',$id);
	$this->db->update('mahasiswa',$data);
	}
	
}
?>