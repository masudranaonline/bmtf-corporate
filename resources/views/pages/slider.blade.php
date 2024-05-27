<!-- @format -->

<!DOCTYPE html>
<html
  lang="en"
  data-layout="vertical"
  data-topbar="dark"
  data-sidebar="light"
  data-sidebar-size="lg"
>
  <x-assets title="Sliders"/>

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
                                <div class="card p-4">
                                    <div id="customerList">
                                        <div class="col-sm-auto">
                                            <div class="row">
                                                <div class="col-3">
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
                                                            Sub Title
                                                        </th>
                                                        <th class="sort">
                                                            Title
                                                        </th>
                                                        <th class="sort">
                                                            Description
                                                        </th>
                                                        <th class="sort">
                                                            File
                                                        </th>
                                                        <th class="sort">
                                                            Status
                                                        </th>
                                                        <th class="sort">
                                                            Action
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody
                                                    class="list form-check-all"
                                                >
                                                @foreach ($sliderList as $item)
                                                    <tr>
                                                        <td>{{$loop->iteration}}</td>
                                                        <td
                                                            class="searchfield1"
                                                        >
                                                            {{$item['subtitle']}}
                                                        </td>
                                                        <td
                                                            class="searchfield2"
                                                        >
                                                            {{$item['title']}}
                                                        </td>
                                                        <td
                                                            class="searchfield3"
                                                        >
                                                            {{$item['description']}}
                                                        </td>
                                                        <td
                                                            class="searchfield4"
                                                        >
                                                            <a href="{{$item['video']}}" target="_blank">click to view</a>
                                                        </td>
                                                        <td
                                                            class="searchfield5"
                                                        >
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
                                                            <div
                                                                class="d-flex justify-content-end"
                                                            >
                                                                <div
                                                                    class="edit"
                                                                >
                                                                    <button
                                                                        class="btn btn-sm btn-success edit-item-btn d-flex align-items-center gap-1"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#sliderEditModal"
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
                            <div class="col-lg-12">
                                <div class="card p-4">
                                    <div class="mb-4">
                                        <h2>Add Slider</h2>
                                    </div>
                                    <form action="add-slider" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label"
                                                        >Sub Title</label
                                                    >
                                                    <input
                                                        type="text"
                                                        name="subtitle"
                                                        class="form-control"
                                                        placeholder="Enter Sub Title"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label"
                                                        >Title</label
                                                    >
                                                    <input
                                                        type="text"
                                                        name="title"
                                                        class="form-control"
                                                        placeholder="Enter Title"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label"
                                                        >Video/Image</label
                                                    >
                                                    <input
                                                        type="file"
                                                        name="file"
                                                        placeholder="Upload Your File"
                                                        class="form-control"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label"
                                                        >Description</label
                                                    >
                                                    <textarea
                                                        class="form-control"
                                                        name="description"
                                                        placeholder="Enter Description"
                                                        id=""
                                                        rows="4"
                                                    ></textarea>
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
                                                        Add
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--------------_Edit Modal---------------->
                <div
                    class="modal fade"
                    id="sliderEditModal"
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
                                    Edit Slider
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
                                                    >Sub Title</label
                                                >
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="Enter Sub Title"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label"
                                                    >Title</label
                                                >
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="Enter Title"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label"
                                                    >Video/Image</label
                                                >
                                                <input
                                                    type="file"
                                                    placeholder="Upload Your File"
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
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label"
                                                    >Description</label
                                                >
                                                <textarea
                                                    class="form-control"
                                                    placeholder="Enter Description"
                                                    id=""
                                                    rows="4"
                                                ></textarea>
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
