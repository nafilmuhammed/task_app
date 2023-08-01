<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body {
            background-image: url('https://wallpaperaccess.com/full/254381.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }
    </style>
</head>
<body>
    <h1 class="text-info text-center p-3">Welcome to loggin"</h1>
    <div>
        <h2 class="text-center p-3">Enter your details</h2>
        <div class="container text-center">
            <form action="../actions/register.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <input class="form-control w-50 m-auto" type="text" name="username"  placeholder="Enter your name" required="required">
                </div>
                <div class="mb-3">
                    <input class="form-control w-50 m-auto" type="text" name="mobile"  placeholder="Enter your number" required="required" minlength="10" maxlength="12">
                </div>
                <div class="mb-3">
                    <input class="form-control w-50 m-auto" type="text" name="password"  placeholder="Password" required="required">
                </div>
                <div class="mb-3">
                    <input class="form-control w-50 m-auto" type="text" name="cpassword"  placeholder="Confirm Password" required="required">
                </div>
                <div class="mb-3">
                    <input class="form-control w-50 m-auto" type="file" name="photo"  placeholder="No file chosen" required="required">
                </div>
                <button type="submit" class="btn btn-dark my-4">Register</button>
                <p class="text-white">Already have an account? <br><a href="../">Login</a></p>
            </form>
        </div>
    </div>
</body>
</html>
