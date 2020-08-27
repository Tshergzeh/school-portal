<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card my-5">
                    <form action="logprocess.php" method="post">
                        <div class="card-header">Admin Login</div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" name="username" id="username" placeholder="Your Username" required class="form-control"/>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" placeholder="Your Password" required class="form-control"/>
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" value="Login" name="login" class="btn btn-primary mx-auto d-block">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>