<?php
/**
 * Created by PhpStorm.
 * User: fearless-hasan
 * email: hasan.bubt.40@gmail.com
 * Date: 1/14/2018
 * Time: 2:32 AM
 */
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if($_SESSION['id'] == null){
        header('Location: index.php');
    }
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top: 150px;">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-title m-auto" style="padding-top: 30px;">
                    <p> <b><i>Admin Panel</i></b></p>

                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group row">
                            <label for="user" class="col-sm-3 col-form-label">User</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="user" name="user" placeholder="User Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 m-auto">
                                <button type="submit" class="btn btn-outline-primary btn-block" name="btn">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
