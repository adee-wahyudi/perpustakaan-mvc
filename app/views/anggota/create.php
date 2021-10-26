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
              <li class="breadcrumb-item"><a href="<?= base_url; ?>/anggota"><?= $data['title'] ?></a></li>
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
              $id = $data['anggota']['id_anggota'];
              $noId= (int) substr($id, 7, 4);
              $noId++;
              // $id = "A" .date('Ym') .sprintf("%03s", $noId);
              if ($noId < 10) {
                $id = "A" .date('Ym') ."00" .$noId;
              }elseif($noId < 100){
                $id = "A" .date('Ym') ."0" .$noId;
              }elseif($noId < 1000){
                $id = "A" .date('Ym') .$noId;
              }
              ?>
              <!-- form start -->
              <form role="form" action="<?= base_url;?>/anggota/simpanAnggota" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>ID Anggota</label>
                        <input type="text" class="form-control" name="id_anggota" value="<?= $id ?>" readonly>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" required>
                          <option value=""> -- Pilih -- </option>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_anggota" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tempat, Tanggal Lahir</label>
                        <div class="row">
                          <div class="col-sm-7">
                            <input type="text" class="form-control" name="tempat_lahir" required>
                          </div>
                          <div class="col-sm-5">
                            <input type="date" class="form-control" name="tgl_lahir" required>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Telp</label>
                        <input type="number" class="form-control" name="telp" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Foto</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="foto" class="custom-file-input" id="foto">
                            <label class="custom-file-label" for="foto">Choose file</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- <img class="card-img-top" style="width:80px;" src="<?= base_url ?>/assets/dist/img/upload/<?= $data['anggota']['foto']; ?>" alt="Card image cap"> -->
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="<?= base_url ?>/anggota" class="btn btn-secondary">Batal</a>
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
