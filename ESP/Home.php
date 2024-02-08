<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <title>EPS</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    *{ margin: 0;
        padding: 0;
        box-sizing: border-box }

    body{ font-family: 'Poppins';
        line-height: 1.7em; }

    a{ text-decoration: none;
        color: #F7FBFF }

    .container{ max-width: 950px;
        margin:auto }

    .lead{ font-size: 16px;
        padding: 10px 10px;
        text-align: justify }

    .btn{ display: inline-block;
        padding: 07px 16px;
        background: #04AA6D;
        border: none;
        cursor: pointer;
        font-size: 16px;
        border-radius: 03px;
        color:#fff;
        transition: all 0.3 }

    .clr{ clear: both }

    /* Close Utality Classes */

    #navbar{ background: #04AA6D; overflow: auto;}

    .container img { float: left; width: 100px; margin-right: 20px; padding-bottom: 10px;}

    #navbar p{ float: left; padding-top: 25px; padding-bottom: 20px; font-size: 12px; line-height: 18px;}

    #navbar ul{ list-style: none;
        float: right }

    #navbar ul li{ float: left; padding-top: 20px; padding-bottom: 20px;  }

    #navbar ul li a{ display: block;
        padding: 20px;
        text-align: center;
        transition: all 0.5s }

    #navbar ul li a:hover { background: rgba(5, 95, 62, 0.181); transition: all 0.5s;}
    #navbar ul li a.current{ background: #04AA6D; transition: all 0.5s ;}

    /* Showcase Area */
    #showcase{ background: url('../img/img2.jpg') no-repeat
        center center/cover;
        height: 600px;
        color: #fff }

    .showcase-content{ padding-top: 170px;
        color: #333 }

    .showcase-content h2{
    font-size: 60px;
    line-height: 1.9em; }

    .showcase-content p{ font-size: 20px;
        margin-bottom: 20px; }

    .showcase-content .btn:hover{ background: #04AA6D;
        border: none;
        color:#fff;
        transition: all 0.3s; }
    /* Footer */

    #main-footer{ background: #0269437a;
        padding: 20px;
        margin-top: 20px;
        text-align: center;
        color:#fff;
        font-size: 10px;
        line-height: 15px;}
    </style>
  </head>
  <body>
    <header>

      <!-- Navbar -->
      <nav id="navbar">
        <div class="container">
          <img src="logo.png" width="5%" height="5%">
          <p><a href="#">Municipality of San Vicente, Camarines Norte
            <br> <u>Electronic Procurement System </u> <br> LGU San Vicente Bids and Awards Committee Website Postings </a></p>
          <ul>
            <li><a href="login.html" class="current">login</a></li>
            <li><a href="register.html">register</a></li>
          </ul>
        </div>
      </nav>

      <!-- Showcase Area | for content only--> 
      <div id="showcase">
        <div class="container">
          <div class="showcase-content">
            <h2>The Hub of Technology</h2>
            <p class="lead">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique delectus ut velit
              ducimus quaerat quisquam, ex, suscipit deleniti illum consequatur omnis deserunt,
              placeat facere quasi dolores cupiditate non error necessitatibus! Lorem ipsum dolor,
              sit amet consectetur adipisicing elit.
            </p>
            <a href="#" class="btn">Read More</a>
          </div>
        </div>
      </div>
    </header>

    <footer id="main-footer">
      <div class="container">
        <p>
          <a href="https://sanvicente.com"> <u>Municipality of San Vicente, Camarines Norte</u> </a> <br>
          © 2023 Electronic Procurement System | All Rights Reserved <br>
        </p>
      </div>
    </footer>
  </body>
</html>