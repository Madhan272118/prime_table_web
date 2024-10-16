<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Multiplication Table</title>
</head>
<body>
    <h1>Prime Multiplication Table</h1>
    <a href="<?= site_url('prime-table') ?>">Go back</a>
    <table border="1" cellpadding="5">
        <tr>
            <th></th>
            <?php foreach ($primes as $prime): ?>
                <th><?= $prime ?></th>
            <?php endforeach; ?>
        </tr>
        <?php foreach ($primes as $primeRow): ?>
            <tr>
                <th><?= $primeRow ?></th>
                <?php foreach ($primes as $primeCol): ?>
                    <td><?= $primeRow * $primeCol ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
