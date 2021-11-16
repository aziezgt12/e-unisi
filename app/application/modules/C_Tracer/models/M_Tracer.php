<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Description of site
 *
 * @author https://roytuts.com
 */
class M_Tracer extends CI_Model {

    // public function getAll()
    // {
    //     $this->db->select('z.*, a.*, tmf.fakultasName, tmp.prodiName, b.priode, b.tahun');
    //     $this->db->from('tbl_form_c2 z');
    //     $this->db->join('tbl_form_c1 a', 'z.nim = a.nim');
    //     $this->db->join('tbl_mst_prodi tmp', 'tmp.prodiID = a.prodi');
    //     $this->db->join('tbl_mst_fakultas tmf', 'tmf.fakultasID = tmp.fakultasID');
    //     $this->db->join('tbl_jadwal_wisuda b', 'b.headerID = a.headerID');
    //     $this->db->where('a.active', 1);
    //     $this->db->where('a.alumni', 1);
    //     return $this->db->get()->result();
    // }
    public function getAll()
    {
        return $this->db->get('tbl_soal_quisioner')->result_array();
    }
    function getDetSoal($id){
        return $this->db->get_where('tbl_soal_detail', array('id_soal' => $id))->result_array();
    }

    // public function gtAlumniByNim($nim)
    // {
    //     $this->db->select('z.*, a.*, tmf.fakultasName, tmp.prodiName, b.priode, b.tahun');
    //     $this->db->from('tbl_form_c2 z');
    //     $this->db->join('tbl_form_c1 a', 'z.nim = a.nim');
    //     $this->db->join('tbl_mst_prodi tmp', 'tmp.prodiID = a.prodi');
    //     $this->db->join('tbl_mst_fakultas tmf', 'tmf.fakultasID = tmp.fakultasID');
    //     $this->db->join('tbl_jadwal_wisuda b', 'b.headerID = a.headerID');
    //     $this->db->where('a.active', 1);
    //     return $this->db->get()->result();
    // }

    public function gtAlumniByNim($nim)
    {
        $this->db->select('z.*, a.*, tmf.fakultasName, tmp.prodiName, b.priode, b.tahun');
        $this->db->from('tbl_form_c2 z');
        $this->db->join('tbl_form_c1 a', 'z.nim = a.nim');
        $this->db->join('tbl_mst_prodi tmp', 'tmp.prodiID = a.prodi');
        $this->db->join('tbl_mst_fakultas tmf', 'tmf.fakultasID = tmp.fakultasID');
        $this->db->join('tbl_jadwal_wisuda b', 'b.headerID = a.headerID');
        $this->db->where('a.active', 1);
        $this->db->where('a.alumni', 1);
        $this->db->where('a.nim', $nim);
        return $this->db->get()->row();
    }

    function insert_tracer($data){
        $this->db->insert('tbl_jawaban_quisioner', $data);
    }
    function jawaban($id_soal, $nim)
    {
        return $this->db->get_where('tbl_jawaban_quisioner', array('id_soal'=>$id_soal, 'nim'=>$nim))->result_array();
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