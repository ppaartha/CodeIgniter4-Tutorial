<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h2><?= $title ?></h2>
<a href="/blog/edit/<?= $post['post_id'] ?>" class="btn btn-primary">Edit</a>
<a href="/blog/delete/<?= $post['post_id'] ?>" class="btn btn-danger">Delete</a>
<?= $this->endSection() ?>
    
