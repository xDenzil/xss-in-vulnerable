<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "xss3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['comment'])) {
    $sql = "INSERT INTO `comments`(`name`, `message`) VALUES ('" . $_POST['name'] . "','" . addslashes($_POST['message']) . "')";
    $result = mysqli_query($conn, $sql) or die('unable to execute query post');
}

$view_vulnerable_comments = "SELECT * FROM comments";
$result_vulnerable = mysqli_query($conn, $view_vulnerable_comments) or die('unable to execute query');


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
    <link rel="stylesheet" href="assets/css/custom-styles.css">

</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md bg-light navigation-clean-button">
            <div class="container"><a class="navbar-brand" href="#">XSS in/Vulnerable</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Reflective</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="persistence.php">Persistence</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">DOM-Based</a></li>
                    </ul><span class="navbar-text actions"> </span>
                </div>
            </div>
        </nav>
    </div>
    <div class="jumbotron bg-primary text-white">
        <div class=" container w-75">
            <h1 class="text-white">Persistent xss attacks</h1>

            <p class="mt-3">Cross-site scripting (XSS) is a code injection attack that allows an attacker to execute malicious JavaScript in another user's browser.The attacker does not directly target his victim. Instead, he exploits a vulnerability in a website that
                the victim visits, in order to get the website to deliver the malicious JavaScript for him. To the victim's browser, the malicious JavaScript appears to be a legitimate part of the website, and the website has thus acted as an unintentional
                accomplice to the attacker. <a href="https://excess-xss.com">(Source)</a></p>
            <p><a class="btn btn-light mt-3" role="button" href="https://excess-xss.com">Learn more</a></p>
        </div>
    </div>
    <div class="p-5">
        <div class="container">
            <div class="row">
                <div class="col col-12 mb-4">
                    <h1 class="text-center">xss vulnerable</h1>
                </div>
                <div class="col">
                    <h2>Message Board</h2>
                    <label>Current Conversation</label>
                    <?php
                    if (mysqli_num_rows($result_vulnerable) != 0) {
                        while ($row = mysqli_fetch_assoc($result_vulnerable)) {
                            echo "<p class='p-3 bg-primary text-white'>" . $row['name'] . ": " .  $row['message'] . "</p><sup>Message Sent: 29 Nov 2019</sup>";
                        }
                    }

                    ?>

                </div>
                <div class="col">
                    <h2>CHAT</h2>
                    <form method="POST">
                        <label>Name</label>
                        <input class="form-control mb-3" type="text" name="name" required>
                        <label>Message</label>
                        <textarea class="form-control" name="message" required></textarea>
                        <input class="btn btn-primary" type="submit" name="comment" value="Post">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="p-5 space">
        <div class="container"></div>
    </div>
    <div class="p-5">
        <div class="container">
            <div class="row">
                <div class="col col-12 mb-4">
                    <h1 class="text-center">xss secured</h1>
                </div>

            </div>
        </div>
    </div>
    <div class="text-white footer-dark bg-primary">
        <footer>
            <div class="container">
                <p class="copyright">Denzil Williams \ Chanda \ Sashione \ Kelly \ Rasheed</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>