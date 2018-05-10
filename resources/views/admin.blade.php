<!doctype html>
<html lang={{ app()->getLocale() }}>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Hatch | ('title')</title>
    <link href = {{ asset("css/app.css") }} rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">ADMIN</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Features</a>
            <a class="nav-item nav-link" href="#">Pricing</a>
            <a class="nav-item nav-link disabled" href="#">Disabled</a>
        </div>
    </div>
</nav>
    <div class="container-fluid" class="row" >
        <div class="row">
            <div class="col-lg-4" style="background-color: rgba(100, 149, 237, 0.9);" >
                <button type="button" class="btn btn-primary btn-lg btn-block">Добвить модератора</button>
                <button type="button" class="btn btn-secondary btn-lg btn-block">Добавить админа</button>
                <button type="button" class="btn btn-secondary btn-lg btn-block">Добавить тип жалоб</button>
            </div>
            <div class="col-lg-8"  >

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">username</th>
            <th scope="col">@ e_mail</th>
            <th scope="col">role</th>
            <th scope="col">Change</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td></td>
            <td></td>
            <td></td>
            <td  ><button type="button" class="btn btn-outline-primary">Delele</button></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td></td>
            <td></td>
            <td></td>
            <td><button type="button" class="btn btn-outline-primary">Delete</button></td>
        </tr>


        </tbody>
    </table>




        </tbody>
    </table>
            </div>
    </div>
    </div>
</body>
</html>