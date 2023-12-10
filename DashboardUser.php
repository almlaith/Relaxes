<?php
//Database Connection
include('ConnectionData.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - User</title>
        <!-- Favicon-->
        <link rel="icon" type="Dashboard\image\x-icon" href="Dashboard\assets\favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">Relaxes</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item" ><a class="nav-link active" aria-current="page" href="logOut.php">LogOut</a></li>

                        
                    </ul>
                </div>
            </div>
        </nav>
       
            <!-- Content Row-->
                <div class="col-md-6 mb-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Add Books and More Operations</h2>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="insertBook.php">Go Operations </a></div>
                    </div>
                </div>
              <br>
                <div class="col-md-6 mb-6">
                    <div class="card h-8">
                        <div class="card-body">
                            <h2 class="card-title">Show Books</h2>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="ViewBook.php">Go Book</a></div>
                    </div>
                </div>
            </div>
      
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="Dashboard\js\scripts.js"></script>
    </body>
</html>
