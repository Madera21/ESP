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
                <img src="logosv.png" width="8%" height="8%">
                <th><h1 style="font-size: 180%;">Welcome, Admin</h1></th>
                <h6  href="#page-top"> Municipality of San Vicente, Camarines Norte
                    <br> <u>Electronic Procurement System </u> <br> LGU San Vicente Bids and Awards Committee Website Postings </h6>
                
            </div>
        </nav>
        <div>
            <table width="80%"> 
                <tr>      
                <th><img src= "envelope.png" width="10%" height="10%">
                <th> ITB No. 23-1150</th>  
                <th>Status: ACTIVE </th>
                <th>Bidding</th>
                <th>Reference No. 010</th>
                </tr>  
            </table>
            
        </div>
        <div class="tab">
        <center>
            <button style ="width: auto;" class="tablinks" onclick="openCity(event, 'Summary')">Summary</button>
            <button style ="width: auto;" class="tablinks" onclick="openCity(event, 'Documents')">Documents</button>
            <button style ="width: auto;" class="tablinks" onclick="openCity(event, 'Bidding')">Bidding</button>

        </center>
        </div>
        <div id="Summary" class="tabcontent">
            <table width="100%">
                <tr>
                    <th><b>Procurement Project</b></th>
                    <th> Category</th>
                </tr>
                <tr> 
                    <td> Supply and Delivery of Satellite Phones for LGU Emergency/Disaster Communication System</br></td>
                    <td> Computer Supplies</td>
                </tr>
                <tr>
                    <th><b>Procurement Mode</b></th>
                </tr>
                <tr>
                    <td>Competitive Bidding</td>
                </tr>
                <tr>
                    <th><b>Approved budget for contract</b></th>
                </tr>
                <tr>
                    <td>305 354.00</td>
                </tr>
                <tr>
                    <th><b> Publication Date </b></th>
                    <th><b> Closing Date </b></th>
                    <th><b> Delivery Period </b></th>
                </tr>
                <tr> 
                    <td> 11/09/2023</td>
                    <td> 11/16/2023</td>
                    <td> 7 days</td>
                    <td><button style="align:right;"> View Document</button></td>
    
                </tr>
    
            </table>
            </div>

            <div id="Documents" class="tabcontent">
                <h3>Documents</h3>
                <p>Example File</p>
                <p>Example File</p>
                <p>Example File</p>
                <p>ExampleFile</p>
                <p>Example File</p> 
              </div>

            <div id="Bidding" class="tabcontent">
                <div style= "height: 50%;" class="container">
                    
                <table width="100%" >
                    <tr>
                      <th>Bidders</th>
                      <th>Current Bid</th>
                    </tr>
                    <tr>
                      <td>Arik General Merchandising</td>
                      <td style="color:red">PHP 310,500.00</td>
                    </tr>
                    <tr>
                      <td>101 Department Store</td>
                      <td style="color:green">PHP 290,000.00</td>
                    </tr>
                    <tr>
                      <td>Hongkong Trading</td>
                      <td style="color:red">PHP 300,000.00</td>
                    </tr>
                    <p style="text-align: right; color:red">Budget: PHP 312, 808.00</p>
                </div>   
                <table>
                    <tr>
                        <th>Time Check: 12:52</th>
                    </tr>
                </table> 
                <table>
                    <tr>
                        <th>Bidding Status: Ongoing</th>
                    </tr>
                </table> 
                <p style ="border-style:solid">Bidding Time 10:00 am-1:00 pm<br>November 30, 2023</br></p>.</p>
                
                
          
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
