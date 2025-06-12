<?php
require_once "core/autoload.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 CSS CDN -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <!-- Optional theme -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->
    <title>Blog Project</title>


</head>

<body>
    <!-- start Nav -->
    <nav class="navbar navbar-expand-lg">
        <a href="" class="navbar-brand text-warning">Blooging!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="#" class="nav-link">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Articles</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User</a>
                    <div class="dropdown-menu" arial-labelledby="navbarDropdown">
                        <a href="#" class="dropdown-item">Login</a>
                        <a href="#" class="dropdown-item">Register</a>
                        <a href="#" class="dropdown-item">Welcome User</a>
                    </div>
                </li>
                <li class="nav-item ml-5">
                    <a href="#" class="nav-link btn btn-sm btn-warning">
                        <i class="fas fa-plus">Create Article</i>
                    </a>
                </li>

            </ul>
            <form action="" class="form-inline my-2 my-lg-0">
                <input type="search" class="form-control mr-sm-2" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- start Header -->
    <div class="jumbotron jumbotron-fluid header">
        <div class="container">
            <hi class="text-white">Welcome to our Blog</hi>
            <hi class="display-4 text-white">Welcome to our Blog</hi>
            <p class="lead text-white"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, dolores!</p>
            <br>
            <a href="" class="btn btn-warning">Create Account</a>
            <a href="" class="btn btn-outline-success">Login</a>
        </div>
    </div>

    <!-- content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 pr-3 pl-3">
                <!-- category list -->
                <div class="card card-dark">
                    <div class="card-header">
                        <h4>All Category</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">Cras kistp odio <span class="badge badge-primary badge-pill bg-primary">14</span">
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">Cras kistp odio <span class="badge badge-primary badge-pill bg-primary">2</span">
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">Cras kistp odio <span class="badge badge-primary badge-pill bg-primary">1</span">
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <!-- language list -->
                <div class="card card-dark">
                    <div class="card-header">
                        <h4>All language</h4>
                    </div>

                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-info">Cras kistp odio <span class="badge badge-primary badge-pill bg-secondary">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-info">Dapibus ac facilisis in<span class="badge badge-primary badge-pill bg-secondary">2</span></li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-info">Morbi leo risus<span class="badge badge-primary badge-pill bg-secondary">1</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8 pr-3 pl-3">