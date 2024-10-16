<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Multiplication Table</title>
</head>
<body>
    <h1>Prime Multiplication Table</h1>
    <?php if (session()->getFlashdata('error')): ?>
        <p style="color:red;"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>
    <form method="post" action="<?= site_url('prime-table/generate') ?>">
        <label for="number">Enter a whole number N:</label>
        <input type="number" id="number" name="number" min="1" required>
        <input type="submit" value="Generate">
    </form>
</body>
</html>
