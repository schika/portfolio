<div class="container">
    <?php foreach ($data as $key => $value): ?>
        <div class="col-sm-8 col-md-4">
            <h2><?=$value['title']?></h2>
            <p><?=$value['desc']?></p>
            <a href="<?=$value['site']?>"><?=$value['site']?></a>
        </div>
    <?php endforeach; ?>
</div>