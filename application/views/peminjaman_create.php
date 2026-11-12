<html>
    <body>
    <h2>Catat Peminjaman</h2>
    <form action="<?= base_url('peminjaman/store') ?>" method="post">
Barang:
    <select name="barang_id">
    <?php foreach($barang as $b){ ?>
    <option value="<?= $b->id ?>"><?= $b->nama_barang ?> (<?= $b->stok ?>)</option>

    <?php } ?>
</select><br><br>
Nama Peminjam: <input type="text" name="nama_peminjam"><br><br>
Jumlah: <input type="number" name="jumlah"><br><br>
    <button type="submit">Simpan</button>
</form>
</body>
</html>