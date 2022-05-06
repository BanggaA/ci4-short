<?= $this->extend('template/base'); ?>
<?= $this->section('content'); ?>
<div class="container text-center pt-5 mt-5">
    <h1 class="display-4 fw-bold"><span class="text-primary">shortened</span> URL</h1>

    <div class="row justify-content-center pt-5">
        <div class="col-8">
            <div class="card shadow-sm bg-body rounded">
                <div class="card-body">
                    <h3>Paste the URL to be shortened</h3>
                    <form class="row justify-content-center py-3">
                        <div class="col-10">
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <button class="btn btn-outline-primary" type="button">Short</button>
                            </div>
                        </div>
                    </form>
                    <p>shortenedURL is a free tool to shorten a URL or reduce a link<br>Use our URL Shortener to create a shortened link making it easy to remember</p>
                </div>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection('content'); ?>