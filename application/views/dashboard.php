<html>
  <body>
    <h2>Dashboard Inventaris Sekolah</h2>
    <a href='<?=base_url('dashboard') ?>'>Dashboard</a>  |
    <a href='<?=base_url('barang') ?>'>Barang</a>  |
    <a href='<?=base_url('peminjaman') ?>'>Peminjaman</a>
<hr>

<p>Total Dipinjam: <b><?= $dipinjam ?></b></p>
<p>Total Di Kembalikan: <b><?= $kembali ?></b></p>
<p>Total Barang: <b><?= count($barang) ?></b></p>

<h3>Laporan Barang</h3>
<table border="1" cellpadding="5">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Stok</th>
</tr>

<?php $no=1; foreach($barang as $b){ ?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $b->nama_barang ?></td>
    <td><?= $b->stok ?></td>
</tr>

<?php } ?>
</table>

</body>
</html>
