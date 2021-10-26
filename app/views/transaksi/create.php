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
              <li class="breadcrumb-item"><a href="<?= base_url; ?>/transaksi"><?= $data['title'] ?></a></li>
              <li class="breadcrumb-item active">Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $data['judul'] ?></h3>
              </div>
              <!-- /.card-header -->
              <?php
              $id = $data['transaksi']['id_transaksi'];
              $noId= (int) substr($id, 8, 4);
              $noId++;
              if ($noId < 10) {
                $id = "TR" .date('Ym') ."000" .$noId;
              }elseif($noId < 100){
                $id = "TR" .date('Ym') ."00" .$noId;
              }elseif($noId < 1000){
                $id = "TR" .date('Ym') ."0" .$noId;
              }elseif($noId < 10000){
                $id = "TR" .date('Ym') .$noId;
              }
              ?>
              <!-- form start -->
              <form role="form" action="<?= base_url;?>/transaksi/simpanTransaksi" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>ID Transaksi</label>
                        <input type="text" class="form-control" name="id_transaksi" value="<?= $id ?>" readonly>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal Peminjaman</label>
                        <input type="date" class="form-control" name="tgl_peminjaman" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Anggota</label>
                        <select class="form-control select2" name="id_anggota" style="width: 100%;" required>
                          <option value="">Pilih Data Anggota</option>
                          <?php foreach($data['anggota'] as $row){ ?>
                            <option value="<?= $row['id_anggota']; ?>">[<?= $row['id_anggota']; ?>] <?= $row['nama_anggota']; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal Pengembalian</label>
                        <input type="date" class="form-control" name="tgl_pengembalian" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Buku</label>
                        <select class="form-control select2" name="id_buku" style="width: 100%;" required>
                          <option value="">Pilih Data Buku</option>
                          <?php foreach($data['buku'] as $row){ ?>
                            <option value="<?= $row['id_buku']; ?>">[<?= $row['id_buku']; ?>] <?= $row['judul_buku']; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!--  -->
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="<?= base_url ?>/transaksi" class="btn btn-secondary">Batal</a>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
