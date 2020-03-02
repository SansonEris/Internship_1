<?php session_start(); ?>
<style>
    .white{
        color:white;
    }
</style>
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
                    <a class="dropdown-item" href="general-information.php" style="border-bottom:solid gray 1px; font-size: 1em;">General Information</a>
                    <a class="dropdown-item" href="private-lessons.php" style="font-size: 1em;">Private course</a>
                    <a class="dropdown-item" href="intensive-curse.php" style=" border-top: solid gray 1px; border-bottom: solid gray 1px;">Intensive course</a>
                    <a class="dropdown-item" href="online-lessons.php"style="font-size: 1em;" >Online course</a>
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
<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="b-img-pos slide_dim" src="../assets/images/IMG_0085.jpg" style="opacity: 0.7;" alt="">
                <div class="container">
                    <div class="carousel-caption" style="padding-bottom: 9%;">
                        <h1 class="t-carousel white" >Learn French the way you never did</h1>
                        <p><a class="btn btn-lg btn-primary" href="../src/register.php" role="button">Sign up
                                today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="b-img-pos slide_dim" src="../assets/images/student.jpg" alt="">
                <div class="container">
                    <div class="carousel-caption" style="padding-bottom: 9%;">
                        <h1 class="t-carousel white">Go visit my blog!</h1>
                        <p><a class="btn btn-lg btn-primary" href="../src/newblog.php" role="button">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="b-img-pos slide_dim" src="../assets/images/office.png" alt="">
                <div class="container">
                    <div class="carousel-caption" style="padding-bottom: 9%;">
                        <h1 class="t-carousel white">Course type</h1>
                        <p><a class="btn btn-lg btn-primary" href="../src/private-lessons.php" role="button">Learn more</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>