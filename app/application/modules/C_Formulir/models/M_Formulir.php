<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Description of site
 *
 * @author https://roytuts.com
 */
class M_Formulir extends CI_Model {
    public $table = 'tbl_form_c1';
    public $id = 'c1ID';

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

    function getAllCalonWisuda($headerID){
        $this->db->select('a.*, tmf.fakultasName, tmp.prodiName, b.priode, b.tahun');
        $this->db->join('tbl_mst_prodi tmp', 'tmp.prodiID = a.prodi');
        $this->db->join('tbl_mst_fakultas tmf', 'tmf.fakultasID = tmp.fakultasID');
        $this->db->join('tbl_jadwal_wisuda b', 'b.headerID = a.headerID');
        $this->db->where('a.headerID', $headerID);
        return $this->db->get('tbl_form_c1 a')->result();
    }

    function getCalon($nim){
        $this->db->select('a.*, tmf.fakultasName, tmp.prodiName');
        $this->db->join('tbl_mst_prodi tmp', 'tmp.prodiID = a.prodi');
        $this->db->join('tbl_mst_fakultas tmf', 'tmf.fakultasID = tmp.fakultasID');
        $this->db->where('nim', $nim);
        return $this->db->get('tbl_form_c1 a')->row();
    }

    function getStatusBerkas($nim)
    {
       return $this->db->get_where('tbl_berkas_wisuda', array('nim' => $nim))->row();

    }

    function insertBerkas($value, $where)
    {
            $query = $this->db->insert('tbl_berkas_wisuda', $value);
    }

    function updateBerkas($value, $where)
    {
        $this->db->where('nim', $where);
        $query = $this->db->update('tbl_berkas_wisuda', $value);
    }


    function storeKtp($data, $ket)
    {
        if($ket == 'insert'){
            $insert_data['nim'] = $data['nim'];
            $insert_data['ktp'] = $data['berkas'];
            $query = $this->db->insert('tbl_berkas_wisuda', $insert_data);
        }else{
            $insert_data['nim'] = $data['nim'];
            $insert_data['ktp'] = $data['berkas'];
            $query = $this->db->update('tbl_berkas_wisuda', $insert_data, $data['nim']);
        }
    }

    function deleteBerkas($data, $id){
        $this->db->where('nim', $id);
        $this->db->update('tbl_berkas_wisuda', $data);
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