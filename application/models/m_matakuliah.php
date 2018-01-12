<?php
/**
* 
*/
class M_matakuliah extends CI_Model
{
	
	public function tampil_data()
	{
		$data = $this->db->get('matakuliah');
		return $data;
	}

	public function input($data)
	{
		$this->db->insert('matakuliah',$data);
	}

	public function update_data($data,$kode)
	{
		$this->db->where('kode',$kode);
		$this->db->update('matakuliah',$data);
	}
	
}
?>