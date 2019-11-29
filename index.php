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
            <div class="container"><a class="navbar-brand" href="#">XSS in/Vulnerable</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php">Reflective</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="persistence.php">Persistence</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">DOM-Based</a></li>
                    </ul><span class="navbar-text actions"> </span>
                </div>
            </div>
        </nav>
    </div>
    <div class="jumbotron bg-black">
        <div class="container">
            <h1>What is XSS?</h1>
            <header></header>
            <p class="mt-3">Cross-site scripting (XSS) is a code injection attack that allows an attacker to execute malicious JavaScript in another user's browser.The attacker does not directly target his victim. Instead, he exploits a vulnerability in a website that
                the victim visits, in order to get the website to deliver the malicious JavaScript for him. To the victim's browser, the malicious JavaScript appears to be a legitimate part of the website, and the website has thus acted as an unintentional
                accomplice to the attacker. <a href="https://excess-xss.com">(Source)</a></p>
            <p><a class="btn btn-primary mt-3" role="button" href="https://excess-xss.com">Learn more</a></p>
        </div>
    </div>
    <div class="p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action='https://dictionary.cambridge.org/search/british/direct/?utm_source=widget_searchbox_source&utm_medium=widget_searchbox&utm_campaign=widget_tracking' method='post'>
                        <table style='font-size:10px;background:#292929;border-collapse:collapse;border-spacing:0;width:150px;'>
                            <tbody>
                                <tr>
                                    <td colspan='2' style='padding:0;background:none;border:none;'> <a href='https://dictionary.cambridge.org/' style='display:block; background: transparent url(/external/images/freesearch/sbl.png?version=5.0.62) no-repeat 5px 6px;height:32px;'></a> </td>
                                </tr>
                                <tr>
                                    <td style='width:68px;background:none;border:none;padding:4px;'> <input style='width:100%;display:block;font-size:10px;padding:2px;border:none;' name='q' /> </td>
                                    <td style='width:50px;background:none;border:none;padding:0 4px 0 0;'> <input style='width:100%;display:block;font-size:10px;padding:2px;border:none;float:right;background:#d0a44c;' type='submit' value='Look it up' /> </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
                <div class="col-md-6">
                    <h3>Try it here</h3>
                    <form class="mt-2">
                        <div class="form-group"><label class="mt-5">Vulnerable Input</label><input class="form-control" type="text"><button class="btn btn-primary" type="button">Post</button></div>
                        <div class="form-group"><label class="mt-5">Secured Input</label><input class="form-control" type="text"><button class="btn btn-primary" type="button">Post</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="text-white footer-dark">
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