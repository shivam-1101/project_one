<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin LogIn</title>
    <?= link_tag("Asset/css/bootstrap.min.css") ?>

</head>

<body>
    <?php include_once "nav.php"; ?>

    <div class="container my-5 w-50 shadow p-5">


        <?php if ($error = $this->session->flashdata('login_failed')) : ?>
            <div class="container alert alert-danger">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <?php echo form_open('admin/loginvalid') ?>
        <div class="form-floating mb-3">
            <?php echo form_input(['class' => 'form-control', 'placeholder' => 'Username', 'name' => 'username', 'value' => set_value("username")]) ?>
            <label for="floatingInput">Username</label>
            <?php echo form_error('username'); ?>
        </div>

        <div class="form-floating">
            <!-- <input type="password" class="form-control" id="floatingPassword" placeholder="Password"> -->
            <?php echo form_password(['class' => 'form-control', 'placeholder' => 'Password', 'name' => 'password', 'value' => set_value("password")]) ?>
            <label for="floatingPassword">Password</label>
            <?php echo form_error('password'); ?>
            <!-- ,'<div class="text-danger">','</div>' -->
        </div>


        <!-- <input type="button" value="submit" name="submit" class="btn btn-dark my-3"> -->
        <?php echo form_submit(['class' => 'btn my-3 border', 'value' => 'submit', 'name' => 'submit']) ?>

        <?php echo form_reset(['class' => 'btn btn-dark my-3', 'value' => 'reset']) ?>
        <?php echo anchor('admin/register/', 'sign up?', 'class="link-class"'); ?>
    </div>
    <?php
    // echo validation_errors(); 
    ?>
</body>

</html>