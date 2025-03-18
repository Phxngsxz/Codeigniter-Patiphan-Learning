<h2><?= esc($title); ?></h2>

<?= \Config\Services::validation()->listErrors(); ?>

<a href="overview.php">Go back</a>
<hr>

<form action="/news/create" method="POST">
    <?= csrf_field(); ?>

    <label for="title"></label>
    <input type="input" name="title" id="">
    <br>

    <label for="body">Text</label>
    <textarea name="body" id="" cols="30" rows="10"></textarea>
    <br>

    <input type="submit " name="submit" value="Create news item">
</form>