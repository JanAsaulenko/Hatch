<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>1 Col Portfolio - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/1-col-portfolio.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Сторінка редагування</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <!-- Page Heading
    <h1 class="my-4">Page Heading
        <small>Secondary Text</small>
    </h1>
-->
    <!-- Project One -->
    <form>
        <div class="row">
            <div class="col-md-5">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/500x300" alt="">
                </a>
            </div>
                <div class="col-md-7"><h2></h2>
                    <h3><input type="text" name="Adressa" value="Адреса"></h3>
                    <textarea rows="7" cols="85" id="content" name="content"> "КОМЕНТАРІЙ Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus! Velit, esse totam tempore."></textarea>
                    <p><input type="checkbox" name="Done" value="['Done']"> Одобрено</p>
                </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-1">Скарга
                <p>№1</p>
            </div>
            <div class="col-md-1">Скаржник
                <p>№1</p>
            </div>
            <div class="col-md-1">Модер
                <p>№1</p>
            </div>
            <div class="col-md-2">Дата скарги
                <p><input type="date" name="created" value="2012-06-01"></p>
            </div>
            <div class="col-md-4">Стан виконання
                <p><input name="stat" type="radio" value="new" checked> У черзі
                <input name="stat" type="radio" value="У роботі">У роботі
                <input name="stat" type="radio" value="Виконане"> Виконане</p>
            </div>
            <div class="col-md-2">
                <input class="btn btn-primary" type="submit" name="send" value="Зберегти">
            </div>

        </div>
    </form>


    <hr>
    <!-- Pagination -->
    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
