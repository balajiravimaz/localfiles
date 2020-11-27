<?php
include_once ("./inc/db.php");
?>
<!-- <!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="sass/main.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<body>
  <section id="sidemenu">
    <div class="vitap-logo">
      <img src="img/l1.jpg" />
    </div>
    <nav>
      <a href="#" class="active"><i class="fa fa-dashboard"></i><span class="menu-close">Dashboard</span>
      </a>
      <a href="#"><i class="fa fa-users"></i>
        <span class="menu-close">Faculty</span></a>
      <a href="add.html"><i class="fa fa-plus"></i> <span class="menu-close">Add</span>
      </a>
      <a href="edit.html"><i class="fa fa-edit"></i> <span class="menu-close">Edit</span></a>
      <a href="#"><i class="fa fa-trash-o"></i>
        <span class="menu-close"> Delete</span></a>
      <a href="#"><i class="fa fa-sign-out"></i><span class="menu-close">Logout</span></a>
    </nav>
  </section>
  <div class="side-head">
    <header id="header">
      <div class="search">
        <i class="fa fa-bars" id="bars"> </i>
        <i class="fa fa-search"> </i>
        <input type="text" name="search" placeholder="Search here..." />
      </div>
      <div class="user-info">
        <a href="#" class="add">+ Add</a>
        <a href="#" class="noti">
          <i class="fa fa-bell-o"> </i> <span class="circle">3</span></a>
        <a href="#">
          <div class="user-img"></div>
          <i class="fa fa-caret-down"></i>
        </a>
      </div>
    </header> -->
    <section id="area-content">
      <div class="heading">
        <h1>Dashboard</h1>
        <p>Welcome to Go Job</p>
      </div>
      <div class="cards">
        <div class="card">
          <div class="edu-cont">
            <div class="col-md-3">
              <i class="fa fa-group" style="margin-left: -5px;"></i>
              <span class="d-circle">50</span>
            </div>
            <p>Total Faculties</p>
          </div>
        </div>
        <div class="card">
          <div class="edu-cont">
            <div class="col-md-3">
              <i class="fa fa-male"></i><span class="d-circle">50</span>
            </div>
            <p>Male Faculties</p>
          </div>
        </div>
        <div class="card">
          <div class="edu-cont">
            <div class="col-md-3">
              <i class="fa fa-female"></i><span class="d-circle">30</span>
            </div>
            <p>Female Faculties</p>
          </div>
        </div>
        <div class="card">
          <div class="edu-cont">
            <div class="col-md-3">
              <i class="fa fa-building"></i>
              <span class="d-circle" style="padding-left: 10px;">7</span>
            </div>
            <p>Total Departments</p>
          </div>
        </div>
      </div>
      <h1>Recently Joined Faculties</h1>
      <div class="table" style="overflow-x: auto;">
        <table>
          <thead>
            <tr>
              <th>
                S.No
              </th>
              <th>
                Image
              </th>
              <th>
                Name
              </th>
              <th>
                Department
              </th>
              <th>
                Date of Joining
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>
                <img src="https://vitap.ac.in/wp-content/uploads/2019/08/gopi-krishnan-1.jpg" class="f-img" />
              </td>
              <td>Dr. Gopi Krishnan</td>
              <td>CSE</td>
              <td>01-10-2019</td>
            </tr>
            <tr>
              <td>1</td>
              <td>
                <img src="https://vitap.ac.in/wp-content/uploads/2019/08/gopi-krishnan-1.jpg" class="f-img" />
              </td>
              <td>July 28, april</td>
              <td>ECE</td>
              <td>July 28, april</td>
            </tr>
            <tr>
              <td>1</td>
              <td>
                <img src="https://vitap.ac.in/wp-content/uploads/2019/08/gopi-krishnan-1.jpg" class="f-img" />
              </td>
              <td>July 28, april</td>
              <td>Maths</td>
              <td>July 28, april</td>
            </tr>
            <tr>
              <td>1</td>
              <td>
                <img src="https://vitap.ac.in/wp-content/uploads/2019/08/gopi-krishnan-1.jpg" class="f-img" />
              </td>
              <td>July 28, april</td>
              <td>Physics</td>
              <td>July 28, april</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </div>
  <script src="js/script.js"></script>
</body>

</html>