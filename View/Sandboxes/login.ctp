<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bevager</title>
    <link rel="icon" type="image/png"
          href="https://d3jruo7yef7z6a.cloudfront.net/assets/images/d96c883684cb32051216c2ebf24d3bf3-favicon.png">

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link href="https://d3jruo7yef7z6a.cloudfront.net/assets/concat/d0f7f20d9af881b606fb7e1bbace8103-chrome_concat.css"
          rel="stylesheet" async>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,400italic' rel='stylesheet'
          type='text/css' async>

    <script src="https://d3jruo7yef7z6a.cloudfront.net/assets/javascripts/8fc25e27d42774aeae6edbc0a18b72aa-jquery.min.js"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <style>
        html {
            background: #fff !important;
        }
    </style>
</head>
<body data-spy="scroll" data-target=".navbar">
<div id="fb-root"></div>
<script>(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<nav class="navbar navbar-fixed-top navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/"><img
                    src="https://d3jruo7yef7z6a.cloudfront.net/assets/images/69ac15b67e48eaa9b5264dd56a20c5b4-bevagerlogo_small.png"/></a>
        </div>


    </div>
</nav>

<div class="body-container">


    <script>
        var Routes = {
            "doSignIn":"/signin",
            "doForgotPassword":"/forgotpassword"
        }
    </script>

    <div class="container page-container">
        <div class="row white">
            <br>

            <h1 class="text-center" id="defaultPanelHeading">Log In</h1>

            <h1 class="text-center mzhidden" id="forgotPasswordPanelHeading">Password Reset</h1>
            <hr>

            <div class="col-lg-12">

                <?php echo $this->element('alerts', array('alert' => $alert));?>

                <div id="infoForgotPassword" class="alert alert-info text-center mzhidden">Please enter the e-mail
                    address you used to create your Bevager account. Instructions will be sent on how to reset your
                    password.
                </div>


                <div class="panel panel-default">
                    <div class="panel-body">
                        <form id="signin" class="form-horizontal" method="post" action="/login">
                            <div class="form-group">
                                <label for="email" class="control-label col-md-3 col-xs-4">Email address</label>

                                <div class="col-md-9 col-xs-8">
                                    <input type="text" name="data[User][username]" class="form-control form-input original" id="email">
                                </div>
                            </div>
                            <div class="form-group" id="passwordFormGroup">
                                <label for="password" class="control-label col-md-3 col-xs-4">Password</label>

                                <div class="col-md-9 col-xs-8">
                                    <input type="password" name="data[User][password]" class="form-control form-input" id="password">
                                </div>
                            </div>
                            <input type="submit" value="Log In" id="signinBtn" class="btn btn-success pull-right">
                            <a href="/" id="backBtn" style="margin-right: 8px;" class="btn btn-primary pull-right">Cancel</a>
                    </div>
                    <div class="panel-footer text-right">
                        <a href="#" id="forgotPassword">Forgot your password?</a>
                        <a href="/" id="forgotPasswordBackBtn" style="margin-right: 8px;"
                           class="btn btn-primary mzhidden">Cancel</a>
                        <input type="submit" value="<?php echo __('Send Instructions');?>" id="forgotPasswordBtn" class="btn btn-success mzhidden">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://d3jruo7yef7z6a.cloudfront.net/assets/javascripts/433060112e175eb159b8d099800fa475-signin.min.js"></script>

</div>

<div class="footer">
    <div class="container text-center">
        <p class="text-muted">&copy; 2014, Bevager Inc. All rights reserved</p>
    </div>
</div>

<script src="https://d3jruo7yef7z6a.cloudfront.net/assets/javascripts/abda843684d022f3bc22bc83927fe05f-core.min.js"></script>
<script src="https://d3jruo7yef7z6a.cloudfront.net/assets/javascripts/66f43cc73d3cc9e70bff5710c7c61bd3-bevAjax.min.js"></script>

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');


    ga('create', 'UA-53193118-1', 'auto');
    ga('set', '&uid', '0');
    ga('send', 'pageview');

</script>

</body>
</html>