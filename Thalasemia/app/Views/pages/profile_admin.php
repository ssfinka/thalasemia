<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<main class="main profil-admin">
    <div class="container">
        <div class="col-md-12" style="display: inline-flex; flex-direction: column; align-items: flex-start; gap: 32px;">
            <div style="display: flex; width: 100%; align-items: center; gap: 24px;">
                <img src="/img/avatar-profile-photo.png" alt="">
                <div style="display: flex; padding-top: 32px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 20px; flex: 1 0 0;">
                    <div class="text-number"><?= $result[0]['nama']; ?></div>
                </div>
            </div>


            <div class="form-input">
                <div class="col-md-6 left-input" style="display: flex; flex-direction: column; align-items: flex-s rt; gap: 32px; flex: 1 0 0;">
                    <form action="/editprofil" method="POST" enctype="multipart/form-data">
                        <div class="input-base">
                            <label for="" class="label">Tanggal Lahir</label>
                            <div class="input-container">
                                <input class="input-field" type="date" value="<?= $result[0]['tanggal_lahir']; ?>" name="tanggal_lahir">
                            </div>
                        </div>
                        <div class="input-base">
                            <label for="" class="label">No telp</label>
                            <div class="input-container">
                                <input class="input-field" type="number" value="<?= $result[0]['no_telp']; ?>" name="no_telp">
                            </div>
                        </div>
                        <div class="input-base">
                            <label for="" class="label">Email</label>
                            <div class="input-container">
                                <input class="input-field" type="email" value="<?= $result[0]['email']; ?>" name="email">
                            </div>
                        </div>
                        <div class="input-base">
                            <label for="" class="label">Password</label>
                            <div class="input-container">
                                <input class="input-field" type="password" value="<?= $result[0]['password']; ?>" name="password">
                            </div>
                        </div>
                        <div class="input-base hiding-input">
                            <label for="" class="label">Nama Karyawan</label>
                            <div class="input-container">
                                <input class="input-field" type="text" value="<?= $result[0]['nama']; ?>" readonly>
                            </div>
                        </div>
                        <div class="input-base hiding-input">
                            <label for="" class="label">Username</label>
                            <div class="input-container">
                                <input class="input-field" type="text" value="<?= $result[0]['username']; ?>" name="username">
                            </div>
                        </div>
                </div>
                <div class="col-md-6 right-input">
                    <div class="input-base">
                        <label for="" class="label">Username</label>
                        <div class="input-container">
                            <input class="input-field" type="text" value="<?= $result[0]['username']; ?>" readonly>
                        </div>
                    </div>
                    <div class="input-base">
                        <label for="" class="label">Nama Karyawan</label>
                        <div class="input-container">
                            <input class="input-field" type="text" value="<?= $result[0]['nama']; ?>" name="nama" readonly>
                        </div>
                    </div>
                </div>
            </div>

            <div style="display: flex; align-items: flex-start; gap: 16px;align-self: stretch;">
                <button class="button-base" style="margin-left: 35px; margin-top: -40px;">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>