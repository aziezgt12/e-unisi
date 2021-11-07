<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Description of site
 *
 * @author https://roytuts.com
 */
class Tracer extends MX_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->view('index');
        // echo "string";
    }

}

/* End of file Site.php */
/* Location: ./application/modules/site/controllers/site.php */