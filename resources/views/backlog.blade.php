@extends('layouts.app')

@section('title', 'Backlog & Sprint Planning')

@section('content')
<div class="container-fluid px-4">
    
    <!-- Page Title & Actions -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-1">Product Backlog & Sprint Planning</h4>
            <p class="text-muted small mb-0">Organize user stories and estimate sprint workload</p>
        </div>
        <button class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-plus me-1"></i> Create Issue</button>
    </div>

    <!-- Active Sprint Container -->
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <span class="fw-bold me-2">Sprint 12 (Active)</span>
                <span class="badge bg-success me-2">4 Issues</span>
                <span class="text-muted small">Sep 14, 2026 – Sep 28, 2026</span>
            </div>
            <button class="btn btn-sm btn-outline-danger">Complete Sprint</button>
        </div>
        <div class="list-group list-group-flush">
            
            <div class="list-group-item d-flex align-items-center justify-content-between py-3">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-grip-vertical text-muted me-3"></i>
                    <span class="badge bg-primary me-2">Story</span>
                    <a href="{{ url('/issue-detail') }}" class="fw-semibold me-3 text-decoration-none text-dark">FLOW-101</a>
                    <span>Implement OAuth2 login flow</span>
                </div>
                <div class="d-flex align-items-center">
                    <span class="badge bg-danger me-3">Highest</span>
                    <span class="badge bg-light text-dark border me-3">5 Pts</span>
                    <span class="small text-muted">Alex M.</span>
                </div>
            </div>

            <div class="list-group-item d-flex align-items-center justify-content-between py-3">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-grip-vertical text-muted me-3"></i>
                    <span class="badge bg-warning text-dark me-2">Task</span>
                    <span class="fw-semibold me-3">FLOW-102</span>
                    <span>Configure Redis cache layer</span>
                </div>
                <div class="d-flex align-items-center">
                    <span class="badge bg-warning text-dark me-3">Medium</span>
                    <span class="badge bg-light text-dark border me-3">3 Pts</span>
                    <span class="small text-muted">Unassigned</span>
                </div>
            </div>

        </div>
    </div>

    <!-- Product Backlog Container -->
    <div class="card shadow-sm">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <div>
                <span class="fw-bold me-2">Product Backlog</span>
                <span class="badge bg-secondary">2 Issues</span>
            </div>
            <button class="btn btn-sm btn-primary"><i class="fa-solid fa-play me-1"></i> Create Sprint</button>
        </div>
        <div class="list-group list-group-flush">

            <div class="list-group-item d-flex align-items-center justify-content-between py-3">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-grip-vertical text-muted me-3"></i>
                    <span class="badge bg-danger me-2">Bug</span>
                    <span class="fw-semibold me-3">FLOW-105</span>
                    <span>Fix CSV export encoding issue on Windows</span>
                </div>
                <div class="d-flex align-items-center">
                    <span class="badge bg-warning text-dark me-3">High</span>
                    <span class="badge bg-light text-dark border me-3">2 Pts</span>
                    <span class="small text-muted">Unassigned</span>
                </div>
            </div>

            <div class="list-group-item d-flex align-items-center justify-content-between py-3">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-grip-vertical text-muted me-3"></i>
                    <span class="badge bg-primary me-2">Story</span>
                    <span class="fw-semibold me-3">FLOW-106</span>
                    <span>Add dark mode theme toggle to settings</span>
                </div>
                <div class="d-flex align-items-center">
                    <span class="badge bg-secondary me-3">Low</span>
                    <span class="badge bg-light text-dark border me-3">1 Pt</span>
                    <span class="small text-muted">Sarah T.</span>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection