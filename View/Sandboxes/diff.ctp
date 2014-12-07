



<!DOCTYPE html>
<html lang="en" ng-app="Bevager">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="https://d3jruo7yef7z6a.cloudfront.net/assets/images/d96c883684cb32051216c2ebf24d3bf3-favicon.png">

    <title>Bevager</title>

    <link href="https://d3jruo7yef7z6a.cloudfront.net/assets/concat/4761cc5222f6e05db84a6228142c5be5-chrome2_concat.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,400italic' rel='stylesheet' type='text/css'>
    <script src="https://d3jruo7yef7z6a.cloudfront.net/assets/javascripts/8fc25e27d42774aeae6edbc0a18b72aa-jquery.min.js"></script>




    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        var ChromeRoutes = {
            "getNotifications": "/notifications",
            "removeNotification": "/notifications/remove",
            "saveInlineEdits": "/item/inline/save",
            "removeTrial": "/removeTrial"
        };

        var startTour = true;

        var i18n = [];
        i18n['accept_invitation_request'] = "Accept Request";
        i18n['reject_invitation_request'] = "Reject Request";
        i18n['accept_request_success'] = "You&#x27;ve successfully connected with this distributor.";
        i18n['reject_request_success'] = "You&#x27;ve rejected this distributor&#x27;s connection request.";
    </script>

    <link rel="stylesheet" type="text/css" href="/debug_kit/css/debug_toolbar.css" />
    <script type="text/javascript">
        //<![CDATA[
        window.DEBUGKIT_JQUERY_URL = "/debug_kit/js/jquery.js";
        //]]>
    </script><script type="text/javascript" src="/debug_kit/js/js_debug_toolbar.js"></script>
</head>

<body ng-cloak>
<div class="navbar navbar-static-top navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">

          <span class="menu-toggle pull-left">
             <div class="icon-bar"></div>
             <div class="icon-bar"></div>
             <div class="icon-bar last"></div>
          </span>

        </div>


        <ul class="nav navbar-nav navbar-right">

            <li class="dropdown notifications-menu">
                <a href id="headerNotifications" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell"></i>
                </a>
                <span class="label label-danger bell-count mzhidden">0</span>
                <ul class="notifications-dropdown dropdown-menu">
                    <li class="notification-count">
                        You have <span id="unread-count">0</span> unread Notifications
                    </li>
                    <li>
                        <ul class="menu notifications-menu header-notifications">
                            <li class="text-center notifications-loader">
                                <span class="fa fa-spin fa-spinner"></span>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a href class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-question-circle"></span></a>
                <ul class="dropdown-menu help-menu" role="menu">
                    <li><a href="/help">Help Center</a></li>
                    <li><a href="/help/contact">Contact Us</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href id="userMenu" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="fa fa-user"></span> <span class="hidden-xs hidden-sm">Club Trap</span>
                </a>
                <ul class="dropdown-menu user-menu" role="menu">
                    <li><a href="/profile">Update Profile</a></li>
                    <li><a href="/logo">Update Logo</a></li>
                    <li><a href="/change/password">Change Password</a></li>
                    <li><a href="/signout">Sign Out</a></li>
                </ul>
            </li>
        </ul>


    </div>
</div>
<div id="wrapper">

<div id="sidebar-wrapper">


<div class="panel-group" id="accordion">

<div class="nav-logo">
    <a href="/home">
        <img width="100px" src="https://d3jruo7yef7z6a.cloudfront.net/assets/images/69ac15b67e48eaa9b5264dd56a20c5b4-bevagerlogo_small.png"/>
    </a>
</div>

<div class="panel panel-default">
    <div class="panel-heading ">
        <h4 class="panel-title">
            <a href="/home">
                <span class="fa fa-home" style="margin-left: 1px"></span> Home
            </a>
        </h4>
    </div>
</div>

<div class="panel panel-default" id="__tour_ordersMenu">
    <div class="panel-heading ">
        <h4 class="panel-title">
            <span class="fa fa-list"></span> <a href="javascript:void(0)" data-toggle="collapse" data-parent="#accordion" data-target="#ordersSubmenu">Orders</a>
        </h4>
    </div>
    <div id="ordersSubmenu" class="panel-collapse collapse ">
        <div class="panel-body">
            <ul class="submenu">
                <li id="__tour_orderItems">
                    <a href="/items/order">
                        <span class="fa fa-angle-double-right"></span> Order Form
                    </a>
                </li>
                <hr>
                <li>
                    <a href="/orders/open">
                        <span class="fa fa-angle-double-right"></span> Open Orders
                    </a>
                </li>
                <li>
                    <a href="/orders/placed">
                        <span class="fa fa-angle-double-right"></span> Placed Orders
                    </a>
                </li>
                <hr>
                <li>
                    <a href="/orders/show/ready">
                        <span class="fa fa-angle-double-right"></span> Receive Inventory
                    </a>
                </li>
                <hr>
                <li>
                    <a href="/order/hist/filtered/-/-/empty/1">
                        <span class="fa fa-angle-double-right"></span> Order History
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="panel panel-default" id="__tour_inventoryMenu">
    <div class="panel-heading ">
        <h4 class="panel-title">
            <span class="fa fa-tags"></span> <a href="javascript:void(0)" data-toggle="collapse" data-parent="#accordion" data-target="#inventorySubmenu" style="margin-left: -1px;">Inventory</a>
        </h4>
    </div>
    <div id="inventorySubmenu" class="panel-collapse collapse ">
        <div class="panel-body">
            <ul class="submenu">
                <li>
                    <a href="/inventory">
                        <span class="fa fa-angle-double-right"></span> Inventory
                    </a>
                </li>
                <li>
                    <a href="/inventory/history">
                        <span class="fa fa-angle-double-right"></span> Inventory History
                    </a>
                </li>
                <hr>
                <li>
                    <a href="/breaksheet/open">
                        <span class="fa fa-angle-double-right"></span> Break Sheet
                    </a>
                </li>
                <li>
                    <a href="/breaksheet/hist">
                        <span class="fa fa-angle-double-right"></span> Break Sheet History
                    </a>
                </li>
                <hr>
                <li>
                    <a href="/audit/open">
                        <span class="fa fa-angle-double-right"></span> Audit
                    </a>
                </li>
                <li>
                    <a href="/audit/show">
                        <span class="fa fa-angle-double-right"></span> Audit History
                    </a>
                </li>
                <hr>
                <li>
                    <a href="/items">
                        <span class="fa fa-angle-double-right"></span> Items
                    </a>
                </li>
                <li id="__tour_newItem">
                    <a href="/item/new">
                        <span class="fa fa-angle-double-right"></span> New Item
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading current">
        <h4 class="panel-title">
            <span class="fa fa-money"></span> <a href="javascript:void(0)" data-toggle="collapse" data-parent="#accordion" data-target="#billsSubmenu" style="margin-left: -1px;">Bills</a>
        </h4>
    </div>
    <div id="billsSubmenu" class="panel-collapse collapse in">
        <div class="panel-body">
            <ul class="submenu">
                <li>
                    <a href="/bills/">
                        <span class="fa fa-angle-double-right"></span> Unpaid Bills
                    </a>
                </li>
                <li>
                    <a href="/bills/hist">
                        <span class="fa fa-angle-double-right"></span> Bills History
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading ">
        <h4 class="panel-title">
            <span class="fa fa-dollar" style="margin-left: 3px; margin-right: 3px;"></span> <a href="javascript:void(0)" data-toggle="collapse" data-parent="#accordion" data-target="#pricingSubmenu">Pricing</a>
        </h4>
    </div>
    <div id="pricingSubmenu" class="panel-collapse collapse ">
        <div class="panel-body">
            <ul class="submenu">
                <li>
                    <a href="/item/pricing">
                        <span class="fa fa-angle-double-right"></span> Item Pricing
                    </a>
                </li>
                <li>
                    <a href="/cocktail/show">
                        <span class="fa fa-angle-double-right"></span> Cocktail Pricing
                    </a>
                </li>
                <hr>
                <li>
                    <a href="/pricecalculator">
                        <span class="fa fa-angle-double-right"></span> Cocktail Calculator
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="panel panel-default" id="__tour_distributorMenu">
    <div class="panel-heading ">
        <h4 class="panel-title">
            <span class="fa fa-truck"></span> <a href="javascript:void(0)" data-toggle="collapse" data-parent="#accordion" data-target="#distributorsSubmenu">Vendors</a>
        </h4>
    </div>
    <div id="distributorsSubmenu" class="panel-collapse collapse ">
        <div class="panel-body">
            <ul class="submenu">
                <li>
                    <a href="/vendor/show">
                        <span class="fa fa-angle-double-right"></span> Vendor List
                    </a>
                </li>
                <li id="__tour_newDistributor">
                    <a href="/vendor/new">
                        <span class="fa fa-angle-double-right"></span> New Vendor
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>


<div class="panel panel-default">
    <div class="panel-heading ">
        <h4 class="panel-title">
            <span class="fa fa-glass"></span> <a href="javascript:void(0)" data-toggle="collapse" data-parent="#accordion" data-target="#tastingsSubmenu">Tastings</a>
        </h4>
    </div>
    <div id="tastingsSubmenu" class="panel-collapse collapse ">
        <div class="panel-body">
            <ul class="submenu">
                <li>
                    <a href="/tastings/show">
                        <span class="fa fa-angle-double-right"></span> Tastings
                    </a>
                </li>
                <li>
                    <a href="/tastings/new">
                        <span class="fa fa-angle-double-right"></span> New Tasting Request
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading ">
        <h4 class="panel-title">
            <a href="/catalog">
                <span class="fa fa-book" style="margin-left: 1px"></span> Catalogs
            </a>
        </h4>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading ">
        <h4 class="panel-title">
            <span class="fa fa-bar-chart-o"></span> <a href="javascript:void(0)" style="margin-left: -2px;" data-toggle="collapse" data-parent="#accordion" data-target="#reportsSubmenu">Reports</a>
        </h4>
    </div>
    <div id="reportsSubmenu" class="panel-collapse collapse ">
        <div class="panel-body">
            <ul class="submenu">
                <li>
                    <a href="/reports/purchase/init">
                        <span class="fa fa-angle-double-right"></span> Purchases Report
                    </a>
                </li>
                <li>
                    <a href="/reports/inv/init">
                        <span class="fa fa-angle-double-right"></span> Inventory Report
                    </a>
                </li>
                <hr>
                <li>
                    <a href="/reports/costs/init">
                        <span class="fa fa-angle-double-right"></span> Costs Report
                    </a>
                </li>
                <li>
                    <a href="/reports/costsummary/init">
                        <span class="fa fa-angle-double-right"></span> Cost Summary
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>



<div class="panel panel-default">
    <div class="panel-heading ">
        <h4 class="panel-title ">
            <a href="/announcements">
                <span class="fa fa-flag" style="margin-left: 1px"></span> New Features
            </a>
        </h4>
    </div>
</div>
</div>
<div class="help-rail">
    <p class="contact-method"><span class="fa fa-envelope"></span> &nbsp;<a href="mailto:info@bevager.com">info@bevager.com</a><br />
        <span class="fa fa-phone"></span> &nbsp;(650) 503-6455</p>

    <p>&copy; 2014, Bevager Inc. v1.0</p>
</div>

</div>


<div id="page-content-wrapper">


<div class="callout callout-info">
    <div class="row">
        <div class="col-xs-2 col-sm-1 text-center">
            <h4 style="font-size: 45px; margin-bottom:0px;"><span class="fa fa-flag"></span></h4>
        </div>
        <div class="col-xs-6 col-sm-9">
            <h4>Thank you for trying Bevager!</h4>

            <p>When you're ready to begin using Bevager to manage your bar, let us know how you'd like to finish setting
                up your Account.</p>
        </div>
        <div class="col-xs-3 col-sm-2">
            <a class="btn btn-success finish-setup" data-toggle="modal" data-target="#finishSetupModal">Finish Setup</a>
        </div>
    </div>
</div>
<div class="modal fade" id="finishSetupModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Finish Your Bevager Account Setup</h4>
            </div>

            <div class="modal-body trial-welcome">
                To input your items into Bevager, we created a loader that accepts your inventory sheet. Please download
                the Excel template, fill it out, and email it to us for an automatic load. Alternatively, we can create
                an empty account for you to load items manually.
                <br/><br/>
                What would you like to do? <br/><br/>

                <div class="row">
                    <div class="col-xs-12 text-right">
                        <a href="#" id="setUpExcel" class="btn btn-success">Load Items via Excel</a>
                        <a href="#" id="setUpManually" class="btn btn-primary">Load Items Manually</a>
                    </div>
                </div>
            </div>

            <div class="modal-body mzhidden load-manually">
                Great! If you're ready to reset your account, you'll need to manually add Items, invite Distributors,
                and create Orders.

                <br/><br/>

                <div class="callout callout-danger">
                    <h4>Warning!</h4>

                    <p>By clicking below, we'll completely erase your demo account and any data you've entered will be
                        lost</p>
                </div>
                <div class="text-right">
                    <a href class="btn btn-default" data-dismiss="modal"><span class="fa fa-mail-reply"></span> Return
                        to demo</a>
                    <a href class="btn btn-danger trial-complete">I agree, reset Account</a>
                </div>
            </div>

            <div class="modal-body mzhidden load-excel">
                Great! Please download the following Excel template and fill out the information for all of your Items.
                When completed, email us at <a href="mailto:support@bevager.com">support@bevager.com</a> and we'll have
                your Account ready within 24 hrs.

                <br/><br/>


                <div class="alert alert-warning">
                    <i class="fa fa-warning"></i>
                    <span id="flashMessage"><strong>Warning!</strong> Please note that your Account will be reset completely and you will lose all modifications when your spreadsheet is loaded</span>
                </div>

                <div style="margin: 0 auto">
                    <a href="/assets/Bevager_Import_Template.xlsx" class="text-green"><span
                            class="fa fa-file-excel-o"></span> Download Excel Template</a>
                </div>

                <div class="text-right">
                    <a href class="btn btn-default" data-dismiss="modal"><span class="fa fa-mail-reply"></span> Return
                        to demo</a>
                </div>

            </div>

        </div>
    </div>
</div>
<script src="https://d3jruo7yef7z6a.cloudfront.net/assets/javascripts/e1eda1fa455246d80e1c1c57188b7e3f-trial_modal.min.js"></script>

<div id="ajaxError" class="mzhidden">
    <div class="alert alert-danger">
        <i class="fa fa-ban"></i>
        <span id="flashMessage">yrdy</span>
    </div>
</div>


