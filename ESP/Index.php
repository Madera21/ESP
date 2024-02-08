<!DOCTYPE html>
<html lang="en">



    <head>

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Lato', sans-serif;
        }

        /* Customize your table styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Set fixed column widths */
        th:nth-child(1),
        td:nth-child(1) {
            width: 10%;
        }

        th:nth-child(2),
        td:nth-child(2) {
            width: 15%;
        }

        th:nth-child(3),
        td:nth-child(3) {
            width: 20%;
        }

        th:nth-child(4),
        td:nth-child(4) {
            width: 15%;
        }

        th:nth-child(5),
        td:nth-child(5) {
            width: 15%;
        }

        th:nth-child(6),
        td:nth-child(6) {
            width: 25%;
        }

        button {
            padding: 10px 20px;
            margin: 5px;
           
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }


        /* Add more styles based on your design requirements */

        /* ... (add more styles as needed) ... */
    </style>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Freelancer - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <nav class="navbar navbar-expabackground-color:nd-lg bg-primary text-uppercase fixed-top" id="mainNav">

        
            <div class="container">
            <a class="navbar-brand ml-5" href="./index.php">
                <img src="logo.png" width="20%" height="20%">
                </a>
                <p  href="#page-top"> Municipality of San Vicente, Camarines Norte
                    <br> <u>Electronic Procurement System </u> <br> LGU San Vicente Bids and Awards Committee Website Postings
                 </p>
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
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </head>
    <body id="page-top" style="padding-top: 150px;" >
        <!-- Navigation-->
        

       
        <!-- Masthead-->
        <center>
        <div>
                    <button class="text-center bg-primary Tablinks" onclick="openCity(event, 'ACT')">Active/Ongoing</button>
                    <button class="text-center bg-primary tablinks" onclick="openCity(event, 'AWA')">Awarded</button>
                    <button class="text-center bg-primary tablinks" onclick="openCity(event, 'CLO')">Closed</button>
                    <button class="text-center bg-primary tablinks" onclick="openCity(event, 'FAI')">Failed</button>
                    <button class="text-center bg-primary tablinks" onclick="openCity(event, 'CAN')">Cancelled</button>
        </div>
        </center>
                    
            
            
        
        <div id="ACT" class="tabcontent">
            
        <table class="table table-bordered table-striped table-responsive-stack"  id="tableOne">
            
                <thead>
                  <tr>
                    <th class="text-center">Ref No.</th>
                    <th class="text-center">Publication Date</th>
                    <th class="text-center">Procurement Project</th>
                    <th class="text-center">Procurement Mode</th>
                    <th class="text-center">Closing Date</th>
                    <th class="text-center">Approved Budget For Contract</th>
            
            
                  </tr>
                </thead>
            <?php
                $server = "localhost";
                $user = "root";
                $password = "";
                $db = "procurement";
                
                $conn = mysqli_connect($server,$user,$password,$db);
                
                if(!$conn) {
                    die("Connection Failed:".mysqli_connect_error());
                }
                $sql="SELECT * from project ORDER BY Id DESC";
                $result=$conn-> query($sql);
                $count=1;
                if ($result-> num_rows > 0){
                  while ($row=$result-> fetch_assoc()) {
                    
            ?>
                <tr>
                  <td><?=$row["Id"]?></td>
                  <td> <?=$row["publication_Date"]?></td>
                  <td name="date_out"> <?=$row["PName"]?></td>
                  <td name="q_slot"><?=$row["procurement_mode"]?></td>
                  <td name="q_room"><?=$row["closing_Date"]?></td>
                  <td name="budget"><?=$row["proposed_Budget"]?></td>
                  
                  
                  
                </tr>
                <?php
                        $count=$count+1;
                       
                    }
                }
                ?>
              </table>
        </div>
        </header>


        <!-- Portfolio Section-->
        
        
        <!-- Footer-->
      <body>
      <script>
                function openCity(evt, cityName) {
                  var i, tabcontent, tablinks;
                  tabcontent = document.getElementsByClassName("tabcontent");
                  for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                  }
                  tablinks = document.getElementsByClassName("tablinks");
                  for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                  }
                  document.getElementById(cityName).style.display = "block";
                  evt.currentTarget.className += " active";
                }
                document.getElementById("defaultOpen").click();
                </script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
