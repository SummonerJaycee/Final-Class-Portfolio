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


    <title>Contact Me | Infinity & Beyond</title>
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- NAVIGATION -->

    <nav class="navbar navbar-expand-md mt-1 mb-5">
      <div class="container">
        <a class="navbar-brand astranautical" href="index.html">
        <i class="bi bi-moon-stars-fill"></i> ASTRANAUTICAL LABS</a>
        <button class="navbar-toggler custom-toggler navbar-dark" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
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
              <a class="nav-link astra-nav hvr-underline-from-left"  aria-current="page" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- BODY CONTENT -->

    <div class="d-flex mb-3 align-items-center justify-content-center">
        <h1 class="text-center font-montserrat text-uppercase fontcolor-white fontbold"><span
                class="gradient-underline-text">Contact Me</span></h1>
    </div>

    <div class="container mb-5">
        <div class="row">
            <div class="col-xs-12 col-md-6 offset-md-3">
                <div class="d-flex mt-5 align-items-center">
                    <p class="lead text-center">If you wanna contact me or leave a comment about something, feel free to do so through this form!</p>
                </div>
            </div>
        </div>
    </div>

    <form action="confirmation.php" method="post">
    <div class="d-flex">
        <div class="row mx-auto">
            <div class="col mb-3">
                <label for="vis_name" class="form-label text-white font-montserrat gradient-underline-text">Name</label>
                <input type="text" class="form-control" name="vis_name" placeholder="your full name" required>
              </div>
          <div class="col-sm-12">
                <div class="mb-3">
                    <label for="vis_email" class="form-label text-white font-montserrat gradient-underline-text">Email Address</label>
                    <input type="email" class="form-control" name="vis_email" placeholder="name@example.com" required>
                  </div>
                  <div class="mb-3">
                    <label for="vis_comment" class="form-label text-white font-montserrat gradient-underline-text">Comment</label>
                    <textarea class="form-control" name="vis_comment" rows="5" placeholder="please write your coments here" required></textarea>
                  </div>
                <button type="submit" name="action" class="btn bg-teal">Submit</button>
          </div>
        </div>
      </div>
    </form>



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