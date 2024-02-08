<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Electronic Procurement System</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYmC+ua3iA6Uqg6QnvYYpp92mQOcYgeStjIcdhKdTELo7qIh4qG5Z27pvP2os"
        crossorigin="anonymous">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">

    <nav class="navbar navbar-expand-lg bg-primary text-uppercase" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">Electronic Procurement System</a>
            <div class="d-flex justify-content-end">
                <form action="./Login.php" method="get">
                    <button type="submit"
                        class="btn btn-primary text-uppercase font-weight-bold rounded text-white">
                        Login
                    </button>
                </form>
                <form action="./Register.php" method="get">
                    <button type="submit"
                        class="btn btn-primary text-uppercase font-weight-bold rounded text-white ml-2">
                        Register
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center mt-5">LOGIN</h1>
        <form action="loginphp.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="username" class="form-label">Email/Company Name</label>
                <input type="text" class="form-control" id="username" name="username"
                    placeholder="E.g ARIK John Mercandising" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                    required>
            </div>
            <button type="submit" class="btn btn-primary" name="login_btn">Login</button>
            <br>
            <a href="#">Forgot Password?</a>
        </form>
        <?php
        // Display error message if set in the URL
        if (isset($_GET['error'])) {
            echo '<script>alert("Incorrect password. Please try again.");</script>';
        }
        ?>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy/mI/8wkTdTE3QqZkwb/6Y2ilDBWKhPOy"
        crossorigin="anonymous"></script>
</body>

</html>