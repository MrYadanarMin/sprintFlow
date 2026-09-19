@extends('layouts.app')

@section('title', 'Kanban Board')

@push('styles')
<style>
    .board-column {
        background-color: #f8f9fa;
        border-radius: 8px;
        min-height: 75vh;
    }
    .ticket-card {
        border-left: 4px solid #0d6efd;
        transition: transform 0.15s ease, box-shadow 0.15s ease;
    }
    .ticket-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }
</style>
@endpush

@section('content')
<div class="container-fluid px-4">
    
    <!-- Header Controls -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-1">Sprint 12 Board</h4>
            <p class="text-muted small mb-0">Active Sprint: Sep 14 – Sep 28, 2026</p>
        </div>
        <div>
            <button class="btn btn-primary btn-sm px-3"><i class="fa-solid fa-plus me-1"></i> Create Issue</button>
        </div>
    </div>

    <!-- Kanban Columns -->
    <div class="row g-3">
        
        <!-- To Do Column -->
        <div class="col-12 col-md-3">
            <div class="board-column p-3">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="fw-bold text-uppercase text-secondary mb-0">To Do <span class="badge bg-secondary rounded-pill ms-1">2</span></h6>
                </div>

                <div class="card ticket-card shadow-sm mb-3">
                    <div class="card-body p-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-primary-subtle text-primary border border-primary-subtle">Story</span>
                            <span class="badge bg-danger">Highest</span>
                        </div>
                        <h6 class="card-title fw-semibold text-dark mb-2">
                            <a href="{{ url('/issue-detail') }}" class="text-decoration-none text-dark">FLOW-101: Implement OAuth2 login flow</a>
                        </h6>
                        <div class="d-flex justify-content-between align-items-center text-muted small mt-3">
                            <span><i class="fa-regular fa-comment me-1"></i>3</span>
                            <span class="fw-semibold">Alex M.</span>
                        </div>
                    </div>
                </div>

                <div class="card ticket-card shadow-sm mb-3">
                    <div class="card-body p-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-warning-subtle text-warning-emphasis border border-warning-subtle">Task</span>
                            <span class="badge bg-warning text-dark">Medium</span>
                        </div>
                        <h6 class="card-title fw-semibold text-dark mb-2">FLOW-102: Configure Redis cache layer</h6>
                        <div class="d-flex justify-content-between align-items-center text-muted small mt-3">
                            <span><i class="fa-regular fa-comment me-1"></i>0</span>
                            <span class="fw-semibold">Unassigned</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- In Progress Column -->
        <div class="col-12 col-md-3">
            <div class="board-column p-3">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="fw-bold text-uppercase text-primary mb-0">In Progress <span class="badge bg-primary rounded-pill ms-1">1</span></h6>
                </div>

                <div class="card ticket-card shadow-sm mb-3" style="border-left-color: #0d6efd;">
                    <div class="card-body p-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-danger-subtle text-danger border border-danger-subtle">Bug</span>
                            <span class="badge bg-danger">High</span>
                        </div>
                        <h6 class="card-title fw-semibold text-dark mb-2">FLOW-103: Fix database connection leak on timeout</h6>
                        <div class="d-flex justify-content-between align-items-center text-muted small mt-3">
                            <span><i class="fa-regular fa-comment me-1"></i>5</span>
                            <span class="fw-semibold">Sarah T.</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- In Review Column -->
        <div class="col-12 col-md-3">
            <div class="board-column p-3">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="fw-bold text-uppercase text-info mb-0">In Review <span class="badge bg-info rounded-pill ms-1">1</span></h6>
                </div>

                <div class="card ticket-card shadow-sm mb-3" style="border-left-color: #0dcaf0;">
                    <div class="card-body p-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-primary-subtle text-primary border border-primary-subtle">Story</span>
                            <span class="badge bg-secondary">Low</span>
                        </div>
                        <h6 class="card-title fw-semibold text-dark mb-2">FLOW-104: Design profile setting interface</h6>
                        <div class="d-flex justify-content-between align-items-center text-muted small mt-3">
                            <span><i class="fa-regular fa-comment me-1"></i>2</span>
                            <span class="fw-semibold">John D.</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Closed Column -->
        <div class="col-12 col-md-3">
            <div class="board-column p-3">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="fw-bold text-uppercase text-success mb-0">Done <span class="badge bg-success rounded-pill ms-1">1</span></h6>
                </div>

                <div class="card ticket-card shadow-sm mb-3 opacity-75" style="border-left-color: #198754;">
                    <div class="card-body p-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-secondary-subtle text-secondary border border-secondary-subtle">Task</span>
                            <span class="badge bg-secondary">Lowest</span>
                        </div>
                        <h6 class="card-title fw-semibold text-dark text-decoration-line-through mb-2">FLOW-100: Set up Laravel 11 repository</h6>
                        <div class="d-flex justify-content-between align-items-center text-muted small mt-3">
                            <span><i class="fa-regular fa-comment me-1"></i>1</span>
                            <span class="fw-semibold">Alex M.</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection