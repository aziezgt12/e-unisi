<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Data Alumni</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Wisuda</a></div>
        <div class="breadcrumb-item"><a href="#">Calon Wisuda</a></div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title"></h2>
      <p class="section-lead">Halaman Data Calon Wisuda </p>
      <div class="card">
        <div class="card-body" style="font-size: 14px;">
          <table class="table table-bordered" id="myTable">
            <thead>
              <th width="1">No</th>  
              <th>NIM</th>  
              <th>Nama Lengkap</th>  
              <th>Program Studi</th>  
              <th>Tempat / Tgl Lahir</th>  
              <th>Tgl OC</th>  
              <th>IPK</th>  
              <th style="text-align: center;">Action</th>  
            </thead>
            <tbody>
              <?php foreach ($_alumni as $key => $value): ?>
              <tr style="text-transform: capitalize;">
                <td align="center"><?= $key+1 ?></td>
                <td><?= $value->nim ?></td>
                <td><?= $value->namaLengkap ?></td>
                <td><?= $value->prodiName ?></td>
                <td><?= $value->tempatLahir." ".date('d/m/Y', strtotime($value->tglLahir)) ?></td>
                <td><?= date('d/m/Y', strtotime($value->tglOc)) ?></td>
                <td><?= $value->ipk ?></td>
                <td width="150" align="center">
                  <a href="<?= base_url('C_Formulir/det_calon_wisuda/'.$value->nim) ?>" class="btn btn-primary btn-sm"><span class="fa fa-eye"></span> Lihat Detail</a>
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
