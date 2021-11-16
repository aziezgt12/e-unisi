<style type="text/css">
/*.table-responsive {
     max-width: 100%;
     overflow: scroll;
}*/
</style>
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Master Priode Wisuda</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Master</a></div>
        <div class="breadcrumb-item"><a href="#">priode</a></div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title"></h2>
      <p class="section-lead">Halaman Master Priode</p>
      <div class="card">
          <?php if($_SESSION['level'] == 'admin'){ ?>
        <div class="card-header">
          <button class="btn btn-primary btn sm pull-right" data-toggle="modal" data-target="#btnAdd"><span class="fa fa-plus">Tambah Data</span></button>
          <!-- <h4>Example Card</h4> -->
        </div>
          <?php } ?>
        <div class="card-body">
          <div class="">
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
                <th style="text-align: center;">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($_jadwal as $k=>$v): 

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
                <td align="center" width="300">
                <?php if($_SESSION['level'] == 'admin'){ ?>
                  <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target='#btnSetting' 
                  onclick="setting(<?= $v->headerID ?>, <?=  $v->status ?>, <?=  $v->kouta ?>, '<?=  $v->jadwal ?>')"><span class="fa fa-cog"></span></button>
                <?php } ?>
                  <?php if($v->status != '2'){ ?>
                    <button disabled class="btn btn-danger btn-sm">Daftar</button>
                  <?php }else{ ?>
                    <a target="_blank" href="<?= base_url('C_Formulir/C1/'.$v->headerID) ?>" class="btn btn-danger btn-sm"><span class=""></span>Daftar</a>
                  <?php } ?>
                <?php if($_SESSION['level'] == 'admin'){ ?>
                  <a target="_blank" href="<?= base_url('C_Formulir/list_calon_wisuda/'.$v->headerID.'?tahun='.$v->tahun.'&priode='.$v->priode) ?>" class="btn btn-primary btn-sm"><span class=""></span>Lihat</a>
                <?php } ?>
<!--                   <button 
                  type="button" 
                  data-toggle="modal" data-target="#btn_edit"
                  onclick="btnEdit(<?php echo $v->priodeID ?>)" 
                  class="btn btn-primary btn-sm">
                  <span class="fa fa-edit"></span> Edit</button>
                  <a href="<?= base_url('C_Priode/delete/'.$v->priodeID) ?>" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a> -->
                </td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        <!-- </div> -->
        </div>
      </div>
    </div>
  </section>
</div>
<!-- Button trigger modal -->

<!-- Modal Add-->
<div class="modal fade" id="btnSetting" tabindex="-1" role="dialog" aria-labelledby="btnSettingLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="btnSettingLabel">Form Setting Wisuda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('C_Jadwal/settingAction') ?>" method="post">
      <div class="modal-body">
        <div id="infoWarning"></div>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Status Pendaftaran</label>
            <div class="col-sm-8">
              <input type="hidden" name="headerID" id="headerID">

              <select class="custom-select" name="status" id="status" required="">
                <option value="" default selected>Pilih status terlebih dahulu</option>
                <option value="2">Set Pendaftara di buka</option>
                <option value="1">Set Pendaftara di ditutup</option>
                <option value="3">Set Wisuda Selesai</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label">Set Kouta Wisuda</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="kouta" id="kouta">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label">Set Ulang Jadwal Wisuda</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" name="jadwal"  id="jadwal">
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="btnSettingAction">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="btnAdd" tabindex="-1" role="dialog" aria-labelledby="btnAddLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="btnAddLabel">Form Input New Program Studi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('C_Jadwal/store') ?>" method="post">
      <div class="modal-body">
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Tahun</label>
            <div class="col-sm-8">
              <input type="number" class="form-control" name="tahun" required="">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label">Priode</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="priode" required="">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label">Jadwal Wisuda</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" name="jadwal" required="">
            </div>
          </div>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Kouta Wisuda</label>
            <div class="col-sm-8">
              <input type="number" class="form-control" name="kouta" required="">
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
      <div id="loadData"></div>
    </div>
  </div>
</div>


<script type="text/javascript">
function btnEdit(id) {
  $.ajax({
    method: "POST",
    url: "<?= base_url('C_Priode/getFormEdit') ?>",
    dataType: 'html',
    data: { priodeID: id }
  })
    .done(function( msg ) {
      document.getElementById('loadData').innerHTML = msg;
    });
  }

  function setting(id, status, kouta, jadwal){

    // $('#jadwal').empty().value = '';
    document.getElementById('headerID').value = id
    $("#infoWarning").empty().append('');
    if(status == 3){
      $("#infoWarning").append('<div class="alert alert-danger">Halaman tidak bisa deperbarui karena pendaftaran telah ditutup</div>');
      $("#btnSettingAction").prop('disabled', true);
      $("#jadwal").prop('disabled', true);
      $("#status").prop('disabled', true);
      $("#kouta").prop('disabled', true);
    }else if(status == 1){
      $("#btnSettingAction").prop('disabled', false);
      $("#jadwal").prop('disabled', true);
      $("#status").prop('disabled', false);
      $("#kouta").prop('disabled', true);
    }else if(status == 2){
      $("#btnSettingAction").prop('disabled', false);
      $("#jadwal").prop('disabled', false);
      $("#status").prop('disabled', false);
      $("#kouta").prop('disabled', false);
    }   
  }
</script>