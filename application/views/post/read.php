<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Artikel Olahraga
                </div>
                <div class="card-body">
                    <form action="<?= base_url(); ?>post/read/<?= $post['id_post'] ?>" method="POST">
                        <div class="form-group">
                            <h1 style="text-align: center;" type="text" name="judul" id="judul" required><?= $post['judul'] ?></h1>
                        </div>
                        <div class="form-group">
                            <a style="font-size: 18px;" name="isi" id="isi" required><?= $post['isi'] ?></a>
                        </div>
                        <div style="text-align: right;">
                            <a href="<?= base_url() ?>post" class="btn btn-secondary mt-2" style="text-align: left;">Kembali ke News Feed</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>