<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<main class="main profil-admin">
<div class="container">
        <h1>Lihat Detail Laporan</h1>
        <div class="container">
        <div class="col-md-12" style="display: inline-flex; flex-direction: column; align-items: flex-start; gap: 32px;">
    
                <div class="form-input">
                    <div class="col-md-6 left-input" style="display: flex; flex-direction: column; align-items: flex-s rt; gap: 32px; flex: 1 0 0;">
                    <input type="hidden" name="image" value="<?= $result['image']; ?>">
                        <input type="hidden" name="id" value="<?= $result['id']; ?>">
                        <div class="input-base">
                            <label for="" class="label label-name">Tanggal</label>
                            <div class="input-container">
                                <input class="input-field" type="date" name="tanggal" value="<?= $result['tanggal']; ?>" readonly>
                            </div>
                        </div>
                        <div class="input-base">
                            <label for="" class="label label-name">Nama Tugas</label>
                            <div class="input-container">
                                <input class="input-field" name="nama_tugas" type="text" value="<?= $result['nama_tugas']; ?>" readonly>
                            </div>
                        </div>
                        <div class="input-base">
                            <label for="" class="label label-name">Deskripsi</label>
                            <div class="input-container">
                                <input class="input-field" name="deskripsi" type="text" value="<?= $result['deskripsi']; ?>" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: flex; align-items: flex-start; gap: 16px;align-self: stretch;">
                    <button class="button-base button-back" onclick="goBack()">Kembali</button>
                </div>
            </form>
        </div>
    </div>
</main>
<script>
    function goBack() {
        window.history.back(); // Mengarahkan kembali ke halaman sebelumnya
    }
</script>
<?= $this->endSection(); ?>