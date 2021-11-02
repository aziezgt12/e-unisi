<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Description of site
 *
 * @author https://roytuts.com
 */
class M_Alumni extends CI_Model {

    public function getAll()
    {
        $this->db->select('a.*, tmf.fakultasName, tmp.prodiName, b.priode, b.tahun');
        $this->db->join('tbl_mst_prodi tmp', 'tmp.prodiID = a.prodi');
        $this->db->join('tbl_mst_fakultas tmf', 'tmf.fakultasID = tmp.fakultasID');
        $this->db->join('tbl_jadwal_wisuda b', 'b.headerID = a.headerID');
        $this->db->where('a.alumni', 0);
        return $this->db->get('tbl_form_c1 a')->result();
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