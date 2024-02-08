<!DOCTYPE html>
<html lang="en">
    <head>
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
    </head>
    <body id="page-top">

        <!-- Navigation-->
        <nav class="navbar navbar-expabackground-color:nd-lg bg-primary text-uppercase" id="mainNav">
            <div class="container">
                <img src="logo.png" width="8%" height="8%">
                <h6  href="#page-top"> Municipality of San Vicente, Camarines Norte
                    <br> <u>Electronic Procurement System </u> <br> LGU San Vicente Bids and Awards Committee Website Postings </h6>

                <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'London')">Oppurtunities</button>
                        <button class="tablinks" onclick="openCity(event, 'Paris')">Notices</button>
                        <button class="tablinks" onclick="openCity(event, 'Tokyo')">Downloadables</button>
                      </div>
                      <div class="dropdown">
                        <button class="dropbtn">Setting</button>
                        <div class="dropdown-content">  
                          <a href="#">My Profile</a>
                          <a href="#">My Tender</a>
                          <a href="#">Contact Us</a>
                          <a href="#">About EPS</a>
                          <a href="#">Logout</a>
                        </div>
                      </div>
                    
                </div>     
                
               
        
                
            </div>
            <div id="London" class="tabcontent">
                <h3>Oppurtunities</h3>
                <table class="table ">
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
                    $sql="SELECT * from project";
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
              
              <div id="Paris" class="tabcontent">
                <h3>Notices</h3>
                
                    <table class="table ">

                        
                          <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Procurement Project</th>
                            <th class="text-center">Date</th>
                            <th class="text-center">Action</th>
                          </tr>
                       
        
                        <tr>
                            <th>
                                <p>-</p> </th>
                            <th>
                                <p>-</p> </th>
                            <th>
                                <p>-</p> </th>
                                <th><button class="btn"><u> View </u></button>
                            </th>
                          </tr>
                          <?php
                    $server = "localhost";
                    $user = "root";
                    $password = "";
                    $db = "procurement";
                    
                    $conn = mysqli_connect($server,$user,$password,$db);
                    
                    if(!$conn) {
                        die("Connection Failed:".mysqli_connect_error());
                    }
                    $sql="SELECT * from project";
                    $result=$conn-> query($sql);
                    $count=1;
                    if ($result-> num_rows > 0){
                      while ($row=$result-> fetch_assoc()) {
                        
                ?>
        
        
                        
                        <tr>
                          <td><?=$row["id"]?></td>
                          <td> <?=$row["date_in"]?></td>
                          <td name="date_out"> <?=$row["date_out"]?></td>
                          <td name="q_slot"><?=$row["q_slot"]?></td>
                          <td name="q_room"><?=$row["q_room"]?></td>
                          
                          
                          
                        </tr>
                        <?php
                                $count=$count+1;
                               
                            }
                        }
                        ?>
                      </table>
                    
                </header>
                <!-- Portfolio Section-->
                
                
        
        
                </div>
                <!-- Bootstrap core JS-->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
                <!-- Core theme JS-->
                <script src="js/scripts.js"></script>
                <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
                <!-- * *                               SB Forms JS                               * *-->
                <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
                <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
                <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
              </div>
            <!-- Masthead-->
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
                </script>
                
       
    </body>
</html>
