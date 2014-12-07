



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
</head>

<body ng-cloak>
<?php echo $this->element('header'); ?>

<div id="wrapper">

    <?php echo $this->element('sidebar'); ?>

    <?php echo $this->fetch('content'); ?>


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

</body>
</html>