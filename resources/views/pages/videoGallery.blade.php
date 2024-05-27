<!-- @format -->

<!DOCTYPE html>
<html
  lang="en"
  data-layout="vertical"
  data-topbar="dark"
  data-sidebar="light"
  data-sidebar-size="lg"
>
  <x-assets title="Videos"/>

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
                                        <h2>Add Video</h2>
                                    </div>
                                    <form action="add-video" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
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
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label
                                                        for=""
                                                        class="form-label d-flex align-items-center"
                                                        >Language
                                                        <i
                                                            class="las la-question-circle tooltip-icon mx-1"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-placement="top"
                                                            title="Language"
                                                            rel="tooltip"
                                                        ></i
                                                    ></label>
                                                    <select
                                                        id=""
                                                        placeholder="Choose Language"
                                                        name="language"
                                                    >
                                                        <option value="">
                                                            Select a Language...
                                                        </option>
                                                        <option>English</option>
                                                        <option>Bangla</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label"
                                                        >Duration(in minutes)</label
                                                    >
                                                    <input
                                                        type="number"
                                                        name="duration"
                                                        class="form-control"
                                                        placeholder="Enter Duration"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label"
                                                        >Youtube Link</label
                                                    >
                                                    <input
                                                        type="text"
                                                        name="link"
                                                        class="form-control"
                                                        placeholder="Enter Youtube Link"
                                                    />
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
                                                            Language
                                                        </th>
                                                        <th class="sort">
                                                            Duration
                                                        </th>
                                                        <th class="sort">
                                                            Link
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
                                                @foreach ($videoList as $item)
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
                                                            {{$item['language']}}
                                                        </td>
                                                        <td
                                                            class="searchfield3"
                                                        >
                                                            {{$item['duration']}} minutes
                                                        </td>
                                                        <td
                                                            class="searchfield4"
                                                        >
                                                            <a href="{{$item['link']}}" target="_blank">Click Here</a>
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
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#videoEditModal"
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
                    id="videoEditModal"
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
                                    Edit Video
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
                                                <label
                                                    for=""
                                                    class="form-label d-flex align-items-center"
                                                    >Language
                                                    <i
                                                        class="las la-question-circle tooltip-icon mx-1"
                                                        data-bs-toggle="tooltip"
                                                        data-bs-placement="top"
                                                        title="Language"
                                                        rel="tooltip"
                                                    ></i
                                                ></label>
                                                <select
                                                    id=""
                                                    placeholder="Choose Language"
                                                >
                                                    <option value="">
                                                        Select a Language...
                                                    </option>
                                                    <option>English</option>
                                                    <option>Bangla</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label"
                                                    >Duration</label
                                                >
                                                <input
                                                    type="number"
                                                    class="form-control"
                                                    placeholder="Enter Duration"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label"
                                                    >Youtube Link</label
                                                >
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="Enter Youtube Link"
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