<div class="alert alert-danger mzhidden">
    <i class="fa fa-ban"></i>
    <span id="error"></span>
</div>
<div class="alert alert-success mzhidden">
    <i class="fa fa fa-check"></i>
    <span id="success"></span>
</div>
<script>
    var id = 0;
    var Routes = {
        saveItem:"/item/save"
    }
</script>
<div class="box">
<div class="box-header">
    <h3 class="box-title">New Item</h3>
</div>
<div class="box-body table-responsive">

<script>
    var category = "";
    var unitSizeArrJson = [
        ["1oz", "1.00"],
        ["4oz", "4.00"],
        ["5oz", "5.00"],
        ["5.75oz", "5.75"],
        ["8oz", "8.00"],
        ["8.5oz", "8.50"],
        ["10oz", "10.00"],
        ["12.8oz", "12.80"],
        ["16oz", "16.00"],
        ["17.5oz", "17.50"],
        ["32oz", "32.00"],
        ["64oz", "64.00"],
        ["175ml", "5.92"],
        ["180ml", "6.09"],
        ["187ml", "6.32"],
        ["200ml", "6.76"],
        ["250ml", "8.45"],
        ["300ml", "10.14"],
        ["350ml", "11.83"],
        ["365ml", "12.34"],
        ["375ml", "12.68"],
        ["500ml", "16.91"],
        ["700ml", "23.67"],
        ["720ml", "24.35"],
        ["750ml", "25.36"],
        ["1L", "33.81"],
        ["1.5L", "50.72"],
        ["1.75L", "59.17"],
        ["1.8L", "60.87"],
        ["3L", "101.44"],
        ["5L", "169.07"],
        ["6L", "202.88"],
        ["9L", "304.33"],
        ["10L", "338.14"],
        ["18L", "608.65"],
        ["19.5L", "659.37"],
        ["20L", "676.28"],
        ["1gal", "128.00"],
        ["1.32gal", "168.96"],
        ["3.875gal", "496"],
        ["5gal", "640"],
        ["5.16gal", "660.48"],
        ["6.6gal", "844.8"],
        ["7.75gal", "992"],
        ["9.2gal", "1177.6"],
        ["13.2gal", "1689.6"],
        ["15.5gal", "1984"],
        ["11oz", "11"],
        ["11.2oz", "11.2"],
        ["12oz", "12"],
        ["12.8oz", "12.8"],
        ["14.9oz", "14.9"],
        ["16oz", "16"],
        ["16.9oz", "16.9"],
        ["17oz", "17"],
        ["19.2oz", "19.2"],
        ["20oz", "20"],
        ["22oz", "22"],
        ["23.7oz", "23.7"],
        ["24oz", "24"],
        ["25oz", "25"],
        ["25.4oz", "25.4"],
        ["32oz", "32"],
        ["33oz", "33"],
        ["50.7oz", "50.7"],
        ["200ml", "6.76"],
        ["250ml", "8.45"],
        ["330ml", "11.15"],
        ["341ml", "11.53"],
        ["375ml", "12.68"],
        ["500ml", "16.91"],
        ["750ml", "25.36"],
        ["946ml", "31.99"],
        ["1L", "33.81"],
        ["1.5L", "50.72"],
        ["1.75L", "59.17"],
        ["1.8L", "60.87"],
        ["3L", "101.44"],
        ["5L", "169.07"],
        ["6L", "202.88"],
        ["9L", "304.33"],
        ["10L", "338.14"],
        ["18L", "608.65"],
        ["19.5L", "659.37"],
        ["20L", "676.28"],
        ["30L", "1014.42"],
        ["50L", "1690.7"],
        ["1.32gal", "168.96"],
        ["3.875gal", "496"],
        ["5gal", "640"],
        ["5.16gal", "660.48"],
        ["5.3gal", "678.4"],
        ["6.6gal", "844.8"],
        ["7.75gal", "992"],
        ["7.9gal", "1011.2"],
        ["9.2gal", "1177.6"],
        ["13.2gal", "1689.6"],
        ["15.5gal", "1984"],
        ["Indiv.", "0"],
        ["175ml", "5.92"],
        ["180ml", "6.09"],
        ["187ml", "6.32"],
        ["200ml", "6.76"],
        ["250ml", "8.45"],
        ["300ml", "10.14"],
        ["350ml", "11.83"],
        ["365ml", "12.34"],
        ["375ml", "12.68"],
        ["500ml", "16.91"],
        ["720ml", "24.35"],
        ["750ml", "25.36"],
        ["1L", "33.81"],
        ["1.5L", "50.72"],
        ["1.75L", "59.17"],
        ["1.8L", "60.87"],
        ["3L", "101.44"],
        ["5L", "169.07"],
        ["6L", "202.88"],
        ["9L", "304.33"],
        ["10L", "338.14"],
        ["18L", "608.65"],
        ["19.5L", "659.37"],
        ["20L", "676.28"],
        ["2.5oz", "2.5"],
        ["5oz", "5"],
        ["6.8oz", "6.8"],
        ["8oz", "8"],
        ["10oz", "10"],
        ["11oz", "11"],
        ["12oz", "12"],
        ["12.8oz", "12.8"],
        ["14.9oz", "14.9"],
        ["16oz", "16"],
        ["17.5oz", "17.5"],
        ["22oz", "22"],
        ["24oz", "24"],
        ["1gal", "128.00"],
        ["1.32gal", "168.96"],
        ["3.875gal", "496"],
        ["5gal", "640"],
        ["5.16gal", "660.48"],
        ["6.6gal", "844.8"],
        ["7.75gal", "992"],
        ["9.2gal", "1177.6"],
        ["13.2gal", "1689.6"],
        ["15.5gal", "1984"]
    ]

    // Setup itemDynamicSelect
    $(function () {
        $("tab-content").itemDynamicSelect({
            "categoryId":"category",
            "typeId":"item_type",
            "varietyId":"variety",
            "countryId":"country",
            "regionId":"region",
            "appellationId":"appellation"
        });
    });
</script>

<div class="nav-tabs-custom">
<ul class="nav nav-tabs" id="itemTabs">
    <li class="active"><a href="#item" data-toggle="tab">Item</a></li>
    <li><a href="#pricing" data-toggle="tab">Pricing</a></li>
    <li><a href="#order" data-toggle="tab">Order</a></li>
    <li class="pull-right"><a href="#" class="required-text"><span class="text-danger"> <span
            class="text-danger">*</span></span> Required</a></li>
</ul>

<form class="form-horizontal" role="form">
<div class="tab-content form-tab">
<div class="tab-pane active" id="item">

<!-- CATEGORY -->
<div class="form-group item-category">
    <label for="category" class="control-label col-sm-2 text-right">Category <span class="text-danger"> <span
            class="text-danger">*</span></span></label>

    <div class="col-sm-10">

        <select class="form-control form-select" id="category">
            <option disabled="disabled" selected="selected" value="0">Select an Item Category...</option>

            <option value="Wine">Wine</option>

            <option value="Spirits">Spirits</option>

            <option value="Beer">Beer</option>

            <option value="Beverages">Beverages</option>

            <option value="Other">Other</option>

        </select>

    </div>
</div>

<!-- ITEM NAME -->
<div class="form-group mzhidden" data-belongs-to="all-types">
    <label for="item_name" class="control-label col-sm-2 text-right">Item <span class="text-danger">*</span></label>

    <div class="col-sm-10">
        <input type="text" class="form-control" id="item_name" value="" placeholder="Item">
    </div>
</div>

<!-- UNIT SIZE -->

<div class="form-group mzhidden" data-belongs-to="wine-spirits">
    <label class="control-label col-sm-2 text-right">Unit Size <span class="text-danger">*</span></label>

    <div class="col-sm-10">
        <select class="form-control form-select unit_size">
            <option value="" disabled="disabled" selected="selected">Select a Unit Size</option>

            <option value="1oz">1oz</option>

            <option value="4oz">4oz</option>

            <option value="5oz">5oz</option>

            <option value="5.75oz">5.75oz</option>

            <option value="8oz">8oz</option>

            <option value="8.5oz">8.5oz</option>

            <option value="10oz">10oz</option>

            <option value="12.8oz">12.8oz</option>

            <option value="16oz">16oz</option>

            <option value="17.5oz">17.5oz</option>

            <option value="32oz">32oz</option>

            <option value="64oz">64oz</option>

            <option value="175ml">175ml</option>

            <option value="180ml">180ml</option>

            <option value="187ml">187ml</option>

            <option value="200ml">200ml</option>

            <option value="250ml">250ml</option>

            <option value="300ml">300ml</option>

            <option value="350ml">350ml</option>

            <option value="365ml">365ml</option>

            <option value="375ml">375ml</option>

            <option value="500ml">500ml</option>

            <option value="700ml">700ml</option>

            <option value="720ml">720ml</option>

            <option value="750ml">750ml</option>

            <option value="1L">1L</option>

            <option value="1.5L">1.5L</option>

            <option value="1.75L">1.75L</option>

            <option value="1.8L">1.8L</option>

            <option value="3L">3L</option>

            <option value="5L">5L</option>

            <option value="6L">6L</option>

            <option value="9L">9L</option>

            <option value="10L">10L</option>

            <option value="18L">18L</option>

            <option value="19.5L">19.5L</option>

            <option value="20L">20L</option>

            <option value="1gal">1gal</option>

            <option value="1.32gal">1.32gal</option>

            <option value="3.875gal">3.875gal</option>

            <option value="5gal">5gal</option>

            <option value="5.16gal">5.16gal</option>

            <option value="6.6gal">6.6gal</option>

            <option value="7.75gal">7.75gal</option>

            <option value="9.2gal">9.2gal</option>

            <option value="13.2gal">13.2gal</option>

            <option value="15.5gal">15.5gal</option>

        </select>
    </div>
</div>


<div class="form-group mzhidden" data-belongs-to="beer">
    <label class="control-label col-sm-2 text-right">Unit Size <span class="text-danger">*</span></label>

    <div class="col-sm-10">
        <select class="form-control form-select unit_size">
            <option value="" disabled="disabled" selected="selected">Select a Unit Size...</option>

            <option value="11oz">11oz</option>

            <option value="11.2oz">11.2oz</option>

            <option value="12oz">12oz</option>

            <option value="12.8oz">12.8oz</option>

            <option value="14.9oz">14.9oz</option>

            <option value="16oz">16oz</option>

            <option value="16.9oz">16.9oz</option>

            <option value="17oz">17oz</option>

            <option value="19.2oz">19.2oz</option>

            <option value="20oz">20oz</option>

            <option value="22oz">22oz</option>

            <option value="23.7oz">23.7oz</option>

            <option value="24oz">24oz</option>

            <option value="25oz">25oz</option>

            <option value="25.4oz">25.4oz</option>

            <option value="32oz">32oz</option>

            <option value="33oz">33oz</option>

            <option value="50.7oz">50.7oz</option>

            <option value="200ml">200ml</option>

            <option value="250ml">250ml</option>

            <option value="330ml">330ml</option>

            <option value="341ml">341ml</option>

            <option value="375ml">375ml</option>

            <option value="500ml">500ml</option>

            <option value="750ml">750ml</option>

            <option value="946ml">946ml</option>

            <option value="1L">1L</option>

            <option value="1.5L">1.5L</option>

            <option value="1.75L">1.75L</option>

            <option value="1.8L">1.8L</option>

            <option value="3L">3L</option>

            <option value="5L">5L</option>

            <option value="6L">6L</option>

            <option value="9L">9L</option>

            <option value="10L">10L</option>

            <option value="18L">18L</option>

            <option value="19.5L">19.5L</option>

            <option value="20L">20L</option>

            <option value="30L">30L</option>

            <option value="50L">50L</option>

            <option value="1.32gal">1.32gal</option>

            <option value="3.875gal">3.875gal</option>

            <option value="5gal">5gal</option>

            <option value="5.16gal">5.16gal</option>

            <option value="5.3gal">5.3gal</option>

            <option value="6.6gal">6.6gal</option>

            <option value="7.75gal">7.75gal</option>

            <option value="7.9gal">7.9gal</option>

            <option value="9.2gal">9.2gal</option>

            <option value="13.2gal">13.2gal</option>

            <option value="15.5gal">15.5gal</option>

        </select>
    </div>
</div>


<div class="form-group mzhidden" data-belongs-to="beverages">
    <label class="control-label col-sm-2 text-right">Unit Size <span class="text-danger">*</span></label>

    <div class="col-sm-10">
        <select class="form-control form-select unit_size">
            <option value="" disabled="disabled" selected="selected">Select a Unit Size...</option>

            <option value="Indiv.">Indiv.</option>

            <option value="175ml">175ml</option>

            <option value="180ml">180ml</option>

            <option value="187ml">187ml</option>

            <option value="200ml">200ml</option>

            <option value="250ml">250ml</option>

            <option value="300ml">300ml</option>

            <option value="350ml">350ml</option>

            <option value="365ml">365ml</option>

            <option value="375ml">375ml</option>

            <option value="500ml">500ml</option>

            <option value="720ml">720ml</option>

            <option value="750ml">750ml</option>

            <option value="1L">1L</option>

            <option value="1.5L">1.5L</option>

            <option value="1.75L">1.75L</option>

            <option value="1.8L">1.8L</option>

            <option value="3L">3L</option>

            <option value="5L">5L</option>

            <option value="6L">6L</option>

            <option value="9L">9L</option>

            <option value="10L">10L</option>

            <option value="18L">18L</option>

            <option value="19.5L">19.5L</option>

            <option value="20L">20L</option>

            <option value="5oz">5oz</option>

            <option value="6.8oz">6.8oz</option>

            <option value="8oz">8oz</option>

            <option value="10oz">10oz</option>

            <option value="11oz">11oz</option>

            <option value="12oz">12oz</option>

            <option value="12.8oz">12.8oz</option>

            <option value="14.9oz">14.9oz</option>

            <option value="16oz">16oz</option>

            <option value="17.5oz">17.5oz</option>

            <option value="22oz">22oz</option>

            <option value="24oz">24oz</option>

            <option value="1.32gal">1.32gal</option>

            <option value="3.875gal">3.875gal</option>

            <option value="5gal">5gal</option>

            <option value="5.16gal">5.16gal</option>

            <option value="6.6gal">6.6gal</option>

            <option value="7.75gal">7.75gal</option>

            <option value="9.2gal">9.2gal</option>

            <option value="13.2gal">13.2gal</option>

            <option value="15.5gal">15.5gal</option>

            <option value="1.32gal">1.32gal</option>

            <option value="3.875gal">3.875gal</option>

            <option value="5gal">5gal</option>

            <option value="5.16gal">5.16gal</option>

            <option value="6.6gal">6.6gal</option>

            <option value="7.75gal">7.75gal</option>

            <option value="9.2gal">9.2gal</option>

            <option value="13.2gal">13.2gal</option>

            <option value="15.5gal">15.5gal</option>

        </select>
    </div>
