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
            <div class="col-sm-12 col-md-5">
                <div class="mb-0 position-relative">
                    <form method="GET" action="{{ route('appointments.list') }}">
                        <select name="status" class="form-select" onchange="this.form.submit()">
                            <option value="">All </option>
                            <option value="pending" {{ request('status') === 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="approved" {{ request('status') === 'approved' ? 'selected' : '' }}>Approved</option>
                            <option value="rejected" {{ request('status') === 'rejected' ? 'selected' : '' }}>Rejected</option>
                        </select>
                    </form>
                </div>
            </div>
            
        </div><!--end col-->
    </div><!--end row-->
    
    <div class="row">
        <div class="col-12 mt-4">
            <div class="table-responsive bg-white shadow rounded p-4" >
                <table class="table mb-0 table-center" id="appointmentsTable">
                    <thead>
                        <tr>
                            <th class="border-bottom p-3">#</th>
                            <th class="border-bottom p-3">Name</th>
                            <th class="border-bottom p-3">Age</th>
                            <th class="border-bottom p-3">Gender</th>
                            <th class="border-bottom p-3">Status</th>
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
                                <td class="p-3">
                                    <span class="badge bg-{{ $appointment->status == 'approved' ? 'success' : ($appointment->status == 'rejected' ? 'danger' : 'warning') }}">
                                        {{ ucfirst($appointment->status) }}
                                    </span>
                                </td>
                                <td class="p-3">{{ \Carbon\Carbon::parse($appointment->created_at)->format('d M Y') }}</td>
                                <td class="p-3">{{ \Carbon\Carbon::parse($appointment->created_at)->format('h:i A') }}</td>
                                
                                <td class="text-end p-3">
                                    <a href="#"
                                    class="btn btn-icon btn-pills btn-soft-primary"
                                    data-bs-toggle="modal"
                                    data-bs-target="#viewappointment"
                                    data-id="{{ $appointment->id }}"
                                    data-name="{{ $appointment->name }}"
                                    data-age="{{ $appointment->age }}"
                                    data-gender="{{ $appointment->gender }}"
                                    data-phone="{{ $appointment->phone }}"
                                    data-history="{{ $appointment->health_history }}"
                                    data-complaints="{{ $appointment->complaints }}"
                                    data-date="{{ $appointment->created_at->format('d M Y') }}"
                                    data-time="{{ $appointment->created_at->format('h:i A') }}"
                                    data-status="{{ $appointment->status }}"
                                 >
                                    <i class="bi bi-eye"></i>
                                 </a>
                                 
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div><!--end row-->

    {{-- <div class="row text-center">
        <div class="col-12 mt-4">
            <div class="d-md-flex align-items-center text-center justify-content-between">
                <span class="text-muted me-3">
                    Showing {{ $appointments->firstItem() }} - {{ $appointments->lastItem() }} of {{ $appointments->total() }}
                </span>
                <div>
                    {{ $appointments->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div> --}}
    
</div>
<!-- View Appointment Modal -->
<div class="modal fade" id="viewappointment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom p-3">
                <h5 class="modal-title" id="exampleModalLabel">Appointment Detail</h5>
                <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" id="close-modal">
                    <i class="bi bi-x-lg fs-4 text-dark"></i>
                </button>
                
            </div>
            <div class="modal-body p-3 pt-4">
                <div class="d-flex align-items-center mb-3">
                    <h5 class="mb-0 ms-3" id="modalName">Patient Name</h5>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Age:</strong> <span id="modalAge"></span></p>
                        <p><strong>Gender:</strong> <span id="modalGender"></span></p>
                        <p><strong>Phone:</strong> <span id="modalPhone"></span></p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Date:</strong> <span id="modalDate"></span></p>
                        <p><strong>Time:</strong> <span id="modalTime"></span></p>
                        <p><strong>Status:</strong> <span id="modalStatus" class="badge"></span></p>
                    </div>
                </div>
                <hr>
                <p><strong>Health History:</strong></p>
                <p id="modalHistory" class="text-muted"></p>
            
                <p><strong>Complaints:</strong></p>
                <p id="modalComplaints" class="text-muted"></p>
            
                <div class="mt-4 d-flex justify-content-end gap-2">
                    <form id="approveForm" method="POST">
                        @csrf
                        <button class="btn btn-success">Approve</button>
                    </form>
                    <form id="rejectForm" method="POST">
                        @csrf
                        <button class="btn btn-danger">Reject</button>
                    </form>
                </div>
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
                        <i class="bi bi-check-circle h1 mb-0"></i>
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
                        <i class="bi bi-times-circle h1 mb-0"></i>
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


@endsection
@section('body_script')
<script>
    $(document).ready(function() {
        $('#appointmentsTable').DataTable({
            "paging": true,
            "searching": true,
            "ordering": true,
            "lengthChange": false,
            "pageLength": 10
        });
    });
</script>

<script>
    const viewModal = document.getElementById('viewappointment');
    viewModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;

        // Extract data
        const id = button.getAttribute('data-id');
        const name = button.getAttribute('data-name');
        const age = button.getAttribute('data-age');
        const gender = button.getAttribute('data-gender');
        const phone = button.getAttribute('data-phone');
        const history = button.getAttribute('data-history');
        const complaints = button.getAttribute('data-complaints');
        const date = button.getAttribute('data-date');
        const time = button.getAttribute('data-time');
        const status = button.getAttribute('data-status');

        // Set content
        document.getElementById('modalName').textContent = name;
        document.getElementById('modalAge').textContent = age + ' years';
        document.getElementById('modalGender').textContent = gender;
        document.getElementById('modalPhone').textContent = phone;
        document.getElementById('modalHistory').textContent = history;
        document.getElementById('modalComplaints').textContent = complaints;
        document.getElementById('modalDate').textContent = date;
        document.getElementById('modalTime').textContent = time;

        const statusElement = document.getElementById('modalStatus');
        statusElement.textContent = status.charAt(0).toUpperCase() + status.slice(1);
        statusElement.className = 'badge bg-' + (status === 'approved' ? 'success' : (status === 'rejected' ? 'danger' : 'warning'));

        // Build URLs using Laravel routes
        const approveUrl = "{{ route('appointments.approve', ['id' => '__ID__']) }}".replace('__ID__', id);
        const rejectUrl = "{{ route('appointments.reject', ['id' => '__ID__']) }}".replace('__ID__', id);

        document.getElementById('approveForm').action = approveUrl;
        document.getElementById('rejectForm').action = rejectUrl;
    });
</script>

@endsection