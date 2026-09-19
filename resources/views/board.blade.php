<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SprintFlow - Kanban Board</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
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
</head>
<body class="bg-light">

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid px-4">
            <a class="navbar-brand fw-bold text-primary" href="#"><i class="fa-solid fa-bolt me-2"></i>SprintFlow</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="board.blade.php">Board</a></li>
                    <li class="nav-item"><a class="nav-link" href="backlog.blade.php>Backlog</a></li>
                    <li class="nav-item"><a class="nav-link" href="issue-detail.balde.php">Reports</a></li>
                </ul>
                <div class="d-flex align-items-center text-white">
                    <span class="me-3 small">Project Key: <strong>FLOW</strong></span>
                    <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width:36px; height:36px;"><strong>SH</strong></div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Container -->
    <div class="container-fluid px-4 py-4">
        
        <!-- Header Controls -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h4 class="fw-bold mb-1">Sprint 12 Board</h4>
                <p class="text-muted small mb-0">Active Sprint: Sep 14 – Sep 28, 2026</p>
            </div>
            <div>
                <button class="btn btn-primary btn-sm px-3"><i class="fa-solid fa-plus me-1"></i> Create Issue</button>
            </div>@extends('layouts.app')

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
        
        <!-- Column 1: Backlog / To Do -->
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

        <!-- Column 2: In Progress -->
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

        <!-- Column 3: In Review -->
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

        <!-- Column 4: Closed / Done -->
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
        </div>

        <!-- Kanban Columns -->
        <div class="row g-3">
            
            <!-- Column 1: Backlog / To Do -->
            <div class="col-12 col-md-3">
                <div class="board-column p-3">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="fw-bold text-uppercase text-secondary mb-0">To Do <span class="badge bg-secondary rounded-pill ms-1">2</span></h6>
                    </div>

                    <!-- Card 1 -->
                    <div class="card ticket-card shadow-sm mb-3">
                        <div class="card-body p-3">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-primary-subtle text-primary border border-primary-subtle">Story</span>
                                <span class="badge bg-danger">Highest</span>
                            </div>
                            <h6 class="card-title fw-semibold text-dark mb-2">FLOW-101: Implement OAuth2 login flow</h6>
                            <div class="d-flex justify-content-between align-items-center text-muted small mt-3">
                                <span><i class="fa-regular fa-comment me-1"></i>3</span>
                                <span class="fw-semibold">Alex M.</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
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

            <!-- Column 2: In Progress -->
            <div class="col-12 col-md-3">
                <div class="board-column p-3">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="fw-bold text-uppercase text-primary mb-0">In Progress <span class="badge bg-primary rounded-pill ms-1">1</span></h6>
                    </div>

                    <!-- Card 3 -->
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

            <!-- Column 3: In Review -->
            <div class="col-12 col-md-3">
                <div class="board-column p-3">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="fw-bold text-uppercase text-info mb-0">In Review <span class="badge bg-info rounded-pill ms-1">1</span></h6>
                    </div>

                    <!-- Card 4 -->
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

            <!-- Column 4: Closed / Done -->
            <div class="col-12 col-md-3">
                <div class="board-column p-3">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="fw-bold text-uppercase text-success mb-0">Done <span class="badge bg-success rounded-pill ms-1">1</span></h6>
                    </div>

                    <!-- Card 5 -->
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

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>