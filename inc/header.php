<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Index</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo SERVERPATH; ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo SERVERPATH; ?>/css/bootstrap-theme.min.css">
        <!-- Font awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

        
        <link rel="stylesheet" href="<?php echo SERVERPATH; ?>/css/style.css">

    </head>
    <body>
        <div id="wrapper" class="container-fluid">
            <?php 
                include_once ROOTPATH.'/inc/topbars.php';
            ?>
            <div id="mini_wrapper" class="container">

                <?php include_once ROOTPATH.'/inc/sidebar.php'; ?> 

                <div id="content">
