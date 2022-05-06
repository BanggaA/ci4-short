<?= $this->extend('template/base'); ?>
<?= $this->section('content'); ?>
<div class="container text-center pt-5 mt-5">
    <h1 class="display-4 fw-bold"><span class="text-primary">shortened</span> URL</h1>
</div>
<div class="container">

    <div class="row justify-content-center pt-5">
        <div class="col-8">
            <div class="card shadow-sm bg-body rounded">
                <div class="card-body">
                    <h2 class="text-secondary">URL Click Counter</h2>
                    <p>Enter the URL to find out how many clicks it has received so far.</p>
                    <div class="col-10">
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <button class="btn btn-outline-primary" type="button">Track clicks</button>
                        </div>
                    </div>
                    <br>
                    <p>Example: <?= substr(base_url(), 7) ?>/AbCdE</p>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection('content'); ?>