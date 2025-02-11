<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão de HTML, CSS e JS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-custom">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="https://cdn0.iconfinder.com/data/icons/pokemon-go-vol-2/135/_Pokeball-512.png" width="30">
            Pokemon
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pokemon
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="#">
                        <img src="https://cdn0.iconfinder.com/data/icons/pokemon-go-vol-2/135/_pikachu-512.png" width="25px">Pikachu
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                    <img src="https://cdn1.iconfinder.com/data/icons/pokemon-set/24/Charizard-512.png" width="25px">Charizard</a></li>
                  <li><a class="dropdown-item" href="#">
                    <img src="https://cdn0.iconfinder.com/data/icons/pokemon-go-vol-1/135/_bulbasaur-512.png" width="25px">Bulbasaur</a></li>
                  <li><a class="dropdown-item" href="#">
                    <img src="https://cdn0.iconfinder.com/data/icons/pokemon-go-vol-1/135/_charmander-512.png" width="25px">Charmander</a></li>
                  <li><a class="dropdown-item" href="#">
                    <img src="https://cdn0.iconfinder.com/data/icons/pokemon-go-vol-2/135/_squirtle-512.png" width="25px">Squirtle</a></li>
                  <li><a class="dropdown-item" href="#">
                    <img src="https://cdn1.iconfinder.com/data/icons/pokemon-set/24/Clefairy-512.png" width="25px">Clefairy</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>