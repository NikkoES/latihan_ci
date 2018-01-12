<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
   
   public function __construct(){
       parent::__construct();
       $this->load->model('m_dashboard','dash');
       $login = $this->session->userdata('login');
       if ($login=='') {
          redirect(base_url()."index.php/login");
       }
   }

   public function index()
   {
      
   	 $data['nama'] = "UIN Bandung";
   	 $data['alamat'] ="Jl. AH. Nasution no 25";
       $data['mhs'] = $this->dash->tampil_data();
   	 $this->load->view('dashboard',$data);
   }

   public function profil($no=NULL,$no2=NULL)
   {
   	  echo "Ini adalah halaman profil no.".$no." no2 . ".$no2;
   }

   public function input()
   {
    $nim  = $this->input->post('nim'); 
    $nama = $this->input->post('nama');
    $alamat = $this->input->post('alamat');
    $data = array('nim' => $nim,
                    'nama' => $nama,
                    'alamat' => $alamat );
    $this->dash->input($data);
    redirect(base_url());
   }

   public function edit($nim=NULL)
   {
     $this->db->where('id',$nim);
     $data['mhs'] = $this->db->get('mahasiswa')->result();
     $this->load->view('edit',$data);
   }

   public function aksi_edit()
   {
    $nim  = $this->input->post('nim'); 
    $nama = $this->input->post('nama');
    $alamat = $this->input->post('alamat');
    $id    = $this->input->post('id'); 
    $data = array('nim' => $nim,
                  'nama' => $nama,
                  'alamat' => $alamat );
    $this->dash->update_data($data,$id);
    redirect(base_url());
   }

   public function hapus($id)
   {
     $this->db->where('id',$id);
     $this->db->delete('mahasiswa');
     redirect(base_url());
   }
}