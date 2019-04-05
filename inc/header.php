<!doctype html>
<html lang="en">

<head>
    <title>Peter Horatio Art</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Art Gallery, organic surrealism, Peter Horatio Hollenback">
    <meta name="keywords" content="art gallery, Peter Horatio,  organic art, surrealism">
    <meta name="author" content="Peter Horatio Hollenback, Russell Davis, Han Long">
    <!--Font-awesome-->
    <script src="https://use.fontawesome.com/b227d5be57.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <!--MY CSS-->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/modal.css">
</head>

<body class="mt-4">
    <!--navbar-->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
        <div class="container">
            <a href="index.php" class="navbar-brand">Peter Horatio Hollenback</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"><span class ="navbar-toggler-icon"></span>
		   </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto lit">
                    <li class="nav-item<?php if ($section == 'paint') { echo ' active'; } ?>">
                        <a href="gallery.php?gal=paint" class="on nav-link">Paintings</a>
                    </li>
                    <li class="nav-item<?php if ($section == 'lPaint') { echo ' active'; } ?>">
                        <a href="gallery.php?gal=lPaint" class="nav-link">Light paintings</a>
                    </li>
                    <li class="nav-item<?php if ($section == 'lbPaint') { echo ' active'; } ?>">
                        <a href="gallery.php?gal=lbPaint" class="nav-link">Light box paintings</a>
                    </li>
                    <li class="nav-item<?php if ($section == 'photo') { echo ' active'; } ?>">
                        <a href="gallery.php?gal=photo" class="nav-link">Photographs</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
