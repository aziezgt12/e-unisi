<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Description of site
 *
 * @author https://roytuts.com
 */
class C_Jadwal extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('C_Jadwal/M_Jadwal','jadwal');
      
        if (!$this->session->userdata('status'))
        {
            // redirect them to the login page
            redirect('auth/login', 'refresh');
        }

    }

    function index() {


        $data['title'] = 'SIA :: Master Fakultas';

        $data['_jadwal'] = $this->jadwal->getAll();
        $this->load->view('../../template/header', $data);
        $this->load->view('index', $data);  
        $this->load->view('../../template/footer');
    }

    function store(){
        // var_dump($this->input->post());

        $data = array(
            'priode'    => $this->input->post('priode'),
            'kouta'    => $this->input->post('kouta'),
            'jadwal'    => $this->input->post('jadwal'),
            'tahun'    => $this->input->post('tahun'),
            'active'          => 1,
        );
        $this->jadwal->save($data);

        echo '<script language="javascript">';
        echo 'alert("successfully Insert")';
        echo '</script>';
     
         echo ("<script>location.href='".base_url("C_Jadwal")."'</script>");
    }

    function settingAction(){

        $id = $this->input->post('headerID');

        $row = $this->jadwal->getById($id);
        $jadwal = $this->input->post('jadwal');
        $kouta = $this->input->post('kouta');

        if ($jadwal == NULL) {
            $jadwal = $row->jadwal;
        }else{
            $jadwal = $jadwal;
        }
        if ($kouta == NULL) {
            $kouta = $row->kouta;
        }else{
            $kouta = $kouta;
        }

        if($this->input->post('status') == 3){
            $data = array(
                'alumni' => 1
            );
            $this->db->where('headerID', $id);
            $this->db->update('tbl_form_c1', $data);
        }


        $data = array(
            'kouta'    => $kouta,
            'jadwal'   => $jadwal,
            'status'    => $this->input->post('status'),
        );



        $this->jadwal->update($data, $id);

            echo '<script language="javascript">';
            echo 'alert("successfully Update")';
            echo '</script>';
         
             echo ("<script>location.href='".base_url("C_Jadwal")."'</script>");

    }

    // function getFormEdit()
    // {
    //     $data['_getPriode'] = $this->priode->getById($this->input->post('priodeID'));
    //     $this->load->view('form_edit', $data);
    // }

    // function update(){
    //     $id = $this->input->post('pid');
    //     $data = array(
    //         'priode'    => $this->input->post('priode'),
    //         'tahun'     => $this->input->post('tahun'),
    //         'kouta'     => $this->input->post('kouta'),
    //         'updatedBy' => $this->session->userdata('identity'),
    //         'updatedAt' => date('Y-m-d H:i:s'),
    //     );
    //     $this->priode->update($data, $id);

    //     echo '<script language="javascript">';
    //     echo 'alert("successfully Update")';
    //     echo '</script>';
     
    //      echo ("<script>location.href='".base_url("C_Priode")."'</script>");
    // }
    // function delete($id){
    //     $data = array(
    //         'active'    => 0,
    //     );

    //     $this->priode->delete($data, $id);
        
    //     echo '<script language="javascript">';
    //     echo 'alert("successfully Delete")';
    //     echo '</script>';
     
    //      echo ("<script>location.href='".base_url("C_Priode")."'</script>");

        
    //     // redirect(base_url('C_Fakultas'));        
    // }

}
