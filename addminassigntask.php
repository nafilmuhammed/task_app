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
    <h1 class="text-info text-center p-3">enter task to user"</h1>
    <div>
        <h2 class="text-center p-3">Enter your task</h2>
        <div class="container text-center">
            <form action="../actions/taskconnect.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <input class="form-control w-50 m-auto" type="text" name="task1">
                </div>
                <div class="mb-3">
                    <input class="form-control w-50 m-auto" type="text" name="task2">
                </div>
                <div class="mb-3">
                    <input class="form-control w-50 m-auto" type="text" name="task3">
                </div>
                <div class="mb-3">
                    <input class="form-control w-50 m-auto" type="text" name="task4">
                </div>
                
                <button type="submit" class="btn btn-dark my-4">Register</button>
            </form>
        </div>
    </div>
</body>
</html>
