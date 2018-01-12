<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MataKuliah extends CI_Controller {
   
   public function __construct(){
       parent::__construct();
       $this->load->model('m_matakuliah','dash');
       $login = $this->session->userdata('login');
       if ($login=='') {
          redirect(base_url()."index.php/login");
       }
   }

   public function index()
   {
      
   	 $data['nama'] = "UIN Bandung";
   	 $data['alamat'] ="Jl. AH. Nasution no 25";
     $data['mk'] = $this->dash->tampil_data();
   	 $this->load->view('matakuliah',$data);
   }

   public function input()
   {
    $kode  = $this->input->post('kode');
    $nama_mk = $this->input->post('nama_mk');
    $semester = $this->input->post('semester');
    $sks = $this->input->post('sks');
    $nilai_min = $this->input->post('nilai_min');
    $data = array('kode' => $kode,
                    'nama_mk' => $nama_mk,
                    'semester' => $semester,
                    'sks' => $sks,
                    'nilai_minimal_lulus' => $nilai_min );
    $this->dash->input($data);
    redirect(base_url()."index.php/matakuliah/");
   }

   public function edit($kode=NULL)
   {
     $this->db->where('kode',$kode);
     $data['mk'] = $this->db->get('matakuliah')->result();
     $this->load->view('edit_mk',$data);
   }

   public function aksi_edit()
   {
    $kode  = $this->input->post('kode');
    $nama_mk = $this->input->post('nama_mk');
    $semester = $this->input->post('semester');
    $sks = $this->input->post('sks');
    $nilai_min = $this->input->post('nilai_min');
    $data = array('kode' => $kode,
                    'nama_mk' => $nama_mk,
                    'semester' => $semester,
                    'sks' => $sks,
                    'nilai_minimal_lulus' => $nilai_min );
    $this->dash->update_data($data,$kode);
    redirect(base_url()."index.php/matakuliah/");
   }

   public function hapus($kode)
   {
     $this->db->where('kode',$kode);
     $this->db->delete('matakuliah');
     redirect(base_url()."index.php/matakuliah/");
   }
}