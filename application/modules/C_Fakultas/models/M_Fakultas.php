<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Description of site
 *
 * @author https://roytuts.com
 */
class M_Fakultas extends CI_Model {
    public $table = 'tbl_mst_fakultas';
    public $id = 'fakultasID';

    public function getAll()
    {
        return $this->db->get_where($this->table, array('active' => 1 ))->result();
    }

    function save($data){

        $this->db->insert($this->table, $data);

    }
    
    function update($data, $id){
        $this->db->where('fakultasID', $id);
        $this->db->update($this->table, $data);
    }

    function delete($data, $id){
        $this->db->where('fakultasID', $id);
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