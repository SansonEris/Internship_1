<?php session_start(); ?>

<DOCTYPE! HTML>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../../style/styleCheckout.css">
        <link rel="icon" href="../../assets/icon/imageonline-co-transparentimage - Copy.jpg" sizes="32x32" />
        <link rel="stylesheet" href="../../style/Style.css">
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
                        <a class="nav-link" href="aboutme.php">About me</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Learning options
                        </a>
                        <div class="dropdown-menu" aria-labelledby="../navbarDropdown">
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
                    <a class="nav-link active" name="logout-submit" href="../settings/logout.inc.php">log-out</a>
                    </li>';
                    echo '<li class="nav-item"><p class="nav-link active" >welcome back '.$_SESSION['userUid'].'!</p></li>';
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
            <a class="nav-link active" href="../../../index.php">Home</a>
            <a class="nav-link" href="../aboutme.php">About me</a>
            <div class="dropdown">
                <input id="_1" type="checkbox">
                <label class="drop" for="_1"><a class="nav-link">Learning options <i class="fas fa-caret-down"></i></a></label>
                <div class="b-line" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../general-information.php"style="border-bottom:solid gray 1px;font-size: 1em;" >General Information</a>
                    <a class="dropdown-item" href="../private-lessons.php" style="font-size: 1em;">Private course</a>
                    <a class="dropdown-item" href="../intensive-curse.php" style=" border-top: solid gray 1px; border-bottom: solid gray 1px;font-size: 1em;">Intensive course</a>
                    <a class="dropdown-item" href="../online-lessons.php" style="font-size: 1em;">Online course</a>
                </div>
            </div>
            </li>
            <a class="nav-link" href="../newblog.php">Blog</a>
            <?php
                   if(isset($_SESSION['userId'])){
                    echo '<li class="nav-item">
                    <a class="nav-link active" name="logout-submit" href="../settings/logout.inc.php">log-out</a>
                    </li>';
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


        <main>
            <div class="container">
                <div class="centro">
                <?php echo "<h1>PRODUCT NAME</h1><br><br>"; ?>
                <?php echo "<h3>PREVIEW</h3>"; ?> 
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
                        <input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                </form>

            </div>
    </main>




    <footer class="container py-5 text-size" id="contacts" style="position:absolute; bottom:0; left:0; right:0; margin-left:auto; margin-right:auto;">
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