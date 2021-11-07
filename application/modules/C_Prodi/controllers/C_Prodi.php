<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Description of site
 *
 * @author https://roytuts.com
 */
class C_Prodi extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('C_Fakultas/M_Fakultas','fakultas');
        $this->load->model('C_Prodi/M_Prodi','prodi');
      
        if (!$this->ion_auth->logged_in())
        {
            // redirect them to the login page
            redirect('auth/login', 'refresh');
        }

    }

    function index() {


        $data['title'] = 'SIA :: Master Fakultas';

        $data['_mst_fakultas'] = $this->fakultas->getAll();
        $data['_mst_prodi'] = $this->prodi->getAll();

        $this->load->view('../../template/header', $data);
        $this->load->view('index', $data);
        $this->load->view('../../template/footer');
    }

    function store(){
        // var_dump($this->input->post());

        $data = array(
            'fakultasID'    => $this->input->post('fakultas'),
            'prodiName'    => $this->input->post('prodi'),
            'prodiKode'    => $this->input->post('prodiKode'),
            'createdAt'       => $this->session->userdata('identity'),
            'createdBy'       => date('Y-m-d H:i:s'),
            'active'          => 1,
        );
        $this->prodi->save($data);

        echo '<script language="javascript">';
        echo 'alert("successfully Insert")';
        echo '</script>';
     
         echo ("<script>location.href='".base_url("C_Prodi")."'</script>");
    }
    public function getFormEdit()
    {
        $data['_mst_fakultas'] = $this->fakultas->getAll();
        $data['_getProdi'] = $this->prodi->getById($this->input->post('prodiID'));
        $this->load->view('form_edit', $data);
    }

    function update(){
        $id = $this->input->post('pid');
        $data = array(
            'fakultasID'    => $this->input->post('fakultas'),
            'prodiName'    => $this->input->post('prodi'),
            'prodiKode'    => $this->input->post('prodiKode'),
            'updatedAt'       => date('Y-m-d H:i:s'),
            'updatedBy'       => $this->session->userdata('identity'),
            'active'          => 1,
        );
        $this->prodi->update($data, $id);

        echo '<script language="javascript">';
        echo 'alert("successfully Update")';
        echo '</script>';
     
         echo ("<script>location.href='".base_url("C_Prodi")."'</script>");
    }
    function delete($id){
        $data = array(
            'active'    => 0,
        );

        $this->prodi->delete($data, $id);
        
        echo '<script language="javascript">';
        echo 'alert("successfully Delete")';
        echo '</script>';
     
         echo ("<script>location.href='".base_url("C_Prodi")."'</script>");

        
        // redirect(base_url('C_Fakultas'));        
    }

}