</div>


<div class="form-group mzhidden" data-belongs-to="other">
    <label class="control-label col-sm-2 text-right">Unit Size <span class="text-danger">*</span></label>

    <div class="col-sm-10">
        <select class="form-control form-select unit_size">
            <option value="" disabled="disabled" selected="selected">Select a Unit Size...</option>

            <option value="Indiv.">Indiv.</option>

            <option value="175ml">175ml</option>

            <option value="180ml">180ml</option>

            <option value="187ml">187ml</option>

            <option value="200ml">200ml</option>

            <option value="250ml">250ml</option>

            <option value="300ml">300ml</option>

            <option value="350ml">350ml</option>

            <option value="365ml">365ml</option>

            <option value="375ml">375ml</option>

            <option value="500ml">500ml</option>

            <option value="720ml">720ml</option>

            <option value="750ml">750ml</option>

            <option value="1L">1L</option>

            <option value="1.5L">1.5L</option>

            <option value="1.75L">1.75L</option>

            <option value="1.8L">1.8L</option>

            <option value="3L">3L</option>

            <option value="5L">5L</option>

            <option value="6L">6L</option>

            <option value="9L">9L</option>

            <option value="10L">10L</option>

            <option value="18L">18L</option>

            <option value="19.5L">19.5L</option>

            <option value="20L">20L</option>

            <option value="2.5oz">2.5oz</option>

            <option value="5oz">5oz</option>

            <option value="6.8oz">6.8oz</option>

            <option value="8oz">8oz</option>

            <option value="10oz">10oz</option>

            <option value="11oz">11oz</option>

            <option value="12oz">12oz</option>

            <option value="12.8oz">12.8oz</option>

            <option value="14.9oz">14.9oz</option>

            <option value="16oz">16oz</option>

            <option value="17.5oz">17.5oz</option>

            <option value="22oz">22oz</option>

            <option value="24oz">24oz</option>

            <option value="1gal">1gal</option>

            <option value="1.32gal">1.32gal</option>

            <option value="3.875gal">3.875gal</option>

            <option value="5gal">5gal</option>

            <option value="5.16gal">5.16gal</option>

            <option value="6.6gal">6.6gal</option>

            <option value="7.75gal">7.75gal</option>

            <option value="9.2gal">9.2gal</option>

            <option value="13.2gal">13.2gal</option>

            <option value="15.5gal">15.5gal</option>

        </select>
    </div>
</div>

<!-- UNIT COST -->
<div class="form-group" data-belongs-to="all-types">
    <label for="unit_cost" class="control-label col-sm-2 text-right">Unit Cost <span
            class="text-danger">*</span></label>

    <div class="col-sm-10">
        <input type="text" class="form-control text-left" id="unit_cost" value="0.00" maxlength="9"
               data-inputmask="'alias': 'numeric', 'rightAlign': false, 'autoGroup': true, 'radixPoint': '.', 'placeholder': '0', 'clearMaskOnLostFocus': false, 'digits': 2, 'digitsOptional': false"
               data-mask>
    </div>
</div>

<!-- BIN -->
<div class="form-group mzhidden" data-belongs-to="all-types">
    <label for="bin" class="control-label col-sm-2 text-right">Bin</label>

    <div class="col-sm-10">
        <input type="text" class="form-control" id="bin" value="" maxlength="4">
    </div>
</div>


<hr>

<!-- DISTRIBUTED BY -->
<div class="form-group mzhidden" data-belongs-to="all-types">
    <label for="dcode" class="control-label col-sm-2 text-right">Distributor</label>

    <div class="col-sm-10">
        <select class="form-control form-select" id="dcode">

            <option value="BDD">Beer Demo Distributor</option>

            <option value="WSD">Wine &amp; Spirits Demo Distributor</option>

        </select>
    </div>
</div>


<!-- SKU -->
<div class="form-group mzhidden" data-belongs-to="all-types">
    <label for="sku" class="control-label col-sm-2 text-right">SKU</label>

    <div class="col-sm-10">
        <input type="text" class="form-control" id="sku" value="" maxlength="6" placeholder="Enter SKU if known">
    </div>
</div>

<hr>

<!-- PRODUCER -->
<div class="form-group mzhidden" data-belongs-to="all-types">
    <label for="producer" class="control-label col-sm-2 text-right">Producer</label>

    <div class="col-sm-10">
        <input type="text" class="form-control" id="producer" value="" placeholder="Producer">
    </div>
</div>

<!-- UPC -->
<div class="form-group mzhidden" data-belongs-to="all-types">
    <label for="upc" class="control-label col-sm-2 text-right">UPC</label>

    <div class="col-sm-10">
        <input type="text" class="form-control" id="upc" value="" maxlength="13" placeholder="Enter UPC if known">
    </div>
</div>

<!-- ITEM TYPE -->
<div class="form-group mzhidden" data-belongs-to="all-types">
    <label for="item_type" class="control-label col-sm-2 text-right">Type</label>

    <div class="col-sm-10">

        <select class="form-control form-select" id="item_type">

            <option data-belongs-to="Wine" value="" selected="selected"></option>

            <option data-belongs-to="Wine" value="Red">Red</option>

            <option data-belongs-to="Wine" value="White">White</option>

            <option data-belongs-to="Wine" value="Blush/Rose">Blush/Rose</option>

            <option data-belongs-to="Wine" value="Sparkling">Sparkling</option>

            <option data-belongs-to="Wine" value="Fortified">Fortified</option>

            <option data-belongs-to="Wine" value="Dessert">Dessert</option>

            <option data-belongs-to="Wine" value="Fruit">Fruit</option>

            <option data-belongs-to="Wine" value="Sake">Sake</option>

            <option data-belongs-to="Wine" value="Other">Other</option>

            <option data-belongs-to="Spirits" value="" selected="selected"></option>

            <option data-belongs-to="Spirits" value="Bitters">Bitters</option>

            <option data-belongs-to="Spirits" value="Vodka">Vodka</option>

            <option data-belongs-to="Spirits" value="Gin">Gin</option>

            <option data-belongs-to="Spirits" value="Whisky">Whisky</option>

            <option data-belongs-to="Spirits" value="Brandy">Brandy</option>

            <option data-belongs-to="Spirits" value="Rum">Rum</option>

            <option data-belongs-to="Spirits" value="Tequila">Tequila</option>

            <option data-belongs-to="Spirits" value="Liqueur">Liqueur</option>

            <option data-belongs-to="Spirits" value="Vermouth">Vermouth</option>

            <option data-belongs-to="Spirits" value="Other">Other</option>

            <option data-belongs-to="Beer" value="" selected="selected"></option>

            <option data-belongs-to="Beer" value="Ale">Ale</option>

            <option data-belongs-to="Beer" value="Amber Ale">Amber Ale</option>

            <option data-belongs-to="Beer" value="Amber Lager">Amber Lager</option>

            <option data-belongs-to="Beer" value="Barley Wine">Barley Wine</option>

            <option data-belongs-to="Beer" value="Barrel Aged">Barrel Aged</option>

            <option data-belongs-to="Beer" value="Belgian Blonde">Belgian Blonde</option>

            <option data-belongs-to="Beer" value="Belgian Dark">Belgian Dark</option>

            <option data-belongs-to="Beer" value="Belgian Dubbel">Belgian Dubbel</option>

            <option data-belongs-to="Beer" value="Belgian Pale">Belgian Pale</option>

            <option data-belongs-to="Beer" value="Belgian Tripel">Belgian Tripel</option>

            <option data-belongs-to="Beer" value="Belgian White">Belgian White</option>

            <option data-belongs-to="Beer" value="Blonde Ale">Blonde Ale</option>

            <option data-belongs-to="Beer" value="Bock">Bock</option>

            <option data-belongs-to="Beer" value="Brown Ale">Brown Ale</option>

            <option data-belongs-to="Beer" value="Cider">Cider</option>

            <option data-belongs-to="Beer" value="Dark Lager">Dark Lager</option>

            <option data-belongs-to="Beer" value="ESB">ESB</option>

            <option data-belongs-to="Beer" value="Flavored">Flavored</option>

            <option data-belongs-to="Beer" value="Glutenfree">Glutenfree</option>

            <option data-belongs-to="Beer" value="IPA">IPA</option>

            <option data-belongs-to="Beer" value="Lambic">Lambic</option>

            <option data-belongs-to="Beer" value="Lager">Lager</option>

            <option data-belongs-to="Beer" value="Non-Alcoholic">Non-Alcoholic</option>

            <option data-belongs-to="Beer" value="Pale Ale">Pale Ale</option>

            <option data-belongs-to="Beer" value="Pale Lager">Pale Lager</option>

            <option data-belongs-to="Beer" value="Pilsner">Pilsner</option>

            <option data-belongs-to="Beer" value="Porter">Porter</option>

            <option data-belongs-to="Beer" value="Scottish">Scottish</option>

            <option data-belongs-to="Beer" value="Smoked">Smoked</option>

            <option data-belongs-to="Beer" value="Wheat">Wheat</option>

            <option data-belongs-to="Beer" value="Other">Other</option>

            <option data-belongs-to="Beverages" value="" selected="selected"></option>

            <option data-belongs-to="Beverages" value="Coffee">Coffee</option>

            <option data-belongs-to="Beverages" value="Juice">Juice</option>

            <option data-belongs-to="Beverages" value="Soda">Soda</option>

            <option data-belongs-to="Beverages" value="Tea">Tea</option>

            <option data-belongs-to="Beverages" value="Water">Water</option>

            <option data-belongs-to="Beverages" value="Other">Other</option>

            <option data-belongs-to="Other" value="" selected="selected"></option>

            <option data-belongs-to="Other" value="Dairy">Dairy</option>

            <option data-belongs-to="Other" value="Food">Food</option>

            <option data-belongs-to="Other" value="Garnish">Garnish</option>

            <option data-belongs-to="Other" value="Bitters">Bitters</option>

            <option data-belongs-to="Other" value="Syrup">Syrup</option>

            <option data-belongs-to="Other" value="Mix">Mix</option>

            <option data-belongs-to="Other" value="Tinctures">Tinctures</option>

            <option data-belongs-to="Other" value="Glassware">Glassware</option>

            <option data-belongs-to="Other" value="Misc.">Misc.</option>

            <option data-belongs-to="Other" value="Other">Other</option>

        </select>
    </div>
</div>

<!-- VARIETY -->
<div class="form-group mzhidden" data-belongs-to="all-types">
<label for="variety" class="control-label col-sm-2 text-right">Variety</label>

<div class="col-sm-10">
<select class="form-control form-select" id="variety">

<option data-belongs-to="Red" value="" selected="selected"></option>

<option data-belongs-to="Red" value="Barbera">Barbera</option>

<option data-belongs-to="Red" value="Bordeaux">Bordeaux</option>

<option data-belongs-to="Red" value="Cabernet Franc">Cabernet Franc</option>

<option data-belongs-to="Red" value="Cabernet Sauvignon">Cabernet Sauvignon</option>

<option data-belongs-to="Red" value="Carignane">Carignane</option>

<option data-belongs-to="Red" value="Dolcetto">Dolcetto</option>

<option data-belongs-to="Red" value="Gamay">Gamay</option>

<option data-belongs-to="Red" value="Grenache">Grenache</option>

<option data-belongs-to="Red" value="Lagrein">Lagrein</option>

<option data-belongs-to="Red" value="Malbec">Malbec</option>

<option data-belongs-to="Red" value="Merlot">Merlot</option>

<option data-belongs-to="Red" value="Mourvedre">Mourvedre</option>

<option data-belongs-to="Red" value="Nebbiolo">Nebbiolo</option>

<option data-belongs-to="Red" value="Petite Sirah">Petite Sirah</option>

<option data-belongs-to="Red" value="Pineau d&#x27;Aunis">Pineau d&#x27;Aunis</option>

<option data-belongs-to="Red" value="Pinot Noir">Pinot Noir</option>

<option data-belongs-to="Red" value="Red Blend">Red Blend</option>

<option data-belongs-to="Red" value="Rhone Blends">Rhone Blends</option>

<option data-belongs-to="Red" value="Sangiovese">Sangiovese</option>

<option data-belongs-to="Red" value="Shiraz/Syrah">Shiraz/Syrah</option>

<option data-belongs-to="Red" value="Tempranillo">Tempranillo</option>

<option data-belongs-to="Red" value="Zinfandel">Zinfandel</option>

<option data-belongs-to="Red" value="Other">Other</option>

<option data-belongs-to="White" value="" selected="selected"></option>

<option data-belongs-to="White" value="Chardonnay">Chardonnay</option>

<option data-belongs-to="White" value="Chenin Blanc">Chenin Blanc</option>

<option data-belongs-to="White" value="Gewurztraminer">Gewurztraminer</option>

<option data-belongs-to="White" value="Gruner Veltliner">Gruner Veltliner</option>

<option data-belongs-to="White" value="Melon de Bourgogne">Melon de Bourgogne</option>

<option data-belongs-to="White" value="Pinot Blanc">Pinot Blanc</option>

<option data-belongs-to="White" value="Pinot Grigio">Pinot Grigio</option>

<option data-belongs-to="White" value="Pinot Gris">Pinot Gris</option>

<option data-belongs-to="White" value="Riesling">Riesling</option>

<option data-belongs-to="White" value="Romorantin">Romorantin</option>

<option data-belongs-to="White" value="Sauvignon Blanc">Sauvignon Blanc</option>

<option data-belongs-to="White" value="Semillon">Semillon</option>

<option data-belongs-to="White" value="Viognier">Viognier</option>

<option data-belongs-to="White" value="White Blend">White Blend</option>

<option data-belongs-to="White" value="White Zinfandel">White Zinfandel</option>

<option data-belongs-to="White" value="Other">Other</option>

<option data-belongs-to="Sparkling" value="" selected="selected"></option>

<option data-belongs-to="Sparkling" value="Champagne">Champagne</option>

<option data-belongs-to="Sparkling" value="Other">Other</option>

<option data-belongs-to="Fortified" value="" selected="selected"></option>

<option data-belongs-to="Fortified" value="Sherry">Sherry</option>

<option data-belongs-to="Fortified" value="Other">Other</option>

<option data-belongs-to="Dessert" value="" selected="selected"></option>

<option data-belongs-to="Dessert" value="Port">Port</option>

