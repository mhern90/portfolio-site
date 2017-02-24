<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <link rel="stylesheet" href="css/reset.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Oxygen:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <div class="name-wrap">
        <h1>Melinda Hernandez</h1>
        <h3>Front-end Web Developer</h3>
    </div>
</header>
<nav>
    <div class="container">
        <div class="row">    
            <ul class="nav-right">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
            </ul>
            <img src="images/logo.png" alt="">
            <ul class="nav-left">
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')
<script src="js/jquery-1.12.3.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>