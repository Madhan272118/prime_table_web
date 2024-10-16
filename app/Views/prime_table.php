<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Multiplication Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        
        h1 {
            color: #2c3e50;
            text-align: center;
        }

        h2 {
            color: #34495e;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th, td {
            border: 1px solid #bdc3c7;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #ecf0f1;
        }

        tr:hover {
            background-color: #d5dbdb;
        }

        .button {
            display: inline-block;
            padding: 10px 15px;
            margin: 20px auto;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #2980b9;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Multiplication Table of Prime Numbers</h1>
        <?php if (isset($userInput)): ?>
            <h2>Given Number: <?= esc($userInput) ?></h2>
        <?php endif; ?>
        <h2>Result:</h2>
        <table>
            <tr>
                <th></th>
                <?php foreach ($primes as $prime): ?>
                    <th><?= esc($prime) ?></th>
                <?php endforeach; ?>
            </tr>
            <?php foreach ($primes as $primeRow): ?>
                <tr>
                    <th><?= esc($primeRow) ?></th>
                    <?php foreach ($primes as $primeCol): ?>
                        <td><?= esc($primeRow * $primeCol) ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </table>
        <a href="<?= site_url('prime-table') ?>" class="button">Go Back</a>
    </div>
</body>
</html>

