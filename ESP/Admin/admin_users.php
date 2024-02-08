<?php
include('admin_users_delete.php');
$query = "SELECT * from users";  
$run = mysqli_query($conn,$query);  
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  
  <meta charset="UTF-8" />
  <link rel="icon" href="favicon.ico">  
  <title>John Joy Admin Dashboard</title>
  <link rel="stylesheet" href="css/admin_end_style.css" />
  <!-- Boxicons CDN Link -->
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 80%;
    position: absolute;
    left: 150px;
    top: 150px;

  }

  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: #dddddd;
  }
</style>
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <i></i>
      <span class="logo_name">John Joy</span>
    </div>
    <ul class="nav-links">
      <li data-tab="home-content" class="tablinks">
        <a href="admin_end.php" >
          <i class="bx bx-grid-alt"></i>
          <span class="links_name">Membership</span>
        </a>
      </li>
      <li data-tab="product-content" class="tablinks">
        <a href="admin_cont.php" >
          <i class="bx bx-box"></i>
          <span class="links_name">Contacts</span>
        </a>
      </li>
      <li data-tab="order_list-content" class="tablinks active">
        <a href="admin_users.php" class="active">
          <i class="bx bx-list-ul"></i>
          <span class="links_name">Users</span>
        </a>
      </li>

      <li class="log_out">
        <a href="index.php?logout=1">
          <i class="bx bx-log-out"></i>
          <span class="links_name">Log out</span>
        </a>
      </li>
    </ul>
  </div>

  <!--DASHBOARD-->
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class="bx bx-menu sidebarBtn"></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search..." />
        <i class="bx bx-search"></i>
      </div>
      <div class="profile-details">
          <span class="admin_name">
            <?php  if (isset($_SESSION['username'])) : ?><?php endif ?>
          </span>
      </div>
    </nav>

  
<!--MEMBERSHIP-->
?>
  <table  cellspacing="0" cellpadding="0">  
      <thead><tr><th>S.N</th>
          <th>Username</th>
          <th>E-mail</th>
          <th>Action</th>
      </thread>
      <?php   
      $i=1;  
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                     echo "  
                          <tr class='data'>  
                            <td>".$i++."</td>  
                               <td>".$result['username']."</td>  
                               <td>".$result['email']."</td>  
                               <td><a href='admin_users_delete.php?username=".$result['username']."' id='btn'>Delete</a></td>  
                          </tr>  
                     ";  
                }  
           }  
      ?>  
 </table>  
<br>
  
</body>
</html>
