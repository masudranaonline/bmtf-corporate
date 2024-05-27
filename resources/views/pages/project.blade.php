<!-- @format -->

<!DOCTYPE html>
<html
  lang="en"
  data-layout="vertical"
  data-topbar="dark"
  data-sidebar="light"
  data-sidebar-size="lg"
>
  <x-assets title="Projects"/>

  <body>
    <!-- Begin page -->
    <div id="layout-wrapper">
      <x-header/>
      <div class="main-content">
        <!-- Start Page Content -->
        <div class="page-content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <x-alert/>
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title mb-0">All Projects</h4>
                  </div>
                  <!-- end card header -->

                  <div class="card-body">
                    <div id="customerList">
                      <div class="row g-4 mb-3">
                        <div class="col-sm-auto">
                          <div class="">
                            <div class="search-box ms-2">
                              <input
                                type="text"
                                class="form-control search"
                                placeholder="Search..."
                              />
                              <i class="ri-search-line search-icon"></i>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm">
                          <div class="d-flex justify-content-sm-end">
                            <button
                              type="button"
                              class="btn btn-success add-btn"
                              data-bs-toggle="modal"
                              data-bs-target="#projectAddModal"
                            >
                              <i class="ri-add-line align-bottom me-1"></i> Add
                              Project
                            </button>
                          </div>
                        </div>
                      </div>

                      <div class="table-responsive table-card mt-3 mb-1">
                        <table
                          class="table align-middle table-nowrap"
                          id="customerTable"
                        >
                          <thead class="table-light">
                            <tr>
                              <th class="sort">#</th>
                              <th class="sort">Title</th>
                              <th class="sort">Feature Image</th>
                              <th class="sort">Intro</th>
                              <th class="sort">Date</th>
                              <th class="sort">Status</th>
                              <th class="sort" style="float: inline-end">
                                Action
                              </th>
                            </tr>
                          </thead>
                          <tbody class="list form-check-all">
                            @foreach ($projectList as $item)
                             <tr>
                              <td>{{$loop->iteration}}</td>
                              <td class="searchfield1">{{$item['title']}}</td>
                              <td>
                                <div>
                                  <img
                                    style="width: 50px"
                                    src="{{$item['feature_image']}}"
                                    alt="project 1"
                                  />
                                </div>
                              </td>
                              <td class="searchfield2">{{$item['short_intro']}}</td>
                              <td class="searchfield2">{{$item['date']}}</td>
                              <td class="searchfield3">

                                @if ($item['status']==1)
                                    <span
                                  class="badge badge-soft-success text-uppercase"
                                  >Active</span
                                >
                                @else
                                    <span
                                  class="badge badge-soft-danger text-uppercase"
                                  >Disabled</span
                                >
                                @endif
                                
                              </td>
                              <td>
                                <div class="d-flex gap-2 justify-content-end">
                                  <div class="view">
                                    <button
                                      class="btn btn-sm btn-primary edit-item-btn d-flex align-items-center gap-1"
                                      data-bs-toggle="modal"
                                      data-bs-target="#institutionModal"
                                    >
                                      <i class="las la-eye"></i
                                      ><span>View</span>
                                    </button>
                                  </div>
                                  <div class="edit">
                                    <button
                                      class="btn btn-sm btn-success edit-item-btn d-flex align-items-center gap-1"
                                      data-bs-toggle="modal"
                                      data-bs-target="#newsEditModal"
                                    >
                                      <i class="las la-pencil-alt"></i
                                      ><span>Edit</span>
                                    </button>
                                  </div>
                                </div>
                              </td>
                            </tr>   
                            @endforeach
                            
                          </tbody>
                        </table>
                        <div class="noresult" style="display: none">
                          <div class="text-center">
                            <lord-icon
                              src="https://cdn.lordicon.com/msoeawqm.json"
                              trigger="loop"
                              colors="primary:#121331,secondary:#08a88a"
                              style="width: 75px; height: 75px"
                            >
                            </lord-icon>
                            <h5 class="mt-2">Sorry! No Result Found</h5>
                          </div>
                        </div>
                      </div>

                      <div class="d-flex justify-content-end">
                        <div class="pagination-wrap hstack gap-2">
                          <a
                            class="page-item pagination-prev disabled"
                            href="#"
                          >
                            Previous
                          </a>
                          <ul class="pagination listjs-pagination mb-0"></ul>
                          <a class="page-item pagination-next" href="#">
                            Next
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end card -->
                </div>
                <!-- end col -->
              </div>
            </div>
          </div>
        </div>

        <!--------------ADD Modal---------------->
        <div
          class="modal fade"
          id="projectAddModal"
          data-bs-backdrop="static"
          data-bs-keyboard="false"
          tabindex="-1"
          aria-labelledby="exampleModalgridLabel"
          aria-modal="true"
        >
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalgridLabel">
                  Add Project
                </h5>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button>
              </div>
              <div class="modal-body">
                <form action="add-project" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input
                          type="text"
                          name="title"
                          class="form-control"
                          placeholder="Enter Title"
                        />
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="mb-3">
                        <label class="form-label">Feature Image</label>
                        <input
                          type="file"
                          name="file"
                          placeholder="Upload Your File"
                          class="form-control @error('file') is-invalid @enderror"
                          accept="image/*"
                        />
                      </div>
                      @error('file')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-12">
                      <div class="mb-3">
                        <label class="form-label">Short Intro</label>
                        <textarea
                          class="form-control"
                          name="short_intro"
                          placeholder="Enter Short Intro"
                          id=""
                          rows="3"
                        ></textarea>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea
                          class="form-control"
                          name="description"
                          placeholder="Enter Description"
                          id=""
                          rows="4"
                        ></textarea>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="mb-3">
                        <label class="form-label"> Date</label>
                        <input
                          type="date"
                          name="date"
                          class="form-control"
                          placeholder="Enter Date"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="d-flex justify-content-center">
                      <div>
                        <button type="submit" class="btn btn-primary px-5 mx-1">
                          ADD
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!--------------_Edit Modal---------------->
        <div
          class="modal fade"
          id="projectEditModal"
          data-bs-backdrop="static"
          data-bs-keyboard="false"
          tabindex="-1"
          aria-labelledby="exampleModalgridLabel"
          aria-modal="true"
        >
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalgridLabel">
                  Edit Project
                </h5>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button>
              </div>
              <div class="modal-body">
                <form action="">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Enter Title"
                        />
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="mb-3">
                        <label class="form-label">Feature Image</label>
                        <input
                          type="file"
                          placeholder="Upload Your File"
                          class="form-control"
                        />
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="mb-3">
                        <label class="form-label">Short Intro</label>
                        <textarea
                          class="form-control"
                          placeholder="Enter Short Intro"
                          id=""
                          rows="3"
                        ></textarea>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea
                          class="form-control"
                          placeholder="Enter Description"
                          id=""
                          rows="4"
                        ></textarea>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="mb-3">
                        <label class="form-label"> Date</label>
                        <input
                          type="date"
                          class="form-control"
                          placeholder="Enter Date"
                        />
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="mb-3">
                        <label
                          for=""
                          class="form-label d-flex align-items-center"
                          >Status
                          <i
                            class="las la-question-circle tooltip-icon mx-1"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="Status"
                            rel="tooltip"
                          ></i
                        ></label>
                        <select id="" placeholder="Choose Status">
                          <option value="">Select a status...</option>
                          <option>Active</option>
                          <option>Disable</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="d-flex justify-content-center">
                      <div>
                        <button type="submit" class="btn btn-primary px-5 mx-1">
                          Edit
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
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
