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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav justify-content-end">

                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?= url('/') ?>">Home</a>
                </li>

                <li class="nav-item">
                <a class="nav-link active" href="<?= url('/users') ?>">Users</a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="<?= url('/accounts') ?>">Accounts</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h1>Users</h1>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr class="bg-primary text-dark">
                            <th>User ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $u): ?>
                            <tr>

                                <td><?= $u->id ?></td>
                                <td><?= $u->lname ?></td>
                                <td><?= $u->fname ?></td>
                                <td><?= $u->address ?></td>
                                <td><?= $u->phone ?></td>
                                <td><?= $u->email ?></td>
                                <td><?= $u->password ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
