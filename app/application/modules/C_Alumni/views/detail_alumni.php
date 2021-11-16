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
          <img src="<?= base_url('assets/berkas_wisuda/'.$getBerkas->foto) ?>" class="rounded float-right" height="150"  alt="...">
          <div class="mb-3 m-4 row">
            <p for="staticEmail" class="col-sm-2 col-form-label">Nama Lengkap</p>
            <div class="col-sm-10">
            <p for="staticEmail" class="col-sm-5 col-form-label ml-4">: <?= strtoupper($get->namaLengkap) ?></p>
            </div>
          </div>
          <div class="mb-3 m-4 row">
            <p for="staticEmail" class="col-sm-2 col-form-label">NIM</p>
            <div class="col-sm-10">
            <p for="staticEmail" class="col-sm-6 col-form-label ml-4">: <?= strtoupper($get->nim) ?></p>
            </div>
          </div>
          <div class="mb-3 m-4 row">
            <p for="staticEmail" class="col-sm-2 col-form-label">NIK</p>
            <div class="col-sm-10">
            <p for="staticEmail" class="col-sm-5 col-form-label ml-4">: <?= strtoupper($get->nik) ?></p>
            </div>
          </div>
          <div class="mb-3 m-4 row">
            <p for="staticEmail" class="col-sm-2 col-form-label">Prodi / Jenjang</p>
            <div class="col-sm-10">
            <p for="staticEmail" class="col-sm-6 col-form-label">: <?= strtoupper($get->jenjang." / ".$get->prodiName) ?></p>
            </div>
          </div>
          <div class="mb-3 m-4 row">
            <p for="staticEmail" class="col-sm-2 col-form-label">Tempat / Tanggal Lahir</p>
            <div class="col-sm-10">
            <p for="staticEmail" class="col-sm-8 col-form-label">: <?= strtoupper($get->tempatLahir)." ".date('d/m/Y', strtotime($get->tglLahir)) ?></p>
            </div>
          </div>
          <div class="mb-3 m-4 row">
            <p for="staticEmail" class="col-sm-2 col-form-label">Jenis Kelamin</p>
            <div class="col-sm-10">
            <p for="staticEmail" class="col-sm-6 col-form-label">: <?= strtoupper($get->jk) ?></p>
            </div>
          </div>
          <div class="mb-3 m-4 row">
            <p for="staticEmail" class="col-sm-2 col-form-label">Agama</p>
            <div class="col-sm-10">
            <p for="staticEmail" class="col-sm-6 col-form-label">: <?= strtoupper($get->agama) ?></p>
            </div>
          </div>
          <div class="mb-3 m-4 row">
            <p for="staticEmail" class="col-sm-2 col-form-label">Telp / HP</p>
            <div class="col-sm-10">
            <p for="staticEmail" class="col-sm-6 col-form-label">: <?= strtoupper($get->telp) ?></p>
            </div>
          </div>
          <div class="mb-3 m-4 row">
            <p for="staticEmail" class="col-sm-2 col-form-label">Kota</p>
            <div class="col-sm-10">
            <p for="staticEmail" class="col-sm-6 col-form-label">: <?= strtoupper($get->kota) ?></p>
            </div>
          </div>
          <div class="mb-3 m-4 row">
            <p for="staticEmail" class="col-sm-2 col-form-label">Status</p>
            <div class="col-sm-10">
            <p for="staticEmail" class="col-sm-6 col-form-label">: <?= strtoupper($get->status) ?></p>
            </div>
          </div>
          <div class="mb-3 m-4 row">
            <p for="staticEmail" class="col-sm-2 col-form-label">Pekerjaan</p>
            <div class="col-sm-10">
            <p for="staticEmail" class="col-sm-6 col-form-label">: <?= strtoupper($get->pekerjaan) ?></p>
            </div>
          </div>
          <div class="mb-3 m-4 row">
            <p for="staticEmail" class="col-sm-2 col-form-label">Alamat</p>
            <div class="col-sm-10">
            <p for="staticEmail" class="col-sm-8 col-form-label">: <?= strtoupper($get->alamat) ?></p>
            </div>
          </div><hr>
          <div class="mb-3 m-4 row">
            <p for="staticEmail" class="col-sm-2 col-form-label">Tanggal Lulus</p>
            <div class="col-sm-10">
            <p for="staticEmail" class="col-sm-6 col-form-label">: <?= date('d/m/Y', strtotime($get->tglLulus)) ?></p>
            </div>
          </div>
          <div class="mb-3 m-4 row">
            <p for="staticEmail" class="col-sm-2 col-form-label">Tanggal OC</p>
            <div class="col-sm-10">
            <p for="staticEmail" class="col-sm-6 col-form-label">: <?= date('d/m/Y', strtotime($get->tglOc)) ?></p>
            </div>
          </div>
          <div class="mb-3 m-4 row">
            <p for="staticEmail" class="col-sm-2 col-form-label">IPK</p>
            <div class="col-sm-10">
            <p for="staticEmail" class="col-sm-8 col-form-label">: <?= strtoupper($get->ipk) ?></p>
            </div>
          </div>
          <div class="mb-3 m-4 row">
            <p for="staticEmail" class="col-sm-2 col-form-label">Judul TA</p>
            <div class="col-sm-10">
            <p for="staticEmail" class="col-sm-6 col-form-label">: <?= $get->judulTA ?></p>
            </div>
          </div>
          <div class="mb-3 m-4 row">
            <p for="staticEmail" class="col-sm-2 col-form-label">Dosen Pembimbing</p>
            <div class="col-sm-10">
            <p for="staticEmail" class="col-sm-6 col-form-label">: <?= $get->dospem1 ?></p>
            </div>
          </div>
          <div class="mb-3 m-4 row">
            <p for="staticEmail" class="col-sm-2 col-form-label">Dosen Pembimbing 2</p>
            <div class="col-sm-10">
            <p for="staticEmail" class="col-sm-6 col-form-label">: <?= $get->dospem2 ?></p>
            </div>
          </div>
          <div class="mb-3 m-4 row">
            <p for="staticEmail" class="col-sm-2 col-form-label">Tempt Wisuda</p>
            <div class="col-sm-10">
            <p for="staticEmail" class="col-sm-6 col-form-label">: <?= $get->tempatWisuda ?></p>
            </div>
          </div>
          <hr>
          <div class="mb-3 m-4 row">
            <p for="staticEmail" class="col-sm-2 col-form-label">Prkerjaan</p>
            <div class="col-sm-10">
            <p for="staticEmail" class="col-sm-8 col-form-label">: <?= strtoupper($get->pekerjaan) ?></p>
            </div>
          </div>
          <div class="mb-3 m-4 row">
            <p for="staticEmail" class="col-sm-2 col-form-label">Instansi Tempat Kerja</p>
            <div class="col-sm-10">
            <p for="staticEmail" class="col-sm-8 col-form-label">: <?= strtoupper($get->instansiTempatKerja) ?></p>
            </div>
          </div>
          <div class="mb-3 m-4 row">
            <p for="staticEmail" class="col-sm-2 col-form-label">Alamat Instansi</p>
            <div class="col-sm-10">
            <p for="staticEmail" class="col-sm-8 col-form-label">: <?= strtoupper($get->alamatInstansi) ?></p>
            </div>
          </div>
          <hr>
          <div class="mb-3 m-4 row">
            <p for="staticEmail" class="col-sm-2 col-form-label">Nama Ayah</p>
            <div class="col-sm-10">
            <p for="staticEmail" class="col-sm-8 col-form-label">: <?= strtoupper($get->namaAyah) ?></p>
            </div>
          </div>
          <div class="mb-3 m-4 row">
            <p for="staticEmail" class="col-sm-2 col-form-label">Nama Ibu</p>
            <div class="col-sm-10">
            <p for="staticEmail" class="col-sm-8 col-form-label">: <?= strtoupper($get->namaIbu) ?></p>
            </div>
          </div>
          <div class="mb-3 m-4 row">
            <p for="staticEmail" class="col-sm-2 col-form-label">Alamat Orang Tua</p>
            <div class="col-sm-10">
            <p for="staticEmail" class="col-sm-8 col-form-label">: <?= strtoupper($get->alamatOrtu) ?></p>
            </div>
          </div>


      </div>
    </div>
  </section>
</div>

>



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