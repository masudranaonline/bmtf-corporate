<!-- @format -->

<!DOCTYPE html>
<html
  lang="en"
  data-layout="vertical"
  data-topbar="dark"
  data-sidebar="light"
  data-sidebar-size="lg"
>
  <x-assets title="Dashboard"/>

  <body>
    <!-- Begin page -->
    <div id="layout-wrapper">
      <x-header/>
      <div class="main-content">
        <!-- Start Page Content -->
        <div class="page-content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-animate">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="flex-grow-1 overflow-hidden">
                        <p
                          class="text-uppercase fw-medium text-muted text-truncate mb-0"
                        >
                          Total Active Project
                        </p>
                      </div>
                    </div>
                    <div
                      class="d-flex align-items-end justify-content-between mt-4"
                    >
                      <div>
                        <h4 class="fs-36 fw-semibold ff-secondary mb-4">{{$project}}</h4>
                        <a href="project" class="text-decoration-underline"
                          >View All Project</a
                        >
                      </div>
                      <div class="avatar-sm flex-shrink-0">
                        <span
                          class="avatar-title bg-success-subtle rounded fs-3"
                        >
                          <i class="bx bx-user text-success"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- end card body -->
                </div>
                <!-- end card -->
              </div>
              <!-- end col -->

              <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-animate">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="flex-grow-1 overflow-hidden">
                        <p
                          class="text-uppercase fw-medium text-muted text-truncate mb-0"
                        >
                          Active News
                        </p>
                      </div>
                    </div>
                    <div
                      class="d-flex align-items-end justify-content-between mt-4"
                    >
                      <div>
                        <h4 class="fs-36 fw-semibold ff-secondary mb-4">{{$news}}</h4>
                        <a href="news" class="text-decoration-underline"
                          >View all News</a
                        >
                      </div>
                      <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-info-subtle rounded fs-3">
                          <i class="bx bxs-user-pin text-info"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- end card body -->
                </div>
                <!-- end card -->
              </div>
              <!-- end col -->

              <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-animate">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="flex-grow-1 overflow-hidden">
                        <p
                          class="text-uppercase fw-medium text-muted text-truncate mb-0"
                        >
                          Active NOC
                        </p>
                      </div>
                    </div>
                    <div
                      class="d-flex align-items-end justify-content-between mt-4"
                    >
                      <div>
                        <h4 class="fs-36 fw-semibold ff-secondary mb-4">{{$noc}}</h4>
                        <a href="noc-notice" class="text-decoration-underline"
                          >View All NOC</a
                        >
                      </div>
                      <div class="avatar-sm flex-shrink-0">
                        <span
                          class="avatar-title bg-warning-subtle rounded fs-3"
                        >
                          <i class="bx bx-clipboard text-warning"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- end card body -->
                </div>
                <!-- end card -->
              </div>
              <!-- end col -->

              <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-animate">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="flex-grow-1 overflow-hidden">
                        <p
                          class="text-uppercase fw-medium text-muted text-truncate mb-0"
                        >
                          Active Career Opportunity
                        </p>
                      </div>
                    </div>
                    <div
                      class="d-flex align-items-end justify-content-between mt-4"
                    >
                      <div>
                        <h4 class="fs-36 fw-semibold ff-secondary mb-4">{{$career}}</h4>
                        <a href="career" class="text-decoration-underline"
                          >View All Career Opportunity</a
                        >
                      </div>
                      <div class="avatar-sm flex-shrink-0">
                        <span
                          class="avatar-title bg-primary-subtle rounded fs-3"
                        >
                          <i class="bx bx-headphone text-primary"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- end card body -->
                </div>
                <!-- end card -->
              </div>
              <!-- end col -->
            </div>
          </div>
          <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <x-footer/>
      </div>
      <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <x-scripts/>
  </body>
</html>
