<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h2><?= $title ?></h2>

<div class="row">
    <div class="col-12 col-md-8 offset-md-2">
        <form method="post" action="/blog/edit/<?= $post['post_id'] ?>">
            <div class="form-group">
                <label for="">Title</label>
                <input id="" class="form-control" name="post_title" type="text" value="<?= $post['post_title'] ?>">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <textarea id="" class="form-control" name="post_content" rows="3"><?= $post['post_content'] ?></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success btn-sm">Create</button>

            </div>
        </form>

        
    </div>
</div>
<?= $this->endSection() ?>