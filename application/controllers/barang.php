<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barang extends CI_Controller 
{
	public function __construct()
   {
		parent::__construct();
		
		$this->loginchecker->check();
   }

	public function index()
	{		
		$this->load->model('transaksi');

		$data['barang'] = $this->transaksi->daftar();

		$this->load->view('daftar_barang', $data);
	}

	public function tambah() 
	{	
		if($this->input->post('simpan'))
		{
			$data['nama_pengguna'] = $this->input->post('nama');
			$data['no_hp'] = $this->input->post('no_hp');
			$data['keterangan'] = $this->input->post('keterangan');
			$data['no_loker'] = $this->input->post('no_loker');

			$this->load->model('transaksi');

			if($this->transaksi->simpan($data))
				$this->goToBarang();
			else
				echo "FAIL TO INSERT DATA";
		}
		else
		{
			$this->load->view('form_penitipan');
		}
	}
	
	public function ambil($id)
	{	
		$this->load->model('transaksi');

		$this->transaksi->delete($id);
				
		$this->goToBarang();
	}

	private function goToBarang()
	{
		redirect('barang');
	}
}