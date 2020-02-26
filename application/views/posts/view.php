<h2 class="display-2"><?php echo $post['title']; ?></h2><br>
<h6 class="card-subtitle text-muted">Posted on: <?php echo $post['created_at']; ?></h6><br>
<img style="display: block;" src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image'];?>" alt="Post Image"><br>
<div class="post-body">
    <?php echo $post['body']; ?>
</div>

<?php if($this->session->userdata('user_id') == $post['user_id']): ?>
<hr>
<?php echo form_open('/posts/delete/'.$post['id']); ?>
<input type="submit" value="Delete" class="btn btn-danger">
<a class="btn btn-info" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
<?php echo form_close()?>
<?php endif; ?>
