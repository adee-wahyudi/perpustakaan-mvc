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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url; ?>/buku"><?= $data['title']; ?></a></li>
              <li class="breadcrumb-item active">Add</li>
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
        <?php
          $id = $data['buku']['id_buku'];
          $noId= (int) substr($id, 2, 4);
          $noId++;
          // $id = "BK".sprintf("%04s", $noId);
          if ($noId < 10) {
            $id = "BK" ."000" .$noId;
          }elseif($noId < 100){
            $id = "BK" ."00" .$noId;
          }elseif($noId < 1000){
            $id = "BK" ."0" .$noId;
          }elseif($noId < 10000){
            $id = "BK" .$noId;
          }
        ?>
        <form role="form" action="<?= base_url;?>/buku/simpanBuku" method="POST" enctype="multipart/form-data">
        <div class="card-body">
          <div class="form-group">
            <label>ID Buku</label>
            <input type="text" class="form-control" name="id_buku" value="<?= $id; ?>" readonly>
          </div>
          <div class="form-group">
            <label>Judul Buku</label>
            <input type="text" class="form-control" placeholder="masukkan judul buku..." name="judul_buku" required>
          </div>
          <div class="form-group">
            <label>Penerbit</label>
            <input type="text" class="form-control" placeholder="masukkan penerbit buku..." name="penerbit" required>
          </div>
          <div class="form-group">
            <label>Penulis</label>
            <input type="text" class="form-control" placeholder="masukkan penulis buku..." name="penulis" required>
          </div>
          <div class="form-group">
            <label>Tahun</label>
            <input type="number" class="form-control" placeholder="masukkan tahun buku..." name="tahun" required>
          </div>
        </div>
                
        <!-- /.card-body -->
        <div class="card-footer">
          <a href="<?= base_url ?>/buku" class="btn btn-secondary">Batal</a>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        <!-- /.card-footer-->
        </form>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

