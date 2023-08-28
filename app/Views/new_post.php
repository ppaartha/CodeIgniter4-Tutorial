<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h2><?= $title ?></h2>

<div class="row">
    <div class="col-12 col-md-8 offset-md-2">
        <form method="post" action="/blog/new">
            <div class="form-group">
                <label for="">Title</label>
                <input id="" class="form-control" name="post_title" type="text">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <textarea id="" class="form-control" name="post_content" rows="3"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success btn-sm">Create</button>

            </div>
        </form>

        
    </div>
</div>
<?= $this->endSection() ?>