<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title><?= isset($meta_title) ? $meta_title : 'CodeIgniter Default Title' ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container container-fluid">
            <a class="navbar-brand" href="/">CodeIgniter 4</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog/post">Features</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">