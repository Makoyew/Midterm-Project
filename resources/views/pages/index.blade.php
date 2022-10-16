<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPT Midterm</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

        <div class="container-fluid">
            <a class="navbar-brand" href="#">IPT Midterm</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= url('/') ?>">Home</a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="<?= url('/users') ?>">Users</a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="<?= url('/accounts') ?>">Accounts</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="col d-flex  justify-content-center">
        <div class="card mb bg-primary" style="width: 20rem; margin-top: 25px;">
            <div class="card-header text-center">
                <h4 class="text-light">Main Menu</h4>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <button class="btn btn text-dark" style="background-color: white" type="button">
                    <a class="nav-link active" aria-current="page" href="<?= url('/') ?>">Home</a>
                    </button>

                    <button class="btn btn text-dark" style="background-color: white" type="button">
                    <a class="nav-link" href="<?= url('/users') ?>">Users</a>
                    </button>

                    <button class="btn btn text-dark" style="background-color: white" type="button">
                    <a class="nav-link" href="<?= url('/accounts') ?>">Accounts</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
