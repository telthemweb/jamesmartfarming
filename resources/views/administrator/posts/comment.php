<?php require __DIR__ . '../../../layouts/widgetcss.php' ?>
<div class="container-fluid px-xl-5 mt-lg-5 mb-lg-5">
    <div class="card mb-3">
        <div class="card-header">
            <h2 class="card-title"><?php echo $post->title; ?></h2>
            <p class="card-text"><small class="text-muted">Posted on <?php echo date('d-M-Y', strtotime($post->created_at)); ?> by <?php echo $post->user->username; ?></small></p>
        </div>
        <div class="card-body">
            <p class="card-text"><?php echo $post->body; ?></p>
        </div>
    </div>

    <h2 class="mb-4 bg-success p-2 text-white">Comments</h2>

    <div class="role mb-4">
        <?php foreach($comments as $com): ?>
            <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $com->user->username; ?></h5>
                    <p class="card-text"><?php echo $com->comment; ?></p>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
</div>







</div>

<?php require __DIR__ . '../../../layouts/widgetjs.php' ?>