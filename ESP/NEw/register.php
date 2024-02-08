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
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expabackground-color:nd-lg bg-primary text-uppercase" id="mainNav">
            <div class="container">
            <a class="navbar-brand ml-5" href="./index.php">
                <img src="logo.png" width="20%" height="20%">
                </a>
                <p  href="#page-top"> Municipality of San Vicente, Camarines Norte
                    <br> <u>Electronic Procurement System </u> <br> LGU San Vicente Bids and Awards Committee Website Postings
                 </p>
                 <div class="d-flex justify-content-end">
                    <form action="./Login.php" method="get">
                        <button type="submit" class="btn btn-primary text-uppercase font-weight-bold rounded text-white">
                            Login
                        </button>
                    </form>
                    <form action="./Register.php" method="get">
                        <button type="submit" class="btn btn-primary text-uppercase font-weight-bold rounded text-white ml-2">
                            Register
                        </button>
                    </form>
                </div>
                
            </div>
        </nav>
        <div class="modal-content">
        <div class="center">
            <div class="container">
                <form enctype="multipart/form-data" action="./controller/register.php" method="POST">
                    <div class="center">
                        <h1 class="text-center">REGISTER</h1>
                        <table class="table">
                            <tr>
                                <th><p>Company Name*</p></th>
                                <th><p>Philgeps Member*</p></th>
                                <th><p>Industry*</p></th>
                            </tr>
                            <tr>
                                <td><input type="text" name="CompanyName" required class="form-control"></td>
                                <td><input type="text" name="first_name" required class="form-control"></td>
                                <td><input type="text" name="first_name" required class="form-control"></td>
                            </tr>
                            <tr>
                                <th><p>Email*</p></th>
                                <th><p>Password*</p></th>
                                <th><p>Contact number*</p></th>
                            </tr>
                            <tr>
                                <td><input type="text" name="Email" required class="form-control"></td>
                                <td><input type="text" name="Password" required class="form-control"></td>
                                <td><input type="text" name="Contact number" required class="form-control"></td>
                            </tr>
                        </table>
                        <div class="text-center">
                            <button name="register" class="btn btn-primary">Next</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </body>
</html>