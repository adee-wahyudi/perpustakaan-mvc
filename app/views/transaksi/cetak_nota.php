<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Cetak Nota</title>
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
      <div class="card" style="width: 28rem; height:28rem;">
        <div class="card-header text-center">
            <h1><b>NOTA PERPUSTAKAAN<br>Jl. M Hasibuan No. 68 Telp: (021) 8800992</b></h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <table>
                      <tr>
                        <td>ID Transaksi</td>
                        <td><?php echo "  : " .$data['transaksi']['id_transaksi'] ?></td>
                      </tr>
                      <tr>
                        <td>Nama Anggota</td>
                        <td><?php echo " : " .$data['transaksi']['nama_anggota'] ?></td>
                      </tr>
                      <tr>
                        <td>Judul Buku</td>
                        <td><?php echo " : " .$data['transaksi']['judul_buku'] ?></td>
                      </tr>
                      <tr>
                        <td>Tgl Peminjaman</td>
                        <td><?php echo " : " .$data['transaksi']['tgl_peminjaman'] ?></td>
                      </tr>
                      <tr>
                        <td>Tgl Pengembalian</td>
                        <td><?php echo " : " .$data['transaksi']['tgl_pengembalian'] ?></td>
                      </tr>
                      <tr>
                        <td>Tgl Realisasi</td>
                        <td><?php echo " : " .$data['transaksi']['tgl_realisasi'] ?></td>
                      </tr>
                      <tr>
                        <td>Denda</td>
                        <td><?php echo " : Rp" .number_format($data['transaksi']['denda'],0,".",".").",-" ?></td>
                      </tr>
                    </table>
                </div>
            </div>
        </div>
        <!-- <div class="card-footer">
            <p>Sistem Informasi Perpustakaan</p>
        </div> -->
      </div>
      <br>
  </section>
<!-- <script type="text/javascript">
    window.print();
    window.onafterprint = window.close;
</script> -->
</body>
</html>