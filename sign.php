<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rite Link</title>
    <?php include "./bootstrap.php" ?>
    <link rel="shortcut icon" href="https://i.postimg.cc/pLkfjtHT/RL.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php include "./navbar.php" ?>






    <div class="container m-5 p-5 center d-flex justify-content-center ">
        <form class="former shadow center" action="./getuser.php" method="POST">
            <p class="form-titlee">Sign in to your account</p>
            <div class="input-containerer">
                <input type="email" name="email" class="form-control" placeholder="Enter email">
                <span>
                </span>
            </div>
            <div class="input-containerer">
                <input type="password" class="form-control" name="password" placeholder="Enter password">
            </div>
            <button type="submit" class="submiter">
                Sign in
            </button>

            <p class="signup-linker my-2">
                No account?









                <a href="./signup.php" class="text-primary pointer" style="cursor:pointer;">
                    Sign up
                </a>
            

















            </p>
        </form>

    </div>









    <?php include "./contact.php" ?>
    <?php include "./footer.php" ?>



    <?php include "./libraries.php" ?>
</body>

</html>