<div class="container mt-3 ml-5">
  <div class="row">
    <div class="col-lg-6">
        <?php Flasher::flash(); ?>
    </div>
  </div>

    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambah" data-toggle="modal" data-target="#formModal">
                Tambah Kategori
            </button>

            <h1 class="text-white">Kategori</h1>
            <ul class="list-group position-align">
                <?php foreach( $data['kategori'] as $kategori ) : ?>
                <li class="list-group-item" >
                    <?= $kategori['nama_kategori']; ?>
                    <a href="<?= BASEURL;?>/kategori/hapus/<?= $kategori['id_kategori']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin?')">Hapus</a>
                    <a href="<?= BASEURL;?>/kategori/ubah/<?= $kategori['id_kategori']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin?')">Ubah</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModalLabel">Tambah Data Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		
		<form method="post" action="<?= BASEURL; ?>/kategori/tambah">
			<input type="hidden" name="id_kategori" id="id_kategori">
			<div class="form-group">
				<label for="id">Id</label>
				<input type="number" class="form-control" id="id_kategori" name="id_kategori">
            </div>
			<input type="hidden" name="nama" id="nama">
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" class="form-control" id="nama_kategori" name="nama_kategori"">
            </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		<button type="submit" class="btn btn-primary">Tambah Data</button>
		<form>
      </div>
    </div>
  </div>
</div>