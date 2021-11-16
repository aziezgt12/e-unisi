<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Fromulir Input Form C1</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Wisuda</a></div>
        <div class="breadcrumb-item"><a href="#">Formulir C1</a></div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title"></h2>
      <p class="section-lead">Halaman Master Input Form C1</p>
      <div class="card">
        <div class="card-body" style="padding: 80px;">
          <center><img align="center" src="<?= base_url('assets/img/unisi.png') ?>" style="width: 120px;"></center>
          <h3 style="font-family: times; padding-top: 20px;"><center>FORMULIR PENDAFTARAN</center></h3>
          <h5 style="font-family: times;"><center><b>WISUDA</b></center></h5>
          <h6 style="font-family: times;"><center>FORMULIR C1</center></h6  ><hr>
          <form method="post" action="<?= base_url('C_Formulir/actionC1/'.$this->uri->segment(3)) ?>">
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Nama Lengkap</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="namaLengkap" required="">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">NIM</label>
              <div class="col-sm-4">
                <input type="number" class="form-control" name="nim" required="">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">NIK</label>
              <div class="col-sm-4">
                <input type="number" class="form-control" name="nik" required="">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Program Studi / Jenjang</label>
              <div class="form-row" style="padding-left: 15px;">
                <div class="col">
                  <select class="form-control" style="width: 400px;" name="prodi" required="">
                    <option selected="">...</option>
                    <?php foreach ($_prodi as $key => $value): ?>
                      <option value="<?= $value->prodiID ?>"><?= strtoupper($value->prodiName) ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="col">
                  <select class="form-control" style="width: 200px;" name="jenjang" required="">
                    <option value="" default selected>...</option>
                    <option>D1</option>
                    <option>D2</option>
                    <option>D3</option>
                    <option>Strata 1 (S1)</option>
                    <option>Strata 1 (S2)</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Tempat / Tanggal Lahir</label>
              <div class="form-row" style="padding-left: 15px;">
                <div class="col">
                   <input type="" class="form-control" style="width: 400px;" name="tempatLahir" required="">
                </div>
                <div class="col">
                   <input type="date" class="form-control" name="tglLahir" required="">
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Agama</label>
              <div class="col-sm-4">
                <select class="form-control" name="agama" required="">
                  <option value="" default selected>...</option>
                  <option>Islam</option>
                  <option>Kristen</option>
                  <option>Katholik</option>
                  <option>Hindu</option>
                  <option>Budha</option>
                  <option>Konghuchu</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-4">
                <select class="form-control" name="jk" required="">
                  <option value="" default selected>...</option>
                  <option>Laki - Laki</option>
                  <option>Perempuan</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Status</label>
              <div class="col-sm-4">
                <select class="form-control" name="status" required="">
                  <option value="" default selected>...</option>
                  <option>Kawin</option>
                  <option>Belum Kawin</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Pekerjaan</label>
              <div class="col-sm-6">
                <input class="form-control" name="pekerjaan" required="">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal OC</label>
              <div class="col-sm-4">
                <input type="date" class="form-control" name="tglOc" required="">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">IPK</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="ipk" required="">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-6">
                <textarea cols="4" class="form-control" style="height: 100px;" name="alamat" required=""></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Nama Orang Tua</label>
              <div class="form-row" style="padding-left: 15px;">
                <div class="col">
                   <input type="" class="form-control" name="namaAyah" style="width: 400px;" placeholder="Nama Ayah" required="">
                </div>
                <div class="col">
                   <input type="" class="form-control" name="namaIbu" style="width: 400px;" placeholder="Nama Ibu" required="">
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Alamat Orang Tua</label>
              <div class="col-6">
                <textarea cols="4" class="form-control" style="height: 100px;" name="alamatOrtu" required=""></textarea>
              </div>
            </div>
            <hr>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required="">
                <label class="form-check-label" for="exampleCheck1">Harap cek seluruh data pada form sebelum melakukan simpan data, yakin data sudah benar ?</label>
            </div>
            <button class="btn btn-primary">Simpan Formulir</button>
            <a href="" class="btn btn-warning">Kembali ke halaman utama</a>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>

<script type="text/javascript">
function btnEdit(id) {
  $.ajax({
    method: "POST",
    url: "<?= base_url('C_Prodi/getFormEdit') ?>",
    dataType: 'html',
    data: { prodiID: id }
  })
    .done(function( msg ) {
      document.getElementById('loadData').innerHTML = msg;
    });
  }
</script>
