<?PHP
session_abort();
session_unset();
?>
<html>
    <head>
        <title>CDO Foodsphere E-Cart</title>
        <link rel="stylesheet" href="css/Auth.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="parent row m-0">
            <div class="box col-lg-5 p-5">
                <h1 class="text-danger font-weight-bold mb-3">Be a part of the CDO Community!</h1>
                <div class="bg-light p-4 pb-5 rounded-3 shadow">
                    <h3>LOG IN</h3><br>
                    <form class="form-group" action="sql/userAuth.php" method="get">
                        <input class="form-control pt-2 pb-2 mb-2 p-1 bg-light rounded-0 border-dark border-0 border-bottom" type="email" name="InEmail" placeholder="Email Address" required><br>
                        <input class="form-control pt-2 pb-2 mb-2 p-1 bg-light rounded-0 border-dark border-0 border-bottom" type="password" name="InPass" placeholder="Password" required>
                        <small class="ps-1 ">New to CDO Foodsphere E-Cart? <a href="html/signup.php">Sign Up</a>.</small><br><br><br>
                        <input class="form-control rounded-5 border-2 border-danger text-danger bg-light fs-5" type="submit" name="login" value="L O G   I N">
                    </form>
                </div>
            </div>
            <div class="pic col-lg-7 p-0">
                <div class="bg-dark bg-opacity-50 m-0" style="height: 100%; width: 100%;"></div>
            </div>
        </div>
        <script>
            <?PHP
            if(isset($_GET["Invalid"])){
                echo "setTimeout(Hello,250);function Hello(){alert('Invalid Credentials or account does not exist.');}";
            }
            ?>
        </script>
    </body>
</html>