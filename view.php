<?php

include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/view-style.css">
    <title>my BLOG</title>
</head>

<body>

    <div class="dark-overlay">

        <div class="container mt-3">

            <?php foreach ($query as $q) { ?>
                <div class=" text-white text-center title">
                    <h1><?php echo $q['title']; ?></h1>
                </div>
                <hr>

                <p class="mt-5 border-left border-dark pl-3"><?php echo $q['content']; ?></p>
            <?php } ?>



            <div class="action-buttons">
                <a href="index.php" class="btn btn-outline-secondary my-3">Go Home</a>
                <div class="d-flex mt-2 ">
                    <a href="edit.php?id=<?php echo $q['id'] ?>" class="btn btn-outline-info my-3 " name="edit">Edit File</a>
                    <form method="POST">
                        <input type="text" hidden value='<?php echo $q['id'] ?>' name="id">
                        <button class="btn btn-outline-danger my-3 ml-3" name="delete">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer">
            <p>Copyright &copy; 2021 - myBLOG</p>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>