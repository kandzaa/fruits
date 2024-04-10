<?php require 'views/components/head.php' ?>
<?php require 'views/components/navbar.php' ?>

<h1>Edit Fruit</h1>

<?php if (!empty($fruit)): ?>
    <form method="POST" action="/update">
        <input type="hidden" name="id" value="<?= $fruit['id'] ?>">

        <label>
            <span>Fruit: </span>
            <input type="text" name="name" value="<?= $fruit['name'] ?>">
        </label>
        <label>
            <span>Calories: </span>
            <input type="number" name="calories" value="<?= $fruit['calories'] ?>">
        </label>
        <button type="submit">Update Fruit</button>
    </form>
<?php else: ?>
    <p>Fruit not found.</p>
<?php endif; ?>

<?php require 'views/components/footer.php'; ?>
