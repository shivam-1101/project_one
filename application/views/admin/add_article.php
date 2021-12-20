<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Article</title>
    <?= link_tag("Asset/css/bootstrap.min.css") ?>

</head>

<body>
    <?php include_once "nav.php"; ?>

    <div class="container my-5 w-50 shadow p-5">
        <?php
        //  echo form_hidden('user_id',$this->session->userdata('id'))
         ?>
        <?php echo form_open('Admin/articlevalidation') ?>
        <div class="form-floating mb-3">
            <?php echo form_input(['class' => 'form-control', 'placeholder' => 'Article Title', 'name' => 'title', 'value' => set_value("title")]) ?>
            <label for="floatingInput">Article Title</label>
            <?php echo form_error('title'); ?>
        </div>

        <div class="form-floating">
            <!-- <input type="password" class="form-control" id="floatingPassword" placeholder="Password"> -->
            <?php echo form_textarea(['class' => 'form-control', 'placeholder' => 'Article', 'name' => 'article', 'value' => set_value("article"),'rows'=>'40','cols'=>'100']) ?>
            <label for="floatingPassword">Article</label>
            <?php echo form_error('article'); ?>
            <!-- ,'<div class="text-danger">','</div>' -->
        </div>


        <!-- <input type="button" value="submit" name="submit" class="btn btn-dark my-3"> -->
        <?php echo form_submit(['class' => 'btn my-3 border', 'value' => 'submit', 'name' => 'submit']) ?>

        <?php echo form_reset(['class' => 'btn btn-dark my-3', 'value' => 'reset']) ?>
       
    </div>
    <?php
    // echo validation_errors(); 
    ?>
</body>

</html>