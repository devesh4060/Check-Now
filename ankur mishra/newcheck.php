<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CBC - Bootstrap 5</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <style>
        :root {
            --green: #3A9943;
        }

        * {
            font-family: 'Roboto', sans-serif;
            text-transform: capitalize;
            transition: all .2s linear;
        }

        body {
            font-size: 16px;
        }

        .header {
            background-color: #41B3A2;
        }

        .header .navbar-nav a {
            color: white;
            font-size: 1.25rem;
            margin-right: 1.5rem;
        }

        .header .navbar-nav a:hover {
            color: #c05d0c;
        }

        .header .icon a {
            color: #666;
            font-size: 2rem;
            margin-left: 1.5rem;
        }

        .header .icon a:hover {
            color: #c05d0c;
        }

        .btnbook {
            background-color: rgb(226, 43, 153);
            color: white;
            border-radius: 8px;
            text-transform: uppercase;
            padding: 0.5rem 1rem;
        }

        .btnbook:hover {
            background: rgb(77, 49, 49);
        }

        .CBC-box {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px 0;
        }

        .CBC-box img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .CBC-box-text-column {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .CBC-box-text-column h1 {
            color: red;
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .CBC-box-text-column p {
            font-size: 1rem;
            line-height: 1.5;
            text-align: justify;
        }

        .footer-style {
            background-color: #135D66;
            color: white;
            padding: 40px 20px;
        }

        .footer-style-column h3 {
            margin-bottom: 15px;
            font-size: 1.25rem;
            border-bottom: 2px solid white;
            padding-bottom: 10px;
        }

        .footer-style-column p,
        .footer-style-column a {
            color: white;
            text-decoration: none;
            margin: 5px 0;
        }

        .footer-style-column a:hover {
            text-decoration: underline;
            color: red;
        }

        .footer-social-icons a {
            color: white;
            font-size: 1.25rem;
            margin: 5px;
        }

        .footer-social-icons a:hover {
            color: red;
        }

        .footer-bottom-for-mee {
            text-align: center;
            margin-top: 20px;
            font-size: 0.875rem;
        }

        .footer-bottom-for-mee i {
            color: red;
        }
    </style>
</head>
<body>
<header class="header">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center py-2 border-bottom border-dark">
            <div class="d-flex align-items-center">
                <span class="text-white me-3">Follow us:</span>
                <a href="#" class="fab fa-facebook text-white me-2"></a>
                <a href="#" class="fab fa-instagram text-white me-2"></a>
                <a href="#" class="fab fa-twitter text-white me-2"></a>
                <a href="#" class="fab fa-linkedin text-white"></a>
            </div>
            <div class="d-flex align-items-center">
                <span class="text-white me-3">7:30 AM To 10:30 PM</span>
                <span class="text-white me-2">Call us:</span>
                <a href="#" class="text-white">+91 9988776655</a>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center py-3">
            <a href="#" class="logo text-white fs-3"><i class="fas fa-seedling text-warning"></i> CheckNow</a>
            <form action="" class="d-flex align-items-center">
                <input type="search" id="search-bar" class="form-control bg-transparent text-white" placeholder="Search here...">
                <label for="search-bar" class="fas fa-search text-white ms-2"></label>
            </form>
            <button id="menu-bar" class="btn btn-outline-light d-lg-none"><i class="fas fa-bars"></i></button>
            <div class="icon d-none d-lg-flex align-items-center">
                <button type="submit" class="btnbook me-3"><a href="home-book.php" class="text-white">Book Home</a></button>
                <a href="login-sign.php" class="fas fa-user-circle"></a>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="collapse navbar-collapse justify-content-center">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#category" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="#category" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="#deal" class="nav-link">Report</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link">Service</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<!-- About CBC -->
<div class="container">
    <div class="CBC-box row">
        <div class="col-md-6">
            <img src="new-cbc.jpg" alt="Image">
        </div>
        <div class="col-md-6 CBC-box-text-column">
            <h1>About CBC</h1>
            <p>
                "A Complete Blood Count (CBC) is a blood test that checks different parts of your blood to see how healthy you are. It measures things like red blood cells, which carry oxygen; white blood cells, which fight infections; hemoglobin, which is the protein in red blood cells; hematocrit, which shows the percentage of red blood cells in your blood; and platelets, which help your blood clot. Doctors use a CBC to detect problems like anemia, infections, or other health issues. It's a key test to ensure your body is functioning properly."
            </p>
        </div>
    </div>
</div>

<!-- Footer -->


<!-- Bootstrap 5 JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

