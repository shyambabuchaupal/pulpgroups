<?php
include "config.php";
$page = basename($_SERVER['PHP_SELF'],'.php');
?>

<!doctype html>
<html lang="en" style="
    overflow-x: hidden;
">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PulpGroup</title>
    <link rel="icon" type="image/x-icon" href="images/tabicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- font family  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <!-- font family  -->
    <!-- aos animation  -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- icon  -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- style include  -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg  bg-white fixed-top shadow-sm1">
        <div class="container">
            <a class="navbar-brand logo_img" href="index.php">
                <img src="images/pulpg.png" alt="logo">
              
            </a>
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link 
                        <?php
                            if($page=="index"){
                                echo "active1";
                            }
                            else{
                                echo "";
                            }
                        ?>
                        " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link 
                        <?php
                        if($page == "about"){
                            echo "active1";
                        }else{
                            echo "";
                        }
                        ?>
                        " href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link
                        <?php
                        if($page == "contact"){
                            echo "active1";
                        }else{
                            echo "";
                        }
                        ?>
                        " href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link 
                        <?php
                        if($page == "product"){
                            echo "active1";
                        }else{
                            echo "";
                        }
                        ?>
                        " href="product.php">Images</a>
                    </li>


                </ul>

            </div>
        </div>


    </nav>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel"></h5>
            <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-block d-md-none">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.php">Images</a>
                </li>


            </ul>
        </div>
    </div>