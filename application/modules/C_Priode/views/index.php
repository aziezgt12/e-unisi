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
        <div class="card-header">
          <button class="btn btn-primary btn sm pull-right" data-toggle="modal" data-target="#btnAdd"><span class="fa fa-plus">Tambah Data</span></button>
          <!-- <h4>Example Card</h4> -->
        </div>
        <div class="card-body">
         <table class="table table-striped table-bordered" id="myTable"  style="height: 10px;">
            <thead>
              <tr>
                <th scope="col" width="1">#</th>
                <th scope="col">Priode Wisuda</th>
                <th scope="col">Tahun</th>
                <th scope="col">Kouta</th>
                <th scope="col">Created By</th>
                <th scope="col">Created At</th>
                <th scope="col">Last Update</th>
                <th scope="col" style="text-align: center;" width="130">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($_mst_priode as $k=>$v): ?>
              <tr style="padding: 0px; height: 1px; line-height: 0px; margin: 0px;">
                <th scope="row"><?= $k+1 ?></th>
                <td><?= $v->priode ?></td>
                <td><?= $v->tahun ?></td>
                <td><?= $v->kouta ?></td>
                <td><?= $v->createdBy ?></td>
                <td><?= $v->createdAt ?></td>
                <td><?= $v->updatedBy." : ". $v->updatedAt ?></td>
                <td>
                  <button 
                  type="button" 
                  data-toggle="modal" data-target="#btn_edit"
                  onclick="btnEdit(<?php echo $v->priodeID ?>)" 
                  class="btn btn-primary btn-sm">
                  <span class="fa fa-edit"></span> Edit</button>
                  <a href="<?= base_url('C_Priode/delete/'.$v->priodeID) ?>" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                </td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>
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
        <h5 class="modal-title" id="btnAddLabel">Form Input New Program Studi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('C_Priode/store') ?>" method="post">
      <div class="modal-body">
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Tahun</label>
            <div class="col-sm-8">
              <input type="number" class="form-control" name="tahun">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label">Priode</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="priode">
            </div>
          </div>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Kouta Wisuda</label>
            <div class="col-sm-8">
              <input type="number" class="form-control" name="kouta">
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
  alert(id)
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
</script>
