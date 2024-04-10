<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>


<form>
    <span>Calories less than...</span>
    <input name='calories'>
    <button>Filter</button>
</form>

<h1>Fruits</h1>

<ul>
    <?php foreach ($fruits as $fruit): ?>
       <li>
           One <a href="/fruit?id=<?= $fruit['id'] ?>"><?= $fruit['name'] ?></a> has <?= $fruit['calories'] ?> calories
           <form method="POST" > 
               <input type="hidden" name="id" value="<?= $fruit['id'] ?>">
               <button type="submit">Delete</button>
           </form>
       </li>
    <?php endforeach; ?>
</ul>

<?php require "views/components/footer.php"; ?>
