<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Data Anggota <?= date('Y') ?></title>

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
<!-- Set also "landscape" if you need -->
<body class="A4 potrait">

  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
  <section class="sheet padding-15mm">
      <img src="<?= base_url; ?>/assets/dist/img/Private/Copyright/Kop_surat4.png" class="center img-square" style="width: 680px;">
      <h1 class="center" style="margin-top: 20px;">DATA ANGGOTA PERPUSTAKAAN<br>TAHUN <?= date('Y'); ?></h1>
      <br>
      <!-- <br> -->
      <table class="table">
        <thead>                  
          <tr>
            <th>No</th>
            <th>ID Anggota</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th style="width: 66px;">Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Telp</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; ?> 
          <?php foreach ($data['anggota'] as $row): ?>
          <tr>
            <td style="text-align: center;"><?= $no++ ?></td>
            <td><?= $row['id_anggota'] ?></td>
            <td><?= $row['nama_anggota'] ?></td>
            <td style="text-align: center;"><?= $row['jenis_kelamin'] ?></td>
            <td style="text-align: center;"><?= date('d-m-Y',strtotime($row['tgl_lahir'])) ?></td>
            <!-- <td style=""><?php echo $row['tempat_lahir'] .", " .$row['tgl_lahir'] ?></td> -->
            <td style=""><?= $row['alamat'] ?></td>
            <td style="text-align: center;"><?= $row['telp'] ?></td>
            <!-- <td style="text-align: center;"><?= $row['foto'] ?></td> -->
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
  </section>
<script type="text/javascript">
    window.print();
    window.onafterprint = window.close;
</script>
</body>
</html>