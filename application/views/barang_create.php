<html>
    <body>
        <h2>Tambah Barang</h2>
        <form action="<?= base_url('barang/store') ?>" method="post">
            Nama: <input type="text" name="nama_barang"><br><br>
            Lokasi: <input type="text" name="nama_lokasi"><br><br>
            Stok: <input type="number" name="stok"><br><br>
            <button type="submit">Simpan</button>
</form>