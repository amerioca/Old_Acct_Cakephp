

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bevager</title>
    <link rel="icon" type="image/png" href="https://d3jruo7yef7z6a.cloudfront.net/assets/images/d96c883684cb32051216c2ebf24d3bf3-favicon.png">

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link href="https://d3jruo7yef7z6a.cloudfront.net/assets/concat/d0f7f20d9af881b606fb7e1bbace8103-chrome_concat.css" rel="stylesheet" async>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,400italic' rel='stylesheet' type='text/css' async>

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
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<nav class="navbar navbar-fixed-top navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/"><img src="https://d3jruo7yef7z6a.cloudfront.net/assets/images/69ac15b67e48eaa9b5264dd56a20c5b4-bevagerlogo_small.png" /></a>
        </div>


        <ul class="nav navbar-nav hidden-sm hidden-xs">

            <li><a href="#benefits">Benefits</a></li>
            <li><a href="#howitworks">How it Works</a></li>
            <li><a href="#snapshots">Snapshots</a></li>
            <li><a href="#contactus">Contact</a></li>

        </ul>
        <form class="navbar-form navbar-right visible-lg-inline-block visible-md-inline-block" method="POST" action="/nav/signin" role="signin">
            <input type="hidden" name="csrfToken" value="cbebb7e4477ede084c32e22d18b19b99a726ff7e-1417974314586-10e29a521527f1fb7f46fec9"/>
            <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-success">Log In</button>
        </form>
        <div class="navbar-right pull-right login-container">
            <a href="/signin" class="btn btn-success pull-right visible-sm-inline-block visible-xs-inline-block">Log In</a>
        </div>

    </div>
</nav>

<div class="body-container">

<link rel="stylesheet" href="https://d3jruo7yef7z6a.cloudfront.net/assets/stylesheets/94076f6f0366f0cbf0b0dcffd7f5f12d-index.min.css" />

<script>
    var Routes = {
        "doRegister": "/register",
        "sendMessage": "/sendmessage"
    }
</script>

<div class="bar-bg" id="top">
    <div class="row">
        <div class="col-md-5 text-center signup-promo-left">
            <h1><strong>The easiest way to manage your bar</strong></h1>
            <h2>Always free for you and your suppliers</h2>
        </div>
        <div class="col-md-5 col-md-offset-2 signup-form-bg">
            <h2 class="text-center">Get your free Account today!</h2>
            <br />
            <div class="col-xs-8 col-xs-offset-3">
                <div class="alert mzhidden alert-danger">
                    <i class="fa fa-ban"></i>
                    <span id="registerError"></span>
                </div>
                <div class="alert mzhidden alert-success">
                    <i class="fa fa fa-check"></i>
                    <span id="registerSuccess"></span>
                </div>
            </div>
            <form class="form-horizontal" id="registerForm" role="form">
                <div class="form-group">
                    <label for="user_type" class="control-label col-sm-2 col-md-3">I am a</label>
                    <div class="col-sm-9 col-md-8">
                        <select class="form-control form-select" id="regUser_type">
                            <option value="0">Please select who you are</option>
                            <option value="1">Restaurant/Bar Manager</option>
                            <option value="2">Sales Manager/Distributor</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputName3" class="col-sm-2 col-md-3 control-label">Name</label>
                    <div class="col-sm-9 col-md-8">
                        <input type="text" class="form-control" id="regName" maxlength="64" placeholder="Name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputCompany3" class="col-sm-2 col-md-3 control-label">Company</label>
                    <div class="col-sm-9 col-md-8">
                        <input type="text" class="form-control" id="regCompany" maxlength="64" placeholder="Company">
                    </div>
                </div>


                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 col-md-3 control-label">Email</label>
                    <div class="col-sm-9 col-md-8">
                        <input type="text" class="form-control" id="regEmail" maxlength="64" placeholder="Email">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 col-md-3 control-label">Password</label>
                    <div class="col-sm-9 col-md-8">
                        <input type="password" class="form-control" id="regPassword" placeholder="Password">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 col-md-3 control-label">Confirm Password</label>
                    <div class="col-sm-9 col-md-8">
                        <input type="password" class="form-control" id="regPassword2" placeholder="Confirm Password">
                    </div>
                </div>

                <div class="col-md-12 text-center">
                    <strong>By clicking Sign Up, you agree to our <a href="/terms">Terms</a> and that you have read our <a href="/privacy">Privacy Policy</a>.</strong>
                    <br /> <br />
                    <a href="#" id="registerBtn" data-loading-text="Please wait..." class="btn btn-primary">Sign Up</a>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="row text-center featured-bar-spotlight">
    <a href="/chino-sf-danny-louie">
        <img class="img img-circle" width="50px" src="https://d3jruo7yef7z6a.cloudfront.net/assets/images/home/v2/featured/36e4e36ece2d05cd138cf3398fe1a925-spotlight.png" />
        <span><b>Bevager Bar Spotlight:</b> <div class="visible-xs"></div> Chino SF's Danny Louie</span>
    </a>
