      <form action="<?= base_url('C_Prodi/update') ?>" method="post">
      <div class="modal-body">
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Kode Prodi</label>
            <div class="col-sm-8">
              <input type="hidden" name="pid" value="<?= $_getProdi->prodiID ?>">
              <input type="text" class="form-control" name="prodiKode" value="<?= $_getProdi->prodiKode ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label">Fakultas</label>
            <div class="col-sm-8">
              <select class="form-control" name="fakultas">
                <?php foreach($_mst_fakultas as $k=>$v): ?>
                  <option <?= $v->fakultasID == $_getProdi->fakultasID ? 'selected' : '' ?> value="<?= $v->fakultasID ?>"><?= $v->fakultasName ?></option>
              <?php endforeach ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Program Studi</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="prodi" value="<?= $_getProdi->prodiName ?>">
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>