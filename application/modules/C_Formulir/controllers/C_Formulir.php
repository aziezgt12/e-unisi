<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Description of site
 *
 * @author https://roytuts.com
 */
class C_Formulir extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('C_Prodi/M_Prodi', 'prodi');
        $this->load->model('C_Formulir/M_Formulir', 'formulir');
      
        if (!$this->ion_auth->logged_in())
        {
            // redirect them to the login page
            redirect('auth/login', 'refresh');
        }

    }

    function index() {


        $data['title'] = 'SIA :: Master Fakultas';

        // $data['_mst_fakultas'] = $this->fakultas->getAll();
        // $data['_mst_prodi'] = $this->prodi->getAll();

        $this->load->view('../../template/header', $data);
        $this->load->view('index', $data);
        $this->load->view('../../template/footer');
    }

    function C1(){
        $data['title'] = 'SIA :: Master Fakultas';
        $data['_prodi'] = $this->prodi->getAll();

        $this->load->view('../../template/header');
        $this->load->view('formulirC1', $data);
        $this->load->view('../../template/footer');   
    }

    function C2(){
        $data['title'] = 'SIA :: Master Fakultas';
        $data['_prodi'] = $this->prodi->getAll();

        $this->load->view('../../template/header');
        $this->load->view('formulirC2');
        $this->load->view('../../template/footer');   
    }

    function actionC2()
    {
        $headerID = $this->input->post('headerID');

        $data = array(
            'nim'                   => $this->input->post('nim'),
            'telp'                  => $this->input->post('hp'),
            'kota'                  => $this->input->post('kota'),
            'instansiTempatKerja'   => $this->input->post('tempatKerja'),
            'alamatInstansi'        => $this->input->post('alamatInstansi'),
            'lamaStudiBulan'        => $this->input->post('jumlahBulan'),
            'lamaStudiTahun'        => $this->input->post('jumlahTahun'),
            'tglLulus'              => $this->input->post('tglLulus'),
            'judulTA'               => $this->input->post('judulTa'),
            'dospem1'               => $this->input->post('dospem1'),
            'dospem2'               => $this->input->post('dospem2'),
            'tempatWisuda'          => $this->input->post('tempatWisuda'),
            'active'                => 1
        );

        $this->formulir->saveC2($data);
        echo '<script language="javascript">';
        echo 'alert("successfully Insert")';
        echo '</script>';
     
        echo ("<script>location.href='".base_url("C_Formulir/det_calon_wisuda/").$this->input->post('nim')."'</script>");
    }

    function actionC1($headerID){
        echo "<pre>";
        print_r($_POST);
        echo "<pre>";

        $data = array(
            'headerID'      => $headerID,
            'namaLengkap'   => $this->input->post('namaLengkap'),
            'nim'           => $this->input->post('nim'),
            'nik'           => $this->input->post('nik'),
            'prodi'         => $this->input->post('prodi'),
            'jenjang'       => $this->input->post('jenjang'),
            'tempatLahir'   => $this->input->post('tempatLahir'),
            'tglLahir'      => $this->input->post('tglLahir'),
            'agama'         => $this->input->post('agama'),
            'jk'            => $this->input->post('jk'),
            'status'        => $this->input->post('status'),
            'pekerjaan'     => $this->input->post('pekerjaan'),
            'tglOc'         => $this->input->post('tglOc'),
            'ipk'           => $this->input->post('ipk'),
            'alamat'        => $this->input->post('alamat'),
            'namaAyah'      => $this->input->post('namaAyah'),
            'namaIbu'       => $this->input->post('namaIbu'),
            'alamatOrtu'    => $this->input->post('alamatOrtu'),
            'alumni'        => 0,
            'createdAt'     => date('Y-m-d H:i:s'),
            'createdBy'     => $this->session->userdata('identity'),
            'active'        => 1,
        );

        // var_dump($headerID);
        $this->formulir->save($data);

        echo '<script language="javascript">';
        echo 'alert("successfully Insert")';
        echo '</script>';
     
         echo ("<script>location.href='".base_url("C_Formulir/list_calon_wisuda/").$headerID."'</script>");
    }

    public function list_calon_wisuda($headerID)
    {
        $data['title'] = 'SIA :: List Pendaftar Wisuda';

        $data['getAllCalonWisuda'] = $this->formulir->getAllCalonWisuda($headerID);

        $this->load->view('../../template/header', $data);
        $this->load->view('list_pendaftar', $data);
        $this->load->view('../../template/footer');
    }

    public function det_calon_wisuda($nim)
    {
        $data['title'] = 'SIA :: List Pendaftar Wisuda';

        $data['get'] = $this->formulir->getCalon($nim);
        $data['getBerkas'] = $this->formulir->getStatusBerkas($nim);

        $this->load->view('../../template/header', $data);
        $this->load->view('det_calon_wisudawan', $data);
        $this->load->view('../../template/footer');
    }

    public function uploadIjazah(){
        //validate the form data  

            //get the form values
            $nim = $this->input->post('nim', TRUE);
            


            
            $data['ijazah'] = $this->input->post('berkas', TRUE);

            //file upload code 
            //set file upload settings 
            $config['upload_path']          = APPPATH. '../assets/berkas_wisuda/';
            $config['allowed_types']        = 'gif|jpg|png|pdf';
            $config['max_size']             = 100;
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('berkas')){
                $error = array('error' => $this->upload->display_errors());
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }else{
                //file is uploaded successfully
                //now get the file uploaded data 
                $upload_data = $this->upload->data();
                //get the uploaded file name
                $data['berkas'] = $upload_data['file_name'];


                $row = $this->db->get_where('tbl_berkas_wisuda', array('nim' => $nim))->row();   
                //store pic data to the db
                if(count($row) > 0){
                    $data2 = array(
                        'ijazah' => $data['berkas'] 
                    );
                    $this->formulir->updateBerkas($data2,$nim);
                }else{
                    $data2 = array(
                        'nim' => $nim,
                        'ijazah' => $data['berkas'] 
                    );
                    $this->formulir->insertBerkas($data2,$nim);
                }
                    echo '<script language="javascript">';
                    echo 'alert("successfully Upload")';
                    echo '</script>';
                 
                     echo ("<script>location.href='".base_url("C_Formulir/det_calon_wisuda/").$nim."'</script>");
            }
    }

    public function uploadKtp(){
             //validate the form data  

            //get the form values
            $nim = $this->input->post('nim', TRUE);
            


            
            $data['ijazah'] = $this->input->post('berkas', TRUE);

            //file upload code 
            //set file upload settings 
            $config['upload_path']          = APPPATH. '../assets/berkas_wisuda/';
            $config['allowed_types']        = 'gif|jpg|png|pdf';
            $config['max_size']             = 100;
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('berkas')){
                $error = array('error' => $this->upload->display_errors());
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }else{
                //file is uploaded successfully
                //now get the file uploaded data 
                $upload_data = $this->upload->data();
                //get the uploaded file name
                $data['berkas'] = $upload_data['file_name'];


                $row = $this->db->get_where('tbl_berkas_wisuda', array('nim' => $nim))->row();   
                //store pic data to the db
                if(count($row) > 0){
                    $data2 = array(
                        'ktp' => $data['berkas'] 
                    );
                    $this->formulir->updateBerkas($data2,$nim);
                }else{
                    $data2 = array(
                        'nim' => $nim,
                        'ktp' => $data['berkas'] 
                    );
                    $this->formulir->insertBerkas($data2,$nim);
                }
                    echo '<script language="javascript">';
                    echo 'alert("successfully Upload")';
                    echo '</script>';
                 
                     echo ("<script>location.href='".base_url("C_Formulir/det_calon_wisuda/").$nim."'</script>");
            }
    }
    public function uploadKk(){
        //validate the form data  

            //get the form values
            $nim = $this->input->post('nim', TRUE);
            


            
            $data['ijazah'] = $this->input->post('berkas', TRUE);

            //file upload code 
            //set file upload settings 
            $config['upload_path']          = APPPATH. '../assets/berkas_wisuda/';
            $config['allowed_types']        = 'gif|jpg|png|pdf';
            $config['max_size']             = 100;
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('berkas')){
                $error = array('error' => $this->upload->display_errors());
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }else{
                //file is uploaded successfully
                //now get the file uploaded data 
                $upload_data = $this->upload->data();
                //get the uploaded file name
                $data['berkas'] = $upload_data['file_name'];


                $row = $this->db->get_where('tbl_berkas_wisuda', array('nim' => $nim))->row();   
                //store pic data to the db
                if(count($row) > 0){
                    $data2 = array(
                        'kk' => $data['berkas'] 
                    );
                    $this->formulir->updateBerkas($data2,$nim);
                }else{
                    $data2 = array(
                        'nim' => $nim,
                        'kk' => $data['berkas'] 
                    );
                    $this->formulir->insertBerkas($data2,$nim);
                }
                    echo '<script language="javascript">';
                    echo 'alert("successfully Upload")';
                    echo '</script>';
                 
                     echo ("<script>location.href='".base_url("C_Formulir/det_calon_wisuda/").$nim."'</script>");
            }
    }
    public function uploadBb(){
        //validate the form data  

            //get the form values
            $nim = $this->input->post('nim', TRUE);
            


            
            $data['ijazah'] = $this->input->post('berkas', TRUE);

            //file upload code 
            //set file upload settings 
            $config['upload_path']          = APPPATH. '../assets/berkas_wisuda/';
            $config['allowed_types']        = 'gif|jpg|png|pdf';
            $config['max_size']             = 100;
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('berkas')){
                $error = array('error' => $this->upload->display_errors());
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }else{
                //file is uploaded successfully
                //now get the file uploaded data 
                $upload_data = $this->upload->data();
                //get the uploaded file name
                $data['berkas'] = $upload_data['file_name'];


                $row = $this->db->get_where('tbl_berkas_wisuda', array('nim' => $nim))->row();   
                //store pic data to the db
                if(count($row) > 0){
                    $data2 = array(
                        'bebas_biaya' => $data['berkas'] 
                    );
                    $this->formulir->updateBerkas($data2,$nim);
                }else{
                    $data2 = array(
                        'nim' => $nim,
                        'bebas_biaya' => $data['berkas'] 
                    );
                    $this->formulir->insertBerkas($data2,$nim);
                }
                    echo '<script language="javascript">';
                    echo 'alert("successfully Upload")';
                    echo '</script>';
                 
                     echo ("<script>location.href='".base_url("C_Formulir/det_calon_wisuda/").$nim."'</script>");
            }
    }

    public function uploadFoto(){
        //validate the form data  

            //get the form values
            $nim = $this->input->post('nim', TRUE);
            


            
            $data['ijazah'] = $this->input->post('berkas', TRUE);

            //file upload code 
            //set file upload settings 
            $config['upload_path']          = APPPATH. '../assets/berkas_wisuda/';
            $config['allowed_types']        = 'gif|jpg|png|pdf';
            $config['max_size']             = 100;
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('berkas')){
                $error = array('error' => $this->upload->display_errors());
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }else{
                //file is uploaded successfully
                //now get the file uploaded data 
                $upload_data = $this->upload->data();
                //get the uploaded file name
                $data['berkas'] = $upload_data['file_name'];


                $row = $this->db->get_where('tbl_berkas_wisuda', array('nim' => $nim))->row();   
                //store pic data to the db
                if(count($row) > 0){
                    $data2 = array(
                        'foto' => $data['berkas'] 
                    );
                    $this->formulir->updateBerkas($data2,$nim);
                }else{
                    $data2 = array(
                        'nim' => $nim,
                        'foto' => $data['berkas'] 
                    );
                    $this->formulir->insertBerkas($data2,$nim);
                }
                    echo '<script language="javascript">';
                    echo 'alert("successfully Upload")';
                    echo '</script>';
                 
                     echo ("<script>location.href='".base_url("C_Formulir/det_calon_wisuda/").$nim."'</script>");
            }
    }

    function tolakBerkasIjazah($id){
        $data = array(
            'ijazah'    => 1
        );
        $this->formulir->deleteBerkas($data, $id);

        echo '<script language="javascript">';
        echo 'alert("successfully tolak berkas")';
        echo '</script>';
     
         echo ("<script>location.href='".base_url("C_Formulir/det_calon_wisuda/".$id)."'</script>");
    }
    function tolakBerkasKtp($id){
        $data = array(
            'ktp'    => 1
        );
        $this->formulir->deleteBerkas($data, $id);

        echo '<script language="javascript">';
        echo 'alert("successfully tolak berkas")';
        echo '</script>';
     
         echo ("<script>location.href='".base_url("C_Formulir/det_calon_wisuda/".$id)."'</script>");
    }
    function tolakBerkasKk($id){
        $data = array(
            'kk'    => 1
        );
        $this->formulir->deleteBerkas($data, $id);

        echo '<script language="javascript">';
        echo 'alert("successfully tolak berkas")';
        echo '</script>';
     
         echo ("<script>location.href='".base_url("C_Formulir/det_calon_wisuda/".$id)."'</script>");
    }
    function tolakBerkasBb($id){
        $data = array(
            'bebas_biaya'    => 1
        );
        $this->formulir->deleteBerkas($data, $id);

        echo '<script language="javascript">';
        echo 'alert("successfully tolak berkas")';
        echo '</script>';
     
         echo ("<script>location.href='".base_url("C_Formulir/det_calon_wisuda/".$id)."'</script>");
    }
    function tolakBerkasFoto($id){
        $data = array(
            'foto'    => 1
        );
        $this->formulir->deleteBerkas($data, $id);

        echo '<script language="javascript">';
        echo 'alert("successfully tolak berkas")';
        echo '</script>';
     
         echo ("<script>location.href='".base_url("C_Formulir/det_calon_wisuda/".$id)."'</script>");
    }

    public function getWisudawanByNim()
    {
        $nim = $this->input->post('nim');

        $data = $this->formulir->getCalonNotAlumni($nim);

        echo json_encode($data);
    }


    // function store(){
    //     // var_dump($this->input->post());

    //     $data = array(
    //         'fakultasID'    => $this->input->post('fakultas'),
    //         'prodiName'    => $this->input->post('prodi'),
    //         'prodiKode'    => $this->input->post('prodiKode'),
    //         'createdAt'       => $this->session->userdata('identity'),
    //         'createdBy'       => date('Y-m-d H:i:s'),
    //         'active'          => 1,
    //     );
    //     $this->prodi->save($data);

    //     echo '<script language="javascript">';
    //     echo 'alert("successfully Insert")';
    //     echo '</script>';
     
    //      echo ("<script>location.href='".base_url("C_Prodi")."'</script>");
    // }
    // public function getFormEdit()
    // {
    //     $data['_mst_fakultas'] = $this->fakultas->getAll();
    //     $data['_getProdi'] = $this->prodi->getById($this->input->post('prodiID'));
    //     $this->load->view('form_edit', $data);
    // }

    // function update(){
    //     $id = $this->input->post('pid');
    //     $data = array(
    //         'fakultasID'    => $this->input->post('fakultas'),
    //         'prodiName'    => $this->input->post('prodi'),
    //         'prodiKode'    => $this->input->post('prodiKode'),
    //         'updatedAt'       => date('Y-m-d H:i:s'),
    //         'updatedBy'       => $this->session->userdata('identity'),
    //         'active'          => 1,
    //     );
    //     $this->prodi->update($data, $id);

    //     echo '<script language="javascript">';
    //     echo 'alert("successfully Update")';
    //     echo '</script>';
     
    //      echo ("<script>location.href='".base_url("C_Prodi")."'</script>");
    // }
    // function delete($id){
    //     $data = array(
    //         'active'    => 0,
    //     );

    //     $this->prodi->delete($data, $id);
        
    //     echo '<script language="javascript">';
    //     echo 'alert("successfully Delete")';
    //     echo '</script>';
     
    //      echo ("<script>location.href='".base_url("C_Prodi")."'</script>");

        
    //     // redirect(base_url('C_Fakultas'));        
    // }

}
