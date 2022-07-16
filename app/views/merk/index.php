<div class="containter mt-3 ml-5">

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash() ?>
    </div>
  </div>

  <div class="row" >
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary tombolTambah" data-toggle="modal" data-target="#formModal">
        Tambah Merk
      </button>
      <h1 class="text-white">Daftar Merk</h1>
      <ul class="list-group position-align">
        <?php foreach( $data['merk'] as $merk ) : ?>
          <li class="list-group-item" >
            <?= $merk['nama_merk']; ?>
              <a href="<?= BASEURL;?>/merk/hapus/<?= $merk['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?');">Hapus</a>
              <a href="<?= BASEURL;?>/merk/detail/<?= $merk['id']; ?>" class="badge badge-primary float-right ml-1">Detail</a>
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
        <h5 class="modal-title" id="judulModalLabel">Tambah Data Merk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		
		<form method="post" action="<?= BASEURL; ?>/merk/tambah">
			<input type="hidden" name="id" id="id">
			<div class="form-group">
				<label for="id">Id</label>
				<input type="number" class="form-control" id="id" name="id"">
            </div>
			<input type="hidden" name="nama" id="nama">
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" class="form-control" id="nama_merk" name="nama_merk"">
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