<option data-belongs-to="Dessert" value="Other">Other</option>

<option data-belongs-to="Gin" value="" selected="selected"></option>

<option data-belongs-to="Gin" value="London Dry">London Dry</option>

<option data-belongs-to="Gin" value="Other Dry">Other Dry</option>

<option data-belongs-to="Gin" value="Plymouth">Plymouth</option>

<option data-belongs-to="Gin" value="Old Tom">Old Tom</option>

<option data-belongs-to="Gin" value="Holland/Genever">Holland/Genever</option>

<option data-belongs-to="Gin" value="German">German</option>

<option data-belongs-to="Gin" value="Flavored">Flavored</option>

<option data-belongs-to="Gin" value="Raki">Raki</option>

<option data-belongs-to="Gin" value="Ouzo">Ouzo</option>

<option data-belongs-to="Gin" value="Absinthe">Absinthe</option>

<option data-belongs-to="Gin" value="Pernod">Pernod</option>

<option data-belongs-to="Gin" value="Pastis">Pastis</option>

<option data-belongs-to="Gin" value="Akvavit">Akvavit</option>

<option data-belongs-to="Gin" value="Pacharan/Sloe">Pacharan/Sloe</option>

<option data-belongs-to="Gin" value="Other">Other</option>

<option data-belongs-to="Whisky" value="" selected="selected"></option>

<option data-belongs-to="Whisky" value="American">American</option>

<option data-belongs-to="Whisky" value="Bourbon">Bourbon</option>

<option data-belongs-to="Whisky" value="Canadian">Canadian</option>

<option data-belongs-to="Whisky" value="Rye">Rye</option>

<option data-belongs-to="Whisky" value="Wheat">Wheat</option>

<option data-belongs-to="Whisky" value="Corn">Corn</option>

<option data-belongs-to="Whisky" value="Tennessee">Tennessee</option>

<option data-belongs-to="Whisky" value="Single Malt">Single Malt</option>

<option data-belongs-to="Whisky" value="Pure Malt">Pure Malt</option>

<option data-belongs-to="Whisky" value="Single Grain">Single Grain</option>

<option data-belongs-to="Whisky" value="Grain">Grain</option>

<option data-belongs-to="Whisky" value="Japanese">Japanese</option>

<option data-belongs-to="Whisky" value="Irish">Irish</option>

<option data-belongs-to="Whisky" value="Blended Malt">Blended Malt</option>

<option data-belongs-to="Whisky" value="Blended">Blended</option>

<option data-belongs-to="Whisky" value="Flavored">Flavored</option>

<option data-belongs-to="Whisky" value="Pure Pot Still">Pure Pot Still</option>

<option data-belongs-to="Whisky" value="Scotch">Scotch</option>

<option data-belongs-to="Whisky" value="Other">Other</option>

<option data-belongs-to="Brandy" value="" selected="selected"></option>

<option data-belongs-to="Brandy" value="Cognac">Cognac</option>

<option data-belongs-to="Brandy" value="Armagnac">Armagnac</option>

<option data-belongs-to="Brandy" value="Marc">Marc</option>

<option data-belongs-to="Brandy" value="Other French">Other French</option>

<option data-belongs-to="Brandy" value="California">California</option>

<option data-belongs-to="Brandy" value="Weinbrand">Weinbrand</option>

<option data-belongs-to="Brandy" value="Alter/Uralt">Alter/Uralt</option>

<option data-belongs-to="Brandy" value="Vecchio, V.S.O.P.">Vecchio, V.S.O.P.</option>

<option data-belongs-to="Brandy" value="Grappa">Grappa</option>

<option data-belongs-to="Brandy" value="Spanish">Spanish</option>

<option data-belongs-to="Brandy" value="Aguardente da Lourinha">Aguardente da Lourinha</option>

<option data-belongs-to="Brandy" value="Grand Fine">Grand Fine</option>

<option data-belongs-to="Brandy" value="Israeli">Israeli</option>

<option data-belongs-to="Brandy" value="Pot Still">Pot Still</option>

<option data-belongs-to="Brandy" value="Blended">Blended</option>

<option data-belongs-to="Brandy" value="Vintage">Vintage</option>

<option data-belongs-to="Brandy" value="Mexican">Mexican</option>

<option data-belongs-to="Brandy" value="Pisco">Pisco</option>

<option data-belongs-to="Brandy" value="Matured">Matured</option>

<option data-belongs-to="Brandy" value="Old">Old</option>

<option data-belongs-to="Brandy" value="Very Old">Very Old</option>

<option data-belongs-to="Brandy" value="Apple">Apple</option>

<option data-belongs-to="Brandy" value="Pear">Pear</option>

<option data-belongs-to="Brandy" value="Apricot">Apricot</option>

<option data-belongs-to="Brandy" value="Cherry">Cherry</option>

<option data-belongs-to="Brandy" value="Plum">Plum</option>

<option data-belongs-to="Brandy" value="Blackberry">Blackberry</option>

<option data-belongs-to="Brandy" value="Elderberry">Elderberry</option>

<option data-belongs-to="Brandy" value="Raspberry">Raspberry</option>

<option data-belongs-to="Brandy" value="Strawberry">Strawberry</option>

<option data-belongs-to="Brandy" value="Other Fruit">Other Fruit</option>

<option data-belongs-to="Brandy" value="Fruit Blend">Fruit Blend</option>

<option data-belongs-to="Brandy" value="Other">Other</option>

<option data-belongs-to="Rum" value="" selected="selected"></option>

<option data-belongs-to="Rum" value="American">American</option>

<option data-belongs-to="Rum" value="Barbados">Barbados</option>

<option data-belongs-to="Rum" value="Guyana">Guyana</option>

<option data-belongs-to="Rum" value="Jamaica">Jamaica</option>

<option data-belongs-to="Rum" value="Other British">Other British</option>

<option data-belongs-to="Rum" value="Cuba">Cuba</option>

<option data-belongs-to="Rum" value="Central America">Central America</option>

<option data-belongs-to="Rum" value="Puerto Rico">Puerto Rico</option>

<option data-belongs-to="Rum" value="Other Spanish">Other Spanish</option>

<option data-belongs-to="Rum" value="Guadeloupe">Guadeloupe</option>

<option data-belongs-to="Rum" value="Haiti">Haiti</option>

<option data-belongs-to="Rum" value="Martinique">Martinique</option>

<option data-belongs-to="Rum" value="Grenada">Grenada</option>

<option data-belongs-to="Rum" value="Other French">Other French</option>

<option data-belongs-to="Rum" value="Fruit">Fruit</option>

<option data-belongs-to="Rum" value="Spiced">Spiced</option>

<option data-belongs-to="Rum" value="Other White">Other White</option>

<option data-belongs-to="Rum" value="Other Gold">Other Gold</option>

<option data-belongs-to="Rum" value="Other Dark/Black">Other Dark/Black</option>

<option data-belongs-to="Rum" value="Arrack">Arrack</option>

<option data-belongs-to="Rum" value="Cachaca">Cachaca</option>

<option data-belongs-to="Rum" value="Other">Other</option>

<option data-belongs-to="Tequila" value="" selected="selected"></option>

<option data-belongs-to="Tequila" value="Blanco">Blanco</option>

<option data-belongs-to="Tequila" value="Joven Abocado">Joven Abocado</option>

<option data-belongs-to="Tequila" value="Reposado">Reposado</option>

<option data-belongs-to="Tequila" value="Anejo">Anejo</option>

<option data-belongs-to="Tequila" value="Extra-Anejo">Extra-Anejo</option>

<option data-belongs-to="Tequila" value="Bacanora">Bacanora</option>

<option data-belongs-to="Tequila" value="Comiteca">Comiteca</option>

<option data-belongs-to="Tequila" value="Mezcal">Mezcal</option>

<option data-belongs-to="Tequila" value="Raicilla">Raicilla</option>

<option data-belongs-to="Tequila" value="Sotol">Sotol</option>

<option data-belongs-to="Tequila" value="Other">Other</option>

<option data-belongs-to="Liqueur" value="" selected="selected"></option>

<option data-belongs-to="Liqueur" value="Aperitif">Aperitif</option>

<option data-belongs-to="Liqueur" value="Bitters">Bitters</option>

<option data-belongs-to="Liqueur" value="Orange">Orange</option>

<option data-belongs-to="Liqueur" value="Apple">Apple</option>

<option data-belongs-to="Liqueur" value="Melon">Melon</option>

<option data-belongs-to="Liqueur" value="Cherry">Cherry</option>

<option data-belongs-to="Liqueur" value="Black Raspberry">Black Raspberry</option>

<option data-belongs-to="Liqueur" value="Other Fruit">Other Fruit</option>

<option data-belongs-to="Liqueur" value="Mint">Mint</option>

<option data-belongs-to="Liqueur" value="Violet">Violet</option>

<option data-belongs-to="Liqueur" value="Aniseed">Aniseed</option>

<option data-belongs-to="Liqueur" value="Cinnamon">Cinnamon</option>

<option data-belongs-to="Liqueur" value="Herbs">Herbs</option>

<option data-belongs-to="Liqueur" value="Other Herbal">Other Herbal</option>

<option data-belongs-to="Liqueur" value="Almond">Almond</option>

<option data-belongs-to="Liqueur" value="Hazelnut">Hazelnut</option>

<option data-belongs-to="Liqueur" value="Cacao">Cacao</option>

<option data-belongs-to="Liqueur" value="Coffee">Coffee</option>

<option data-belongs-to="Liqueur" value="Coconut">Coconut</option>

<option data-belongs-to="Liqueur" value="Egg">Egg</option>

<option data-belongs-to="Liqueur" value="Coffee">Coffee</option>

<option data-belongs-to="Liqueur" value="Scotch Whisky">Scotch Whisky</option>

<option data-belongs-to="Liqueur" value="Bourbon">Bourbon</option>

<option data-belongs-to="Liqueur" value="Other">Other</option>

</select>
</div>
</div>

<!-- COUNTRY -->
<div class="form-group mzhidden" data-belongs-to="all-types">
    <label for="country" class="control-label col-sm-2 text-right">Country</label>

    <div class="col-sm-10">
        <select class="form-control form-select" id="country">

            <option value="" selected="selected"></option>

            <option value="Argentina">Argentina</option>

            <option value="Australia">Australia</option>

            <option value="Austria">Austria</option>

            <option value="Brazil">Brazil</option>

            <option value="Canada">Canada</option>

            <option value="Caribbean">Caribbean</option>

            <option value="Central America">Central America</option>

            <option value="Chile">Chile</option>

            <option value="Cuba">Cuba</option>

            <option value="Eastern Europe">Eastern Europe</option>

            <option value="England">England</option>

            <option value="France">France</option>

            <option value="Finland">Finland</option>

            <option value="Germany">Germany</option>

            <option value="Greece">Greece</option>

            <option value="Holland">Holland</option>

            <option value="Hungary">Hungary</option>

            <option value="India">India</option>

            <option value="Israel">Israel</option>

            <option value="Italy">Italy</option>

            <option value="Ireland">Ireland</option>

            <option value="Japan">Japan</option>

            <option value="Mexico">Mexico</option>

            <option value="New Zealand">New Zealand</option>

            <option value="Peru">Peru</option>

            <option value="Poland">Poland</option>

            <option value="Portugal">Portugal</option>

            <option value="Russia">Russia</option>

            <option value="South Africa">South Africa</option>

            <option value="Scotland">Scotland</option>

            <option value="Spain">Spain</option>

            <option value="Sweden">Sweden</option>

            <option value="Switzerland">Switzerland</option>

            <option value="Turkey">Turkey</option>

            <option value="United States">United States</option>

            <option value="Other">Other</option>

        </select>
    </div>
</div>

