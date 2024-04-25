<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<main class="main">
        <!-- <p style="margin: 20px 0px 40px 150px">Dashboard</p> -->
        <div class="container container-user">
            <div class="col-md-12">
                <div class="frame-gray">
                    <div class="input-container" style="width: 75%">
                        <i class='bx bx-search'></i>
                        <input class="input-field" type="text" placeholder="Search" />
                    </div>
                    <button class="button-gray" style="width: fit-content">
                        <img src="img/filter.svg" alt="" />More Filter
                    </button>
                    <button id="tambahLaporan" class="button-base">
                        <img src="img/plus.svg" alt="" />Tambah Laporan
                    </button>
                </div>
            </div>
            <!-- TABLE -->
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="card-table">
                        <div class="card-header">
                            <div class="text-header">
                                Daftar Tugas<span class="span-info">100 Laporan</span>
                            </div>
                        </div>
                <div class="table">
                <table>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Deskripsi</th>
                    <th class="button-crud"></th>
                  </tr>
                  <?php $i = 1; ?>
                  <?php foreach ($result as $rs) : ?>
                  <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $rs['tanggal']; ?></td>
                    <td><?= $rs['deskripsi']; ?></td>
                    <td style="width: 100px;">
                            <a href="<?= base_url() . 'detail/' . $rs['id']; ?>"><i class='bx bx-show eye-show' style="color: black;"></i></a>
                            <a href="<?= base_url() . 'editUser/' . $rs['id']; ?>"><i class='bx bx-edit-alt' style="color: black; margin-left:20px;"></i></a>
                            <a href="<?= base_url() . 'hapuslaporan/' . $rs['id']; ?>"><i class='bx bx-trash' style="color: black; margin-left:20px;"></i></a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
              </table>
            </div>
            <div class="pagination">
                            <button class="button-gray" style="width: fit-content">
                                <img src="images/arrow-left.svg" alt="" />Prev
                            </button>
                            <div style="display: flex; gap: 1px">
                                <button class="button-gray">1</button>
                                <button class="button-gray">2</button>
                                <button class="button-gray">3</button>
                                <button class="button-gray">4</button>
                                <button class="button-gray">5</button>
                            </div>
                            <button class="button-gray" style="width: fit-content">
                                <img src="images/arrow-right.svg" alt="" />Next
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <!-- TAMBAH LAPORAN -->
    <div id="modal" class="modal">
        <div class="modal-wrap">
            <div class="modal-header">
                <div style="display: flex; flex-direction: column; align-items: flex-start; gap: 8px; flex: 1 0 0;">
                    <div class="text-18">Tambah Tugas</div>
                    <div class="text-14">Masukan data tugas dengan lengkap</div>
                </div>
                <div style="display: flex; align-items: center; gap: 12px;">
                    <button id="close" class="button-gray">Batal</button>
                    <form action="/tambahtugas" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <button class="button-base">Simpan</button>
                </div>
            </div>
            <div class="modal-content">
                <div class="input-base">
                    <label for="" class="label">Nama</label>
                    <div class="input-container container-label">
                        <input class="input-field" type="text" placeholder="Masukkan nama anda" name="nama_pegawai">
                    </div>
                </div>
                <div class="input-base">
                    <label for="" class="label">Nama Tugas</label>
                    <div class="input-container container-label">
                        <input class="input-field" type="text" placeholder="Masukkan nama tugas" name="nama_tugas">
                    </div>
                </div>
                <div class="input-base">
                    <label for="" class="label">Tanggal</label>
                    <div class="input-container container-label">
                        <input class="input-field" type="datetime-local" placeholder="Masukan jadwal" name="tanggal">
                    </div>
                </div>
                <div class="input-base">
                    <label for="" class="label">Deskripsi</label>
                    <div class="input-deskripsi">
                        <textarea name="deskripsi" id="" cols="45" rows="10"></textarea>
                    </div>
                </div>   
            </div>
        </div>
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