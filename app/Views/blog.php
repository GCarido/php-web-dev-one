<?= $this->extend('layouts/main') ?>

<!-- Provides the section content to render on the layout -->

<?= $this->section('content') ?>

<h1><?= $title ?></h1>

<div class="d-flex column-gap-4">
    <div>
        <!-- Add a sidebar widget -->

        <?= $this->include('widgets/sidebar') ?> 
    </div>
    <div class="row column-gap-3">
        <?php foreach ($posts as $post) : ?>
            <?= view_cell('\App\Libraries\Blog::postItem', ['title' => $post]) ?>
        <?php endforeach; ?>
    </div>
</div>


<?= $this->endSection() ?>