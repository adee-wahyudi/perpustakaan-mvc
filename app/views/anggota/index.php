<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><?= $data['judul']; ?></h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url; ?>/home">Home</a></li>
            <li class="breadcrumb-item active"><?= $data['title']; ?></li>
          </ol>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <?php
            Flasher::Message();
          ?>
          <div class="card">
            <div class="card-header">
              <!-- <h5 class="card-title"><?= $data['judul']; ?></h5> -->
              <div class="d-flex justify-content-between">
                <a href="<?= base_url; ?>/anggota/print" rel="noopener" target="_blank" class="btn btn-success"><i class="fas fa-print"></i> Print</a>
                <a href="<?= base_url; ?>/anggota/add" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Anggota</a>
              </div>

              <div class="card-tools">
                <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button> -->
                <!-- <div class="btn-group">
                  <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fas fa-wrench"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right" role="menu">
                    <a href="#" class="dropdown-item">Action</a>
                    <a href="#" class="dropdown-item">Another action</a>
                    <a href="#" class="dropdown-item">Something else here</a>
                    <a class="dropdown-divider"></a>
                    <a href="#" class="dropdown-item">Separated link</a>
                  </div>
                </div>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button> -->
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="table-responsive">
                <table id="dataTables" class="table table-bordered table-hover">
                  <thead>
                    <tr class="text-center">
                      <th>ID Anggota</th>
                      <th>Nama Anggota</th>
                      <th>Jenis Kelamin</th>
                      <th>Tgl Lahir</th>
                      <th>Alamat</th>
                      <th>Telp</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($data['anggota'] as $row): ?>
                    <tr>
                      <td class="text-center"><?= $row['id_anggota'] ?></td>
                      <td><?= $row['nama_anggota'] ?></td>
                      <td class="text-center"><?= $row['jenis_kelamin'] ?></td>
                      <td class="text-center"><?= date('d-m-Y',strtotime($row['tgl_lahir'])) ?></td>
                      <td><?= $row['alamat'] ?></td>
                      <td class="text-center"><?= $row['telp'] ?></td>
                      <td class="text-center">
                        <a href="<?= base_url;?>/anggota/cetak_kartu/<?= $row['id_anggota'] ?>" rel="noopener" target="_blank" class="badge badge-success">Cetak Kartu</a>
                        <a href="<?= base_url;?>/anggota/detail/<?= $row['id_anggota'] ?>" class="badge badge-info">Detail</a>
                        <!-- <a href="<?= base_url;?>/anggota/hapus/<?= $row['id_anggota'] ?>" onclick="return confirm('Apakah yakin data akan dihapus?');" class="badge badge-danger">Hapus</a> -->
                        <a onclick="deleteConfirm('<?= base_url;?>/anggota/hapus/<?= $row['id_anggota'] ?>')" href="#!" class="badge badge-danger">Hapus</a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- ./card-body -->
            <!-- <div class="card-footer">
              <div class="row"></div>
            </div> -->
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
  function deleteConfirm(url){
	  $('#btn-delete').attr('href', url);
	  $('#deleteModal').modal();
  }
</script>