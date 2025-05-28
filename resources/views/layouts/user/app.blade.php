<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Sidebar styles */
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            background-color: #343a40;
            padding-top: 20px;
        }

        .sidebar a {
            color: #fff;
            padding: 15px;
            text-decoration: none;
            display: block;
        }

        .sidebar a:hover {
            background-color: #575d63;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .brand-logo {
            color: #fff;
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="brand-logo">ShoeStore</div>
      
        <a href="#"><i class="fas fa-box"></i> Products</a>
        <a href="#"><i class="fas fa-users"></i> Customers</a>
        <a href="#"><i class="fas fa-shopping-cart"></i> Orders</a>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>

    <!-- Main Content -->
    <div class="content">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
