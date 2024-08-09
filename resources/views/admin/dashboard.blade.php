@extends('layouts.app')
@section('content')
    <div class="layout-page">
        <!-- Navbar -->

        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                    <i class="mdi mdi-menu mdi-24px"></i>
                </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                <!-- Search -->
                <div class="navbar-nav align-items-center">
                    <div class="nav-item d-flex align-items-center">
                        <i class="mdi mdi-magnify mdi-24px lh-0"></i>
                        <input type="text" class="form-control border-0 shadow-none bg-body" placeholder="Search."
                            aria-label="Search." />
                    </div>
                </div>
                <!-- /Search -->

                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <!-- Place this tag where you want the button to render. -->
                    <li class="nav-item lh-1 me-3">
                        <a class="github-button"
                            href="https://github.com/themeselection/materio-bootstrap-html-admin-template-free"
                            data-icon="octicon-star" data-size="large" data-show-count="true"
                            aria-label="Star themeselection/materio-bootstrap-html-admin-template-free on GitHub">Star</a>
                    </li>

                    <!-- User -->
                    <li class="nav-item navbar-dropdown dropdown-user dropdown">
                        <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);"
                            data-bs-toggle="dropdown">
                            <div class="avatar avatar-online">
                                <img src="/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end mt-3 py-2">
                            <li>
                                <a class="dropdown-item pb-2 mb-1" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-2 pe-1">
                                            <div class="avatar avatar-online">
                                                <img src="/assets/img/avatars/1.png" alt
                                                    class="w-px-40 h-auto rounded-circle" />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                                            <small class="text-muted">Admin</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="dropdown-divider my-1"></div>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="mdi mdi-account-outline me-1 mdi-20px"></i>
                                    <span class="align-middle">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="mdi mdi-cog-outline me-1 mdi-20px"></i>
                                    <span class="align-middle">Settings</span>
                                </a>
                            </li>
                            <li>
                                <div class="dropdown-divider my-1"></div>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                    <i class="mdi
                                    mdi-power me-1 mdi-20px"></i>
                                    <span class="align-middle">{{ __('Logout') }}</span>
                                </a>

                                {{-- <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a> --}}

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                    <!--/ User -->
                </ul>
            </div>
        </nav>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="row gy-4">
                    <!-- Congratulations card -->
                    <div class="col-md-12 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-1">Congratulations John! 🎉</h4>
                                <p class="pb-0">Best seller of the month</p>
                                <h4 class="text-primary mb-1">$42.8k</h4>
                                <p class="mb-2 pb-1">78% of target 🚀</p>
                                <a href="javascript:;" class="btn btn-sm btn-primary">View Sales</a>
                            </div>
                            <img src="/assets/img/icons/misc/triangle-light.png"
                                class="scaleX-n1-rtl position-absolute bottom-0 end-0" width="166"
                                alt="triangle background" data-app-light-img="icons/misc/triangle-light.png"
                                data-app-dark-img="icons/misc/triangle-dark.png" />
                            <img src="/assets/img/illustrations/trophy.png"
                                class="scaleX-n1-rtl position-absolute bottom-0 end-0 me-4 mb-4 pb-2" width="83"
                                alt="view sales" />
                        </div>
                    </div>
                    <!--/ Congratulations card -->

                    <!-- Transactions -->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="card-title m-0 me-2">Transactions</h5>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Update</a>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3"><span class="fw-medium">Total 48.5% growth</span> 😎 this
                                    month</p>
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-3 col-6">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar">
                                                <div class="avatar-initial bg-primary rounded shadow">
                                                    <i class="mdi mdi-trending-up mdi-24px"></i>
                                                </div>
                                            </div>
                                            <div class="ms-3">
                                                <div class="small mb-1">Sales</div>
                                                <h5 class="mb-0">245k</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar">
                                                <div class="avatar-initial bg-success rounded shadow">
                                                    <i class="mdi mdi-account-outline mdi-24px"></i>
                                                </div>
                                            </div>
                                            <div class="ms-3">
                                                <div class="small mb-1">Customers</div>
                                                <h5 class="mb-0">12.5k</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar">
                                                <div class="avatar-initial bg-warning rounded shadow">
                                                    <i class="mdi mdi-cellphone-link mdi-24px"></i>
                                                </div>
                                            </div>
                                            <div class="ms-3">
                                                <div class="small mb-1">Product</div>
                                                <h5 class="mb-0">1.54k</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar">
                                                <div class="avatar-initial bg-info rounded shadow">
                                                    <i class="mdi mdi-currency-usd mdi-24px"></i>
                                                </div>
                                            </div>
                                            <div class="ms-3">
                                                <div class="small mb-1">Revenue</div>
                                                <h5 class="mb-0">$88k</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Transactions -->

                    <!-- Weekly Overview Chart -->
                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <h5 class="mb-1">Weekly Overview</h5>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="weeklyOverviewDropdown"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="weeklyOverviewDropdown">
                                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Update</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="weeklyOverviewChart"></div>
                                <div class="mt-1 mt-md-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <h3 class="mb-0">45%</h3>
                                        <p class="mb-0">Your sales performance is 45% 😎 better compared to
                                            last month</p>
                                    </div>
                                    <div class="d-grid mt-3 mt-md-4">
                                        <button class="btn btn-primary" type="button">Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Weekly Overview Chart -->

                    <!-- Total Earnings -->
                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="card-title m-0 me-2">Total Earning</h5>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="totalEarnings" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalEarnings">
                                        <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="mb-3 mt-md-3 mb-md-5">
                                    <div class="d-flex align-items-center">
                                        <h2 class="mb-0">$24,895</h2>
                                        <span class="text-success ms-2 fw-medium">
                                            <i class="mdi mdi-menu-up mdi-24px"></i>
                                            <small>10%</small>
                                        </span>
                                    </div>
                                    <small class="mt-1">Compared to $84,325 last year</small>
                                </div>
                                <ul class="p-0 m-0">
                                    <li class="d-flex mb-4 pb-md-2">
                                        <div class="avatar flex-shrink-0 me-3">
                                            <img src="/assets/img/icons/misc/zipcar.png" alt="zipcar"
                                                class="rounded" />
                                        </div>
                                        <div
                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0">Zipcar</h6>
                                                <small>Vuejs, React & HTML</small>
                                            </div>
                                            <div>
                                                <h6 class="mb-2">$24,895.65</h6>
                                                <div class="progress bg-label-primary" style="height: 4px">
                                                    <div class="progress-bar bg-primary" style="width: 75%"
                                                        role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-4 pb-md-2">
                                        <div class="avatar flex-shrink-0 me-3">
                                            <img src="/assets/img/icons/misc/bitbank.png" alt="bitbank"
                                                class="rounded" />
                                        </div>
                                        <div
                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0">Bitbank</h6>
                                                <small>Sketch, Figma & XD</small>
                                            </div>
                                            <div>
                                                <h6 class="mb-2">$8,6500.20</h6>
                                                <div class="progress bg-label-info" style="height: 4px">
                                                    <div class="progress-bar bg-info" style="width: 75%"
                                                        role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-md-3">
                                        <div class="avatar flex-shrink-0 me-3">
                                            <img src="/assets/img/icons/misc/aviato.png" alt="aviato"
                                                class="rounded" />
                                        </div>
                                        <div
                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0">Aviato</h6>
                                                <small>HTML & Angular</small>
                                            </div>
                                            <div>
                                                <h6 class="mb-2">$1,2450.80</h6>
                                                <div class="progress bg-label-secondary" style="height: 4px">
                                                    <div class="progress-bar bg-secondary" style="width: 75%"
                                                        role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/ Total Earnings -->

                    <!-- Four Cards -->
                    <div class="col-xl-4 col-md-6">
                        <div class="row gy-4">
                            <!-- Total Profit line chart -->
                            <div class="col-sm-6">
                                <div class="card h-100">
                                    <div class="card-header pb-0">
                                        <h4 class="mb-0">$86.4k</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="totalProfitLineChart" class="mb-3"></div>
                                        <h6 class="text-center mb-0">Total Profit</h6>
                                    </div>
                                </div>
                            </div>
                            <!--/ Total Profit line chart -->
                            <!-- Total Profit Weekly Project -->
                            <div class="col-sm-6">
                                <div class="card h-100">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <div class="avatar">
                                            <div class="avatar-initial bg-secondary rounded-circle shadow">
                                                <i class="mdi mdi-poll mdi-24px"></i>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="totalProfitID"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalProfitID">
                                                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Update</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body mt-mg-1">
                                        <h6 class="mb-2">Total Profit</h6>
                                        <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                                            <h4 class="mb-0 me-2">$25.6k</h4>
                                            <small class="text-success mt-1">+42%</small>
                                        </div>
                                        <small>Weekly Project</small>
                                    </div>
                                </div>
                            </div>
                            <!--/ Total Profit Weekly Project -->
                            <!-- New Yearly Project -->
                            <div class="col-sm-6">
                                <div class="card h-100">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <div class="avatar">
                                            <div class="avatar-initial bg-primary rounded-circle shadow-sm">
                                                <i class="mdi mdi-wallet-travel mdi-24px"></i>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="newProjectID"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="newProjectID">
                                                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Update</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body mt-mg-1">
                                        <h6 class="mb-2">New Project</h6>
                                        <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                                            <h4 class="mb-0 me-2">862</h4>
                                            <small class="text-danger mt-1">-18%</small>
                                        </div>
                                        <small>Yearly Project</small>
                                    </div>
                                </div>
                            </div>
                            <!--/ New Yearly Project -->
                            <!-- Sessions chart -->
                            <div class="col-sm-6">
                                <div class="card h-100">
                                    <div class="card-header pb-0">
                                        <h4 class="mb-0">2,856</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="sessionsColumnChart" class="mb-3"></div>
                                        <h6 class="text-center mb-0">Sessions</h6>
                                    </div>
                                </div>
                            </div>
                            <!--/ Sessions chart -->
                        </div>
                    </div>
                    <!--/ Total Earning -->
                </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
                <div class="container-xxl">
                    <div
                        class="footer-container d-flex align-items-center justify-content-between py-3 flex-md-row flex-column">
                        <div class="text-body mb-2 mb-md-0">
                            ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            , made with <span class="text-danger"><i class="tf-icons mdi mdi-heart"></i></span> by
                            <a href="https://themeselection.com" target="_blank"
                                class="footer-link fw-medium">ThemeSelection</a>
                        </div>
                        <div class="d-none d-lg-inline-block">
                            <a href="https://themeselection.com/license/" class="footer-link me-3"
                                target="_blank">License</a>
                            <a href="https://themeselection.com/" target="_blank" class="footer-link me-3">More
                                Themes</a>

                            <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/documentation/"
                                target="_blank" class="footer-link me-3">Documentation</a>

                            <a href="https://github.com/themeselection/materio-bootstrap-html-admin-template-free/issues"
                                target="_blank" class="footer-link">Support</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
    </div>
@endsection
