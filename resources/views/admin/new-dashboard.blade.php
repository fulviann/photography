@extends('layouts.admin')

@section('content')
<div class="admin-dashboard">
    <div class="dashboard-header">
        <h2><i class="fas fa-tachometer-alt me-2"></i> Dashboard Overview</h2>
    </div>
    
    <div class="dashboard-stats row">
        <div class="col-md-6 mb-4">
            <div class="stat-card bg-primary p-4 rounded">
                <div class="d-flex align-items-center">
                    <div class="stat-icon me-3">
                        <i class="fas fa-file-alt fa-2x"></i>
                    </div>
                    <div class="stat-content">
                        <h3 class="h5">Total Contents</h3>
                        <p class="h2 mb-0">25</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 mb-4">
            <div class="stat-card bg-success p-4 rounded">
                <div class="d-flex align-items-center">
                    <div class="stat-icon me-3">
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                    <div class="stat-content">
                        <h3 class="h5">Active Users</h3>
                        <p class="h2 mb-0">5</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
