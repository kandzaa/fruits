<?php require 'views/components/head.php' ?>
<?php require 'views/components/navbar.php' ?>

<h1>Add a Fruit</h1>

<form method="POST" action="/create">
    <label>
        <span>Fruit: </span>
        <input type="text" name="name" value="<?= $_POST['name'] ?? '' ?>" required>
    </label>
    <label>
        <span>Calories: </span>
        <input type="number" name="calories" required>
    </label>
    <button type="submit">Create Fruit</button>
</form>

<?php require 'views/components/footer.php'; ?>
