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
    <footer class="fixed-bottom">
        <div class="bg-primary p-1"></div>

        <!-- Copyright -->
        <div class="bg-dark text-center text-white p-2">
            ©2022 shortened URL - aira
        </div>
        <!-- Copyright -->
    </footer>
    <script src="<?= base_url() ?>/assets/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>