<?php

/**
 * ----------------------------------------------------------------
 * Zonal Marketing Technologies
 * ----------------------------------------------------------------
 * Default Widget Fallback View
 * ----------------------------------------------------------------
 * @requires        - $title
 *                  - $view
 */

?>

<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
<head>
    <title><?php echo $title; ?></title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <meta name="author" content="Zonal Marketing Technologies">
    <meta name="description" content="Zonal giftcard and loyalty widget">
    <meta name="keywords" content="zonal, marketing, technologies, loyalty, giftcard, gift, card, registration, topup">

    <meta name="theme-color" content="#ffffff">

    <link rel="icon" type="image/png" sizes="16x16" href="zonal/zonal-icon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="zonal/zonal-icon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="zonal/zonal-icon-96x96.png">
    <link rel="icon" type="image/png" sizes="192x192" href="zonal/zonal-icon-192x192.png">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="zonal/site.css">

</head>
<body>
    <div id="wrapper">
    <?php
    
    // Load in the view
    include "components/" . $view . ".php";

    ?>
    </div>
</body>
</html>