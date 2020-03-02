<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/Style.css">
    <link rel="stylesheet" href="../style/styleRegistration.css">
    <link rel="icon" href="../assets/icon/imageonline-co-transparentimage - Copy.jpg" sizes="32x32" />
    <title>French To Take Away &#8211; Learn French the way you never did</title>
    <style>
            .red{
                color:red;
                text-align: center;
            }
    </style>

</head>

<body>
    <header>
        <div class="site-branding">
        <p class="site-title"><a class="card-link" href="../../index.php" rel="home"><span style="color:blue;">FR</span><span style="color: lightskyblue">EN</span><span style="color:black">C</span><span style="color: red">H</span> <span style="font-family: italic; color:grey;" class="card-link "><em>to take
                        away</em></span></a></p>
        </div>
    </header>
    <main>
        <div class="site-branding">
            <p class="site-title"><a id="formButton" href="#form1" class="card-link" id="Products" rel="home">REGISTER</a></p>
        </div>

        <!-- FORM SIGNUP -->

        <form id="form1"  method="post" action="../settings/singup.inc.php" >
        <?php
            if(isset($_GET['error'])){
                if($_GET['error'] == "nope".$username){
                    echo '<p class="red" >bufu</p>';
                    }
                else if($_GET['error'] == "emptyfields"){
                    echo '<p class="red">fill in all the fields</p>';
                }
                else if($_GET['error'] == "invalidmail&uid".$username){
                    echo '<p class="red">invalid name!</p>';
                }
                else if($_GET['error'] == "invalidmail&uid"){
                    echo '<p class="red">invalid name!</p>';
                }
                else if($_GET['error'] == "passwordcheck"){
                    echo '<p class="red">different password!</p>';
                }
                else if($_GET['error'] == "invaliduid&mail".$email){
                    echo '<p class="red">invalid email</p>';
                }
                else if($_GET['error'] == "invaliduid&mail"){
                    echo '<p class="red">invalid email</p>';
                }
                else if($_GET['error'] == "emptyfields&uid"){
                    echo '<p class="red">fill all the fields</p>';
                }
                else if($_GET['error'] == "passwordcheck&uid"){
                    echo '<p class="red">different password</p>';
                }
                else if($_GET['error'] == "sqlerror"){
                    echo '<p class="red">sql error</p>';
                }
                else if($_GET['error'] == "usertaken&mail".$email){
                    echo '<p class="red">user or email already taken</p>';
                }
                else if($_GET['error'] == "usertaken"){
                    echo '<p class="red">user already taken</p>';
                }
                else if($_GET['error'] == "passwordcheck&uid=".$username."&mail=".$email){
                    echo '<p class="red">different password</p>';
                }
                else if($_GET['error'] == "passwordcheck&uid"){
                    echo '<p class="red">different password</p>';
                }
                else if($_GET['error'] == "emailtaken"){
                    echo '<p class="red">sorry, the email is already registered, go to the log-in page :)</p>';
                    echo '<div class="regPos">
                    <a type="button" href="../src/login.php" class="btn btn-primary btn-lg">Log-in</a>
                </div>';
                }
                else if($_GET['error'] == "nametaken"){
                    echo '<p class="red">sorry, the name is already taken</p>';
                }
            }
            
       ?>
        <!--                                                 name                                                                      -->

            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="uid" value="<?php echo $_GET['uid'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
            </div>
            <!--                                                email                                                                      -->
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" name="mail" value="<?php echo $_GET['mail'];?>"  class="form-control"aria-describedby="emailHelp" placeholder="Email address">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <!--                                                 password                                                                      -->
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password"  name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <!--                                                 pwdconfir                                                                      -->
            <div class="form-group">
                <label for="exampleInputPassword1" >Confirm password</label>
                <input type="password" name="pwd-repeat" class="form-control" id="exampleInputPassword1" placeholder="confirm password">
            </div>
            <!--                                                 submint                                                                      -->
            <div class="regPos">
                <button type="submit" name="signup-submit" class="btn btn-primary btn-lg">Signup</button>
            </div>
        </form>
        <!-- END FORM -->
        <div class="regPos">
            <strong>or<br><br></strong>
            <a type="button" href="../src/login.php" class="btn btn-outline-primary">Log-in</a>
        </div>
    </main>
    <?php include "default/footer.php" ?>

   </body>

</html>