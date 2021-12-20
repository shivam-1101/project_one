<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <?= link_tag("Asset/css/bootstrap.min.css") ?>
</head>

<body>
    <?php include_once "nav.php"; ?>

    <div class="container my-5">
        <h1>Dashboard</h1>
    </div>
    <div class="container">
        <div class="table">
            <a href="addarticle" class="btn btn-lg btn-primary my-2">ADD ARTICLE</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Article Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>

                   
                        <?php foreach ($article as $art) : ?>
                            
                            <tr>
                                <td>1</td>
                                <td><?php echo $art->article_tittle; ?></td>
                                <td><a href="#" class="btn btn-primary">Edit</a></td>
                                <td><a href="#" class="btn btn-danger">Danger</a></td>
                            </tr>
                        <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>