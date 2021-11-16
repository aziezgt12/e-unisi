<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
<!--       <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Master</a></div>
        <div class="breadcrumb-item"><a href="#">Fakultas</a></div>
      </div> -->
    </div>
    <div class="alert alert-primary" role="alert">
    Selamat Datang <?= $_SESSION['nama'] ?> !
  </div>
              <table class="table table-bordered table-responsive" id="myTable">
            <thead>
              <tr>
                <th width="10">No</th>
                <th class="col">Priode Wisuda</th>
                <th>Tahun</th>
                <th>Kouta</th>
                <th>Terdaftar</th>
                <th width="100">Tersida</th>
                <th>Jadwal</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($_getJadwalWisuda as $k=>$v): 

                if($v->status == '1'){
                  $status = '<span class="badge badge-primary">Pendaftaran Ditutup</span>';
                }elseif($v->status == '2'){
                  $status = '<span class="badge badge-success">Pendaftaran Dibuka</span>';
                }else{
                  $status = '<span class="badge badge-danger">Wisuda Telah Selesai</span>';
                }

                ?>
              <tr style="vertical-align: middle;">
                <th style="vertical-align: middle;" align="center" scope="row"><?= $k+1 ?></th>
                <td style="vertical-align: middle;"><?= $v->priode ?></td>
                <td style="vertical-align: middle;"><?= $v->tahun ?></td>
                <td style="vertical-align: middle; width: 100px;"><?= $v->kouta ?> Mhs/i</td>
                <td style="vertical-align: middle;"><?= $v->total_terdaftar ?> Mhs/i</td>
                <td style="vertical-align: middle; width: 100px;"><?= $v->sisa_kouta ?> Mhs/i</td>
                <td style="vertical-align: middle; width: 100px;"><?= date('d/m/y', strtotime($v->jadwal)) ?></td>
                <td><?= $status ?></td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>

<!--     <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Alumni</h4>
                  </div>
                  <div class="card-body">
                    <?php 
                      $res = $this->db->get_where('tbl_form_c1', array('alumni' => 1))->result(); 
                      echo count($res);
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Pendaftar Wisuda</h4>
                  </div>
                  <div class="card-body">
                    <?php 
                      $res = $this->db->get_where('tbl_form_c1', array('alumni' => 0))->result(); 
                      echo count($res);
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Quisioner Terjawab</h4>
                  </div>
                  <div class="card-body">
                    <?php 
                      $res = $this->db->group_by('nim')->get('tbl_jawaban_quisioner')->result(); 
                      echo count($res);
                    ?>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Wisuda Priode Ini</h4>
                  </div>
                  <div class="card-body">
                    <?php 
                      $res = $this->db->get_where('tbl_jadwal_wisuda', array('tahun' => date('Y')))->result(); 
                      echo count($res);
                    ?>

                  </div>
                </div>
              </div>
            </div> -->
  </section>
</div>
<!-- Button trigger modal -->

<!-- Modal Add-->
<div class="modal fade" id="btnAdd" tabindex="-1" role="dialog" aria-labelledby="btnAddLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="btnAddLabel">Form Input New Faculty</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('C_Fakultas/store') ?>" method="post">
      <div class="modal-body">
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Kode Fakultas</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="fakultasCode">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label">Fakultas</label>
            <div class="col-sm-8">
              <input class="form-control" name="fakultasName" required="">
              <small id="emailHelp" class="form-text text-muted" style="color: red">Ex: Fakultas Teknik</small>

            </div>
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

<div class="modal fade" id="btn_edit" tabindex="-1" role="dialog" aria-labelledby="btn_editLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="btn_editLabel">Form Update Faculty </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('C_Fakultas/update') ?>" method="post">
      <hr>
      <div class="modal-body">
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Kode Fakultas</label>
            <div class="col-sm-8">
              <input type="hidden" id="fid" name="fid">
              <input type="text" id="fcode" class="form-control" name="fakultasCode">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label">Fakultas</label>
            <div class="col-sm-8">
              <input class="form-control" id="fName" name="fakultasName" required="">
              <small id="emailHelp" class="form-text text-muted" style="color: red">Ex: Fakultas Teknik</small>

            </div>
          </div>
      </div>
      <hr>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>


<script type="text/javascript">
function btnEdit(id, name, code){
  // document.getElementById('fcode').value = code
  // document.getElementById('fName').value = name
    document.getElementById("fid").value = id;
    document.getElementById("fcode").value = code;
    document.getElementById("fName").value = name;
}
</script>