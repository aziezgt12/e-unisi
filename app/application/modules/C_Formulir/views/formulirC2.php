<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Fromulir Input Form C2</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Wisuda</a></div>
        <div class="breadcrumb-item"><a href="#">Formulir C2</a></div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title"></h2>
      <p class="section-lead">Halaman Master Input Form C2</p>
      <div class="card">
        <div class="card-body" style="padding: 80px;">
          <center><img align="center" src="<?= base_url('assets/img/unisi.png') ?>" style="width: 120px;"></center>
          <h3 style="font-family: times; padding-top: 20px;"><center>FORMULIR PENDAFTARAN</center></h3>
          <h5 style="font-family: times;"><center><b>BIODATA BUKU ALUMNI</b></center></h5>
          <h6 style="font-family: times;"><center>FORMULIR C2</center></h6  ><hr>
          <form method="post" action="<?= base_url('C_Formulir/actionC2') ?>">
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Masukkan NIM</label>
              <div class="row">
              <div class="col-sm-8">
                <input type="hidden" name="headerID" id="headerID" required="">
                <input type="number" class="form-control ml-3" name="nim" id="nim" required="">
              </div>
              <div class="col-sm-4">
                <button type="button" class="btn btn-danger" onclick="refresh()">Refresh</button>
              </div>
            </div>
                
              </div>
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Nama Lengkap</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="nama" name="namaLengkap" readonly="">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-4">
                <input type="" class="form-control" name="jk" id="jk" readonly="">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Tempat / Tanggal Lahir</label>
              <div class="form-row" style="padding-left: 15px;">
                <div class="col">
                   <input type="" class="form-control" style="width: 400px;" name="tempatLahir" id="tempatLahir" readonly>
                </div>
                <div class="col">
                   <input class="form-control" name="tglLahir" id="tglLahir" required="" readonly="">
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Nama Orang Tua</label>
              <div class="form-row" style="padding-left: 15px;">
                <div class="col">
                   <input type="" class="form-control" name="namaAyah" style="width: 400px;" placeholder="Nama Ayah" required="" readonly id="namaAyah">
                </div>
                <div class="col">
                   <input type="" class="form-control" name="namaIbu" style="width: 400px;" placeholder="Nama Ibu" required="" readonly id="namaIbu">
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Alamat Orang Tua</label>
              <div class="col-6">
                <textarea cols="4" readonly class="form-control" style="height: 100px;" id="alamat" name="alamatOrtu" required=""></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Telp / HP</label>
              <div class="col-sm-4">
                <input type="" class="form-control" name="hp" >
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Kota</label>
              <div class="col-sm-4">
                <input type="" class="form-control" name="kota" >
              </div>
            </div><hr>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Instansi Tempat Kerja</label>
              <div class="col-sm-4">
                <input type="" class="form-control" name="tempatKerja" >
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Alamat Instansi</label>
              <div class="col-6">
                <textarea cols="4" class="form-control" style="height: 100px;" name="alamatInstansi" required=""></textarea>
              </div>
            </div><hr>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Lama Studi</label>
              <div class="form-row" style="padding-left: 15px;">
                <div class="col">
                   <input type="number" class="form-control" name="jumlahTahun" style="width: 400px;" placeholder="Tahun" required="">
                </div>
                <div class="col">
                   <input type="number" class="form-control" name="jumlahBulan" style="width: 400px;" placeholder="Bulan" required="">
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Lulus</label>
              <div class="col-sm-4">
                <input type="date" class="form-control" name="tglLulus" >
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">IPK</label>
              <div class="col-sm-4">
                <input type="" class="form-control" name="ipk" required="" id="ipk" readonly="">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Judul Skripsi / TA</label>
              <div class="col-6">
                <textarea cols="4" class="form-control" style="height: 100px;" name="judulTa" required=""></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Dosen Pembimbing 1</label>
              <div class="col-6">
                <input class="form-control" name="dospem1" required="" />
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Dosen Pembimbing 2</label>
              <div class="col-6">
                <input class="form-control" name="dospem2" required="" />
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Tempat Wisuda</label>
              <div class="col-6">
                <textarea cols="4" class="form-control" style="height: 100px;" name="tempatWisuda" required=""></textarea>
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
function refresh() {
  var nim = document.getElementById('nim').value
    $.ajax({
      method: "POST",
      url: "<?= base_url('C_Formulir/getWisudawanByNim') ?>",
      dataType: 'json',
      data: { nim : nim },
        success: function(msg, textStatus, xhr){
          console.log(msg)

          if(msg){
            document.getElementById('nama').value = msg.namaLengkap
            document.getElementById('jk').value = msg.jk
            document.getElementById('tempatLahir').value = msg.tempatLahir
            document.getElementById('tglLahir').value = msg.tglLahir
            document.getElementById('namaAyah').value = msg.namaAyah
            document.getElementById('namaIbu').value = msg.namaIbu
            document.getElementById('alamat').value = msg.alamatOrtu
            document.getElementById('ipk').value = msg.ipk
            document.getElementById('headerID').value = msg.C1ID
          }else{
            alert('NIM tidak ditemukan')
          }

        },
        error: function(error){
          alert(error)
        }
    })
  }
</script>
