<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style type="text/css">
        .footer {
            padding-top: 1rem;
            padding-bottom: 1rem;
            background-color: #212529!important;
            color: #fff;
        }
    </style>
  </head>
  <body >
    <!--nav-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style="color:#144790;"><h3><b>Management<b style="color:#b92121;">System</b></b></h3></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Student data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Activity info</a>
                    </li>
                   
                </ul>
                <form class="d-flex"> 
                    <button class="btn btn-info" type="submit">Login</button>
                </form>
                </div>
            </div>
        </nav>
<!--konten-->

        <div class="jumbotron">
            <div class="bg-light p-5 rounded">
                <h1>Welcome</h1>
                    <p class="lead">School Management System is a large database system which can be used for managing your school's day to day business. SMS allows users to store almost all of their school's information electronically, including information on students, employees, properties, teaching meteorites etc.</p>
                    <a class="btn btn-lg btn-primary" href="/docs/5.0/components/navbar/" role="button">
                        Data &raquo;
                    </a>
              </div>
        </div>
<br>
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                  <div class="card shadow-sm">
                     <div class="card-header bg-dark text-light" align="center">
                        <h4 class="my-0 fw-normal">Activities</h4>
                    </div>
                    <img src="<?= base_url('assets/photo/gambar1.png')?>" style="height: 200px;">

                    <div class="card-body">
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-secondary">View &raquo;</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm ">
                    <div class="card-header bg-dark text-light" align="center">
                        <h4 class="my-0 fw-normal">News</h4>
                    </div>
                    <img src="<?= base_url('assets/photo/gambar2.png')?>" style="height: 200px; ">

                    <div class="card-body">
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-secondary">View &raquo;</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm" >
                    <div class="card-header bg-dark text-light" align="center">
                        <h4 class="my-0 fw-normal">Students</h4>
                    </div>
                    <img src="<?= base_url('assets/photo/gambar3.jpg')?>" style="height: 200px;" >
                    <div class="card-body">
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a type="button" href="<?= base_url('Data/DataSiswa')?>" class="btn btn-sm btn-outline-secondary">View &raquo;</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>    
        </div>
<br>
<!--Footer-->
        <footer class="footer text-center">
          <div class="container">
              ManagementSystem built for by&copy;Shrl.
          </div>
        </footer>  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
   
  </body>
</html>