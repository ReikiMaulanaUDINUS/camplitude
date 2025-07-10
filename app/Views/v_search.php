<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<?php if (session()->getFlashdata('message')): ?>
  <div class="alert alert-warning"><?= session()->getFlashdata('message') ?></div>
<?php endif; ?>

<div class="container my-4">
  <h2>Search Results for “<?= esc($query) ?>”</h2>

  <?php if (empty($items)): ?>
    <p>No products found matching your search.</p>
  <?php else: ?>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php foreach ($items as $item): ?>
        <div class="col">
          <div class="card h-100">
            <a href="<?= base_url('produk/detail/' . $item['id']) ?>">
                <img src="<?= esc($item['image']) ?>"
                    class="card-img-top"
                    alt="<?= esc($item['name']) ?>">
                <div class="card-body">
                <h5 class="card-title"><?= esc($item['name']) ?></h5>
                <p class="card-text"><?= esc($item['description']) ?></p>
                </div>
                <div class="card-footer">
                <small class="text-muted">Rp <?= number_format($item['price'],0,',','.') ?></small>
                </div>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>
</div>
<?= $this->endSection() ?>