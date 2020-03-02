<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/Style.css">
    <link rel="stylesheet" href="../style/styleLogIn.css">
    <link rel="icon" href="../assets/icon/imageonline-co-transparentimage - Copy.jpg" sizes="32x32" />
    <title>French To Take Away &#8211; Learn French the way you never did</title>
    <style>
            .red{
                color:red;
            }
    </style>
</head>

  
<body class="text-center">

    <form action="../settings/login.inc.php"  class="form-signin" method="post">
        <a href="../../index.php"><img class="mb-4" src="../assets/icon/imageonline-co-transparentimage - Copy.jpg" alt="" width="72" height="72"></a>
        
        <?php 
            if($_GET['singup'] == "success"){
                echo  '<div>
                <h1 class="h3 mb-3">REGISTRATION COMPLETED</h1>
                 <p>&#128293;&#128293;&#128293; please log-in  &#128293;&#128293;&#128293;</p>
            </div>';
            }else{
                echo '<h1 class="h3 mb-3 font-weight-normal">Please log in :)</h1>';
            }

            if(isset($_GET['error'])){
                if($_GET['error'] == "emptyfields"){
                    echo '<p class="red">fill in all the fields</p>';
                }
                else if($_GET['error'] == "wrongpwd"){
                    echo '<p class="red">wrong password!</p>';
                }
                else if($_GET['error'] == "nouser"){
                    echo '<p class="red">user not found!</p>';
                }
            }
            else if($_GET['login'] == "success"){
                echo '<p class="loginsuccess">login success</p>';
            }
            
        ?>
        <label for="inputEmail" class="sr-only">Email address - name</label>
        <input type="text" name="mailuid" class="form-control" placeholder="Email address or Name" required autofocus>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="pwd" class="form-control" placeholder="Password" required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit"  name="login-submit" >log-in</button>

        <a type="button" href="register.php" class="btn btn-lg btn-primary btn-block" style="background-color: #1abc9c;"  value="Register" >Register</a>
        <p class="mt-5 mb-3 text-muted">&copy; 2019-2020</p>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../script/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>