<!DOCTYPE html>
<html class="h-75">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>XSS Project</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body class="h-100">
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
            <div class="container"><a class="navbar-brand" href="index.php">XSS in/Vulnerable</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="reflected.php">Reflected</a></li>
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false"href="persistence.php">Persistent</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="persistence.php">Vulnerable</a><a class="dropdown-item" role="presentation" href="secured_persistence.php">Secured</a></div></li>
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="dom.php">DOM-based</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="dom.php">Vulnerable</a><a class="dropdown-item" role="presentation" href="#">Secured</a></div>
                        </li>
                    </ul><span class="navbar-text actions"> </span></div>
    </div>
    </nav>
    </div>
    <div></div>
    <div class="row h-100">
        <div class="col m-0 p-0">
            <div class="bg-primary h-100 p-5">
                <h1 class="text-white text-center">calculator</h1>
                <div class="h-25"></div>
                <div>
                    <form class="my-auto"><label>Vulnerable Input</label><input class="form-control" type="text"><button class="btn btn-dark" type="button">Calculate</button></form>
                </div>
            </div>
        </div>
        <div class="col m-0 p-0">
            <div class="h-100 p-5 custom-accent text-center">
                <h1 class="text-center">RESULT</h1><span class="huuge-text text-primary">45</span></div>
        </div>
    </div>
    <div class="text-white footer-dark bg-white text-primary">
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