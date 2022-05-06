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
                    <h2 class="text-secondary">Your shortened URL</h2>
                    <p>Copy the shortened link and share it in messages, texts, posts, websites and other locations.</p>
                    <div class="col-10">
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <button class="btn btn-outline-primary" type="button">Copy</button>
                        </div>
                    </div>
                    <br>
                    <p>Long URL: <a href="https://www.shorturl.at/">https://www.shorturl.at/</a></p>
                    <p>Track <a href="">the total of clicks</a> in real-time from your shortened URL.<br>
                        Create other <a href="">shortened URL</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection('content'); ?>