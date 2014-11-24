<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transaksi extends CI_Model
{
	public function simpan($data)
	{
		if($this->db->insert('transaksi',$data))
			return TRUE;
		else
			return FALSE;
	}

	public function daftar()
	{
		$query = $this->db->get_where('transaksi', array('status_barang' => 0));

		if($query->num_rows() >= 0)
		{
			return $query->result_array();
		}
		//TODO : FIX DA SHIT
		else
			return "DATABASE KOSONG";
	}

	public function delete($id)
	{
		//$this->db->delete('transaksi', array('id_transaksi' => $id));
		$data = array(
               'status_barang' => 1
            );
		$this->db->where('id_transaksi', $id);
		$this->db->update('transaksi', $data); 
	}
}