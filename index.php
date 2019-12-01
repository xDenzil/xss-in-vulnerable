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
        <nav class="navbar navbar-light navbar-expand-md bg-light navigation-clean-button">
            <div class="container"><a class="navbar-brand" href="index.php">XSS in/Vulnerable</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="reflected.php">Reflected</a></li>
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false"href="persistence.php">Persistent</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="persistence.php">Vulnerable</a><a class="dropdown-item" role="presentation" href="secured_persistence.php">Secured</a></div></li>
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="dom.php">DOM-based</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="dom.php">Vulnerable</a><a class="dropdown-item" role="presentation" href="#">Secured</a></div>
                        </li>
                    </ul><span class="navbar-text actions"> </span>
                </div>
            </div>
        </nav>
    </div>
    <div class="jumbotron bg-black m-0">
        <div class="container">
            <h1>What is XSS?</h1>
            <header></header>
            <p class="mt-3">Cross-site scripting (XSS) is a code injection attack that allows an attacker to execute malicious JavaScript in another user's browser.The attacker does not directly target his victim. Instead, he exploits a vulnerability in a website that
                the victim visits, in order to get the website to deliver the malicious JavaScript for him. To the victim's browser, the malicious JavaScript appears to be a legitimate part of the website, and the website has thus acted as an unintentional
                accomplice to the attacker. <a href="https://excess-xss.com">(Source)</a></p>
            <p><a class="btn btn-primary mt-3" role="button" href="https://excess-xss.com">Learn more</a></p>
        </div>
    </div>
    <div class="p-5 bg-primary">
        <div class="container w-75">
            <h3 class="text-white">Reflected xss</h3>
            <p>The non-persistent (or reflected) cross-site scripting vulnerability is by far the most basic type of web vulnerability. These holes show up when the data provided by a web client, most commonly in HTTP query parameters e.g. HTML form submission,
                is used immediately by server-side scripts to parse and display a page of results for and to that user, without properly sanitizing the content</p>
        </div>
    </div>
    <div class="p-5 custom-accent">
        <div class="container w-75">
            <h3>persistent xss</h3>
            <p class="text-primary">The non-persistent (or reflected) cross-site scripting vulnerability is by far the most basic type of web vulnerability. These holes show up when the data provided by a web client, most commonly in HTTP query parameters e.g. HTML form submission,
                is used immediately by server-side scripts to parse and display a page of results for and to that user, without properly sanitizing the content</p>
        </div>
    </div>
    <div class="p-5 bg-white">
        <div class="container w-75">
            <h3>dom-based xss</h3>
            <p class="text-primary">The non-persistent (or reflected) cross-site scripting vulnerability is by far the most basic type of web vulnerability. These holes show up when the data provided by a web client, most commonly in HTTP query parameters e.g. HTML form submission,
                is used immediately by server-side scripts to parse and display a page of results for and to that user, without properly sanitizing the content</p>
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