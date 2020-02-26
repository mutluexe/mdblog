<?php echo form_open('users/login'); ?>
<div class="row justify-content-md-center">
    <div class="col-md-4">
        <h1 class="display-2"><?php echo $title; ?></h1><br>
        <div class="form-group">
           <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
        </div>
        <div class="form-group">
           <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block ">Login</button>
    </div>
</div>
<?php echo form_close(); ?>