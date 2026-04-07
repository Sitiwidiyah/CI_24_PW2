<h2>Tambah kategori</h2>

<a href="<?= site_url('kategori'); ?>">Kembali</a>

<br><br>

<form method="post" action="<?= site_url('kategori/simpan');?>">

    <label>Nama kategori</label><br>
    <input type="text" name="nama_kategori" required>
    <br><br>

    <button type="submit">Simpan</button>
    <button type="reset">Reset</button>
    
</form>