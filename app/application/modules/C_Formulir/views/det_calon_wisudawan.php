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
          <img src="<?= base_url('assets/img/calon_wisudawan/default.png') ?>" class="rounded float-right" width="200" alt="...">
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
          </div><hr>
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
            <p for="staticEmail" class="col-sm-2 col-form-label">ALamat Orang Tua</p>
            <div class="col-sm-10">
            <p for="staticEmail" class="col-sm-8 col-form-label">: <?= strtoupper($get->alamatOrtu) ?></p>
            </div>
          </div>

          <div class="alert alert-danger">Berkas File Persyaratan Wisuda</div>
          <table class="table table-bordered">
            <thead>
              <th width="1">No</th>  
              <th>Berkas Persyaratan</th>  
              <th>Jenis File Yg Didukung</th>  
              <th>Status</th>  
              <th>File</th>  
              <th style="text-align: center;">Action</th>  
            </thead>
            <tbody>
              <tr>
                <td align="center">1</td>
                <td>Ijazah Terakhir</td>
                <td>PDF</td>
                <td>
                  <?php if(isset($getBerkas->ijazah)){ ?>
                    <?php if($getBerkas->ijazah == 1){
                      echo '<span class="badge badge-warning">Berkas ditolak</span></td>';
                    }else{
                      echo '<span class="badge badge-success">Sudah upload</span></td>';
                    } ?>
                  <?php }else{ ?>
                    <span class="badge badge-danger">Belum upload</span></td>
                  <?php } ?>
                <td><a href="<?= isset($getBerkas->ijazah) ? base_url('assets/berkas_wisuda/'.$getBerkas->ijazah) : "" ?>" target="_blank" class="btn btn-danger btn-sm" href="">Lihat file</a></td>
                <td width="200">
                  <button 
                    class="btn btn-primary btn-sm"
                    data-toggle="modal"
                    data-target="#uploadIjaza" 
                    onclick="clickUpload(<?= $get->nim ?>)"
                  ><span class="fa fa-upload"></span> Upload</button>
                <?php if($_SESSION['level'] == 'admin'){ ?>
                  <a href="<?= base_url('C_Formulir/tolakBerkasIjazah/'.$get->nim )?>" class="btn btn-danger btn-sm"><span class="fa fa-times"></span> Tolak</a>
                <?php } ?>
                </td>
              </tr>              
              <tr>
                <td align="center">2</td>
                <td>Kartu Tanda Penduduk</td>
                <td>PDF</td>
                <td>
                  <?php if(isset($getBerkas->ktp)){ ?>
                    <?php if($getBerkas->ktp == 1){
                      echo '<span class="badge badge-warning">Berkas ditolak</span></td>';
                    }else{
                      echo '<span class="badge badge-success">Sudah upload</span></td>';
                    } ?>
                  <?php }else{ ?>
                    <span class="badge badge-danger">Belum upload</span></td>
                  <?php } ?>
                <td><a href="<?= isset($getBerkas->ktp) ? base_url('assets/berkas_wisuda/'.$getBerkas->ktp) : "" ?>" target="_blank" class="btn btn-danger btn-sm" href="">Lihat file</a></td>
                <td width="200">
                  <button 
                    class="btn btn-primary btn-sm"
                    data-toggle="modal"
                    data-target="#uploadKtp" 
                    onclick="clickUpload(<?= $get->nim ?>)"
                  ><span class="fa fa-upload"></span> Upload</button>
                <?php if($_SESSION['level'] == 'admin'){ ?>
                  <a href="<?= base_url('C_Formulir/tolakBerkasKtp/'.$get->nim )?>" class="btn btn-danger btn-sm"><span class="fa fa-times"></span> Tolak</a>
                <?php } ?>
                </td>
              </tr>              
              <tr>
                <td align="center">3</td>
                <td>Kartu Keluarga</td>
                <td>PDF</td>
                <td>
                  <?php if(isset($getBerkas->kk)){ ?>
                    <?php if($getBerkas->kk == 1){
                      echo '<span class="badge badge-warning">Berkas ditolak</span></td>';
                    }else{
                      echo '<span class="badge badge-success">Sudah upload</span></td>';
                    } ?>
                  <?php }else{ ?>
                    <span class="badge badge-danger">Belum upload</span></td>
                  <?php } ?>
                <td><a href="<?= isset($getBerkas->ijazah) ? base_url('assets/berkas_wisuda/'.$getBerkas->kk) : "" ?>" target="_blank" class="btn btn-danger btn-sm" href="">Lihat file</a></td>
                <td width="200">
                  <button 
                    class="btn btn-primary btn-sm"
                    data-toggle="modal"
                    data-target="#uploadKk" 
                    onclick="clickUpload(<?= $get->nim ?>)"
                  ><span class="fa fa-upload"></span> Upload</button>
                <?php if($_SESSION['level'] == 'admin'){ ?>
                  <a href="<?= base_url('C_Formulir/tolakBerkasKk/'.$get->nim )?>" class="btn btn-danger btn-sm"><span class="fa fa-times"></span> Tolak</a>
                <?php } ?>
                </td>
              </tr>              
              <tr>
                <td align="center">4</td>
                <td>Bebas Biaya </td>
                <td>PDF</td>
                <td>
                  <?php if(isset($getBerkas->bebas_biaya)){ ?>
                    <?php if($getBerkas->bebas_biaya == 1){
                      echo '<span class="badge badge-warning">Berkas ditolak</span></td>';
                    }else{
                      echo '<span class="badge badge-success">Sudah upload</span></td>';
                    } ?>
                  <?php }else{ ?>
                    <span class="badge badge-danger">Belum upload</span></td>
                  <?php } ?>
                <td><a href="<?= isset($getBerkas->bebas_biaya) ? base_url('assets/berkas_wisuda/'.$getBerkas->bebas_biaya) : "" ?>" target="_blank" class="btn btn-danger btn-sm" href="">Lihat file</a></td>
                <td width="200">
                  <button 
                    class="btn btn-primary btn-sm"
                    data-toggle="modal"
                    data-target="#uploadBb" 
                    onclick="clickUpload(<?= $get->nim ?>)"
                  ><span class="fa fa-upload"></span> Upload</button>
                <?php if($_SESSION['level'] == 'admin'){ ?>
                  <a href="<?= base_url('C_Formulir/tolakBerkasBb/'.$get->nim )?>" class="btn btn-danger btn-sm"><span class="fa fa-times"></span> Tolak</a>
                <?php } ?>
                </td>
              </tr>              
              <tr>
                <td align="center">5</td>
                <td>Foto</td>
                <td>PNG/JPEG</td>
                <td>
                  <?php if(isset($getBerkas->foto)){ ?>
                    <?php if($getBerkas->foto == 1){
                      echo '<span class="badge badge-warning">Berkas ditolak</span></td>';
                    }else{
                      echo '<span class="badge badge-success">Sudah upload</span></td>';
                    } ?>
                  <?php }else{ ?>
                    <span class="badge badge-danger">Belum upload</span></td>
                  <?php } ?>
                </td>
                <td><a href="<?= isset($getBerkas->foto) ? base_url('assets/berkas_wisuda/'.$getBerkas->foto) : "" ?>" target="_blank" class="btn btn-danger btn-sm" href="">Lihat file</a></td>
                <td width="200">
                  <button 
                    class="btn btn-primary btn-sm"
                    data-toggle="modal"
                    data-target="#uploadFoto" 
                    onclick="clickUpload(<?= $get->nim ?>)"
                  >
                    <span class="fa fa-upload"></span> Upload</button>
                <?php if($_SESSION['level'] == 'admin'){ ?>
                  <a href="<?= base_url('C_Formulir/tolakBerkasFoto/'.$get->nim )?>" class="btn btn-danger btn-sm"><span class="fa fa-times"></span> Tolak</a>
                <?php } ?>
                </td>
              </tr>              

            </tbody>
          </table>

        </div>
      </div>
    </div>
  </section>
