<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Description of site
 *
 * @author https://roytuts.com
 */
class C_Alumni extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('C_Alumni/M_Alumni','alumni');
      
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
        $this->load->view('index', $data);
        $this->load->view('../../template/footer');
    }

}

/* End of file Site.php */
/* Location: ./application/modules/site/controllers/site.php */