</div>
<div class="row slate-row">
    <span class="app-promo hidden-xs">Bevager is now available in the App Stores!</span>

    <a href="itmss://itunes.apple.com/us/app/bevager/id919705787?mt=8" class="app-store">
        <img height="39px" src="https://d3jruo7yef7z6a.cloudfront.net/assets/images/home/v2/1cfd5dba4a9210bcf77f5dbe48ec2e66-appStore.svg" />
    </a>

    <a href="https://play.google.com/store/apps/details?id=bevagerinc.bevager">
        <img height="39px" src="https://d3jruo7yef7z6a.cloudfront.net/assets/images/home/v2/383a821fb602f37f85f5146e7786aa11-google_play.png" />
    </a>
</div>
<div id="philosophy" class="row feature-row">
    <div class="col-md-3">
        <h1 class="text-center"><span class="fa fa-book"></span></h1>
        <h2 class="text-center">Catalogs</h2>
        <p class="text-center">Search, filter and browse for products across distributor portfolios. One click to Add to Inventory</p>
    </div>
    <div class="col-md-3">
        <h1 class="text-center"><span class="fa fa-shopping-cart"></span></h1>
        <h2 class="text-center">Orders</h2>
        <p class="text-center">Select the items you need from one simple order form. We create the Order and send it directly to your Distributor</p>
    </div>
    <div class="col-md-3">
        <h1 class="text-center"><span class="fa fa-tags"></span></h1>
        <h2 class="text-center">Inventory</h2>
        <p class="text-center">Track your bar inventory in real-time. Spend a third of the time doing inventory audits</p>
    </div>
    <div class="col-md-3">
        <h1 class="text-center"><span class="fa fa-bar-chart-o"></span></h1>
        <h2 class="text-center">Costing</h2>
        <p class="text-center">Know your Inventory depletions and costs over any period. We'll even monitor your item and cocktail cost percentage</p>
    </div>
</div>

<div class="container">
    <h1 class="text-center text-uppercase">The Bevager Philosophy</h1>
    <hr>
    <br />
    <div class="row">
        <div class="col-lg-10 col-md-9">
            <p>
                Bevager was developed to create a single, free platform for the entire beverage trade industry and assist the bar manager in ordering, stock management and pricing decisions. Order forms, inventory sheets and cost calculations are a major headache and often filled with outdated data and imprecision. By bringing these together online, Bevager simplifies bar management and enriches the relationship with distributors and suppliers
                <br /> <br />
                Bevager lets you manage more efficiently and work closer with vendors, moving you out of the backoffice and letting you spend more time with your customers
            </p>
        </div>
        <div class="col-lg-2 col-md-3 text-center">
            <img width="150px" src="https://d3jruo7yef7z6a.cloudfront.net/assets/images/home/v2/73bf0ce28463e90ae786d35eff606c01-NoSpreadsheets.jpg" />
        </div>
    </div>
</div>
<br />
<div class="col-md-12 featured-image featured-image-1">
    <div class="fogged-glass"></div>
    <h1 class="text-center  text-uppercase">Focus on your craft</h1>
    <hr>
    <p class="text-center">Bevager takes care of drink costing, profitability and pricing</p>
