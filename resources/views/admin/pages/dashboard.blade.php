@extends('admin.master_dashboard')
@section('main')
<div class="layout-specing">
    <h5 class="mb-0">Dashboard</h5>

    <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-4 mt-4">
            <div class="card features feature-primary rounded border-0 shadow p-4">
                <div class="d-flex align-items-center">
                    <div class="icon text-center rounded-md">
                        <i class="bi bi-people h3 mb-0"></i>
                    </div>
                    <div class="flex-1 ms-2">
                        <h5 class="mb-0">{{ $totalAppointments }}</h5>
                        <p class="text-muted mb-0">Appointments</p>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="col-xl-3 col-lg-4 col-md-4 mt-4">
            <div class="card features feature-primary rounded border-0 shadow p-4">
                <div class="d-flex align-items-center">
                    <div class="icon text-center rounded-md">
                        <i class="bi bi-receipt h3 mb-0"></i>
                    </div>
                    <div class="flex-1 ms-2">
                        <h5 class="mb-0">{{ $approvedAppointments }}</h5>
                        <p class="text-muted mb-0">Approved</p>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="col-xl-3 col-lg-4 col-md-4 mt-4">
            <div class="card features feature-primary rounded border-0 shadow p-4">
                <div class="d-flex align-items-center">
                    <div class="icon text-center rounded-md">
                        <i class="bi bi-person-badge h3 mb-0"></i>
                    </div>
                    <div class="flex-1 ms-2">
                        <h5 class="mb-0">{{ $rejectedAppointments }}</h5>
                        <p class="text-muted mb-0">Rejected</p>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="col-xl-3 col-lg-4 col-md-4 mt-4">
            <div class="card features feature-primary rounded border-0 shadow p-4">
                <div class="d-flex align-items-center">
                    <div class="icon text-center rounded-md">
                        <i class="bi bi-calendar2-check h3 mb-0"></i>
                    </div>
                    <div class="flex-1 ms-2">
                        <h5 class="mb-0">{{ $pendingAppointments }}</h5>
                        <p class="text-muted mb-0">Pending</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-xl-8 col-lg-7 mt-4">
            <div class="card shadow border-0 p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="align-items-center mb-0">Patients visit by Gender</h6>
                    
                    {{-- <div class="mb-0 position-relative">
                        <select class="form-select form-control" id="yearchart">
                            <option selected>2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                        </select>
                    </div> --}}
                </div>
                <div id="dashboard" class="apex-chart"></div>
            </div>
        </div><!--end col-->

        <div class="col-xl-4 col-lg-5 mt-4">
            <div class="card shadow border-0 p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="align-items-center mb-0">Patients by Department</h6>
                    
                    {{-- <div class="mb-0 position-relative">
                        <select class="form-select form-control" id="dailychart">
                            <option selected>Today</option>
                            <option value="2019">Yesterday</option>
                        </select>
                    </div> --}}
                </div>
                <div id="department" class="apex-chart"></div>
            </div>
        </div><!--end col-->
    </div><!--end row-->

 
</div>



@endsection