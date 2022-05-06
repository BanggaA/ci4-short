<?= $this->extend('template/base'); ?>
<?= $this->section('content'); ?>
<div class="container text-center pt-5 mt-5">
    <h1 class="display-4 fw-bold"><span class="text-primary">shortened</span> URL</h1>
</div>
<div class="container ">

    <div class="row justify-content-center pt-5">
        <div class="col-8">
            <div class="card shadow-sm bg-body rounded">
                <div class="card-body">
                    <h2 class="text-secondary">Total URL Clicks</h2>
                    <p>The total number of clicks that your link has received so far.</p>
                    <h1 class="display-4">0</h1>
                    <p>Long URL: <a href="https://www.shorturl.at/">https://www.shorturl.at/</a></p>
                    <p>Our tool will count each click as one hit to the long URL, even if there are multiple clicks from the same person or device.
                        Check <a href="">the total number of clicks</a> from other URL.
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection('content'); ?>