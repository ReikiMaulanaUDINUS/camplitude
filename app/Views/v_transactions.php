<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h2>Riwayat Transaksi</h2>
<table class="table">
    <thead>
        <tr>
            <th>ID Transaksi</th>
            <th>User</th>
            <th>Total Harga</th>
            <th>Waktu</th>
            <th>Detail</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($transactions as $trx): ?>
        <tr>
            <td><?= $trx['id'] ?></td>
            <td><?= $trx['username'] ?></td>
            <td><?= number_to_currency($trx['total_harga'], 'IDR') ?></td>
            <td><?= $trx['created_at'] ?></td>
            <td>
                <ul>
                    <?php foreach ($trx['details'] as $detail): ?>
                        <li><?= $detail['product_name'] ?> (<?= $detail['jumlah'] ?> x <?= number_to_currency($detail['subtotal_harga'], 'IDR') ?>)</li>
                    <?php endforeach ?>
                </ul>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection() ?>