<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body {
            background-color: #C2CAD0;
        }

        .active {
            border-bottom: 3px solid #000;
        }
    </style>

</head>
    <body>
        <div class="container">
            <header>
                <nav class="navbar navbar-expand-lg navbar-light mt-4">
                    <div class="container-fluid">
                        <h1 class="display-5 fw-bold">Arjak</h1>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
    
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="/" class="nav-link {{ Request::is('home') ? 'active' : '' }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/about" class="nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/category" class="nav-link {{ Request::is('category') ? 'active' : '' }}">Category</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a href="/login" class="nav-link {{ Request::is('login') ? 'active' : '' }}">Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>


        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
    </body>
</html>