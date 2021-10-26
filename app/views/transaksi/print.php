<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Laporan Transaksi</title>

  <link rel="stylesheet" href="<?= base_url; ?>/assets/dist/js/normalize.min.css">
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
    font-size: 16px;
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
    background-color: #DDEFEF;
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
<!-- Set also "landscape" if you need or "potrait" -->
<body class="A4 landscape">

  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
  <section class="sheet padding-10mm">
      <!-- <img src="<?= base_url; ?>/assets/dist/img/Private/Copyright/Kop_surat4.png" class="center img-square" style="width: 680px;"> -->
      <h1 class="center" style="margin-top: 20px;">LAPORAN TRANSAKSI PEMINJAMAN BUKU PERPUSTAKAAN<br>PERIODE <?= date('d-m-Y',strtotime($_POST['tgl_awal'])) ?> S/D <?= date('d-m-Y',strtotime($_POST['tgl_akhir'])) ?></h1>
      <br>
      <!-- <br> -->
      <table class="table">
        <thead>                  
          <tr>
            <th>No</th>
            <th>ID Transaksi</th>
            <th>Nama Lengkap</th>
            <th>Judul Buku</th>
            <th>Peminjaman</th>
            <th>Pengembalian</th>
            <th>Tgl Realisasi</th>
            <th>Denda</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; ?> 
          <?php foreach ($data['transaksi'] as $row): ?>
          <tr>
            <td style="text-align: center;"><?= $no++ ?></td>
            <td><?= $row['id_transaksi'] ?></td>
            <td><?= $row['nama_anggota'] ?></td>
            <td><?= $row['judul_buku'] ?></td>
            <td style="text-align:center;"><?= date('d-m-Y',strtotime($row['tgl_peminjaman'])) ?></td>
            <td style="text-align:center;"><?= date('d-m-Y',strtotime($row['tgl_pengembalian'])) ?></td>
              <?php
                if ($row['tgl_realisasi'] == null) {
                  echo "<td></td>";
                }else{
                  echo "<td style='text-align:center;'>".date('d-m-Y',strtotime($row['tgl_realisasi']))."</td>";
                }
              ?>
            <!-- <td style="text-align:center;"><?= date('d-m-Y',strtotime($row['tgl_realisasi'])) ?></td> -->
            <td style="text-align:center;"><?= "Rp".number_format($row['denda'],0,".",".").",-";?></td>
            <td>
              <?php
                if ($row['tgl_realisasi'] == null) {
                  echo "Dipinjam";
                }else{
                  echo "Dikembalikan";
                }
              ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
  </section>
<!-- <script type="text/javascript">
    window.print();
    window.onafterprint = window.close;
</script> -->
</body>
</html>