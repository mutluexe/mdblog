<h2 class="display-2"><?= $title; ?></h2><br>
<ul class="list-group">
    <?php foreach($categories as $category) : ?>
    <a class="list-group-item list-group-item-action" href="<?php echo site_url('/categories/posts/'.$category['id']); ?>"><?php echo $category['name']; ?></a>
    <?php endforeach; ?>    
</ul>