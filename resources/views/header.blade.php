<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Melinda Hernandez | @php echo $pageTitle @endphp</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <link rel="stylesheet" href="css/reset.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Oxygen:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav>
    <div class="container">
        <div class="row">    
            <ul class="nav-right">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
            </ul>
            <img src="images/logo.png" alt="">
            <ul class="nav-left">
                <li><a href="/portfolio">Portfolio</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')
@include('footer')
<script src="js/jquery-1.12.3.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>