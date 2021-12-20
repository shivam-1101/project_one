<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <?= link_tag("Asset/css/bootstrap.min.css") ?>

</head>

<body>
    <?php include_once "nav.php"; ?>
    <div class="container w-50 my-5">
        <h1>Register form</h1>
        <?php echo form_open('Admin/registervalid')?>

        <div class="form-floating mb-3">
            <?php echo form_input(['name'=>'username','type'=>'input','value'=>set_value("username"),'class'=>'form-control','placeholder'=>'username']) ?>
            <label for="floatingInput">Username</label>
            <?php echo form_error('username'); ?>
        </div>

        <div class="form-floating mb-3">
            <?php 
            // echo form_password(['name'=>'password','type'=>'password','value'=>set_value("password"),'class'=>'form-control','placeholder'=>'password'])
             ?>
             <input type="password" class="form-control" name="password">
            <label for="floatingInput">Create Password</label>
            <?php echo form_error('password'); ?>
        </div>

        <div class="form-floating mb-3">
            <?php echo form_input(['name'=>'firstname','type'=>'input','value'=>set_value("firstname"),'class'=>'form-control','placeholder'=>'firstname']) ?>
            <label for="floatingInput">Firstname</label>
            <?php echo form_error('firstname'); ?>
        </div>

        <div class="form-floating mb-3">
            <?php echo form_input(['name'=>'lastname','type'=>'input','value'=>set_value("lastname"),'class'=>'form-control','placeholder'=>'lastname']) ?>
            <label for="floatingInput">Lastname</label>
            <?php echo form_error('lastname'); ?>
        </div>

        <div class="form-floating mb-3">
            <?php echo form_input(['name'=>'email','type'=>'input','value'=>set_value("email"),'class'=>'form-control','placeholder'=>'email']) ?>
            <label for="floatingInput">email</label>
            <?php echo form_error('email'); ?>
        </div>

        <?php echo form_submit(['class'=>'btn btn-primary','name'=>'submit', 'value'=>'submit']); ?>

    </div>
</body>

</html>