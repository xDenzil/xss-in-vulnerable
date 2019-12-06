<?php
include 'assets/Database/db_connection.php';

if (isset($_POST['post'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $name_sanitize = filter_var($name, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $message_sanitize = filter_var($message, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    if ((filter_var($name, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH))
        || (filter_input($message, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_STRIP_HIGH)) == true
    ) {
        mysqli_query($conn, "INSERT INTO secure_user( name, message) VALUES ('$name_sanitize','$message_sanitize');")
            or die("<h1>Could not get data.</h1>");
        header('Location: secured_persistence.php');
    } else {
        header('Location: secured_persistence.php');
    }
}
$query = "SELECT * FROM secure_user";
$result = mysqli_query($conn, $query) or die("<h1>Could not show results.</h1>");

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
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="dom.php">DOM-based</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="dom-vulnerable.php">Vulnerable</a><a class="dropdown-item" role="presentation" href="dom-secured.php">Secured</a></div>
                        </li>
                    </ul><span class="navbar-text actions"> </span>
                </div>
            </div>
        </nav>
    </div>
    <div class="jumbotron text-primary m-0">
        <div class="row justify-content-center">
            <div class="col col-8">
                <div class="row">
                    <div class="col col-12 py-3">
                        <h1 class="mb-4">Site chat - secured</h1>
                        <?php
                        // loop through data in database, displaying them in the table
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<p class="p-2 mb-2 text-white bg-primary">';
                            echo $row["name"];
                            echo " :";
                            echo $row["message"];
                            echo "</p>";
                        } ?>
                    </div>
                    <div class="col col-12 py-3">
                        <form method="POST" action="">
                            <label for="name">Name</label><input class="form-control mb-3 bg-primary text-white" type="text" id="name" name="name" value="">
                            <label for="message">Message</label><textarea class="form-control bg-primary text-white" id="message" name="message" value=""></textarea>
                            <button class="btn btn-dark" type="submit" name="post">Post</button></form>
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