<?= $this->extend('template/base'); ?>
<?= $this->section('content'); ?>

<div class="container text-center pt-5 mt-5">
    <h1 class="display-4 fw-bold"><span class="text-primary">shortened</span> URL</h1>
</div>
<div class="container">

    <div class="row justify-content-center pt-5">
        <div class="col-4">
            <div class="card shadow-sm bg-body rounded">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <h3>register</h3>
                    </div>
                    <?php if (isset($validation)) : ?>
                        <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                    <?php endif; ?>
                    <form action="/register" method="post">
                        <input type="text" name="name" placeholder="name" class="form-control form-control-sm mb-3" value="<?= set_value('name') ?>">
                        <input type="password" name="password" placeholder="password" class="form-control form-control-sm mb-3">
                        <input type="password" name="confpassword" placeholder="confirm password" class="form-control form-control-sm mb-3">
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>