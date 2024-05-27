<header id="page-topbar">
        <div class="layout-width">
          <div class="navbar-header">
            <div class="d-flex">
              <!-- LOGO -->
              <div class="navbar-brand-box horizontal-logo">
                <a href="dashboard" class="logo logo-dark">
                  <span class="logo-sm">
                    <img src="assets/images/logo-sm.png" alt="" height="50" />
                  </span>
                  <span class="logo-lg">
                    <img src="assets/images/logo-bmtf.png" alt="" height="40" />
                  </span>
                </a>

                <a href="dashboard" class="logo logo-light">
                  <span class="logo-sm">
                    <img src="assets/images/logo-sm.png" alt="" height="50" />
                  </span>
                  <span class="logo-lg">
                    <img
                      src="assets/images/logo-light.png"
                      alt=""
                      height="40"
                    />
                  </span>
                </a>
              </div>

              <button
                type="button"
                class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                id="topnav-hamburger-icon"
              >
                <span class="hamburger-icon">
                  <span></span>
                  <span></span>
                  <span></span>
                </span>
              </button>
              <!-- App Search-->
              <form class="app-search d-none">
                <div class="position-relative">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search..."
                    autocomplete="off"
                    id="search-options"
                    value=""
                  />
                  <span class="mdi mdi-magnify search-widget-icon"></span>
                  <span
                    class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                    id="search-close-options"
                  ></span>
                </div>
                <div
                  class="dropdown-menu dropdown-menu-lg"
                  id="search-dropdown"
                >
                  <div data-simplebar style="max-height: 320px">
                    <!-- item-->
                    <div class="dropdown-header">
                      <h6 class="text-overflow text-muted mb-0 text-uppercase">
                        Recent Searches
                      </h6>
                    </div>

                    <div class="dropdown-item bg-transparent text-wrap">
                      <a
                        href="dashboard"
                        class="btn btn-soft-secondary btn-sm btn-rounded"
                        >how to setup <i class="mdi mdi-magnify ms-1"></i
                      ></a>
                      <a
                        href="dashboard"
                        class="btn btn-soft-secondary btn-sm btn-rounded"
                        >buttons <i class="mdi mdi-magnify ms-1"></i
                      ></a>
                    </div>
                    <!-- item-->
                    <div class="dropdown-header mt-2">
                      <h6 class="text-overflow text-muted mb-1 text-uppercase">
                        Pages
                      </h6>
                    </div>

                    <!-- item-->
                    <a
                      href="javascript:void(0);"
                      class="dropdown-item notify-item"
                    >
                      <i
                        class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"
                      ></i>
                      <span>Analytics Dashboard</span>
                    </a>

                    <!-- item-->
                    <a
                      href="javascript:void(0);"
                      class="dropdown-item notify-item"
                    >
                      <i
                        class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"
                      ></i>
                      <span>Help Center</span>
                    </a>

                    <!-- item-->
                    <a
                      href="javascript:void(0);"
                      class="dropdown-item notify-item"
                    >
                      <i
                        class="ri-user-settings-line align-middle fs-18 text-muted me-2"
                      ></i>
                      <span>My account settings</span>
                    </a>

                    <!-- item-->
                    <div class="dropdown-header mt-2">
                      <h6 class="text-overflow text-muted mb-2 text-uppercase">
                        Members
                      </h6>
                    </div>

                    <div class="notification-list">
                      <!-- item -->
                      <a
                        href="javascript:void(0);"
                        class="dropdown-item notify-item py-2"
                      >
                        <div class="d-flex">
                          <img
                            src="assets/images/users/avatar-2.jpg"
                            class="me-3 rounded-circle avatar-xs"
                            alt="user-pic"
                          />
                          <div class="flex-1">
                            <h6 class="m-0">Angela Bernier</h6>
                            <span class="fs-11 mb-0 text-muted">Manager</span>
                          </div>
                        </div>
                      </a>
                      <!-- item -->
                      <a
                        href="javascript:void(0);"
                        class="dropdown-item notify-item py-2"
                      >
                        <div class="d-flex">
                          <img
                            src="assets/images/users/avatar-3.jpg"
                            class="me-3 rounded-circle avatar-xs"
                            alt="user-pic"
                          />
                          <div class="flex-1">
                            <h6 class="m-0">David Grasso</h6>
                            <span class="fs-11 mb-0 text-muted"
                              >Web Designer</span
                            >
                          </div>
                        </div>
                      </a>
                      <!-- item -->
                      <a
                        href="javascript:void(0);"
                        class="dropdown-item notify-item py-2"
                      >
                        <div class="d-flex">
                          <img
                            src="assets/images/users/avatar-5.jpg"
                            class="me-3 rounded-circle avatar-xs"
                            alt="user-pic"
                          />
                          <div class="flex-1">
                            <h6 class="m-0">Mike Bunch</h6>
                            <span class="fs-11 mb-0 text-muted"
                              >React Developer</span
                            >
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>

                  <div class="text-center pt-3 pb-1">
                    <a
                      href="pages-search-results.html"
                      class="btn btn-primary btn-sm"
                      >View All Results <i class="ri-arrow-right-line ms-1"></i
                    ></a>
                  </div>
                </div>
              </form>
            </div>

            <div class="d-flex align-items-center">
              <div class="dropdown ms-sm-3 header-item topbar-user">
                <button
                  type="button"
                  class="btn"
                  id="page-header-user-dropdown"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="d-flex align-items-center">
                    <img
                      class="rounded-circle header-profile-user"
                      src="assets/images/users/admin.png"
                      alt="Header Avatar"
                    />
                    <span class="text-start ms-xl-2">
                      <span
                        class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"
                        >{{auth()->user()->name}}</span
                      >
                      <span
                        class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text"
                        >Admin Staff</span
                      >
                    </span>
                  </span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <!-- item-->
                  <h6 class="dropdown-header">Welcome Anna!</h6>
                  <a class="dropdown-item" href="profile"
                    ><i
                      class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"
                    ></i>
                    <span class="align-middle">My Account</span></a
                  >
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i>

                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- ========== App Menu 1 ========== -->
      <div class="app-menu navbar-menu">
        <div class="navbar-brand-box">
          <a href="dashboard" class="logo logo-dark">
            <span class="logo-sm">
              <img src="assets/images/logo-sm.png" alt="" height="22" />
            </span>
            <span class="logo-lg">
              <img src="assets/images/logo-bmtf.png" alt="" height="40" />
            </span>
          </a>
          <button
            type="button"
            class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover"
          >
            <i class="ri-record-circle-line"></i>
          </button>
        </div>

        <div id="scrollbar">
          <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
              <li class="menu-title"><span data-key="t-menu">Menu</span></li>
              <li class="nav-item">
                <a class="nav-link menu-link" href="dashboard">
                  <i class="las la-chart-pie"></i>
                  <span data-key="t-dashboards">Dashboards</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu-link" href="slider">
                  <i class="las la-city"></i>
                  <span data-key="t-dashboards">Home Slides</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu-link" href="project">
                  <i class="las la-ticket-alt"></i>
                  <span data-key="t-dashboards">Project</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu-link" href="news">
                  <i class="las la-money-check-alt"></i>
                  <span data-key="t-dashboards">News</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu-link" href="noc-notice">
                  <i class="las la-microphone-alt"></i>
                  <span data-key="t-dashboards">NOC & Notice</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu-link" href="career">
                  <i class="las la-user-secret"></i>
                  <span data-key="t-dashboards">Career Opportunity</span>
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link menu-link"
                  href="#gallery"
                  data-bs-toggle="collapse"
                  role="button"
                  aria-expanded="false"
                  aria-controls="coreHrDropdown"
                >
                  <i class="las la-receipt"></i>
                  <span data-key="t-dashboards">Gallery</span>
                </a>
                <div class="collapse menu-dropdown" id="gallery">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="gallery-image" class="nav-link">
                        All Image Gallery
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="gallery-video" class="nav-link">
                        All Video Gallery
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link menu-link" href="client">
                  <i class="las la-user-tie"></i>
                  <span data-key="t-dashboards">Client</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu-link" href="user">
                  <i class="las la-user-tie"></i>
                  <span data-key="t-dashboards">User</span>
                </a>
              </li>
            </ul>
            <ul class="navbar-nav pt-5" id="navbar-nav">
              <li class="menu-title"><span data-key="t-menu">Contact Form</span></li>

              <li class="nav-item">
                <a class="nav-link menu-link" href="contact">
                  <i class="las la-envelope"></i>
                  <span data-key="t-dashboards">Form Submissions</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="vertical-overlay"></div>