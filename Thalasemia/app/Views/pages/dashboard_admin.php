<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<main class="main">
  <div class="container">
    <div class="col-md-12">
      <ul>
        <li class="first-chart">
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <div class="text-header">Total User</div>
                <img src="/img/more-vertical.svg" alt="" style="
                    display: flex;
                    flex-direction: column;
                    align-items: flex-start;
                  " />
              </div>
              <div class="number-chart">
                <div class="number-badge">
                  <div class="text-number">67</div>
                  <div class="text-header">
                    <div class="card-change">
                      <div class="change">
                        <img src="/img/arrow-up.svg" alt="" style="height: 20px; width: 20px" />
                        <div class="text-change">40%</div>
                      </div>
                      <div class="text-14">vs Last Month</div>
                    </div>
                  </div>
                </div>
                <div class="card-chart">
                  <svg xmlns="http://www.w3.org/2000/svg" width="131" height="66" viewBox="0 0 131 66" fill="none">
                    <path d="M129.667 1C108.871 2.73299 107.583 44.2218 87.0001 49C70.027 52.9402 61.4323 30.5738 44.3334 33C25.7871 35.6316 19.8522 58.9382 1.66675 65H129.667V1Z" fill="#ECFDF3" />
                    <path d="M129.667 1C108.871 2.73299 107.583 44.2218 87.0001 49C70.027 52.9402 61.4323 30.5738 44.3334 33C25.7871 35.6316 19.8522 58.9382 1.66675 65H129.667V1Z" fill="url(#paint0_linear_247_1003)" />
                    <path d="M1.66675 65C19.8522 58.9382 25.7871 35.6316 44.3334 33C61.4323 30.5738 70.027 52.9402 87.0001 49C107.583 44.2218 108.871 2.73299 129.667 1" stroke="#12B76A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <defs>
                      <linearGradient id="paint0_linear_247_1003" x1="65.6667" y1="1" x2="65.6667" y2="65" gradientUnits="userSpaceOnUse">
                        <stop offset="0.641167" stop-color="white" stop-opacity="0" />
                        <stop offset="1" stop-color="white" />
                      </linearGradient>
                    </defs>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <div class="text-header">Total Pekerjaan</div>
                <img src="/img/more-vertical.svg" alt="" style="
                    display: flex;
                    flex-direction: column;
                    align-items: flex-start;
                  " />
              </div>
              <div class="number-chart">
                <div class="number-badge">
                  <div class="text-number">1,234</div>
                  <div class="text-header">
                    <div class="card-change">
                      <div class="change">
                        <img src="/img/arrow-down.svg" alt="" style="height: 20px; width: 20px" />
                        <div class="text-change">10%</div>
                      </div>
                      <div class="text-14">vs Last Month</div>
                    </div>
                  </div>
                </div>
                <div class="card-chart">
                  <svg xmlns="http://www.w3.org/2000/svg" width="131" height="66" viewBox="0 0 131 66" fill="none">
                    <path d="M1.3335 1C22.1294 2.73299 23.4172 44.2218 44.0002 49C60.9733 52.9402 69.568 30.5738 86.6668 33C105.213 35.6316 111.148 58.9382 129.333 65H1.3335V1Z" fill="#FEF3F2" />
                    <path d="M1.3335 1C22.1294 2.73299 23.4172 44.2218 44.0002 49C60.9733 52.9402 69.568 30.5738 86.6668 33C105.213 35.6316 111.148 58.9382 129.333 65H1.3335V1Z" fill="url(#paint0_linear_247_6754)" />
                    <path d="M129.333 65C111.148 58.9382 105.213 35.6316 86.6668 33C69.568 30.5738 60.9733 52.9402 44.0002 49C23.4172 44.2218 22.1294 2.73299 1.33349 1" stroke="#F04438" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <defs>
                      <linearGradient id="paint0_linear_247_6754" x1="65.3335" y1="1" x2="65.3335" y2="65" gradientUnits="userSpaceOnUse">
                        <stop offset="0.641167" stop-color="white" stop-opacity="0" />
                        <stop offset="1" stop-color="white" />
                      </linearGradient>
                    </defs>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
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
                  <th>Nama Tugas</th>
                  <th>Deskripsi</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php $i = 1; ?>
                  <?php foreach ($result as $rs) : ?>
                    <td><?= $i++; ?></td>
                    <td>
                      <div class="table-avatar table-text-wrapper">
                        <img class="table-image" src="/img/<?= $rs['image']; ?>" alt="" />
                        <?= $rs['nama']; ?>
                      </div>
                    </td>
                    <td><span class="span-success"><?= $rs['nama_tugas']; ?></span></td>
                    <td><?= $rs['deskripsi']; ?></td>
                    <td><a href="<?= base_url() . 'detaillaporan/' . $rs['id']; ?>"><img src="/img/eye.svg" alt=""></a></td>
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