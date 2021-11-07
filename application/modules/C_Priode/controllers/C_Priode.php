<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Description of site
 *
 * @author https://roytuts.com
 */
class C_Priode extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('C_Priode/M_Priode','priode');
      
        if (!$this->ion_auth->logged_in())
        {
            // redirect them to the login page
            redirect('auth/login', 'refresh');
        }

    }

    function index() {


        $data['title'] = 'SIA :: Master Fakultas';

        $data['_mst_priode'] = $this->priode->getAll();
        // var_dump($data);
        $this->load->view('../../template/header', $data);
        $this->load->view('index', $data);
        $this->load->view('../../template/footer');
    }

    function store(){
        // var_dump($this->input->post());

        $data = array(
            'priode'    => $this->input->post('priode'),
            'tahun'    => $this->input->post('tahun'),
            'kouta'    => $this->input->post('kouta'),
            'createdBy'       => $this->session->userdata('identity'),
            'createdAt'       => date('Y-m-d H:i:s'),
            'active'          => 1,
        );
        $this->priode->save($data);

        echo '<script language="javascript">';
        echo 'alert("successfully Insert")';
        echo '</script>';
     
         echo ("<script>location.href='".base_url("C_Priode")."'</script>");
    }

    function getFormEdit()
    {
        $data['_getPriode'] = $this->priode->getById($this->input->post('priodeID'));
        $this->load->view('form_edit', $data);
    }

    function update(){
        $id = $this->input->post('pid');
        $data = array(
            'priode'    => $this->input->post('priode'),
            'tahun'     => $this->input->post('tahun'),
            'kouta'     => $this->input->post('kouta'),
            'updatedBy' => $this->session->userdata('identity'),
            'updatedAt' => date('Y-m-d H:i:s'),
        );
        $this->priode->update($data, $id);

        echo '<script language="javascript">';
        echo 'alert("successfully Update")';
        echo '</script>';
     
         echo ("<script>location.href='".base_url("C_Priode")."'</script>");
    }
    function delete($id){
        $data = array(
            'active'    => 0,
        );

        $this->priode->delete($data, $id);
        
        echo '<script language="javascript">';
        echo 'alert("successfully Delete")';
        echo '</script>';
     
         echo ("<script>location.href='".base_url("C_Priode")."'</script>");

        
        // redirect(base_url('C_Fakultas'));        
    }

}