<!-- REGION -->
<div class="form-group mzhidden" data-belongs-to="all-types">
    <label for="region" class="control-label col-sm-2 text-right">Region</label>

    <div class="col-sm-10">
        <select class="form-control form-select" id="region">

            <option selected="selected" data-belongs-to="Argentina" value=""></option>

            <option data-belongs-to="Argentina" value="Mendoza">Mendoza</option>

            <option data-belongs-to="Argentina" value="Other">Other</option>

            <option selected="selected" data-belongs-to="Australia" value=""></option>

            <option data-belongs-to="Australia" value="New South Wales">New South Wales</option>

            <option data-belongs-to="Australia" value="South Australia">South Australia</option>

            <option data-belongs-to="Australia" value="Victoria">Victoria</option>

            <option data-belongs-to="Australia" value="Western Australia">Western Australia</option>

            <option data-belongs-to="Australia" value="Other">Other</option>

            <option selected="selected" data-belongs-to="Chile" value=""></option>

            <option data-belongs-to="Chile" value="Colchagua Valley">Colchagua Valley</option>

            <option data-belongs-to="Chile" value="Curico Valley">Curico Valley</option>

            <option data-belongs-to="Chile" value="Other">Other</option>

            <option selected="selected" data-belongs-to="France" value=""></option>

            <option data-belongs-to="France" value="Alsace">Alsace</option>

            <option data-belongs-to="France" value="Beaujolais">Beaujolais</option>

            <option data-belongs-to="France" value="Bordeaux">Bordeaux</option>

            <option data-belongs-to="France" value="Burgundy">Burgundy</option>

            <option data-belongs-to="France" value="Chablis">Chablis</option>

            <option data-belongs-to="France" value="Champagne">Champagne</option>

            <option data-belongs-to="France" value="Languedoc-Roussillon">Languedoc-Roussillon</option>

            <option data-belongs-to="France" value="Loire">Loire</option>

            <option data-belongs-to="France" value="Provence">Provence</option>

            <option data-belongs-to="France" value="Rhone">Rhone</option>

            <option data-belongs-to="France" value="Savoie/Jura">Savoie/Jura</option>

            <option data-belongs-to="France" value="Southwest France">Southwest France</option>

            <option data-belongs-to="France" value="Other">Other</option>

            <option selected="selected" data-belongs-to="Germany" value=""></option>

            <option data-belongs-to="Germany" value="Mosel-Saar-Ruwer">Mosel-Saar-Ruwer</option>

            <option data-belongs-to="Germany" value="Nahe">Nahe</option>

            <option data-belongs-to="Germany" value="Pfalz">Pfalz</option>

            <option data-belongs-to="Germany" value="Rheingau">Rheingau</option>

            <option data-belongs-to="Germany" value="Rheinhessen">Rheinhessen</option>

            <option data-belongs-to="Germany" value="Other">Other</option>

            <option selected="selected" data-belongs-to="Italy" value=""></option>

            <option data-belongs-to="Italy" value="Abruzzo">Abruzzo</option>

            <option data-belongs-to="Italy" value="Campania">Campania</option>

            <option data-belongs-to="Italy" value="Emilia Romagna">Emilia Romagna</option>

            <option data-belongs-to="Italy" value="Friuli-Venezia-Giulia">Friuli-Venezia-Giulia</option>

            <option data-belongs-to="Italy" value="Lombardy">Lombardy</option>

            <option data-belongs-to="Italy" value="Marche">Marche</option>

            <option data-belongs-to="Italy" value="Piedmont">Piedmont</option>

            <option data-belongs-to="Italy" value="Puglia">Puglia</option>

            <option data-belongs-to="Italy" value="Sardinia">Sardinia</option>

            <option data-belongs-to="Italy" value="Sicily">Sicily</option>

            <option data-belongs-to="Italy" value="Trentino-Alto Adige">Trentino-Alto Adige</option>

            <option data-belongs-to="Italy" value="Tuscany">Tuscany</option>

            <option data-belongs-to="Italy" value="Umbria">Umbria</option>

            <option data-belongs-to="Italy" value="Veneto">Veneto</option>

            <option data-belongs-to="Italy" value="Other">Other</option>

            <option selected="selected" data-belongs-to="New Zealand" value=""></option>

            <option data-belongs-to="New Zealand" value="North Island">North Island</option>

            <option data-belongs-to="New Zealand" value="South Island">South Island</option>

            <option data-belongs-to="New Zealand" value="Other">Other</option>

            <option selected="selected" data-belongs-to="Portugal" value=""></option>

            <option data-belongs-to="Portugal" value="Madeira">Madeira</option>

            <option data-belongs-to="Portugal" value="North">North</option>

            <option data-belongs-to="Portugal" value="Port">Port</option>

            <option data-belongs-to="Portugal" value="Other">Other</option>

            <option selected="selected" data-belongs-to="Spain" value=""></option>

            <option data-belongs-to="Spain" value="Catalunya">Catalunya</option>

            <option data-belongs-to="Spain" value="Ebro River">Ebro River</option>

            <option data-belongs-to="Spain" value="Navarra">Navarra</option>

            <option data-belongs-to="Spain" value="Northwest">Northwest</option>

            <option data-belongs-to="Spain" value="Penedes">Penedes</option>

            <option data-belongs-to="Spain" value="Priorato">Priorato</option>

            <option data-belongs-to="Spain" value="Rias Baixas">Rias Baixas</option>

            <option data-belongs-to="Spain" value="Ribera del Duero">Ribera del Duero</option>

            <option data-belongs-to="Spain" value="Rioja">Rioja</option>

            <option data-belongs-to="Spain" value="Sherry">Sherry</option>

            <option data-belongs-to="Spain" value="Other">Other</option>

            <option selected="selected" data-belongs-to="United States" value=""></option>

            <option data-belongs-to="United States" value="California">California</option>

            <option data-belongs-to="United States" value="Kentucky">Kentucky</option>

            <option data-belongs-to="United States" value="New York">New York</option>

            <option data-belongs-to="United States" value="Oregon">Oregon</option>

            <option data-belongs-to="United States" value="Washington">Washington</option>

            <option data-belongs-to="United States" value="Other">Other</option>

        </select>
    </div>
</div>

<!-- APPELLATION -->
<div class="form-group mzhidden" data-belongs-to="wine">
    <label for="appellation" class="control-label col-sm-2 text-right">Appellation</label>

    <div class="col-sm-10">
        <select class="form-control form-select" id="appellation">

            <option selected="selected" data-belongs-to="Bordeaux" value=""></option>

            <option data-belongs-to="Bordeaux" value="Cotes de Blaye">Cotes de Blaye</option>

            <option data-belongs-to="Bordeaux" value="Cotes de Castillon">Cotes de Castillon</option>

            <option data-belongs-to="Bordeaux" value="Crus Bourgeois">Crus Bourgeois</option>

            <option data-belongs-to="Bordeaux" value="Fronsac">Fronsac</option>

            <option data-belongs-to="Bordeaux" value="Graves">Graves</option>

            <option data-belongs-to="Bordeaux" value="Haut Medoc">Haut Medoc</option>

            <option data-belongs-to="Bordeaux" value="Margaux">Margaux</option>

            <option data-belongs-to="Bordeaux" value="Medoc">Medoc</option>

            <option data-belongs-to="Bordeaux" value="Lalande-de-Pomerol">Lalande-de-Pomerol</option>

            <option data-belongs-to="Bordeaux" value="Pauillac">Pauillac</option>

            <option data-belongs-to="Bordeaux" value="Pessoac-Leognan">Pessoac-Leognan</option>

            <option data-belongs-to="Bordeaux" value="Pomerol">Pomerol</option>

            <option data-belongs-to="Bordeaux" value="Sauternes">Sauternes</option>

            <option data-belongs-to="Bordeaux" value="St. Estephe">St. Estephe</option>

            <option data-belongs-to="Bordeaux" value="St. Julian">St. Julian</option>

            <option data-belongs-to="Bordeaux" value="Other">Other</option>

            <option selected="selected" data-belongs-to="Burgundy" value=""></option>

            <option data-belongs-to="Burgundy" value="Chambolle Musigny">Chambolle Musigny</option>

            <option data-belongs-to="Burgundy" value="Chassagne Montrachet">Chassagne Montrachet</option>

            <option data-belongs-to="Burgundy" value="Corton">Corton</option>

            <option data-belongs-to="Burgundy" value="Gevrey Chambertin">Gevrey Chambertin</option>

            <option data-belongs-to="Burgundy" value="Meursault">Meursault</option>

            <option data-belongs-to="Burgundy" value="Nuits Saint Georges">Nuits Saint Georges</option>

            <option data-belongs-to="Burgundy" value="Puligny Montrachet">Puligny Montrachet</option>

            <option data-belongs-to="Burgundy" value="Volnay">Volnay</option>

            <option data-belongs-to="Burgundy" value="Vosne Romanee">Vosne Romanee</option>

            <option data-belongs-to="Burgundy" value="Vougeot">Vougeot</option>

            <option data-belongs-to="Burgundy" value="Other">Other</option>

            <option selected="selected" data-belongs-to="Rhone" value=""></option>

            <option data-belongs-to="Rhone" value="Chateauneuf du Pape">Chateauneuf du Pape</option>

            <option data-belongs-to="Rhone" value="Costieres de Nimes">Costieres de Nimes</option>

            <option data-belongs-to="Rhone" value="Cotes de Ventoux">Cotes de Ventoux</option>

            <option data-belongs-to="Rhone" value="Cotes du Rhone">Cotes du Rhone</option>

            <option data-belongs-to="Rhone" value="Crozes Hermitage">Crozes Hermitage</option>

            <option data-belongs-to="Rhone" value="Gigondas">Gigondas</option>

            <option data-belongs-to="Rhone" value="St Joseph">St Joseph</option>

            <option data-belongs-to="Rhone" value="Other">Other</option>

            <option selected="selected" data-belongs-to="Tuscany" value=""></option>

            <option data-belongs-to="Tuscany" value="Bolgheri">Bolgheri</option>

            <option data-belongs-to="Tuscany" value="Brunello di Montalcino">Brunello di Montalcino</option>

            <option data-belongs-to="Tuscany" value="Chianti">Chianti</option>

            <option data-belongs-to="Tuscany" value="Rosso di Montalcino">Rosso di Montalcino</option>

            <option data-belongs-to="Tuscany" value="Super Turscan">Super Turscan</option>

            <option data-belongs-to="Tuscany" value="Other">Other</option>

            <option selected="selected" data-belongs-to="California" value=""></option>

            <option data-belongs-to="California" value="Central Coast">Central Coast</option>

            <option data-belongs-to="California" value="Central Valley">Central Valley</option>

            <option data-belongs-to="California" value="Monterey">Monterey</option>

            <option data-belongs-to="California" value="Napa Valley">Napa Valley</option>

            <option data-belongs-to="California" value="North Coast">North Coast</option>

            <option data-belongs-to="California" value="San Luis Obispo">San Luis Obispo</option>

            <option data-belongs-to="California" value="Santa Barbara County">Santa Barbara County</option>

            <option data-belongs-to="California" value="Sierra Foothills">Sierra Foothills</option>

            <option data-belongs-to="California" value="Sonoma County">Sonoma County</option>

            <option data-belongs-to="California" value="South Coast">South Coast</option>

            <option data-belongs-to="California" value="Other">Other</option>

            <option selected="selected" data-belongs-to="Washington" value=""></option>

            <option data-belongs-to="Washington" value="Columbia Valley">Columbia Valley</option>

            <option data-belongs-to="Washington" value="Yakima Valley">Yakima Valley</option>

            <option data-belongs-to="Washington" value="Walla Walla Valley">Walla Walla Valley</option>

            <option data-belongs-to="Washington" value="Other">Other</option>

            <option selected="selected" data-belongs-to="Oregon" value=""></option>

            <option data-belongs-to="Oregon" value="Willamette Valley">Willamette Valley</option>

            <option data-belongs-to="Oregon" value="NWV Dundee Hills">NWV Dundee Hills</option>

            <option data-belongs-to="Oregon" value="Other">Other</option>

        </select>
    </div>
</div>


<!-- VINTAGE -->
<div class="form-group mzhidden" data-belongs-to="wine">
    <label for="vintage" class="control-label col-sm-2 text-right">Vintage</label>

    <div class="col-sm-10">
        <select class="form-control form-select" id="vintage">

            <option value="" selected="selected"></option>

            <option value="2013">2013</option>

            <option value="2012">2012</option>

            <option value="2011">2011</option>

            <option value="2010">2010</option>

            <option value="2009">2009</option>

            <option value="2008">2008</option>

            <option value="2007">2007</option>

            <option value="2006">2006</option>

            <option value="2005">2005</option>

            <option value="2004">2004</option>

            <option value="2003">2003</option>

            <option value="2002">2002</option>

            <option value="2001">2001</option>

            <option value="2000">2000</option>

            <option value="1999">1999</option>

            <option value="1998">1998</option>

            <option value="1997">1997</option>

            <option value="1996">1996</option>

            <option value="1995">1995</option>

            <option value="1994">1994</option>

            <option value="1993">1993</option>

            <option value="1992">1992</option>

            <option value="1991">1991</option>

            <option value="1990">1990</option>

            <option value="1989">1989</option>

            <option value="1988">1988</option>

            <option value="1987">1987</option>

            <option value="1986">1986</option>

            <option value="1985">1985</option>

            <option value="1984">1984</option>

            <option value="1983">1983</option>

            <option value="1982">1982</option>

            <option value="1981">1981</option>

            <option value="1980">1980</option>

            <option value="1979">1979</option>

            <option value="1978">1978</option>

            <option value="1977">1977</option>

            <option value="1976">1976</option>

            <option value="1975">1975</option>

            <option value="1974">1974</option>

            <option value="1973">1973</option>

            <option value="1972">1972</option>

            <option value="1971">1971</option>

            <option value="1970">1970</option>

            <option value="1969">1969</option>

            <option value="1968">1968</option>

            <option value="1967">1967</option>

            <option value="1966">1966</option>

            <option value="1965">1965</option>

            <option value="1964">1964</option>

            <option value="1963">1963</option>

            <option value="1962">1962</option>

            <option value="1961">1961</option>

            <option value="1960">1960</option>

        </select>
    </div>
</div>

<!-- ABV % -->
<div class="form-group mzhidden" data-belongs-to="wine-spirits-beer">
    <label for="abv" class="control-label col-sm-2 text-right">ABV %</label>

    <div class="col-sm-10">
        <input type="text" class="form-control" id="abv" value="0.00" maxlength="6"
               data-inputmask="'alias': 'numeric', 'rightAlign': false, 'autoGroup': true, 'radixPoint': '.', 'placeholder': '0', 'clearMaskOnLostFocus': false, 'digits': 2, 'digitsOptional': false"
               data-mask>
    </div>
