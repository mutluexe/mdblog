<h2 class="display-2"><?= $title ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open('posts/update'); ?>
<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
<div class="form-group">
    <label class="col-form-label">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title'];?>">
</div>

<div class="form-group">    
    <label>Body</label>
    <textarea id="editor1" class="form-control" name="body" rows="4"><?php echo $post['body'];?></textarea>
</div>
<div class="form-group">
    <label>Category</label>
    <select name="category_id" class="form-control">
        <?php foreach($categories as $category): ?>
        <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
        <?php endforeach; ?>
    </select><br>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
<?php echo form_close()?>