</div>
<br />
<div id="benefits" class="container">
    <h1 class="text-center text-uppercase">Beverage Trade Benefits</h1>
    <hr>
    <br />
    <div class="row visible-sm-block visible-md-block visible-lg-block">
        <div class="col-xs-12 col-md-5 benefit-sidebar">
            <div class="col-xs-3 text-center">
                <img width="80px" class="img img-responsive img-circle" src="https://d3jruo7yef7z6a.cloudfront.net/assets/images/home/v2/76c14e03b0312b80fee80afe1e039109-bartender.jpg" />
                <h4>Restaurant, Bar & Club Managers</h4>
            </div>
            <div class="col-xs-9 benefit-mainbar">
                <p>Browse distributor portfolios to find new brands and products
                    <br /><br />
                    Order 24/7 from your connected Distributors and Suppliers
                    <br /><br />
                    Monitor your existing Inventory stock easily through Audits and Sales records
                    <br /><br />
                    Price pours and cocktails to track margins and ensure business health
                    <br /><br />
                    ...and much more!</p>
            </div>
        </div>
        <div class="visible-sm-block clearfix"><br /><br /><br /></div>
        <div class="col-xs-12 col-md-5 col-md-offset-2 benefit-sidebar">
            <div class="col-xs-3 text-center">
                <img width="80px" class="img img-responsive img-circle" src="https://d3jruo7yef7z6a.cloudfront.net/assets/images/home/v2/9c29489f8658261d88804d628cf6bf3f-salesrep.jpg" />
                <h4>Distributors & Suppliers</h4>
            </div>
            <div class="col-xs-9 benefit-mainbar">
                <p>Share a searchable catalog of your portfolio to expand your reach
                    <br /><br />
                    Spend less time taking orders and more time meeting with your customers
                    <br /><br />
                    Analyze sales history and trends to increase market knowledge
                    <br /><br />
                    Offer improved service with more targeted outreach
                    <br /><br />
                    ...and much more!</p>
            </div>
        </div>
    </div>
    <div class="row visible-xs-block">
        <div class="col-xs-12 benefit-sidebar">
            <div class="col-xs-12 text-center">
                <img width="80px" class="img img-responsive img-circle" src="https://d3jruo7yef7z6a.cloudfront.net/assets/images/home/v2/76c14e03b0312b80fee80afe1e039109-bartender.jpg" />
                <h4>Restaurant, Bar & Club Managers</h4>
            </div>
            <div class="col-xs-12 benefit-mainbar">
                <p>Browse distributor portfolios to find new brands and products
                    <br /><br />
                    Order 24/7 from your connected Distributors and Suppliers
                    <br /><br />
                    Monitor your existing Inventory stock easily through Audits and Sales records
                    <br /><br />
                    Price pours and cocktails to track margins and ensure business health
                    <br /><br />
                    ...and much more!</p>
            </div>
        </div>
    </div>
    <div class="row visible-xs-block margin-top">
        <div class="col-xs-12 benefit-sidebar">
            <div class="col-xs-12 text-center">
                <img width="80px" class="img img-responsive img-circle" src="https://d3jruo7yef7z6a.cloudfront.net/assets/images/home/v2/9c29489f8658261d88804d628cf6bf3f-salesrep.jpg" />
                <h4>Distributors & Suppliers</h4>
            </div>
            <div class="col-xs-12 benefit-mainbar">
                <p>Share a searchable catalog of your portfolio to expand your reach
                    <br /><br />
                    Spend less time taking orders and more time meetingwith your customers
                    <br /><br />
                    Analyze sales history and trends to increase market knowledge
                    <br /><br />
                    Offer improved service with more targeted outreach
                    <br /><br />
                    ...and much more!</p>
            </div>
        </div>
    </div>
</div>
<br /> <br />
<div class="col-md-12 featured-image featured-image-2">
    <div class="fogged-glass"></div>
    <h1 class="text-center  text-uppercase">Know your Inventory</h1>
    <hr>
    <p class="text-center">Real-time inventory management with delivery acceptance and sales depletions</p>
</div>

<div id="howitworks" class="container hiw">
    <h1 class="text-center text-uppercase">How it Works</h1>
    <hr>
    <div class="row">
        <div class="col-md-3 text-center">
            <img class="img img-circle" height="120px" width="120px" src="https://d3jruo7yef7z6a.cloudfront.net/assets/images/home/v2/hiw/29ea79128aaf065b5ac53c544d8ad487-handshake.jpg" />
            <br />
            <h4 class="text-center">Connect</h4>
            <p>Connect with your Distributors on Bevager to enhance your relationship, explore offerings and communicate with your Sales Rep directly to discover new products and place orders</p>
        </div>
        <div class="col-md-3 text-center">
            <img class="img img-circle" height="120px" width="120px" src="https://d3jruo7yef7z6a.cloudfront.net/assets/images/home/v2/hiw/b482754c665a43df814179f213d9e04d-clipboard.jpg" />
            <br />
            <h4 class="text-center">Place</h4>
            <p>Place orders intelligently by browsing catalogs or shopping straight from your order form. We'll help with par values and remembering price points and order quantities</p>
        </div>
        <div class="col-md-3 text-center">
            <img class="img img-circle" height="120px" width="120px" src="https://d3jruo7yef7z6a.cloudfront.net/assets/images/home/v2/hiw/92685c1ddae5eb1bb2633eefe28069c1-inventory.jpg" />
            <br />
            <h4 class="text-center">Manage</h4>
            <p>Manage inventory by conducting regular period Audits and marking out Sales. Accept each Order when its delievered to keep your inventory up-to-date</p>
        </div>
        <div class="col-md-3 text-center">
            <img class="img img-circle" height="120px" width="120px" src="https://d3jruo7yef7z6a.cloudfront.net/assets/images/home/v2/hiw/dbdad8ab5fdadeabb0903086ad5144d7-costing.jpg" />
            <br />
            <h4 class="text-center">Analyze</h4>
            <p>Analyze inventory and costs based on Audit and Sales records. Pick ingredients from Inventory to shape the perfect cocktail menu. Cost targets monitor your margins</p>
        </div>
    </div>
