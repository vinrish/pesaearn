@extends('layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content mb-4">
    <div class="container">
        {{-- <h1 class="h3 mb-0 text-gray-800">Dashboard</h1> --}}
        <h3 class="h3 mb-2 text-gray-900 text-decoration-none">Welcome back <b class="well font-weight-bold text-uppercase text-wrap">{{ Auth::user()->name }}</b></h3>
    </div>
    {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
</div>

<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs text-center font-weight-bold text-primary text-uppercase mb-4">Referrals</div>
                        <div class="h5 mb-0 font-weight-bold text-center text-gray-800">5500</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-book fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs text-center font-weight-bold text-primary text-uppercase mb-4">Referrals</div>
                        <div class="h5 mb-0 font-weight-bold text-center text-gray-800">5500</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-book fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs text-center font-weight-bold text-primary text-uppercase mb-4">Referrals</div>
                        <div class="h5 mb-0 font-weight-bold text-center text-gray-800">5500</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-book fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
