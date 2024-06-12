<?php include 'db_access.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width. initial-scale=1" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/style.css" />

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">


    <title>Comments | Infinity & Beyond</title>

</head>

<body class="d-flex flex-column min-vh-100">

    <!-- NAVIGATION -->

    <nav class="navbar navbar-expand-md mt-1 mb-5">
        <div class="container">
            <a class="navbar-brand astranautical" href="index.html">
            <i class="bi bi-moon-stars-fill"></i> ASTRANAUTICAL LABS</a>
            <button class="navbar-toggler custom-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link astra-nav hvr-underline-from-left" href="about.html">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link astra-nav hvr-underline-from-left" href="resume.html">Resume</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link astra-nav hvr-underline-from-left" href="projects.html">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link astra-nav hvr-underline-from-left" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- BODY CONTENT -->

    <div class="d-flex mb-3 align-items-center justify-content-center">
        <h1 class="text-center font-montserrat text-uppercase fontcolor-white fontbold"><span class="gradient-underline-text">Guestbook</span></h1>
    </div>

    <div class="container mb-5">
        <div class="row">
            <div class="col-xs-12">
                <div class="d-flex mt-5 align-items-center">

                <div class="table-responsive">
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Comment</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php
                            //-----Customer Table
                            //Make the select statement to pull in all visitors in the table						
                            $visquery = "SELECT * from contact_form";

                            //Run the query										
                            $visresult = mysql_query($visquery) or die("Query to get data from contact_form failed: " . mysql_error());
                            //If everything is correct, get the variables for every row and put it into an array
                            while ($visrow = mysql_fetch_array($visresult)) {
                                $visName = $visrow["name"];
                                $visEmail = $visrow["email"];
                                $visComment = $visrow["comment"];


                                //After the rows have gone into an array, display in the rows under the header, using the variables created
                                echo "<tr><td>$visName</td><td>$visEmail</td><td>$visComment</td></tr>";
                            } 
                            
                            ?>

                        </tbody>
                    </table>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- FOOTER CONTENT -->

    <footer class="mt-auto">
        <p class="text-center text-uppercase p-2 my-auto">Made With <i class="fas fa-heart"></i> By JARIN COLTER <i class="fad fa-cat-space"></i> <em style="color:#45a29e;">!</em></p>
    </footer>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>

</html>