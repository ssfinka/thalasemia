<input type="checkbox" id="check">
<!--header area start-->
<header>
    <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
    </label>
    <div class="left_area">
        <img src="/img/logo.png" class="mobile_profile_image" alt="">
    </div>
    <div class="right_area">
        <img src="/img/avatar-profile-photo.png" class="logout_btn" alt="">
        <!-- <a href="#" class="logout_btn"><i class="fas fa-sign-out-alt"></i> Logout</a> -->
    </div>
</header>
<!--header area end-->
<!--mobile navigation bar start-->
<div class="mobile_nav">
    <div class="nav_bar">
        <div class="input-container input-user">
            <i class="input-logo">
                <img src="images/search.svg" alt="" />
            </i>
            <input class="input-field" type="text" placeholder="Search" />
        </div>
        <i class="fa fa-bars nav_btn"></i>
    </div>
    <div class="mobile_nav_items">
        <a href="<?= base_url(); ?>dashboard"><i class="far fa-chart-bar"></i></i><span>Dashboard</span></a>
        <a href="<?= base_url(); ?>laporan"><i class="far fa-file-alt"></i><span>Laporan
                <a href="<?= base_url(); ?>users"><i class="far fa-user"></i><span>Users</span></a>
                <a href="<?= base_url(); ?>setting"><i class="fas fa-cog"></i><span>Settings</span></a>

                
            <a href="<?= base_url(); ?>dashboardUser"><i class='bx bx-bar-chart'></i><span>Dashboard</span></a>
            <a href="<?= base_url(); ?>tugas"><i class='bx bx-layer'></i><span>Laporan</span></a>
                    <a href="<?= base_url(); ?>rekap"><i class='bx bx-file'></i><span>Rekap</span></a>
    </div>
</div>
<!--mobile navigation bar end-->
<!--sidebar start-->
<div class="sidebar">
    <div class="profile_info">
        <div class="input-container">
            <i class="input-logo">
                <img src="/img/search.svg" alt="" />
            </i>
            <input class="input-field" type="text" placeholder="Search" />
        </div>
    </div>
    <a href="<?= base_url(); ?>dashboard"><i class="far fa-chart-bar"></i></i><span>Dashboard</span></a>
    <br>
    <span class="judul">Kelola</span>
    <a href="<?= base_url(); ?>laporan"><i class="far fa-file-alt"></i><span>Laporan</span></a>
    <a href="<?= base_url(); ?>users"><i class="far fa-user"></i><span>Users</span></a>
    <a href="<?= base_url(); ?>setting"><i class="fas fa-cog"></i><span>Settings</span></a>
    
    <!-- User -->
    <a href="<?= base_url(); ?>dashboardUser"><i class='bx bx-bar-chart'></i><span>Dashboard</span></a>
    <a href="<?= base_url(); ?>tugas"><i class='bx bx-layer'></i><span>Laporan</span></a>
        <a href="<?= base_url(); ?>rekap"><i class='bx bx-file'></i><span>Rekap</span></a>
    <br><br><br><br>
    <a href="<?= base_url(); ?>logout"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>

</div>
<!--sidebar end-->

<div class="content">
    <?= $this->renderSection('content'); ?>
</div>