</div>
</div>
<div class="tab-pane" id="pricing">
    <div class="item-category-warning">


        <div class="alert alert-warning">
            <i class="fa fa-warning"></i>
            <span id="flashMessage">Please choose an Item Category in the "Item" tab.</span>
        </div>
    </div>

    <!-- UNIT COST -->
    <div class="form-group" data-belongs-to="all-types">
        <label for="unit_cost" class="control-label col-sm-2 text-right">Unit Cost <span
                class="text-danger">*</span></label>

        <div class="col-sm-10">
            <input type="text" class="form-control text-left" id="unit_cost2" value="0.00" maxlength="9"
                   data-inputmask="'alias': 'numeric', 'rightAlign': false, 'autoGroup': true, 'radixPoint': '.', 'placeholder': '0', 'clearMaskOnLostFocus': false, 'digits': 2, 'digitsOptional': false"
                   data-mask>
        </div>

    </div>

    <!-- UNIT PRICE -->
    <div class="form-group" data-belongs-to="all-types">
        <label for="unit_price" class="control-label col-sm-2 text-right">Unit Price</label>

        <div class="col-sm-10">
            <input type="text" class="form-control text-left" id="unit_price" value="0.00" maxlength="9"
                   data-inputmask="'alias': 'numeric', 'rightAlign': false, 'autoGroup': true, 'radixPoint': '.', 'placeholder': '0', 'clearMaskOnLostFocus': false, 'digits': 2, 'digitsOptional': false"
                   data-mask>
        </div>
    </div>

    <!-- UNIT PROFIT -->
    <div class="form-group" data-belongs-to="all-types">
        <label for="unit_profit" class="control-label col-sm-2 text-right">Unit Cost %</label>

        <div class="col-sm-10">
            <input type="text" class="form-control text-left" id="unit_profit" maxlength="6"
                   data-inputmask="'alias': 'numeric', 'rightAlign': false, 'autoGroup': true, 'radixPoint': '.', 'placeholder': '0', 'clearMaskOnLostFocus': false, 'digits': 2, 'digitsOptional': false"
                   data-mask>
        </div>
    </div>

    <hr>
    <!-- CASE COST -->
    <div class="form-group" data-belongs-to="all-types">
        <label for="case_cost" class="control-label col-sm-2 text-right">Case Cost</label>

        <div class="col-sm-10">
            <input type="text" class="form-control text-left" id="case_cost" value="0.00" maxlength="9"
                   data-inputmask="'alias': 'numeric', 'rightAlign': false, 'autoGroup': true, 'radixPoint': '.', 'placeholder': '0', 'clearMaskOnLostFocus': false, 'digits': 2, 'digitsOptional': false"
                   data-mask>
        </div>
    </div>

    <!-- CASE SIZE -->
    <div class="form-group" data-belongs-to="all-types">
        <label for="case_size" class="control-label col-sm-2 text-right">Case Size</label>

        <div class="col-sm-10">
            <input type="text" class="form-control text-left" id="case_size" name="case_size" value="1" maxlength="4"
                   data-inputmask="'alias': 'integer', 'groupSeparator': '', 'placeholder': '', 'clearMaskOnLostFocus': false, 'rightAlign': false, 'autoGroup': true"
                   data-mask>
        </div>
    </div>

    <!-- POUR SIZE -->
    <div class="form-group" data-belongs-to="wine-beer-spirits-beverages">
        <hr>
        <label for="pour_size" class="control-label col-sm-2 text-right">Pour Size</label>

        <div class="col-sm-10">
            <select class="form-control form-select" id="pour_size">

                <option value="" selected="selected"></option>

                <option value="0.5oz">0.5oz</option>

                <option value="0.75oz">0.75oz</option>

                <option value="1oz">1oz</option>

                <option value="1.25oz">1.25oz</option>

                <option value="1.5oz">1.5oz</option>

                <option value="1.75oz">1.75oz</option>

                <option value="2oz">2oz</option>

                <option value="2.25oz">2.25oz</option>

                <option value="2.5oz">2.5oz</option>

                <option value="3oz">3oz</option>

                <option value="3.25oz">3.25oz</option>

                <option value="3.5oz">3.5oz</option>

                <option value="3.75oz">3.75oz</option>

                <option value="4oz">4oz</option>

                <option value="4.5oz">4.5oz</option>

                <option value="5oz">5oz</option>

                <option value="5.5oz">5.5oz</option>

                <option value="6oz">6oz</option>

                <option value="6.5oz">6.5oz</option>

                <option value="7oz">7oz</option>

                <option value="7.5oz">7.5oz</option>

                <option value="8oz">8oz</option>

                <option value="8.5oz">8.5oz</option>

                <option value="10oz">10oz</option>

                <option value="12oz">12oz</option>

                <option value="14oz">14oz</option>

                <option value="16oz">16oz</option>

                <option value="18oz">18oz</option>

            </select>
        </div>
    </div>

    <!-- POUR COST -->
    <div class="form-group" data-belongs-to="wine-beer-spirits-beverages">
        <label for="pour_cost" class="control-label col-sm-2 text-right">Pour Cost</label>

        <div class="col-sm-10">
            <input type="text" readonly class="form-control text-left" id="pour_cost" value="0.00"
                   data-inputmask="'alias': 'numeric', 'rightAlign': false, 'autoGroup': true, 'radixPoint': '.', 'placeholder': '0', 'clearMaskOnLostFocus': false, 'digits': 2, 'digitsOptional': false"
                   data-mask>
        </div>
    </div>

    <!-- POUR PRICE -->
    <div class="form-group" data-belongs-to="wine-beer-spirits-beverages">
        <label for="pour_price" class="control-label col-sm-2 text-right">Pour Price</label>

        <div class="col-sm-10">
            <input type="text" class="form-control text-left" id="pour_price" value="0.00" maxlength="9"
                   data-inputmask="'alias': 'numeric', 'rightAlign': false, 'autoGroup': true, 'radixPoint': '.', 'placeholder': '0', 'clearMaskOnLostFocus': false, 'digits': 2, 'digitsOptional': false"
                   data-mask>
        </div>
    </div>

    <!-- POUR PROFIT -->
    <div class="form-group" data-belongs-to="wine-beer-spirits-beverages">
        <label for="pour_profit" class="control-label col-sm-2 text-right">Pour Cost %</label>

        <div class="col-sm-10">
            <input type="text" class="form-control text-left" id="pour_profit" maxlength="6">
        </div>
    </div>

    <hr>

    <!-- CRV -->
    <div class="form-group" data-belongs-to="all-types">
        <label for="crv" class="control-label col-sm-2 text-right">CRV</label>

        <div class="col-sm-10">
            <input type="text" class="form-control text-left" id="crv" value="0.00" maxlength="6"
                   data-inputmask="'alias': 'numeric', 'rightAlign': false, 'autoGroup': true, 'radixPoint': '.', 'placeholder': '0', 'clearMaskOnLostFocus': false, 'digits': 2, 'digitsOptional': false"
                   data-mask>
        </div>
    </div>
    <div class="form-group" data-belongs-to="all-types">
        <label for="deposit" class="control-label col-sm-2 text-right">Deposit</label>

        <div class="col-sm-10">
            <input type="text" class="form-control text-left" id="deposit" value="0.00" maxlength="6"
                   data-inputmask="'alias': 'numeric', 'rightAlign': false, 'autoGroup': true, 'radixPoint': '.', 'placeholder': '0', 'clearMaskOnLostFocus': false, 'digits': 2, 'digitsOptional': false"
                   data-mask>
        </div>
    </div>

</div>
<div class="tab-pane" id="order">
    <div class="item-category-warning">


        <div class="alert alert-warning">
            <i class="fa fa-warning"></i>
            <span id="flashMessage">Please choose an Item Category in the "Item" tab.</span>
        </div>
    </div>

    <!-- PAR -->
    <div class="form-group" data-belongs-to="all-types">
        <label for="par" class="control-label col-sm-2 text-right">Par</label>

        <div class="col-sm-10">
            <input type="text" class="form-control text-left" id="par" maxlength="5" value="0"
                   data-inputmask="'alias': 'integer', 'groupSeparator': '', 'placeholder': '', 'clearMaskOnLostFocus': false, 'rightAlign': false, 'autoGroup': true"
                   data-mask>
        </div>
    </div>

    <!-- ORDER CASE QUANTITY -->
    <div class="form-group" data-belongs-to="all-types">
        <label for="order_case_qty" class="control-label col-sm-2 text-right">Order Case Qty</label>

        <div class="col-sm-10">
            <input type="text" class="form-control text-left" id="order_case_qty" maxlength="5" value="0"
                   data-inputmask="'alias': 'integer', 'groupSeparator': '', 'placeholder': '', 'clearMaskOnLostFocus': false, 'rightAlign': false, 'autoGroup': true"
                   data-mask>
        </div>
    </div>

    <!-- ORDER QUANTITY -->
    <div class="form-group" data-belongs-to="all-types">
        <label for="order_qty" class="control-label col-sm-2 text-right">Order Unit Qty</label>

        <div class="col-sm-10">
            <input type="text" class="form-control text-left" id="order_qty" maxlength="5" value="0"
                   data-inputmask="'alias': 'integer', 'groupSeparator': '', 'placeholder': '', 'clearMaskOnLostFocus': false, 'rightAlign': false, 'autoGroup': true"
                   data-mask>
        </div>
    </div>

    <!-- NOTES -->
    <div class="form-group" data-belongs-to="all-types">
        <label for="order_qty" class="control-label col-sm-2 text-right">Order Notes</label>

        <div class="col-sm-10">
            <input type="text" class="form-control text-left" id="notes" maxlength="64" value="">
        </div>
    </div>

</div>
</div>
</form>
</div>

</div>
<div class="box-footer text-right">
    <a href="#" id="addBtn" class="btn btn-primary"><span class="fa fa-plus"></span> &nbsp; Add New Item</a>
</div>
</div>


</div>

</div>

<script src="https://d3jruo7yef7z6a.cloudfront.net/assets/concat/d70edcfa45c3efe77963579b22866a06-chrome2_concat.min.js"></script>

<script>
    $(function(){
        $("[data-mask]").inputmask();
    });
</script>

<script src="https://d3jruo7yef7z6a.cloudfront.net/assets/javascripts/1dab2408080867c9a644d9208db7bcc0-sorttable.js"></script>


<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');


    ga('create', 'UA-53193118-1', 'auto');
    ga('set', '&uid', '267');
    ga('send', 'pageview');

</script>

<div id="debug-kit-toolbar">
<ul id="panel-tabs">
<li class="panel-tab icon">
    <a href="#hide" id="hide-toolbar">
        <img src="/debug_kit/img/cake.icon.png" alt="CakePHP" />				</a>
</li>
<li class="panel-tab">
    <a href="#history">History</a>				<div class="panel-content" id="history-tab">
    <a href="#" class="panel-toggle ui-control ui-button">+</a>
    <div class="panel-resize-region">
        <div class="panel-content-data">
            <h2> Request History</h2>
            4 previous requests available	<ul class="history-list">
            <li><a href="#" class="history-link" id="history-restore-current">Restore to current request</a>		</li>
            <li><a href="/debug_kit/toolbar_access/history_state/1" class="history-link">sandboxes/newitem</a></li>
            <li><a href="/debug_kit/toolbar_access/history_state/2" class="history-link">sandboxes/newitem</a></li>
            <li><a href="/debug_kit/toolbar_access/history_state/3" class="history-link">sandboxes/newitem</a></li>
            <li><a href="/debug_kit/toolbar_access/history_state/4" class="history-link">sandboxes/bevager</a></li>
        </ul>
        </div>
        <div class="panel-content-data panel-history" id="history-history">
            <!-- content here -->
        </div>
    </div>
    <div class="panel-resize-handle ui-control">====</div>
</div>
</li>
<li class="panel-tab">
    <a href="#session">Session</a>				<div class="panel-content" id="session-tab">
    <a href="#" class="panel-toggle ui-control ui-button">+</a>
    <div class="panel-resize-region">
        <div class="panel-content-data">
            <h2>Session</h2>
            <ul class="neat-array depth-0"><li><strong>Config</strong>(array)<ul class="neat-array depth-1"><li><strong>userAgent</strong>d071b3ddc4da588e060ab246a9997223</li><li><strong>time</strong>1417976378</li><li><strong>countdown</strong>10</li></ul></li><li><strong>UserAuth</strong>(array)<ul class="neat-array depth-1"><li><strong>User</strong>(array)<ul class="neat-array depth-2"><li><strong>id</strong>1</li><li><strong>user_group_id</strong>1</li><li><strong>discount_id</strong>1</li><li><strong>promoter_id</strong>0</li><li><strong>username</strong>5521969775363</li><li><strong>pin</strong>5150</li><li><strong>barcode</strong></li><li><strong>first_name</strong>Derek</li><li><strong>last_name</strong>Graetz</li><li><strong>allowedcredit</strong>200</li><li><strong>location_id</strong>1</li><li><strong>email</strong>dgraetz@gmail.com</li><li><strong>password</strong>4109954ad53596617e6f3e50875b7d99</li><li><strong>salt</strong>78ba29b450c303c566730e8bc07eaacd</li><li><strong>active</strong>(true)</li><li><strong>email_verified</strong>(true)</li><li><strong>ip_address</strong>::1</li><li><strong>created</strong>2014-08-09 22:42:46</li><li><strong>modified</strong>2014-11-24 20:35:37</li></ul></li><li><strong>UserGroup</strong>(array)<ul class="neat-array depth-2"><li><strong>id</strong>1</li><li><strong>name</strong>Superuser</li><li><strong>alias_name</strong>Superuser</li><li><strong>allowRegistration</strong>(false)</li><li><strong>created</strong>2014-08-09 22:42:46</li><li><strong>modified</strong>2014-08-10 14:09:36</li></ul></li><li><strong>LoginToken</strong>(array)<ul class="neat-array depth-2"><li><strong>0</strong>(array)<ul class="neat-array depth-3"><li><strong>id</strong>66</li><li><strong>user_id</strong>1</li><li><strong>token</strong>8c03987a117d544d355f8e141ce6fa02</li><li><strong>duration</strong>2 weeks</li><li><strong>used</strong>1</li><li><strong>created</strong>2014-09-14 20:23:10</li><li><strong>expires</strong>2014-09-28 20:23:10</li></ul></li></ul></li></ul></li><li><strong>Message</strong>(empty)</li><li><strong>Usermgmt</strong>(empty)</li></ul>						</div>
        <div class="panel-content-data panel-history" id="session-history">
            <!-- content here -->
        </div>
    </div>
    <div class="panel-resize-handle ui-control">====</div>
