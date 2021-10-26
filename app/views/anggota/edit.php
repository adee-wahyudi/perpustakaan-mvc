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
              <li class="breadcrumb-item"><a href="<?= base_url; ?>/anggota"><?= $data['title'] ?></a></li>
              <li class="breadcrumb-item active">Detail</li>
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
              <!-- form start -->
              <form role="form" action="<?= base_url;?>/anggota/updateAnggota" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id_anggota" value="<?= $data['anggota']['id_anggota']; ?>">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>ID Anggota</label>
                        <input type="text" class="form-control" name="id_anggota" value="<?= $data['anggota']['id_anggota']; ?>" disabled>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin">
                          <option value="" <?=($data['anggota']['jenis_kelamin']=='')?"selected":"";?>> -- Pilih -- </option>
                          <option value="Laki-laki" <?= ($data['anggota']['jenis_kelamin']=='Laki-laki')?"selected":""; ?>>Laki-laki</option>
                          <option value="Perempuan" <?= ($data['anggota']['jenis_kelamin']=='Perempuan')?"selected":""; ?>>Perempuan</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_anggota" value="<?= $data['anggota']['nama_anggota']; ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="<?= $data['anggota']['alamat']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tempat, Tanggal Lahir</label>
                        <div class="row">
                          <div class="col-sm-7">
                            <input type="text" class="form-control" name="tempat_lahir" value="<?= $data['anggota']['tempat_lahir']; ?>">
                          </div>
                          <div class="col-sm-5">
                            <input type="date" class="form-control" name="tgl_lahir" value="<?= $data['anggota']['tgl_lahir']; ?>">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Telp</label>
                        <input type="number" class="form-control" name="telp" value="<?= $data['anggota']['telp']; ?>">
                      </div>
                    </div>
                  </div>
                  <!-- <div class="form-group">
                    <label>Foto</label>
                    <input type="text" class="form-control" name="foto" value="<?= $data['anggota']['foto']; ?>">
                  </div> -->
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Foto</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="hidden" name="old_foto" value="<?= $data['anggota']['foto']; ?>">
                            <input type="file" name="foto" class="custom-file-input" id="foto">
                            <label class="custom-file-label" for="foto">Choose file</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <img class="card-img-top" style="width:80px;" src="<?= base_url ?>/assets/dist/img/upload/Foto-Anggota/<?= $data['anggota']['foto']; ?>" alt="Foto-Anggota">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="<?= base_url ?>/anggota" class="btn btn-secondary">Batal</a>
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
