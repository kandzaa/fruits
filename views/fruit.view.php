<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1><?php echo $fruit['name']?></h1>

<h2>It has <?php echo $fruit['calories']?> calories</h2>

<a href="/edit">Edit</a>
<?php require "views/components/footer.php"; ?>
