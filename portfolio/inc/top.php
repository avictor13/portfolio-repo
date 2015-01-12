<?php
/**
 * top.php
 *
 * Author: pixelcave
 *
 * The first block of code used in every page of the template
 * Start of html, <head> tag, as well as the header of the page are included here
 *
 */
?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title><?php echo $pageTitle; ?></title>
        <meta name="description" content="<?php echo $pageDescription; ?>">
        <meta name="keywords" content="<?php echo $pageKeywords; ?>">
        <meta name="author" content="<?php echo $pageAuthor; ?>">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
        <meta name="google-translate-customization" content="702f7c6c5b766ee3-9c4511f9ddba39c3-gb0b1df36ff1ef1e9-18"></meta>
        <meta property="og:locale" content="en_US">
        <meta property="og:title" content="<?php echo $pageOGtitle; ?>">
        <meta property="og:site_name" content="<?php echo $pageOGsite_name; ?>">
        <meta property="og:description" content="<?php echo $pageOGdescription; ?>">
        <meta property="og:image" content="http://www.amvwebsolutions.com/img/avatar.jpg">
        <meta property="og:image:type" content="image/jpeg">
        <meta property="og:url" content="http://www.amvwebsolutions.com/">
        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/plugins.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/themes.css">
        <script src="js/vendor/modernizr-2.7.1-respond-1.4.2.min.js"></script>
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f1b48400511db7a" async="async"></script>
    </head>
    <?php
    $body_classes = '';

    if ($template['header'] == 'fixed-top') {
        $body_classes = 'header-fixed-top';
    } else if ($template['header'] == 'fixed-bottom') {
        $body_classes = 'header-fixed-bottom';
    }

    if ($template['side_content']) {
        $body_classes .= ' ' . $template['side_content'];
    }
    ?>
    <body>
        <header class="navbar header-fixed-top">
            <div class="row">
                <div class="col-xs-12 col-lg-12 text-center">
                    <div class="block-title themed-background-city">        
                        <h1 class="">Adam M. Victor<br/>
                            <small>Application Designer
                                & Web Developer</small></h1>
                    </div>
                </div>
            </div>
        </header>
        
            
