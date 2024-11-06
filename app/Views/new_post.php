<?= $this->extend('layouts/main') ?>

<!-- Provides the section content to render on the layout -->

<?= $this->section('content') ?>

<h1><?= $title ?></h1>

<div class="row">
    <div class="col-12 col-md-8 offset-md-2">
        <form action="/blog/new" method="POST">
            <div class="form-group">
                <label for="my-title">Title</label>
                <input type="text" name="post_title" class="form-control">
            </div>
            <div class="form-group pb-3">
                <div class="form-group">
                    <label for="">Content</label>
                    <textarea name="post_content" id="" class="form-control" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-success btn-sm">Create</button>
            </div>
        </form>
    </div>
</div>


<?= $this->endSection() ?>