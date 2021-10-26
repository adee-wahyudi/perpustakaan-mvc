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
              <li class="breadcrumb-item active">Laporan</li>
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
              <form target="_blank" role="form" action="<?= base_url;?>/transaksi/printLaporan" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <!-- <label>Tanggal Awal</label> -->
                        <input type="date" class="form-control" name="tgl_awal" required>
                      </div>
                    </div>
                    <div class="col-sm-1 text-center">
                      <div class="form-group">
                        <label>s/d</label>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <!-- <label>Tanggal Akhir</label> -->
                        <input type="date" class="form-control" name="tgl_akhir" required>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <button type="submit" class="btn btn-success">Print</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <!--  -->
                </div>
              </form>
            </div>
            <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