</div>

<br />
<div id="snapshots" class="row feature-row multidevice-promo">
    <div class="row">
        <div class="col-md-6 text-center">
            <img class="img img-responsive" src="https://d3jruo7yef7z6a.cloudfront.net/assets/images/home/v2/187d9b3a6cffc17db41c658acbde791f-mobilehomepage.png"/>
        </div>
        <div class="col-md-5 text-center">
            <h2>Sophisticated.</h2>
            <h2>Like your drinks.</h2>
            <p>Are you ready to give up the spreadsheets and backoffice number crunching? You can even manage your bar from home or on the go with Bevager's tablet and mobile friendly design</p>
            <a href="#" class="btn btn-primary btn-signup">Sign up</a>
        </div>
    </div>
</div>
<br />
<div class="container screenshots">
    <h1 class="text-center text-uppercase">Meet your online beverage manager</h1>
    <hr>
    <div class="row">
        <div class="col-md-4">
            <figure>
                <a href="#dashboard">
                    <img class="img-responsive" src="https://d3jruo7yef7z6a.cloudfront.net/assets/images/home/v2/screenshots/0f88601d0af8ae2b7cb0fae4965a7200-Dashboard.png" />
                </a>
                <a href="#_" class="lightbox" id="dashboard">
                    <img src="https://d3jruo7yef7z6a.cloudfront.net/assets/images/home/v2/screenshots/0f88601d0af8ae2b7cb0fae4965a7200-Dashboard.png">
                </a>
                <figcaption>
                    <h4 class="text-uppercase">Dashboard</h4>
                </figcaption>
            </figure>
        </div>
        <div class="col-md-4">
            <figure>
                <a href="#catalog">
                    <img class="img-responsive" src="https://d3jruo7yef7z6a.cloudfront.net/assets/images/home/v2/screenshots/4cf477905efbe68a5f0f3b3cf4e2f7a2-Catalog.png" />
                </a>
                <a href="#_" class="lightbox" id="catalog">
                    <img src="https://d3jruo7yef7z6a.cloudfront.net/assets/images/home/v2/screenshots/4cf477905efbe68a5f0f3b3cf4e2f7a2-Catalog.png">
                </a>
                <figcaption>
                    <h4 class="text-uppercase">Catalog</h4>
                </figcaption>
            </figure>
        </div>
        <div class="col-md-4">
            <figure>
                <a href="#orderform">
                    <img class="img-responsive" src="https://d3jruo7yef7z6a.cloudfront.net/assets/images/home/v2/screenshots/8089a2d83ae0d2fae077bf984bd9befa-OrderForm.png" />
                </a>
                <a href="#_" class="lightbox" id="orderform">
                    <img src="https://d3jruo7yef7z6a.cloudfront.net/assets/images/home/v2/screenshots/8089a2d83ae0d2fae077bf984bd9befa-OrderForm.png">
                </a>
                <figcaption>
                    <h4 class="text-uppercase">Order Form</h4>
                </figcaption>
            </figure>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <figure>
                <a href="#inventory">
                    <img class="img-responsive" src="https://d3jruo7yef7z6a.cloudfront.net/assets/images/home/v2/screenshots/31b9f3d7085b1577f744375d43ea6dfa-Inventory.png" />
                </a>
                <a href="#_" class="lightbox" id="inventory">
                    <img src="https://d3jruo7yef7z6a.cloudfront.net/assets/images/home/v2/screenshots/31b9f3d7085b1577f744375d43ea6dfa-Inventory.png">
                </a>
                <figcaption>
                    <h4 class="text-uppercase">Inventory</h4>
                </figcaption>
            </figure>
        </div>
        <div class="col-md-4">
            <figure>
                <a href="#pricing">
                    <img class="img-responsive" src="https://d3jruo7yef7z6a.cloudfront.net/assets/images/home/v2/screenshots/3091573b27f010e836edc5f42f6a69d1-Pricing.png" />
                </a>
                <a href="#_" class="lightbox" id="pricing">
                    <img src="https://d3jruo7yef7z6a.cloudfront.net/assets/images/home/v2/screenshots/3091573b27f010e836edc5f42f6a69d1-Pricing.png">
                </a>

                <figcaption>
                    <h4 class="text-uppercase">Pricing</h4>
                </figcaption>
            </figure>
        </div>
        <div class="col-md-4">
            <figure>
                <a href="#cocktailcalc">
                    <img class="img-responsive" src="https://d3jruo7yef7z6a.cloudfront.net/assets/images/home/v2/screenshots/29e511deeca7b4187cb9f24347de68c6-CocktailCalc.png" />
                </a>
                <a href="#_" class="lightbox" id="cocktailcalc">
                    <img src="https://d3jruo7yef7z6a.cloudfront.net/assets/images/home/v2/screenshots/29e511deeca7b4187cb9f24347de68c6-CocktailCalc.png">
                </a>
                <figcaption>
                    <h4 class="text-uppercase">Cocktail Calculator</h4>
                </figcaption>
            </figure>
        </div>
    </div>
