<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE; ?></title>

    <?php wp_head(); ?>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link href="<?php echo CSS_URL ?>/bootstrap.css" rel="stylesheet">
<link href="<?php echo CSS_URL ?>/global-style.css" rel="stylesheet">
<link href="<?php echo CSS_URL ?>/custom.css" rel="stylesheet">

<body>
    <header class="headerWide">
        <div class="container header">
            <div class="row">
                <div class="col-xs-7 logo">
                    <a href="https://nittosupport.ca/"><img src="https://nittosupport.ca/assets/img/logo.png" alt="Logo" title="Logo" class="img-responsive"></a>
                </div>
                <div class="col-xs-5">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="example-navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="javascript:void(0)" data-content="fr" class="lang">Français</a></li>

                            </ul>
                        </div>

                    </nav>
                </div>
            </div>
        </div>
    </header>