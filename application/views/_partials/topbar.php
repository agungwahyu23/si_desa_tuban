<nav class="topnav navbar navbar-expand shadow navbar-light bg-light" id="sidenavAccordion">
    <div class="logo d-none d-sm-block">
        <a class="navbar-brand my-auto" href="<?php echo base_url('admin/Dashboard') ?>">
            <?php echo SITE_NAME ?>
        </a>
    </div>
    <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 ml-5" id="sidebarToggle" href="#">
        <i data-feather="menu"></i>
    </button>
    <ul class="navbar-nav align-items-center ml-auto">
        <li class="nav-item dropdown no-caret mr-3 dropdown-user">
            <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="img-fluid" src="<?php echo base_url('img/admin/user.png') ?>" />
            </a>
            <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                <h6 class="dropdown-header d-flex align-items-center">
                    <img class="dropdown-user-img" src="<?php echo base_url('img/admin/user.png') ?>" />
                    <div class="dropdown-user-details">
                        <div class="dropdown-user-details-name"><?= $Pengguna['Email'] ?></div>
                        <div class="dropdown-user-details-email"><?= $Pengguna['Nama'] ?></div>
                    </div>
                </h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo base_url('admin/User_Profile') ?>">
                    <div class="dropdown-item-icon"><i data-feather="user"></i></div>
                    Akun
                </a>
                <a class="dropdown-item" href="<?php echo base_url('admin/User_Profile/gantiEmail') ?>">
                    <div class="dropdown-item-icon"><i data-feather="mail"></i></div>
                    Ganti Email
                </a>
                <a class="dropdown-item" href="<?php echo base_url('admin/User_Profile/gantiPassword') ?>">
                    <div class="dropdown-item-icon"><i data-feather="lock"></i></div>
                    Ganti Password
                </a>
                <a class="dropdown-item" href="onclick=" confirm_modal() data-toggle="modal" data-target="#modalLogout">
                    <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                    Keluar
                </a>
            </div>
        </li>
    </ul>
</nav>

<div class="modal fade" id="modalLogout" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">Logout</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">??</span>
                </button>
            </div>
            <div class="modal-body">Are you sure to logout?</div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger" type="button" href="<?= base_url('admin/Login/logout') ?>">Yes</a>
            </div>
        </div>
    </div>
</div>