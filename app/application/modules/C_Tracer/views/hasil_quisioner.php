<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Data Jawaban Quisioner Tracer Studi</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">tracer</a></div>
        <div class="breadcrumb-item"><a href="#">hsil quisioner</a></div>
      </div>
    </div>


    <div class="section-body">
      <h2 class="section-title"></h2>
      <p class="section-lead">Halaman hasil quisioner</p>
      <div class="card">
        <div class="card-body" style="font-size: 14px;">
          <form method="post" action="<?= base_url('C_Tracer/saveQuisioner') ?>">
            <?php 
            if(count($jawaban[1]) > 0 ){
            foreach ($soal as $key => $value) {  

            ?>
              <div class="form-group">
                <label for="exampleInputEmail1 col-12"><?= $key+1 ?>. <?= $value['soal'] ?></label>
                <?php if($value['type'] == 'inputan'){ 
                  // echo '<input type="hidden" name="idsoal['.$key.']" value="'.$value['id'].'">';
                    echo '
                    <div class="form-check">  
                      <label class="form-check-label">
                        <span style="color: red" class="fa fa-angle-right"> '.$jawaban[$key][0]['jawaban'].'</span>
                      </label>
                    </div>
                    ';

                }elseif ($value['type'] == 'radio') { 
                    echo '
                    <div class="form-check">  
                      <label class="form-check-label">
                        <span style="color: red" class="fa fa-angle-right"> '.$jawaban[$key][0]['jawaban'].'</span>
                      </label>
                    </div>
                    ';
                }elseif ($value['type'] == 'checkbox') { 
                  foreach($jawaban[$key] as $k=>$v){
                      // if($v == $jawaban[$key][$key]['jawaban']){
                      //   $checked = 'checked';
                      // }else{
                      //   $checked = '';
                      // }
                    echo '
                    <div class="form-check">  
                      <label class="form-check-label">
                      <span style="color: red" class="fa fa-angle-right"> '.$v['jawaban'].'</span>
                      </label>
                    </div>
                    ';


                    // echo '
                    // <div class="form-check">  
                    //   <input '.$checked.' class="form-check-input" type="checkbox" name="'.$value['id'].'[]" id="'.$v['id'].'" value="'.$v['optional'].'">
                    //   <label class="form-check-label" for="'.$v['id'].'">
                    //     '.$v['optional'].'
                    //   </label>
                    // </div>
                    // ';
                   }
                }
            ?>
              </div>
            <?php } }else{ ?>
              <div class="alert alert-danger" role="alert">
                Hasil Quisioner Tidak Ditemukan
              </div>
            <?php } ?>

<!--             <div class="form-group">
              <label for="exampleInputEmail1">Terima Kasih atas partisipasi mengisi Tracer Study ini, Semoga Sukses Selalu dalam Menjalankan Aktivitas Sehari-hari anda. *</label>
              <input type="datte" class="form-control">
            </div> -->
            <hr>
            <a href="javascript:history.go(-1)" class="btn btn-primary">Kembali</a>




      </div>
    </div>
  </section>
</div>



<script type="text/javascript">
  function clickUpload(id) {
    document.getElementsByClassName("nim")[0].value = id;
    document.getElementsByClassName("nim")[1].value = id;
    document.getElementsByClassName("nim")[2].value = id;
    document.getElementsByClassName("nim")[3].value = id;
    document.getElementsByClassName("nim")[4].value = id;
    // body...
  }
</script>