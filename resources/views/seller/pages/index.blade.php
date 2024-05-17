<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Own Appointments</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px 0;
        }

        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .btn-danger {
            background-color: #ff4757;
            border: none;
            color: white;
        }

        header .d-flex span {
            color: white;
            margin-right: 10px;
        }

        header .btn-primary {
            background-color: #ff6347;
            border: none;
        }

        .navbar-light .navbar-nav .nav-link {
            color: #333;
            font-weight: bold;
        }

        .navbar-light .navbar-nav .nav-link:hover {
            color: #ff6347;
        }

        .hero img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <!-- Top Header Section -->
    <header class="bg-dark text-white py-2">
        <div class="container d-flex justify-content-between">
            <button class="btn btn-danger">FOR CUSTOMER</button>
            <div class="d-flex align-items-center">
                <span class="mr-3">help.myownappointments.com</span>
                <a href="#" class="btn btn-primary">Log in</a>
            </div>
        </div>
    </header>

    <!-- Navigation Section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="My Own Appointments" style="height: 50px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#">About us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Solution</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Categories</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">FAQ</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero text-center mt-4">
        <div class="container">
            <img src="hero-image.jpg" alt="Hero Image" class="img-fluid rounded">
        </div>
    </section>

    <!-- Optional JS for Bootstrap functionality -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
