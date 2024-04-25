<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<main class="main">
    <div class="container">
        <!-- TABLE -->
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card-table">
                    <div class="card-header">
                        <div class="text-header">Data Laporan <span class="span-info">100 Laporan</span></div>
                    </div>
                    <div class="table">
                        <!-- <table border="0" cellspacing="5" cellpadding="5">
                            <tbody>
                                <tr>
                                    <td>Minimum date:</td>
                                    <td><input type="text" id="min" name="min"></td>
                                </tr>
                                <tr>
                                    <td>Maximum date:</td>
                                    <td><input type="text" id="max" name="max"></td>
                                </tr>
                            </tbody>
                        </table> -->
                        <table id="example" class="display nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama</th>
                                    <th>Nama Tugas</th>
                                    <th>Deskripsi</th>
                                    <th class="button-crud"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php $i = 1; ?>
                                    <?php foreach ($result as $rs) : ?>
                                        <td><?= $i++; ?></td>
                                        <td><?= $rs['tanggal']; ?></td>
                                        <td>
                                            <div class="table-text-wrapper">
                                                <img class="table-image" src="/img/<?= $rs['image']; ?>" alt="">
                                                <?= $rs['nama']; ?>
                                            </div>
                                        </td>
                                        <td><?= $rs['nama_tugas'] . ' #' . $i - 1; ?></td>
                                        <td><?= $rs['deskripsi']; ?></td>
                                        <td style="width: 125px;">
                                        
                                            <a href="<?= base_url() . 'detaillaporan/' . $rs['id']; ?>"><img src="/img/eye.svg" alt=""></a>
                                            <a href="<?= base_url() . 'editlaporan/' . $rs['id']; ?>"><img src="/img/edit-2.svg" alt=""></a>
                                            <a href="<?= base_url() . 'hapus/' . $rs['id']; ?>"><img src="/img/trash.svg" alt=""></a>
                                        </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>