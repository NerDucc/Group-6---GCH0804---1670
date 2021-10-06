<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="./table.css">
    <link rel="stylesheet" href = "<?php echo assets_css()?>table.css">
    <link rel="stylesheet" href="./grid.css">
    <link rel="stylesheet" href = "<?php echo assets_css()?>grid.css">
    <title>Document</title>
</head>

<body>
    <div class="header">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a href="<?php echo SITE_URL ?>index.php?controller=trainingstaff&action=index" class="navbar-brand"><i class="fas fa-home"></i></a>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light bg-dark" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
    <div class="grid wide">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                if(is_array($courses) && !empty($courses)){

                    foreach($courses as $keyCourse => $course){
                        ?>
                        <tr>
                        <th scope="row"><?php echo $course->id ?></th>
                        <td><?php echo $course->coursename ?></td>
                        <td><?php echo $course->coursecategory ?></td>
                        <td>
                            <a class="btn btn-outline-dark" href="<?php echo SITE_URL ?>index.php?controller=course&action=create">Add</a>
                            <a class="btn btn-outline-dark" href="<?php echo SITE_URL ?>index.php?controller=course&action=edit">Edit</a>
                            <a class="btn btn-outline-dark" href="<?php echo SITE_URL ?>index.php?controller=course&action=delete" onclick="return confirm('Are you sure')">Delete</a>
                        </td>
                    </tr>
                    <?php
                    }
                }
                    
                    
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>

</html>