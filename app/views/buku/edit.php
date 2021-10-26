  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?=$data['judul'];?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url; ?>/home">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url; ?>/buku">Buku</a></li>
              <li class="breadcrumb-item active">Detail</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title"><?=$data['judul'];?></h3>
          <!--<div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>-->
        </div>
        <form role="form" action="<?= base_url;?>/buku/updateBuku" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_buku" value="<?= $data['buku']['id_buku']; ?>">
        <div class="card-body">
          <div class="form-group">
            <label>ID Buku</label>
            <input type="text" class="form-control" name="id_buku" value="<?= $data['buku']['id_buku']; ?>" disabled>
          </div>
          <div class="form-group">
            <label>Judul Buku</label>
            <input type="text" class="form-control" placeholder="masukkan judul buku..." name="judul_buku" value="<?= $data['buku']['judul_buku']; ?>">
          </div>
          <div class="form-group">
            <label>Penerbit</label>
            <input type="text" class="form-control" placeholder="masukkan penerbit buku..." name="penerbit" value="<?= $data['buku']['penerbit']; ?>">
          </div>
          <div class="form-group">
            <label>Penulis</label>
            <input type="text" class="form-control" placeholder="masukkan penulis buku..." name="penulis" value="<?= $data['buku']['penulis']; ?>">
          </div>
          <div class="form-group">
            <label>Tahun</label>
            <input type="number" class="form-control" placeholder="masukkan tahun buku..." name="tahun" value="<?= $data['buku']['tahun']; ?>">
          </div>
        </div>
                
        <!-- /.card-body -->
        <div class="card-footer">
          <a href="<?= base_url ?>/buku" class="btn btn-secondary">Batal</a>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
        <!-- /.card-footer-->
        </form>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
