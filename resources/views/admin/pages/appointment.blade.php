@extends('admin.master_dashboard')
@section('main')
<div class="layout-specing">
    <div class="row">
        <div class="col-xl-9 col-lg-6 col-md-4">
            <h5 class="mb-0">Appointment</h5>
            <nav aria-label="breadcrumb" class="d-inline-block mt-2">
                <ul class="breadcrumb breadcrumb-muted bg-transparent rounded mb-0 p-0">
                    <li class="breadcrumb-item"><a href="index.html">Doctris</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Appointment</li>
                </ul>
            </nav>
        </div><!--end col-->

        <div class="col-xl-3 col-lg-6 col-md-8 mt-4 mt-md-0">
            <div class="justify-content-md-end">
                <form>
                    <div class="row justify-content-between align-items-center">
                        <div class="col-sm-12 col-md-5">
                            <div class="mb-0 position-relative">
                                <select class="form-select form-control">
                                    <option value="EY">Today</option>
                                    <option value="GY">Tomorrow</option>
                                    <option value="PS">Yesterday</option>
                                </select>
                            </div>
                        </div><!--end col-->
                        
                        <div class="col-sm-12 col-md-7 mt-4 mt-sm-0">
                            <div class="d-grid">
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#appointmentform">Appointment</a>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </form><!--end form-->
            </div>
        </div><!--end col-->
    </div><!--end row-->
    
    <div class="row">
        <div class="col-12 mt-4">
            <div class="table-responsive bg-white shadow rounded">
                <table class="table mb-0 table-center">
                    <thead>
                        <tr>
                            <th class="border-bottom p-3">#</th>
                            <th class="border-bottom p-3">Name</th>
                            <th class="border-bottom p-3">Age</th>
                            <th class="border-bottom p-3">Gender</th>
                            <th class="border-bottom p-3">Date</th>
                            <th class="border-bottom p-3">Time</th>
                            <th class="border-bottom p-3 text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($appointments as $index => $appointment)
                            <tr>
                                <th class="p-3">{{ $index + 1 }}</th>
                                <td class="p-3">
                                    <div class="d-flex align-items-center">
                                        <span class="ms-2">{{ $appointment->name }}</span>
                                    </div>
                                </td>
                                <td class="p-3">{{ $appointment->age }}</td>
                                <td class="p-3">{{ ucfirst($appointment->gender) }}</td>
                                <td class="p-3">{{ \Carbon\Carbon::parse($appointment->created_at)->format('d M Y') }}</td>
                                <td class="p-3">{{ \Carbon\Carbon::parse($appointment->created_at)->format('h:i A') }}</td>
                                
                                <td class="text-end p-3">
                                    <a href="#" 
                                       class="btn btn-icon btn-pills btn-soft-primary" 
                                       data-bs-toggle="modal" 
                                       data-bs-target="#viewappointment"
                                       data-name="{{ $appointment->name }}"
                                       data-age="{{ $appointment->age }}"
                                       data-gender="{{ $appointment->gender }}"
                                       data-date="{{ $appointment->created_at->format('d M Y') }}"
                                       data-time="{{ $appointment->created_at->format('h:i A') }}">
                                       <i class="uil uil-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div><!--end row-->

    <div class="row text-center">
        <!-- PAGINATION START -->
        <div class="col-12 mt-4">
            <div class="d-md-flex align-items-center text-center justify-content-between">
                <span class="text-muted me-3">Showing 1 - 10 out of 50</span>
                <ul class="pagination justify-content-center mb-0 mt-3 mt-sm-0">
                    <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous">Prev</a></li>
                    <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next">Next</a></li>
                </ul>
            </div>
        </div><!--end col-->
        <!-- PAGINATION END -->
    </div><!--end row-->
</div>
<!-- View Appointment Modal -->
<div class="modal fade" id="viewappointment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom p-3">
                <h5 class="modal-title" id="exampleModalLabel">Appointment Detail</h5>
                <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" id="close-modal">
                    <i class="uil uil-times fs-4 text-dark"></i>
                </button>
            </div>
            <div class="modal-body p-3 pt-4">
                <div class="d-flex align-items-center">
                    <img id="modalImage" src="" class="avatar avatar-small rounded-pill" alt="">
                    <h5 class="mb-0 ms-3" id="modalName">Patient Name</h5>
                </div>
                <ul class="list-unstyled mb-0 d-md-flex justify-content-between mt-4">
                    <li>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex">
                                <h6>Age:</h6>
                                <p class="text-muted ms-2" id="modalAge">...</p>
                            </li>
                            <li class="d-flex">
                                <h6>Gender:</h6>
                                <p class="text-muted ms-2" id="modalGender">...</p>
                            </li>
                            <li class="d-flex">
                                <h6 class="mb-0">Department:</h6>
                                <p class="text-muted ms-2 mb-0" id="modalDepartment">...</p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex">
                                <h6>Date:</h6>
                                <p class="text-muted ms-2" id="modalDate">...</p>
                            </li>
                            <li class="d-flex">
                                <h6>Time:</h6>
                                <p class="text-muted ms-2" id="modalTime">...</p>
                            </li>
                            <li class="d-flex">
                                <h6 class="mb-0">Doctor:</h6>
                                <p class="text-muted ms-2 mb-0" id="modalDoctor">...</p>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- View Appintment End -->

<!-- Accept Appointment Start -->
<div class="modal fade" id="acceptappointment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body py-5">
                <div class="text-center">
                    <div class="icon d-flex align-items-center justify-content-center bg-soft-success rounded-circle mx-auto" style="height: 95px; width:95px;">
                        <i class="uil uil-check-circle h1 mb-0"></i>
                    </div>
                    <div class="mt-4">
                        <h4>Accept Appointment</h4>
                        <p class="para-desc mx-auto text-muted mb-0">Great doctor if you need your family member to get immediate assistance, emergency treatment.</p>
                        <div class="mt-4">
                            <a href="#" class="btn btn-soft-success">Accept</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Accept Appointment End -->

<!-- Cancel Appointment Start -->
<div class="modal fade" id="cancelappointment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body py-5">
                <div class="text-center">
                    <div class="icon d-flex align-items-center justify-content-center bg-soft-danger rounded-circle mx-auto" style="height: 95px; width:95px;">
                        <i class="uil uil-times-circle h1 mb-0"></i>
                    </div>
                    <div class="mt-4">
                        <h4>Cancel Appointment</h4>
                        <p class="para-desc mx-auto text-muted mb-0">Great doctor if you need your family member to get immediate assistance, emergency treatment.</p>
                        <div class="mt-4">
                            <a href="#" class="btn btn-soft-danger">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const viewModal = document.getElementById('viewappointment');
    viewModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;

        // Get data attributes from the button
        const name = button.getAttribute('data-name');
        const age = button.getAttribute('data-age');
        const gender = button.getAttribute('data-gender');
        const date = button.getAttribute('data-date');
        const time = button.getAttribute('data-time');

        // Populate modal content
        document.getElementById('modalName').textContent = name;
        document.getElementById('modalAge').textContent = age + ' year old';
        document.getElementById('modalGender').textContent = gender;
        document.getElementById('modalDate').textContent = date;
        document.getElementById('modalTime').textContent = time;
        document.getElementById('modalImage').src = image;
    });
</script>

@endsection
