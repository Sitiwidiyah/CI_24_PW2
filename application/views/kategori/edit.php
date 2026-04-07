<div class="container-fluid">
<h2 class="h3 mb-4 text-gray-800">edit kategori</h2>
<div class="card shadow">
    <div class="card-body">
<form method="post" action="<?= site_url('kategori/update'.$kategory->id);?>">
    <div class="form-group">
    <label>Nama kategori</label><br>
    <input type="text" name="nama_kategori" class="form-control"value="<?= $katagori->nama_katagori; ?>"required>
</div>
    <button type="submit" class =" btn btn-primery">update</button>
    <a href="<? site_url('kategori');?>" class="btn btn-secondary">kembali</a>
</form>
</div>
</div>
</div>