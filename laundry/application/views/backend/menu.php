<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laundry</title>

    <style>
        .bg_menu{
            background-image: linear-gradient(green, yellow);
        }
    </style>
</head>

<body>
    <ul class="navbar-nav bg_menu bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-2">Laundry <sup>Online</sup></div>
    </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url() ?>dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>konsumen">
                <i class="fas fa-fw fa-users"></i>
                <span>Data Konsumen</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>paket">
                <i class="fas fa-fw fa-box-open"></i>
                <span>Data Paket</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>transaksi/tambah">
                <i class="fas fa-fw fa-dollar-sign"></i>
                <span>Data Transaksi</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>transaksi/riwayat">
                <i class="fas fa-fw fa-history"></i>
                <span>Riwayat Transaksi</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>laporan">
                <i class="fas fa-fw fa-file-alt"></i>
                <span>Laporan</span>
            </a>
        </li>

        <hr class="sidebar-divider d-none d-md-block">

        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-fw fa-sign-out-alt"></i>
               <span>Logout</span> 
            </a>
        </li>

        <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah anda yakin untuk keluar sekarang? silahkan konfirmasi</div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="<?= base_url() ?>panel/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
