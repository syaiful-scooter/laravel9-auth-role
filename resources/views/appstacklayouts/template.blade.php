<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
    <meta name="author" content="Bootlab">

    <title><?= $title ?: ""; ?></title>

    <!-- PICK ONE OF THE STYLES BELOW -->
    <!-- <link href="{{ asset('') }}assets_appstack/css/corporate.css" rel="stylesheet"> -->
    <link href="{{ asset('assets_appstack/css/classic.css')}}" rel="stylesheet">
    <!-- <link href="{{ asset('') }}assets_appstack/css/modern.css" rel="stylesheet"> -->

    <!-- BEGIN SETTINGS -->
    <!-- You can remove this after picking a style -->
    <style>
        body {
            opacity: 0;
        }
    </style>
    <!-- <script src="{{ asset('') }}assets_appstack/js/settings.js"></script> -->
    <!-- END SETTINGS -->
</head>

<body>
    <div class="wrapper">
        @yield('appstack_layout.sidebar')

        <div class="main">
            <nav class="navbar navbar-expand navbar-light bg-white">
                <a class="sidebar-toggle d-flex mr-2">
                    <i class="hamburger align-self-center"></i>
                </a>

                <form class="form-inline d-none d-sm-inline-block">
                    <input class="form-control form-control-no-border mr-sm-2" type="text" placeholder="Search projects..." aria-label="Search">
                </form>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="{{ asset('assets_appstack#') }}" id="messagesDropdown" data-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="message-circle"></i>
                                    <span class="indicator">4</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="messagesDropdown">
                                <div class="dropdown-menu-header">
                                    <div class="position-relative">
                                        4 New Messages
                                    </div>
                                </div>
                                <div class="list-group">
                                    <a href="{{ asset('assets_appstack#') }}" class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-2">
                                                <img src="{{ asset('assets_appstack/img/avatars/avatar-5.jpg') }}" class="avatar img-fluid rounded-circle" alt="Ashley Briggs">
                                            </div>
                                            <div class="col-10 pl-2">
                                                <div class="text-dark">Ashley Briggs</div>
                                                <div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
                                                <div class="text-muted small mt-1">15m ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{ asset('assets_appstack#') }}" class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-2">
                                                <img src="{{ asset('assets_appstack/img/avatars/avatar-2.jpg') }}" class="avatar img-fluid rounded-circle" alt="Carl Jenkins">
                                            </div>
                                            <div class="col-10 pl-2">
                                                <div class="text-dark">Carl Jenkins</div>
                                                <div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{ asset('assets_appstack#') }}" class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-2">
                                                <img src="{{ asset('assets_appstack/img/avatars/avatar-4.jpg') }}" class="avatar img-fluid rounded-circle" alt="Stacie Hall">
                                            </div>
                                            <div class="col-10 pl-2">
                                                <div class="text-dark">Stacie Hall</div>
                                                <div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
                                                <div class="text-muted small mt-1">4h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{ asset('assets_appstack#') }}" class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-2">
                                                <img src="{{ asset('assets_appstack/img/avatars/avatar-3.jpg') }}" class="avatar img-fluid rounded-circle" alt="Bertha Martin">
                                            </div>
                                            <div class="col-10 pl-2">
                                                <div class="text-dark">Bertha Martin</div>
                                                <div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
                                                <div class="text-muted small mt-1">5h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="{{ asset('assets_appstack#') }}" class="text-muted">Show all messages</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="{{ asset('assets_appstack#') }}" id="alertsDropdown" data-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="bell-off"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
                                <div class="dropdown-menu-header">
                                    4 New Notifications
                                </div>
                                <div class="list-group">
                                    <a href="{{ asset('assets_appstack#') }}" class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-2">
                                                <i class="text-danger" data-feather="alert-circle"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Update completed</div>
                                                <div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{ asset('assets_appstack#') }}" class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-2">
                                                <i class="text-warning" data-feather="bell"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Lorem ipsum</div>
                                                <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
                                                <div class="text-muted small mt-1">6h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{ asset('assets_appstack#') }}" class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-2">
                                                <i class="text-primary" data-feather="home"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Login from 192.186.1.1</div>
                                                <div class="text-muted small mt-1">8h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{ asset('assets_appstack#') }}" class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-2">
                                                <i class="text-success" data-feather="user-plus"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">New connection</div>
                                                <div class="text-muted small mt-1">Anna accepted your request.</div>
                                                <div class="text-muted small mt-1">12h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="{{ asset('assets_appstack#') }}" class="text-muted">Show all notifications</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-flag dropdown-toggle" href="{{ asset('assets_appstack#') }}" id="languageDropdown" data-toggle="dropdown">
                                <img src="{{ asset('assets_appstack/img/flags/us.png') }}" alt="English" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="languageDropdown">
                                <a class="dropdown-item" href="{{ asset('assets_appstack#') }}">
                                    <img src="{{ asset('assets_appstack/img/flags/us.png') }}" alt="English" width="20" class="align-middle mr-1" />
                                    <span class="align-middle">English</span>
                                </a>
                                <a class="dropdown-item" href="{{ asset('assets_appstack#') }}">
                                    <img src="{{ asset('assets_appstack/img/flags/es.png') }}" alt="Spanish" width="20" class="align-middle mr-1" />
                                    <span class="align-middle">Spanish</span>
                                </a>
                                <a class="dropdown-item" href="{{ asset('assets_appstack#') }}">
                                    <img src="{{ asset('assets_appstack/img/flags/de.png') }}" alt="German" width="20" class="align-middle mr-1" />
                                    <span class="align-middle">German</span>
                                </a>
                                <a class="dropdown-item" href="{{ asset('assets_appstack#') }}">
                                    <img src="{{ asset('assets_appstack/img/flags/nl.png') }}" alt="Dutch" width="20" class="align-middle mr-1" />
                                    <span class="align-middle">Dutch</span>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="{{ asset('assets_appstack#') }}" data-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="{{ asset('assets_appstack#') }}" data-toggle="dropdown">
                                <img src="{{ asset('assets_appstack/img/avatars/avatar.jpg') }}" class="avatar img-fluid rounded-circle mr-1" alt="Chris Wood" /> <span class="text-dark">Chris Wood</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ asset('assets_appstackpages-profile.html') }}"><i class="align-middle mr-1" data-feather="user"></i> Profile</a>
                                <a class="dropdown-item" href="{{ asset('assets_appstack#') }}"><i class="align-middle mr-1" data-feather="pie-chart"></i> Analytics</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ asset('assets_appstackpages-settings.html') }}">Settings & Privacy</a>
                                <a class="dropdown-item" href="{{ asset('assets_appstack#') }}">Help</a>
                                <a class="dropdown-item" href="{{ asset('assets_appstack#') }}">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- @yield('content') -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-left">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-muted" href="{{ asset('assets_appstack#') }}">Support</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="{{ asset('assets_appstack#') }}">Help Center</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="{{ asset('assets_appstack#') }}">Privacy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="{{ asset('assets_appstack#') }}">Terms of Service</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 text-right">
                            <p class="mb-0">
                                &copy; 2019 - <a href="{{ asset('assets_appstackindex.html') }}" class="text-muted">AppStack</a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="{{ asset('assets_appstack/js/app.js') }}"></script>

    <!-- <script>
        $(function() {
            // Bar chart
            new Chart(document.getElementById("chartjs-dashboard-bar"), {
                type: "bar",
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        label: "Last year",
                        backgroundColor: window.theme.primary,
                        borderColor: window.theme.primary,
                        hoverBackgroundColor: window.theme.primary,
                        hoverBorderColor: window.theme.primary,
                        data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79]
                    }, {
                        label: "This year",
                        backgroundColor: "#E8EAED",
                        borderColor: "#E8EAED",
                        hoverBackgroundColor: "#E8EAED",
                        hoverBorderColor: "#E8EAED",
                        data: [69, 66, 24, 48, 52, 51, 44, 53, 62, 79, 51, 68]
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            gridLines: {
                                display: false
                            },
                            stacked: false,
                            ticks: {
                                stepSize: 20
                            }
                        }],
                        xAxes: [{
                            barPercentage: .75,
                            categoryPercentage: .5,
                            stacked: false,
                            gridLines: {
                                color: "transparent"
                            }
                        }]
                    }
                }
            });
        });
    </script>
    <script>
        $(function() {
            $("#datetimepicker-dashboard").datetimepicker({
                inline: true,
                sideBySide: false,
                format: "L"
            });
        });
    </script>
    <script>
        $(function() {
            // Line chart
            new Chart(document.getElementById("chartjs-dashboard-line"), {
                type: "line",
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        label: "Sales ($)",
                        fill: true,
                        backgroundColor: "transparent",
                        borderColor: window.theme.primary,
                        data: [2015, 1465, 1487, 1796, 1387, 2123, 2866, 2548, 3902, 4938, 3917, 4927]
                    }, {
                        label: "Orders",
                        fill: true,
                        backgroundColor: "transparent",
                        borderColor: window.theme.tertiary,
                        borderDash: [4, 4],
                        data: [928, 734, 626, 893, 921, 1202, 1396, 1232, 1524, 2102, 1506, 1887]
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    tooltips: {
                        intersect: false
                    },
                    hover: {
                        intersect: true
                    },
                    plugins: {
                        filler: {
                            propagate: false
                        }
                    },
                    scales: {
                        xAxes: [{
                            reverse: true,
                            gridLines: {
                                color: "rgba(0,0,0,0.05)"
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                stepSize: 500
                            },
                            display: true,
                            borderDash: [5, 5],
                            gridLines: {
                                color: "rgba(0,0,0,0)",
                                fontColor: "#fff"
                            }
                        }]
                    }
                }
            });
        });
    </script>
    <script>
        $(function() {
            // Pie chart
            new Chart(document.getElementById("chartjs-dashboard-pie"), {
                type: "pie",
                data: {
                    labels: ["Direct", "Affiliate", "E-mail", "Other"],
                    datasets: [{
                        data: [2602, 1253, 541, 1465],
                        backgroundColor: [
                            window.theme.primary,
                            window.theme.warning,
                            window.theme.danger,
                            "#E8EAED"
                        ],
                        borderColor: "transparent"
                    }]
                },
                options: {
                    responsive: !window.MSInputMethodContext,
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    }
                }
            });
        });
    </script>
    <script>
        $(function() {
            $("#datatables-dashboard-projects").DataTable({
                pageLength: 6,
                lengthChange: false,
                bFilter: false,
                autoWidth: false
            });
        });
    </script> -->

</body>

</html>