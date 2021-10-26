<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Cetak Kartu</title>
  <link rel="stylesheet" href="<?= base_url; ?>/assets/dist/css/adminlte.min.css" />
  <link rel="stylesheet" href="<?= base_url; ?>/assets/dist/css/normalize.min.css">
  <link rel="stylesheet" href="<?= base_url; ?>/assets/dist/css/paper.css">

  <!-- Set page size here: A5, A4 or A3 -->
  <!-- Set also "landscape" if you need -->
  <style type="text/css" media="print">
    @page 
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */
    }
  </style>
    <style>
    .center {
        margin-right: auto;
        margin-left: auto;
        text-align: center;
    }
    h1 {
        font-size: 15px;
    }
    p {
        font-size: 14px;
    }
    * {
        font-family: Calibri;
        font-size: 14px;
        -webkit-print-color-adjust:exact;
    }
    .table {
        border: solid 1px black;
        border-collapse: collapse;
        border-spacing: 0;
        font: normal 13px Arial, sans-serif;
        width: 100%;
    }
    .table thead th {
        /* background-color: #DDEFEF; */
        border: solid 1px black;
        color: black;
        padding: 10px;
        text-align: center;
        text-shadow: 1px 1px 1px #fff;
    }
    .table tbody td {
        border: solid 1px black;
        color: black;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    </style>
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<body class="A4 potrait">

  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
  <section class="sheet padding-15mm">
      <div class="card card-primary" style="width: 29rem;">
        <div class="card-header text-center">
            <h1><b>KARTU PERPUSTAKAAN<br>Jl. M Hasibuan No. 68 Telp: (021) 8800992</b></h1>
        </div>
        <div class="card-body bg-light">
            <div class="row">
                <div class="col-sm-9">
                    <table>
                      <tr>
                        <td>ID Anggota</td>
                        <td><?php echo "  : " .$data['anggota']['id_anggota'] ?></td>
                      </tr>
                      <tr>
                        <td>Nama Lengkap</td>
                        <td><?php echo " : " .$data['anggota']['nama_anggota'] ?></td>
                      </tr>
                      <tr>
                        <td>Tempat, Tgl Lahir</td>
                        <td><?php echo " : " .$data['anggota']['tempat_lahir'] .", " .date('d F Y',strtotime($data['anggota']['tgl_lahir'])) ?></td>
                      </tr>
                      <tr>
                        <td>Alamat</td>
                        <td><?php echo " : " .$data['anggota']['alamat'] ?></td>
                      </tr>
                      <tr>
                        <td>Telp</td>
                        <td><?php echo " : " .$data['anggota']['telp'] ?></td>
                      </tr>
                    </table>
                </div>
                <div class="col-sm-3">
                    <img class="card-img-top" style="width:80px;" src="<?= base_url ?>/assets/dist/img/upload/Foto-Anggota/<?= $data['anggota']['foto'] ?>" alt="Foto-Anggota">
                </div>
            </div>
        </div>
        <div class="card-footer bg-primary">
            <!-- <p>Sistem Informasi Perpustakaan</p> -->
        </div>
      </div>
      <br>
  </section>
<!-- <script type="text/javascript">
    window.print();
    window.onafterprint = window.close;
</script> -->
</body>
</html>