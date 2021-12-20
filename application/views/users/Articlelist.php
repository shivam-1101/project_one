<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article List</title>
    <?= link_tag("Asset/css/bootstrap.min.css") ?>
</head>

<body>
    <?php include_once "nav.php"; ?>

    <!-- <div class="container my-5">
        <h1>All Articles</h1>
    </div> -->
    
    <?php foreach ($detail as $article) : ?>

        <div class="container shadow p-5 mt-5">
            <h3>
                <?php echo $article->article_tittle; ?>
            </h3>
            <p class="lead">
                <?php echo $article->article_body; ?>
            </p>
            <!-- <h6 class="small">By : Shivam Nagpal</h6> -->
        </div>

    <?php endforeach; ?>

</body>

</html>