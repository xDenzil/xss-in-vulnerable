<?php
session_start();
include 'database/db_connection.php';

        $query = "INSERT INTO `user`( `name`, `message`) VALUES ('$name','$message');";
        mysqli_query($conn, $query) or die("<h1>Could not get data.</h1>");
        


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>XSS Project</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
            <div class="container"><a class="navbar-brand" href="index.php">XSS in/Vulnerable</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="reflected.php">Reflected</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="persistence.php">Persistent</a></li>
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="dom.php">DOM-based</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="dom.php">Vulnerable</a><a class="dropdown-item" role="presentation" href="#">Secured</a></div>
                        </li>
                    </ul><span class="navbar-text actions"> </span></div>
    </div>
    </nav>
    </div>
    <div class="jumbotron text-primary m-0 bg-primary">
        <div class="row justify-content-center">
            <div class="col col-8">
                <div class="row">
                    <div class="col col-12 py-3">
                        <h1 class="text-white mb-4">Site chat - vulnerable</h1>
                        <p class="p-2 border mb-2 text-white">Name: Message</p>
                        <p class="p-2 border mb-2 text-white">Name: Message</p>
                        <p class="p-2 border mb-2 text-white">Name: Message</p>
                        <p class="p-2 border mb-2 text-white">Name: Message</p>
                    </div>
                    <div class="col col-12 py-3">
                        <form><label class="text-white">Name</label><input class="form-control mb-3" type="text"><label class="text-white">Message</label><textarea class="form-control"></textarea><button class="btn btn-dark" type="button">Post</button></form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron text-primary m-0">
        <div class="row justify-content-center">
            <div class="col col-8">
                <div class="row">
                    <div class="col col-12 py-3">
                        <h1 class="mb-4">Site chat - secured</h1>
                        <p class="p-2 mb-2 text-white bg-primary">Name: Message</p>
                        <p class="p-2 mb-2 text-white bg-primary">Name: Message</p>
                        <p class="p-2 mb-2 text-white bg-primary">Name: Message</p>
                        <p class="p-2 mb-2 text-white bg-primary">Name: Message</p>
                    </div>
                    <div class="col col-12 py-3">
                        <form><label>Name</label><input class="form-control mb-3 bg-primary text-white" type="text"><label>Message</label><textarea class="form-control bg-primary text-white"></textarea><button class="btn btn-dark" type="button">Post</button></form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-white footer-dark bg-primary">
        <footer>
            <div class="container">
                <p class="copyright">Denzil Williams \ Chanda \ Sashione \ Kelleshia \ Rasheed</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>