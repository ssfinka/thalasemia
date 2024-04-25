<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<main class="main">
    <div class="container">
      <div class="col-md-12">
        <ul>
          <div class="col-md-4 first-card">
            <div class="card">
                <div class="card-header">
                    <div class="text-header">Selamat datang, Olivia!</div>
                </div>
                <div class="number-chart calendar">
                    <div class="number-badge">
                        <div class="text-header">
                            <div class="card-change first-card">
                                <i class='bx bx-calendar'></i>
                                <div class="text-14">Senin, 11 Maret 2024</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-chart">
                        <img src="img/undraw_completed_m9ci.svg" style="width: 120px; height: 120px; margin-top: -68px;">
                    </div>
                </div>
            </div>
          </div>
          <li class="first-chart first-chart-user">
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  <div class="text-header">Total Laporan</div>
                </div>
                <div class="number-chart">
                  <div class="number-badge input-number">
                    <?= $totalLaporan ?>
                  </div>
                  <div class="card-chart">
                    <img src="img/undraw_save_to_bookmarks_re_8ajf.svg" style="width: 150px; height: 170; margin-top: -50px; ">
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="second-chart">
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  <div class="text-header">Total Pekerjaan</div>
                </div>
                <div class="number-chart">
                  <div class="number-badge">
                    <div class="text-number">1,234</div>
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
          </li>
        </ul>
      </div>
    </div>
</main>

<?= $this->endSection(); ?>