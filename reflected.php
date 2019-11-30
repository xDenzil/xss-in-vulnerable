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
            <div class="container"><a class="navbar-brand" href="index.html">XSS in/Vulnerable</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="reflected.html">Reflected</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="persistence.html">Persistent</a></li>
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="dom.html">DOM-based</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="dom.html">Vulnerable</a><a class="dropdown-item" role="presentation" href="#">Secured</a></div>
                        </li>
                    </ul><span class="navbar-text actions"> </span></div>
    </div>
    </nav>
    </div>
    <div class="jumbotron m-0">
        <div class="container">
            <h1>reflected xss attacks</h1>
            <header></header>
            <p class="mt-3">Cross-site scripting (XSS) is a code injection attack that allows an attacker to execute malicious JavaScript in another user's browser.The attacker does not directly target his victim. Instead, he exploits a vulnerability in a website that
                the victim visits, in order to get the website to deliver the malicious JavaScript for him. To the victim's browser, the malicious JavaScript appears to be a legitimate part of the website, and the website has thus acted as an unintentional
                accomplice to the attacker. <a href="https://excess-xss.com">(Source)</a></p>
            <p><a class="btn btn-primary mt-3" role="button" href="https://excess-xss.com">Learn more</a></p>
        </div>
    </div>
    <div class="jumbotron text-primary m-0 bg-primary">
        <div class="container">
            <h1 class="text-center text-white">website search</h1>
            <form>
                <div class="form-group"><label class="text-white">Vulnerable Input</label><input class="form-control" type="text"><button class="btn btn-dark" type="button">Search</button></div>
            </form>
        </div>
    </div>
    <div class="jumbotron text-primary m-0 custom-accent">
        <div class="container">
            <h1 class="text-center text-primary">website search</h1>
            <form>
                <div class="form-group"><label>Secured Input</label><input class="form-control" type="text"><button class="btn btn-primary" type="button">Search</button></div>
            </form>
        </div>
    </div>
    <div class="p-5 space bg-primary">
        <div class="container">
            <h1 class="text-white">you searched for:</h1>
            <h4 class="text-white">search results</h4>
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