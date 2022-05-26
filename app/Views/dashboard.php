<?= $this->extend('template/base'); ?>
<?= $this->section('content'); ?>

<div class="container text-center pt-5 mt-5">
    <h1 class="display-4 fw-bold"><span class="text-primary">shortened</span> URL</h1>


    <div class="row justify-content-center py-5">
        <div class="col-8">

            <div class="card shadow-sm bg-body rounded">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <h3>shortened URL</h3>
                    </div>
                    <table class="table" style="max-width: none;table-layout: fixed;word-wrap: break-word;">
                        <thead>
                            <tr>
                                <th>date created</th>
                                <th>url</th>
                                <th>slug</th>
                                <th>counter</th>
                                <th>acitve</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach (array_reverse($short) as $sh) : ?>

                                <tr>
                                    <td><?= $sh['created_at']; ?></td>
                                    <td><a href="<?= $sh['url']; ?>"><?= $sh['url']; ?></a></td>
                                    <td><a href="<?= base_url() . '/' . $sh['slug']; ?>"><?= $sh['slug']; ?></a></td>
                                    <td><?= $sh['slug']; ?></td>
                                    <td><?= $sh['counter']; ?></td>
                                    <td class="text-<?= ($sh['is_active'] == 1) ? 'success' : 'danger'; ?>"><?= ($sh['is_active'] == 1) ? 'active' : 'dead'; ?></td>
                                    <td>
                                        <form action="/dashboard/setter" method="post">
                                            <input type="hidden" name="slug" value="<?= $sh['slug']; ?>">
                                            <button type="submit" class="badge border-0 bg-<?= ($sh['is_active'] == 0) ? 'success' : 'danger'; ?>">
                                                <?= ($sh['is_active'] == 0) ? 'on' : 'off'; ?>
                                            </button>
                                        </form>
                                        <form action="/dashboard/delete" method="post">
                                            <input type="hidden" name="slug" value="<?= $sh['slug']; ?>">
                                            <button type="submit" class="badge border-0 bg-warning">delete</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>