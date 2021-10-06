<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "<?php echo assets_css()?>style.css">
    <title>Document</title>
</head>

<body>
    <div class="header">
        <div class="header__title">
            <p>FPT learning system</p>
        </div>
    </div>
    <div class="container">
        <div class="container__header">
            <h1>Training Staff</h1>
        </div>
        <div class="container__option">
            <a href="<?php echo SITE_URL ?>index.php?controller=trainee&action=indexTrainee">Manage trainee</a>
            <a href="<?php echo SITE_URL ?>index.php?controller=course&action=index">Manage course</a>
            <a href="">Manage category</a>
            <a href="">Assign to course</a>
        </div>
    </div>

    <div class="footer">

    </div>
</body>

</html>