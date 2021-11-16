<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Data Calon Wisuda</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Wisuda</a></div>
        <div class="breadcrumb-item"><a href="#">Calon Wisuda</a></div>
      </div>
    </div>


    <div class="section-body">
      <h2 class="section-title"></h2>
      <p class="section-lead">Halaman Data Calon Wisuda</p>
      <div class="card">
        <div class="card-body" style="font-size: 14px;">
          <form method="post" action="<?= base_url('C_Tracer/saveQuisioner') ?>">
            <!-- <?php 
            echo "<pre>";
            print_r($soal);
            echo "</pre>";
            ?> -->
            <?php foreach ($soal as $key => $value) {  ?>
              <div class="form-group">
                <label for="exampleInputEmail1 col-12"><?= $key+1 ?>. <?= $value['soal'] ?></label>
                <?php if($value['type'] == 'inputan'){ 
                  // echo '<input type="hidden" name="idsoal['.$key.']" value="'.$value['id'].'">';
                  echo '<input class="form-control" name="'.$value['id'].'">';
                }elseif ($value['type'] == 'radio') { 
                  foreach($detSoal[$key] as $k=>$v){ 
                    // var_dump($v);
                    echo '
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="'.$value['id'].'" id="'.$v['id'].'" value="'.$v['optional'].'">
                      <label class="form-check-label" for="'.$v['id'].'">
                        '.$v['optional'].'
                      </label>
                    </div>
                    ';
                   }
                }elseif ($value['type'] == 'checkbox') { 
                  foreach($detSoal[$key] as $k=>$v){ 
                    echo '
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="'.$value['id'].'[]" id="'.$v['id'].'" value="'.$v['optional'].'">
                      <label class="form-check-label" for="'.$v['id'].'">
                        '.$v['optional'].'
                      </label>
                    </div>
                    ';
                   }
                }
            ?>
              </div>
            <?php } ?>

<!--             <div class="form-group">
              <label for="exampleInputEmail1">Terima Kasih atas partisipasi mengisi Tracer Study ini, Semoga Sukses Selalu dalam Menjalankan Aktivitas Sehari-hari anda. *</label>
              <input type="datte" class="form-control">
            </div> -->
            <hr>
            <input type="submit" class="btn btn-danger" value="Simpan Hasil Quisioner" name="">
            <a href="" class="btn btn-primary">Kembali</a>




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