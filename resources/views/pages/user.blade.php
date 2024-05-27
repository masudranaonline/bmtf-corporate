<!-- @format -->

<!DOCTYPE html>
<html
  lang="en"
  data-layout="vertical"
  data-topbar="dark"
  data-sidebar="light"
  data-sidebar-size="lg"
>
  <x-assets title="Users"/>

  <body>
    <!-- Begin page -->
    <div id="layout-wrapper">
      <x-header/>
      <div class="main-content">
        <!-- Start Page Content -->
        <div class="page-content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-3">
                <div class="card p-4">
                  <div class="mb-4">
                    <h2>Add User</h2>
                  </div>
                  <form action="add-user" method="POST">
                    @csrf
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="mb-3">
                          <label class="form-label">Name</label>
                          <input
                            type="text"
                            name="name"
                            class="form-control"
                            placeholder="Enter Name"
                          />
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="mb-3">
                          <label class="form-label">Email</label>
                          <input
                            type="email"
                            name="email"
                            placeholder="Enter Email"
                            class="form-control"
                          />
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="mb-3">
                          <label class="form-label">Password</label>
                          <input
                            type="password"
                            name="password"
                            placeholder="Enter Password"
                            class="form-control"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="d-flex justify-content-center">
                        <div>
                          <button
                            type="submit"
                            class="btn btn-primary px-5 mx-1"
                          >
                            Add User
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>

              <div class="col-lg-9">
                <div class="card p-4">
                  <x-alert/>
                  <div id="customerList">
                    <div class="col-sm-auto">
                      <div class="row">
                        <div class="col-3">
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
                    </div>

                    <div class="table-responsive table-card mt-3 mb-1 px-3">
                      <table
                        class="table align-middle table-nowrap"
                        id="customerTable"
                      >
                        <thead class="table-light">
                          <tr>
                            <th class="sort">Name</th>
                            <th class="sort">Email</th>
                            <th class="sort">Status</th>
                            <th class="sort" style="float: inline-end">
                              Action
                            </th>
                          </tr>
                        </thead>
                        <tbody class="list form-check-all">
                          @foreach ($userList as $item)
                              <tr>
                            <td class="searchfield1">{{$item['name']}}</td>
                            <td class="searchfield2">{{$item['email']}}</td>
                            <td class="searchfield5">
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
                              <div class="d-flex justify-content-end">
                                <div class="edit">
                                  {{-- <button
                                    class="btn btn-sm btn-success edit-item-btn d-flex align-items-center gap-1"
                                    data-bs-toggle="modal"
                                    data-bs-target="#userEditModal"
                                  >
                                    <i class="las la-pencil-alt"></i
                                    ><span>Edit</span>
                                  </button> --}}
                                  <a class="btn btn-sm btn-success edit-item-btn d-flex align-items-center gap-1" id="{{$item['id']}}" onclick="openModal(this.id)">
                                    <i class="las la-pencil-alt"></i
                                    ><span>Edit</span>
                                  </a>
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
                        <a class="page-item pagination-prev disabled" href="#">
                          Previous
                        </a>
                        <ul class="pagination listjs-pagination mb-0"></ul>
                        <a class="page-item pagination-next" href="#"> Next </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--------------_Edit Modal---------------->
        <div
          class="modal fade"
          id="userEditModal"
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
                  Edit User
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

                  <input type="hidden" name="user_id" id="edit_user_id">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Enter Name"
                          id="edit_name"
                        />
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input
                          type="email"
                          placeholder="Enter Email"
                          class="form-control"
                          id="edit_email"
                        />
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input
                          type="password"
                          placeholder="Enter Password"
                          class="form-control"

                        />
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div>
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
                        <select id="" placeholder="Choose Status" id="edit_status">
                          <option value="1">Active</option>
                          <option value="0">Disable</option>
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
    <script>
      function openModal(clicked_id) {
            $("#userEditModal").modal("show");

            $.ajax({
                url: '/edit-user' + clicked_id
                , type: "GET"
                , success: function(response) {
                    console.log(response);
                    $('#edit_name').val(response.data.name);
                    $('#edit_email').val(response.data.email);
                    $('#edit_status').val(response.data.status);
                    $('#edit_user_id').val(clicked_id);
                }
            });

        }
    </script>
  </body>
</html>