</div>
<br />
<div id="contactus" class="container contact">
    <h1 class="text-center text-uppercase">Drop us a note</h1>
    <hr>
    <div class="row">
        <div class="col-md-4">
            <h3>Contact Information</h3>
            <p>
                <span class="fa fa-phone"></span> (650) 503 6455 <br />
                <span class="fa fa-envelope"></span> <a href="mailto:info@bevager.com">info@bevager.com</a> <br />

                <span class="fa fa-facebook"></span> <a href="https://www.facebook.com/BevagerBar">Bevager</a>
                <span class="fb-like" data-href="https://www.facebook.com/BevagerBar" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></span>
            </p>
        </div>
        <div class="col-md-4">
            <h3>Request Information</h3>
            <p>If you'd like to hear more about Bevager and how it can solve your bar management challenges, let's talk!</p>
            <form class="form-horizontal" role="form">
                <div class="col-md-10" style="padding: 0px;">
                    <div class="alert mzhidden alert-danger">
                        <i class="fa fa-ban"></i>
                        <span id="errorMessage"></span>
                    </div>
                    <div class="alert mzhidden alert-success">
                        <i class="fa fa fa-check"></i>
                        <span id="successMessage"></span>
                    </div>
                </div>
                <div class="form-group" style="margin-bottom: 0px;">
                    <label for="text1" class="col-md-4 control-label"></label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="noteName" placeholder="Your Name">
                    </div>
                </div>
                <div class="form-group" style="margin-bottom: 0px;">
                    <label for="text1" class="col-md-4 control-label"></label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="notePhone" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Contact Phone">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail1" class="col-md-4 control-label"></label>
                    <div class="col-md-10">
                        <input type="email" class="form-control" id="noteEmail" placeholder="Contact Email">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-10">
                        <a href="#" id="submitBtn" class="btn btn-success">Submit</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <h3>About Us</h3>
            <p>
                We're a passionate group of Silicon Valley restaurateurs and technologists that recognized the need to create a common platform for the beverage trade industry in the rising trend of complex beverage programs. We work closely with the community and look forward to hearing from you.
            </p>
        </div>
    </div>
</div>
<script src="https://d3jruo7yef7z6a.cloudfront.net/assets/javascripts/a595b6e3aeed87c887b708835bc68e36-register.min.js"></script>
<script src="https://d3jruo7yef7z6a.cloudfront.net/assets/javascripts/15d59739487ac0e1def22e576c953ae5-index.min.js"></script>


</div>

<div class="footer">
    <div class="container text-center">
        <p class="text-muted">&copy; 2014, Bevager Inc. All rights reserved</p>
    </div>
</div>

<script src="https://d3jruo7yef7z6a.cloudfront.net/assets/javascripts/abda843684d022f3bc22bc83927fe05f-core.min.js"></script>
<script src="https://d3jruo7yef7z6a.cloudfront.net/assets/javascripts/66f43cc73d3cc9e70bff5710c7c61bd3-bevAjax.min.js"></script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');


    ga('create', 'UA-53193118-1', 'auto');
    ga('set', '&uid', '0');
    ga('send', 'pageview');

</script>

</body>
</html>