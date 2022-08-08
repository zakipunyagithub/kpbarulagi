<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Webpixels">
    <title>Situs Resmi Mujamu Premio</title>
    <!-- Preloader -->
    <style>
        @keyframes hidePreloader {
            0% {
                width: 100%;
                height: 100%;
            }

            100% {
                width: 0;
                height: 0;
            }
        }

       /* #bahanjamu{
            width: 150px;
            height: 150px;
        }*/

        body>div.preloader {
            position: fixed;
            background: white;
            width: 100%;
            height: 100%;
            z-index: 1071;
            opacity: 0;
            transition: opacity .5s ease;
            overflow: hidden;
            pointer-events: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        body:not(.loaded)>div.preloader {
            opacity: 1;
        }

        body:not(.loaded) {
            overflow: hidden;
        }

        body.loaded>div.preloader {
            animation: hidePreloader .5s linear .5s forwards;
        }
    </style>
    <script>
        window.addEventListener("load", function() {
            setTimeout(function() {
                document.querySelector('body').classList.add('loaded');
            }, 300);
        });
    </script>
    <!-- Favicon -->
    <link rel="icon" href="../assets/frontend/img/brand/favicon.png" type="image/png"><!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/frontend/libs/@fortawesome/fontawesome-free/css/all.min.css">
    <!-- Quick CSS -->
    <link rel="stylesheet" href="../assets/frontend/css/quick-website.css" id="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../assets/fontawesome/css/fontawesome.min.css"/>
	<link rel="stylesheet" href="../assets/fontawesome/css/brands.min.css"/>
	<link rel="stylesheet" href="../assets/fontawesome/css/solid.min.css"/>
	<link rel="stylesheet" href="../assets/css/flaticon.css"/>
	<link rel="stylesheet" href="../assets/css/slicknav.min.css"/>
	<link rel="stylesheet" href="../assets/css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="../assets/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="../assets/css/animate.css"/>
	<link rel="stylesheet" href="../assets/css/style.css"/>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
