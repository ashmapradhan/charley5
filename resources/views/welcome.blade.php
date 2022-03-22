<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
<body>
    <div id="wrapper">
        <div class="topbar">
            <div class="topbar-left">
                <a href="#" class="logo">
                    <span > <i class="mdi mdi-camera-control"></i> Hague Electric </span>
                    <span class="logo-sm">
                            <i class="mdi mdi-camera-control"></i>
                        </span>
                </a>
            </div>
            <nav class="navbar-custom">
                <ul class="float-right">
                            <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power text-danger"></i> Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">
                <div id="sidebar-menu">
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">Menu</li>
                        <li>
                            <a href="#" class="waves-effect">
                                <i class="icon-todolist"></i> 
                                <span> Dashboard </span>
                            </a>
                        </li>
                        <li>
                            <a href="placeholder">
                            <i class="icon-share"></i><span> Employees Info </span></a>
                        </li>
                        <li>
                            <a href="placeholder">
                            <i class="mdi mdi-briefcase-check"></i><span> Add a new job </span></a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <h4 class="page-title">Dashboard</h4>
                            </div>
                            <div class="col-sm-6">
                            <i class="bi bi-plus"></i>
                            </div>
                        </div>
                    </div>
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="mini-stat-icon float-right">
                                        <i class="mdi mdi-briefcase-check bg-success text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-16">Job Example 1</h5>
                                    </div>
                                    <h3 class="mt-4">Job XYZ</h3>
                                    <div class="progress mt-4" style="height: 4px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="text-muted mt-2 mb-0">Completion<span class="float-right">88%</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="mini-stat-icon float-right">
                                        <i class="mdi mdi-briefcase-check bg-success text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-16">Job Example 2</h5>
                                    </div>
                                    <h3 class="mt-4">Job XZY</h3>
                                    <div class="progress mt-4" style="height: 4px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="text-muted mt-2 mb-0">Completion<span class="float-right">30%</span></p>
                                </div>
                            </div>
                        </div>
                        </div>
                    <div class="row">
                </div>
            </div>
            <footer class="footer">
            </footer>
        </div>
    </div>
</body>
</html>