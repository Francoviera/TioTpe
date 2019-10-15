<!DOCTYPE html>
<html lang="en">
<head>
    <base href='{$baseURL}'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{$titulo}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">.
    <link rel="stylesheet" href="css/estilo.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <nav class="navbar navbar-expand-md navbar-dark bg-danger">
                    <a class="navbar-brand" href="home"><h4>Dia Online</h4></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a href="home"><button class="inicio btn btn-danger" type="button">Inicio <span class="sr-only">(current)</span></button></a>
                            </li>
                            <li class="nav-item">
                                <a href="productos"><button class="producto btn btn-danger" type="button">Productos</button></a>
                            </li>
                            <li class="nav-item">
                                <a href="categorias"><button class="producto btn btn-danger" type="button">Categorias</button></a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        {if $userName}
                            <span class="navbar-text">{$userName}</span>
                            <a href="logout"><button class="producto btn btn-outline-dark" type="button">Logout</button></a>
                        {/if}
                        {if !$userName}
                            <a href="logout"><button class="producto btn btn-outline-dark" type="button">Login</button></a>
                        {/if}
                    </div>
                </nav>
            </div>    
        </div>
    </header>