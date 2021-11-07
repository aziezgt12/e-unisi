      <form action="<?= base_url('C_Priode/update') ?>" method="post">
        <?php var_dump($_getPriode); ?>
      <div class="modal-body">
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Tahun</label>
            <div class="col-sm-8">
              <input type="hidden" name="pid" value="<?= $_getPriode->priodeID ?>">
              <input type="number" class="form-control" name="tahun" value="<?= $_getPriode->tahun ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label">Priode</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="priode" value="<?= $_getPriode->priode ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Kouta Wisuda</label>
            <div class="col-sm-8">
              <input type="number" class="form-control" name="kouta" value="<?= $_getPriode->kouta ?>">
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>