</div>
</li>
<li class="panel-tab">
    <a href="#request">Request</a>				<div class="panel-content" id="request-tab">
    <a href="#" class="panel-toggle ui-control ui-button">+</a>
    <div class="panel-resize-region">
        <div class="panel-content-data">
            <h2> Request</h2>

            <h4>Cake Params</h4>
            <ul class="neat-array depth-0"><li><strong>plugin</strong>(null)</li><li><strong>controller</strong>sandboxes</li><li><strong>action</strong>newitem</li><li><strong>named</strong>(empty)</li><li><strong>pass</strong>(empty)</li><li><strong>isAjax</strong>(false)</li></ul>
            <h4>Post data</h4>
            <p class="info">No post data.</p>
            <h4>Query string</h4>
            <p class="info">No querystring data.</p>
            <h4>Cookie</h4>
            <ul class="neat-array depth-0"><li><strong>UsermgmtCookie</strong>f6e2fc75ace023e2101bf35e24d35150:1:2 weeks</li></ul>
            <h4>Current Route</h4>
            <ul class="neat-array depth-0"><li><strong>keys</strong>(array)<ul class="neat-array depth-1"><li><strong>0</strong>controller</li><li><strong>1</strong>action</li></ul></li><li><strong>options</strong>(empty)</li><li><strong>defaults</strong>(array)<ul class="neat-array depth-1"><li><strong>plugin</strong>(null)</li></ul></li><li><strong>template</strong>/:controller/:action/*</li></ul>						</div>
        <div class="panel-content-data panel-history" id="request-history">
            <!-- content here -->
        </div>
    </div>
    <div class="panel-resize-handle ui-control">====</div>
</div>
</li>
<li class="panel-tab">
    <a href="#sql_log">Sql Log</a>				<div class="panel-content" id="sql_log-tab">
    <a href="#" class="panel-toggle ui-control ui-button">+</a>
    <div class="panel-resize-region">
        <div class="panel-content-data">
            <h2>Sql Logs</h2>
        </div>
        <div class="panel-content-data panel-history" id="sql_log-history">
            <!-- content here -->
        </div>
    </div>
    <div class="panel-resize-handle ui-control">====</div>
</div>
</li>
<li class="panel-tab">
    <a href="#timer">Timer</a>				<div class="panel-content" id="timer-tab">
    <a href="#" class="panel-toggle ui-control ui-button">+</a>
    <div class="panel-resize-region">
        <div class="panel-content-data">
            <div class="debug-info">
                <h2>Memory</h2>
                <div class="peak-mem-use">
                    <p><strong>Peak Memory Use</strong> 13.58 MB</p>	</div>

                <table class="debug-table"><tr><th>Message</th> <th>Memory use</th></tr><tr class="odd"><td>Component initialization</td> <td>6.04 MB</td></tr>
                    <tr class="even"><td>Controller action start</td> <td>11.20 MB</td></tr>
                    <tr class="odd"><td>Controller render start</td> <td>11.34 MB</td></tr>
                    <tr class="even"><td>View render complete</td> <td>12.97 MB</td></tr></table></div>

            <div class="debug-info debug-timers">
                <h2>Timers</h2>
                <div class="request-time">
                    <p><strong>Total Request Time:</strong> 190 (ms)</p>	</div>
                <table class="debug-table"><tr><th>Message</th> <th>Time in ms</th> <th>Graph</th></tr><tr class="odd"><td>Core Processing (Derived from $_SERVER["REQUEST_TIME"])</td> <td>65.52</td> <td><div style="width: 350px;" class="debug-kit-graph-bar"><div style="margin-left: 0px; width: 122px" title="Starting 0.00ms into the request, taking 65.52ms" class="debug-kit-graph-bar-value"> </div></div></td></tr>
                    <tr class="even"><td>Event: Controller.initialize</td> <td>58.23</td> <td><div style="width: 350px;" class="debug-kit-graph-bar"><div style="margin-left: 122px; width: 108px" title="Starting 65.52ms into the request, taking 58.23ms" class="debug-kit-graph-bar-value"> </div></div></td></tr>
                    <tr class="odd"><td>Event: Controller.startup</td> <td>1.07</td> <td><div style="width: 350px;" class="debug-kit-graph-bar"><div style="margin-left: 230px; width: 2px" title="Starting 123.84ms into the request, taking 1.07ms" class="debug-kit-graph-bar-value"> </div></div></td></tr>
                    <tr class="even"><td>Controller action</td> <td>0.29</td> <td><div style="width: 350px;" class="debug-kit-graph-bar"><div style="margin-left: 232px; width: 1px" title="Starting 124.82ms into the request, taking 0.29ms" class="debug-kit-graph-bar-value"> </div></div></td></tr>
                    <tr class="odd"><td>Event: Controller.beforeRender</td> <td>24.43</td> <td><div style="width: 350px;" class="debug-kit-graph-bar"><div style="margin-left: 232px; width: 45px" title="Starting 125.01ms into the request, taking 24.43ms" class="debug-kit-graph-bar-value"> </div></div></td></tr>
                    <tr class="even"><td> &raquo; Processing toolbar data</td> <td>24.13</td> <td><div style="width: 350px;" class="debug-kit-graph-bar"><div style="margin-left: 232px; width: 45px" title="Starting 125.18ms into the request, taking 24.13ms" class="debug-kit-graph-bar-value"> </div></div></td></tr>
                    <tr class="odd"><td>Rendering View</td> <td>10.18</td> <td><div style="width: 350px;" class="debug-kit-graph-bar"><div style="margin-left: 309px; width: 19px" title="Starting 166.32ms into the request, taking 10.18ms" class="debug-kit-graph-bar-value"> </div></div></td></tr>
                    <tr class="even"><td> &raquo; Event: View.beforeRender</td> <td>0.13</td> <td><div style="width: 350px;" class="debug-kit-graph-bar"><div style="margin-left: 311px; width: 1px" title="Starting 167.64ms into the request, taking 0.13ms" class="debug-kit-graph-bar-value"> </div></div></td></tr>
                    <tr class="odd"><td> &raquo; Rendering APP/View/Sandboxes/newitem.ctp</td> <td>4.18</td> <td><div style="width: 350px;" class="debug-kit-graph-bar"><div style="margin-left: 312px; width: 8px" title="Starting 168.00ms into the request, taking 4.18ms" class="debug-kit-graph-bar-value"> </div></div></td></tr>
                    <tr class="even"><td> &raquo;  &raquo; Rendering APP/View/Elements/newsite.ctp</td> <td>0.84</td> <td><div style="width: 350px;" class="debug-kit-graph-bar"><div style="margin-left: 315px; width: 2px" title="Starting 169.99ms into the request, taking 0.84ms" class="debug-kit-graph-bar-value"> </div></div></td></tr>
                    <tr class="odd"><td> &raquo;  &raquo; Rendering APP/View/Elements/alerts.ctp</td> <td>0.63</td> <td><div style="width: 350px;" class="debug-kit-graph-bar"><div style="margin-left: 318px; width: 1px" title="Starting 171.18ms into the request, taking 0.63ms" class="debug-kit-graph-bar-value"> </div></div></td></tr>
                    <tr class="even"><td> &raquo; Event: View.afterRender</td> <td>0.10</td> <td><div style="width: 350px;" class="debug-kit-graph-bar"><div style="margin-left: 320px; width: 1px" title="Starting 172.30ms into the request, taking 0.10ms" class="debug-kit-graph-bar-value"> </div></div></td></tr>
                    <tr class="odd"><td> &raquo; Event: View.beforeLayout</td> <td>0.10</td> <td><div style="width: 350px;" class="debug-kit-graph-bar"><div style="margin-left: 320px; width: 1px" title="Starting 172.54ms into the request, taking 0.10ms" class="debug-kit-graph-bar-value"> </div></div></td></tr>
                    <tr class="even"><td> &raquo; Rendering APP/View/Layouts/bevager.ctp</td> <td>3.32</td> <td><div style="width: 350px;" class="debug-kit-graph-bar"><div style="margin-left: 321px; width: 6px" title="Starting 172.94ms into the request, taking 3.32ms" class="debug-kit-graph-bar-value"> </div></div></td></tr>
                    <tr class="odd"><td> &raquo;  &raquo; Rendering APP/View/Elements/header.ctp</td> <td>0.76</td> <td><div style="width: 350px;" class="debug-kit-graph-bar"><div style="margin-left: 323px; width: 1px" title="Starting 173.95ms into the request, taking 0.76ms" class="debug-kit-graph-bar-value"> </div></div></td></tr>
                    <tr class="even"><td> &raquo;  &raquo; Rendering APP/View/Elements/sidebar.ctp</td> <td>0.96</td> <td><div style="width: 350px;" class="debug-kit-graph-bar"><div style="margin-left: 325px; width: 2px" title="Starting 175.01ms into the request, taking 0.96ms" class="debug-kit-graph-bar-value"> </div></div></td></tr>
                    <tr class="odd"><td>Event: View.afterLayout</td> <td>0.00</td> <td><div style="width: 350px;" class="debug-kit-graph-bar"><div style="margin-left: 327px; width: 1px" title="Starting 176.42ms into the request, taking 0.00ms" class="debug-kit-graph-bar-value"> </div></div></td></tr></table></div>
        </div>
        <div class="panel-content-data panel-history" id="timer-history">
            <!-- content here -->
        </div>
    </div>
    <div class="panel-resize-handle ui-control">====</div>
</div>
</li>
<li class="panel-tab">
    <a href="#log">Log</a>				<div class="panel-content" id="log-tab">
    <a href="#" class="panel-toggle ui-control ui-button">+</a>
    <div class="panel-resize-region">
        <div class="panel-content-data">
            <h2>Logs</h2>
            <div class="code-table">
                <p class="info">There were no log entries made this request</p>
            </div>
        </div>
        <div class="panel-content-data panel-history" id="log-history">
            <!-- content here -->
        </div>
    </div>
    <div class="panel-resize-handle ui-control">====</div>
</div>
</li>
<li class="panel-tab">
    <a href="#variables">Variables</a>				<div class="panel-content" id="variables-tab">
    <a href="#" class="panel-toggle ui-control ui-button">+</a>
    <div class="panel-resize-region">
        <div class="panel-content-data">
            <h2> View Variables</h2>
            <ul class="neat-array depth-0"><li><strong>$request->data</strong>(empty)</li><li><strong>$this->validationErrors</strong>(array)<ul class="neat-array depth-1"><li><strong>UserGroup</strong>(empty)</li></ul></li><li><strong>Loaded Helpers</strong>(array)<ul class="neat-array depth-1"><li><strong>0</strong>Form</li><li><strong>1</strong>Html</li><li><strong>2</strong>Session</li><li><strong>3</strong>Js</li><li><strong>4</strong>UserAuth</li><li><strong>5</strong>Number</li><li><strong>6</strong>SimpleGraph</li><li><strong>7</strong>DebugTimer</li><li><strong>8</strong>Toolbar</li><li><strong>9</strong>HtmlToolbar</li></ul></li></ul>						</div>
        <div class="panel-content-data panel-history" id="variables-history">
            <!-- content here -->
        </div>
    </div>
    <div class="panel-resize-handle ui-control">====</div>
</div>
</li>
<li class="panel-tab">
    <a href="#environment">Environment</a>				<div class="panel-content" id="environment-tab">
    <a href="#" class="panel-toggle ui-control ui-button">+</a>
    <div class="panel-resize-region">
        <div class="panel-content-data">
            <h2>App Constants</h2>
            <table class="debug-table"><tr><th>Constant</th> <th>Value</th></tr><tr class="odd"><td>SITE_URL</td> <td>http://localhost:8080/</td></tr>
                <tr class="even"><td>SITE_REGISTRATION</td> <td>1</td></tr>
                <tr class="odd"><td>SEND_REGISTRATION_MAIL</td> <td></td></tr>
                <tr class="even"><td>EMAIL_VERIFICATION</td> <td></td></tr>
                <tr class="odd"><td>EMAIL_FROM_ADDRESS</td> <td>site@trap190.com</td></tr>
                <tr class="even"><td>EMAIL_FROM_NAME</td> <td>Club Trap 190</td></tr>
                <tr class="odd"><td>LOGIN_REDIRECT_URL</td> <td>/dashboard</td></tr>
                <tr class="even"><td>LOGOUT_REDIRECT_URL</td> <td>/login</td></tr>
                <tr class="odd"><td>PERMISSIONS</td> <td>1</td></tr>
                <tr class="even"><td>ADMIN_PERMISSIONS</td> <td></td></tr>
                <tr class="odd"><td>DEFAULT_GROUP_ID</td> <td>10</td></tr>
                <tr class="even"><td>ADMIN_GROUP_ID</td> <td>1</td></tr>
                <tr class="odd"><td>GUEST_GROUP_ID</td> <td>11</td></tr>
                <tr class="even"><td>USE_RECAPTCHA</td> <td></td></tr>
                <tr class="odd"><td>PRIVATE_KEY_FROM_RECAPTCHA</td> <td></td></tr>
                <tr class="even"><td>PUBLIC_KEY_FROM_RECAPTCHA</td> <td></td></tr>
                <tr class="odd"><td>LOGIN_COOKIE_NAME</td> <td>UsermgmtCookie</td></tr></table>
            <h2>CakePHP Constants</h2>
            <table class="debug-table"><tr><th>Constant</th> <th>Value</th></tr><tr class="odd"><td>APP</td> <td>/Users/amerioca/Sites/acct.club-trap.com/</td></tr>
                <tr class="even"><td>APP_DIR</td> <td>acct.club-trap.com</td></tr>
                <tr class="odd"><td>APPLIBS</td> <td>/Users/amerioca/Sites/acct.club-trap.com/Lib/</td></tr>
                <tr class="even"><td>CACHE</td> <td>/Users/amerioca/Sites/acct.club-trap.com/tmp/cache/</td></tr>
                <tr class="odd"><td>CAKE</td> <td>/Users/amerioca/Sites/lib/Cake/</td></tr>
                <tr class="even"><td>CAKE_CORE_INCLUDE_PATH</td> <td>/Users/amerioca/Sites/lib</td></tr>
                <tr class="odd"><td>CORE_PATH</td> <td>/Users/amerioca/Sites/lib/</td></tr>
                <tr class="even"><td>CAKE_VERSION</td> <td>2.5.3</td></tr>
                <tr class="odd"><td>CSS</td> <td>/Users/amerioca/Sites/acct.club-trap.com/webroot/css/</td></tr>
                <tr class="even"><td>CSS_URL</td> <td>css/</td></tr>
                <tr class="odd"><td>DS</td> <td>/</td></tr>
                <tr class="even"><td>FULL_BASE_URL</td> <td>http://localhost:8080</td></tr>
                <tr class="odd"><td>IMAGES</td> <td>/Users/amerioca/Sites/acct.club-trap.com/webroot/img/</td></tr>
                <tr class="even"><td>IMAGES_URL</td> <td>img/</td></tr>
                <tr class="odd"><td>JS</td> <td>/Users/amerioca/Sites/acct.club-trap.com/webroot/js/</td></tr>
                <tr class="even"><td>JS_URL</td> <td>js/</td></tr>
                <tr class="odd"><td>LOGS</td> <td>/Users/amerioca/Sites/acct.club-trap.com/tmp/logs/</td></tr>
                <tr class="even"><td>ROOT</td> <td>/Users/amerioca/Sites</td></tr>
                <tr class="odd"><td>TESTS</td> <td>/Users/amerioca/Sites/acct.club-trap.com/Test/</td></tr>
                <tr class="even"><td>TMP</td> <td>/Users/amerioca/Sites/acct.club-trap.com/tmp/</td></tr>
                <tr class="odd"><td>VENDORS</td> <td>/Users/amerioca/Sites/vendors/</td></tr>
                <tr class="even"><td>WEBROOT_DIR</td> <td>webroot</td></tr>
                <tr class="odd"><td>WWW_ROOT</td> <td>/Users/amerioca/Sites/acct.club-trap.com/webroot/</td></tr></table>
            <h2>PHP Environment</h2>
            <table class="debug-table"><tr><th>Environment Variable</th> <th>Value</th></tr><tr class="odd"><td>Php Version</td> <td>5.3.28</td></tr>
                <tr class="even"><td>Redirect Redirect Status</td> <td>200</td></tr>
                <tr class="odd"><td>Redirect Status</td> <td>200</td></tr>
                <tr class="even"><td>Http Host</td> <td>localhost:8080</td></tr>
                <tr class="odd"><td>Http Accept</td> <td>text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8</td></tr>
                <tr class="even"><td>Http Connection</td> <td>keep-alive</td></tr>
                <tr class="odd"><td>Http Cookie</td> <td>_ga=GA1.1.470288513.1417955774; _gat=1; CakeCookie[UsermgmtCookie]=Q2FrZQ%3D%3D.iT%2BKo1HgAK1FGLTXigh8jQ2tRKNjyEYPkr6XFduGY%2B0Pp%2FlZ9jIvXfsG; CAKEPHP=94a2c89cb87d33614677e582e63333fd; toolbarDisplay=hide</td></tr>
                <tr class="even"><td>Http User Agent</td> <td>Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_5) AppleWebKit/600.1.17 (KHTML, like Gecko) Version/7.1 Safari/537.85.10</td></tr>
                <tr class="odd"><td>Http Accept Language</td> <td>en-us</td></tr>
                <tr class="even"><td>Http Cache Control</td> <td>max-age=0</td></tr>
                <tr class="odd"><td>Http Accept Encoding</td> <td>gzip, deflate</td></tr>
                <tr class="even"><td>Path</td> <td>/bin:/sbin:/usr/bin:/usr/sbin:/usr/libexec:/System/Library/CoreServices</td></tr>
                <tr class="odd"><td>Server Signature</td> <td></td></tr>
                <tr class="even"><td>Server Software</td> <td>Apache</td></tr>
                <tr class="odd"><td>Server Name</td> <td>localhost</td></tr>
                <tr class="even"><td>Server Addr</td> <td>::1</td></tr>
                <tr class="odd"><td>Server Port</td> <td>8080</td></tr>
                <tr class="even"><td>Remote Addr</td> <td>::1</td></tr>
                <tr class="odd"><td>Document Root</td> <td>/Users/amerioca/Sites/acct.club-trap.com</td></tr>
                <tr class="even"><td>Server Admin</td> <td>you@example.com</td></tr>
                <tr class="odd"><td>Script Filename</td> <td>/Users/amerioca/Sites/acct.club-trap.com/webroot/index.php</td></tr>
                <tr class="even"><td>Remote Port</td> <td>58725</td></tr>
                <tr class="odd"><td>Redirect Url</td> <td>/webroot/sandboxes/newitem</td></tr>
                <tr class="even"><td>Gateway Interface</td> <td>CGI/1.1</td></tr>
                <tr class="odd"><td>Server Protocol</td> <td>HTTP/1.1</td></tr>
                <tr class="even"><td>Request Method</td> <td>GET</td></tr>
                <tr class="odd"><td>Query String</td> <td></td></tr>
                <tr class="even"><td>Request Uri</td> <td>/sandboxes/newitem</td></tr>
                <tr class="odd"><td>Script Name</td> <td>/webroot/index.php</td></tr>
                <tr class="even"><td>Php Self</td> <td>/webroot/index.php</td></tr>
                <tr class="odd"><td>Request Time</td> <td>1417961978</td></tr>
                <tr class="even"><td>Argc</td> <td>0</td></tr></table>						</div>
        <div class="panel-content-data panel-history" id="environment-history">
            <!-- content here -->
        </div>
    </div>
    <div class="panel-resize-handle ui-control">====</div>
</div>
</li>
<li class="panel-tab">
    <a href="#include">Include</a>				<div class="panel-content" id="include-tab">
    <a href="#" class="panel-toggle ui-control ui-button">+</a>
    <div class="panel-resize-region">
        <div class="panel-content-data">
            <h2> Included Files</h2>

            <h4>Include Paths</h4>
            <ul class="neat-array depth-0"><li><strong>0</strong>/Users/amerioca/Sites/lib</li><li><strong>2</strong>/Applications/MAMP/bin/php/php5.3.28/lib/php</li><li><strong>3</strong>-&gt; /Users/amerioca/Sites/lib/Cake/</li></ul>
            <h4>Included Files</h4>
            <ul class="neat-array depth-0"><li><strong>core</strong>(array)<ul class="neat-array depth-1"><li><strong>Cache</strong>(array)<ul class="neat-array depth-2"><li><strong>0</strong>CORE/Cache/Cache.php</li><li><strong>1</strong>CORE/Cache/Engine/FileEngine.php</li><li><strong>2</strong>CORE/Cache/CacheEngine.php</li></ul></li><li><strong>Component</strong>(array)<ul class="neat-array depth-2"><li><strong>0</strong>CORE/Controller/Component/CookieComponent.php</li><li><strong>1</strong>CORE/Controller/Component/SessionComponent.php</li><li><strong>2</strong>CORE/Controller/Component/RequestHandlerComponent.php</li></ul></li><li><strong>Config</strong>(array)<ul class="neat-array depth-2"><li><strong>0</strong>CORE/Config/routes.php</li><li><strong>1</strong>CORE/Config/config.php</li></ul></li><li><strong>Controller</strong>(array)<ul class="neat-array depth-2"><li><strong>0</strong>CORE/Controller/Controller.php</li><li><strong>1</strong>CORE/Controller/ComponentCollection.php</li><li><strong>2</strong>CORE/Controller/Component.php</li></ul></li><li><strong>Datasource</strong>(array)<ul class="neat-array depth-2"><li><strong>0</strong>CORE/Model/Datasource/CakeSession.php</li></ul></li><li><strong>Error</strong>(array)<ul class="neat-array depth-2"><li><strong>0</strong>CORE/Error/exceptions.php</li><li><strong>1</strong>CORE/Error/ErrorHandler.php</li></ul></li><li><strong>I18n</strong>(array)<ul class="neat-array depth-2"><li><strong>0</strong>CORE/I18n/I18n.php</li><li><strong>1</strong>CORE/I18n/L10n.php</li></ul></li><li><strong>Log</strong>(array)<ul class="neat-array depth-2"><li><strong>0</strong>CORE/Log/CakeLog.php</li><li><strong>1</strong>CORE/Log/LogEngineCollection.php</li><li><strong>2</strong>CORE/Log/Engine/FileLog.php</li><li><strong>3</strong>CORE/Log/Engine/BaseLog.php</li><li><strong>4</strong>CORE/Log/CakeLogInterface.php</li></ul></li><li><strong>Model</strong>(array)<ul class="neat-array depth-2"><li><strong>0</strong>CORE/Model/Model.php</li><li><strong>1</strong>CORE/Model/BehaviorCollection.php</li><li><strong>2</strong>CORE/Model/ConnectionManager.php</li></ul></li><li><strong>Network</strong>(array)<ul class="neat-array depth-2"><li><strong>0</strong>CORE/Network/CakeRequest.php</li><li><strong>1</strong>CORE/Network/CakeResponse.php</li></ul></li><li><strong>Other</strong>(array)<ul class="neat-array depth-2"><li><strong>0</strong>CORE/bootstrap.php</li><li><strong>1</strong>CORE/basics.php</li><li><strong>2</strong>CORE/Core/App.php</li><li><strong>3</strong>CORE/Core/Configure.php</li><li><strong>4</strong>CORE/Core/CakePlugin.php</li><li><strong>5</strong>CORE/Event/CakeEventListener.php</li><li><strong>6</strong>CORE/Event/CakeEvent.php</li><li><strong>7</strong>CORE/Event/CakeEventManager.php</li><li><strong>8</strong>CORE/Core/Object.php</li></ul></li><li><strong>Routing</strong>(array)<ul class="neat-array depth-2"><li><strong>0</strong>CORE/Routing/Dispatcher.php</li><li><strong>1</strong>CORE/Routing/Filter/AssetDispatcher.php</li><li><strong>2</strong>CORE/Routing/DispatcherFilter.php</li><li><strong>3</strong>CORE/Routing/Filter/CacheDispatcher.php</li><li><strong>4</strong>CORE/Routing/Router.php</li><li><strong>5</strong>CORE/Routing/Route/CakeRoute.php</li><li><strong>6</strong>CORE/Routing/Route/PluginShortRoute.php</li></ul></li><li><strong>Utility</strong>(array)<ul class="neat-array depth-2"><li><strong>0</strong>CORE/Utility/Hash.php</li><li><strong>1</strong>CORE/Utility/Inflector.php</li><li><strong>2</strong>CORE/Utility/ObjectCollection.php</li><li><strong>3</strong>CORE/Utility/Debugger.php</li><li><strong>4</strong>CORE/Utility/String.php</li><li><strong>5</strong>CORE/Utility/Security.php</li><li><strong>6</strong>CORE/Utility/ClassRegistry.php</li></ul></li><li><strong>View</strong>(array)<ul class="neat-array depth-2"><li><strong>0</strong>CORE/View/Helper/HtmlHelper.php</li><li><strong>1</strong>CORE/View/Helper.php</li><li><strong>2</strong>CORE/View/View.php</li><li><strong>3</strong>CORE/View/HelperCollection.php</li><li><strong>4</strong>CORE/View/ViewBlock.php</li></ul></li></ul></li><li><strong>app</strong>(array)<ul class="neat-array depth-1"><li><strong>Config</strong>(array)<ul class="neat-array depth-2"><li><strong>0</strong>APP/Config/core.php</li><li><strong>1</strong>APP/Config/bootstrap.php</li><li><strong>2</strong>APP/Config/routes.php</li><li><strong>3</strong>APP/Config/database.php</li></ul></li><li><strong>Controller</strong>(array)<ul class="neat-array depth-2"><li><strong>0</strong>APP/Controller/SandboxesController.php</li><li><strong>1</strong>APP/Controller/AppController.php</li><li><strong>2</strong>APP/Controller/AdminCreditsController.php</li><li><strong>3</strong>APP/Controller/BarcodesController.php</li><li><strong>4</strong>APP/Controller/BarcodesProductsController.php</li><li><strong>5</strong>APP/Controller/BarsController.php</li><li><strong>6</strong>APP/Controller/CategoriesController.php</li><li><strong>7</strong>APP/Controller/CreditTypesController.php</li><li><strong>8</strong>APP/Controller/CreditsController.php</li><li><strong>9</strong>APP/Controller/CustomersController.php</li><li><strong>10</strong>APP/Controller/DiscountTypesController.php</li><li><strong>11</strong>APP/Controller/DiscountsController.php</li><li><strong>12</strong>APP/Controller/DiscountsUsersController.php</li><li><strong>13</strong>APP/Controller/EntrancesController.php</li><li><strong>14</strong>APP/Controller/EventsController.php</li><li><strong>15</strong>APP/Controller/InventoriesController.php</li><li><strong>16</strong>APP/Controller/ItemsController.php</li><li><strong>17</strong>APP/Controller/LocationsController.php</li><li><strong>18</strong>APP/Controller/MapsController.php</li><li><strong>19</strong>APP/Controller/OrderGroupsController.php</li><li><strong>20</strong>APP/Controller/OrderTypesController.php</li><li><strong>21</strong>APP/Controller/OrdersController.php</li><li><strong>22</strong>APP/Controller/PagesController.php</li><li><strong>23</strong>APP/Controller/PricesController.php</li><li><strong>24</strong>APP/Controller/ProductBarcodesController.php</li><li><strong>25</strong>APP/Controller/ProductsController.php</li><li><strong>26</strong>APP/Controller/PromotersController.php</li><li><strong>27</strong>APP/Controller/TestsController.php</li></ul></li><li><strong>Model</strong>(array)<ul class="neat-array depth-2"><li><strong>0</strong>APP/Model/AppModel.php</li></ul></li><li><strong>Other</strong>(array)<ul class="neat-array depth-2"><li><strong>0</strong>APP/webroot/index.php</li></ul></li><li><strong>View</strong>(array)<ul class="neat-array depth-2"><li><strong>0</strong>APP/View/Helper/AppHelper.php</li></ul></li></ul></li><li><strong>plugins</strong>(array)<ul class="neat-array depth-1"><li><strong>DebugKit</strong>(array)<ul class="neat-array depth-2"><li><strong>Component</strong>(array)<ul class="neat-array depth-3"><li><strong>0</strong>DebugKit/Controller/Component/ToolbarComponent.php</li></ul></li><li><strong>Other</strong>(array)<ul class="neat-array depth-3"><li><strong>0</strong>DebugKit/Lib/DebugMemory.php</li><li><strong>1</strong>DebugKit/Lib/Panel/HistoryPanel.php</li><li><strong>2</strong>DebugKit/Lib/DebugPanel.php</li><li><strong>3</strong>DebugKit/Lib/Panel/SessionPanel.php</li><li><strong>4</strong>DebugKit/Lib/Panel/RequestPanel.php</li><li><strong>5</strong>DebugKit/Lib/Panel/SqlLogPanel.php</li><li><strong>6</strong>DebugKit/Lib/Panel/TimerPanel.php</li><li><strong>7</strong>DebugKit/Lib/Panel/LogPanel.php</li><li><strong>8</strong>DebugKit/Lib/Panel/VariablesPanel.php</li><li><strong>9</strong>DebugKit/Lib/Panel/EnvironmentPanel.php</li><li><strong>10</strong>DebugKit/Lib/Panel/IncludePanel.php</li><li><strong>11</strong>DebugKit/Lib/DebugTimer.php</li></ul></li><li><strong>Log</strong>(array)<ul class="neat-array depth-3"><li><strong>0</strong>DebugKit/Lib/Log/Engine/DebugKitLog.php</li></ul></li><li><strong>Controller</strong>(array)<ul class="neat-array depth-3"><li><strong>0</strong>DebugKit/Controller/DebugKitAppController.php</li><li><strong>1</strong>DebugKit/Controller/ToolbarAccessController.php</li></ul></li></ul></li><li><strong>I18n</strong>(array)<ul class="neat-array depth-2"><li><strong>Controller</strong>(array)<ul class="neat-array depth-3"><li><strong>0</strong>I18n/Controller/I18nAppController.php</li><li><strong>1</strong>I18n/Controller/TranslationsController.php</li></ul></li></ul></li><li><strong>Usermgmt</strong>(array)<ul class="neat-array depth-2"><li><strong>Config</strong>(array)<ul class="neat-array depth-3"><li><strong>0</strong>Usermgmt/Config/bootstrap.php</li><li><strong>1</strong>Usermgmt/Config/routes.php</li></ul></li><li><strong>Component</strong>(array)<ul class="neat-array depth-3"><li><strong>0</strong>Usermgmt/Controller/Component/UserAuthComponent.php</li><li><strong>1</strong>Usermgmt/Controller/Component/ControllerListComponent.php</li></ul></li><li><strong>Controller</strong>(array)<ul class="neat-array depth-3"><li><strong>0</strong>Usermgmt/Controller/UserMgmtAppController.php</li><li><strong>1</strong>Usermgmt/Controller/UserGroupPermissionsController.php</li><li><strong>2</strong>Usermgmt/Controller/UserGroupsController.php</li><li><strong>3</strong>Usermgmt/Controller/UsersController.php</li></ul></li><li><strong>Model</strong>(array)<ul class="neat-array depth-3"><li><strong>0</strong>Usermgmt/Model/UserGroup.php</li><li><strong>1</strong>Usermgmt/Model/UserMgmtAppModel.php</li></ul></li></ul></li></ul></li></ul>						</div>
        <div class="panel-content-data panel-history" id="include-history">
            <!-- content here -->
        </div>
    </div>
    <div class="panel-resize-handle ui-control">====</div>
</div>
</li>
</ul>
</div>

</body>
</html>