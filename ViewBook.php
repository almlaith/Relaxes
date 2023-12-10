<?php
//Databse Connection file
include('ConnectionData.php');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Relaxes - Books</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="index.php">Relaxes</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <li class="nav-item" ><a class="nav-link active" aria-current="page" href="logOut.php">LogOut</a></li>

            </div>
        </nav>
        <?php
        $ret=mysqli_query($conn,"select * from books");
        $cnt=1;
        while ($row=mysqli_fetch_array($ret)) {
        ?>
       
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5">
                
                <div class="col-md-4 mb-2">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title"><?php  echo $row['book_name'];?></h2>
                            <p class="card-text"><?php  echo $row['author_name'];?></p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="<?php echo $row['Location']; ?>">Download</a></div>
                    </div>
                </div>
            </div>
</div>
<?php 
$cnt=$cnt+1;
}?>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
