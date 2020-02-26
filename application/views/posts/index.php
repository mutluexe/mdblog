<h2 class="display-2"><?= $title ?></h2><br>
<?php foreach($posts as $post) : ?>
<div class="card border-primary mb-3">
    <h3 class="card-header"><?php echo $post['title'];?></h3><br>
    <div class="row">
        <div class="col-md-3">
            <img style="width: 100%; display: block;" src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image'];?>" alt="Post Image">
        </div>
        <div class="col-md-9">
            <h6 class="card-subtitle text-muted">Posted on: <?php echo $post['created_at']; ?> in <strong><?php echo $post['name'];?></strong></h6>
            <div class="card-body">
                <?php echo word_limiter($post['body'], 60); ?>
            </div>
            <br>
            <p><a class="btn btn-primary btn-lg" href="<?php echo site_url('/posts/'.$post['slug']);?>">Read More</a>
            </p>
        </div>

    </div>
</div>


<?php endforeach; ?>
