<html>
    <body>
        <h2>Data Barang</h2>
        <a href="<?= base_url('dashboard') ?>">Dashboard</a> |
        <a href="<?= base_url('barang') ?>">Barang</a> |
        <a href="<?= base_url('peminjaman') ?>">Peminjaman</a>
        <hr>

    <a href="<?= base_url('barang/create') ?>">+Tambah</a>
    <br><br>

<table border="1" cellpadding="5">
    <tr><th>No</th>
    <th>Nama</th>
    <th>Stok</th>
    <th>Aksi</th>
    </tr>

<?php $no=1; foreach($barang as $b){ ?>
    <tr>
    <td><?= $no++ ?></td>
    <td><?= $b->nama_barang ?></td>
    <td><?= $b->stok ?></td>
    <td><a href="<?= base_url('barang/delete/'.$b->id) ?>">Hapus</a></td>
    </tr>

<?php } ?>
</table>

</body>
</html>