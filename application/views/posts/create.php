<h2><?= $title ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('posts/create'); ?>
<div class="form-group">
    <label class="col-form-label">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
</div>
<div class="form-group">
    <label>Body</label>
    <textarea id="editor1" class="form-control" name="body" rows="4"></textarea>
</div>
<div class="form-group">
    <label>Category</label>
    <select name="category_id" class="form-control">
        <?php foreach($categories as $category): ?>
        <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
        <?php endforeach; ?>
    </select><br>
    <div class="form-group">
        <div class="custom-file">
            <label>Upload image</label>
            <input type="file" class="form-control-file" name="userfile" size="20">
            <small id="fileHelp" class="form-text text-muted">You can upload an image with max size 500x500px and 20KB.</small>
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
<?php echo form_close()?>