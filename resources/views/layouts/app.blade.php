<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SprintFlow - @yield('title', 'Agile Management')</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    @stack('styles')
</head>
<body class="bg-light">

    <!-- Global Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid px-4">
            <a class="navbar-brand fw-bold text-primary" href="{{ url('/board') }}">
                <i class="fa-solid fa-bolt me-2"></i>SprintFlow
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('board') || Request::is('/') ? 'active' : '' }}" href="{{ url('/board') }}">Board</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('backlog') ? 'active' : '' }}" href="{{ url('/backlog') }}">Backlog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('issue-detail') ? 'active' : '' }}" href="{{ url('/issue-detail') }}">Issue Detail</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center text-white">
                    <span class="me-3 small">Project Key: <strong>FLOW</strong></span>
                    <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width:36px; height:36px;">
                        <strong>SH</strong>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Content Container -->
    <main class="py-4">
        @yield('content')
    </main>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>