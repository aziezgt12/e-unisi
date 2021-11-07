<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Master Fakultas</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Master</a></div>
        <div class="breadcrumb-item"><a href="#">Fakultas</a></div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title"></h2>
      <p class="section-lead">This page is just an example for you to create your own page.</p>
      <div class="card">
        <div class="card-header">
          <h4>Example Card</h4>
        </div>
        <div class="card-body">
          <h1>HALAMAN HOME</h1>
        </div>
      </div>
    </div>
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