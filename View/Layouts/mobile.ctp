<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	<title>
    CakePHP: the rapid development php framework:
    Orders	</title>
    <link href="/favicon.ico" type="image/x-icon" rel="icon" /><link href="/favicon.ico" type="image/x-icon" rel="shortcut icon" /><link rel="stylesheet" type="text/css" href="/css/cake.generic.css" />
    <link rel="stylesheet" type="text/css" href="/css/cake.generic.css" />
    <link rel="stylesheet" type="text/css" href="/js/jquery.mobile/demos/css/themes/default/jquery.mobile-1.4.3.min.css" />

    <style id="inset-tablist">
        .tablist-left {
            width: 25%;
            display: inline-block;
        }
        .tablist-content {
            width: 60%;
            display: inline-block;
            vertical-align: top;
            margin-left: 5%;
        }
    </style>
</head>

<body>
<div id="container">
    <div id="header">
        <h1></h1>
    </div>
    <div id="content">

        <?php echo $this->Session->flash(); ?>

        <?php echo $this->fetch('content'); ?>
    </div>
    <div id="footer">
        <p>
        </p>
    </div>
</div>
<?php echo $this->element('sql_dump'); ?>
</body>
</html>