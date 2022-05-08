<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="<?= base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title><?= $title ?></title>
</head>

<body>
    <?= $this->renderSection('content') ?>
    <script src="<?= base_url() ?>/assets/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <footer class="footer pt-auto">
        <div class="my-5 pt-4"></div>
        <div class="bg-primary p-1"></div>
        <div class="bg-dark text-center text-white p-2">
            ©<?= date('Y') ?> shortened URL - aira
            <ul class="nav justify-content-center ">
                <li class="nav-item"><a href="<?= base_url() ?>" class="nav-link px-2 text-primary">Home</a></li>
                <li class="nav-link px-2 text-white">|</li>
                <li class="nav-item"><a href="<?= base_url() . "/c" ?>" class="nav-link px-2 text-primary">Click Tracker</a></li>
                <li class="nav-link px-2 text-white">|</li>
                <li class="nav-item"><a href="<?= base_url() . "/login" ?>" class="nav-link px-2 text-primary">login</a></li>
                <!-- <li class="nav-link px-2 text-white">|</li> -->
                <!-- <li class="nav-item"><a href="" class="nav-link px-2 text-muted">registration</a></li> -->
            </ul>
        </div>
    </footer>
</body>

</html>