</div>

>

<!-- Modal -->
<div class="modal fade" id="uploadIjaza" tabindex="-1" role="dialog" aria-labelledby="uploadIjazaLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="uploadIjazaLabel">Form Upload Ijazah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php echo form_open_multipart('C_Formulir/uploadIjazah');?>
      <div class="modal-body">
         <input type="hidden" name="nim" class="nim">
          <div class="form-group">
            <label for="exampleFormControlInput1">Upload Berkas</label><hr>
              <input type="file" class="form-control" name="berkas">
              <small class="pt-2" style="color: red">Ukuran maksimal file 1 MB</small>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

<div class="modal fade" id="uploadKtp" tabindex="-1" role="dialog" aria-labelledby="uploadKtpLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="uploadKtpLabel">Form Upload KTP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php echo form_open_multipart('C_Formulir/uploadKtp');?>
      <div class="modal-body">
         <input type="hidden" name="nim" class="nim">
          <div class="form-group">
            <label for="exampleFormControlInput1">Upload Berkas</label><hr>
              <input type="file" class="form-control" name="berkas">
          </div>
              <small class="pt-2" style="color: red">Ukuran maksimal file 1 MB</small>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>


<div class="modal fade" id="uploadKk" tabindex="-1" role="dialog" aria-labelledby="uploadKkLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="uploadKkLabel">Form Upload Kartu Keluarga</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php echo form_open_multipart('C_Formulir/uploadKk');?>
      <div class="modal-body">
         <input type="hidden" name="nim" class="nim">
          <div class="form-group">
            <label for="exampleFormControlInput1">Upload Berkas</label><hr>
              <input type="file" class="form-control" name="berkas">
          </div>
              <small class="pt-2" style="color: red">Ukuran maksimal file 1 MB</small>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>


<div class="modal fade" id="uploadBb" tabindex="-1" role="dialog" aria-labelledby="uploadBbLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="uploadBbLabel">Form Upload Bebas Biaya</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php echo form_open_multipart('C_Formulir/uploadBb');?>
      <div class="modal-body">
         <input type="hidden" name="nim" class="nim">
          <div class="form-group">
            <label for="exampleFormControlInput1">Upload Berkas</label><hr>
              <input type="file" class="form-control" name="berkas">
          </div>
              <small class="pt-2" style="color: red">Ukuran maksimal file 1 MB</small>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>


<div class="modal fade" id="uploadFoto" tabindex="-1" role="dialog" aria-labelledby="uploadFotoLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="uploadFotoLabel">Form Upload Foto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php echo form_open_multipart('C_Formulir/uploadFoto');?>
      <div class="modal-body">
         <input type="hidden" name="nim" class="nim">
          <div class="form-group">
            <label for="exampleFormControlInput1">Upload Berkas</label><hr>
              <input type="file" class="form-control" name="berkas">
          </div>
              <small class="pt-2" style="color: red">Ukuran maksimal file 1 MB</small>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
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