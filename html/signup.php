<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDO Foodsphere E-Cart</title>
    <link rel="stylesheet" href="../css/userAuth.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
    <body>
        <div class="log p-5 pt-4 rounded-end-4 shadow bg-light">
            <h1 class="text-danger font-weight-bold mb-3">Be a part of the CDO Community!</h1>
            <div class="bg-light p-4 pb-3 rounded-3 shadow">
                <h3>SIGN UP</h3><br>
                <form class="form-group" action="../sql/userAuth.php" method="get">
                    <input class="form-control pt-2 pb-2 mb-2 p-1 bg-light rounded-0 border-dark border-0 border-bottom" type="text" name="UpName" placeholder="Full name (Lastname, Firstname MI)" required><br>
                    <input class="form-control pt-2 pb-2 mb-2 p-1 bg-light rounded-0 border-dark border-0 border-bottom" type="email" name="UpEmail" placeholder="Email Address" required><br>
                    <input class="form-control pt-2 pb-2 mb-2 p-1 bg-light rounded-0 border-dark border-0 border-bottom" type="password" name="UpPass" placeholder="Password" required><br>
                    <input class="form-control pt-2 pb-2 mb-2 p-1 bg-light rounded-0 border-dark border-0 border-bottom" type="password" name="UpCPass" placeholder="Confirm Password" required onchange="cpass()">
                    <small class="ps-1 ">have and account? <a href="../index.php">Log In</a>.</small><br><br><br>
                    <input class="form-control rounded-5 border-2 border-danger text-danger bg-light fs-5 button" type="submit" value="S I G N   U P" disabled>
                </form>
            </div>
        </div>
    </body>
    <script>
        function cpass() {
            var pass = document.querySelector('input[name="UpPass"]');
            var cpass = document.querySelector('input[name="UpCPass"]');
            var submitButton = document.querySelector('input[type="submit"]');

            if (cpass.value === pass.value && cpass.value !== "") {
                submitButton.disabled = false;
            } else {
                submitButton.disabled = true;
            }
        }
    </script>
</html>