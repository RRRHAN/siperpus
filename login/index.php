<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="http://localhost/siperpus/aset/bootstrap/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lOGIN</title>
    <style>
        .container {
            width: 800px;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <div class="container mx-auto">
        <form action="proses-login.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" autocomplete="off">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <button type="submit" class="btn btn-primary" name="btnlogin">Submit</button>
        </form>
    </div>
</body>

</html>