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
        $this->load->model('C_Tracer/M_Tracer','tracer');
      
        if (!$this->session->userdata('status'))
        {
            redirect('auth/login', 'refresh');
        }

    }

    function index() {
        $data['title'] = 'SIA :: Quisioner Tracer';
        $data['_alumni'] = $this->alumni->getAll();

        $soal = $this->tracer->getAll();

        $det_soal = [];
        foreach ($soal as $key => $value) {
            $det_soal['soal'] = $soal;
            $det_soal['detSoal'][$key] = $this->tracer->getDetSoal($value['id']);

        }
        
        $this->load->view('../../template/header', $data);
        $this->load->view('quisioner', $det_soal);
        $this->load->view('../../template/footer');
    }

    function det_alumni($nim){
        $data['get'] = $this->alumni->gtAlumniByNim($nim);
        $data['getBerkas'] = $this->formulir->getStatusBerkas($nim);

        $this->load->view('../../template/header', $data);
        $this->load->view('detail_alumni', $data);
        $this->load->view('../../template/footer');   
    }

    function saveQuisioner(){

        foreach ($this->input->post() as $key => $value) {
            $jawab = $this->input->post($key);

            if(is_array($jawab)){

                foreach($jawab as $b){
                    $data = array(
                        'nim' => $this->input->post(1),
                        'id_soal' => $key,
                        'jawaban' => $b
                    );
                   $this->tracer->insert_tracer($data);
               }
                    // echo "<pre>";
                    // print_r($this->input->post(1));
                    // echo "</pre>";

            }else{
                $data = array(
                    'nim' => $this->input->post(1),
                    'id_soal' => $key,
                    'jawaban' => $jawab
                );
               $this->tracer->insert_tracer($data);
                // echo "<pre>";
                // print_r($this->input->post(1));
                // echo "</pre>";
            }
        }

        redirect(base_url('C_Tracer/hasil/'.$this->input->post(1)));

    }
    function hasil($nim) {


        $data['title'] = 'SIA :: Alumni';
        $data['_alumni'] = $this->alumni->getAll();

        $soal = $this->tracer->getAll();
        $jawaban = array();
        foreach($soal as $key=>$v){
            $jawaban['soal'] = $this->tracer->getAll();
            $jawaban['jawaban'][$key] = $this->tracer->jawaban($v['id'], $nim);
            $jawaban['detSoal'][$key] = $this->tracer->getDetSoal($v['id']);


        }
       
        $this->load->view('../../template/header', $data);
        $this->load->view('hasil_quisioner', $jawaban);
        $this->load->view('../../template/footer');
    }

}

/* End of file Site.php */
/* Location: ./application/modules/site/controllers/site.php */