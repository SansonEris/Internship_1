<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/Style.css">
    <link rel="icon" href="../assets/icon/imageonline-co-transparentimage - Copy.jpg" sizes="32x32" />
    <title>French To Take Away &#8211; Learn French the way you never did</title>
    
<style>
    .white{
        color:white;
    }
</style>
</head>

<body>

<header>
    <nav class="navbar navbar-expand-lg  navbar-light nav-pos Nav_">
        <button class="navbar-toggler" type="button" onclick="openNav()">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="nav-pos">
            <div class="site-branding">
                <p class="site-title"><a class="card-link" href="../../index.php" rel="home"><span style="color:blue;">FR</span><span style="color: lightskyblue">EN</span><span style="color:black">C</span><span style="color: red">H</span> <span style="font-family: italic; color:grey;" class="card-link "><em>to take
                        away</em></span></a></p>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="../../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutme.php">About me</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Learning options
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="general-information.php" >General Information</a>
                            <a class="dropdown-item" href="private-lessons.php">Private course</a>
                            <a class="dropdown-item" href="intensive-curse.php">Intensive course</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="online-lessons.php">Online course</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="newblog.php">Blog</a>
                    </li>
                    <?php
                     if(isset($_SESSION['userId'])){
                        echo '<li class="nav-item"><a class="nav-link active" name="logout-submit" href="../settings/logout.inc.php">log-out</a></li>';
                        echo '<li class="nav-item"><p class="nav-link active" style="color:black;" >welcome back '.$_SESSION['userUid'].'!</p></li>';
                     }else {
                        echo '<li class="nav-item">
                        <a class="nav-link active" href="login.php">Log-in</a>
                        </li>';
                     }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <a class="nav-link active" href="../../index.php">Home</a>
            <a class="nav-link" href="aboutme.php">About me</a>
            <div class="dropdown">
                <input id="_1" type="checkbox">
                <label class="drop" for="_1"><a class="nav-link">Learning options<i class="fas fa-caret-down"></i></a></label>
                <div class="b-line" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="general-information.php" style="border-bottom:solid gray 1px">General Information</a>
                    <a class="dropdown-item" href="private-lessons.php" >Private course</a>
                    <a class="dropdown-item" href="intensive-curse.php" style=" border-top: solid gray 1px; border-bottom: solid gray 1px;">Intensive course</a>
                    <a class="dropdown-item" href="online-lessons.php" >Online course</a>
                </div>
            </div>
            </li>
            <a class="nav-link" href="newblog.php">Blog</a>
            <?php
                     if(isset($_SESSION['userId'])){
                        echo '<li class="nav-item"><a class="nav-link active" name="logout-submit" href="../settings/logout.inc.php">log-out</a></li>';
                        echo '<li class="nav-item"><p class="nav-link active" >welcome back '.$_SESSION['userUid'].'!</p></li>';
                     }else {
                        echo '<li class="nav-item">
                        <a class="nav-link active" href="login.php">Log-in</a>
                        </li>';
                     }
                ?>
        </div>
    </div>
</header>
    <div style="width: 100%; text-align:center;"><p>thank you 😁 </p></div>
    <?php include "default/footer.php" ?>
</body>

</html>