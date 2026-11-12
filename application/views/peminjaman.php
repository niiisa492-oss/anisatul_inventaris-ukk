<html>
    <body>
        <h2>Data Peminjaman</h2>
    <a href="<?=base_url('dashboard') ?>">Dashboard</a>  |
    <a href="<?=base_url('barang') ?>">Barang</a>  |
    <a href="<?=base_url('peminjaman') ?>">Peminjaman</a>
<hr>

<a href="<?=base_url('peminjaman/create') ?>">+Catat Peminjaman</a>
<br><br>

<table border="1" cellpadding="5">
    <tr>
        <th>No</th>
        <th>Peminjam</th>
        <th>Barang</th>
        <th>Jumlah</th>
        <th>Status</th>
        <th>Aksi</th>
</tr>

<?php $no=1; foreach($peminjaman as $p){ ?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $p->nama_peminjam?></td>
    <td><?= $p->nama_barang ?></td>
    <td><?= $p->jumlah ?></td>
    <td><?= $p->status ?></td>
    <td>
        <?php if($p->status == 'dipinjam'){ ?>
            <a href="<?= base_url('peminjaman/kembalikan/'.$p->id) ?>">Kembalikan</a>
            <?php } else {echo "-";} ?>
</td>
</td>

<?php } ?>
</table>

</body>
</html>
