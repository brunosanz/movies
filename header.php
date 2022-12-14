<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/swiper-bundle.css" rel="stylesheet" />
    <link rel="icon" href="img/favicons/favicon.svg" />
    <title><?php echo SITE_NAME.' | '.SITE_DESCRIPTION; ?></title>
    <style>
      body {
        padding-top: 2rem;
        background-image: url('<?php echo BACKGROUND_IMAGE; ?>');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center center;
        background-size: cover;
      }

      ::-webkit-scrollbar {
        display: none;
      }

      .chip {
          float: right;
          position: absolute;
          top: 10px;
          right: 10px;
          display: flex;
      }

    </style>
  </head>
  <body onload="startTime()">