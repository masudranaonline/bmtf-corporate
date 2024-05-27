<!-- @format -->

<!DOCTYPE html>
<html
  lang="en"
  data-layout="vertical"
  data-topbar="dark"
  data-sidebar="light"
  data-sidebar-size="lg"
>
  <x-assets title="Career Opportunities"/>

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
                                        <h2>Add Career</h2>
                                    </div>
                                    <form action="add-career" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label"
                                                        >Job Post Title</label
                                                    >
                                                    <input
                                                        type="text"
                                                        name="title"
                                                        class="form-control"
                                                        placeholder="Enter Job Post Title"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label"
                                                        >Capacity</label
                                                    >
                                                    <input
                                                        type="number"
                                                        name="capacity"
                                                        class="form-control"
                                                        placeholder="Enter Capacity"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label"
                                                        >Department</label
                                                    >
                                                    <input
                                                        type="text"
                                                        name="department"
                                                        class="form-control"
                                                        placeholder="Enter Department"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label"
                                                        >Upload Date</label
                                                    >
                                                    <input
                                                        type="date"
                                                        name="upload_date"
                                                        class="form-control"
                                                        placeholder="Enter Date"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label"
                                                        >Application
                                                        Deadline</label
                                                    >
                                                    <input
                                                        type="date"
                                                        name="application_deadline"
                                                        class="form-control"
                                                        placeholder="Enter Date"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label"
                                                        >File</label
                                                    >
                                                    <input
                                                        type="file"
                                                        name="file"
                                                        placeholder="Upload Your File"
                                                        class="form-control @error('file') is-invalid @enderror"
                                                    />
                                                </div>
                                                @error('file')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div
                                                class="d-flex justify-content-center"
                                            >
                                                <div>
                                                    <button
                                                        type="submit"
                                                        class="btn btn-primary px-5 mx-1"
                                                    >
                                                        ADD
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
                                        <div class="row g-4 mb-3">
                                            <div class="col-sm-auto">
                                                <div class="">
                                                    <div
                                                        class="search-box ms-2"
                                                    >
                                                        <input
                                                            type="text"
                                                            class="form-control search"
                                                            placeholder="Search..."
                                                        />
                                                        <i
                                                            class="ri-search-line search-icon"
                                                        ></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="table-responsive table-card mt-3 mb-1 px-3"
                                        >
                                            <table
                                                class="table align-middle table-nowrap"
                                                id="customerTable"
                                            >
                                                <thead class="table-light">
                                                    <tr>
                                                        <th class="sort">#</th>
                                                        <th class="sort">
                                                            Title
                                                        </th>
                                                        <th class="sort">
                                                            Capacity
                                                        </th>
                                                        <th class="sort">
                                                            Department
                                                        </th>
                                                        <th class="sort">
                                                            Deadline
                                                        </th>
                                                        <th class="sort">
                                                            File
                                                        </th>
                                                        <th class="sort">
                                                            Status
                                                        </th>
                                                        <th
                                                            class="sort"
                                                            style="
                                                                float: inline-end;
                                                            "
                                                        >
                                                            Action
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody
                                                    class="list form-check-all"
                                                >

                                                @foreach ($careerList as $item)
                                                   <tr>
                                                        <td>{{$loop->iteration}}</td>
                                                        <td
                                                            class="searchfield1"
                                                        >
                                                            {{$item['title']}}
                                                        </td>
                                                        <td
                                                            class="searchfield2"
                                                        >
                                                            {{$item['capacity']}}
                                                        </td>
                                                        <td
                                                            class="searchfield3"
                                                        >
                                                            {{$item['department']}}
                                                        </td>
                                                        <td
                                                            class="searchfield4"
                                                        >
                                                            {{$item['application_deadline']}}
                                                        </td>
                                                        <td>
                                                            <a href="{{$item['file']}}" target="_blank">Click to view</a>
                                                        </td>
                                                        <td
                                                            class="searchfield5"
                                                        >
                                                        @if ($item['status']==1)
                                                            <span
                                                                class="badge badge-soft-success text-uppercase"
                                                                >active</span
                                                            >
                                                        @else
                                                            <span
                                                                class="badge badge-soft-danger text-uppercase"
                                                                >Disable</span
                                                            >
                                                            
                                                        @endif
                                                            
                                                        </td>
                                                        <td>
                                                            <div
                                                                class="d-flex justify-content-end"
                                                            >
                                                                <div
                                                                    class="edit"
                                                                >
                                                                    <button
                                                                        class="btn btn-sm btn-success edit-item-btn d-flex align-items-center gap-1"
                                                                    >
                                                                        <i
                                                                            class="las la-pencil-alt"
                                                                        ></i
                                                                        ><span
                                                                            >Edit</span
                                                                        >
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr> 
                                                @endforeach
                                                </tbody>
                                            </table>
                                            <div
                                                class="noresult"
                                                style="display: none"
                                            >
                                                <div class="text-center">
                                                    <lord-icon
                                                        src="https://cdn.lordicon.com/msoeawqm.json"
                                                        trigger="loop"
                                                        colors="primary:#121331,secondary:#08a88a"
                                                        style="
                                                            width: 75px;
                                                            height: 75px;
                                                        "
                                                    >
                                                    </lord-icon>
                                                    <h5 class="mt-2">
                                                        Sorry! No Result Found
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <div
                                                class="pagination-wrap hstack gap-2"
                                            >
                                                <a
                                                    class="page-item pagination-prev disabled"
                                                    href="#"
                                                >
                                                    Previous
                                                </a>
                                                <ul
                                                    class="pagination listjs-pagination mb-0"
                                                ></ul>
                                                <a
                                                    class="page-item pagination-next"
                                                    href="#"
                                                >
                                                    Next
                                                </a>
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
                    id="careerEditModal"
                    data-bs-backdrop="static"
                    data-bs-keyboard="false"
                    tabindex="-1"
                    aria-labelledby="exampleModalgridLabel"
                    aria-modal="true"
                >
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5
                                    class="modal-title"
                                    id="exampleModalgridLabel"
                                >
                                    Edit Career
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
                                                <label class="form-label"
                                                    >Job Post Title</label
                                                >
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="Enter Job Post Title"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label"
                                                    >Capacity</label
                                                >
                                                <input
                                                    type="number"
                                                    class="form-control"
                                                    placeholder="Enter Capacity"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label"
                                                    >Department</label
                                                >
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="Enter Department"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label"
                                                    >Upload Date</label
                                                >
                                                <input
                                                    type="date"
                                                    class="form-control"
                                                    placeholder="Enter Date"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label"
                                                    >Application Deadline</label
                                                >
                                                <input
                                                    type="date"
                                                    class="form-control"
                                                    placeholder="Enter Date"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label"
                                                    >File</label
                                                >
                                                <input
                                                    type="file"
                                                    placeholder="Upload Your File"
                                                    class="form-control"
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
                                                <select
                                                    id=""
                                                    placeholder="Choose Status"
                                                >
                                                    <option value="">
                                                        Select a status...
                                                    </option>
                                                    <option>Active</option>
                                                    <option>Disable</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div
                                            class="d-flex justify-content-center"
                                        >
                                            <div>
                                                <button
                                                    type="submit"
                                                    class="btn btn-primary px-5 mx-1"
                                                >
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
