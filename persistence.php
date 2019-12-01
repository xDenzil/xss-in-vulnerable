<?php
session_start();

include 'assets/Database/db_connection.php';

if (isset($_POST['post'])) {
    $name = $_POST['name'];
    $message = $_POST['message'];
    if ($name != '' || $message != '') {
        include 'assets\Database\db_connection.php';
        $query = "INSERT INTO user( name, message) VALUES ('$name','$message');";
        mysqli_query($conn, $query) or die("<h1>Could not send data to user.</h1>");
    }
}
include 'assets\Database\db_connection.php';
$query = "SELECT * FROM user";
$result = mysqli_query($conn, $query) or die("<h1>Could not get data from user.</h1>");

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
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="reflected.php">Reflected</a></li>
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="persistence.php">Persistent</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="persistence.php">Vulnerable</a><a class="dropdown-item" role="presentation" href="secured_persistence.php">Secured</a></div>
                        </li>
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="dom-secured.php">DOM-based</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="dom-vulnerable.php">Vulnerable</a><a class="dropdown-item" role="presentation" href="dom-secured.php">Secured</a></div>
                        </li>
                    </ul><span class="navbar-text actions"> </span>
                </div>
            </div>
        </nav>
    </div>
    <div class="jumbotron text-primary m-0 bg-primary">
        <div class="row justify-content-center">
            <div class="col col-8">
                <div class="row">
                    <div class="col col-12 py-3">
                        <h1 class="text-white mb-4">Site chat - vulnerable</h1>
                        <?php
                        // loop through data in database, displaying them in the table
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<p class="p-2 border mb-2 text-white">';
                            echo $row["name"];
                            echo ": ";
                            echo $row["message"];
                            echo "</p>";
                        } ?>
                    </div>
                    <div class="col col-12 py-3">
                        <form method="POST" action="">
                            <label class="text-white" for="name">Name</label><input class="form-control mb-3" type="text" id="name" name="name" value="">
                            <label class="text-white" for="message">Message</label><textarea class="form-control" type="text" id="message" name="message" value=""></textarea>
                            <input class="btn btn-dark" type="submit" name="post" value="Post" id="post">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-primary footer-dark bg-white">
        <footer>
            <div class="container">
                <p class="copyright">Denzil Williams 1602994 \ Chanderpaul Newman 1500558 <br> Sashione Thomas 1600340 \ Kelleshia Kinlocke 1603337 \ Rasheed Thorpe 1406957</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

<script>
    window.onload = function() {
        document.getElementById("name").innerHTML = 'hacked';
        document.getElementById("message").innerHTML = 'hack3r! hack3r!';
        document.getElementById("post").submit();
    }
</script>