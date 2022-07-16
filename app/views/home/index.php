<div class="container mt-3">
    <!-- welcome -->
    <section class="dashboard" id="dashboard">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>     
    </section>
    <!-- cardinfo -->
    <section class="card-info">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-3" style="max-width: 350px; background-color:#eee;">
                    <div class="row no-gutters">
                        <div class="col-md-4 text-center img-thumbnail">
                        <img src="<?= BASEURL; ?>/img/kurva.png" class="card-img" alt="Kurva">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title ml-4">Pengunjung</h5>
                                <p class="card-text ml-4">Hari ini</p>
                                <p class="card-text ml-4"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3" style="max-width: 350px; background-color:#eee;">
                    <div class="row no-gutters">
                        <div class="col-md-4 img-thumbnail">
                        <img src="<?= BASEURL; ?>/img/uang.png" class="card-img" alt="uang">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title ml-4">Pendapatan</h5>
                                <p class="card-text ml-4">Hari ini</p>
                                <p class="card-text ml-4"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3" style="max-width: 380px; background-color:#eee;">
                    <div class="row no-gutters">
                        <div class="col-md-4 img-thumbnail">
                        <img src="<?= BASEURL; ?>/img/keranjang.png" class="card-img" alt="keranjang">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title ml-4">Keranjang</h5>
                                <p class="card-text ml-4">Hari ini</p>
                                <p class="card-text ml-4"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir info -->

    <!-- awal card -->
    <div class="tumbnail">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card">
                        <div class="layer"></div>
                        <div class="content">
                            <h3>DAFTAR <span>MERK</span></h3>
                            <div class="imgbox">
                                <img src="<?= BASEURL; ?>/img/merk.png" alt="Logo">
                            </div>
                            <div class="detail">
                                <a href="<?= BASEURL; ?>/merk" class="btn btn-primary btn-sm mt-4">View Update</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="layer"></div>
                        <div class="content">
                            <h3>DAFTAR <span>KATEGORI</span></h3>
                            <div class="imgbox">
                                <img src="<?= BASEURL; ?>/img/sepatu.png" alt="Logo">
                            </div>
                            <div class="detail">
                                <a href="<?= BASEURL; ?>/kategori" class="btn btn-primary btn-sm mt-4">View Update</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="layer"></div>
                        <div class="content">
                            <h3>DAFTAR <span>BARANG</span></h3>
                            <div class="imgbox">
                                <img src="<?= BASEURL; ?>/img/baju.png" alt="Logo">
                            </div>
                            <div class="detail">
                                <a href="<?= BASEURL ?>/barang"  class="btn btn-primary btn-sm mt-4">View Update</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="layer"></div>
                        <div class="content">
                            <h3>DAFTAR <span>KARIYAWAN</span></h3>
                            <div class="imgbox">
                                <img src="<?= BASEURL; ?>/img/karyawan.png" alt="Logo">
                            </div>
                            <div class="detail">
                                <button type="button" class="btn btn-primary btn-sm mt-4">Small button</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="layer"></div>
                        <div class="content">
                            <h3>PENGIRIMAN</h3>
                            <div class="imgbox">
                                <img src="<?= BASEURL; ?>/img/mobil.png" alt="Logo">
                            </div>
                            <div class="detail">
                            <button type="button" class="btn btn-primary btn-sm mt-4">Small button</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</div>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 0,
        modifier: 1,
        slideShadows: true,
      },
      loop:true,
    });
  </script>