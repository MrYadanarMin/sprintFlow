<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SprintFlow - Issue Details</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid px-4">
            <a class="navbar-brand fw-bold text-primary" href="#"><i class="fa-solid fa-bolt me-2"></i>SprintFlow</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#">Board</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Backlog</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Workspace -->
    <div class="container py-4">
        
        <!-- Breadcrumb Header -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Projects</a></li>
                <li class="breadcrumb-item"><a href="#">SprintFlow (FLOW)</a></li>
                <li class="breadcrumb-item active" aria-current="page">FLOW-101</li>
            </ol>
        </nav>

        <div class="row g-4">
            
            <!-- Left Column: Title, Description, FIFO Comments -->
            <div class="col-12 col-lg-8">
                
                <!-- Ticket Title -->
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
                        <div class="border-top pt-3">
                            <label class="form-label fw-bold small">Add a Comment</label>
                            <textarea class="form-control mb-2" rows="3" placeholder="Type your comment..."></textarea>
                            <button class="btn btn-primary btn-sm px-3">Post Comment</button>
                        </div>

                        <!-- Locked Comment Box Notice (Show when ticket is Closed) -->
                        <div class="alert alert-warning d-flex align-items-center mt-3 d-none" role="alert">
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
                            <select class="form-select form-select-sm fw-semibold">
                                <option value="To Do">To Do</option>
                                <option value="In Progress" selected>In Progress</option>
                                <option value="In Review">In Review</option>
                                <option value="Closed">Closed</option>
                            </select>
                        </div>

                        <!-- Issue Type -->
                        <div class="mb-3">
                            <label class="form-label small text-muted fw-bold">Issue Type</label>
                            <div><span class="badge bg-primary">Story</span></div>
                        </div>

                        <!-- Priority -->
                        <div class="mb-3">
                            <label class="form-label small text-muted fw-bold">Priority</label>
                            <div><span class="badge bg-danger">Highest</span></div>
                        </div>

                        <!-- Assignee -->
                        <div class="mb-3">
                            <label class="form-label small text-muted fw-bold">Assignee</label>
                            <div class="fw-semibold text-dark">Alex M.</div>
                        </div>

                        <!-- Reporter -->
                        <div class="mb-3">
                            <label class="form-label small text-muted fw-bold">Reporter</label>
                            <div class="fw-semibold text-dark">Sarah T.</div>
                        </div>

                        <!-- Story Points -->
                        <div class="mb-0">
                            <label class="form-label small text-muted fw-bold">Story Points</label>
                            <div class="fw-semibold text-dark">5 Points</div>
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