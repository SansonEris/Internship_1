<?php session_start(); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style/Style.css">
    <link rel="stylesheet" href="../../style/lessons.css">
    <link rel="icon" href="../../assets/icon/imageonline-co-transparentimage - Copy.jpg" sizes="32x32" />
    <title>French To Take Away &#8211; Learn French the way you never did</title>
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg  navbar-light nav-pos Nav_">
        <button class="navbar-toggler" type="button" onclick="openNav()">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="nav-pos">
            <div class="site-branding">
                <p class="site-title"><a class="card-link" href="../../../index.php" rel="home"><span style="color:blue;">FR</span><span style="color: lightskyblue">EN</span><span style="color:black">C</span><span style="color: red">H</span> <span style="font-family: italic; color:grey;" class="card-link "><em>to take
                        away</em></span></a></p>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="../../../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../aboutme.php">About me</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Learning options
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../general-information.php" >General Information</a>
                            <a class="dropdown-item" href="../private-lessons.php">Private course</a>
                            <a class="dropdown-item" href="../intensive-curse.php">Intensive course</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../online-lessons.php">Online course</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../newblog.php">Blog</a>
                    </li>
                    <?php
                    if(isset($_SESSION['userId'])){
                        echo '<li class="nav-item">
                        <a class="nav-link active" name="logout-submit" href="../../settings/logout.inc.php">log-out</a>
                        </li>';
                        echo '<li class="nav-item"><p class="nav-link active" >welcome back '.$_SESSION['userUid'].'!</p></li>';
                     }else {
                        echo '<li class="nav-item">
                        <a class="nav-link active" href="../login.php">Log-in</a>
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
            <a class="nav-link active" href="../../../index.php">Home</a>
            <a class="nav-link" href="../aboutme.php">About me</a>
            <div class="dropdown">
                <input id="_1" type="checkbox">
                <label class="drop" for="_1"><a class="nav-link">Learning options <i class="fas fa-caret-down"></i></a></label>
                <div class="b-line" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../general-information.php" style="border-bottom:solid gray 1px;font-size: 1em;" >General Information</a>
                    <a class="" href="../private-lessons.php" style="font-size: 1em;" >Private course</a>
                    <a class="" href="../intensive-curse.php" style=" border-top: solid gray 1px; border-bottom: solid gray 1px;font-size: 1em;">Intensive course</a>
                    <a class="" href="../online-lessons.php" style="font-size: 1em;">Online course</a>
                </div>
            </div>
            </li>
            <a class="nav-link" href="../newblog.php">Blog</a>
            <?php
                    if(isset($_SESSION['userId'])){
                        echo '<li class="nav-item">
                        <a class="nav-link active" name="logout-submit" href="../../settings/logout.inc.php">log-out</a>
                        </li>';
                        echo '<li class="nav-item"><p class="nav-link active" >welcome back '.$_SESSION['userUid'].'!</p></li>';
                     }else {
                        echo '<li class="nav-item">
                        <a class="nav-link active" href="../login.php">Log-in</a>
                        </li>';
                     }
                    ?>
        </div>
    </div>
</header>

<?php
    if(isset($_SESSION['userId'])){
        echo '<form action="onlineCurse.php" method="post">
        <h1 class="site-branding" style="margin-bottom:5%; font-weight: bold;" id="sf">Online courses</h1>
        <div style="background-image:url(../../assets/images/person-984236_1280.png);background-repeat:no-repeat; background-size:cover;">
        <div class="container">
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">first module</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">£20</h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>desciption</li>
                        </ul>
                        <a type="button" class="btn btn-lg btn-block btn-primary" href="checkout.php">download</a>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">second module</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">£20</h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>description</li>
                        </ul>
                        <a type="button" class="btn btn-lg btn-block btn-primary" href="checkout.php">download</a>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">third module</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">£20</h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>description</li>
                        </ul>
                        <a type="button" class="btn btn-lg btn-block btn-primary" href="checkout.php">download</a>
                    </div>
                </div>
            </div>
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">fourth module</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">£20</h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>desciption</li>
                        </ul>
                        <a type="button" class="btn btn-lg btn-block btn-primary" href="checkout.php">download</a>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">fifth module</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">£20</h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>description</li>
                        </ul>
                        <a type="button" class="btn btn-lg btn-block btn-primary" href="checkout.php">download</a>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">sixth module</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">£20</h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>description</li>
                        </ul>
                        <a type="button" class="btn btn-lg btn-block btn-primary" href="checkout.php">download</a>
                    </div>
                </div>
            </div>
            </div>
</form>
';
    } else{
        echo '<div style="margin-right:auto;margin-left:auto;text-align:center;">This page is only aviabale after the log-in :)<br>please go to the log-in page<br><a href="../login.php" type="button" class="btn btn-primary">Log-in</a></div>';
    }
?>
   

<footer class="container py-5 text-size" id="contacts">
    <div class="row">
        <div class="col-12 col-md">
            <img src="../../assets/icon/imageonline-co-transparentimage - Copy.jpg" height="50px" width="60px">
            <small class="d-block mb-3 text-muted">&copy; 2019-2020</small>
        </div>
        <div class="col-6 col-md">
            <h7>THE COMPANY</h7>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="../../../index.php">About Franch to takeaway</a></li> 
            </ul>
        </div>
        <div class="col-6 col-md">
            <h7>LANGUAGE</h7>
            <ul class="list-unstyled text-small">
            <li><div id="translate"></div></li>    
            </ul>
        </div>
        <div class="col-6 col-md">
            <h7>FIND ME ON</h7>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="https://www.facebook.com/frenchtotakeaway/?modal=admin_todo_tour">Facebook </a></li>
                <li><a class="text-muted" href="mailto: marina.bombal.pro@gmail.com">E-mail </a></li>
                <li>
                    <a onclick="copyToClipboard('#p1')" class="text-muted" href="#p1">
                        <p id="p1">+44 (0) 756 8721 820 </p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h7>ABOUT</h7>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="https://www.google.com/maps/place/Edinburgh/@55.9411885,-3.2753778,12z/data=!3m1!4b1!4m5!3m4!1s0x4887b800a5982623:0x64f2147b7ce71727!8m2!3d55.953252!4d-3.188267">Locations</a>
                </li>
                <li><a class="text-muted" href="Privacy.php">Privacy</a></li>
                <li><a class="text-muted" href="Terms.php">Terms</a></li>
            </ul>
        </div>
    </div>
</footer>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="../../script/main.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
   </body>

</html>