<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<main class="main">
        <!-- <p style="margin: 20px 0px 40px 150px">Dashboard</p> -->
        <div class="container container-user">
            <div class="col-md-12">
            <div class="frame-gray">
                <div class="input-container" style="width: 75%;">
                    <i class="input-logo">
                        <img src="/img/search.svg" alt="">
                    </i>
                    <input class="input-field" type="text" placeholder="Search">
                </div>
                <button class="button-down">PDF</button>
                <div class="row">
                    <div class="col">
                        <form method="post" class="form-date">
                            <input class="input-container" type="date"  name="tgl_mulai" placeholder="Tanggal Mulai">
                            <input class="input-container" type="date"  name="tgl_selesai" placeholder="Tanggal Mulai">
                            <button type="submit" name="filter_tgl">Submit</button>
                        </form>
                    </div>
                </div>
                <!-- <button class="button-gray" style="width: fit-content;"><img src="/img/download-cloud.svg" alt="">download</button> -->
            </div>
            </div>
            <!-- TABLE -->
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="card-table">
                        <div class="card-header">
                            <div class="text-header">
                                Daftar  Laporan<span class="span-info">100 Laporan</span>
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
                            <a href="<?= base_url() . 'editrekap/' . $rs['id']; ?>"><i class='bx bx-edit-alt' style="color: black; margin-left:20px;"></i></a>
                            <a href="<?= base_url() . 'hapusrekap/' . $rs['id']; ?>"><i class='bx bx-trash' style="color: black; margin-left:20px;"></i></a>
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
</main>
<?= $this->endSection(); ?>