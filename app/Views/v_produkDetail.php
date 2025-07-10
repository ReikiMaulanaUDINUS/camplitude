<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php
if (session()->getFlashData('success')) {
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>
<!-------------------------------------------->
    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="<?= base_url('img/' . $product['foto']) ?>" alt="Product" style="width: 70%; max-width: 350px; height: auto; object-fit: contain;" class="mb-3">
            </div>
          </div>
        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#product-overview">Produk</button>
                </li>

              </ul>
              <div class="tab-content pt-2">
                <?= form_open('keranjang') ?>
                <?php
                echo form_hidden('id', $product['id']);
                echo form_hidden('nama', $product['nama']);
                echo form_hidden('harga', $product['harga']);
                echo form_hidden('foto', $product['foto']);
                ?>
                <div class="tab-pane fade show active profile-overview" id="product-overview">
                  <h5 class="card-title"><?= $product['nama'] ?></h5>
                  <p class="small fst-italic"><?= $product['ket'] ?></p>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Harga</div>
                    <div class="col-lg-9 col-md-8"><?php echo number_to_currency($product['harga'], 'IDR') ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Stok</div>
                    <div class="col-lg-9 col-md-8"><?= $product['jumlah'] ?></div>
                  </div>
                    <button type="submit" class="btn btn-secondary rounded-pill">Masukkan Keranjang</button>

                </div>
                <?= form_close() ?>
              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

<?= $this->endSection() ?>