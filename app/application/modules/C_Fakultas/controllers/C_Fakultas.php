<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Description of site
 *
 * @author https://roytuts.com
 */
class C_Fakultas extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('C_Fakultas/M_Fakultas','fakultas');
    // var_dump($_SESSION);      
        if (!$this->session->userdata('status'))
        {
            // redirect them to the login page
            redirect('auth', 'refresh');
        }

    }

    function index() {


        $data['title'] = 'SIA :: Master Fakultas';

        $data['_mst_fakultas'] = $this->fakultas->getAll();

        $this->load->view('../../template/header', $data);
        $this->load->view('index', $data);
        $this->load->view('../../template/footer');
    }

    function store(){

        $data = array(
            'fakultasName'    => $this->input->post('fakultasName'),
            'fakultasCode'    => $this->input->post('fakultasCode'),
            'createdAt'       => $this->session->userdata('identity'),
            'CreatedBy'       => date('Y-m-d H:i:s'),
            'active'          => 1,
        );
        $this->fakultas->save($data);

        echo '<script language="javascript">';
        echo 'alert("successfully Insert")';
        echo '</script>';
     
         echo ("<script>location.href='".base_url("C_Fakultas")."'</script>");
    }

    function update(){
        $id = $this->input->post('fid');
        $data = array(
            'fakultasName'    => $this->input->post('fakultasName'),
            'fakultasCode'    => $this->input->post('fakultasCode'),
            'updatedBy'    => $this->session->userdata('identity'),
            'updatedAt'    => date('Y-m-d H:i:s')
        );
        $this->fakultas->update($data, $id);

        echo '<script language="javascript">';
        echo 'alert("successfully Update")';
        echo '</script>';
     
         echo ("<script>location.href='".base_url("C_Fakultas")."'</script>");
    }
    function delete($id){
        $data = array(
            'active'    => 0,
        );

        $this->fakultas->delete($data, $id);
        
        echo '<script language="javascript">';
        echo 'alert("successfully Delete")';
        echo '</script>';
     
         echo ("<script>location.href='".base_url("C_Fakultas")."'</script>");

        
        // redirect(base_url('C_Fakultas'));        
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