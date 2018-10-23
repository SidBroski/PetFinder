<?php
session_start();
if( !isset($_SESSION["user"]) ){
	echo 'Login first';
}
else
{
echo'

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Bookstore</title>
    <!--<link href="css/style.css" rel="stylesheet" type="text/css">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    
    <style>
        .mid{
            left-margin:30px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Pet-FINDER</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sell.php">Adopt pet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="buy.php">Find/Found pet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="account.php">Manage Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="main">
        <div class="page">
            <div class="page-in">
                <div class="header">
                    <div class="topmenu">



                    </div>
                    <!--<img src="images/3.jpg" alt="Book1" width="995" height="378">-->
                </div>

                <div class="mid">
                <br><br>
                <div class="row">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="images/dog1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Oscar</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Colour - White</li>
                            <li class="list-group-item">Breed - Pamellion</li>
                            <li class="list-group-item">Collar - bluish</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="images/dog2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Boscow</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Colour - Golden</li>
                            <li class="list-group-item">Breed - Golden Retriever</li>
                            <li class="list-group-item">Collar - Black</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="images/dog3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Tommy</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Colour - Black and White(patches)</li>
                            <li class="list-group-item">Breed - Corgi</li>
                            <li class="list-group-item">Collar - Pink</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="images/dog4.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Benzo</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Colour - White</li>
                            <li class="list-group-item">Breed - Pamellion</li>
                            <li class="list-group-item">Collar - brown</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="images/dog5.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Max</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Colour - Black</li>
                            <li class="list-group-item">Breed - German Shepard</li>
                            <li class="list-group-item">Collar - Black spikes</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
                </div>
                <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-pills card-header-pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Active</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Disabled</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">&copy;Designed for HCI project</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


                </nav>



            </div>

        </div>
    </div>
</body>
</html>
';
}
?>