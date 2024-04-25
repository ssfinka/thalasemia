<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<main class="main">
    <!-- <p style="margin: 20px 0px 40px 150px">Dashboard</p> -->
    <div class="container">
        <div class="col-md-12">
            <div class="frame-gray">
                <!-- <div class="input-container" style="width: 75%">
                    <i class="input-logo">
                        <img src="/img/search.svg" alt="" />
                    </i>
                    <input class="input-field" type="text" placeholder="Search" />
                </div>
                <button class="button-gray" style="width: fit-content">
                    <img src="/img/filter.svg" alt="" />More Filter
                </button> -->
                <button id="tambahLaporan" class="button-base">
                    <img src="/img/plus.svg" alt="" />Tambah Pengguna
                </button>
            </div>
        </div>
        <!-- TABLE -->
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card-table">
                    <div class="card-header">
                        <div class="text-header">
                            Anggota Tim <span class="span-info">100 Anggota</span>
                        </div>
                    </div>
                    <div class="table">
                        <table id="myTable" class="display">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Email</th>
                                    <th>No. Telp</th>
                                    <th>Peran</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php $i = 1; ?>
                                    <?php foreach ($result as $rs) : ?>
                                        <td><?= $i++; ?></td>
                                        <td>
                                            <div class="table-text-wrapper">
                                                <img class="table-image" src="/img/<?= $rs['image']; ?>" alt="" />
                                                <?= $rs['nama']; ?>
                                            </div>
                                        </td>
                                        <td><?= $rs['tanggal_lahir']; ?></td>
                                        <td><?= $rs['email']; ?></td>
                                        <td><?= $rs['no_telp']; ?></td>
                                        <td><?= $rs['peran']; ?></td>
                                        <td style="width: 80px; margin: 0; padding: 0;">
                                        <a href="<?= base_url() . 'detailuser/' . $rs['id']; ?>"><img src="/img/eye.svg" alt=""></a>
                                            <a href="<?= base_url() . 'hapususers/' . $rs['id']; ?>"><img src="/img/trash.svg" alt=""></a>
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

    <!-- TAMBAH LAPORAN -->

    <div id="modal" class="modal">
        <div class="modal-wrap">
            <div class="modal-header">
                <div style="
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                gap: 8px;
                flex: 1 0 0;
              ">
                    <div class="text-18">Tambah Pengguna</div>
                    <div class="text-14">
                        Masukan data laporan pekerjaan dengan lengkap
                    </div>
                </div>
                <div style="display: flex; align-items: center; gap: 12px">
                    <button id="close" class="button-gray">Batal</button>
                    <form action="/tambahusers" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <button class="button-base">Simpan</button>
                </div>
            </div>
            <div class="modal-content">
                <div class="input-base">
                    <label for="" class="label">Nama Karyawan</label>
                    <div class="input-container">
                        <input class="input-field" type="text" placeholder="Masukan nama Lengkap" name="nama_karyawan" />
                    </div>
                </div>
                <div class="input-base">
                    <label for="" class="label">Tanggal Lahir</label>
                    <div class="input-container">
                        <input class="input-field" type="date" placeholder="DD/MM/YYYY" name="tanggal_lahir" />
                    </div>
                </div>
                <div class="input-base">
                    <label for="" class="label">Email</label>
                    <div class="input-container">
                        <input class="input-field" type="email" placeholder="user@email.com" name="email" />
                    </div>
                </div>
                <div class="input-base">
                    <label for="" class="label">No telp</label>
                    <div class="input-container">
                        <input class="input-field" type="text" placeholder="08xxxxxxxxxxxxxxx" name="no_telp" />
                    </div>
                </div>
                <div class="input-base">
                    <label for="" class="label">Peran</label>
                    <div class="input-container">
                        <select id="status" class="input-field" name="peran">
                            <option value="-">--Pilih Peran--</option>
                            <option value="admin">Admin</option>
                            <option value="karyawan">Karyawan</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        </form>
    </div>

</main>

<script>
    // Get the modal
    var modal = document.getElementById('modal');

    // Get the button that opens the modal
    var btn = document.getElementById('tambahLaporan');

    // Get the <span> element that closes the modal
    var batal = document.getElementById('close');

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        modal.style.display = 'block';
    };

    // When the user clicks on <span> (x), close the modal
    batal.onclick = function() {
        modal.style.display = 'none';
    };

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    };
</script>
<?= $this->endSection(); ?>