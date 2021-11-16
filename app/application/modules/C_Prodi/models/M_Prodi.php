<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Description of site
 *
 * @author https://roytuts.com
 */
class M_Prodi extends CI_Model {
    public $table = 'tbl_mst_prodi';
    public $id = 'prodiID';

    public function getAll()
    {
        $this->db->select($this->table.'.*, tbl_mst_fakultas.fakultasName');
        $this->db->join('tbl_mst_fakultas', 'tbl_mst_fakultas.fakultasID = '.$this->table.'.fakultasID');
        $this->db->where($this->table.'.active', 1);
        return $this->db->get($this->table)->result();
    }

    function getById($id)
    {
        $this->db->select($this->table.'.*, tbl_mst_fakultas.fakultasName');
        $this->db->join('tbl_mst_fakultas', 'tbl_mst_fakultas.fakultasID = '.$this->table.'.fakultasID');
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    function save($data){

        $this->db->insert($this->table, $data);

    }
    
    function update($data, $id){
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    function delete($data, $id){
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }


    // function save(){


    //     $nama        = $this->input->post('nama');
    //     $spesialis        = $this->input->post('spesialis');
    //     $hari     = $this->input->post('hari');
    //     $mulai   = $this->input->post('mulai');
    //     $selesai      = $this->input->post('selesai');

    //     $data = array(
    //         'nama_dokter'      => $nama,
    //         'hari_dinas'    => $hari,
    //         'jam_mulai_dinas' => $mulai,
    //         'sampai_jam'       => $selesai,
    //         'spesialis'     => $spesialis,
    //     );
    //     $this->dokter->save($data);


    //     redirect(base_url('index.php/C_Dokter'));
        
    // }
    // function delete($id){
        
    //     $this->dokter->delete($id);

    //     redirect(base_url('index.php/C_Dokter'));

    // }

}

/* End of file Site.php */
/* Location: ./application/modules/site/controllers/site.php */