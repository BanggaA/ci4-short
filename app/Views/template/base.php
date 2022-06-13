<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="<?= base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title><?= $title ?></title>
</head>

<body class="d-flex flex-column min-vh-100">
    <?= $this->renderSection('content') ?>
    <div class="py-5"></div>

    <script src="<?= base_url() ?>/assets/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <footer class="mt-auto">
        <div class="bg-primary p-1"></div>
        <div class="bg-dark text-center text-white p-2">
            ©<?= date('Y') ?> shortened URL - aira
            <ul class="nav justify-content-center ">
                <li class="nav-item"><a href="<?= base_url() ?>" class="nav-link px-2 text-primary">Home</a></li>
                <li class="nav-link px-2 text-white">|</li>
                <li class="nav-item"><a href="<?= base_url() . "/c" ?>" class="nav-link px-2 text-primary">Click Tracker</a></li>
                <li class="nav-link px-2 text-white">|</li>
                <?php if (!session()->get('logged_in')) : ?>
                    <li class="nav-item"><a href="<?= base_url() . "/register" ?>" class="nav-link px-2">registration</a></li>
                    <li class="nav-link px-2 text-white">|</li>
                    <li class="nav-item"><a href="<?= base_url() . "/login" ?>" class="nav-link px-2 text-primary">Login</a></li>
                <?php else : ?>
                    <li class="nav-item"><a href="<?= base_url() . "/dashboard" ?>" class="nav-link px-2 text-primary">Dashboard</a></li>
                    <li class="nav-link px-2 text-white">|</li>
                    <li class="nav-item"><a href="<?= base_url() . "/logout" ?>" class="nav-link px-2 text-primary">Logout</a></li>
                <?php endif ?>
            </ul>
        </div>
    </footer>
</body>

</html>