<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Description of site
 *
 * @author https://roytuts.com
 */
class C_Tracer extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('C_Alumni/M_Alumni','alumni');
        $this->load->model('C_Formulir/M_Formulir','formulir');
      
        if (!$this->ion_auth->logged_in())
        {
            // redirect them to the login page
            redirect('auth/login', 'refresh');
        }

    }

    function index() {


        $data['title'] = 'SIA :: Alumni';
        $data['_alumni'] = $this->alumni->getAll();

        $this->load->view('../../template/header', $data);
        $this->load->view('quisioner', $data);
        $this->load->view('../../template/footer');
    }

    function det_alumni($nim){
        $data['get'] = $this->alumni->gtAlumniByNim($nim);
        $data['getBerkas'] = $this->formulir->getStatusBerkas($nim);

        $this->load->view('../../template/header', $data);
        $this->load->view('detail_alumni', $data);
        $this->load->view('../../template/footer');   
    }

}

/* End of file Site.php */
/* Location: ./application/modules/site/controllers/site.php */