<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<main class="main profil-admin">
    <div class="container">
        <div class="col-md-12" style="display: inline-flex; flex-direction: column; align-items: flex-start; gap: 32px;">
            <div style="display: flex; width: 100%; align-items: center; gap: 24px;">
                <img src="/img/<?= $result['image']; ?>" alt="">
                <div style="display: flex; padding-top: 32px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 20px; flex: 1 0 0;">
                    <div class="text-number"> <?= $result['nama']; ?></div>
                </div>
            </div>

            <form action="/savelaporan" method="POST" enctype="multipart/form-data" class="edit-laporan">
                <?php csrf_field(); ?>
                <div class="form-input">
                    <div class="col-md-6 left-input" style="display: flex; flex-direction: column; align-items: flex-s rt; gap: 32px; flex: 1 0 0;">
                    <input type="hidden" name="image" value="<?= $result['image']; ?>">
                        <input type="hidden" name="id" value="<?= $result['id']; ?>">
                        <div class="input-base">
                            <label for="" class="label">Tanggal</label>
                            <div class="input-container">
                                <input class="input-field" type="date" name="tanggal" value="<?= $result['tanggal']; ?>">
                            </div>
                        </div>
                        <div class="input-base">
                            <label for="" class="label">Nama Karyawan</label>
                            <div class="input-container">
                                <input class="input-field" type="text" name="nama" value="<?= $result['nama']; ?>">
                            </div>
                        </div>
                        <div class="input-base">
                            <label for="" class="label">Nama Tugas</label>
                            <div class="input-container">
                                <input class="input-field" name="nama_tugas" type="text" value="<?= $result['nama_tugas']; ?>">
                            </div>
                        </div>
                        <div class="input-base">
                            <label for="" class="label">Deskripsi</label>
                            <div class="input-container">
                                <input class="input-field" name="deskripsi" type="text" value="<?= $result['deskripsi']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: flex; align-items: flex-start; gap: 16px;align-self: stretch;">
                    <button class="button-base">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>