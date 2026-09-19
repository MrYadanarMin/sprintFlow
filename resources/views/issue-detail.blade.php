@extends('layouts.app')

@section('title', 'FLOW-101 Details')

@section('content')
<div class="container py-2">
    
    <!-- Breadcrumb Header -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/board') }}">Projects</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/board') }}">SprintFlow (FLOW)</a></li>
            <li class="breadcrumb-item active" aria-current="page">FLOW-101</li>
        </ol>
    </nav>

    <div class="row g-4">
        
        <!-- Left Column: Title, Description, FIFO Comments -->
        <div class="col-12 col-lg-8">
            
            <h3 class="fw-bold mb-3">Implement OAuth2 login flow with Google Provider</h3>

            <!-- Description -->
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-white fw-bold">Description</div>
                <div class="card-body">
                    <p class="mb-2"><strong>As a</strong> registered user,</p>
                    <p class="mb-2"><strong>I want to</strong> authenticate using my Google Account,</p>
                    <p class="mb-0"><strong>So that</strong> I don't need to enter manual password credentials upon login.</p>
                </div>
            </div>

            <!-- FIFO Activity & Comments Section -->
            <div class="card shadow-sm">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <span class="fw-bold"><i class="fa-regular fa-comments me-2"></i>Activity & Comments (FIFO Order)</span>
                    <span class="badge bg-secondary">Sorted: ASC (Oldest First)</span>
                </div>
                <div class="card-body">
                    
                    <!-- Comment Thread List (Rendered ASC / Oldest First) -->
                    <div class="comment-thread mb-4">
                        
                        <!-- Comment 1 (Oldest) -->
                        <div class="border rounded p-3 mb-3 bg-white">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="fw-bold text-primary">Alex M. <small class="text-muted ms-2">(Creator)</small></span>
                                <small class="text-muted">Sep 18, 2026 at 09:15 AM</small>
                            </div>
                            <p class="mb-0 text-secondary">Initial requirements drafted. Please review scope before beginning sprint execution.</p>
                        </div>

                        <!-- Comment 2 -->
                        <div class="border rounded p-3 mb-3 bg-white">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="fw-bold text-dark">Sarah T. <small class="text-muted ms-2">(Lead Dev)</small></span>
                                <small class="text-muted">Sep 18, 2026 at 11:30 AM</small>
                            </div>
                            <p class="mb-0 text-secondary">Google OAuth credentials created in Google Developer Console. Adding callback endpoints in backend.</p>
                        </div>

                    </div>

                    <!-- Add Comment Box (Active State) -->
                    <div class="border-top pt-3" id="commentInputSection">
                        <label class="form-label fw-bold small">Add a Comment</label>
                        <textarea class="form-control mb-2" id="commentText" rows="3" placeholder="Type your comment..."></textarea>
                        <button class="btn btn-primary btn-sm px-3">Post Comment</button>
                    </div>

                    <!-- Locked Comment Box Notice -->
                    <div class="alert alert-warning d-flex align-items-center mt-3 d-none" id="commentLockedNotice" role="alert">
                        <i class="fa-solid fa-lock me-2"></i>
                        <div><strong>Ticket is Closed:</strong> New comments are disabled for completed tickets.</div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Right Side Panel: Attributes & Metadata -->
        <div class="col-12 col-lg-4">
            <div class="card shadow-sm">
                <div class="card-header bg-white fw-bold">Details</div>
                <div class="card-body">
                    
                    <!-- Status Selector -->
                    <div class="mb-3">
                        <label class="form-label small text-muted fw-bold">Status</label>
                        <select class="form-select form-select-sm fw-semibold" id="statusSelect">
                            <option value="To Do">To Do</option>
                            <option value="In Progress" selected>In Progress</option>
                            <option value="In Review">In Review</option>
                            <option value="Closed">Closed</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small text-muted fw-bold">Issue Type</label>
                        <div><span class="badge bg-primary">Story</span></div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small text-muted fw-bold">Priority</label>
                        <div><span class="badge bg-danger">Highest</span></div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small text-muted fw-bold">Assignee</label>
                        <div class="fw-semibold text-dark">Alex M.</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small text-muted fw-bold">Reporter</label>
                        <div class="fw-semibold text-dark">Sarah T.</div>
                    </div>

                    <div class="mb-0">
                        <label class="form-label small text-muted fw-bold">Story Points</label>
                        <div class="fw-semibold text-dark">5 Points</div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@push('scripts')
<script>
    // Frontend demo logic to trigger comment box lock when status is set to Closed
    document.getElementById('statusSelect').addEventListener('change', function() {
        const inputSection = document.getElementById('commentInputSection');
        const lockedNotice = document.getElementById('commentLockedNotice');
        
        if (this.value === 'Closed') {
            inputSection.classList.add('d-none');
            lockedNotice.classList.remove('d-none');
        } else {
            inputSection.classList.remove('d-none');
            lockedNotice.classList.add('d-none');
        }
    });
</script>
@endpush